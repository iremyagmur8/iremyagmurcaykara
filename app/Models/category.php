<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class category extends Model
{
    use HasFactory,SoftDeletes;

    public $fillable = ['title','parent_id','sort','description','active','type'];
    protected $appends = ["cover"];

    public function childs() {
        return $this->hasMany('App\Models\Category','parent_id','id')->orderBy('sort') ;
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getCoverAttribute() {

        $img = files::where("type","1")->where("type_id",$this->id)->first();
if ($img)  return "https://www.neuesmodelauto.de/storage/images/userfiles/" . $img->file;
else return "https://www.neuesmodelauto.de/images/noimage.webp";

    }

    public function files() {
        return $this->hasMany('App\Models\files','type_id','id')->where("type","1")->orderBy('sort') ;
    }

}
