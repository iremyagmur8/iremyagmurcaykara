@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    <main class="main-content" id="main-content">
        @isset($cData->post)
            <section class="position-relative bg-gradient-secondary text-white z-index-1">
                <svg class="position-absolute text-white end-0 bottom-0" preserveAspectRatio="none" width="140%"
                     height="100%" viewBox="0 0 352 352" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path opacity="0.1"
                          d="M352 0C258.644 -1.11326e-06 169.111 37.0856 103.098 103.098C37.0856 169.111 8.16146e-06 258.644 0 352L352 352V0Z"
                          fill="currentColor"/>
                    <path opacity="0.1"
                          d="M352 26.7681C265.743 26.7681 183.019 61.0335 122.026 122.026C61.0335 183.019 26.7681 265.743 26.7681 352L352 352V26.7681Z"
                          fill="currentColor"/>
                    <path opacity="0.025"
                          d="M352 53.5361C272.842 53.5361 196.927 84.9813 140.954 140.954C84.9813 196.927 53.5361 272.842 53.5361 352L352 352V53.5361Z"
                          fill="currentColor"/>
                </svg>
                <div class="container position-relative pt-12 pt-lg-15 pb-lg-12">
                    <div class="row align-items-center pt-lg-5 pb-12">
                        <div class="col-lg-10  text-center mx-auto position-relative z-index-1">
                            @isset($cData->post->buttontext)
                                <span
                                    class="badge bg-white text-body rounded-pill py-2 lh-sm px-4 mb-4">{{$cData->post->buttontext}}</span>
                            @endisset
                            @isset($cData->post->bannerdescription)
                                <p class="display-4 fw-semibold mb-4">
                                    {{$cData->post->bannerdescription}}
                                </p>
                            @endisset
                                @isset($cData->post->bannertitle)
                                <div>
                                    <h5 class="mb-2">
                                        {{$cData->post->bannertitle}}</h5>
                                </div>
                            @endisset
                        </div>
                    </div>
                </div>
            </section>
        @endisset
        <section class="position-relative">
            <div class="container pt-9 pt-lg-0 pb-9 pb-lg-11 position-relative z-index-1">
                <div class="row">
                    <div class="col-lg-4 col-xl-3 me-xl-auto mb-5 mb-lg-0">
                        <div class="sticky-top top-0">
                            <div class="card h-100 p-3 mt-n15 position-relative">
                                <div class="pb-4 mb-4 border-bottom">
                                    <img
                                        src="https://images.pexels.com/photos/38554/girl-people-landscape-sun-38554.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                        alt="" class="width-14x h-auto mx-auto d-block" style="border-radius:100%">
                                </div>
                                <ul class="list-unstyled small mb-0">
                                    @isset($cData->post->title)
                                    <li class="d-flex justify-content-between align-items-stretch pb-3 mb-3  border-bottom">
                                        <span class="pe-2 text-muted">Name</span>
                                        <p class="fw-normal mb-0">{{$cData->post->title}}</p>
                                    </li>
                                    @endisset
                                    <li class="d-flex justify-content-between align-items-stretch pb-3 mb-3  border-bottom">
                                        <span class="pe-2 text-muted">Industry</span>
                                        <p class="fw-normal mb-0">Co-working space</p>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-stretch pb-3 mb-3  border-bottom">
                                        <span class="pe-2 text-muted">Industry</span>
                                        <p class="fw-normal mb-0">Co-working space</p>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-stretch">
                                        <span class="pe-2 text-muted">Industry</span>
                                        <p class="fw-normal mb-0">Co-working space</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="pt-lg-11 h-100 panel-prg d-flex flex-column">
                            @isset($cData->post->title)
                                <h3 class="mb-4">{{$cData->post->title}}</h3>
                            @endisset
                            @isset($cData->post->shortdescription)
                                <p>
                                    {{$cData->post->shortdescription}}
                                </p>
                            @endisset
                            <img
                                src="https://images.pexels.com/photos/4021775/pexels-photo-4021775.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2"
                                class="img-fluid rounded-4 shadow-xl mb-7" alt="">
                            @isset($cData->post->description)
                                {!! $cData->post->description !!}
                            @endisset

                        </div>
                    </div>
                </div>
            </div>
        </section>
        @isset($cData->customers)
            <section class="position-relative bg-gradient-secondary text-white">
                <div class="container py-9 py-lg-11">
                    <h1 class="text-center display-5 mb-5 mb-lg-7">{{$cData->customers[0]->category->title}}</h1>
                    <div class="row">
                        @foreach($cData->customers as $key=>$val)
                            <div class="col-lg-4 mb-5 @if($loop->last) @else mb-lg-0 @endif">
                                <div class="p-2 border border-secondary rounded-3">
                                    <div class="position-relative mb-4 rounded-3 overflow-hidden">
                                        <img
                                            src="https://images.pexels.com/photos/2280568/pexels-photo-2280568.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2s"
                                            class="img-fluid" alt="">
                                    </div>

                                    <div class="card-body pt-2">
                                        @isset($val->shortdescription)
                                            <p class="lead mb-4 pb-3 border-bottom border-secondary">
                                                {{$val->shortdescription}}
                                            </p>
                                        @endisset
                                        <div class="text-end">
                                            <a href="#!" class="btn btn-sm btn-white">Devamını Oku</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endisset
    </main>@endsection
