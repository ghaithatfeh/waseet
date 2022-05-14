@extends('layouts.app')

@section('content')

    <main style="opacity:1;padding-top: 60px;z-index: 10" class="nafez-main-content">
        <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
            <form method="POST" action="https://nafezly.com/deal/offer-accept" style="display: none;" id="accept-deal">
                <input type="hidden" name="_token" value="wTltBzOqWTCgKGnIgFPvX9FrkPP3Kjqgun8qDNEm"> <input type="hidden"
                    name="offer_id" id="accept-offer-id">
            </form>
            <form method="POST"
                action="https://nafezly.com/project-update/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8/reopen"
                style="display: none;" id="project-reopen-form">
                <input type="hidden" name="_token" value="wTltBzOqWTCgKGnIgFPvX9FrkPP3Kjqgun8qDNEm">
            </form>
            <form method="POST"
                action="https://nafezly.com/project-update/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8/close"
                style="display: none;" id="project-close-form">
                <input type="hidden" name="_token" value="wTltBzOqWTCgKGnIgFPvX9FrkPP3Kjqgun8qDNEm">
            </form>
            <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="    z-index: 454454545;
                        background: rgba(0, 0, 0, 0.45);">
                <div class="modal-dialog  modal-lg" role="document" style="z-index: 444;">
                    <div class="modal-content">
                        <div class="col-12 px-0 row">
                            <div class="col-10" style="padding: 12px 16px;">
                                إعتماد العرض
                            </div>
                            <div class="col-2 p-0 d-flex justify-content-end">
                                <span class="fas fa-times close font-2 ml-1 p-3" data-dismiss="modal"></span>
                            </div>
                        </div>
                        <div class="nafezly-divider-right my-0" style="min-height:1px"></div>
                        <div class="modal-body">
                            <div class="alert nafezly-alert mb-0">
                                <ul class="p-2 py-3 mb-0">
                                    <li class="font-1">تضمن منصة نفذلي حقوقك كاملةً ويظل المبلغ في
                                        حسابك كاملاً لحين اعتماد انتهاء الصفقة من خلالك </li>
                                    <li class="font-1">خدمة عملاء نفذلي على مدار الساعة لإمدادك بالمزيد
                                        من الدعم على المنصة لذا لا تتردد ابدا في التواصل معنا إذا كان لديك اي
                                        استفسار او تساؤل</li>
                                </ul>
                            </div>
                        </div>
                        <div class="nafezly-divider my-0" style="min-height:1px"></div>
                        <div class="col-12 d-flex justify-content-end  p-2">
                            <button type="button" class="btn btn-light font-1 px-3 ml-2" data-dismiss="modal"
                                style="border-radius: 0px;">تراجع</button>
                            <button type="button" class="btn btn-success font-1 px-4" style="border-radius: 0px;"
                                onclick="document.getElementById('accept-deal').submit();">إعتماد العرض</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade close-project-modal" id="exampleModalCenter" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="    z-index: 454454545;
                        background: rgba(0, 0, 0, 0.45);">
                <div class="modal-dialog  modal-lg" role="document" style="z-index: 444;">
                    <div class="modal-content">
                        <div class="modal-header p-3">
                            <h5 class="modal-title kufi" id="exampleModalCenterTitle" style="font-size: 14px">
                                هل انت متاكد من عملية إغلاق المشروع ؟ </h5>
                        </div>
                        <div class="modal-body pb-0">
                            <div class="alert nafezly-alert mb-0">
                                <ul class="p-2 py-3 mb-0">
                                    <li class="font-1">سوف تقوم الآن بإغلاق المشروع ولن تتمكن من
                                        استقبال عروض جديدة على هذا المشروع</li>
                                    <li class="font-1">يمكنك كذلك إعادة فتح المشروع مرة اخرى في أي وقت
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer border-0 ">
                            <button type="button" class="btn btn-light kufi ml-1" data-dismiss="modal"
                                style="font-size: 14px;border-radius: 0px;">تراجع</button>
                            <button type="button" class="btn btn-success kufi" style="font-size: 14px;border-radius: 0px;"
                                onclick="document.getElementById('project-close-form').submit();">إغلاق
                                المشروع</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade reopen-project-modal" id="exampleModalCenter" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true" style="    z-index: 454454545;
                        background: rgba(0, 0, 0, 0.45);">
                <div class="modal-dialog  modal-lg" role="document" style="z-index: 444;">
                    <div class="modal-content">
                        <div class="modal-header p-3">
                            <h5 class="modal-title kufi" id="exampleModalCenterTitle" style="font-size: 14px">
                                هل انت متاكد من عملية إعادة فتح المشروع ؟ </h5>
                        </div>
                        <div class="modal-body pb-0">
                            <div class="alert nafezly-alert mb-0">
                                <ul class="p-2 py-3 mb-0">
                                    <li class="font-1">سوف تقوم الآن بإعادة فتح المشروع ونشره على منصة
                                        نفذلي وستتمكن من إستقبال عروض جديدة</li>
                                </ul>
                            </div>
                        </div>
                        <div class="modal-footer border-0 ">
                            <button type="button" class="btn btn-light kufi ml-1" data-dismiss="modal"
                                style="font-size: 14px;border-radius: 0px;">تراجع</button>
                            <button type="button" class="btn btn-success kufi" style="font-size: 14px;border-radius: 0px;"
                                onclick="document.getElementById('project-reopen-form').submit();">إعادة فتح
                                المشروع</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal fade edit-offer-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content edit-offer-modal-response">
                    </div>
                </div>
            </div>
            <div class="col-12 px-0">
                <div class="col-12  p-0 pb-0 mb-1 mb-lg-4 ">
                    <div class="col-12  px-0 row" style="background: var(--bg-head);padding: 20px!important">
                        <div class="container px-0 d-flex">
                            <div class="px-0 px-lg-4 row col-12">
                                <div class="col-12 px-0">
                                    <div class="col-12 px-0 row ">
                                        <div class="col-12 col-lg-9  px-0">
                                            <div
                                                style=" display: inline-block;position: relative;font-size: 14px;color: #919191">
                                                <div class="col-12  px-0  text-right text-md-right naskh "
                                                    style="color: #919191;font-size: 11px;padding: 0px 0px">
                                                </div>
                                                <h1 style="display: block;font-size: 17px;color: var(--bg-color-0) ;line-height: 1.5"
                                                    class="kufi font-md-4  mb-0">
                                                    مطلوب برمجة تتصل ببرنامج سطح مكتب بلغة السي شارب
                                                </h1>
                                            </div>
                                            <div class="col-12 p-0 text-truncate">
                                                <a href="/" style="color:inherit;font-size:11px;opacity:0.7">
                                                    الرئيسية
                                                </a>
                                                <a href="/projects" style="color:inherit;font-size:11px;opacity:0.7">
                                                    <span class="font-small px-1">/</span> المشاريع
                                                </a>
                                                <a href="https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                    style="color:inherit;font-size:11px;opacity:0.7">
                                                    <span class="font-small px-1">/</span> مطلوب برمجة تتصل
                                                    ببرنامج سطح مكتب بلغة السي شارب
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-3 px-0 d-flex d-flex justify-content-end ">
                                            <div
                                                class="col-12 px-0  d-flex align-items-center justify-content-between justify-content-lg-end  py-2">
                                                <a href="https://nafezly.com/project/create-guest?template_type=project&template_id=5605"
                                                    class="btn btn-primary font-1 text-center "
                                                    style="border-radius: 2px;border-radius: 428px;padding: 5px 18px!important;cursor: pointer;">
                                                    <span class="fas fa-plus"></span>
                                                    <span> مشروع مماثل</span>
                                                </a>
                                                <div class="d-inline-block mr-2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container px-0 ">
                    <div class="col-12 px-0 row">
                        <div class="col-12 col-lg-8 order-lg-1 order-3 px-0 px-lg-4 pb-lg-4 pt-0">
                            <div class="col-12 px-0 py-1 py-lg-3">
                                <div class="col-12 px-0">
                                    <div class="col-12   main-nafez-box-styles px-0">
                                        <div class="col-12  p-2  py-md-3 ">
                                            <div class="col-12 px-0 row d-flex justify-content-between pt-2 ">
                                                <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                    <span
                                                        style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                        class="text-center d-inline-block project-state active  mx-2 mx-md-0">
                                                        <span class="d-flex justify-content-center align-items-center"
                                                            style="width:30px;height:30px">
                                                            <i class="fas fa-check"
                                                                style="color: var(--bg-second-bg);font-size: 15px;"></i>
                                                        </span>
                                                    </span>
                                                    <div class="d-none d-lg-block pb-2"></div>
                                                    نشر المشروع
                                                </div>
                                                <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                    <span
                                                        style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                        class="text-center d-inline-block project-state active mx-2 mx-md-0"><span
                                                            class="d-flex justify-content-center align-items-center"
                                                            style="width:30px;height:30px">
                                                            <i class="fas fa-chevron-left"
                                                                style="color: var(--bg-second-bg);font-size: 15px;"></i>
                                                        </span>
                                                    </span>
                                                    <div class="d-none d-lg-block pb-2"></div>
                                                    تلقي العروض
                                                </div>
                                                <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                    <span
                                                        style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                        class="text-center d-inline-block project-state mx-2 mx-md-0">
                                                        <span class="d-flex justify-content-center align-items-center"
                                                            style="width:30px;height:30px">
                                                            <i class="fas fa-check"
                                                                style="color:var(--bg-second-bg);font-size: 15px;"></i>
                                                        </span>
                                                    </span>
                                                    <div class="d-none d-lg-block pb-2"></div>
                                                    تنفيذ المشروع
                                                </div>
                                                <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                    <span
                                                        style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                        class="text-center d-inline-block project-state mx-2 mx-md-0 ">
                                                        <span class="d-flex justify-content-center align-items-center"
                                                            style="width:30px;height:30px">
                                                            <i class="fas fa-check "
                                                                style="color: var(--bg-second-bg);font-size: 15px;"></i>
                                                        </span>
                                                    </span>
                                                    <div class="d-none d-lg-block pb-2"></div>
                                                    استلام المشروع
                                                </div>
                                            </div>
                                            <div class="col-10 mx-auto  px-0 mt-4 row d-none d-lg-flex "
                                                style="height: 9px;background: var(--bg-main-bg);border-radius: 12px">
                                                <span class="d-inline-block"
                                                    style="width: 35%;height: 9px;background: var(--bg-color-4);border-radius: 12px 12px  ;opacity: .3;">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-1 py-lg-3">
                                <div class="col-12 px-0 main-nafez-box-styles" style="overflow: hidden;">
                                    <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                        <h5 style="font-size: 17px;color:var(--bg-color-0)"> تفاصيل المشروع</h5>
                                    </div>
                                    <div class="col-12" style="padding: 20px;;">
                                        <h2 class="col-12  p-0 naskh  font-2 m-0"
                                            style="white-space: pre-line; word-wrap: break-word;overflow: hidden;color:var(--bg-color-0);line-height: 1.6 ; ">
                                            لدي نظام محاسبي يعمل على سطح المكتب بلغة السي شارب ,
                                            واريد طريقة يمكن للزبناء الاتصال بالبرنامج عن بعد من هواتفهم في حالة
                                            كان الكمبيوتر البعيد متصل بالانترنت .
                                            ماهي الطريقة الافضل لذلك ؟
                                            وكيف لو فيه زبون لديه اكثر من نقطة بيع يكون له لوحة تحكم واحدة وتشمل
                                            كل نقاط البيع الخاصة بيه.
                                            مثال :
                                            نقطة بيع رقم 1 القاهرة :
                                            المالية اليوم :
                                            مجموع الداخل 500000
                                            مجموع الخارج 250000
                                            المتبقي في الخزنة : 25000
                                            تقرير الاصناف اوشكت على الانتهاء :
                                            الصنف 1 متبقي 10فقط
                                            الصنف 2 متبقي 4 فقط
                                            الصنف 9 متبقي منه 12 فقط.
                                            - تقرير غرفة المراقبة
                                            وهكذا</h2>
                                        <div class="col-12 p-0 mt-2">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-1 py-lg-3">
                                <div class="col-12   main-nafez-box-styles px-0">
                                    <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                        <h5 style="font-size: 17px;color:var(--bg-color-0)"> مهارات مطلوبة</h5>
                                    </div>
                                    <div class="col-12 p-3 row d-flex">
                                        <a href="https://nafezly.com/projects/skill/html"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> HTML</a>
                                        <a href="https://nafezly.com/projects/skill/css"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> CSS</a>
                                        <a href="https://nafezly.com/projects/skill/php"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> PHP</a>
                                        <a href="https://nafezly.com/projects/skill/javascript"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> جافاسكربت</a>
                                        <a href="https://nafezly.com/projects/skill/software-development"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> تطوير البرمجيات</a>
                                        <a href="https://nafezly.com/projects/skill/database-programming"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> برمجة قواعد البيانات</a>
                                        <a href="https://nafezly.com/projects/skill/laravel"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> Laravel</a>
                                        <a href="https://nafezly.com/projects/skill/software-architecture"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> هندسة البرمجيات</a>
                                        <a href="https://nafezly.com/projects/skill/software-testing"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> إختبار البرمجيات</a>
                                        <a href="https://nafezly.com/projects/skill/codeigniter"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> Codeigniter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-1 py-lg-3" id="add-offer">
                                <div class="col-12 px-0 main-nafez-box-styles">
                                    <div class="col-12   main-nafez-box-styles px-0">
                                        <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg)">
                                            <h5 style="color: var(--bg-color-0);font-size: 17px">أضف عرضك الآن
                                            </h5>
                                        </div>
                                        <div class="col-12 p-0 ">
                                            <div class="col-12 px-0 py-3 text-center font-1 ">
                                                <div class="col-12 px-0 row text-center justify-content-center d-flex">
                                                    <a href="/login"
                                                        class=" text-center    ml-1 
                                                "
                                                        style="position: relative;cursor: pointer;padding: 7px 0px 0px;text-align: center;;min-width: 60px;border-radius: 5px;   "
                                                        href="https://nafezly.com/freelancers">
                                                        <button class="btn btn-primary py-2 rounded-0"
                                                            style="border-radius: 3px;background: transparent!important;color:var(--bg-color-0)">دخول</button>
                                                    </a>
                                                    <a href="/register"
                                                        class=" text-center  ml-1 ml-1  
                                                "
                                                        style="position: relative;cursor: pointer;padding: 7px 0px 0px;text-align: center;;min-width: 107px;border-radius: 5px;   "
                                                        href="https://nafezly.com/freelancers">
                                                        <button class="btn btn-primary py-2 rounded-0"
                                                            style="border-radius: 3px;">حساب جديد</button>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-1 py-lg-3">
                                <div class="col-12   px-0   main-nafez-box-styles ">
                                    <div class="col-12  "
                                        style="border-bottom: 1px solid var(--bg-main-bg);color: var(--bg-second-bg);color: var(--bg-color-0)">
                                        <div class="col-12 px-0 row d-flex justify-content-between">
                                            <div class="col px-0 py-3">
                                                العروض المقدمة <span
                                                    class="fas fa-spinner-third fa-spin  mr-2 loading-offer-spin fast-spin"
                                                    style="display: none;"></span>
                                            </div>
                                            <div class="col px-0">
                                                <div class="dropdown mt-2 pt-1 ml-md-2 text-left">
                                                    <button
                                                        class="btn btn-light border dropdown-toggle pl-1 rounded-0 ml-1"
                                                        id="offer-sort-list-btn-text" type="button" id="dropdownMenuButton"
                                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                        style="font-size: 12px!important">
                                                        تلقائي
                                                    </button>
                                                    <div class="dropdown-menu border " aria-labelledby="dropdownMenuButton"
                                                        id="offer-sort-list">
                                                        <span class="dropdown-item d-block hover-darker font-1"
                                                            style="cursor: pointer;color: var(--bg-color-0)"
                                                            data-sort="NEWEST">الأحدث</span>
                                                        <span class="dropdown-item d-block hover-darker font-1"
                                                            style="cursor: pointer;color: var(--bg-color-0)"
                                                            data-sort="OLDEST">الأقدم</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-1 px-0 text-center d-none d-md-block py-3 "
                                                style=" max-width: 20px;cursor: pointer;"
                                                onclick="$('.offers-list').slideToggle();">
                                                <span class="fas fa-chevron-down" style="opacity: .7;"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0" id="project-load-offers">
                                        <div class="col-12 offers-list px-0 ">
                                            <div class="col-12 offer-order 
        "
                                                style="border-bottom: 1px solid var(--bg-main-bg);padding: 21px 15px;"
                                                data-score="27.659574468085">
                                                <div class="col-12 row px-0 d-flex">
                                                    <div class="text-center d-inline-block"
                                                        style="width: 55px;padding: 5px!important">
                                                        <a href="https://nafezly.com/u/raafatc" style="display: block;">
                                                            <div style="width: 55px;background: var(--bg-second-bg);display: inline-block;border-radius: 50%!important;max-width: 100%;position: relative;max-height: 55px;"
                                                                class="d-inline-block">
                                                                <img data-src=""
                                                                    src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/avatars/small/23046_1651361072_626dc5305f6eb.jpg"
                                                                    style="width: 100%;border-radius: 50%!important;padding: 3px;height: 45px"
                                                                    alt="صورة صاحب مقدم العرض">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="p-0 d-inline-block">
                                                        <div class="col-12 px-2">
                                                            <div class="px-0 pt-0  mt-1 row col-12  ">
                                                                <div class="col-12 px-0 kufi">
                                                                    <a href="https://nafezly.com/u/raafatc"
                                                                        style="font-size: 15px;line-height: 1.1;"
                                                                        class="pt-0 kufi  mt-0 d-inline-block">
                                                                        رأفت قطان
                                                                        <div class="d-block">
                                                                            <div style="position: relative;top: 0px;">
                                                                                <span class="fal fa-star"
                                                                                    style="color: var(--bg-color-4);font-size:9px;"></span>
                                                                                <span class="fal fa-star"
                                                                                    style="color: var(--bg-color-4);font-size:9px;"></span>
                                                                                <span class="fal fa-star"
                                                                                    style="color: var(--bg-color-4);font-size:9px;"></span>
                                                                                <span class="fal fa-star"
                                                                                    style="color: var(--bg-color-4);font-size:9px;"></span>
                                                                                <span class="fal fa-star"
                                                                                    style="color: var(--bg-color-4);font-size:9px;"></span>
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <span style="color: #919191;position: relative;top: 0px"
                                                                        class="naskh font-small d-block">
                                                                        <span class="fal fa-clock " aria-hidden="true"
                                                                            style="font-size: 10px"></span>
                                                                        منذ ساعة &nbsp; &nbsp;
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                style=" display: inline-block;position: relative;font-size: 14px;color: #919191">
                                                                <div class="col-12  px-0  text-right text-md-right "
                                                                    style="color: #919191;font-size: 13px;padding: 0px 0px">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-flex mr-auto pt-2">
                                                        <div class="p-0 d-inline-block mr-auto"
                                                            style="white-space: nowrap;">
                                                            <div class="col-12 px-1 d-flex align-items-center">
                                                                <span class="d-inline-block pt-2 ml-1"
                                                                    style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                    id="counter_627fb62772dbd">
                                                                </span>
                                                                <span class="d-inline-block love-favourite-area noselect  "
                                                                    style=" cursor: pointer;" data-id="627fb62772dbd"
                                                                    data-type="offer" data-type_id="23121"
                                                                    id="love_id_627fb62772dbd">
                                                                    <span
                                                                        class="fa-heart love-favourite
                                 fal
                                 font-3"
                                                                        style=" padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3 ;"
                                                                        id="icon_627fb62772dbd"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h3 class="col-12 px-1 col-lg-11 naskh "
                                                        style="word-wrap: break-word;overflow: hidden; color: var(--bg-color-0);line-height: 1.7;font-size: 16px">
                                                        تحياتي استاذ نسيم يمكنني تنفيذ طلبك لكن احتاج إلى بعض
                                                        التفاصيل والمعلومات من حضرتك قبل البدء بالعمل وقبول عرضي
                                                        يسعدني ان اكون قادر على حل مشكلتك
                                                        ...</h3>
                                                </div>
                                            </div>
                                            <div class="col-12 px-0 py-2">
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
                            <div class="col-12 px-0 py-1 py-lg-3 d-block d-lg-none">
                                <div class="col-12 p-0 main-nafez-box-styles" id="share-widget">
                                    <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                        <h5 style="font-size: 17px;color:var(--bg-color-0)"> شارك </h5>
                                    </div>
                                    <div class="col-12 px-0 py-2">
                                        <ul style="display: block;padding: 0px;list-style: none;position: relative;"
                                            class="mt-2 mb-2 text-center">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                class="d-inline-block p-1" target="_blank">
                                                <span class="fab fa-facebook-f d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <a href="https://twitter.com/share?url=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                class="d-inline-block p-1" target="_blank">
                                                <span class="fab fa-twitter d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8&title=مطلوب برمجة  تتصل ببرنامج سطح مكتب بلغة السي شارب&summary=لدي  نظام محاسبي يعمل على سطح المكتب بلغة السي شارب ,

                    واريد طريقة يمكن للزبناء الاتصال بالبرنامج عن بعد من هواتفهم    في حالة كان الكمبيوتر  البعيد متصل بالانترنت .

                    ماهي الطريقة الافضل لذلك ؟

                    وكيف لو فيه زبون لديه اكثر من  نقطة بيع يكون له لوحة تحكم واحدة وتشمل كل نقاط البيع الخاصة بيه.

                    مثال :


                    نقطة بيع  رقم 1 القاهرة :

                    المالية اليوم :

                    مجموع الداخل 500000
                    مجموع الخارج  250000

                    المتبقي في الخزنة : 25000


                    تقرير الاصناف اوشكت على الانتهاء :

                    الصنف 1 متبقي 10فقط

                    الصنف 2 متبقي   4 فقط

                    الصنف 9 متبقي منه 12 فقط.

                    -  تقرير غرفة المراقبة

                    وهكذا&source=نفذلي" class="d-inline-block p-1" target="_blank">
                                                <span class="fab fa-linkedin-in d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?text=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                data-action="share/whatsapp/share" class="d-inline-block p-1"
                                                target="_blank">
                                                <span class="fab fa-whatsapp d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                                data-url="https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                title="نسخ الرابط">
                                                <span class="fal fa-copy d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: var(--bg-color-0);cursor: pointer;border-radius: 0"></span>
                                            </span>
                                            <input type="text" id="referral-input" readonly=""
                                                class="form-control py-0  px-1 font-small"
                                                style="border:none!important;height: 20px;background: var(--bg-second-bg);z-index: -1;opacity: 0;position: absolute;">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 order-lg-2 order-2 px-0 px-lg-4 pb-lg-4 pt-0">
                            <div class="col-12 px-0 py-1 py-lg-3">
                                <div class="col-12 px-0">
                                    <div class="col-12 px-0 main-nafez-box-styles   py-0 rounded border-0">
                                        <div class="col-12 row px-0">
                                            <div class="col-12 pt-3 pb-2"
                                                style="border-bottom: 1px solid var(--bg-main-bg)">
                                                <h5 style="color: var(--bg-color-0);font-size: 17px"> بطاقة
                                                    المشروع </h5>
                                            </div>
                                            <div class="col-12 row p-3">
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        حالة المشروع
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        <span
                                                            style="background:#28a745; color: #fff; padding: 0px 7px 1px!important; display: inline-block;position: relative ;font-size: 10px;border-radius:2px;line-height: 1.6;"
                                                            class=" p-1">
                                                            مفتوح </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        تاريخ النشر
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        منذ ساعتين
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        المدة المتاحة
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        10 أيام
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        الميزانية
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        100 - 250 $
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        عدد المتقدمين
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        1
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        متوسط العروض
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        200 $
                                                    </div>
                                                </div>
                                                <div class="col-12 p-0 my-3"
                                                    style="height:1px;background: var(--bg-main-bg);"></div>
                                                <div class="col-12 px-2">
                                                    <span class="px-1"
                                                        style="padding:4px 5px;font-size:12px">صاحب
                                                        المشروع</span>
                                                </div>
                                                <div class="col-12 px-2 row d-flex align-items-center justify-content-between text-truncate"
                                                    style="flex-wrap: nowrap;">
                                                    <div class="d-flex align-items-center" style="width:calc(100% - 96px)">
                                                        <a href="https://nafezly.com/u/oulka11" class="d-inline-block">
                                                            <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/avatars/small/8117_1605639900_5fb41edce8a68.jpg"
                                                                style="width: 70px;border-radius:inherit;padding: 6px;;border-radius: 50%;height: 70px;">
                                                        </a>
                                                        <div class="d-inline-block px-1" style="font-size:15px">
                                                            <a href="https://nafezly.com/u/oulka11" style="color: inherit;">
                                                                Nasim Lemine
                                                            </a>
                                                            <div class="d-block mt-1"
                                                                style="font-size:10px;opacity: 0.7;">
                                                                <span class="d-inline-block">
                                                                    <span
                                                                        class="fas fa-map-marker-alt mb-1  pl-0 pl-md-1 "></span>
                                                                    موريتانيا
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-1 py-lg-3 d-none d-lg-block">
                                <div class="col-12 p-0 main-nafez-box-styles" id="share-widget">
                                    <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                        <h5 style="font-size: 17px;color:var(--bg-color-0)"> شارك </h5>
                                    </div>
                                    <div class="col-12 px-0 py-2">
                                        <ul style="display: block;padding: 0px;list-style: none;position: relative;"
                                            class="mt-2 mb-2 text-center">
                                            <a href="https://www.facebook.com/sharer/sharer.php?u=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                class="d-inline-block p-1" target="_blank">
                                                <span class="fab fa-facebook-f d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <a href="https://twitter.com/share?url=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                class="d-inline-block p-1" target="_blank">
                                                <span class="fab fa-twitter d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8&title=مطلوب برمجة  تتصل ببرنامج سطح مكتب بلغة السي شارب&summary=لدي  نظام محاسبي يعمل على سطح المكتب بلغة السي شارب ,

                    واريد طريقة يمكن للزبناء الاتصال بالبرنامج عن بعد من هواتفهم    في حالة كان الكمبيوتر  البعيد متصل بالانترنت .

                    ماهي الطريقة الافضل لذلك ؟

                    وكيف لو فيه زبون لديه اكثر من  نقطة بيع يكون له لوحة تحكم واحدة وتشمل كل نقاط البيع الخاصة بيه.

                    مثال :


                    نقطة بيع  رقم 1 القاهرة :

                    المالية اليوم :

                    مجموع الداخل 500000
                    مجموع الخارج  250000

                    المتبقي في الخزنة : 25000


                    تقرير الاصناف اوشكت على الانتهاء :

                    الصنف 1 متبقي 10فقط

                    الصنف 2 متبقي   4 فقط

                    الصنف 9 متبقي منه 12 فقط.

                    -  تقرير غرفة المراقبة

                    وهكذا&source=نفذلي" class="d-inline-block p-1" target="_blank">
                                                <span class="fab fa-linkedin-in d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?text=https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                data-action="share/whatsapp/share" class="d-inline-block p-1"
                                                target="_blank">
                                                <span class="fab fa-whatsapp d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                            </a>
                                            <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                                data-url="https://nafezly.com/project/5605-%D9%85%D8%B7%D9%84%D9%88%D8%A8-%D8%A8%D8%B1%D9%85%D8%AC%D8%A9-%D8%AA%D8%AA%D8%B5%D9%84-%D8%A8%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D8%AC-%D8%B3%D8%B7%D8%AD-%D9%85%D9%83%D8%AA%D8%A8-%D8%A8%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B3%D9%8A-%D8%B4%D8%A7%D8%B1%D8%A8"
                                                title="نسخ الرابط">
                                                <span class="fal fa-copy d-inline-block "
                                                    style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: var(--bg-color-0);cursor: pointer;border-radius: 0"></span>
                                            </span>
                                            <input type="text" id="referral-input" readonly=""
                                                class="form-control py-0  px-1 font-small"
                                                style="border:none!important;height: 20px;background: var(--bg-second-bg);z-index: -1;opacity: 0;position: absolute;">
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 py-1"></div>
        </div>
    </main>

@stop
