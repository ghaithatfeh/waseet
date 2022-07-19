<!doctype html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>وسيط | نفذ أعمالك بسهولة عبر الإنترنت</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    {{-- my css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all-mixed.css') }}">
    <link rel="icon" type="image/png" href="" />
    <link rel="icon" type="image/png" sizes="512x512" href="" />


    <style type="text/css">
        .control_indicator {
            --bg-second-bg: #282e39 !important;
        }

        .loading-state {
            opacity: 0.3;
        }

        #nafezly-navbar {
            box-shadow: unset !important;
        }

        .home-specialization:hover .specialization-details {
            opacity: 0 !important;
        }

        .home-specialization .specialization-details {
            opacity: 1;
            transition: all .05s ease;
        }

        .home-specialization:hover .specialization-btns {
            opacity: 1 !important;
            top: 0px;
            z-index: 11;
        }

        .specialization-btns {
            transition: .5s all ease-out;
            top: 10px;
            opacity: 0;
        }

        html {
            scroll-padding-top: 0px !important;
            scroll-behavior: smooth;
        }
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149847603-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-149847603-1');
    </script>
    <style>
        [wire\:loading],
        [wire\:loading\.delay],
        [wire\:loading\.inline-block],
        [wire\:loading\.inline],
        [wire\:loading\.block],
        [wire\:loading\.flex],
        [wire\:loading\.table],
        [wire\:loading\.grid],
        [wire\:loading\.inline-flex] {
            display: none;
        }

        [wire\:loading\.delay\.shortest],
        [wire\:loading\.delay\.shorter],
        [wire\:loading\.delay\.short],
        [wire\:loading\.delay\.long],
        [wire\:loading\.delay\.longer],
        [wire\:loading\.delay\.longest] {
            display: none;
        }

        [wire\:offline] {
            display: none;
        }

        [wire\:dirty]:not(textarea):not(input):not(select) {
            display: none;
        }

        input:-webkit-autofill,
        select:-webkit-autofill,
        textarea:-webkit-autofill {
            animation-duration: 50000s;
            animation-name: livewireautofill;
        }

        @keyframes livewireautofill {
            from {}
        }
    </style>
    @livewireStyles
</head>
<style type="text/css">
    html {
        scroll-padding-top: 4rem;
    }

    .post-content h1,
    .post-content h2,
    .post-content h3,
    .post-content h4,
    .post-content h5,
    .post-content h6 {
        font-family: 'kufi-arabic', sans-serif !important;
    }

    .post-content iframe {
        width: 100%;
        margin: 15px auto;
        height: calc(25vw + 100px);
    }

    .post-content,
    .post-content *:not(h1, h2, h3, h4, h5, h6) {
        font-family: 'Dubai', sans-serif !important;
        font-size: 16px;
        line-height: 1.9rem;
    }

    .post-content>p:nth-of-type(1) {
        margin-bottom: 0px !important;
    }

    .post-content h1 {
        font-size: 24px;
    }

    .post-content h2 {
        font-size: 22px;
    }

    .post-content h3 {
        font-size: 20px;
    }

    .post-content h4 {
        font-size: 19px;
    }

    .post-content h5 {
        font-size: 18px;
    }

    .post-content h6 {
        font-size: 17px;
    }

    .post-content img {
        margin: 10px auto;
        width: 100%;
    }

    .dropdown .btn-light:not(:disabled):not(.disabled):active,
    .dropdown [aria-expanded="true"] {
        background: var(--bg-color-3) !important;
        border-color: var(--bg-color-3) !important;
        color: #fff !important;
    }

    .post-content pre {
        text-align: left;
        direction: ltr;
        background: #282923;
        color: #fff;
        padding: 22px;
        border-radius: 7px;
    }

    #toast-container {
        z-index: 4444444444444444444444;
    }

    .project-box:hover {
        box-shadow: 0 8px 16px 0 rgb(10 14 29 / 2%), 0 8px 64px 0 rgb(10 14 29 / 6%);
    }

    .tag-class {
        color: #fff !important;
        background-color: var(--bg-color-3);
        padding: 2px 8px 1px !important;
        display: flex !important;
        align-items: center;
        justify-content: center;
    }
</style>

<body id="body" style="direction: rtl!important;">
    <script type="text/javascript">
        if (localStorage.getItem('mood') == "night") {
            var element = document.getElementById("body");
            element.classList.add("night");
        }
    </script>
    <div class="modal fade" id="recorderNafezly" tabindex="-1" role="dialog" aria-labelledby="recorderNafezlyTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="">
                    <div class="row px-0 col-12 border-bottom">
                        <div class="col-8 px-0 py-3 px-3">
                            <h5 class="modal-title font-1" id="exampleModalLongTitle" style="color: var(--bg-color-0)">
                                تسجيل صوتي
                                <div class="spinner-grow text-primary recordig-icon ml-1" role="status"
                                    style="display: none;border-radius: 50%;height: 24px;width: 24px;top: 15px;position: absolute;">
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </h5>
                        </div>
                        <div class="col-4 px-0">
                            <button class="float-left btn p-0 px-2 close-record-modal" data-dismiss="modal"
                                aria-label="Close" style="padding: 10px 22px!important;color: var(--bg-color-0)">
                                <span aria-hidden="true" class="font-3 ">&times;</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="modal-body">
                    <div class="col-12 row p-0 justify-content-center">
                        <div class="col-12 p-0 row d-flex justify-content-center">
                            <div class="p-1 recorder-start-record-container mb-3">
                                <button
                                    class=" btnStartRecording btn btn-primary rounded-circle d-flex align-items-center justify-content-center cursor-pointer font-8 "
                                    style="width: 90px;height: 90px;cursor: pointer;"> <span
                                        class="fal fa-microphone"></span></button>
                            </div>
                            <div class="p-1 recorder-stop-record-container mb-3" style="opacity: 0.1;display: none;">
                                <button
                                    class="btnStopRecording btn btn-outline-danger rounded-circle d-flex align-items-center justify-content-center cursor-pointer font-8 "
                                    disabled style="width: 90px;height: 90px;cursor: pointer;"> <span
                                        class="fal fa-stop"></span></button>
                            </div>
                            <div class="col-12 d-flex p-0 justify-content-center align-items-center">
                                <div class="col p-1 recorder-audio-container d-flex align-items-center"
                                    style="opacity: 0.1;">
                                    <audio controls autoplay playsinline style="width: 100%;height: 40px;"
                                        id="recorded-audio"></audio>
                                </div>
                            </div>
                            <div class="col-12 p-0">
                                <div class="col-12 p-1 recorder-send-audio-container d-flex align-items-center"
                                    style="opacity:.1">
                                    <button
                                        class="btnDownloadRecording btn btn-success rounded-pill col-12 d-flex align-items-center justify-content-center cursor-pointer font-1"
                                        data-textarea-message-selector="" data-attachment-uploader-container-selector=""
                                        data-dismiss="modal" style="cursor: pointer;"> <span
                                            class="fal fa-paper-plane mx-2"></span> إرسال التسجيل </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 px-0" id="peterx">
        <div id="header-to-top-btn"></div>
        <div style="width: 280px;background: var(--bg-second-bg);max-width: 100%;z-index: 1000;height: 100vh;position: fixed;top: 0px;left: -280px;min-height: 100vh;overflow: auto;"
            class=" nafez-navbar-menu">
            <div class="col-12 row px-0" style="height: 60px;background: var(--bg-second-bg); ">
                <div class="col-8">
                </div>
                <div class="col-12 px-0">
                    <div class="navbar-nav px-0   hidden-slider-nav" style="padding-top: 0px!important">
                        <div class="col-12 " style="padding:3px"> </div>
                        <div class="nav-item ">
                            <a class="nav-link" href="/projects"><span class="fal fa-suitcase mx-2"></span> تصفح
                                المشاريع</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="/freelancers"><span class="fal fa-user-tie mx-2"></span>
                                تصفح
                                المنفذين </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="/portfolios"><span class="fal fa-images mx-2"></span> تصفح
                                الأعمال </a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="/services"><span class="fal fa-boxes mx-2"></span> تصفح
                                الخدمات </a>
                        </div>
                        <div class="nav-item change-mood">
                            <a class="nav-link" href="#dark-mood"><span class="fal fa-moon mx-2"></span> تغيير
                                الوضع</a>
                        </div>
                        <div class="nav-item">
                            <a class="nav-link" href="/projects/create"><span class="fal fa-plus mx-2"></span>إضافة
                                مشروع</a>
                        </div>
                        @auth
                            <div class="nav-item ">
                                <a class="nav-link"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    style="color: var(--bg-color-0)">
                                    <span class="fal fa-sign-out-alt mx-2"></span>
                                    تسجيل خروج
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
        <div id="main-content-container" class="position-relative" style="overflow: hidden;">
            <div class="col-12  main-content-dark-layer pb-5"
                style="height:100vh;position: fixed;width: 100%;z-index: 99999;background: rgba(47, 47, 47, 0.57);top: 0px;display: none;">
            </div>
            <nav class="navbar navbar-expand-md navbar-inverse navbar-light fixed-top py-1"
                style="background: var(--bg-second-bg);padding: 0px 0px;margin-bottom: 0px;z-index: 10000; transition: .3s all cubic-bezier(0.25, 0.46, 0.45, 0.94);width: 100%!important;max-width: 100%!important;right: 0px;left: 0px;box-shadow: 0 .03rem .25rem rgba(0,0,0,0.09)!important;"
                id="nafezly-navbar">
                <div class="container text-left  px-0">
                    <div class="col-12 row px-0">
                        <div class="col-1 px-0 d-flex align-items-center" style="z-index: 12;">
                            <a class="navbar-brand" href="/">
                                <img src="/site_images/logos/logo2-01.svg"
                                    style="height: 45px; background: var(--bg-second-bg); padding: 2px!important"
                                    alt="لوجو موقع وسيط">
                            </a>
                        </div>
                        <div class="col-11 row px-0" style="justify-content: flex-end;">
                            <a class="nav-bar-icon text-center  ml-1 d-none d-md-inline-block"
                                style="position: relative;cursor: pointer;padding: 14px 0px 0px;text-align: center;color: #65676b;min-width: 107px;border-radius: 5px;"
                                id="nav-services" href="/services">
                                <span class="fas fa-boxes"
                                    style="; font-size: 18px;text-align: center;display: inline-block; padding:0px;"
                                    class="nav-item d-inline-block "></span>
                                <span class="kufi pr-1 " style="position: relative;font-size: 14px">الخدمات</span>
                            </a>
                            <a class="nav-bar-icon text-center d-none d-md-inline-block ml-1"
                                style="position: relative;cursor: pointer;padding: 14px 0px 0px;text-align: center;;min-width: 107px;border-radius: 5px;"
                                href="/portfolios">
                                <span class="far fa-images"
                                    style="; font-size: 18px;text-align: center;display: inline-block; padding:0px;"
                                    class="nav-item d-inline-block"></span>
                                <span class="kufi pr-1 " style="position: relative;font-size: 14px">الأعمال</span>
                            </a>
                            <a class="ml-1 nav-bar-icon text-center d-none d-md-inline-block"
                                style="position: relative;cursor: pointer;padding: 14px 0px 0px;text-align: center;;min-width: 107px;border-radius: 5px;"
                                href="/projects">
                                <span class="fas fa-suitcase"
                                    style="; font-size: 18px;text-align: center;display: inline-block; padding:0px;"
                                    class="nav-item d-inline-block"></span>
                                <span class="kufi pr-1 " style="position: relative;font-size: 14px">المشاريع</span>
                            </a>
                            <a class="nav-bar-icon text-center d-none d-md-inline-block ml-1"
                                style="position: relative;cursor: pointer;padding: 14px 0px 0px;text-align: center;;min-width: 107px;border-radius: 5px;   "
                                href="/freelancers">
                                <span class="fas fa-users"
                                    style="; font-size: 18px;text-align: center;display: inline-block; padding:0px;"
                                    class="nav-item d-inline-block"></span>
                                <span class="kufi pr-1 "
                                    style="position: relative;top: 0px;font-size: 14px">المنفذين</span>
                            </a>

                            @guest
                                <a href="/login" class="text-center ml-2 ml-md-1 "
                                    style="position: relative;cursor: pointer;padding: 9px 0px 0px;text-align: center;;min-width: 60px;border-radius: 5px;   "
                                    href="/freelancers">
                                    <button class="btn btn-primary py-2 font-1"
                                        style="border-radius: 5px;background: transparent!important;color:var(--bg-color-0)">دخول</button>
                                </a>
                                <a href="/register" class=" text-center  ml-2 d-none d-md-inline-block"
                                    style="position: relative;cursor: pointer;padding: 9px 0px 0px;text-align: center;;min-width: 107px;border-radius: 5px;   "
                                    href="/freelancers">
                                    <button class="btn btn-primary py-2 font-1" style="border-radius: 5px;">حساب
                                        جديد</button>
                                </a>
                            @else
                                <div class="d-md-inline-block" style="height: 55px;">
                                    <span class="d-inline-block  nav-bar-icon text-center mx-1"
                                        style="position: relative;width: 50px;cursor: pointer;padding: 9px 0px 0px;text-align: center;height: 55px;border-radius: 5px"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{ asset('uploaded_images/users/' . (auth()->user()->profile_image ?? 'defualt.png')) }}"
                                            style="width: 36px;border-radius: 50%!important;padding: 0px;height: 36px;border:0px solid #fff;background: var(--bg-main-bg);object-fit: cover;"
                                            alt="الصورة الشخصية">
                                        <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton"
                                            style="padding: 0px 0px ;box-shadow: 0 6px 12px rgba(0,0,0,0.175); left: -47px;top: 58px;border-radius: 0px 0px 3px 3px;overflow: hidden;  ">
                                            <span class="fas fa-caret-up"
                                                style="color:  var(--bg-main-bg);position: absolute;top:-13px;left: 40%;font-size: 21px"></span>
                                            <div style="  padding: 7px 0px ;background: var(--bg-second-bg);"
                                                class="col-12 row text-right dropdown-items">
                                                <ul
                                                    style="list-style: none;padding: 0px 0px;width: 100%;margin-bottom: 0px">
                                                    <a href="#dark-mood"
                                                        class="py-2 px-3  d-block hover-darker change-mood">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal fa-moon ml-2"></span>تغيير الوضع</li>
                                                    </a>
                                                    <a href="/my/profile" class="py-2 px-3  d-block  hover-darker">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal fa-tachometer-alt-slow ml-2"></span>لوحة التحكم
                                                        </li>
                                                    </a>
                                                    <a href="/my/profile?section=projects"
                                                        class="py-2 px-3  d-block hover-darker">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal  fa-suitcase ml-2"></span>مشاريعي</li>
                                                    </a>
                                                    <a href="/freelancers/{{ auth()->user()->id }}"
                                                        class="py-2 px-3  d-block hover-darker">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal fa-user ml-2"></span>حسابي الشخصي</li>
                                                    </a>
                                                    <a href="#"
                                                        class="py-2 px-3 d-block logout-nafezly hover-darker"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)">
                                                            <span class="fal fa-sign-in-alt ml-2"></span>تسجيل خروج
                                                        </li>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}"
                                                        method="POST" class="d-none">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </span>
                                </div>
                            @endguest

                            <div class="d-none" style="height: 55px;">
                                <span class="d-inline-block  nav-bar-icon text-center mx-1"
                                    style="position: relative;width: 50px;cursor: pointer;padding: 9px 0px 0px;text-align: center;height: 55px;border-radius: 5px"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="fal fa-user mt-1"
                                        style="; font-size: 24px;text-align: center;display: inline-block; padding:0px;"
                                        class="nav-item d-inline-block"></span>
                                    <div class="dropdown-menu p-0" aria-labelledby="dropdownMenuButton"
                                        style="padding: 0px 0px ;box-shadow: 0 6px 12px rgba(0,0,0,0.175); left: -47px;top: 58px;border-radius: 0px 0px 3px 3px;overflow: hidden;  ">
                                        <span class="fas fa-caret-up"
                                            style="color:  var(--bg-main-bg);position: absolute;top:-13px;left: 40%;font-size: 21px"></span>
                                        <div style="  padding: 7px 0px ;background: var(--bg-second-bg);"
                                            class="col-12 row text-right dropdown-items">
                                            <ul
                                                style="list-style: none;padding: 0px 0px;width: 100%;margin-bottom: 0px">
                                                <a href="/register" class="py-2 px-3  d-block hover-darker">
                                                    <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                            class="fal fa-user-edit ml-2"></span> تسجيل </li>
                                                </a>
                                                <a href="/login" class="py-2 px-3  d-block  hover-darker">
                                                    <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                            class="fal fa-key ml-2"></span> تسجيل دخول </li>
                                                </a>
                                                <a href="#dark-mood"
                                                    class="py-2 px-3  d-block hover-darker change-mood">
                                                    <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                            class="fal fa-moon ml-2"></span> تغيير الوضع </li>
                                                </a>
                                            </ul>
                                        </div>
                                    </div>
                                </span>
                            </div>
                            <div class="nav-item nafez-navbar nav-bar-icon  d-inline-block  "
                                style="position: relative;width: 52px;cursor: pointer;padding: 8px 0px 0px;text-align: center;border-radius: 5px;left: 4px;height: 55px;">
                                <span class="far fa-bars nav-link pt-2 nav-item"
                                    style=";font-size: 22px;text-align: center;display: inline-block;padding:0px;"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
            <main style="opacity:1;padding-top: 60px;z-index: 10" class="nafez-main-content">
                @yield('content')
                {{ $slot ?? '' }}
            </main>
        </div>
    </div>

    {{-- footer --}}
    <div class="col-12" style="    background: var(--bg-second-bg);">
        <div class="container  ">
            <div class="col-12 row d-flex justify-content-between p-0">
                <div class="col-12 text-center   mt-1 mb-2 pt-3 pb-2 ">
                    <h6 style="font-size: 14px;line-height: 1.8" class="my-0  kufi text-center">
                        <span class="d-inline-block kufi"> جميع الحقوق محفوظة © منصة وسيط 2022 </span>
                        <span class="d-inline-block kufi"> Wasset.com - All rights reserved</span>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/all-mixed.js') }}"></script>
    <script type="text/javascript">
        $(document).on("focusin", function() {
            $(".thumbnail-nafezly").fancybox({}); // fancybox
        });
        $('a.thumbnail-nafezly').on('click', function(e) {
            e.preventDefault();
        });
    </script>


    @livewireScripts
    <script type="text/javascript">
        $('#recorderNafezly').on('hide.bs.modal', function() {
            $(this).find('audio').attr('src', '');
            $(this).find('audio,.recorder-send-audio-container').css('opacity', '0.2');
        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"70b32f372f708fd0","version":"2021.12.0","r":1,"token":"e3146e29712049fe8454df255b17cf54","si":100}'
        crossorigin="anonymous"></script>

    <script>
        $(".owl-carousel").owlCarousel({
            items: 1,
            rtl: true,
            loop: true,
            navRewind: false,
            lazyLoad: true,
            autopaly: true,
            autopalyHoverPause: true,
            navigation: false,
            nav: true
        });
    </script>

    @yield('script')
    @stack('scripts')

    @if (session()->has('message-success'))
        <div id="toast-container" class="toast-top-left">
            <div class="toast toast-success" aria-live="polite" style="">
                <div class="toast-progress" style="width: 100%;"></div>
                <div class="toast-message">{{ session()->get('message-success') }}</div>
            </div>
        </div>
        <script>
            let width = 100;
            setInterval(() => {
                $('.toast-progress').css('width', width + '%')
                width = width - 0.1
                if (width <= 1)
                    $('#toast-container').fadeOut()
            }, 2.5);
        </script>
    @endif

    <style>
        .selectize-input {
            border: 1px solid #cdcdcd;
        }

        .fileuploader-theme-dragdrop .fileuploader-input {
            border-radius: 0px !important;
            border: 1px solid #cdcdcd !important;
        }

        .fileuploader {
            margin: 0px !important;
        }

        .fileuploader-input {
            text-align: center;
        }

        .fileuploader-input * {
            text-align: center;
        }

        .fileuploader-theme-dragdrop .fileuploader-input {
            background: var(--bg-second-bg);
            border: 1px dashed var(--bg-main-bg);
        }

        .fileuploader {
            background: var(--bg-second-bg);

            padding: 0px;
        }

        /*  .dropzone{
        padding: 0px!important;
    }
*/
        *[class^="fileuploader"] {
            direction: ltr !important;

        }

        .fileuploader-items .fileuploader-item {
            padding: 7px !important;
        }

        .fileuploader-items-list {
            width: 100% !important;
            margin: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .fileuploader-popup {
            z-index: 66666666666666666;

        }

        .fileuploader-popup * {
            text-align: center !important;

        }

        .fileuploader-popup-button[data-action="cancel"] {
            font-size: 0px !important
        }

        .fileuploader-popup .fileuploader-popup-header .fileuploader-popup-button {
            padding: 5px 15px !important;
            text-shadow: none;
        }

        .fileuploader-popup-button[data-action="cancel"]:after {
            content: 'إغلاق';
            font-size: 13px !important
        }

        .fileuploader-popup-footer {
            display: flex;
            justify-content: center;
        }

        .fileuploader-popup .fileuploader-popup-tools button[data-action="remove"] {
            font-size: 0px !important
        }

        .fileuploader-popup .fileuploader-popup-tools button[data-action="remove"]:after {
            content: ' حذف';
            font-size: 13px !important
        }

        *[class^="fileuploader-icon-"] {
            text-align: center !important;
        }

        .fileuploader-items .fileuploader-item {
            border-color: var(--bg-second-bg) !important;
        }

        .fileuploader-items .fileuploader-item .fileuploader-action+.fileuploader-action {
            margin-left: 0px !important;
            margin-right: 16px !important;
        }

        .fileuploader-input {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }

        .fileuploader-icon-main {
            margin: 0px !important;
            padding: 10px !important;
            font-size: 30px !important;
        }

        .fileuploader-input-caption {
            font-size: 14px !important;
        }

        .fileuploader-input-inner p,
        .fileuploader-input-button {
            display: none !important
        }

        .fileuploader-input-inner:hover {
            opacity: .5 !important;
        }

        .fileuploader-icon-remove:before {
            content: "\e923";
            position: relative;
            top: -2px;
        }
    </style>
</body>

</html>
