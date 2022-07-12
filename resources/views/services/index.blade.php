@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 px-0">
            <div class="container pt-2 pt-md-2 d-flex   " style="min-height: 90vh">
                <div class="col-12 px-0 row">
                    <div class="col-12 px-0  ">
                        <div class="col-12 px-0 row">
                            <div class="col-12 px-0">
                                <h1 class="text-center font-3 font-md-4 py-lg-4 my-3">خدمات إبداعية لتعزيز
                                    وتطوير أعمالك</h1>
                            </div>
                            <div class="col-12 col-lg-7 mx-auto  px-2 pt-4 pb-5">
                                <div wire:id="tLmfEG3zBxMfJHF8XY9F"
                                    wire:initial-data="{&quot;fingerprint&quot;:{&quot;id&quot;:&quot;tLmfEG3zBxMfJHF8XY9F&quot;,&quot;name&quot;:&quot;search-services&quot;,&quot;locale&quot;:&quot;ar&quot;,&quot;path&quot;:&quot;services&quot;,&quot;method&quot;:&quot;GET&quot;,&quot;v&quot;:&quot;acj&quot;},&quot;effects&quot;:{&quot;listeners&quot;:[]},&quot;serverMemo&quot;:{&quot;children&quot;:[],&quot;errors&quot;:[],&quot;htmlHash&quot;:&quot;7b28e0f3&quot;,&quot;data&quot;:{&quot;key&quot;:&quot;&quot;},&quot;dataMeta&quot;:[],&quot;checksum&quot;:&quot;746a417631b3e094976896d7053658fed64b1eb6090f035899b586df8fe67afb&quot;}}"
                                    class="col-12">
                                    <div class="col-12 px-0 mb-2" style="">
                                        <form method="GET" action="/services">
                                            <div class="col-12 px-0 row mx-auto " style="max-width: 100%;">
                                                <input type="text" name="key" wire:model.debounce.200ms="key"
                                                    class="form-control main-nafez-box-styles "
                                                    style="max-width:100%;padding: 26px!important;border:none!important;background: var(--bg-second-bg);"
                                                    placeholder="مثال : تصميم" maxlength="250" autocomplete="off">
                                                <button
                                                    class="btn btn-primary text-center  d-inline-block main-nafez-box-styles"
                                                    style="width: 100px;border-radius: 3px;color: #fff;position: absolute;top: 4px; left: 4px;height: 44px;">
                                                    <span class="fal fa-search" wire:loading.remove></span>
                                                    <span wire:loading
                                                        class="fas fa-spinner-third fa-spin   fast-spin"></span>
                                                    بحث</button>
                                            </div>
                                        </form>
                                        <div class="col-12 px-0" style="position:relative;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 row">
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=3" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                            cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/paint.svg" style="max-width: 100%;"
                                                    class="d-inline-block main-services-img" alt="الاستشارات و التدريب">
                                                <div class="col-12 text-center font-1 pt-3 px-0 home-specialization-header">
                                                    تصاميم فنية
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=2" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                            cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/coding.svg" style="max-width: 100%; "
                                                    class="d-inline-block main-services-img" alt="برمجة و تطوير">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    البرمجة و التطوير
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=1" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                            cursor: pointer;background: var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/workspace.svg" style="max-width: 100%; "
                                                    class="d-inline-block main-services-img" alt="ترجمة و لغات">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    الأعمال الإدارية
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=5" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                            cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/contract.svg" style="max-width: 100%; "
                                                    class="d-inline-block main-services-img" alt="الكتابة و التحرير">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    الكتابة و التحرير
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=4" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                            cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/hand.svg" style="max-width: 100%; "
                                                    class="d-inline-block main-services-img" alt="التسويق و المبيعات">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    التسويق و المبيعات
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=6" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                                cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/advisor.svg" style="max-width: 100%;"
                                                    class="d-inline-block main-services-img" alt="الاستشارات و التدريب">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    الاستشارات و التدريب
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=1" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                                cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/wave.svg" style="max-width: 100%;"
                                                    class="d-inline-block main-services-img" alt="الاستشارات و التدريب">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    تعليق صوتي
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="col-6 col-md-6 col-lg-3 col-xl-3 p-2">
                                    <a href="/services?specialize=7" style="color: var(--bg-color-0);">
                                        <div class="col-12 px-0" style="
                                            cursor: pointer;background:var(--bg-second-bg);border-radius: 0px;">
                                            <div class="col-12 text-center py-4 px-0">
                                                <img src="/site_images/home/survey.svg" style="max-width: 100%;"
                                                    class="d-inline-block main-services-img" alt="الاستشارات و التدريب">
                                                <div
                                                    class="col-12  text-center font-1 pt-3 px-0 home-specialization-header">
                                                    الخدمات الاخرى
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 mt-4">
                        <div class="col-12 px-0">
                            <div class="col-12 px-0 py-3">
                                <div class="col-12 row d-flex py-3 mb-2">
                                    <div class="col px-0 font-lg-3 font-2  pt-1">
                                        خدمات تصميم
                                    </div>
                                    <div class="col px-0 text-left ">
                                        <a href="/services?specialize=design,logos-design,covers-design,banners-design,business-cards,presentation-services,video,photo-editing"
                                            class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-3013">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/3013-%D8%A8%D8%B7%D8%A7%D9%82%D8%A7%D8%AA-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%B9%D8%B5%D8%B1%D9%8A%D8%A9-%D8%AC%D8%B0%D8%A7%D8%A8%D8%A9"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/10758_604374b711d48-1615033527.jpg"
                                                            alt="بطاقات أعمال عصرية جذابة"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/3013-%D8%A8%D8%B7%D8%A7%D9%82%D8%A7%D8%AA-%D8%A3%D8%B9%D9%85%D8%A7%D9%84-%D8%B9%D8%B5%D8%B1%D9%8A%D8%A9-%D8%AC%D8%B0%D8%A7%D8%A8%D8%A9"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            بطاقات أعمال عصرية جذابة
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=business-cards" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                بطاقات أعمال</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-5986">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/5986-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A7%D9%84%D8%B4%D8%B9%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D8%A8%D8%AA%D9%83%D8%A7%D8%B1%D9%8A%D8%A9-%D9%88-%D8%A7%D8%A8%D8%AF%D8%A7%D8%B9%D9%8A%D8%A9-%D9%85%D9%82%D8%A7%D8%A8%D9%84-5-%D9%81%D9%82%D8%B7"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/16448_6227c52557fe0-1646773541.jpg"
                                                            alt="تصميم الشعارات ابتكارية و ابداعية  فقط"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/5986-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A7%D9%84%D8%B4%D8%B9%D8%A7%D8%B1%D8%A7%D8%AA-%D8%A7%D8%A8%D8%AA%D9%83%D8%A7%D8%B1%D9%8A%D8%A9-%D9%88-%D8%A7%D8%A8%D8%AF%D8%A7%D8%B9%D9%8A%D8%A9-%D9%85%D9%82%D8%A7%D8%A8%D9%84-5-%D9%81%D9%82%D8%B7"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تصميم الشعارات ابتكارية و ابداعية فقط
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=logos-design" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                الشعارات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            25
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-426">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/426-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A8%D9%88%D8%B3%D8%AA-%D8%B3%D9%88%D8%B4%D9%8A%D8%A7%D9%84-%D9%85%D9%8A%D8%AF%D9%8A%D8%A7"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/1487_5ed11b44a6b2c-1590762308.jpg"
                                                            alt="تصميم بوست سوشيال ميديا"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/426-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A8%D9%88%D8%B3%D8%AA-%D8%B3%D9%88%D8%B4%D9%8A%D8%A7%D9%84-%D9%85%D9%8A%D8%AF%D9%8A%D8%A7"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تصميم بوست سوشيال ميديا
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=design" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                وأعمال فنية وإبداعية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            10
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-3">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/3-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A-%D9%84%D8%B4%D8%B1%D9%83%D8%AA%D9%83-%D8%A3%D9%88-%D9%85%D8%A4%D8%B3%D8%B3%D8%AA%D9%83"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/5_5ebfab0d525c4-1589619469.jpg"
                                                            alt="شعار احترافي لشركتك أو مؤسستك"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/3-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A-%D9%84%D8%B4%D8%B1%D9%83%D8%AA%D9%83-%D8%A3%D9%88-%D9%85%D8%A4%D8%B3%D8%B3%D8%AA%D9%83"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            شعار احترافي لشركتك أو مؤسستك
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=design" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                وأعمال فنية وإبداعية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            25
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-673">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/673-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/3175_60d71e0676171-1624710662.jpg"
                                                            alt="تصميم شعار مميز"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/673-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B4%D8%B9%D8%A7%D8%B1-%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تصميم شعار مميز
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=logos-design" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                الشعارات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            25
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-3166">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/3166-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A8%D9%88%D8%B3%D8%AA-%D8%A5%D8%B9%D9%84%D8%A7%D9%86-%D9%81%D9%8A%D8%B3%D8%A8%D9%88%D9%83-%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/11180_605f9b8a8e6ef-1616878474.jpg"
                                                            alt="تصميم بوست (إعلان) فيسبوك احترافي"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/3166-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%A8%D9%88%D8%B3%D8%AA-%D8%A5%D8%B9%D9%84%D8%A7%D9%86-%D9%81%D9%8A%D8%B3%D8%A8%D9%88%D9%83-%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تصميم بوست (إعلان) فيسبوك احترافي
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=design" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                وأعمال فنية وإبداعية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-2549">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/2549-%D9%85%D9%88%D9%86%D8%AA%D8%A7%D8%AC-%D9%84%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88-%D9%88%D8%A7%D9%84%D8%AA%D8%B9%D8%AF%D9%8A%D9%84-%D8%B9%D9%84%D9%8A-%D8%A7%D9%84%D8%A7%D9%84%D9%88%D8%A7%D9%86-%D9%88%D8%A5%D8%B6%D8%A7%D9%81%D8%A9-%D9%85%D8%A4%D8%AB%D8%B1%D8%A7%D8%AA-%D9%88%D8%A7%D9%86%D8%AA%D9%82%D8%A7%D9%84%D8%A7%D8%AA"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/9367_5ff8cd8cb09f6-1610141068.jpg"
                                                            alt="مونتاج للفيديو والتعديل علي الالوان وإضافة مؤثرات وانتقالات"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/2549-%D9%85%D9%88%D9%86%D8%AA%D8%A7%D8%AC-%D9%84%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88-%D9%88%D8%A7%D9%84%D8%AA%D8%B9%D8%AF%D9%8A%D9%84-%D8%B9%D9%84%D9%8A-%D8%A7%D9%84%D8%A7%D9%84%D9%88%D8%A7%D9%86-%D9%88%D8%A5%D8%B6%D8%A7%D9%81%D8%A9-%D9%85%D8%A4%D8%AB%D8%B1%D8%A7%D8%AA-%D9%88%D8%A7%D9%86%D8%AA%D9%82%D8%A7%D9%84%D8%A7%D8%AA"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            مونتاج للفيديو والتعديل علي الالوان وإضافة
                                                            مؤثرات وانتقالات
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=video" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> فيديو
                                                                ومونتاچ</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-4313">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/4313-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B4%D8%B9%D8%A7%D8%B1%D8%A7%D8%AA-%D9%85%D9%85%D9%8A%D8%B2-%D9%88%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/13725_60fb0172c6777-1627062642.jpg"
                                                            alt="تـصـمـيـم شـعـارات ممـيـزة واحـتـرافـيــة"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/4313-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B4%D8%B9%D8%A7%D8%B1%D8%A7%D8%AA-%D9%85%D9%85%D9%8A%D8%B2-%D9%88%D8%A7%D8%AD%D8%AA%D8%B1%D8%A7%D9%81%D9%8A"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تـصـمـيـم شـعـارات ممـيـزة واحـتـرافـيــة
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=logos-design" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تصميم
                                                                الشعارات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-4 mb-2">
                                <div class="col-12 row d-flex py-3">
                                    <div class="col px-0 font-lg-3 font-2  pt-1">
                                        خدمات برمجة وتطوير
                                    </div>
                                    <div class="col px-0 text-left ">
                                        <a href="/services?specialize=development,web-backend-services,html-css-services,content-management-systems,mobile-development,development-tech-services"
                                            class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-809">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/809-%D8%A5%D8%B3%D8%AA%D8%AE%D8%B1%D8%A7%D8%AC-%D9%88-%D8%AA%D9%86%D9%82%D9%8A%D8%A8-%D8%A7%D9%84%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA-%D9%85%D9%86-%D9%85%D9%88%D8%A7%D9%82%D8%B9-%D8%A7%D9%84%D8%A7%D9%86%D8%AA%D8%B1%D9%86%D8%AA-Web-Scraping"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/3645_5f0d8dab84f0d-1594723755.jpg"
                                                            alt="إستخراج و تنقيب البيانات من مواقع الانترنت (Web Scraping)"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/809-%D8%A5%D8%B3%D8%AA%D8%AE%D8%B1%D8%A7%D8%AC-%D9%88-%D8%AA%D9%86%D9%82%D9%8A%D8%A8-%D8%A7%D9%84%D8%A8%D9%8A%D8%A7%D9%86%D8%A7%D8%AA-%D9%85%D9%86-%D9%85%D9%88%D8%A7%D9%82%D8%B9-%D8%A7%D9%84%D8%A7%D9%86%D8%AA%D8%B1%D9%86%D8%AA-Web-Scraping"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            إستخراج و تنقيب البيانات من مواقع الانترنت (Web
                                                            Scraping)
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=development-tech-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                تقنية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-1083">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/1083-%D8%A5%D9%86%D8%B4%D8%A7%D8%A1-%D9%85%D8%AA%D8%AC%D8%B1-%D8%A5%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A-%D9%84%D9%84%D8%B1%D8%A8%D8%AD-%D9%85%D9%86-%D8%A7%D9%84%D8%A3%D9%81%D9%84%D9%8A%D9%8A%D8%AA-Affiliate-Marketing-%D9%85%D8%B9-%D8%A7%D8%B3%D8%AA%D8%B6%D8%A7%D9%81%D8%A9-%D9%85%D8%AC%D8%A7%D9%86%D9%8A%D8%A9"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/4471_5f1886d6e75eb-1595442902.jpg"
                                                            alt="إنشاء متجر إلكتروني للربح من الأفلييت Affiliate Marketing مع استضافة مجانية"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/1083-%D8%A5%D9%86%D8%B4%D8%A7%D8%A1-%D9%85%D8%AA%D8%AC%D8%B1-%D8%A5%D9%84%D9%83%D8%AA%D8%B1%D9%88%D9%86%D9%8A-%D9%84%D9%84%D8%B1%D8%A8%D8%AD-%D9%85%D9%86-%D8%A7%D9%84%D8%A3%D9%81%D9%84%D9%8A%D9%8A%D8%AA-Affiliate-Marketing-%D9%85%D8%B9-%D8%A7%D8%B3%D8%AA%D8%B6%D8%A7%D9%81%D8%A9-%D9%85%D8%AC%D8%A7%D9%86%D9%8A%D8%A9"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            إنشاء متجر إلكتروني للربح من الأفلييت Affiliate
                                                            Marketing...
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=web-backend-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> برمجة
                                                                مواقع الانترنت</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            50
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-911">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/911-%D8%AA%D8%AD%D9%88%D9%8A%D9%84-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-XD-%D8%A7%D9%88-PSD-%D8%A7%D9%84%D9%8A-HTML-CSS-JAVASCRIPT"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/2517_5f0a1f9c4d96a-1594498972.jpg"
                                                            alt="تحويل تصميم XD او PSD الي HTML , CSS ,JAVASCRIPT"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/911-%D8%AA%D8%AD%D9%88%D9%8A%D9%84-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-XD-%D8%A7%D9%88-PSD-%D8%A7%D9%84%D9%8A-HTML-CSS-JAVASCRIPT"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تحويل تصميم XD او PSD الي HTML , CSS ,JAVASCRIPT
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=html-css-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> برمجة
                                                                CSS و HTML</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            25
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-390">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/390-%D8%AD%D9%88%D9%84-%D9%85%D9%88%D9%82%D8%B9%D9%83-%D8%A7%D9%84%D9%89-%D9%85%D9%88%D9%82%D8%B9-%D9%85%D8%AA%D8%B9%D8%AF%D8%AF-%D8%A7%D9%84%D9%84%D8%BA%D8%A7%D8%AA-%D9%85%D8%B9-%D8%A5%D8%B6%D8%A7%D9%81%D8%A9-WPML"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/883_5ecd5fc2df32b-1590517698.jpg"
                                                            alt="اقوم بتحويل موقعك الى موقع متعدد اللغات مع إضافة WPML"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/390-%D8%AD%D9%88%D9%84-%D9%85%D9%88%D9%82%D8%B9%D9%83-%D8%A7%D9%84%D9%89-%D9%85%D9%88%D9%82%D8%B9-%D9%85%D8%AA%D8%B9%D8%AF%D8%AF-%D8%A7%D9%84%D9%84%D8%BA%D8%A7%D8%AA-%D9%85%D8%B9-%D8%A5%D8%B6%D8%A7%D9%81%D8%A9-WPML"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            اقوم بتحويل موقعك الى موقع متعدد اللغات مع إضافة
                                                            WPML
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=content-management-systems"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> أنظمة
                                                                ادارة محتوى</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-1008">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/1008-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%88%D8%A7%D8%AC%D9%87%D8%A9-%D9%88%D8%AA%D8%AC%D8%B1%D8%A8%D8%A9-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-UI-&amp;UX"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/3674_5f131d7abee09-1595088250.jpg"
                                                            alt="تصميم واجهة وتجربة المستخدم UI &amp;UX"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/1008-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D9%88%D8%A7%D8%AC%D9%87%D8%A9-%D9%88%D8%AA%D8%AC%D8%B1%D8%A8%D8%A9-%D8%A7%D9%84%D9%85%D8%B3%D8%AA%D8%AE%D8%AF%D9%85-UI-&amp;UX"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تصميم واجهة وتجربة المستخدم UI &amp;UX
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=development" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> برمجة،
                                                                تطوير المواقع والتطبيقات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-1068">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/1068-%D9%81%D8%AD%D8%B5-%D8%B4%D8%A7%D9%85%D9%84-%D9%84%D9%85%D9%88%D9%82%D8%B9%D9%83-%D9%84%D9%83%D8%B4%D9%81-%D9%83%D9%84-%D8%A3%D8%AE%D8%B7%D8%A7%D8%A1-%D8%A7%D9%84%D8%B3%D9%8A%D9%88-SEO-%D9%81%D9%8A-%D9%85%D8%AD%D8%B1%D9%83%D8%A7%D8%AA-%D8%A7%D9%84%D8%A8%D8%AD%D8%AB"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/4471_5f172d954efcd-1595354517.jpg"
                                                            alt="فحص شامل لموقعك لكشف كل أخطاء السيو SEO في محركات البحث"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/1068-%D9%81%D8%AD%D8%B5-%D8%B4%D8%A7%D9%85%D9%84-%D9%84%D9%85%D9%88%D9%82%D8%B9%D9%83-%D9%84%D9%83%D8%B4%D9%81-%D9%83%D9%84-%D8%A3%D8%AE%D8%B7%D8%A7%D8%A1-%D8%A7%D9%84%D8%B3%D9%8A%D9%88-SEO-%D9%81%D9%8A-%D9%85%D8%AD%D8%B1%D9%83%D8%A7%D8%AA-%D8%A7%D9%84%D8%A8%D8%AD%D8%AB"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            فحص شامل لموقعك لكشف كل أخطاء السيو SEO في
                                                            محركات البحث
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=development-tech-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                تقنية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-223">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/1131_5ebe93d9882ca-1589547993.jpg"
                                                            alt="تصميم صفحه ويب متجاوبه مع كل الشاشات"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تصميم صفحه ويب متجاوبه مع كل الشاشات
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=html-css-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> برمجة
                                                                CSS و HTML</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            10
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-35">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/35-%D8%AA%D9%82%D8%AF%D9%8A%D9%85-%D8%A7%D9%84%D9%85%D8%B3%D8%A7%D8%B9%D8%AF%D8%A7%D8%AA-%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%8A%D9%87"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/69_5eaceb1e77c38-1588390686.jpg"
                                                            alt="تقديم المساعدات البرمجيه"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/35-%D8%AA%D9%82%D8%AF%D9%8A%D9%85-%D8%A7%D9%84%D9%85%D8%B3%D8%A7%D8%B9%D8%AF%D8%A7%D8%AA-%D8%A7%D9%84%D8%A8%D8%B1%D9%85%D8%AC%D9%8A%D9%87"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تقديم المساعدات البرمجيه
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=development-tech-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                تقنية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            10
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-4 mb-2">
                                <div class="col-12 row d-flex py-3">
                                    <div class="col px-0 font-lg-3 font-2  pt-1">
                                        خدمات صوتية
                                    </div>
                                    <div class="col px-0 text-left ">
                                        <a href="/services?specialize=voice-services" class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-4454">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/4454-%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%B5%D9%88%D8%AA%D9%8A-%D8%AA%D9%82%D8%B1%D9%8A%D8%B1%D9%8A-%D8%A3%D9%88-%D9%88%D8%AB%D8%A7%D8%A6%D9%82%D9%8A-150-%D9%83%D9%84%D9%85%D8%A9-%D9%85%D9%82%D8%A7%D8%A8%D9%84-5-%D8%AF%D9%88%D9%84%D8%A7%D8%B1%D8%A7%D8%AA"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/14496_60cfe2b0bfd8a-1624236720.jpg"
                                                            alt="تعليق صوتي تقريري أو وثائقي  150 كلمة مقابل 5 دولارات"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/4454-%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%B5%D9%88%D8%AA%D9%8A-%D8%AA%D9%82%D8%B1%D9%8A%D8%B1%D9%8A-%D8%A3%D9%88-%D9%88%D8%AB%D8%A7%D8%A6%D9%82%D9%8A-150-%D9%83%D9%84%D9%85%D8%A9-%D9%85%D9%82%D8%A7%D8%A8%D9%84-5-%D8%AF%D9%88%D9%84%D8%A7%D8%B1%D8%A7%D8%AA"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تعليق صوتي تقريري أو وثائقي 150 كلمة مقابل 5
                                                            دولارات
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=voice-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                صوتية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-3265">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/3265-%D8%AE%D8%AF%D9%85%D9%87-%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%A7%D9%84%D8%B5%D9%88%D8%AA%D9%8A-%D8%A8%D8%A7%D9%84%D9%81%D8%B5%D8%AD%D8%A9-%D9%88%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D9%8A%D8%A9-%D8%A7%D9%84%D8%B5%D8%B1%D9%8A%D8%A9"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/13_6069ec8dad175-1617554573.jpg"
                                                            alt="خدمه التعليق الصوتي بالفصحة والعامية المصرية"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/3265-%D8%AE%D8%AF%D9%85%D9%87-%D8%A7%D9%84%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%A7%D9%84%D8%B5%D9%88%D8%AA%D9%8A-%D8%A8%D8%A7%D9%84%D9%81%D8%B5%D8%AD%D8%A9-%D9%88%D8%A7%D9%84%D8%B9%D8%A7%D9%85%D9%8A%D8%A9-%D8%A7%D9%84%D8%B5%D8%B1%D9%8A%D8%A9"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            خدمه التعليق الصوتي بالفصحة والعامية المصرية
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=voice-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                صوتية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-931">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/931-%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%B5%D9%88%D8%AA%D9%8A-%D8%A8%D8%A7%D9%84%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9-%D8%A7%D9%84%D9%81%D8%B5%D8%AD%D9%89-%D8%A3%D9%88-%D8%A7%D9%84%D8%AE%D9%84%D9%8A%D8%AC%D9%8A%D8%A9-%D8%A3%D9%88-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9-%D8%A8%D8%A3%D8%AF%D8%A7%D8%A1-%D9%81%D8%AA%D8%A7%D8%A9"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/3977_5f0b8de98e69b-1594592745.jpg"
                                                            alt="تعليق صوتي باللغة العربية الفصحى أو الخليجية أو المصرية بأداء فتاة"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/931-%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%B5%D9%88%D8%AA%D9%8A-%D8%A8%D8%A7%D9%84%D9%84%D8%BA%D8%A9-%D8%A7%D9%84%D8%B9%D8%B1%D8%A8%D9%8A%D8%A9-%D8%A7%D9%84%D9%81%D8%B5%D8%AD%D9%89-%D8%A3%D9%88-%D8%A7%D9%84%D8%AE%D9%84%D9%8A%D8%AC%D9%8A%D8%A9-%D8%A3%D9%88-%D8%A7%D9%84%D9%85%D8%B5%D8%B1%D9%8A%D8%A9-%D8%A8%D8%A3%D8%AF%D8%A7%D8%A1-%D9%81%D8%AA%D8%A7%D8%A9"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تعليق صوتي باللغة العربية الفصحى أو الخليجية أو
                                                            المصرية ب...
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=voice-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                صوتية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-5049">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/5049-%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%B5%D9%88%D8%AA%D9%8A-%D9%84%D9%82%D9%86%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D9%8A%D9%88%D8%AA%D9%8A%D9%88%D8%A8-%D9%88-%D8%A7%D9%84%D9%83%D8%AA%D8%A8-%D8%A7%D9%84%D8%B5%D9%88%D8%AA%D9%8A%D8%A9-%D9%88%D8%BA%D9%8A%D8%B1%D9%87%D8%A7"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/10121_611d37620b684-1629304674.jpg"
                                                            alt="تعليق صوتي لقنوات اليوتيوب و الكتب الصوتية وغيرها"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/5049-%D8%AA%D8%B9%D9%84%D9%8A%D9%82-%D8%B5%D9%88%D8%AA%D9%8A-%D9%84%D9%82%D9%86%D9%88%D8%A7%D8%AA-%D8%A7%D9%84%D9%8A%D9%88%D8%AA%D9%8A%D9%88%D8%A8-%D9%88-%D8%A7%D9%84%D9%83%D8%AA%D8%A8-%D8%A7%D9%84%D8%B5%D9%88%D8%AA%D9%8A%D8%A9-%D9%88%D8%BA%D9%8A%D8%B1%D9%87%D8%A7"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            تعليق صوتي لقنوات اليوتيوب و الكتب الصوتية
                                                            وغيرها
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=voice-services"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> خدمات
                                                                صوتية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-4 mb-2">
                                <div class="col-12 row d-flex py-3">
                                    <div class="col px-0 font-lg-3 font-2  pt-1">
                                        خدمات كتابة وتحرير
                                    </div>
                                    <div class="col px-0 text-left ">
                                        <a href="/services?specialize=writing-translation,writing-manual-pages,writing-audio,writing-proof-writing,writing-translation-subcat,writing-resume,writing-copy-writing"
                                            class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-2572">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/2572-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%AD%D8%B5%D8%B1%D9%8A%D8%A9-%D8%A8%D9%85%D8%B9%D8%A7%D9%8A%D9%8A%D8%B1-%D8%A7%D9%84%D8%B3%D9%8A%D9%88"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/8570_5ffedfebcefaa-1610538987.jpg"
                                                            alt="كتابة مقالات حصرية بمعايير السيو"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/2572-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%AD%D8%B5%D8%B1%D9%8A%D8%A9-%D8%A8%D9%85%D8%B9%D8%A7%D9%8A%D9%8A%D8%B1-%D8%A7%D9%84%D8%B3%D9%8A%D9%88"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            كتابة مقالات حصرية بمعايير السيو
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=writing-copy-writing"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> كتابة
                                                                مقالات ومراجعات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-199">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/199-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D9%85%D9%82%D8%A7%D9%84-%D8%B7%D8%A8%D9%91%D9%8A-%D8%A3%D8%B5%D9%8A%D9%84-%D9%85%D9%86-600-%D9%83%D9%84%D9%85%D8%A9"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/1115_5ebd63a3b1a0f-1589470115.jpg"
                                                            alt="كتابة مقال طبّي أصيل مؤلفٌ من 600 كلمة."
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/199-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D9%85%D9%82%D8%A7%D9%84-%D8%B7%D8%A8%D9%91%D9%8A-%D8%A3%D8%B5%D9%8A%D9%84-%D9%85%D9%86-600-%D9%83%D9%84%D9%85%D8%A9"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            كتابة مقال طبّي أصيل مؤلفٌ من 600 كلمة.
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=writing-translation"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> كتابة،
                                                                تحرير، صناعة محتوى، ترجمة ولغات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            25
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-5812">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/5812-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-5-%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%A5%D8%A8%D8%AF%D8%A7%D8%B9%D9%8A%D8%A9-%D9%83%D9%84-%D9%85%D9%82%D8%A7%D9%84-300-%D9%83%D9%84%D9%85%D8%A9-%D8%A8%D9%82%D9%84%D9%85-%D9%83%D8%A7%D8%AA%D8%A8-%D9%85%D8%AA%D9%85%D8%B1%D8%B3"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/7982_61d048eb65218-1641040107.jpg"
                                                            alt="كتابة مقال تحفيزي واحد من 500 كلمة"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/5812-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-5-%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%A5%D8%A8%D8%AF%D8%A7%D8%B9%D9%8A%D8%A9-%D9%83%D9%84-%D9%85%D9%82%D8%A7%D9%84-300-%D9%83%D9%84%D9%85%D8%A9-%D8%A8%D9%82%D9%84%D9%85-%D9%83%D8%A7%D8%AA%D8%A8-%D9%85%D8%AA%D9%85%D8%B1%D8%B3"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            كتابة مقال تحفيزي واحد من 500 كلمة
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=writing-copy-writing"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> كتابة
                                                                مقالات ومراجعات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-1075">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/1075-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%AA%D9%82%D9%86%D9%8A%D8%A9-%D9%84%D9%85%D9%88%D9%82%D8%B9%D9%83-%D8%A7%D9%88%D8%B5%D9%81%D8%AD%D8%AA%D9%83"
                                                        class="d-block">
                                                        <img src="/site_images/default-images/service.jpg"
                                                            alt="كتابة مقالات لموقعك أو مدونتك"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/1075-%D9%83%D8%AA%D8%A7%D8%A8%D8%A9-%D9%85%D9%82%D8%A7%D9%84%D8%A7%D8%AA-%D8%AA%D9%82%D9%86%D9%8A%D8%A9-%D9%84%D9%85%D9%88%D9%82%D8%B9%D9%83-%D8%A7%D9%88%D8%B5%D9%81%D8%AD%D8%AA%D9%83"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            كتابة مقالات لموقعك أو مدونتك
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=writing-copy-writing"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> كتابة
                                                                مقالات ومراجعات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 py-4 mb-2">
                                <div class="col-12 row d-flex py-3">
                                    <div class="col px-0 font-lg-3 font-2  pt-1">
                                        خدمات التسويق الالكتروني
                                    </div>
                                    <div class="col px-0 text-left ">
                                        <a href="/services?specialize=marketing,website-advertising,social-media-marketing,seo-services,reviews"
                                            class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-2080">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/2080-%D8%AE%D8%AF%D9%85%D8%A9-%D8%A5%D8%AF%D8%A7%D8%B1%D8%A9-%D8%B5%D9%81%D8%AD%D8%A7%D8%AA-%D9%88%D9%85%D8%AC%D9%85%D9%88%D8%B9%D8%A7%D8%AA-%D9%81%D9%8A%D8%B3-%D8%A8%D9%88%D9%83-%D9%88%D8%A5%D9%86%D8%B3%D8%AA%D8%AC%D8%B1%D8%A7%D9%85"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/8012_5fb178edb1379-1605466349.jpg"
                                                            alt="خدمة إدارة  صفحات ومجموعات  فيس بوك  وإنستجرام"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/2080-%D8%AE%D8%AF%D9%85%D8%A9-%D8%A5%D8%AF%D8%A7%D8%B1%D8%A9-%D8%B5%D9%81%D8%AD%D8%A7%D8%AA-%D9%88%D9%85%D8%AC%D9%85%D9%88%D8%B9%D8%A7%D8%AA-%D9%81%D9%8A%D8%B3-%D8%A8%D9%88%D9%83-%D9%88%D8%A5%D9%86%D8%B3%D8%AA%D8%AC%D8%B1%D8%A7%D9%85"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            خدمة إدارة صفحات ومجموعات فيس بوك وإنستجرام
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=marketing" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تسويق
                                                                الكتروني ومبيعات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            10
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-2062">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/2062-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-1600-%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D8%A9-%D9%85%D9%85%D8%AA%D8%A7%D8%B2%D8%A9-%D8%A7%D9%84%D8%AC%D9%88%D8%AF%D8%A9-%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88-%D8%B9%D9%84%D9%8A-%D8%A7%D9%84%D9%8A%D9%88%D8%AA%D9%8A%D9%88%D8%A8-%D8%A8-5-%D9%81%D9%82%D8%B7"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/8014_627ca67b60e56-1652336251.jpg"
                                                            alt="زيادة 5000 مشاهدة بأفضل جودة لأي فيديو يوتيوب ب5$ فقط."
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/2062-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-1600-%D9%85%D8%B4%D8%A7%D9%87%D8%AF%D8%A9-%D9%85%D9%85%D8%AA%D8%A7%D8%B2%D8%A9-%D8%A7%D9%84%D8%AC%D9%88%D8%AF%D8%A9-%D9%84%D9%81%D9%8A%D8%AF%D9%8A%D9%88-%D8%B9%D9%84%D9%8A-%D8%A7%D9%84%D9%8A%D9%88%D8%AA%D9%8A%D9%88%D8%A8-%D8%A8-5-%D9%81%D9%82%D8%B7"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            زيادة 5000 مشاهدة بأفضل جودة لأي فيديو يوتيوب
                                                            ب5$ فقط.
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=social-media-marketing"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تسويق
                                                                عبر الشبكات الاجتماعية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-3687">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/3687-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D9%85%D8%AA%D8%A7%D8%A8%D8%B9%D9%8A%D9%86-%D8%A7%D9%86%D8%B3%D8%AA%D8%AC%D8%B1%D8%A7%D9%85-%D9%A1%D9%A0%D9%A0%D9%A0-%D9%85%D8%AA%D8%A7%D8%A8%D8%B9-%D8%AD%D9%82%D9%8A%D9%82%D9%8A-%D8%B9%D8%B1%D8%A8%D9%8A-%D8%A7%D9%88-%D8%A7%D8%AC%D9%86%D8%A8%D9%8A"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/11959_60796ea30169b-1618570915.jpg"
                                                            alt="زيادة متابعين انستجرام 1000 متابع حقيقي عربي او اجنبي"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/3687-%D8%B2%D9%8A%D8%A7%D8%AF%D8%A9-%D9%85%D8%AA%D8%A7%D8%A8%D8%B9%D9%8A%D9%86-%D8%A7%D9%86%D8%B3%D8%AA%D8%AC%D8%B1%D8%A7%D9%85-%D9%A1%D9%A0%D9%A0%D9%A0-%D9%85%D8%AA%D8%A7%D8%A8%D8%B9-%D8%AD%D9%82%D9%8A%D9%82%D9%8A-%D8%B9%D8%B1%D8%A8%D9%8A-%D8%A7%D9%88-%D8%A7%D8%AC%D9%86%D8%A8%D9%8A"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            زيادة متابعين انستجرام 1000 متابع حقيقي عربي او
                                                            اجنبي
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=marketing" class="d-block"
                                                            style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تسويق
                                                                الكتروني ومبيعات</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            10
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4 col-lg-3"
                                            no-pagination="no-pagination" id="service-2019">
                                            <div class="col-12 row  main-nafez-box-styles service-card p-0 rounded ">
                                                <div class="col-12 position-relative"
                                                    style="padding-top: 70%; background: url('/site_images/transparent.svg'); background-size: 100%;">
                                                    <a href="https://nafezly.com/service/2019-160-%D8%B1%D9%8A%D8%AA%D9%88%D9%8A%D8%AA-%D9%84%D8%AA%D8%BA%D8%B1%D9%8A%D8%AF%D8%AA%D9%83-%D8%B9%D9%84%D9%89-%D8%AD%D8%B3%D8%A8%D8%A7%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D9%83%D8%A8%D9%8A%D8%B1%D8%A9-%D8%A8%D8%AA%D9%88%D9%8A%D8%AA%D8%B1-%D8%B9%D9%85%D9%84-%D9%8A%D8%AF%D9%88%D9%8A"
                                                        class="d-block">
                                                        <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/services/small/7820_5fa92cb6488f8-1604922550.jpg"
                                                            alt="160 ريتويت لتغريدتك على حسبات السعودية كبيرة بتويتر عمل يدوي"
                                                            style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                    </a>
                                                </div>
                                                <div class="col-12 font-1 p-2 ">
                                                    <a href="https://nafezly.com/service/2019-160-%D8%B1%D9%8A%D8%AA%D9%88%D9%8A%D8%AA-%D9%84%D8%AA%D8%BA%D8%B1%D9%8A%D8%AF%D8%AA%D9%83-%D8%B9%D9%84%D9%89-%D8%AD%D8%B3%D8%A8%D8%A7%D8%AA-%D8%A7%D9%84%D8%B3%D8%B9%D9%88%D8%AF%D9%8A%D8%A9-%D9%83%D8%A8%D9%8A%D8%B1%D8%A9-%D8%A8%D8%AA%D9%88%D9%8A%D8%AA%D8%B1-%D8%B9%D9%85%D9%84-%D9%8A%D8%AF%D9%88%D9%8A"
                                                        class="d-block" style="height:60px;overflow: hidden;">
                                                        <h2 class="col-12 py-1 px-0"
                                                            style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                            160 ريتويت لتغريدتك على حسبات السعودية كبيرة
                                                            بتويتر عمل يدوي
                                                        </h2>
                                                    </a>
                                                    <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                        <a href="/services?specialize=social-media-marketing"
                                                            class="d-block" style="color:var(--bg-color-0);">
                                                            <span class="fal fa-tag"
                                                                style="color:var(--bg-color-3);font-size: 11px;"></span><span
                                                                style="opacity: .7;font-size: 11px;"> تسويق
                                                                عبر الشبكات الاجتماعية</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                    style="min-height: 1px;"></div>
                                                <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                    <div class="d-inline-block py-2 pr-3"
                                                        style="height: 36px;overflow: hidden;width: 56px;">
                                                        <span
                                                            style="color:#1dbf73;font-size: 14px;font-weight: bold;white-space: nowrap;"
                                                            class="d-inline-block">
                                                            5
                                                            <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                        </span>
                                                    </div>
                                                    <div class="d-inline-block  py-2 d-flex justify-content-end align-items-center float-left"
                                                        style="padding-left: 13px;">
                                                        <div class="col-12 p-0" style="white-space: nowrap;">
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
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0"
                                                    style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0">
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
