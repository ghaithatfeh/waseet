@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
            /*.dash-list-area div:hover {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area div:hover span {
                                color: #fff !important;
                            }

                            .dash-list-area .active {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area .active span {
                                color: #fff !important;
                            }
                            */
        </style>
        <div class="col-12 px-0">
            <div class="container ">
                <div class="col-12 row px-0">
                    <style type="text/css">
                        .dash-list-area a,
                        .dash-list-area a * {
                            color: var(--bg-font-4) !important;
                        }

                        .dash-list-area a.active,
                        .dash-list-area a.active *,
                        .dash-list-area a:hover,
                        .dash-list-area a:hover * {
                            background: var(--bg-color-3) !important;
                            color: #fff !important;
                        }

                        /*.dash-list-area a>div {
                                border-bottom: 1px solid var(--bg-second-bg)
                            }

                            .dash-list-area a:hover * {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area a:hover * {
                                color: var(--bg-second-bg) !important;
                            }

                            .dash-list-area .active {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area .active * {
                                color: var(--bg-second-bg) !important;
                            }
                            .dash-list-area a:hover * {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area a:hover span {
                                color: var(--bg-second-bg) !important;
                            }

                            .dash-list-area .active {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area .active span {
                                color: var(--bg-second-bg) !important;
                            }
                            .dash-list-area a:hover * {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area a:hover span {
                                color: var(--bg-second-bg) !important;
                            }

                            .dash-list-area .active {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area .active span {
                                color: var(--bg-second-bg) !important;
                            }
                            .dash-list-area a:hover * {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area a:hover span {
                                color: var(--bg-second-bg) !important;
                            }

                            .dash-list-area .active {
                                background: var(--bg-color-3) !important;
                            }

                            .dash-list-area .active span {
                                color: var(--bg-second-bg) !important;
                            }*/




                        .croppie-container .cr-resizer,
                        .croppie-container .cr-viewport {
                            box-shadow: unset;
                        }

                        .croppie-container {
                            width: 100%;
                            height: unset !important;
                            /* height: 100%; */
                        }
                    </style>
                    <div class="col-12 col-lg-3 col-md-4 text-center px-0  " style="width: 100%;position: relative;">
                        <div class="col-12 px-0 ">
                            <div class="col-12 text-center px-0 mb-0" style="direction: ltr;">
                                <div class=" mt-5  text-center "
                                    style="display: inline-block;padding: 0px!important;border-radius: 6px!important;padding: 37px 0px!important;max-width: 100%">
                                    <div
                                        style="width: 150px; display: inline-block;border-radius: 50%!important;max-width: 100%;position: relative;height: 150px;">
                                        <a href="/freelancers/{{ $user->id }}">
                                            <div
                                                style="width: 150px;display: inline-block;border-radius: 50%!important;box-shadow: 0px 0px 12px var(--bg-main-bg);max-width: 100%; height: 150px;position: absolute;  left: 0;   right: 0;  margin-left: auto;   margin-right: auto;  ">
                                                <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                                    style="width: 100%;border-radius:inherit;padding: 10px;height: 100%;border-radius: 50%">
                                                <a href="/my/personal-data">
                                                    <div style="position: absolute;width: 40px;height: 40px;left: 6px;bottom: 10px;border-radius: 50%!important;background: var(--bg-second-bg);cursor: pointer;padding: 8px 0px;border:1px dashed var(--bg-font-4)"
                                                        class="  text-center hover-darker">
                                                        <span class="fal fa-user-edit"
                                                            style="color: var(--bg-font-4);"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <h5 class="text-center pt-2 mb-0 pb-0 mt-2 almaria"
                                        style="font-size: 23px;color: var(--bg-font-4); ">Ghaith Atfeh</h5>
                                </div>
                            </div>
                            <div>
                            </div>
                            <div class="col-12  mb-2 mt-4    d-block d-md-none p-3 main-nafez-box-styles " style="">
                                <div class="col-12 row px-0">
                                    <div class="col-6  pr-2 pt-1">
                                        لوحة التحكم
                                    </div>
                                    <div class="col-6 px-0 text-left">
                                        <span class="btn btn-light text-left pb-1"
                                            style="cursor: pointer; border-color: #dae0e5"
                                            onclick="$('.dash-list-area,.user-t3lam').slideToggle();"><span
                                                class="fa fa-bars text-left d-inline-block"
                                                style="color: var(--bg-color-1); "></span></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 px-md-3 mb-3 mb-md-0">
                                <div class="col-12  text-center px-0 dash-list-area  d-peter-none "
                                    style="border:1px solid var(--bg-main-bg) ;overflow: hidden;">
                                    <div class="col-12 p-2">
                                        لوحة التحكم
                                    </div>
                                    <div class="col-12 px-0 d-flex row">
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/" class="d-block" style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-home d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            الرئيسية
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/profile/personal-data" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-user d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            حسابي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/balance" class="d-block" style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-money-check  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            الرصيد
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/my/projects/all" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-suitcase  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            مشاريعي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/my/portfolios" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-images  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            أعمالي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/my/services" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-boxes  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            خدماتي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/deals/list?self=2&type=all"
                                                class="d-block
                                                "
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-handshake  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            صفقاتي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/tickets"
                                                class="d-block
                                                "
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-ticket-alt  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            تذاكري
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/my/verification"
                                                class="d-block
                                                "
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fas fa-badge-check  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);
                                                                                color: #4caf50!important;
                                        
                                    "></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            توثيق
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/my/referral"
                                                class="d-block
                                                "
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-usd-circle  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            التسويق
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="https://nafezly.com/analytics" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-chart-bar d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            إحصائيات
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="https://nafezly.com/community" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-users d-inline-block  font-3"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            المجتمع
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 p-2">
                                        مركز المساعدة
                                    </div>
                                    <div class="col-12 row p-0">
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/guide" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-book d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            الدليل
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="#" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;"
                                                onclick="$('.nafezly-robot').slideToggle();">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-robot  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            الروبوت
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/support" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-life-ring  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            الدعم
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 user-t3lam  d-peter-none mb-5 px-0 px-md-3 d-none d-md-block">
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-9 col-md-8 text-center content-area px-0 px-md-3">
                        <div style="padding: 0px;" class="col-12 row mt-0 mt-md-5">
                            <div class="col-12 px-2">
                                <div style="background: var(--bg-second-bg);" class="col-12 px-0">
                                    <div class="col-12 row px-0" style="border-bottom: 1px solid var(--bg-main-bg);">
                                        <div class="col-6 p-0">
                                            <h5 style="color: var(--bg-color-0);font-size: 17px;"
                                                class="m-0 py-3 px-4 font-2 font-md-2 d-inline-block">معرض خدماتي</h5>
                                        </div>
                                        <div class="col-6 text-left px-2" dir="ltr" style="padding-top: 8px;">
                                            <a href="https://nafezly.com/service/create" class="d-inline-block ">
                                                <span class="btn btn-primary cairo"
                                                    style=" padding: 5px 20px 9px;cursor: pointer;border:none;">إضافة
                                                    خدمة</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 row pb-5" style="padding:10px 0px;">
                                <div class="col-12 row px-0">
                                </div>
                                <div class="col-12 px-0">
                                </div>
                                <div class="col-12 px-2">
                                    <div class="row col-12 align-items-center"
                                        style="min-height: 50vh;margin: 0% 0px;background: var(--bg-second-bg)">
                                        <div class="row align-items-center">
                                            <div class="col text-center">
                                                <img src="https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-07-512.png"
                                                    width="120" style="opacity: .7;">
                                                <div class="col-12 nafezly-alert font-1 mx-auto mt-3"
                                                    style="max-width:100%;width:500px;">
                                                    <h4 class="font-1 p-3 " style="line-height:1.8"> <span
                                                            class="fal fa-lightbulb"></span> للمستقلين: تتيح لك منصة نفذلي
                                                        إمكانية إضافة خدمات يمكنك تقديمها بمقابل تقوم بتحديده </h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- <div style="padding: 0px;  " class="col-12 row  mt-0 mt-md-5 ">
                            <div class="col-12 px-2">
                                <div style="background: var(--bg-second-bg);" class="col-12 px-0">
                                    <div class="col-12  row px-0" style="border-bottom: 1px solid var(--bg-main-bg);   ">
                                        <div class="col-6   p-0">
                                            <h5 style="color: ;font-size: 17px;"
                                                class="m-0 py-3 px-4 font-2 font-md-2 cairo d-inline-block ">حقيبة المشاريع
                                            </h5>
                                        </div>
                                        <div class="col-6 text-left px-2" dir="ltr" style="padding-top: 8px;">
                                            <a href="/projects/create" class="d-inline-block ">
                                                <span class="btn btn-primary cairo"
                                                    style=" padding: 5px 20px 9px;cursor: pointer;border:none;">إضافة
                                                    مشروع</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 row pb-5 px-2" style="padding:10px 0px;">
                                @forelse ($user->projects as $project)
                                    <div class="col-12 main-nafez-box-styles p-3 p-lg-4 mb-lg-3 mb-3 project-box"
                                        style="border-radius:5px;transition: 0.1s all ease-in-out;overflow: hidden;">
                                        <div class="col-12 p-0 row d-flex ">
                                            <div class="col-12 col-lg-9 p-0">
                                                <h2 style="font-size:16px;height: 23px;"
                                                    class="d-block text-truncate overflow-hidden m-0">
                                                    <a href="/projects/{{ $project->id }}"
                                                        style="color: var(--bg-color-3);"
                                                        class="text-truncate">{{ $project->title }}</a>
                                                </h2>
                                                <div class="col-12 py-2 px-0">
                                                    <h3 class="naskh font-1 m-0 col-12 col-lg-10 px-0"
                                                        style="color:var(--bg-font-4);line-height: 1.8;overflow: hidden;height: 48px">
                                                        {{ $project->description }}
                                                    </h3>
                                                </div>
                                                <div class="col-12 px-0 row align-items-center justify-content-between text-truncate mb-2 mb-lg-0 d-lg-flex d-none"
                                                    style="flex-wrap: nowrap;">
                                                    <div class="d-flex align-items-center">
                                                        <a href="/freelancers/{{ $project->user->id }}"
                                                            class="d-inline-block">
                                                            <img src="{{ asset('uploaded_images/users/' . ($project->user->profile_image ?? 'defualt.png')) }}"
                                                                style="width: 40px;border-radius:inherit;padding: 3px;;border-radius: 50%;height: 40px;border:1px solid rgb(139 139 139 / 18%);object-fit: cover;">
                                                        </a>
                                                        <div class="d-inline-block pl-0 pr-3" style="font-size:13px">
                                                            <a href="/freelancers/{{ $project->user->id }}"
                                                                style="color: inherit;opacity: .8;">
                                                                {{ $project->user->first_name . ' ' . $project->user->last_name }}
                                                            </a>
                                                            <div class="d-block mt-1"
                                                                style="font-size:10px;opacity: 0.6;">
                                                                <span class="d-inline-block">
                                                                    <span
                                                                        class="fas fa-map-marker-alt mb-1  pl-0 pl-md-1 "></span>
                                                                    {{ $project->user->country->name ?? '' }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 p-0">
                                                <div class="d-none d-lg-block  px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-usd-circle " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        {{ number_format($project->budget->from) . ' - ' . number_format($project->budget->to) }}
                                                        ل.س
                                                    </span>
                                                </div>
                                                <div class="d-none d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-business-time " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        {{ $project->expected_deadline }} أيام
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-ballot " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        1 عروض
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-clock " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        @php
                                                            Carbon\Carbon::setLocale('ar_EH');
                                                            $time = $project->created_at->diffForHumans(Carbon\Carbon::now());
                                                        @endphp
                                                        {{ $time }}
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-none px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-map-marker-alt" aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        {{ $project->user->country->name ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="fas fa-check-circle " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;color:#28a745;"></span>
                                                        {{ $project->status }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12 px-2">
                                        <div class="col-12 px-0">
                                            <script type="text/javascript">
                                                var get_body = document.getElementById("body");
                                                if (!get_body) {
                                                    location.reload();
                                                }
                                            </script>
                                            <div class="col-12 pt-1 px-0 pb-0">
                                                <div class="col-12 px-2">
                                                    <div class="col-12 px-0 ">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 pb-1 pt-2">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-2">
                                        <div class="row col-12 align-items-center"
                                            style="min-height: 50vh;margin: 0% 0px;background: var(--bg-second-bg)">
                                            <div class="row align-items-center">
                                                <div class="col text-center">
                                                    <img src="https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-07-512.png"
                                                        width="120" style="opacity: .7;">
                                                    <div class="col-12 nafezly-alert font-1 mx-auto mt-3"
                                                        style="max-width:100%;width:500px;">
                                                        <h4 class="font-1 p-3 " style="line-height:1.8"> <span
                                                                class="fal fa-lightbulb"></span> لأصحاب المشاريع: المشاريع
                                                            هي
                                                            المهام التي تحتاج أن ينجزها لك أحد المستقلين على نفذلي </h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforelse
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
