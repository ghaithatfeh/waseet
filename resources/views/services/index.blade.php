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
                                                <input type="text" name="search"
                                                    class="form-control main-nafez-box-styles "
                                                    style="max-width:100%;padding: 26px!important;border:none!important;background: var(--bg-second-bg);"
                                                    placeholder="مثال : تصميم" maxlength="250" autocomplete="off">
                                                <button
                                                    class="btn btn-primary text-center  d-inline-block main-nafez-box-styles"
                                                    style="width: 100px;border-radius: 3px;color: #fff;position: absolute;top: 4px; left: 4px;height: 44px;">
                                                    <span class="fal fa-search" wire:loading.remove></span>
                                                    <span wire:loading
                                                        class="fas fa-spinner-third fa-spin fast-spin"></span>
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <div class="col-12 px-0"
                                            style="
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
                                        <a href="/services?specialize=3" class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        @foreach ($design_services as $service)
                                            <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-3">
                                                <div class="col-12 row main-nafez-box-styles service-card p-0 rounded">
                                                    <div class="col-12 position-relative" style="padding-top: 70%;">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block">
                                                            <img src="{{ asset('uploaded_images/services/' . ($service->images[0]->image_name ?? '')) }}"
                                                                style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 font-1 p-2 ">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block" style="height:60px;overflow: hidden;">
                                                            <h2 class="col-12 py-1 px-0"
                                                                style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                                {{ $service->title }}
                                                            </h2>
                                                        </a>
                                                        <div class="col-12 py-1 px-0"
                                                            style="height:23px;overflow:hidden;">
                                                            <a href="/services?specialize={{ $service->category->id }}"
                                                                class="d-block" style="color:var(--bg-color-0);">
                                                                <span class="fal fa-tag"
                                                                    style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                                <span style="opacity: .7;font-size: 11px;">
                                                                    {{ $service->category->name }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                        style="min-height: 1px;">
                                                    </div>
                                                    <div class="col-12 px-0 d-flex py-1"
                                                        style="justify-content:space-between">
                                                        <div class="d-inline-block py-2 pr-3"
                                                            style="height: 36px;overflow: hidden;width: auto;">
                                                            <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                                class="d-inline-block text-nowrap">
                                                                {{ number_format($service->price) }}
                                                                <span class="fas fa-usd-circle"
                                                                    style="font-size:12px"></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-flex justify-content-end align-items-center float-left"
                                                            style="padding-left: 13px;">
                                                            <div class="col-12 p-0" style="white-space: nowrap;">
                                                                <span class="d-inline-block ml-0"
                                                                    style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                    id="counter_{{ $service->id }}">
                                                                    {{ $service->likes_count ? $service->likes_count : '' }}
                                                                </span>
                                                                <span class="mr-0 d-inline-block noselect added"
                                                                    data-id="{{ $service->id }}" data-type="service"
                                                                    id="love_id_{{ $service->id }}">
                                                                    <span class="fa-heart love-favourite font-2 fas"
                                                                        style="padding: 7px 0px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                        id="icon_{{ $service->id }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0"
                                                        style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        <a href="/services?specialize=2" class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        @foreach ($programming_services as $service)
                                            <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-3">
                                                <div class="col-12 row main-nafez-box-styles service-card p-0 rounded">
                                                    <div class="col-12 position-relative" style="padding-top: 70%;">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block">
                                                            <img src="{{ asset('uploaded_images/services/' . ($service->images[0]->image_name ?? '')) }}"
                                                                style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 font-1 p-2 ">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block" style="height:60px;overflow: hidden;">
                                                            <h2 class="col-12 py-1 px-0"
                                                                style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                                {{ $service->title }}
                                                            </h2>
                                                        </a>
                                                        <div class="col-12 py-1 px-0"
                                                            style="height:23px;overflow:hidden;">
                                                            <a href="/services?specialize={{ $service->category->id }}"
                                                                class="d-block" style="color:var(--bg-color-0);">
                                                                <span class="fal fa-tag"
                                                                    style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                                <span style="opacity: .7;font-size: 11px;">
                                                                    {{ $service->category->name }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                        style="min-height: 1px;">
                                                    </div>
                                                    <div class="col-12 px-0 d-flex py-1"
                                                        style="justify-content:space-between">
                                                        <div class="d-inline-block py-2 pr-3"
                                                            style="height: 36px;overflow: hidden;width: auto;">
                                                            <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                                class="d-inline-block text-nowrap">
                                                                {{ number_format($service->price) }}
                                                                <span class="fas fa-usd-circle"
                                                                    style="font-size:12px"></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-flex justify-content-end align-items-center float-left"
                                                            style="padding-left: 13px;">
                                                            <div class="col-12 p-0" style="white-space: nowrap;">
                                                                <span class="d-inline-block ml-0"
                                                                    style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                    id="counter_{{ $service->id }}">
                                                                    {{ $service->likes_count ? $service->likes_count : '' }}
                                                                </span>
                                                                <span class="mr-0 d-inline-block noselect added"
                                                                    data-id="{{ $service->id }}" data-type="service"
                                                                    id="love_id_{{ $service->id }}">
                                                                    <span class="fa-heart love-favourite font-2 fas"
                                                                        style="padding: 7px 0px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                        id="icon_{{ $service->id }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0"
                                                        style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        <a href="/services?specialize=1" class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        @foreach ($voice_services as $service)
                                            <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-3">
                                                <div class="col-12 row main-nafez-box-styles service-card p-0 rounded">
                                                    <div class="col-12 position-relative" style="padding-top: 70%;">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block">
                                                            <img src="{{ asset('uploaded_images/services/' . ($service->images[0]->image_name ?? '')) }}"
                                                                style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 font-1 p-2 ">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block" style="height:60px;overflow: hidden;">
                                                            <h2 class="col-12 py-1 px-0"
                                                                style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                                {{ $service->title }}
                                                            </h2>
                                                        </a>
                                                        <div class="col-12 py-1 px-0"
                                                            style="height:23px;overflow:hidden;">
                                                            <a href="/services?specialize={{ $service->category_id }}"
                                                                class="d-block" style="color:var(--bg-color-0);">
                                                                <span class="fal fa-tag"
                                                                    style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                                <span style="opacity: .7;font-size: 11px;">
                                                                    {{ $service->category->name }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                        style="min-height: 1px;">
                                                    </div>
                                                    <div class="col-12 px-0 d-flex py-1"
                                                        style="justify-content:space-between">
                                                        <div class="d-inline-block py-2 pr-3"
                                                            style="height: 36px;overflow: hidden;width: auto;">
                                                            <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                                class="d-inline-block text-nowrap">
                                                                {{ number_format($service->price) }}
                                                                <span class="fas fa-usd-circle"
                                                                    style="font-size:12px"></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-flex justify-content-end align-items-center float-left"
                                                            style="padding-left: 13px;">
                                                            <div class="col-12 p-0" style="white-space: nowrap;">
                                                                <span class="d-inline-block ml-0"
                                                                    style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                    id="counter_{{ $service->id }}">
                                                                    {{ $service->likes_count ? $service->likes_count : '' }}
                                                                </span>
                                                                <span class="mr-0 d-inline-block noselect added"
                                                                    data-id="{{ $service->id }}" data-type="service"
                                                                    id="love_id_{{ $service->id }}">
                                                                    <span class="fa-heart love-favourite font-2 fas"
                                                                        style="padding: 7px 0px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                        id="icon_{{ $service->id }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0"
                                                        style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        <a href="/services?specialize=5"
                                            class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        @foreach ($writing_services as $service)
                                            <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-3">
                                                <div class="col-12 row main-nafez-box-styles service-card p-0 rounded">
                                                    <div class="col-12 position-relative" style="padding-top: 70%;">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block">
                                                            <img src="{{ asset('uploaded_images/services/' . ($service->images[0]->image_name ?? '')) }}"
                                                                style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 font-1 p-2 ">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block" style="height:60px;overflow: hidden;">
                                                            <h2 class="col-12 py-1 px-0"
                                                                style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                                {{ $service->title }}
                                                            </h2>
                                                        </a>
                                                        <div class="col-12 py-1 px-0"
                                                            style="height:23px;overflow:hidden;">
                                                            <a href="/services?specialize={{ $service->category->id }}"
                                                                class="d-block" style="color:var(--bg-color-0);">
                                                                <span class="fal fa-tag"
                                                                    style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                                <span style="opacity: .7;font-size: 11px;">
                                                                    {{ $service->category->name }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                        style="min-height: 1px;">
                                                    </div>
                                                    <div class="col-12 px-0 d-flex py-1"
                                                        style="justify-content:space-between">
                                                        <div class="d-inline-block py-2 pr-3"
                                                            style="height: 36px;overflow: hidden;width: auto;">
                                                            <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                                class="d-inline-block text-nowrap">
                                                                {{ number_format($service->price) }}
                                                                <span class="fas fa-usd-circle"
                                                                    style="font-size:12px"></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-flex justify-content-end align-items-center float-left"
                                                            style="padding-left: 13px;">
                                                            <div class="col-12 p-0" style="white-space: nowrap;">
                                                                <span class="d-inline-block ml-0"
                                                                    style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                    id="counter_{{ $service->id }}">
                                                                    {{ $service->likes_count ? $service->likes_count : '' }}
                                                                </span>
                                                                <span class="mr-0 d-inline-block noselect added"
                                                                    data-id="{{ $service->id }}" data-type="service"
                                                                    id="love_id_{{ $service->id }}">
                                                                    <span class="fa-heart love-favourite font-2 fas"
                                                                        style="padding: 7px 0px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                        id="icon_{{ $service->id }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0"
                                                        style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
                                        <a href="/services?specialize=4"
                                            class="btn hover-darker"
                                            style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3);padding: 10px 15px">
                                            عرض المزيد
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="col-12 row px-0">
                                        @foreach ($marketing_services as $service)
                                            <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-3">
                                                <div class="col-12 row main-nafez-box-styles service-card p-0 rounded">
                                                    <div class="col-12 position-relative" style="padding-top: 70%;">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block">
                                                            <img src="{{ asset('uploaded_images/services/' . ($service->images[0]->image_name ?? '')) }}"
                                                                style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                                        </a>
                                                    </div>
                                                    <div class="col-12 font-1 p-2 ">
                                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                                            class="d-block" style="height:60px;overflow: hidden;">
                                                            <h2 class="col-12 py-1 px-0"
                                                                style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                                {{ $service->title }}
                                                            </h2>
                                                        </a>
                                                        <div class="col-12 py-1 px-0"
                                                            style="height:23px;overflow:hidden;">
                                                            <a href="/services?specialize={{ $service->category->id }}"
                                                                class="d-block" style="color:var(--bg-color-0);">
                                                                <span class="fal fa-tag"
                                                                    style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                                <span style="opacity: .7;font-size: 11px;">
                                                                    {{ $service->category->name }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 nafezly-divider-full mb-0 mt-1 "
                                                        style="min-height: 1px;">
                                                    </div>
                                                    <div class="col-12 px-0 d-flex py-1"
                                                        style="justify-content:space-between">
                                                        <div class="d-inline-block py-2 pr-3"
                                                            style="height: 36px;overflow: hidden;width: auto;">
                                                            <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                                class="d-inline-block text-nowrap">
                                                                {{ number_format($service->price) }}
                                                                <span class="fas fa-usd-circle"
                                                                    style="font-size:12px"></span>
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-flex justify-content-end align-items-center float-left"
                                                            style="padding-left: 13px;">
                                                            <div class="col-12 p-0" style="white-space: nowrap;">
                                                                <span class="d-inline-block ml-0"
                                                                    style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                    id="counter_{{ $service->id }}">
                                                                    {{ $service->likes_count ? $service->likes_count : '' }}
                                                                </span>
                                                                <span class="mr-0 d-inline-block noselect added"
                                                                    data-id="{{ $service->id }}" data-type="service"
                                                                    id="love_id_{{ $service->id }}">
                                                                    <span class="fa-heart love-favourite font-2 fas"
                                                                        style="padding: 7px 0px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                        id="icon_{{ $service->id }}"></span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0"
                                                        style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
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
