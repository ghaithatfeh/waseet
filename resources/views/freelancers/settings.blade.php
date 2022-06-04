@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
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
                                        <a href="https://nafezly.com/u/ghaith_atfeh">
                                            <div
                                                style="width: 150px;display: inline-block;border-radius: 50%!important;box-shadow: 0px 0px 12px var(--bg-main-bg);max-width: 100%; height: 150px;position: absolute;  left: 0;   right: 0;  margin-left: auto;   margin-right: auto;  ">
                                                <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/avatars/24414_1653664595_6290eb5310a48.jpg"
                                                    style="width: 100%;border-radius:inherit;padding: 10px;height: 100%;border-radius: 50%">
                                                <a href="https://nafezly.com/profile/personal-data">
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
                                            <a href="/my/verification"
                                                class="d-block
                                                "
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fas fa-badge-check  d-inline-block  font-3" style="color: var(--bg-color-2);
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
                    <div class="col-12  col-lg-9 col-md-8 text-center  content-area  px-0 px-md-3 pb-2">
                        <form method="POST" action="https://nafezly.com/profile/website_settings" id="profile-update-form">
                            <input type="hidden" name="_token" value="Z3WrjXrtyhCz3Vv61uzZv3NWoMugL9oDyIqTnDDL">
                            <div style=";padding: 0px; min-height: 700px; "
                                class="col-12 row  mt-0 mt-md-5   main-nafez-box-styles">
                                <div style=";" class="col-12   px-0    ">
                                    <div class="col-12 px-0  " style="border-bottom: 1px solid var(--bg-main-bg);   ">
                                        <nav class="navbar navbar-expand-lg   px-0 py-0">
                                            <span class="navbar-brand " href="#"
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
                                                        <a class="nav-link font-1 py-3 px-3 d-inline-block "
                                                            href="/freelancers/personal-data/{{ $user->id }}"
                                                            style="color: var(--bg-color-0);">البيانات الشخصية</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link font-1 py-3 px-3 d-inline-block "
                                                            href="/freelancers/settings/{{ $user->id }}"
                                                            style="color: var(--bg-color-0);border-bottom: 3px solid #000">بيانات
                                                            الموقع</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </nav>
                                    </div>
                                    <div class="col-12" style="padding:12px 5px">
                                        <div class="col-12 col-md-12 mb-4 py-4 row text-center row">
                                            <div class="col-12 col-md-6 mb-3">
                                                <div class="col-12 font-1">
                                                    التخصص
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <select class=" col-12 font-1 form-control py-0 px-2"
                                                        name="specialization_id">
                                                        <option selected="" disabled=""></option>
                                                        <option value="1">أعمال وخدمات استشارية وإدارية</option>
                                                        <option value="2" selected>برمجة، تطوير المواقع والتطبيقات</option>
                                                        <option value="3">تصميم وأعمال فنية وإبداعية</option>
                                                        <option value="4">تسويق الكتروني ومبيعات</option>
                                                        <option value="5">كتابة، صناعة محتوى، ترجمة ولغات</option>
                                                        <option value="6">تدريب، تعليم ومساعدة عن بعد</option>
                                                        <option value="7">أمور أخرى</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6  mb-3">
                                                <div class="col-12  kufi font-1 ">
                                                    المسمى الوظيفي
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <input type="text" name="job_title" class="form-control" required=""
                                                        minlength="3" maxlength="20" value="Full Stack Developer"
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
                                                    <textarea class="col-12 form-control" style="min-height: 250px" name="bio"></textarea>
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
                                            <div class="col-12 mb-3">
                                                <div class="col-12 font-1">
                                                    نوع الحساب
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <div class="d-inline-block border ">
                                                        <div class="px-3">
                                                            <div class="col-12 px-0 row mt-2 ">
                                                                <div style="width: 40px">
                                                                    <div class="control-group py-2 px-2">
                                                                        <label class="control control-checkbox">
                                                                            <input type="checkbox" id="employer"
                                                                                name="user_type_employer" data-ui=""
                                                                                data-filter="specialize" value="employer" />
                                                                            <div class="control_indicator"></div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div style="width: calc(100% - 40px)"
                                                                    class="pt-2">
                                                                    <label class="kufi mb-0" for="employer"
                                                                        style="cursor: pointer;color: var(--bg-font-4);font-size: 12px">صاحب
                                                                        مشاريع - مشتري خدمات</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <hr class="mb-1">
                                                        <div class="px-3">
                                                            <div class="col-12 px-0 row"
                                                                onclick="if($('#freelancer').is(':checked')) $('#available-freelancer').prop('checked', false);">
                                                                <div style="width: 40px">
                                                                    <div class="control-group py-2 px-2">
                                                                        <label class="control control-checkbox">
                                                                            <input type="checkbox" id="freelancer"
                                                                                name="user_type_freelancer" data-ui=""
                                                                                data-filter="specialize" value="freelancer"
                                                                                checked="" />
                                                                            <div class="control_indicator"></div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div style="width: calc(100% - 40px)"
                                                                    class="pt-2">
                                                                    <label class="kufi mb-0" for="freelancer"
                                                                        style="cursor: pointer;color: var(--bg-font-4);font-size: 12px">منفذ
                                                                        مشاريع - بائع خدمات</label>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 px-0 row pr-4"
                                                                onclick="if($('#available-freelancer').is(':checked')) $('#freelancer').prop('checked', true);">
                                                                <div style="width: 40px">
                                                                    <div class="control-group py-0 px-2">
                                                                        <label class="control control-checkbox">
                                                                            <input type="checkbox" id="available-freelancer"
                                                                                name="user_type_freelancer" data-ui=""
                                                                                data-filter="specialize"
                                                                                value="available-freelancer" checked="" />
                                                                            <div class="control_indicator"></div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div style="width: calc(100% - 40px)"
                                                                    class="pt-2">
                                                                    <label class="kufi mb-3"
                                                                        for="available-freelancer"
                                                                        style="cursor: pointer;color: var(--bg-font-4);font-size: 12px">متاح
                                                                        للتوظيف حالياً</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                                <div class="col-12 mt-2">
                                                    <div class="d-inline-block ">
                                                        <div class="px-3">
                                                            <div class="col-12 px-0 row mt-2 ">
                                                                <div style="width: 40px">
                                                                    <div class="control-group py-2 px-2">
                                                                        <label class="control control-checkbox">
                                                                            <input type="checkbox" id="subscribe_newsletter"
                                                                                name="subscribe_newsletter" data-ui=""
                                                                                data-filter="specialize" value="1"
                                                                                checked="" />
                                                                            <div class="control_indicator"></div>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div style="width: calc(100% - 40px)"
                                                                    class="pt-2">
                                                                    <label class="kufi mb-0"
                                                                        for="subscribe_newsletter"
                                                                        style="cursor: pointer;color: var(--bg-font-4);font-size: 12px">الإشتراك
                                                                        في القائمة البريدية</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
    </div>
@endsection
