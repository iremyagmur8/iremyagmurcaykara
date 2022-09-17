@extends('layouts.app-mobile')
@section('title', $cData->posts->title." - ")
@section('desc',$cData->posts->shortdescription)
@section('content')
    @php use App\Http\Controllers\HomepageController @endphp
    <div class="post-item">
        @isset($cData->posts->files[0]->file)
            <div class="post-image">
                <a href="#">
                    <img width="100%" height="240" alt="{!! $cData->posts->title !!}"
                         src="{{HomepageController::webps($cData->posts->files[0]->file,"m")}}">
                </a>
            </div>
        @endisset

        <div class="container">
            <h2 class="title">{{$cData->posts->title}}</h2>
            <p style="margin-top: 20px">{{$cData->posts->shortdescription}}</p>
            <div class="post-meta">
                <span>{{$cData->posts->created_at}}</span><br>
                <span>{{$cData->posts->hit}} Hit</span><br>
                <span>{{$cData->posts->category->title}}</span><br>
            </div>
            <div style="margin: 15px">
                <!-- neuesmodelauto kare -->
                <ins class="adsbygoogle"
                     style="display:block"
                     data-ad-client="ca-pub-8941717516585426"
                     data-ad-slot="7174824032"
                     data-ad-format="auto"
                     data-full-width-responsive="true"></ins>
                <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});


                </script>
            </div>
            {!! str_replace('width="560"','width="100%"',$cData->posts->description) !!}
            @if(count($cData->posts->tags)>1)
                <div class="post-tags">
                    @foreach($cData->posts->tags as $key=>$val)
                        <a href="#">{{$val}}</a>
                    @endforeach
                </div>
            @endif
            @if(count($cData->brands)>0)
                <h3>Verwandte Artikel</h3>
                @foreach($cData->brands as $key=>$val)

                    @if($loop->iteration % 2 == 0)

                        <div style="margin: 15px">
                            <!-- neuesmodelauto kare -->
                            <ins class="adsbygoogle"
                                 style="display:block"
                                 data-ad-client="ca-pub-8941717516585426"
                                 data-ad-slot="7174824032"
                                 data-ad-format="auto"
                                 data-full-width-responsive="true"></ins>
                            <script>
                                            (adsbygoogle = window.adsbygoogle || []).push({});


                            </script>
                        </div>
                    @endif


                    @include("inc.mobil-postBox",['bVal'=>$val,"title"=>1,"height"=>200])
                @endforeach
            @endif
        </div>
    </div>

@endsection
