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
                                            stroke-dasharray="18,100" stroke-linecap="round" fill="none" cx="16.91549431"
                                            cy="16.91549431" r="15.91549431" />
                                        <img src="/site_images/user.png"
                                            style="width: 100%;border-radius: 50%!important;height: 150px;position: absolute;padding: 10px"
                                            alt="الصورة الشخصية">
                                    </svg>
                                </div>
                                <div class="container text-center pt-2 pb-2">
                                    <h1 class="text-center pt-0 mb-0 pb-0 mt-2 almaria"
                                        style="font-size: 21px;color: var(--bg-color-0); text-transform: capitalize;">
                                        Ghaith Atfeh <span class='fas fa-circle'
                                            style='color:#3bc100;font-size:12px;position: relative;top:-3px'></span> </h1>
                                </div>
                            </div>
                            <style type="text/css">

                            </style>
                            <div class="col-12 text-center col-md-9 row px-0">
                                <div class="col-12 col-md-8 pt-md-4 pb-2">
                                    <h3 class="kufi font-md-2 font-1 text-center text-md-right mb-0"
                                        style="color: var(--bg-font-4)">
                                        <span class="fas fa-user-tie pl-2 mb-md-3 mb-2 mb-md-0 "></span>
                                        Full Stack Developer
                                        &nbsp; <span class="fas fa-map-marker-alt pl-2"></span>
                                        سوريا
                                    </h3>
                                    <div class="col-12 px-0 text-center text-md-right col-12 col-lg-4 col-md-7 ">
                                    </div>
                                    <div class="m-auto m-md-0  pt-2 d-block d-md-none row "
                                        style="max-width: 100%;width: 300px;">
                                        <div class="col-12 px-0 row justify-content-center" style="">
                                            <div class=" text-right text-md-left  pr-2"
                                                style="width: 130px;position: relative;">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block pt-2 ml-1"
                                                            style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                            id="counter_628e67506d4f9">
                                                        </span>
                                                        <span class="d-inline-block noselect ">
                                                            <span class="fa-heart love-favourite  fal  font-3"
                                                                style=" padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3 ;"></span>
                                                        </span>
                                                        <div class="dropdown show d-none dots-628e67506d4f9 ">
                                                            <span
                                                                class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"></span>
                                                            <div class="dropdown-menu border"
                                                                aria-labelledby="dropdownMenuLink"
                                                                style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                            </div>
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
                                            <a class="nav-link kufi font-small font-md-1 text-center"
                                                href="https://nafezly.com/u/ghaith_atfeh"
                                                style="color: var(--bg-font-4);line-height: 1.2"><span
                                                    class="fal fa-user font-md-1 font-4"></span>
                                                <div class="text-center mt-2 d-md-inline-block mt-md-0"> نبذة عني </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="form-inline my-2 my-lg-0 px-3 px-lg-3 d-none d-md-block   pb-2">
                                    <div class="m-auto m-md-0  d-inline-block " style="max-width: 100%;padding-top: 13px">
                                        <div class="col-12 px-0 row">
                                            <span class="d-inline-block pr-2" style="position: relative;">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block pt-2 ml-1"
                                                            style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                            id="counter_628e67506d6cb">
                                                        </span>
                                                        <span class="d-inline-block noselect ">
                                                            <span class="fa-heart love-favourite  fal  font-3"
                                                                style=" padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3 ;"></span>
                                                        </span>
                                                        <div class="dropdown show d-none dots-628e67506d6cb ">
                                                            <span
                                                                class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"></span>
                                                            <div class="dropdown-menu border"
                                                                aria-labelledby="dropdownMenuLink"
                                                                style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                            </div>
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
        <div class="col-12 pt-0 mt-md-5 mt-lg-4 pt-2   px-0 pb-5 mb-5" style="position: relative;">
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
                                        <div class="col-6 text-left pt-2">
                                            <span class="btn btn-primary cairo font-1 edit-bio-btn" style="cursor: pointer;"
                                                onclick="$(this).fadeToggle(0);$('.bio-old').fadeOut(0);$('.bio-new').slideDown();"><span
                                                    class="fal fa-edit"></span> تعديل </span>
                                        </div>
                                    </div>
                                    <h1 class="col-12 almaria py-3  bio-old font-lg-2"
                                        style="min-height: 80px;    white-space: pre-line;font-size: 15px;color: var(--bg-font-4);line-height: 1.8; word-wrap: break-word;overflow: hidden;  ">
                                        لم يكتب نبذة شخصية</h1>
                                    <div class="col-12 bio-new pb-4 pt-4" style="display: none;">
                                        <form method="POST" action="https://nafezly.com/profile/edit-bio"
                                            class="col-12">
                                            <input type="hidden" name="_token"
                                                value="ScqOFeeHg6q2pf7RvkfxSkhqZfhnHvUNtRHqlYXy">
                                            <textarea class="form-control" style="min-height: 200px" name="bio">لم يكتب نبذة شخصية</textarea>
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
                                        <div class="col-6  text-left pt-2">
                                            <a href="https://nafezly.com/profile/nafezly-settings"
                                                class="btn btn-primary  font-1 edit-bio-btn" style="cursor: pointer;"><span
                                                    class="fal fa-edit"></span> تعديل </a>
                                        </div>
                                    </div>
                                    <div class="col-12 py-3 d-flex row">
                                        <a href="https://nafezly.com/freelancers/skill/html"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> HTML</a>
                                        <a href="https://nafezly.com/freelancers/skill/css"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> CSS</a>
                                        <a href="https://nafezly.com/freelancers/skill/javascript"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> جافاسكربت</a>
                                        <a href="https://nafezly.com/freelancers/skill/bootstrap"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> Bootstrap</a>
                                        <a href="https://nafezly.com/freelancers/skill/jquery"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> jQuery</a>
                                        <a href="https://nafezly.com/freelancers/skill/sass"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> CSS Sass</a>
                                        <a href="https://nafezly.com/freelancers/skill/ajax"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> AJAX</a>
                                        <a href="https://nafezly.com/freelancers/skill/php"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> PHP</a>
                                        <a href="https://nafezly.com/freelancers/skill/laravel"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> Laravel</a>
                                        <a href="https://nafezly.com/freelancers/skill/yii"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> Yii</a>
                                        <a href="https://nafezly.com/freelancers/skill/mysql"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> MySQL</a>
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
                                                        <span class="fal fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fal fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fal fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fal fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                        <span class="fal fa-star"
                                                            style="color: var(--bg-color-4);;"></span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: var(--bg-font-4)">انشاء الحساب</td>
                                                    <td style="color: var(--bg-font-4)">
                                                        منذ شهر
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="color: var(--bg-font-4)">آخر تواجد</td>
                                                    <td style="color: var(--bg-font-4)">
                                                        <span class='fas fa-circle'
                                                            style='color:#3bc100;font-size:12px'></span> متصل
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
@endsection
