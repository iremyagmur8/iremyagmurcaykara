@extends('layouts.app')
@section('title','')
@section('desc','')
@section('content')
    <main>
        <!--page-hero-->
        <section class="position-relative overflow-hidden bg-dark text-white" data-scroll-section>

            <!--Svg gradient background-->
            <svg xmlns="http://www.w3.org/2000/svg" class="position-absolute start-0 top-0 w-100 h-100"
                 preserveAspectRatio="none" viewBox="0 0 700 700" width="700" height="700" opacity="0.33">
                <defs>
                    <linearGradient gradientTransform="rotate(136, 0.5, 0.5)" x1="50%" y1="0%" x2="50%"
                                    y2="100%" id="ffflux-gradient">
                        <stop stop-color="hsl(347, 100%, 72%)" stop-opacity="1" offset="0%"></stop>
                        <stop stop-color="hsl(227, 100%, 50%)" stop-opacity="1" offset="100%"></stop>
                    </linearGradient>
                    <filter id="ffflux-filter" x="-20%" y="-20%" width="140%" height="140%"
                            filterUnits="objectBoundingBox" primitiveUnits="userSpaceOnUse"
                            color-interpolation-filters="sRGB">
                        <feTurbulence type="fractalNoise" baseFrequency="0.006 0.004" numOctaves="2" seed="2"
                                      stitchTiles="stitch" x="0%" y="0%" width="100%" height="100%" result="turbulence">
                        </feTurbulence>
                        <feGaussianBlur stdDeviation="0 0" x="0%" y="0%" width="100%" height="100%"
                                        in="turbulence" edgeMode="duplicate" result="blur"></feGaussianBlur>
                        <feBlend mode="hard-light" x="0%" y="0%" width="100%" height="100%" in="SourceGraphic"
                                 in2="blur" result="blend"></feBlend>
                        <feColorMatrix type="saturate" values="3" x="0%" y="0%" width="100%" height="100%"
                                       in="blend" result="colormatrix"></feColorMatrix>
                    </filter>
                </defs>
                <rect width="700" height="700" fill="url(#ffflux-gradient)" filter="url(#ffflux-filter)"></rect>
            </svg>
            <div class="container position-relative z-index-1">
                <div class="row vh-100 align-items-center">
                    <div class="col-xl-10 mx-auto">
                        <div class="d-inline-flex">
                            <ul class="js-hover-img">
                                <li class="js-hover-img-item">
                                    <h1 class="js-hover-img-link display-1 mb-0">
                                        <small class="fs-4 ls-1 fw-normal">👋{{__("gnl.Hi, I am")}} İrem Yağmur Çaykara</small><br>
                                        {{__("gnl.Freelance Web Designer and Frontend Developer")}}
                                    </h1>
                                    <img
                                        src="https://images.pexels.com/photos/3861969/pexels-photo-3861969.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                        alt="Image" class="img height-2x0 w-auto">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="position-relative overflow-hidden bg-dark text-white" id="about-me" data-scroll-section>
            <div
                class="width-20x height-2xx position-absolute end-0 bottom-0 me-3 mb-n4 bg-info d-none d-md-block rounded-circle"
                data-scroll data-scroll-direction="vertical" data-scroll-speed="6">
            </div>
            <div
                class="width-20x height-2xx position-absolute start-0 top-0 me-3 mt-n4 bg-primary d-none d-md-block rounded-circle opacity-75"
                data-scroll data-scroll-direction="vertical" data-scroll-speed="6">
            </div>
            <div class="container py-12 position-relative">
                <div class="row mb-7 mb-lg-11 align-items-center justify-content-center">
                    <div class="col-xl-10 text-center mb-5 mb-md-0">
                        <h2 class="mb-0 display-8 fw-normal" data-scroll data-scroll-direction="vertical"
                            data-scroll-speed="3">
                            👋 {{__("gnl.I'm İrem Yağmur Çaykara, Frontend Developer, I develop websites (including management panel) from scratch or optionally with PHP(Laravel framework) and React Js.")}}
                        </h2>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!--Feature column-->
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <div
                            class="flex-center width-6x height-6x rounded-circle border border-secondary text-muted lh-1 fw-semiold small mb-4">
                            01
                        </div>
                        <h5 class="mb-3">{{__("gnl.Planing")}}</h5>

                        <p class="mb-0 w-lg-100">
                            {{__("gnl.First of all, a good research is done about the design agency / firm. A draft is created during the design plan of the site. Design plans suitable for company colors and sector are realized. At the last stage, all the prepared data is sent to Hosting via an FTP program and the test phase is started.")}}
                        </p>
                    </div>

                    <!--Feature column-->
                    <div class="col-12 col-md-4 mb-5 mb-md-0">
                        <div
                            class="flex-center width-6x height-6x rounded-circle border border-secondary text-muted lh-1 fw-semiold small mb-4">
                            02
                        </div>
                        <h5 class="mb-3">{{__("gnl.Design & Development")}}</h5>
                        <p class="mb-0 w-lg-100">
                            {{__("gnl.At this stage, the web designer realizes the technical requirements of the entire infrastructure of the site, and the coding stage begins. The control panel of the website is created and the product - picture - video - news can be added. At the last stage, all the prepared data is sent to Hosting via an FTP program and the test phase is started.")}}
                        </p>
                    </div>

                    <!--Feature column-->
                    <div class="col-12 col-md-4">
                        <div
                            class="flex-center width-6x height-6x rounded-circle border border-secondary text-muted lh-1 fw-semiold small mb-4">
                            03
                        </div>
                        <h5 class="mb-3">{{__("gnl.Testing & Launch")}}</h5>
                        <p class="mb-0 w-lg-100">
                            {{__("gnl.At this stage, it is tested whether the prepared data of the site works correctly, the problems in the designs are checked, it is checked whether any mistakes have been made during the programming and possible deficiencies are eliminated.

In addition, requests and changes are determined in communication with the company and the person.

As a result of all stages, the site is launched. And regular checks are carried out against possible problems. Updates and campaign applications are made.")}}
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative overflow-hidden bg-dark text-white" data-scroll-section>
            <div class="container py-9 py-lg-11 position-relative z-index-1">
                <div class="row align-items-stretch">
                    <div class="col-md-10 col-xl-6 order-last">
                        <h3 class="mb-5 display-4 fw-normal mt-n15 mt-lg-0 position-relative ms-lg-n16 z-index-1"
                            data-scroll data-scroll-direction="vertical" data-scroll-speed="1">
                            {{__("gnl.My creative journey started at VBT Yazılım A.Ş., where I worked for the last years. In particular, We have accomplished great things with people and my colleagues from many countries of the world.")}}
                        </h3>
                    </div>
                    <div class="col-md-6 order-1 position-relative">
                        <div class="overflow-hidden position-relative" data-scroll
                             data-scroll-direction="vertical" data-scroll-speed="5">
                            <img
                                src="https://images.pexels.com/photos/1779487/pexels-photo-1779487.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                                alt="" class="img-fluid flip-x d-block">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="position-relative bg-dark text-white" id="portfolio" data-scroll-section>

            <div
                class="width-20x height-2xx position-absolute end-0 bottom-0 me-3 mt-n4 bg-secondary d-none d-md-block rounded-circle"
                data-scroll data-scroll-direction="vertical" data-scroll-speed="6">
            </div>
            <div class="py-9 py-lg-11 container position-relative z-index-1">
                <div class="row mb-7">
                    <div class="col-lg-6">
                        <h2 class="display-3 mb-4">{{__("gnl.Featured Projects")}}</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="#!" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img
                                    src="https://t3.ftcdn.net/jpg/01/69/53/04/360_F_169530417_CJRpQhOQDwUwPXF9l3SkgX0qQZXtxABz.jpg"
                                    alt="" class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Index A.Ş.</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Index A.Ş. distributes products of global technology giants such as Apple, HP, Lenovo, Oppo, OnePlus, Canon, LG, Microsoft, Intel, Asus, Acer, Epson, Western Digital, Sandisk, Kingston, Panasonic and Netatmo to anywhere in Turkey with over 8000 business partners")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://doktor.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/doktor-vi-min-min.webp" alt=""   class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Doktor Vi</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.An application that allows the user to meet with doctors in different fields.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 mb-5" data-scroll>
                        <!--Card-->
                        <a href="https://uniresi.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/uniresi-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Uniresi</h5>
                                    </li>
                                    <li><span
                                            class="text-muted">{{__("gnl.The largest student housing provider in Turkey.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://solarispos.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/give-an-order-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Give an Order</h5>
                                    </li>
                                    <li><span class="text-muted">
                                            {{__("gnl.Inventory Management, Current Movements, Pre-Accounting, Personnel Transactions, Track Your Delivery Service in your company ... With an infrastructure that is powerful enough to do all of this in a single system, Give an Order is easy to use and simple interface that allows you to adapt to the system for minutes without any training.")}}
                                        </span></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <!--Card-->
                        <a href="http://www.aesthplusturkey.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/aesthplusturkey-min-min.webp"  alt="" class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Aesth Plus Turkey</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.A beauty center that provides various cosmetic treatments, cosmetic services, general skin care services.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://findminijob.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/findminijob-min-min.webp"  alt="" class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Find Mini Job</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Choose from 20,000+ jobs per week, in all kinds of different sectors.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://peradis.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/peradis-min-min.webp"  alt="" class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Peradiş</h5>
                                    </li>
                                    <li><span class="text-muted">
                                            {{__("gnl.Oral and dental health clinic")}}
                                        </span></li>
                                </ul>
                            </div>
                        </a>
                    </div>

                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://aesthplusclinic.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/aesthplusclinic-min-min.webp"  alt="" class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Aesth Plus Clinic</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.A beauty center that provides various cosmetic treatments, cosmetic services, general skin care services.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="http://swiss.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/swiss-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Swiss Safety Center</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.As part of the SVTI Group, Swiss Safety Center AG is committed to providing industry-specific services, products and qualifications in the areas of safety, quality and management systems.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://platform.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/platform-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">DormitoryInn</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.A trusted Turkish university partner specializing in Undergraduate, Postgraduate, Topbridge, Medicine, Dentistry and Pharmacy, Art and Design and PhD applications.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="http://yeni.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/karip-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Karip Network</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.The firm is provides services in Web Design, Mobile Applications, Software, E-Commerce, Seo Services, Catalog Design, Logo Design, Social Media and Internet Advertising, Promotional and Advertising Films, Animation, Product Photography and Educational Films")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://afi.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/afi-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Afi Elektromekanik</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.The firm is an independent stocking distributor of steel pipes, fittings and accessories.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://www.monilabb.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/monilabb-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Monilabb</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Monilabb is a next generation Athlete Monitoring & Risk Prediction System developed with data driven and AI based algorithms to prevent injuries and underperformance in sports.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://easykochrezepte.de/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/yemek-tarifleri-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">EasyKochRezepte</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.A platform where ready-made recipes are shared")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://hepsihaber.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/hepsihaber-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Hepsi Haber</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.News website")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://www.prosperglobalconsulting.com/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/prosperglobal-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Propser Global Consulting</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Prosper Global Consulting LLC, with its staff consisting of individuals and teams, each of whom are experts in their own fields, provides full-scale company management and consultancy services on creation of e-commerce infrastructure necessary for the management of the Legal, Financial and Operational processes of corporate companies in the international arena and preservation of their sustainable structure.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://www.selektifiz.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/selektifiz-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Selektifiz İletişim & Danışmanlık</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Selektifiz İletişim Danışmanlık A.Ş. It is a full service agency that brings together expert journalists, academics, communicators, writers, graphic designers and software developers.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://alarm.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/alarm-min-min.webp"  alt="" class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Alarm</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Alarm brand fire cabinets are used in the most important projects of our country, Airports Tunnels, Metros, Petrochemical Facilities, Branded Housing Projects, Industrial Organizations, Hospitals and many other facilities and structures.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://www.egesaati.com.tr/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/egesaati-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Ege Saati</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.News website")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://siyamer.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/siyamer-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Siyamer</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.SİYAMER, with its researches on the general situation of politics in Turkey, expectations about the future, monitoring the changes in voter preferences, the performances of political parties and local governments, the latest vote rates of the parties, changes in preferences, making policy-based observations, making predictions for the future. It guides those who want to determine the deficiencies and what needs to be done in order to reach the target or to reach the target with a broad perspective.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://taspark.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/taspark-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">Taşpark</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Taspark; It provides services to all of Turkey in areas such as pedestrian walkways, sidewalks, border elements and modern urban furniture.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-6 mb-5" data-scroll>
                        <a href="https://eyg.karip.net/" target="_blank"
                           class="d-block text-reset overflow-hidden position-relative card-hover">
                            <div class="overflow-hidden bg-primary card-reveal-effect">
                                <img src="/images/websites/eyg-min-min.webp" alt=""  class="img-fluid img-zoom">
                            </div>
                            <div class="card-body pt-4 pb-0">
                                <ul class="list-unstyled mb-0">
                                    <li>
                                        <h5 class="fs-4 mb-1">EYG</h5>
                                    </li>
                                    <li><span class="text-muted">{{__("gnl.Gathering the brands Evvel Istanbul, Adım Istanbul, Evdeki Fırsat, Kentsel Yönetim and Narlı Bahçe Evleri under its roof, EYG is Turkey's Housing Specialist, operating in a wide range of areas from project production to sales and after-sales services in the real estate sector.")}}</span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </section>
        <section class="position-relative bg-dark text-white overflow-hidden" data-scroll-section>
            <div
                class="width-20x height-2xx position-absolute start-0 bottom-0 me-3 mt-n4 bg-secondary d-none d-md-block rounded-circle"
                data-scroll data-scroll-direction="vertical" data-scroll-speed="6">
            </div>
            <div class="container py-9 py-lg-11">
                <div class="swiper-container overflow-hidden position-relative swiper-partners-4 pb-9">
                    <div class="swiper-wrapper d-flex align-items-center">
                        <div class="swiper-slide">
                            <img class="d-block img-fluid mx-auto px-2"
                                 src="https://www.paramevzu.com/storage//uploads/1/2/6/750x303/index-grupta-atama-1650874164.gif"
                                 alt="">
                        </div>
                        <div class="swiper-slide text-center">
                            <a target="_blank" href="https://doktor.karip.net/">Doktor Vi</a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://uniresi.com/">
                                <svg xmlns:xlink="https://www.w3.org/1999/xlink" xmlns="https://www.w3.org/2000/svg"
                                     viewBox="0 0 182 59" class="logo-svg" style="fill:#fff">
                                    <defs>
                                        <clipPath id="b">
                                            <use xlink:href="#a"></use>
                                        </clipPath>
                                        <path d="M0 0h182v59H0V0z" id="a"></path>
                                    </defs>
                                    <path d="M0 0h182v59H0V0z" fill="none"></path>
                                    <g clip-path="url(#b)">
                                        <path
                                            d="M62.81 21.96v11.21a6.27 6.27 0 001.51 4.37 5.91 5.91 0 008.36-.17 6.51 6.51 0 001.64-4.5V21.96h4.37v21h-4l-.25-3.1a9.27 9.27 0 01-7.22 3.4 8.23 8.23 0 01-6.39-2.68 10.51 10.51 0 01-2.44-7.34V21.96h4.42zm34.94 20.93V31.65a6.28 6.28 0 00-1.49-4.39 5.33 5.33 0 00-4.16-1.61 5.41 5.41 0 00-4.2 1.83 6.39 6.39 0 00-1.66 4.45v11h-4.37v-21h4l.26 3a9.14 9.14 0 017-3.35 8.53 8.53 0 016.48 2.67 10.29 10.29 0 012.55 7.4v11.24h-4.41zm8.1-29.46a2.85 2.85 0 012.72 0 2.42 2.42 0 011.36 2.37 2.46 2.46 0 01-1.36 2.4 2.8 2.8 0 01-2.72 0 2.47 2.47 0 01-1.35-2.4 2.42 2.42 0 011.35-2.37zm-.85 8.44v21h4.37v-21H105zm11.64.09l.29 2.76c1.22-2.153 3.273-3.23 6.16-3.23a7.53 7.53 0 015.18 1.78l-2 3.83a6.08 6.08 0 00-7.72.21 5.46 5.46 0 00-1.62 4.24v11.34h-4.37V21.96h4.08zm15.11 12.1a5.51 5.51 0 002.14 3.82 7.39 7.39 0 004.69 1.44 10.13 10.13 0 003.42-.61 6.6 6.6 0 002.65-1.64l2.84 2.76a10.349 10.349 0 01-4 2.63c-1.593.623-3.29.942-5 .94a11.23 11.23 0 01-8.21-3 10.78 10.78 0 01-3.08-8.06 10.64 10.64 0 013.06-7.86 10.76 10.76 0 017.94-3.05c3.513 0 6.243 1.073 8.19 3.22 1.947 2.147 2.723 5.29 2.33 9.43l-16.97-.02zm12.77-3.7a5 5 0 00-1.84-3.71 7.63 7.63 0 00-8.58 0 6 6 0 00-2.27 3.73l12.69-.02zm19.27-3.26a7.78 7.78 0 00-5.52-2 6.46 6.46 0 00-3.24.62 2.06 2.06 0 00-1.21 1.93c0 1.5 1.54 2.39 4.54 2.67 1.035.087 2.063.238 3.08.45.95.21 1.876.522 2.76.93a4.94 4.94 0 012.25 2 6.19 6.19 0 01.78 3.22 5.86 5.86 0 01-2.46 4.8 10.42 10.42 0 01-6.45 1.82c-4.08 0-7.263-1.287-9.55-3.86l2.29-3.1a9.66 9.66 0 007.34 3.07 6.719 6.719 0 003.1-.68 2.26 2.26 0 001.36-2 2 2 0 00-1.17-2 10.4 10.4 0 00-3.67-.89c-5.66-.54-8.503-2.637-8.53-6.29a5.2 5.2 0 012.65-4.77 11.55 11.55 0 016.05-1.59 11.68 11.68 0 018.07 2.8l-2.47 2.87zm5.9-13.67a2.85 2.85 0 012.72 0 2.43 2.43 0 011.36 2.37 2.47 2.47 0 01-1.36 2.4 2.8 2.8 0 01-2.72 0 2.47 2.47 0 01-1.36-2.4 2.43 2.43 0 011.36-2.37zm-.85 8.44v21h4.37v-21h-4.37zM41.5 38.45L29 50.91 16.58 38.45a1 1 0 00-1.45 0 1 1 0 000 1.46L28.31 53.1c.196.19.457.298.73.3a1 1 0 00.73-.3L43 39.91a1.047 1.047 0 00-1.5-1.46zm-31.06-9.37a1 1 0 00.89-1.15 17.86 17.86 0 1135.42-.006 1 1 0 00.89 1.146h.13a1 1 0 001-.9c.132-.834.209-1.676.23-2.52a19.851 19.851 0 00-5.84-14.08 19.92 19.92 0 00-33 7.79 20.13 20.13 0 00-.85 8.82 1 1 0 001.13.9z"></path>
                                        <path
                                            d="M49.81 36.94l-8.09-8.09v-5.57a1.03 1.03 0 10-2.06 0v3.51l-9.89-9.89a1 1 0 00-1.46 0l-20 20a1.025 1.025 0 101.45 1.45L29 19.08l19.35 19.31a1 1 0 001.46 0 1 1 0 000-1.45z"></path>
                                    </g>
                                </svg>
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://aesthplusturkey.com/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="http://docs.kariyer.net/job/jobtemplate/000/000/218/avatar/21816220200131041249243.jpeg"
                                     alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://alarm.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://alarm.karip.net/images/logo.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://yeni.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://yeni.karip.net/images/logo-white.png" alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://solarispos.com/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://solarispos.com/images/logo-dark.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://eyg.karip.net/">
                                <img style="height: 130px" class="d-block img-fluid mx-auto px-2"
                                     src="https://www.eyggrup.com/assets/img/logo.png"
                                     alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://afi.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2" src="https://afi.karip.net/images/logo.png"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://bupar.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://bupar.karip.net/images/logo.png"
                                        alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://www.monilabb.com/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://www.monilabb.com/images/logo-dark.png"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide text-center">
                            <a target="_blank" href="https://easykochrezepte.de/">
                                EasyKochRezepte
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://egesaati.com.tr/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://www.egesaati.com.tr/wp-content/uploads/2022/05/ege-saati-logo-beyaz-1.png"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://platform.karip.net/" target="_blank">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://platform.karip.net/images/logo.png"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://hepsihaber.karip.net/">
                                <img style="height: 90px" class="d-block img-fluid mx-auto px-2"
                                     src="https://hepsihaber.karip.net/images/logo-beyaz.png"
                                      alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <img class="d-block img-fluid mx-auto px-2"
                                 src="https://globuc.com/wp-content/uploads/2020/03/PENTHOL-01.png"
                                  alt="">
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://selektifiz.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://selektifiz.karip.net/images/logo.png"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://www.prosperglobalconsulting.com/">
                                <img style="height: 120px" class="d-block img-fluid mx-auto px-2"
                                     src="https://media-exp2.licdn.com/dms/image/C560BAQEYAxBNn7bmzA/company-logo_200_200/0/1640166893070?e=2147483647&v=beta&t=cjd9-3yJUfQMkSwLCMLXRwLfQMzcOWfOA1r3vD1c1UA"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="http://swiss.karip.net/">
                                <img style="height: 90px" class="d-block img-fluid mx-auto px-2"
                                     src="http://swiss.karip.net/images/logo.svg"
                                      alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://siyamer.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://siyamer.karip.net/images/logo.png"
                                       alt="">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a target="_blank" href="https://taspark.karip.net/">
                                <img class="d-block img-fluid mx-auto px-2"
                                     src="https://taspark.karip.net/images/logo.jpeg"
                                        alt="">
                            </a>
                        </div>
                        <div class="swiper-slide text-center">
                            <a target="_blank" href="https://findminijob.com/">
                                Find Mini Job
                            </a>
                        </div>
                        <div class="swiper-slide text-center">
                            <a target="_blank" href="https://peradis.com/">
                                <img class="d-block img-fluid mx-auto px-2" width="120"
                                     src="/images/peradis.min.webp"
                                      alt="">
                            </a>
                        </div>
                    </div>
                    <div class="swiper-pagination swiper-partners-pagination"></div>
                </div>
            </div>
        </section>
    </main>
@endsection
