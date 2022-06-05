@extends('layouts.app')
@section('content')
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
            .croppie-container .cr-viewport {
                box-shadow: 0 0 2000px 2000px rgba(0, 0, 0, 0.5) !important;
            }

            .ltr,
            .ltr * {
                direction: ltr !important;
                text-align: unset;
            }

        </style>
        <button type="button" class="change-pic-btn d-none" data-toggle="modal" data-target=".ch-pic-modal"></button>
        <div class="modal fade ch-pic-modal" tabindex="-1" role="dialog" aria-hidden="true" id="avatar-modal">
            <div class="modal-dialog modal-lg" style="width: 500px;max-width: 100%">
                <div class="modal-content">
                    <div class="mx-auto col-12 px-0" style="max-width: 100%;border-radius: 3px;overflow: hidden;">
                        <div class="col-12 row border-bottom">
                            <div class="col-9 py-3">
                                تغيير الصورة الشخصية
                            </div>
                            <div class="col-3   text-left pt-1 px-0">
                                <span class="far fa-times p-3" style="color: #333;cursor: pointer;" data-dismiss="modal"
                                    aria-label="Close"></span>
                            </div>
                        </div>
                        <div class="col-12 pt-5 pb-4 px-2">
                            <div class="col-12 px-0 ltr">
                                <img class="my-image" id="demo-basic" style="z-index: 45454" />
                            </div>
                            <div class="col-12 text-left mt-3">
                                <button class="btn btn-secondary mx-1 font-1" data-dismiss="modal"
                                    aria-label="Close">إلغاء</button>
                                <button class="btn btn-primary mx-1 font-1 save-image" data-dismiss="modal"
                                    aria-label="Close">تغيير الصورة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-5 change-profile-pic-modal"
            style="position: fixed;width: 100%;z-index: 66666;background: var(--bg-second-bg);height: 100vh;display: none;margin-top: -60px">
        </div>
        <div class="col-12 px-0">
            <div class="container  ">
                <div class="col-12 row  px-0">
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
                                                <a href="/freelancers/personal-data/{{ $user->id }}">
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
                                        style="font-size: 23px;color: var(--bg-font-4); ">
                                        {{ $user->first_name . ' ' . $user->last_name }}</h5>
                                </div>
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
                                            <a href="/profile/personal-data"
                                                class="d-block
                                                    active
                                                "
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
                                            <a href="/balance" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
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
                                            <a href="/my/verification" class="d-block"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fas fa-badge-check  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2); color: #4caf50!important;"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            توثيق
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1" style="">
                                            <a href="/my/referral" class="d-block"
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
                                            <a href="#" class="d-block" style="border-radius: 7px;overflow: hidden;"
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
                    <div x-data="{ formType: true }"
                        class="col-12  col-lg-9 col-md-8 text-center  content-area  px-0 px-md-3 pb-2">
                        <form method="POST" action="/freelancers/personal_data_update/{{ $user->id }}"
                            enctype="multipart/form-data" id="profile-update-form">
                            @csrf
                            <div style="padding: 0px; min-height: 700px;"
                                class="col-12 row mt-0 mt-md-5 main-nafez-box-styles">
                                <div class="col-12 px-0">
                                    <div class="col-12 px-0" style="border-bottom: 1px solid var(--bg-main-bg)">
                                        <nav class="navbar navbar-expand-lg px-0 py-0">
                                            <span class="navbar-brand" href="#"
                                                style="padding: 12px 0px!important;color: var(--bg-color-0) ;font-size: 16px">حسابي</span>
                                            <button class="navbar-toggler p-0" type="button" data-toggle="collapse"
                                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                                aria-expanded="false" aria-label="Toggle navigation">
                                                <span class="fal fa-caret-down font-2 border ml-2 py-1 px-2 hover-light"
                                                    style="color: #999"></span>
                                            </button>
                                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                <ul class="navbar-nav mr-auto pr-0">
                                                    <li class="nav-item">
                                                        <a @click.prevent="formType= true"
                                                            class="nav-link font-1 py-3 px-3 d-inline-block" href="#"
                                                            :style="formType && { borderBottom: '3px solid #000' }"
                                                            style="color: var(--bg-color-0);">
                                                            البيانات الشخصية
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a @click.prevent="formType = false"
                                                            class="nav-link font-1 py-3 px-3 d-inline-block" href="#"
                                                            :style="!formType && { borderBottom: '3px solid #000' }"
                                                            style="color: var(--bg-color-0);">بيانات الموقع</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>

                                    <div x-show="formType" class="col-12" style="padding:12px 5px">
                                        <div class="col-12 col-md-12 mb-4 py-4 row text-center row">
                                            <div class="col-12 col-md-3 text-center mb-5">
                                                {{-- upload profile image --}}
                                                <div class="text-center"
                                                    style="height: 130px;width: 130px;border-radius: 50%!important;background-image: url('{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}'); background-size: cover; background-position: center;display: inline-block;cursor: pointer;position: relative;"
                                                    id="pf_foto">
                                                    <div class="text-left px-0 "
                                                        style="position: absolute;bottom: 10px;width: 100%;z-index: 2">
                                                        <span
                                                            class="btn  font-small d-inline-block mx-auto hover-darker btn-primary"
                                                            style="border-radius: 30px;z-index: 2;position: relative;"
                                                            onclick="$('#profile_image').click();">تغيير الصورة</span>
                                                    </div>
                                                    <input type="file" name="profile_image" id="profile_image"
                                                        style="width: 100%;height: 130px;opacity: 0;z-index: 1;cursor: pointer;border-radius: 50%"
                                                        onclick="this.value=null;">
                                                    {{-- <input type="hidden" name="avatar" id="encoded_image"> --}}
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-9 row">
                                                <div class="col-12 mb-4">
                                                    <div class="col-12 font-1">
                                                        الاسم الاول
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <input type="" name="first_name" class="form-control"
                                                            minlength="2" maxlenght="30" required=""
                                                            value="{{ $user->first_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <div class="col-12 font-1">
                                                        اسم العائلة
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <input type="" name="last_name" class="form-control"
                                                            minlength="2" maxlenght="30" required=""
                                                            value="{{ $user->last_name }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-4">
                                                    <div class="col-12 font-1">
                                                        رقم الهاتف <span style="color: #919191;"
                                                            class="font-small"></span>
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <input type="" name="phone" class="form-control" minlength="10"
                                                            minlength="30" value="{{ $user->phone }}">
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="col-12 font-1">
                                                        الجنس <span style="color: #919191;" class="font-small">(
                                                            إختياري )</span>
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <select class="form-control py-0 px-3" name="gender">
                                                            <option selected="" disabled=""></option>
                                                            <option value="Male"
                                                                {{ $user->gender == 'Male' ? 'selected' : '' }}>ذكر
                                                            </option>
                                                            <option value="Female"
                                                                {{ $user->gender == 'Female' ? 'selected' : '' }}>
                                                                انثى
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6 mb-4">
                                                    <div class="col-12 font-1">
                                                        تاريخ الميلاد <span style="color: #919191;"
                                                            class="font-small">( إختياري )</span>
                                                    </div>
                                                    <div class="col-12 mt-2 row">
                                                        <div class="col-4 px-0">
                                                            <select class="form-control py-0 px-1" name="day">
                                                                <option selected="" disabled="">يوم</option>
                                                                @for ($i = 1; $i <= 31; $i++)
                                                                    <option
                                                                        {{ $user->birthdate->format('d') == $i ? 'selected' : '' }}
                                                                        value="{{ $i }}">
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="col-4 px-0">
                                                            <select class="form-control py-0 px-1"
                                                                style="border-left: none;border-right: none;" name="month">
                                                                <option selected="" disabled="">شهر</option>
                                                                @for ($i = 1; $i <= 12; $i++)
                                                                    <option
                                                                        {{ $user->birthdate->format('m') == $i ? 'selected' : '' }}
                                                                        value="{{ $i }}">
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="col-4 px-0">
                                                            <select class="form-control py-0 px-1" name="year">
                                                                <option selected="" disabled="">سنة</option>
                                                                @for ($i = 2010; $i >= 1950; $i--)
                                                                    <option
                                                                        {{ $user->birthdate->format('Y') == $i ? 'selected' : '' }}
                                                                        value="{{ $i }}">
                                                                        {{ $i }}
                                                                    </option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-4 mt-2">
                                                    <div class="col-12 text-left">
                                                        <button class="btn btn-primary font-1">حفظ التغييرات</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 px-0 mt-2" style="position: relative;display: none;">
                                                <div class="col-12 mt-3 ">
                                                </div>
                                                <div class="col-12 mt-2 text-center">
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div x-show="!formType" class="col-12" style="padding:12px 5px">
                                        <div class="col-12 col-md-12 mb-4 py-4 row text-center row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <div class="col-12 font-1">
                                                    التخصص
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <select class=" col-12 font-1 form-control py-0 px-2"
                                                        name="category_id">
                                                        {{-- <option selected="" disabled=""></option>
                                                        <option value="1">أعمال وخدمات استشارية وإدارية</option>
                                                        <option value="2" selected>برمجة، تطوير المواقع والتطبيقات</option>
                                                        <option value="3">تصميم وأعمال فنية وإبداعية</option>
                                                        <option value="4">تسويق الكتروني ومبيعات</option>
                                                        <option value="5">كتابة، صناعة محتوى، ترجمة ولغات</option>
                                                        <option value="6">تدريب، تعليم ومساعدة عن بعد</option>
                                                        <option value="7">أمور أخرى</option> --}}
                                                        @foreach ($categories as $category)
                                                            <option
                                                                {{ $user->category_id == $category->id ? 'selected' : '' }}
                                                                value="{{ $category->id }}">
                                                                {{ $category->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6  mb-3">
                                                <div class="col-12  kufi font-1 ">
                                                    المسمى الوظيفي
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <input type="text" name="job_name" class="form-control" required=""
                                                        minlength="3" maxlength="20" value="{{ $user->job_name }}"
                                                        id="job_title">
                                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                        class="pt-1 naskh">أدخل مسمى وظيفي واحد لتظهر بنتائج البحث.
                                                        مثال: مهندس معماري </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="col-12 font-1">
                                                    نبذة
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <textarea class="col-12 form-control" style="min-height: 250px" name="description">{{ $user->description }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="col-12 font-1">
                                                    المهارات الشخصية
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <select class="select3-skills col-12 px-0" multiple="" name="tag_id[]"
                                                        style="height: 35px;border-color: #d0d0d0!important;"></select>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-4 mt-2">
                                                <div class="col-12 text-left">
                                                    <button class="btn btn-primary font-1">حفظ التغييرات</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            document.addEventListener("DOMContentLoaded", function(event) {
                $.extend($.validator.messages, {
                    required: "برجاء ملئ هذا الحقل",
                    remote: "يرجى تصحيح هذا الحقل للمتابعة",
                    email: "رجاء إدخال عنوان بريد إلكتروني صحيح",
                    url: "رجاء إدخال عنوان موقع إلكتروني صحيح",
                    date: "رجاء إدخال تاريخ صحيح",
                    dateISO: "رجاء إدخال تاريخ صحيح (ISO)",
                    number: "رجاء إدخال عدد بطريقة صحيحة",
                    digits: "رجاء إدخال أرقام فقط",
                    creditcard: "رجاء إدخال رقم بطاقة ائتمان صحيح",
                    equalTo: "رجاء إدخال نفس القيمة",
                    extension: "رجاء إدخال ملف بامتداد موافق عليه",
                    maxlength: $.validator.format("الحد الأقصى لعدد الحروف هو {0}"),
                    minlength: $.validator.format("الحد الأدنى لعدد الحروف هو {0}"),
                    rangelength: $.validator.format("عدد الحروف يجب أن يكون بين {0} و {1}"),
                    range: $.validator.format("رجاء إدخال عدد قيمته بين {0} و {1}"),
                    max: $.validator.format("رجاء إدخال عدد أقل من أو يساوي {0}"),
                    min: $.validator.format("رجاء إدخال عدد أكبر من أو يساوي {0}")
                });
            });
        </script>
        <script type="text/javascript"></script>
    @section('script')
        $("#profile-update-form").validate({});
    @endsection
</div>
@endsection
