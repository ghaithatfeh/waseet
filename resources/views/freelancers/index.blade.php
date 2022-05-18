@extends('layouts.app')
@section('content')

    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 px-0">
            <div class="container pt-md-4 pt-2   " style="min-height: 90vh">
                <div class="col-12 row px-0">
                    <div class="col-12 col-md-4 col-lg-3 p-0 ">
                        <div class="col-12 px-2">
                            <div class="col-12 row d-flex justify-content-betweem px-0"
                                style="padding-top: 19px;padding-bottom: 19px;">
                                <h1 class="col px-1 font-2 pt-1 font-lg-3">
                                    المنفذين
                                </h1>
                                <div class="col text-left px-1 font-1 d-md-none">
                                    <span style="cursor: pointer;background: var(--bg-second-bg);color:var(--bg-font-4);"
                                        class="btn py-1 px-2" onclick="$('.filter-aside').toggleClass('outside');">
                                        <span class="fas fa-abacus"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <style type="text/css">
                            .irs-bar {
                                position: relative !important;
                            }

                        </style>
                        <style type="text/css">
                            .tt {
                                display: inline-block;
                                float: right;
                                margin-left: 14px;

                            }

                            .nafezly-slider-projects-search * {
                                direction: ltr;
                            }

                            .irs-line {
                                height: 12px !important;
                                cursor: pointer;
                                position: relative;
                                top: 32px !important
                            }

                            .irs-bar {
                                height: 12px !important;
                                cursor: pointer;
                                position: relative;
                                top: 21px !important
                            }

                            .irs-handle.to,
                            .irs-handle.from.type_last {
                                cursor: pointer;
                            }

                            option,
                            .irs-from,
                            .irs-to,
                            .irs-max,
                            .irs-min {
                                font-family: '';
                            }

                            .page-link:focus {
                                z-index: 2;
                                outline: 0;
                                box-shadow: unset !important;
                            }

                        </style>
                        <div class="col-12  mb-3  py-md-0 px-0 px-md-1 position-md-relative d-md-block filter-aside outside"
                            style="width:100%">
                            <div class="col-12 d-md-none" style="border-bottom: 1px solid var(--bg-main-bg)">
                                <div class="col-12 row d-flex justify-content-betweem px-0"
                                    style="padding-top: 19px;padding-bottom: 19px;">
                                    <div class="col px-1 font-1">
                                        <a href="#" onclick="$('.filter-aside').toggleClass('outside');"
                                            style="color:var(--bg-color-3)">
                                            <span class="fas fa-chevron-right pl-1"
                                                style="font-size: 22px;color:var(--bg-color-3)"></span>
                                            <span style="position: relative;top: -2px">عودة</span>
                                        </a>
                                    </div>
                                    <div class="col text-left px-1 pt-1 font-1">
                                        <a href="#" style="color:var(--bg-color-3)"
                                            onclick="$('.filter-aside').toggleClass('outside');">
                                            نتائج البحث
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-3 px-md-0 py-md-0 py-3 aside-filter-container">
                                <div class="col-12   border-0  px-0">
                                    <div class="col-12 px-0 pb-5 " id="right-search-section">
                                        <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                            class=" py-2  pt-3 pt-md-0 px-2 mb-0  "> بحث </h2>
                                        <div class="col-12  px-2 mb-3  ">
                                            <input type="" name="key" class="form-control nafezly-filter " data-filter="key"
                                                value="">
                                        </div>
                                        <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                            التصنيفات </h2>
                                        <div class="control-group py-2 px-2 ">
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-user-tie ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="business"
                                                    style="cursor: pointer;color: var(--bg-font-4)">أعمال وخدمات استشارية
                                                    وإدارية </label>
                                                <input type="checkbox" id="business" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="business" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-code ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="development"
                                                    style="cursor: pointer;color: var(--bg-font-4)">برمجة، تطوير المواقع
                                                    والتطبيقات </label>
                                                <input type="checkbox" id="development" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="development" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-paint-brush-alt ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="design"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تصميم وأعمال فنية
                                                    وإبداعية </label>
                                                <input type="checkbox" id="design" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="design" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-bullseye-arrow ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="marketing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تسويق الكتروني ومبيعات
                                                </label>
                                                <input type="checkbox" id="marketing" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="marketing" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-pen-alt ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="writing-translation"
                                                    style="cursor: pointer;color: var(--bg-font-4)">كتابة، صناعة محتوى،
                                                    ترجمة ولغات </label>
                                                <input type="checkbox" id="writing-translation" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="writing-translation"
                                                    class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-headset ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="training"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تدريب، تعليم ومساعدة عن
                                                    بعد </label>
                                                <input type="checkbox" id="training" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="training" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal fa-ellipsis-h-alt ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="other"
                                                    style="cursor: pointer;color: var(--bg-font-4)">أمور أخرى </label>
                                                <input type="checkbox" id="other" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="other" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                            المهارات</h2>
                                        <div class="control-group py-2 px-2" style="min-height: 64px">
                                            <select class="select3 px-0 border-0 nafezly-filter" multiple=""
                                                style="width: 100%;background: #fff;opacity: 0" data-filter="skills"
                                                size="1">
                                                <option value="kayako"
                                                    data-extra-search="{'tag_name':'Kayako','arabic_name':'','english_name':'Kayako','slug':'kayako'}">
                                                    Kayako</option>
                                                <option value="vuejs"
                                                    data-extra-search="{'tag_name':'VueJs','arabic_name':'فيو js','english_name':'VueJs','slug':'vuejs'}">
                                                    VueJs</option>
                                            </select>
                                        </div>
                                        <div class="form-group pt-1">
                                            <label for="freelancer__rating" style="font-size: 16px;color: var(--bg-color-0)"
                                                class=" py-2  pt-3 px-2 mb-0 ">التقييم</label>
                                            <div class="text-beta">
                                                <style type="text/css">
                                                    .star-disactive {
                                                        color: #e0e0e0;
                                                    }

                                                    .star-active {
                                                        color: var(--bg-color-4);
                                                    }

                                                    .rating-input * {
                                                        cursor: pointer;
                                                    }

                                                </style>
                                                <span class="rating-input n-s-rating-input px-2" data-filter="rating">
                                                    <i class="fas fa-star font-3 star-disactive" data-value="1"></i>
                                                    <i class="fas fa-star font-3 star-disactive" data-value="2"></i>
                                                    <i class="fas fa-star font-3 star-disactive" data-value="3"></i>
                                                    <i class="fas fa-star font-3 star-disactive" data-value="4"></i>
                                                    <i class="fas fa-star font-3 star-disactive" data-value="5"></i>
                                                    <span class="float-left removeActive">
                                                        <span class="fas fa-times font-3 "
                                                            style="color: #e0e0e0;padding-top: 3px;padding-left: 6px"></span>
                                                    </span>
                                            </div>
                                        </div>
                                        <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                            متصل </h2>
                                        <div class="control-group py-2 px-2">
                                            <label class="control control-checkbox">
                                                <span class="fas fa-circle ml-1 " aria-hidden="true"
                                                    style="color: green"></span>
                                                <label class="kufi font-1" for="online"
                                                    style="cursor: pointer;color: var(--bg-font-4)">متصل الآن </label>
                                                <input type="checkbox" id="online" name="titles[]" data-ui=""
                                                    data-filter="online" value="1" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                            موثوق </h2>
                                        <div class="control-group py-2 px-2">
                                            <label class="control control-checkbox">
                                                <span class="fal fa-shield-check ml-1 " aria-hidden="true"
                                                    style="color: green"></span>
                                                <label class="kufi font-1" for="verified"
                                                    style="cursor: pointer;color: var(--bg-font-4)">هوية موثوقة </label>
                                                <input type="checkbox" id="verified" name="titles[]" data-ui=""
                                                    data-filter="verified" value="1" class="nafezly-filter" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8  col-lg-9 px-0 px-md-1 pt-md-4 search-response-container">
                        <script type="text/javascript">
                            var get_body = document.getElementById("body");
                            if (!get_body) {
                                location.reload();
                            }
                        </script>
                        <div class="col-12 row px-0">
                            <div class=" mt-0 col-6 col-sm-6 col-md-6 col-lg-4 p-1 p-lg-2  pb-2 text-center single-profile-card"
                                style="display: inline-block;  max-width: 100%;">
                                <div class="main-nafez-box-styles px-0 py-0 text-center profile-search-card rounded-0"
                                    style="border-radius: 8px!important;border:1px solid var(--bg-main-bg)!important;overflow: hidden;">
                                    <div
                                        style="width: 90px;background: var(--bg-second-bg);display: inline-block;border-radius: 50%!important;box-shadow: 0px 0px 12px var(--bg-main-bg);max-width: 100%; height: 90px; left: 0;   right: 0;margin: 10px auto;">
                                        <a href="https://nafezly.com/u/mogtaba_ahmed">
                                            <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/avatars/small/4483_1651756151_6273cc77a522f.jpg"
                                                style="width: 100%;border-radius:inherit;padding: 6px;height: 100%;border-radius: 50%;">
                                        </a>
                                    </div>
                                    <h2 class="text-center mb-0 pb-0   almaria font-1 font-md-2"
                                        style="color: var(--bg-color-0) ;font-size: 16px;text-transform: capitalize;">
                                        <span style="font-size: 13px;color:#1877f2;cursor: pointer;"
                                            class="fas verified-nafezly-badge fa-check-circle  text-center"
                                            data-placement="top" data-content="موثوق من منصة نفذلي" data-toggle="popover">
                                        </span>
                                        <a href="https://nafezly.com/u/mogtaba_ahmed" style="color: inherit;">
                                            Mohammed Almogtaba
                                        </a>
                                        <span class='fas fa-circle' style='color:#3bc100;font-size:12px'></span>
                                    </h2>
                                    <h2 class="text-center px-1  kufi mt-1 mb-0 font-small pt-1 " style="opacity: 0.65;">
                                        <span class="d-inline-block">
                                            <span class="fas fa-user-tie mb-1 pl-0 pl-md-1  "></span> كاتب محتوى
                                        </span>
                                        &nbsp;
                                        <span class="d-inline-block">
                                            <span class="fas fa-map-marker-alt pl-0 pl-md-1"></span>
                                            السودان
                                        </span>
                                    </h2>
                                    <h6 class="text-center pt-1" style="color: #c5c5c5">
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                    </h6>
                                    <div class="col-12 py-3" style="background: var(--bg-second-bg)"><a
                                            href="https://nafezly.com/u/mogtaba_ahmed" style="display: block;"><span
                                                class="btn btn-success text-center hover-darker col-12 font-1"
                                                style="background: var(--bg-color-3);border:none;border-radius: 4px;color: #fff">
                                                الملف الشخصي</span></a></div>
                                </div>
                            </div>
                            <div class=" mt-0 col-6 col-sm-6 col-md-6 col-lg-4 p-1 p-lg-2  pb-2 text-center single-profile-card"
                                style="display: inline-block;  max-width: 100%;">
                                <div class="main-nafez-box-styles px-0 py-0 text-center profile-search-card rounded-0"
                                    style="border-radius: 8px!important;border:1px solid var(--bg-main-bg)!important;overflow: hidden;">
                                    <div
                                        style="width: 90px;background: var(--bg-second-bg);display: inline-block;border-radius: 50%!important;box-shadow: 0px 0px 12px var(--bg-main-bg);max-width: 100%; height: 90px; left: 0;   right: 0;margin: 10px auto;">
                                        <a href="https://nafezly.com/u/AhmedMobarak">
                                            <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/avatars/small/17740_1637586321_619b95910b78f.jpg"
                                                style="width: 100%;border-radius:inherit;padding: 6px;height: 100%;border-radius: 50%;">
                                        </a>
                                    </div>
                                    <h2 class="text-center mb-0 pb-0   almaria font-1 font-md-2"
                                        style="color: var(--bg-color-0) ;font-size: 16px;text-transform: capitalize;">
                                        <a href="https://nafezly.com/u/AhmedMobarak" style="color: inherit;">
                                            Ahmed Mobarak
                                        </a>
                                        <span class='fas fa-circle' style='color:#3bc100;font-size:12px'></span>
                                    </h2>
                                    <h2 class="text-center px-1  kufi mt-1 mb-0 font-small pt-1 " style="opacity: 0.65;">
                                        <span class="d-inline-block">
                                            <span class="fas fa-user-tie mb-1 pl-0 pl-md-1  "></span> مصمم جرافيك
                                        </span>
                                        &nbsp;
                                        <span class="d-inline-block">
                                            <span class="fas fa-map-marker-alt pl-0 pl-md-1"></span>
                                            مصر
                                        </span>
                                    </h2>
                                    <h6 class="text-center pt-1" style="color: #c5c5c5">
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                    </h6>
                                    <div class="col-12 py-3" style="background: var(--bg-second-bg)"><a
                                            href="https://nafezly.com/u/AhmedMobarak" style="display: block;"><span
                                                class="btn btn-success text-center hover-darker col-12 font-1"
                                                style="background: var(--bg-color-3);border:none;border-radius: 4px;color: #fff">
                                                الملف الشخصي</span></a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 row px-0 pt-0 pb-4">
                            <nav>
                                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true">
                                        <span class="page-link">&laquo; السابق</span>
                                    </li>
                                    <li class="page-item">
                                        <a class="page-link" href="https://nafezly.com/freelancers?page=2"
                                            rel="next">التالي &raquo;</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <script type="text/javascript">
                            $(function() {
                                $('[data-toggle="popover"]').popover({
                                    trigger: "hover"
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
