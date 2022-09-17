@php
    use App\Http\Controllers\HomepageController
@endphp

<div class="col-md-4">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8941717516585426"
            crossorigin="anonymous"></script>
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
    <br>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8941717516585426"
            crossorigin="anonymous"></script>
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
    <div class="widget clearfix widget-archive">
        <div class="post-item border">
            <div class="post-item-wrap" style="padding: 10px">

                @if($vars->static)
                    <h4 class="widget-title">{{"Meistgesuchte Nachrichten"}}</h4>
                    <div class="post-thumbnail-list">
                        @foreach($vars->static as $key=>$val)
                            <div class="post-thumbnail-entry">
                                @isset($val->files[0]->file)
                                    <div style="background:url('{{HomepageController::webps($val->files[0]->file,"s")}}') center center; background-size:cover; height: 70px; width: 80px; display: inline-block; float:left;  margin-right:10px"></div>
                                @endisset
                                <div class="post-thumbnail-content">
                                    <a href="/{{str_slug($val->title,"-")}}/{{$val->id}}.html">{{$val->title}}</a>
                                    <span class="post-date"><i class="icon-clock"></i> {{$val->date}}</span>

                                </div>
                            </div>
                        @endforeach
                        <div class="clear"></div>
                    </div>
                    <hr>
                @endif
<hr>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8941717516585426"
                            crossorigin="anonymous"></script>
                    <!-- neuesmodelautos dikey -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8941717516585426"
                         data-ad-slot="1347782285"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                <h4 class="widget-title">Top Hits</h4>

                <div class="post-thumbnail-list">
                    @foreach($vars->hits as $key=>$val)
                        <div class="post-thumbnail-entry">
                            @isset($val->files[0]->file)
                                <div style="background:url('{{HomepageController::webps($val->files[0]->file,"s")}}') center center; background-size:cover; height: 70px; width: 80px; display: inline-block; float:left;  margin-right:10px"></div>
                            @endisset
                            <div class="post-thumbnail-content">
                                <a href="/{{str_slug($val->title,"-")}}/{{$val->id}}.html">{{$val->title}}</a>
                                <span class="post-date"><i class="icon-clock"></i> {{$val->date}}</span>

                            </div>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>
                <hr>

                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8941717516585426"
                            crossorigin="anonymous"></script>
                    <!-- neuesmodelautos dikey -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8941717516585426"
                         data-ad-slot="1347782285"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>

                <h4 class="widget-title">Letzte Nachrichten</h4>

                <div class="post-thumbnail-list">
                    @foreach($vars->recent as $key=>$val)
                        <div class="post-thumbnail-entry">
                            @isset($val->files[0]->file)
                                <div style="background:url('{{HomepageController::webps($val->files[0]->file,"s")}}') center center; background-size:cover; height: 70px; width: 80px; display: inline-block; float:left;  margin-right:10px"></div>
                            @endisset
                            <div class="post-thumbnail-content">
                                <a href="/{{str_slug($val->title,"-")}}/{{$val->id}}.html">{{$val->title}}</a>
                                <span class="post-date"><i class="icon-clock"></i> {{$val->date}}</span>
                            </div>
                        </div>
                    @endforeach
                    <div class="clear"></div>
                </div>

                <br style="clear: both">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8941717516585426"
                            crossorigin="anonymous"></script>
                    <!-- neuesmodelautos dikey -->
                    <ins class="adsbygoogle"
                         style="display:block"
                         data-ad-client="ca-pub-8941717516585426"
                         data-ad-slot="1347782285"
                         data-ad-format="auto"
                         data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
            </div>
        </div>
    </div>
</div>
