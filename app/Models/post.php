<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon;
use App\Http\Controllers\HomepageController;


class post extends Model
{
    use HasFactory;
    protected $with = ["files","brandtext"];
    protected $appends = ["tags","date","cover","descapi"];


    public function files() {
        return $this->hasMany('App\Models\files','type_id','id')->where("type","2")->orderBy('sort') ;
    }

    public function getCoverAttribute() {

        $img = files::where("type","2")->where("type_id",$this->id)->first();
       if($img) return "https://www.neuesmodelauto.de/" . HomepageController::webps($img->file,"l");
    }
    public function getBrandcoverAttribute() {
        if ($this->brandtext) {
        $img = files::where("type","1")->where("type_id",$this->brandtext->id)->first();

        return "https://www.neuesmodelauto.de/storage/images/userfiles/" . $img->file;
        }
        return "";

    }

    public function getBrandtitleAttribute() {

        $don="";
        if ($this->brandtext)  $don=$this->brandtext->title;

        return $don;
    }
    public function getTimeAttribute() {

        return Carbon\Carbon::parse($this->publish_time)->locale('de')->diffForHumans();
    }

    public function getDescapiAttribute() {


        return strip_tags(str_replace('"/storage','"https://www.neuesmodelauto.de/storage',$this->description),"<p><b><a><img>");
    }
    public function getYoutubeAttribute() {



        $links=[];
        $youtube=[];
        $html = $this->description;

        $pattern = '~[a-z]+://\S+~';
       preg_match_all($pattern, stripcslashes($html), $links);

       foreach ($links as $key=>$val) {
           foreach ($val as $key2=>$val2) {
               if (substr_count($val2, "youtu") > 0) {$don=explode("/", $val2);$youtube[] = str_replace('"',"",end($don));}
           }
       }

        //preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $this->description, $match);

        return $youtube;
       ;
    }



    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function category2()
    {
        return $this->belongsTo(category::class,"category2_id");
    }
    public function brandtext()
    {
        return $this->belongsTo(category::class,"brand","id");
    }
    public function getTagsAttribute()
    {
        return explode(",",$this->tag);
    }
    public function getDateAttribute()
    {
        return date("F j, Y, g:i a", strtotime($this->publish_time));
    }
}
