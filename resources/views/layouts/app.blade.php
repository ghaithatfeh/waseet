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
    <style>
        @font-face {
            font-family: kufi-arabic;
            font-style: normal;
            font-weight: 400;
            src: url(../fonts/kufi-fixed/NotoKufiArabic-Regular.eot);
            src: url(../fonts/kufi-fixed/NotoKufiArabic-Regular.eot?#iefix) format('embedded-opentype'), url(../fonts/kufi-fixed/NotoKufiArabic-Regular.woff2) format('woff2'), url(../fonts/kufi-fixed/NotoKufiArabic-Regular.woff) format('woff'), url(../fonts/kufi-fixed/NotoKufiArabic-Regular.ttf) format('truetype')
        }

        @font-face {
            font-family: Tajawal;
            src: url(../fonts/Tajawal-Regular.eot?#iefix) format('embedded-opentype'), url(../fonts/Tajawal-Regular.woff) format('woff'), url(../fonts/Tajawal-Regular.ttf) format('truetype'), url(../fonts/Tajawal-Regular.svg#Tajawal-Regular) format('svg');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: NeoSansArabic;
            src: url(../fonts/NeoSansArabic.eot);
            src: url(../fonts/NeoSansArabic.eot?#iefix) format('embedded-opentype'), url(../fonts/NeoSansArabic.woff2) format('woff2'), url(../fonts/NeoSansArabic.woff) format('woff'), url(../fonts/NeoSansArabic.ttf) format('truetype');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: droid sans arabic;
            src: url(../fonts/DroidSansArabic.woff2) format('woff2'), url(../fonts/DroidSansArabic.woff) format('woff');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: kh-font;
            src: url(../fonts/PHKhalid-Regular.woff2) format('woff2'), url(../fonts/PHKhalid-Regular.woff) format('woff');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: Dubai;
            src: url(../fonts/Dubai-Regular.woff2) format('woff2'), url(../fonts/Dubai-Regular.woff) format('woff');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: Almarai-Regular;
            src: url(../fonts/Almarai-Regular.eot?#iefix) format('embedded-opentype'), url(../fonts/Almarai-Regular.woff) format('woff'), url(../fonts/Almarai-Regular.ttf) format('truetype'), url(../fonts/Almarai-Regular.svg#Almarai-Regular) format('svg');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: Naskh;
            src: url(../fonts/NotoNaskhArabic-Regular.woff2) format('woff2');
            font-weight: 400;
            font-style: normal
        }

        @font-face {
            font-family: kufi-arabic;
            font-style: normal;
            font-weight: 400;
            src: url(../fonts/kufi-fixed/NotoKufiArabic-Regular.eot);
            src: url(../fonts/kufi-fixed/NotoKufiArabic-Regular.eot?#iefix) format('embedded-opentype'), url(../fonts/kufi-fixed/NotoKufiArabic-Regular.woff2) format('woff2'), url(../fonts/kufi-fixed/NotoKufiArabic-Regular.woff) format('woff'), url(../fonts/kufi-fixed/NotoKufiArabic-Regular.ttf) format('truetype')
        }

        @font-face {
            font-family: kufi-arabic;
            font-style: normal;
            font-weight: 700;
            src: url(../fonts/kufi-fixed/NotoKufiArabic-Bold.eot);
            src: url(../fonts/kufi-fixed/NotoKufiArabic-Bold.eot?#iefix) format('embedded-opentype'), url(../fonts/kufi-fixed/NotoKufiArabic-Bold.woff2) format('woff2'), url(../fonts/kufi-fixed/NotoKufiArabic-Bold.woff) format('woff'), url(../fonts/kufi-fixed/NotoKufiArabic-Bold.ttf) format('truetype')
        }

        @font-face {
            font-family: Frutiger;
            src: url(../fonts/Frutiger-Light.woff2) format("woff2"), url(../fonts/Frutiger-Light.woff) format("woff"), url(../fonts/Frutiger-Light.ttf) format("truetype");
            font-weight: 300;
            font-style: normal
        }

        @font-face {
            font-family: Frutiger;
            src: url(../fonts/Frutiger-Medium.woff2) format("woff2"), url(../fonts/Frutiger-Medium.woff) format("woff"), url(../fonts/Frutiger-Medium.ttf) format("truetype");
            font-weight: 500;
            font-style: normal
        }

        @font-face {
            font-family: Frutiger;
            src: url(../fonts/Frutiger-Bold.woff2) format("woff2"), url(../fonts/Frutiger-Bold.woff) format("woff"), url(../fonts/Frutiger-Bold.ttf) format("truetype");
            font-weight: 700;
            font-style: normal
        }

    </style>
    {{-- my css --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all-mixed.css') }}">

    <style type="text/css">
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

    <link rel="icon" type="image/png" href="" />
    <link rel="icon" type="image/png" sizes="512x512" href="" />
    <link rel="manifest" href="https://nafezly.com/manifest.json">
    <link rel='help' title='FAQ' href='https://nafezly.com/faq' />
    <link rel="alternate" type="application/rss+xml" title="المشاريع المفتوحة" href="https://nafezly.com/feed">
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "Organization",
            "name": "نفذلي",
            "url": "https://nafezly.com",
            "logo": "https://nafezly.com/site_images/favicon.png",
            "sameAs": [
                "https://twitter.com/Nafezly",
                "https://www.facebook.com/Nafezly",
                "https://www.youtube.com/channel/UC0lI3SXBt-Nn2Oyss4dAbOQ",
                "https://www.instagram.com/Nafezly",
                "https://www.linkedin.com/company/Nafezly"
            ],
            "contactPoint": [{
                    "@type": "ContactPoint",
                    "telephone": "+201032738088",
                    "contactType": "customer support"
                },
                {
                    "@type": "ContactPoint",
                    "telephone": "+201032738088",
                    "contactType": "technical support"
                }, {
                    "@type": "ContactPoint",
                    "telephone": "+201032738088",
                    "contactType": "billing support"
                }
            ]
        } {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "url": "https://nafezly.com",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "?key={search_term_string}",
                "query-input": "required name=search_term_string"
            }
        } {
            "@context": "https://schema.org",
            "@type": "WebPage",
            "name": "نفذلي | نفذ أعمالك بسهولة عبر الإنترنت",
            "description": "نفذلي هي منصة تمكن اصحاب المشاريع الباحثين عن مبدعين لإنجاز أعمالهم وذلك عن طريق توظيف المبدعين او تصفح وشراء خدماتهم , كما تمكن المبدعين من مشاركة أعمالهم و خدماتهم بسهولة مع ضمان كامل لحقوق كلا الطرفين ",
            "publisher": {
                "@type": "Organization",
                "name": "نفذلي"
            }
        }
    </script>
    <script type="text/javascript">
        if ('serviceWorker' in navigator) {
            navigator.serviceWorker.register('/serviceworker.js', {
                scope: '.'
            }).then(function(registration) {
                console.log('Laravel PWA: ServiceWorker registration successful with scope: ', registration.scope);
            }, function(err) {
                console.log('Laravel PWA: ServiceWorker registration failed: ', err);
            });
        }
    </script>
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
    <script nonce="e936d653-9d60-497a-b942-bccee4116b30">
        (function(w, d) {
            ! function(a, e, t, r) {
                a.zarazData = a.zarazData || {}, a.zarazData.executed = [], a.zaraz = {
                    deferred: []
                }, a.zaraz.q = [], a.zaraz._f = function(e) {
                    return function() {
                        var t = Array.prototype.slice.call(arguments);
                        a.zaraz.q.push({
                            m: e,
                            a: t
                        })
                    }
                };
                for (const e of ["track", "set", "ecommerce", "debug"]) a.zaraz[e] = a.zaraz._f(e);
                a.addEventListener("DOMContentLoaded", (() => {
                    var t = e.getElementsByTagName(r)[0],
                        z = e.createElement(r),
                        n = e.getElementsByTagName("title")[0];
                    for (n && (a.zarazData.t = e.getElementsByTagName("title")[0].text), a.zarazData.x =
                        Math.random(), a.zarazData.w = a.screen.width, a.zarazData.h = a.screen.height, a
                        .zarazData.j = a.innerHeight, a.zarazData.e = a.innerWidth, a.zarazData.l = a
                        .location.href, a.zarazData.r = e.referrer, a.zarazData.k = a.screen.colorDepth, a
                        .zarazData.n = e.characterSet, a.zarazData.o = (new Date).getTimezoneOffset(), a
                        .zarazData.q = []; a.zaraz.q.length;) {
                        const e = a.zaraz.q.shift();
                        a.zarazData.q.push(e)
                    }
                    z.defer = !0;
                    for (const e of [localStorage, sessionStorage]) Object.keys(e).filter((a => a
                        .startsWith("_zaraz_"))).forEach((t => {
                        try {
                            a.zarazData["z_" + t.slice(7)] = JSON.parse(e.getItem(t))
                        } catch {
                            a.zarazData["z_" + t.slice(7)] = e.getItem(t)
                        }
                    }));
                    z.referrerPolicy = "origin", z.src = "/cdn-cgi/zaraz/s.js?z=" + btoa(encodeURIComponent(
                        JSON.stringify(a.zarazData))), t.parentNode.insertBefore(z, t)
                }))
            }(w, d, 0, "script");
        })(window, document);
    </script>
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
    <div class="modal fade report-nafezly-modal" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content ">
                <div class="col-12 border-bottom py-3" style="color: var(--bg-color-0)">
                    إبلاغ
                </div>
                <div class="col-12 pt-4 pb-2">
                    <form method="POST" action="https://nafezly.com/report/create" id="report-form">
                        <input type="hidden" name="type" id="hidden_report_type">
                        <input type="hidden" name="type_id" id="hidden_report_type_id">
                        <label class="control control-checkbox">
                            <span class="fal fa-angry ml-1 " aria-hidden="true"></span>
                            <label class="kufi font-1" for="annoying"
                                style="cursor: pointer;color: var(--bg-color-0)">هذا المحتوى مزعج</label>
                            <input type="radio" id="annoying" name="report_type" data-ui="" value="annoying"
                                class="hidden_report_report_type">
                            <div class="control_indicator"></div>
                        </label>
                        <label class="control control-checkbox">
                            <span class="fal fa-jack-o-lantern ml-1 " aria-hidden="true"></span>
                            <label class="kufi font-1" for="spam"
                                style="cursor: pointer;color: var(--bg-color-0)">هذا
                                المحتوى سبام Spam او وهمي</label>
                            <input type="radio" id="spam" name="report_type" data-ui="" value="spam"
                                class="hidden_report_report_type">
                            <div class="control_indicator"></div>
                        </label>
                        <label class="control control-checkbox">
                            <span class="fal fa-ban ml-1 " aria-hidden="true"></span>
                            <label class="kufi font-1" for="illegal"
                                style="cursor: pointer;color: var(--bg-color-0)">هذا المحتوى مخالف لشروط المنصة</label>
                            <input type="radio" id="illegal" name="report_type" data-ui="" value="illegal" checked=""
                                class="hidden_report_report_type">
                            <div class="control_indicator"></div>
                        </label>
                        <hr>
                        <textarea class="form-control" name="reason" placeholder="معلومات اخرى (إختياري)" style="min-height: 200px"
                            id="hidden_report_reason"></textarea>
                        <hr>
                        <div class="col-12 px-0 pb-3 text-left">
                            <button type="button" class="btn btn-secondary font-1 px-4" data-dismiss="modal"
                                style="border-radius: 60px;" id="hidden_report_dismiss">تراجع</button>
                            <button type="button" class="btn btn-primary font-1 px-4 post-nafezly-report"
                                style="border-radius: 60px;">إبلاغ</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="nafezly-alert-type"
        style="position: fixed;z-index: 45454454;left: 15px;bottom: 15px;max-width: calc(100% - 30px );width: 400px;display: none;">
        <span class=""
            style="position: absolute;left: 0px;top: 0px;font-size: 14px;cursor: pointer;padding: 10px;z-index: 1512121"
            onclick="$('.nafezly-alert-type').fadeOut();"><span class="far fa-times"></span></span>
        <span class="col-12 px-0 p-3 d-inline-block nafezly-alert" style="text-align: justify!important"></span>
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
                        {{-- <div class="nav-item ">
                            <div class="nav-link" style="cursor: pointer;"
                                onclick="$('#more-left-nav-nafezly').slideToggle('fast');$('#more-left-nav-nafezly-turn').toggleClass('open');">
                                <div class="col-12 px-0 row">
                                    <div class="col-10 px-0">
                                        <span class="fal fa-stream mx-2"></span> عرض المزيد
                                    </div>
                                    <div class="col-2 text-left">
                                        <span class="fal fa-angle-down mx-2 font-3" id="more-left-nav-nafezly-turn"
                                            style="transform: rotate(90deg)"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="display: none;" id="more-left-nav-nafezly" class="p-3">
                            <div class="col-12 px-0">
                                <div class="nav-item ">
                                    <a class="nav-link" href="/guarantee"><span
                                            class="fal fa-clipboard-check mx-2"></span>ضمان الحقوق</a>
                                </div>
                                <div class="nav-item ">
                                    <a class="nav-link" href="/referral"><span
                                            class="fal fa-usd-circle mx-2"></span>التسويق بالعمولة</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/faq"><span class="fal fa-question mx-2"></span>
                                        الإسئلة
                                        الشائعة</a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="https://blog.nafezly.com"><span
                                            class="fal fa-pen-alt mx-2"></span> مدونة نفذلي </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/privacy-policy"><span
                                            class="fal fa-lock-alt mx-2"></span> سياسة الخصوصية </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="/terms"><span class="fal fa-list-ul mx-2"></span>
                                        شروط
                                        الاستخدام </a>
                                </div>
                            </div>
                        </div> --}}
                        <div class="nav-item">
                            <a class="nav-link" href="/projects/create"><span
                                    class="fal fa-plus mx-2"></span>إضافة مشروع</a>
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
            <nav class="navbar navbar-expand-md navbar-inverse navbar-light  fixed-top  py-1 "
                style="background: var(--bg-second-bg);padding: 0px 0px;margin-bottom: 0px;z-index: 10000; transition: .3s all cubic-bezier(0.25, 0.46, 0.45, 0.94);width: 100%!important;max-width: 100%!important;right: 0px;left: 0px;box-shadow: 0 .03rem .25rem rgba(0,0,0,0.09)!important;"
                id="nafezly-navbar">
                <div class="container text-left  px-0">
                    <div class="col-12 row px-0">
                        <div class="col-1 px-0 d-flex align-items-center" style="z-index: 12;">
                            <a class="navbar-brand" href="/">
                                <img src="/site_images/logos/logo2-01.svg"
                                    style="height: 45px; background: var(--bg-second-bg); padding: 2px!important"
                                    alt="لوجو موقع وسيط" id="nafezly-logo">
                            </a>
                        </div>
                        <div class="col-11 row px-0" style="justify-content: flex-end;">
                            <a class="  nav-bar-icon text-center  ml-1 d-none d-md-inline-block"
                                style="position: relative;cursor: pointer;padding: 14px 0px 0px;text-align: center;color: #65676b;min-width: 107px;border-radius: 5px;"
                                id="nav-services" href="/services">
                                <span class="fas fa-boxes"
                                    style="; font-size: 18px;text-align: center;display: inline-block; padding:0px;"
                                    class="nav-item d-inline-block"></span>
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
                                        <img src="/site_images/user.png"
                                            style="width: 36px;border-radius: 50%!important;padding: 0px;height: 36px;border:0px solid #fff;background: var(--bg-main-bg)"
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
                                                                class="fal fa-moon ml-2"></span> تغيير الوضع </li>
                                                    </a>
                                                    <a href="/" class="py-2 px-3  d-block  hover-darker">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal fa-tachometer-alt-slow ml-2"></span>لوحة
                                                            التحكم
                                                        </li>
                                                    </a>
                                                    <a href="https://nafezly.com/my/projects/all"
                                                        class="py-2 px-3  d-block hover-darker">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal  fa-suitcase ml-2"></span> مشاريعي </li>
                                                    </a>
                                                    <a href="/freelancer/{{auth()->user()->id}}"
                                                        class="py-2 px-3  d-block hover-darker">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)"> <span
                                                                class="fal fa-user ml-2"></span> حسابي الشخصي</li>
                                                    </a>
                                                    <a href="#" class="py-2 px-3 d-block logout-nafezly hover-darker"
                                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                        <li style="font-size: 14px;color: var(--bg-color-0)">
                                                            <span class="fal fa-sign-in-alt ml-2"></span> تسجيل خروج
                                                        </li>
                                                    </a>
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
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
            </main>
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
    <script type="text/javascript"></script>
    <script type="text/javascript"></script>
    <script src="/livewire/livewire.js?id=a3766c6f9aadee9b7977" data-turbo-eval="false" data-turbolinks-eval="false">
    </script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
        window.livewire = new Livewire();
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = 'wTltBzOqWTCgKGnIgFPvX9FrkPP3Kjqgun8qDNEm';
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };
        let started = false;
        window.addEventListener('alpine:initializing', function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
    </script>
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
</body>

</html>
