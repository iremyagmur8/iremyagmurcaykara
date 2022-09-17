@extends('layouts.app-amp')
@section('title', $cData->posts->title." - ")
@section('desc',$cData->posts->shortdescription)
@section('content')
    @php use App\Http\Controllers\HomepageController @endphp
<main id="content" role="main" class="">
    <article class="recipe-article">
        <header>
            @isset($cData->posts->category->title)<span class="ampstart-subtitle block pt2 mb2">{{$cData->posts->category->title}}</span>@endisset
            <h1 class="mb1 ampstart-title-md mb4">{{$cData->posts->title}}</h1>

            <!-- Start byline -->
            <address class="ampstart-byline clearfix">
                <time style="font-size: 1em;"
                    class="ampstart-byline-pubdate block bold"
                    datetime="{{date("Y-m-d H:i",strtotime($cData->posts->updated_at))}}"
                >{{date("Y-m-d H:i",strtotime($cData->posts->updated_at))}}</time
                >
            </address>
            <!-- End byline -->
            @isset($cData->posts->files[0]->file)
            <amp-img
                src="{{HomepageController::webps($cData->posts->files[0]->file,"m")}}"
                width="1280"
                height="853"
                layout="responsive"
                alt="{{$cData->posts->title}}"
                class="mb4"
            ></amp-img>
            @endisset
        </header>
        {!! \App\Http\Controllers\HomepageController::ampify_iframe(\App\Http\Controllers\HomepageController::ampify_img($cData->posts->description)) !!}


<div class="p-v-15">
    <amp-ad width="100vw" height="320"
            type="adsense"
            data-ad-client="ca-pub-8941717516585426"
            data-ad-slot="7174824032"
            data-auto-format="rspv"
            data-full-width="">
        <div overflow=""></div>
    </amp-ad>
</div>




        @if(count($cData->posts->tags)>1)
            <section>
                <h2 class="mb3">Categories</h2>
                <ul class="list-reset p0 m0 mb4">
                @foreach($cData->posts->tags as $key=>$val)
                        <li class="mb2">
                            <a href="#" class="text-decoration-none h3">{{$val}}</a>
                        </li>
                @endforeach
                </ul>
            </section>
        @endif


        @if(count($cData->brands)>0)
            <h3 style="text-align: center; font-size: 25px; font-weight:bold; margin: 20px">Verwandte Artikel</h3>
            @foreach($cData->brands as $key=>$val)
<div style="margin-bottom: 15px; border-bottom: 1px solid #ccc; padding-bottom: 15px">
    <a href="https://neuesmodelauto.de/{{str_slug($val->title,"-")}}/{{$val->id}}.html">
                <h2 style="font-size: 23px; margin-top: 10px">{{$val->title}}</h2>
        @isset($val->posts->files[0]->file)
                <amp-img
                    src="{{HomepageController::webps($val->files[0]->file,"m")}}"
                    width="1280"
                    height="853"
                    layout="responsive"
                    alt="{{$val->title}}"
                    class="mb4"
                ></amp-img>
        @endisset
        <p>{{$val->shortdescription}}</p>
    </a>
</div>

                @if($loop->iteration % 2 == 0)

                    <div class="p-v-15">
                        <amp-ad width="100vw" height="320"
                                type="adsense"
                                data-ad-client="ca-pub-8941717516585426"
                                data-ad-slot="7174824032"
                                data-auto-format="rspv"
                                data-full-width="">
                            <div overflow=""></div>
                        </amp-ad>
                    </div>

                @endif
            @endforeach
        @endif




    </article>
</main>
@endsection
