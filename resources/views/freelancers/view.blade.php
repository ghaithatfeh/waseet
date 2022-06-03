@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
            .nafezly-badge-style {
                color: var(--bg-color-4);
                background: #f9f9f9;
                height: 35px;
                width: 45px;
                box-shadow: 0px 4px 7px #e6e6e6;
                border-radius: 4px;
                margin-top: 8px;
            }

        </style>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.css">

        <div class="col-12 pt-0 profile-banner  px-0 pb-md-4"
            style=" display: flex;background-size: cover;background-position: center;">
            <div class="container px-0 px-lg-3 pb-lg-1">
                <div class="col-12   px-0  mx-auto rounded-0 rounded-lg  bottom-md--60   "
                    style="position: relative;border-radius: 0px;background: var(--bg-second-bg)"
                    id="profile-banner-content">
                    <div class="col-12 px-0">
                        <div class="col-12 px-3 row pt-3 py-md-0">
                            <div class="col-12 text-center col-md-3 ">
                                <div style="width: 150px;background: #fff;display: inline-block;border-radius: 50%!important;max-width: 100%;position: relative;height: 150px;margin-top: 20px ;position: relative;"
                                    class=" mt-5">
                                    <svg class="circle-chart" viewbox="0 0 33.83098862 33.83098862"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle class="circle-chart__background" stroke="#f1f1f1" stroke-width="1"
                                            fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                        <circle class="circle-chart__circle" stroke="#2196f3" stroke-width="1.5"
                                            stroke-dasharray="64,100" stroke-linecap="round" fill="none" cx="16.91549431"
                                            cy="16.91549431" r="15.91549431" />
                                        <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                            style="width: 100%;border-radius: 50%!important;height: 150px;position: absolute;padding: 10px"
                                            alt="الصورة الشخصية" />
                                    </svg>
                                </div>
                                <div class="container text-center pt-2 pb-2">
                                    <h1 class="text-center pt-0 mb-0 pb-0 mt-2 almaria"
                                        style="font-size: 21px;color: var(--bg-color-0); text-transform: capitalize;">
                                        <span style="font-size: 13px;color:#1877f2;cursor: pointer;"
                                            class="fas verified-nafezly-badge fa-check-circle  text-center"
                                            data-placement="top" data-content="موثوق من منصة نفذلي" data-toggle="popover">
                                        </span>
                                        {{ $user->first_name . ' ' . $user->last_name }}
                                    </h1>
                                </div>
                            </div>
                            <style type="text/css">
                                .popover-body {
                                    font-size: 11px;
                                    padding: 6px 14px;
                                }

                            </style>
                            <style type="text/css">

                            </style>
                            <div class="col-12 text-center col-md-9 row px-0">
                                <div class="col-12 col-md-8 pt-md-4 pb-2">
                                    <h3 class="kufi font-md-2 font-1 text-center text-md-right mb-0"
                                        style="color: var(--bg-font-4)">
                                        <span class="fas fa-user-tie pl-2 mb-md-3 mb-2 mb-md-0 "></span>
                                        {{ $user->job_name }}
                                        &nbsp; <span class="fas fa-map-marker-alt pl-2"></span>
                                        {{ $user->country->name ?? '' }}
                                    </h3>
                                    <div class="col-12 px-0 text-center text-md-right col-12 col-lg-4 col-md-7 ">
                                        <span
                                            class="fad fa-badge-check font-4 text-center pt-1 nafezly-badge-style user_badge"
                                            data-placement='bottom' data-content='قام بتوثيق حسابه'></span>
                                        <span
                                            class="fad fa-users-crown font-4 text-center pt-1 nafezly-badge-style user_badge"
                                            data-placement='bottom' data-content='شريك نجاح'></span>
                                    </div>
                                    <div class="m-auto m-md-0 pt-2 d-block d-md-none row "
                                        style="max-width: 100%;width: 300px;">
                                        <div class="col-12 px-0 row justify-content-center" style="">
                                            <div style="width: calc(100% - 130px)">
                                                <a href="/freelancers/personal-data/{{ $user->id }}">
                                                    <span class="btn btn-primary font-1 text-center   col-12"
                                                        style="border-radius: 2px">
                                                        <span class="fal fa-suitcase"></span> تعديل المعلومات الشخصية
                                                    </span>
                                                </a>
                                            </div>
                                            <div class=" text-right text-md-left  pr-2"
                                                style="width: 130px;position: relative;">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block pt-2 ml-1"
                                                            style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                            id="counter_628e639a6bf90">
                                                            {{ $user->likes ?? '' }}
                                                        </span>
                                                        <span class="d-inline-block love-favourite-area noselect  "
                                                            style=" cursor: pointer;" data-id="628e639a6bf90"
                                                            data-type="user" data-type_id="4483" id="love_id_628e639a6bf90">
                                                            <span class="fa-heart love-favourite fal font-3"
                                                                style=" padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3 ;"
                                                                id="icon_628e639a6bf90"></span>
                                                        </span>
                                                        <div class="dropdown show d-none dots-628e639a6bf90 ">
                                                            <span
                                                                class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"></span>
                                                            <div class="dropdown-menu border"
                                                                aria-labelledby="dropdownMenuLink"
                                                                style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                                <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 report-nafezly "
                                                                    href="#"
                                                                    style="font-size: 13px;color: var(--bg-color-0)"
                                                                    data-toggle=modal data-target=.report-nafezly-modal
                                                                    data-type="user" data-type_id="4483"><span
                                                                        class="fal fa-flag text-center"
                                                                        style="width: 20px;color: var(--bg-color-0)"></span>
                                                                    إبلاغ</a>
                                                            </div>
                                                            <style type="text/css">
                                                                .dots-628e639a6bf90 {
                                                                    display: inline-block !important;
                                                                }

                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-4  px-0  d-none d-md-block  pt-3 mt-3 text-left">
                                    <canvas id="myChart" style="width: 210px;height: 210px"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                        </div>
                        <div class="col-12 px-0" style=" ">
                            <style type="text/css">
                                .invitations_paginate_projects a[rel="prev"],
                                .invitations_paginate_projects a[rel="next"],
                                .invitations_paginate_projects li[aria-disabled="true"] {
                                    display: none;
                                }

                                .hide-scrollbar::-webkit-scrollbar {
                                    height: 0px;
                                    width: 0px;
                                    display: none;
                                }

                            </style>
                            <div class=" user-nav row  my-lg-0 d-flex" id="navbarSupportedContent"
                                style="background:var(--bg-second-bg);justify-content: space-between;">
                                <div class="d-inline-block px-0 hide-scrollbar" style="overflow-y:auto">
                                    <ul class=" ml-auto pr-lg-0 pr-0 d-flex "
                                        style=" background:var(--bg-second-bg);margin-bottom: 0px; border-radius: 5px; position: relative;">
                                        <li class="nav-item  text-center">
                                            <a class="nav-link kufi  font-small font-md-1 text-center"
                                                href="https://nafezly.com/u/mogtaba_ahmed"
                                                style="color: var(--bg-font-4);line-height: 1.2"><span
                                                    class="fal fa-user font-md-1 font-4"></span>
                                                <div class="text-center mt-2 d-md-inline-block mt-md-0"> نبذة عني </div>
                                            </a>
                                        </li>
                                        <li class="nav-item  text-center">
                                            <a class="nav-link kufi  font-small font-md-1 text-center"
                                                href="https://nafezly.com/u/mogtaba_ahmed/portfolio"
                                                style="color: var(--bg-font-4);line-height: 1.2"><span
                                                    class="fal fa-images font-md-1 font-4"></span>
                                                <div class="text-center mt-2 d-md-inline-block mt-md-0"> الأعمال </div>
                                            </a>
                                        </li>
                                        <li class="nav-item  text-center">
                                            <a class="nav-link kufi  font-small font-md-1 text-center"
                                                href="https://nafezly.com/u/mogtaba_ahmed/services"
                                                style="color: var(--bg-font-4);line-height: 1.2"><span
                                                    class="fal fa-boxes font-md-1 font-4"></span>
                                                <div class="text-center mt-2 d-md-inline-block mt-md-0"> الخدمات </div>
                                            </a>
                                        </li>
                                        <li class="nav-item  text-center">
                                            <a class="nav-link kufi  font-small font-md-1 text-center"
                                                href="https://nafezly.com/u/mogtaba_ahmed/ratings"
                                                style="color: var(--bg-font-4);line-height: 1.2"><span
                                                    class="fal fa-star font-md-1 font-4"></span>
                                                <div class="text-center mt-2 d-md-inline-block mt-md-0"> التقييمات </div>
                                            </a>
                                        </li>
                                        <li class="nav-item  text-center">
                                            <a class="nav-link kufi  font-small font-md-1 text-center"
                                                href="https://nafezly.com/u/mogtaba_ahmed/cv"
                                                style="color: var(--bg-font-4);line-height: 1.2"><span
                                                    class="fal fa-id-card-alt font-md-1 font-4"></span>
                                                <div class="text-center mt-2 d-md-inline-block mt-md-0"> السيرة </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-inline my-2 my-lg-0 px-3 px-lg-3 d-none d-md-block pb-2">
                                    <div class="m-auto m-md-0  d-inline-block " style="max-width: 100%;padding-top: 13px">
                                        <div class="col-12 px-0 row">
                                            @if ($user->id == auth()->id())
                                                <a href="/freelancers/personal-data/{{ $user->id }}"
                                                    class="d-inline-block">
                                                    <span class="btn btn-primary font-1 text-center   col-12"
                                                        style="border-radius: 2px">
                                                        <span class="fal fa-suitcase"></span>
                                                        <span class="d-lg-inline-block"> تعديل المعلومات الشخصية </span>
                                                    </span>
                                                </a>
                                            @endif
                                            <span class="d-inline-block pr-2" style="position: relative;">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block pt-2 ml-1"
                                                            style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                            id="counter_628e639a6c189">
                                                            {{ $user->likes != 0 ? $user->likes : '' }}
                                                        </span>
                                                        <span class="d-inline-block love-favourite-area noselect  "
                                                            style=" cursor: pointer;" data-id="628e639a6c189"
                                                            data-type="user" data-type_id="4483" id="love_id_628e639a6c189">
                                                            <span class="fa-heart love-favourite fal font-3"
                                                                style=" padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3 ;"
                                                                id="icon_628e639a6c189"></span>
                                                        </span>
                                                        <div class="dropdown show d-none dots-628e639a6c189 ">
                                                            <span
                                                                class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"></span>
                                                            <div class="dropdown-menu border"
                                                                aria-labelledby="dropdownMenuLink"
                                                                style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                                <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 report-nafezly "
                                                                    href="#"
                                                                    style="font-size: 13px;color: var(--bg-color-0)"
                                                                    data-toggle=modal data-target=.report-nafezly-modal
                                                                    data-type="user" data-type_id="4483"><span
                                                                        class="fal fa-flag text-center"
                                                                        style="width: 20px;color: var(--bg-color-0)"></span>
                                                                    إبلاغ</a>
                                                            </div>
                                                            <style type="text/css">
                                                                .dots-628e639a6c189 {
                                                                    display: inline-block !important;
                                                                }

                                                            </style>
                                                        </div>
                                                    </div>
                                                </div>
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

        {{-- component --}}
        <div class="col-12 pt-0 mt-md-5 mt-lg-4 pt-2 px-0 pb-5 mb-5" style="position: relative;">
            <div class="col-12 px-0  ">
                <div class="container px-0 mb-5">
                    <div class="col-12 row px-0 response-container">
                        <div class="col-12 col-lg-8  px-0">
                            <div class="col-12 p-1 px-lg-3 my-lg-3 d-flex">
                                <div class="panel panel-default mrg--bm px-0  rounded main-nafez-box-styles"
                                    id="profile-stats">
                                    <div class="heada border-bottom row" style="border-color:var(--bg-main-bg)!important">
                                        <div class="col-6 px-0 ">
                                            <h6 class="heada__title kufi font-2   px-3 py-3 mb-0"
                                                style="color: var(--bg-color-0);">نبذة عني</h6>
                                        </div>
                                        <div class="col-6  text-left pt-2">
                                            @if (auth()->id() == $user->id)
                                                <span class="btn btn-primary cairo font-1 edit-bio-btn"
                                                    style="cursor: pointer;"
                                                    onclick="$(this).fadeToggle(0);$('.bio-old').fadeOut(0);$('.bio-new').slideDown();"><span
                                                        class="fal fa-edit"></span> تعديل </span>
                                            @endif
                                        </div>
                                    </div>
                                    <h1 class="col-12 py-3 bio-old font-lg-2"
                                        style="font-size: 15px;color: var(--bg-font-4);line-height: 1.8; word-wrap: break-word;overflow: hidden;">
                                        {{ $user->description ?? 'لم يكتب نبذة شخصية.' }}
                                    </h1>

                                    {{-- لتعديل الوصف لصاحب اليوزر --}}
                                    <div class="col-12 bio-new pb-4 pt-4" style="display: none;">
                                        <form method="POST" action="/freelancers/edit-bio/{{ $user->id }}"
                                            class="col-12">
                                            @method('PUT')
                                            @csrf
                                            <textarea class="form-control" style="min-height: 200px" name="description">{{ $user->description }}</textarea>
                                            <div class="col-12 pt-2 px-0">
                                                <div class="col-12 text-left px-0">
                                                    <span class="btn btn-info kufi font-1" style="cursor: pointer;"
                                                        onclick="$('.edit-bio-btn').fadeIn(0);$('.bio-new').fadeOut(0);$('.bio-old').slideDown();">إلغاء</span>
                                                    <button class="btn btn-success kufi font-1">حفظ</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <div class="col-12 p-1 px-lg-3 my-lg-3">
                                <div class="panel panel-default mrg--bm px-0  rounded main-nafez-box-styles  "
                                    id="profile-stats">
                                    <div class="heada border-bottom row" style="border-color:var(--bg-main-bg)!important">
                                        <div class="col-6 px-0 ">
                                            <h6 class="heada__title kufi font-2   px-3 py-3 mb-0"
                                                style="color: var(--bg-color-0);">مهاراتي</h6>
                                        </div>
                                        <div class="col-6 text-left pt-2">
                                            @if (auth()->id() == $user->id)
                                                <a href="https://nafezly.com/profile/nafezly-settings"
                                                    class="btn btn-primary  font-1 edit-bio-btn"
                                                    style="cursor: pointer;"><span class="fal fa-edit"></span> تعديل
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-12 py-3 d-flex row">
                                        @forelse ($user->skills as $skill)
                                            <a href="https://nafezly.com/freelancers/skill/translation"
                                                class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1">
                                                <span class="far fa-tags ml-1"></span> {{ $skill->name }}
                                            </a>
                                        @empty
                                            لم يحدد المهارات بعد.
                                        @endforelse
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 p-0">
                            <div class="col-12 p-1 px-lg-3 my-lg-3">
                                <div class="col-12   main-nafez-box-styles px-0">
                                    <div class="col-12 px-0 border-bottom"
                                        style="border-color:var(--bg-main-bg)!important">
                                        <h6 class="heada__title kufi font-2   px-3 py-3 mb-0"
                                            style="color: var(--bg-color-0);">احصائيات</h6>
                                    </div>
                                    <div class="carda__body pb-1 pt-0 px-2 col-12  ">
                                        <table class="table table-borderless mrg--an text-meta p-3">
                                            <colgroup>
                                                <col class="col-xs-6">
                                                <col class="col-xs-6">
                                            </colgroup>
                                            <tbody class="py-2">
                                                <tr>
                                                    <td style="color: var(--bg-font-4)">التقييمات</td>
                                                    <td style="color: var(--bg-font-4)">
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span style="color: var(--bg-font-4)">انجاز ( كمنفذ مشاريع )</span>
                                                    </td>
                                                    <td style="color: var(--bg-font-4)">
                                                        <a href="https://nafezly.com/u/mogtaba_ahmed/sales"
                                                            style="color: var(--bg-font-4">
                                                            ( 12 خدمات )
                                                        </a>
                                                        -
                                                        <a href="https://nafezly.com/u/mogtaba_ahmed/offers"
                                                            style="color: var(--bg-font-4">
                                                            ( 12 مشاريع )
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span style="color: var(--bg-font-4)">اتمام الصفقات ( كمنفذ مشاريع
                                                            )</span>
                                                    </td>
                                                    <td style="color: var(--bg-font-4);">
                                                        <div class="d-flex row align-items-center">
                                                            <div class="col p-0 ml-1">
                                                                <div class="progress rounded" style="height: 8px;">
                                                                    <div class="progress-bar text-center font-small d-flex align-items-center"
                                                                        role="progressbar"
                                                                        style="width: 100%;background:var(--bg-color-3)"
                                                                        aria-valuenow="100" aria-valuemin="0"
                                                                        aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                            <div class="d-flex align-items-center justify-content-center"
                                                                style="width:39px">
                                                                100 %
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: var(--bg-font-4)">انشاء الحساب</td>
                                                    <td style="color: var(--bg-font-4)">
                                                        @php
                                                            Carbon\Carbon::setLocale('ar_EH');
                                                        @endphp
                                                        {{ $user->created_at->diffForHumans() }}
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: var(--bg-font-4)">آخر تواجد</td>
                                                    <td style="color: var(--bg-font-4)">
                                                        منذ ساعة
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    </div>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var defaultOptions = {
            global: {
                defaultFont: "'kufi-arabic',sans-serif"
            }
        };
        var myChart = new Chart(ctx, {
            type: 'radar',
            data: {
                labels: ['ملف شخصي', 'أعمال', 'توثيق', 'خدمات', 'مشاريع', 'متميز'],
                datasets: [{
                    label: '# نقاط',
                    data: [9, 8, 9, 5, 1, 6.4],
                    pointRadius: 0,
                    backgroundColor: [
                        'rgba(25, 150, 250, 0.8)',

                    ],
                    borderColor: [
                        '#2381c6',

                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scale: {
                    ticks: {
                        maxTicksLimit: 3,
                        beginAtZero: true,
                        max: 10,
                        min: 0,
                        stepSize: 5,
                        display: false
                    },
                    angleLines: {
                        display: false
                    },

                    pointLabels: {

                        fontSize: 12,
                        fontFamily: "'kufi-arabic', sans-serif"
                    },
                    yAxes: [{
                        ticks: {
                            fontSize: 12,
                            fontFamily: "arial, sans-serif",
                            fontColor: '#000',
                            fontStyle: '500'
                        }
                    }],
                    xAxes: [{
                        ticks: {
                            fontSize: 12,
                            fontFamily: "arial, sans-serif",
                            fontColor: '#000',
                            fontStyle: '500'
                        }
                    }],

                },
                legend: {

                    display: false,

                },
            },
            defaults: defaultOptions
        });
        myChart.options.tooltips.enabled = false;



        (function() {
            setTimeout(function() {
                $('.user_badge').popover({
                    trigger: "hover"
                });
            }, 300);
        })();
    </script>
@endsection
