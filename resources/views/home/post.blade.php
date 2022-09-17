@extends('layouts.app')
@section('title')
@section('desc')
@section('content')

    <main>
        @isset($cData->post[0])
            <section class="position-relative bg-secondary text-white">
                <!--Divider shape bottom-->
                <svg class="position-absolute start-0 bottom-0 text-white" preserveAspectRatio="none" width="100%"
                     height="288" viewBox="0 0 1200 288" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                          d="M0 144L100 150C200 156 400 168 600 144C800 120 1000 60 1100 30L1200 0V288H1100C1000 288 800 288 600 288C400 288 200 288 100 288H0V144Z"
                          fill="currentColor"/>
                </svg>

                <div class="container pt-14 pb-9 position-relative z-index-1">
                    <div class="row pt-lg-5 pb-7 align-items-center">
                        <div class="col-lg-10 mx-auto text-center">
                            @isset($cData->post[0]->title)
                                <h1 class="display-2 mb-4">
                                    {{$cData->post[0]->title}}
                                </h1>
                            @endisset

                            @isset($cData->post[0]->shortdescription)
                                <p class="mb-11 mb-lg-14 lead w-lg-80 mx-auto">{{$cData->post[0]->shortdescription}}</p>
                            @endisset
                            <a href="#next"
                               class="text-mutedtext-dark width-8x height-8x shadow bg-white rounded-circle flex-center d-flex text-center mx-auto">
                                <div class="link-arrow-bounce">
                                    <i class="bx bx-down-arrow-alt fs-4"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                    <!--/.end-row--->
                </div>
                <!--/.End-content-->
            </section>
        @endisset
        <section class="position-relative overflow-hidden" id="next">
            <div class="container py-9 py-lg-11">
                @isset($cData->post)
                    @foreach($cData->post as $key=>$val)
                        @if(!$loop->first)
                            <div class="row justify-content-md-around mb-7 mb-lg-11 align-items-center">
                                <div class="col-md-6 mb-5 mb-md-0 @if($loop->iteration % 2 == 0) order-md-last @endif"
                                     data-aos="fade-left" data-aos-delay="100">
                                    <img
                                        src="https://images.pexels.com/photos/5938255/pexels-photo-5938255.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        class="img-fluid rounded-blob shadow-lg" alt="">
                                </div>
                                <div class="col-md-4 @if($loop->iteration % 2 == 0) order-md-1 @endif"
                                     data-aos="fade-right" @if($loop->iteration % 2 == 0) data-aos-delay="100" @endif>
                                    <div class="d-flex align-items-center mb-4">
                                        @isset($val->title)
                                            <h1 class="mb-0 display-6">
                                                {{$val->title}}
                                            </h1>
                                        @endisset
                                    </div>
                                    @isset($val->shortdescription)

                                        <p class="mb-4">
                                            {{$val->shortdescription}}
                                        </p>
                                    @endisset
                                    @isset($val->link)
                                        @php
                                            $links = explode("," ,  $val->link);
                                            $f= 0
                                        @endphp
                                        <ul class="list-unstyled text-dark">
                                            @foreach($links as $key=>$val)
                                                <li class="d-flex align-items-center @if($loop->last) @else mb-3 @endif">
                                                    <i class="bx bx-check-circle fs-4 opacity-50 me-2"></i>
                                                    <span>{{$val}}</span>
                                                    @php($f++)
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endisset
                                </div>
                                <!--/.End Col-->
                            </div>
                        @endif
                    @endforeach
                @endisset
            </div>

        </section>

        <section class="position-relative bg-secondary text-white overflow-hidden">

            <!--Divider shape top-->
            <svg class="position-absolute start-0 top-0 flip-y text-white" width="100%" height="48"
                 preserveAspectRatio="none" viewBox="0 0 1870 210" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                      d="M977.9,76.2 C475.2,-17.4 0.2,132.5 0.2,132.5 L0.2,275.5 L1891.3,275.5 L1891.3,0.7 C1891.3,0.7 1480.6,169.8 977.9,76.2 Z"></path>
            </svg>
            <!--Divider shape bottom-->
            <svg class="position-absolute start-0 bottom-0 text-white" width="100%" height="48"
                 preserveAspectRatio="none" viewBox="0 0 1870 210" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor"
                      d="M977.9,76.2 C475.2,-17.4 0.2,132.5 0.2,132.5 L0.2,275.5 L1891.3,275.5 L1891.3,0.7 C1891.3,0.7 1480.6,169.8 977.9,76.2 Z"></path>
            </svg>
            <div class="container position-relative z-index-1 py-12 py-lg-18">
                <h2 class="display-4 mb-5 mb-lg-9">İlginizi Çekebilir...</h2>
                <div class="row pb-4 justify-content-center">
                    @isset($cData->next )
                        @foreach($cData->next as $key=>$val)
                            <div class="col-lg-4 mb-7 @if($loop->last) @else mb-lg-0 @endif" data-aos="fade-up">
                                <div class="h-100">
                                    <h5 class="mb-3">{{$val->title}}</h5>
                                    <p class="mb-3 flex-grow-1 text-muted" style="    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    overflow:hidden;
">
                                        {{$val->shortdescription}}
                                    </p>
                                    <div class="d-inline-flex align-items-center">
                                        <a href="{{"/".str_slug($val->title,"-")."/".$val->id.".htm"}}"
                                           class="link-underline">Daha Fazlası İçin
                                            <i class="bx bx-chevron-right fs-4"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
            <!--End container-->
        </section>
    </main>

@endsection
