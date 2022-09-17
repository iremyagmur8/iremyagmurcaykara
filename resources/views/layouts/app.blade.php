<?php

function sanitize_output($buffer)
{

    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );

    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );

    $buffer = preg_replace($search, $replace, $buffer);

    return $buffer;
}

ob_start("sanitize_output");

?><!DOCTYPE html>
<html lang="<?= app()->getLocale(); ?>">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-0XDQQT65KQ"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-0XDQQT65KQ');
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="description" content="@yield('desc')">
    <link rel="icon" href="/images/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <link rel="manifest" href="/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>İrem Yağmur Çaykara</title>
    <link rel="stylesheet" href="/assetWeb/asweb/fonts/boxicons/css/boxicons.min.css"/>
    <link rel="stylesheet" href="/assetWeb/asweb/fonts/iconsmind/iconsmind.css"/>
    <link rel="stylesheet" href="/solarisv2/vendor/css/simplebar.min.css">
    <link rel="stylesheet" href="/assetWeb/asweb/vendor/node_modules/css/swiper-bundle.min.css">
    <link href="/assetWeb/asweb/css/theme-pink.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="/assetWeb/asweb/vendor/node_modules/css/locomotive-scroll.min.css">
    <link href="/assetWeb/asweb/vendor/node_modules/css/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:ital,wght@0,400;0,600;1,400&display=swap"
          rel="stylesheet">
    <link href="/custom.css?v={{rand(0,999)}}" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazyload/1.9.1/jquery.lazyload.min.js" integrity="sha512-jNDtFf7qgU0eH/+Z42FG4fw3w7DM/9zbgNPe3wfJlCylVDTT3IgKW5r92Vy9IHa6U50vyMz5gRByIu4YIXFtaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @isset($amp)
        <link rel="amphtml" href="{{$amp}}"/>
@endisset

</head>

<body class="min-h-100">
<?php $string = app()->getLocale(); ?>
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="modalFormLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content border-0">
            <div class="position-relative border-0 pe-4">
                <button type="button"
                        class="btn btn-outline-secondary p-0 border-2 width-3x height-3x rounded-circle flex-center position-absolute end-0 top-0 mt-3 me-3 z-index-1"
                        data-bs-dismiss="modal" aria-label="Close">
                    <i class="bx bx-x fs-5"></i>
                </button>
            </div>
            <div class="modal-body py-5 border-0">
                <div class="px-3">

                    <h2 class="mb-1 display-6">
                        {{__("gnl.Get in Touch")}}
                    </h2>
                    <div class="position-relative mt-5">
                        <div>
                            <form method="post" action="/" id="form">
                                {{ csrf_field() }}
                                <div class="row mb-3">
                                    <label for="fullname"
                                           class="col-sm-3 col-form-label">{{__("gnl.Full Name")}}</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fullname" name="name">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="email"
                                           class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="fullname" name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="subject"
                                           class="col-sm-3 col-form-label">{{__("gnl.Subject")}}</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" placeholder="{{__("gnl.Message")}}.." name="subject"
                                                  id="subject" rows="5"></textarea>
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit" id="submit">
                                    {{__("Submit")}}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="position-fixed start-0 top-0 bottom-0 end-0 z-index-fixed pe-none w-100 h-100 start-0 top-0"
     id="particles-js"></div>
<div class="spinner-loader bg-tint-primary">
    <div class="spinner-border text-primary" role="status">
    </div>
    <span class="small d-block ms-2">Loading...</span>
</div>
<div data-scroll-container>

    <header class="header-fixed-top header-transparent z-index-fixed header-transparent sticky-fixed">
        <nav class="navbar navbar-expand-lg navbar-dark py-0 py-lg-3">
            <div class="navbar-fixed-bg position-absolute"></div>
            <div class="container position-relative">
                <a class="navbar-brand" href="/">
                    <img src="/images/logo/new-logo.png" alt="" class="logo" width="140" height="140">
                </a>

                <div class="d-flex align-items-center navbar-no-collapse-items order-lg-last">
                    <li class="nav-item dropdown me-3 d-none d-lg-block h-auto">
                        <a href="#" data-bs-toggle="dropdown"
                           class="nav-link dropdown-toggle text-white text-capitalize">{{config()->get("solaris.site.language.".app()->getLocale())["locale"]}}</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            @foreach(config()->get("solaris.site.language") as $sKey=>$sVal)
                                <a href="/lang/{{$sVal["locale"]}}" class="dropdown-item">
                                    <img src="/images/lang/{{$sVal["locale"]}}.svg" class="me-2" width="20" alt="">
                                    <small>{{__("gnl.".$sVal["name"])}}</small>
                                </a>
                            @endforeach
                        </div>
                    </li>
                    <div class="nav-item me-3 me-lg-0">
                        <a href="#modalForm" data-bs-toggle="modal" aria-expanded="false" class="btn btn-outline-white get-in-touch">😊 {{__("gnl.Get in Touch")}}</a>
                    </div>
                    <div class="nav-item me-3 me-lg-0 d-lg-none">
                        <a data-bs-toggle="offcanvas" href="#offcanvasEnd" class="nav-link text-white ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor"
                                 class="bx bx-list" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M2.5 11.5A.5.5 0 0 1 3 11h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 7h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 3 3h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z">
                                </path>
                            </svg>
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>
    <div class="offcanvas offcanvas-end d-lg-none" tabindex="-1" id="offcanvasEnd" aria-labelledby="offcanvasEnd">
        <div class="border-bottom offcanvas-header">
            <button type="button" class="btn-close text-reset p-0 m-0 width-3x height-3x flex-center ms-auto"
                    data-bs-dismiss="offcanvas" aria-label="Close">
                <svg xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid meet" width="24"
                     height="24" viewBox="0 0 128 128">
                    <g>
                        <path stroke="currentColor" stroke-width="8" stroke-linecap="square" fill="none"
                              d="M7 7l114 114m0-114l-114 114"></path>
                    </g>
                </svg>
            </button>
        </div>
        <div class="offcanvas-body p-4 px-xl-5">
            <ul class="nav flex-column collapse-group">
                <li class="nav-item"><a href="#about-me" class="nav-link fs-2 fw-normal">{{__("gnl.About Me")}}</a></li>
                <li class="nav-item"><a href="#portfolio"
                                        class="nav-link fs-2 fw-normal">{{__("gnl.Featured Projects")}}</a></li>
                <li class="nav-item"><a href="#get-in-touch"
                                        class="nav-link fs-2 fw-normal">{{__("gnl.Get in Touch")}}</a></li>
                <li class="nav-item d-block d-lg-none"><a href="#c_about"
                                                          class="nav-link fs-3 fw-normal text-capitalize"
                                                          data-bs-toggle="collapse"
                                                          aria-expanded="false">{{config()->get("solaris.site.language.".app()->getLocale())["locale"]}}</a>
                    <div id="c_about" class="collapse">
                        <ul class="nav flex-column ps-4">
                            @foreach(config()->get("solaris.site.language") as $sKey=>$sVal)
                                <li class="nav-item @if($loop->first) mb-2 @endif">
                                    <a href="/lang/{{$sVal["locale"]}}" style="color: #1e1b32;">
                                        <img src="/images/lang/{{$sVal["locale"]}}.svg" class="me-2" width="20" alt="">
                                        <small>{{__("gnl.".$sVal["name"])}}</small>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <div class="offcanvas-footer p-4 px-xl-5">
            <ul class="list-unstyled mb-0">
                <li class="pb-4">
                    <small class="text-muted d-block">Email:</small>
                    <a href="mailto:hello@iremyagmurcaykara.com" class="link-underline fs-5">hello@iremyagmurcaykara.com</a>
                </li>
                <li>
                    <ul class="list-inline">
                        <li class="list-inline-item me-3">
                            <a href="mailto:hello@iremyagmurcaykara.com" target="_blank" class="fs-5 text-muted"><i
                                    class="bx bxl-gmail"></i></a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="https://www.linkedin.com/in/irem-ya%C4%9Fmur-%C3%A7aykara-218071178/"
                               target="_blank" class="fs-5 text-muted"><i class="bx bxl-linkedin"></i></a>
                        </li>
                        <li class="list-inline-item me-3">
                            <a href="https://github.com/iremyagmur8" target="_blank" class="fs-5 text-muted"><i
                                    class="bx bxl-github"></i></a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>

    @yield("content")

    <footer class="position-relative bg-gray-200" id="get-in-touch" data-scroll-section>
        <div class="container py-9 py-lg-11 position-relative">
            <div class="row">
                <div class="col-12 col-md-7 h-100 me-auto mb-7 mb-md-0">
                    <h2 class="display-5 mb-4 position-relative">
                        {{__("gnl.Have a project? Let's work together!")}}
                    </h2>
                    <div class="d-flex align-items-center">
                        <a class="fs-3 link-hover-underline" href="mailto:hello@iremyagmurcaykara.com">hello@iremyagmurcaykara.com
                            <i class="bx bx-right-arrow-alt"></i>
                        </a>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="d-flex flex-column h-100 justify-content-between">
                        <div class="text-lg-end">
                            <div class="mb-3">
                                <a href="mailto:hello@iremyagmurcaykara.com" target="_blank"
                                   class="link-hover-underline">Email</a>
                            </div>
                            <div class="mb-3">
                                <a href="https://www.linkedin.com/in/irem-ya%C4%9Fmur-%C3%A7aykara-218071178/"
                                   target="_blank" class="link-hover-underline">Linkedin</a>
                            </div>
                            <div class="mb-3">
                                <a href="https://github.com/iremyagmur8" target="_blank" class="link-hover-underline">Github</a>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div> <!-- / .container -->
    </footer>
</div>
<!--Cursor-->
<div class="is-cursor">
    <div class="v-cursor"></div>
</div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="/theme.bundle.min.js"></script>
<script src="/assetWeb/asweb/vendor/node_modules/js/gsap.min.js"></script>
<script src="/assetWeb/asweb/vendor/node_modules/js/swiper-bundle.min.js"></script>
<script src="/particles.min.js"></script>
<script src="/assetWeb/asweb/vendor/node_modules/js/locomotive-scroll.min.js"></script>
<script>
    particlesJS("particles-js", {
        "particles": {
            "number": {
                "value": 16,
                "density": {
                    "enable": true,
                    "value_area": 800
                }
            },
            "color": {
                "value": "#ffffff"
            },
            "shape": {
                "type": "circle",
                "stroke": {
                    "width": 0,
                    "color": "#fff"
                },
                "polygon": {
                    "nb_sides": 5
                },
            },
            "opacity": {
                "value": 0.6,
                "random": true,
                "anim": {
                    "enable": false,
                    "speed": 1,
                    "opacity_min": 0.1,
                    "sync": true
                }
            },
            "size": {
                "value": 3,
                "random": true,
                "anim": {
                    "enable": true,
                    "speed": 60,
                    "size_min": 0.25,
                    "sync": false
                }
            },
            "line_linked": {
                "enable": false,
            },
            "move": {
                "enable": true,
                "speed": 4,
                "direction": "none",
                "random": true,
                "straight": false,
                "out_mode": "out",
                "bounce": true,
                "attract": {
                    "enable": false,
                    "rotateX": 600,
                    "rotateY": 1200
                }
            }
        },
        "interactivity": {
            "detect_on": "canvas",
            "events": {
                "onhover": {
                    "enable": false,
                    "mode": "grab"
                },
                "onclick": {
                    "enable": false,
                    "mode": "push"
                },
                "resize": true
            },
            "modes": {
                "grab": {
                    "distance": 140,
                    "line_linked": {
                        "opacity": 0
                    }
                },
                "bubble": {
                    "distance": 200,
                    "size": 60,
                    "duration": 2,
                    "opacity": 8,
                    "speed": 8
                },
                "repulse": {
                    "distance": 300,
                    "duration": 0.9
                },
                "push": {
                    "particles_nb": 4
                },
                "remove": {
                    "particles_nb": 2
                }
            }
        },
        "retina_detect": true
    });

</script>

<script>
    var swiperPartners4 = new Swiper(".swiper-partners-4", {
        slidesPerView: 3, loop: true,
        spaceBetween: 12,
        breakpoints: {
            768: {
                slidesPerView: 5
            }
        },
        pagination: {
            el: ".swiper-partners-pagination",
            clickable: true
        },
        navigation: {
            nextEl: ".swiper-partners-button-next",
            prevEl: ".swiper-partners-button-prev"
        }
    });
</script>
<script type="text/javascript">
    (function () {
        var scroll = new LocomotiveScroll({
            el: document.querySelector('[data-scroll-container]'),
            smooth: true,
            repeat: true,
            getSpeed: true,
            lerp: .08,
            smoothMobile: false
        });
    })();

</script>
<script>
    let vw = window.innerWidth || document.documentElement.clientWidth,
        maxVw = 320;
    vw > maxVw && document.querySelectorAll(".js-hover-img-item").forEach(function (e) {
        let t = e,
            r = (t.getBoundingClientRect(),
                e.querySelector("img")),
            a = r.offsetHeight,
            l = r.offsetWidth;
        e.addEventListener("mouseenter",
            s => {
                e.classList.contains("is-hover") || e.classList.add("is-hover");
                let o = s.clientX - t.offsetLeft - l / 2.7,
                    u = s.offsetY - a / 2.5;
                gsap.set(r, {
                    x: o,
                    y: u,
                    rotate: -4
                })
            }),
            e.addEventListener("mousemove",
                e => {
                    let s = e.clientX - t.offsetLeft - l / 2,
                        o = e.offsetY - r.offsetTop - a * .5;
                    gsap.to(r, {
                        x: s,
                        y: o,
                        rotate: -4
                    })
                }),
            e.addEventListener("mouseleave", () => {
                e.classList.contains("is-hover") && e.classList.remove("is-hover")
            })
    });

    //cursor
    window.addEventListener('DOMContentLoaded', (event) => {
        let isCursor = document.querySelectorAll('.is-cursor');
        isCursor.forEach(function (el) {
            gsap.set(".v-cursor", {
                xPercent: -50,
                yPercent: -50
            });
            const e = document.querySelector(".v-cursor"),
                t = {
                    x: window.innerWidth / 2,
                    y: window.innerHeight / 2
                },
                o = {
                    x: t.x,
                    y: t.y
                },
                r = .15,
                n = gsap.quickSetter(e, "x", "px"),
                a = gsap.quickSetter(e, "y", "px");
            window.addEventListener("mousemove", e => {
                o.x = e.x, o.y = e.y
            }),
                gsap.ticker.add(() => {
                    const e = 1 - Math.pow(1 - r,
                        gsap.ticker.deltaRatio());
                    t.x += (o.x - t.x) * e,
                        t.y += (o.y - t.y) * e,
                        n(t.x),
                        a(t.y)
                })
        })
    })

</script>

</body>

</html><?php ob_end_flush();?>
