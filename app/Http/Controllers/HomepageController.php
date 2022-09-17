<?php

namespace App\Http\Controllers;

use App\Models\banner;
use App\Models\post;
use App\Models\doctor;
use Illuminate\Http\Request;
use Image;
use File;
use App;
use Illuminate\Support\Facades\Config;
use Revolution\Amazon\ProductAdvertising\Facades\AmazonProduct;
use Mail;
use Str;

class HomepageController extends Controller
{
    public function clocal()
    {
        session()->put('lang', request("lang"));
        app()->setLocale(request("lang"));
        return redirect("/");

    }

    public function index()
    {
        $cData = new \ArrayObject();
        $banners = banner::orderBy('place')->orderBy('sort')->get();
        foreach ($banners as $key => $val) {
            $cData->place[$val->place][] = $val;
        }
        $cData->data = post::where('publish_time', "<", date("Y-m-d H:i:s"))->orderByDesc('publish_time')->limit(45)->get();
        // if ($this->ismobile()) return view('home.mobil-index', ['cData' => $cData]);
        return view('home.index', ['cData' => $cData]);
    }

    public function mail(Request $request)
    {

        $to_name = Str::title((request('name')));
        $to_email = "hello@iremyagmurcaykara.com";
        $data = array("name" => request('name'), "body" => request('subject'));
        Mail::send("emails.newuser", $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject("İrem Yağmur Çaykara Subject");
            $message->from("hello@iremyagmurcaykara.com", "İrem Yağmur Çaykara");
        });
        return redirect("/");
    }


}
