@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
            .fotorama,
            .fotorama * {
                direction: ltr !important;
            }

            .heart-hearted {
                color: #e0245e;
            }

            .love-favourite-area {
                transition: .5s all ease-in-out !important;
            }

            .tags-area span {
                padding: 5px 8px 1px;
                background: var(--bg-color-3);
                color: #fff;
                border-radius: 4px !important;

            }

            .fotorama>div {
                width: 100% !important
            }

            .fotorama__loaded--img img {
                border-radius: 8px !important
            }
        </style>
        <div class="col-12  p-0 pb-0 ">
            <div class="col-12  p-0 pb-0 mb-1 mb-lg-4 " style="background: var(--bg-head);padding: 20px!important">
                <div class="container px-0 d-flex">
                    <div class="px-0 px-lg-4 row col-12">
                        <div class="col-12 px-0">
                            <div class="col-12 px-0 row ">
                                <div class="col-12 col-lg-9  px-0">
                                    <div style=" display: inline-block;position: relative;font-size: 14px;color: #919191">
                                        <div class="col-12  px-0  text-right text-md-right naskh "
                                            style="color: #919191;font-size: 11px;padding: 0px 0px">
                                        </div>
                                        <h1 style="display: block;font-size: 17px;color: var(--bg-color-0) ;line-height: 1.5"
                                            class="kufi font-md-4  mb-0">
                                            {{ $portfolio->title }}
                                        </h1>
                                    </div>
                                    <div class="col-12 p-0 text-truncate">
                                        <a href="/" style="color:inherit;font-size:11px;opacity:0.7">
                                            الرئيسية
                                        </a>
                                        <a href="/portfolios" style="color:inherit;font-size:11px;opacity:0.7">
                                            <span class="font-small px-1">/</span> الأعمال
                                        </a>
                                        <a href="#" style="color:inherit;font-size:11px;opacity:0.7">
                                            <span class="font-small px-1">/</span> {{ $portfolio->title }}
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3 px-0 d-flex d-flex justify-content-end ">
                                    <div
                                        class="col-12 px-0  d-flex align-items-center justify-content-between justify-content-md-end  py-2">
                                        <a href="#"
                                            class="btn btn-primary font-1 text-center "
                                            style="border-radius: 2px;border-radius: 428px;padding: 5px 18px!important;cursor: pointer;">
                                            <span class="fas fa-paper-plane"></span>
                                            <span> طلب عمل مماثل</span>
                                        </a>
                                        <div class="d-inline-block mr-2">
                                            <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                <div class="col-12 px-1 d-flex align-items-center">
                                                    <span class="d-inline-block pt-2 ml-1"
                                                        style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                        id="counter_{{ $portfolio->id }}">
                                                        {{ $portfolio->likes()->count() ? $portfolio->likes()->count() : '' }}
                                                    </span>
                                                    <span class="d-inline-block love-favourite-area noselect {{ in_array(auth()->id(), $portfolio->likes->pluck('id')->toArray()) ? 'added' : '' }}"
                                                        style=" cursor: pointer;" data-id="{{ $portfolio->id }}"
                                                        data-type="portfolio"
                                                        id="love_id_{{ $portfolio->id }}">
                                                        <span class="fa-heart love-favourite font-3 {{ in_array(auth()->id(), $portfolio->likes->pluck('id')->toArray()) ? 'fas' : 'fal' }}"
                                                            style="padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                            id="icon_{{ $portfolio->id }}"></span>
                                                    </span>
                                                    @if ($portfolio->user->id == auth()->id())
                                                        <div class="dropdown show d-none d-inline-block">
                                                            <span
                                                                class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                role="button" id="dropdownMenuLink" data-toggle="dropdown"
                                                                aria-haspopup="true" aria-expanded="false"></span>
                                                            <div class="dropdown-menu border"
                                                                aria-labelledby="dropdownMenuLink"
                                                                style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                                <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 edit-dots-wedgit "
                                                                    href="/portfolios/{{ $portfolio->id }}/edit"
                                                                    style="font-size: 13px;color: var(--bg-color-0)"><span
                                                                        class="fal fa-edit text-center"
                                                                        style="width: 20px;color: var(--bg-color-0)"></span>
                                                                    تعديل
                                                                </a>
                                                                <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 remove-dots-wedgit remove-portfolio-click"
                                                                    href="#"
                                                                    style="font-size: 13px;color: var(--bg-color-0)">
                                                                    <span class="fal fa-trash text-center"
                                                                        style="width: 20px;color: var(--bg-color-0)"></span>
                                                                    حذف
                                                                </a>
                                                                <form id="remove-portfolio-form" method="post"
                                                                    action="/portfolios/{{ $portfolio->id }}">
                                                                    @method('delete')
                                                                    @csrf
                                                                </form>
                                                            </div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 px-0">
        <div class="container px-0 ">
            <div class="col-12 px-0 row">
                <div class=" col-12 col-lg-8 order-lg-1 order-3 px-0 px-lg-4 pb-lg-4 pt-0">
                    <div class="col-12 px-0 py-1 py-lg-3">
                        <div class="col-12   main-nafez-box-styles px-0">
                            <div class="col-12 px-0">
                            </div>
                            <div class="col-12 p-2 " style="min-height: 50vh">
                                <div data-nav="thumbs">
                                    <a href="{{ asset('uploaded_images/portfolios/' . $portfolio->main_image) }}"
                                        alt="صورة من صور نموذج العمل {{ $portfolio->title }}"
                                        class="thumbnail-nafezly col-12 px-0 " rel="group" disabled>
                                        <img class="mb-3"
                                            src="{{ asset('uploaded_images/portfolios/' . $portfolio->main_image) }}"
                                            style="width: 100%;padding: 4px;border:1px solid var(--bg-main-bg);"
                                            alt="{{ $portfolio->title }}">
                                    </a>
                                    @foreach ($portfolio->images as $image)
                                        <a href="{{ asset('uploaded_images/portfolios/' . $image->image_name) }}"
                                            alt="صورة من صور نموذج العمل {{ $portfolio->title }}"
                                            class="thumbnail-nafezly col-12 px-0 " rel="group" disabled>
                                            <img class="mb-3" src="{{ asset('uploaded_images/portfolios/' . $image->image_name) }}"
                                                style="width: 100%;padding: 4px;border:1px solid var(--bg-main-bg);"
                                                alt="{{ $portfolio->title }}">
                                        </a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 py-lg-2 py-1  px-0  ">
                        <div class="col-12   main-nafez-box-styles px-0">
                            <div class="col-12 px-3 row" style="border-bottom: 1px solid var(--bg-main-bg);">
                                <div class="col-6 pt-3 pb-2 px-0">
                                    <h5 style="color: var(--bg-color-0);font-size: 17px"> تفاصيل العمل </h5>
                                </div>
                                <div class="col-6 text-left  pt-2  px-0">
                                </div>
                            </div>
                            <h2 class="col-12 p-3 naskh font-2 m-0"
                                style="overflow: hidden;white-space: pre-line;word-wrap: break-word;overflow: hidden;color: var(--bg-color-0)">
                                {{ $portfolio->description }}
                            </h2>
                            @if ($portfolio->url)
                                <div class="col-12 px-3 pb-3 row d-flex">
                                    <span class="d-inline-block  noselect ml-2">
                                        <a href="{{ $portfolio->url }}" rel="nofollow"
                                            class="btn btn-outline-success  d-inline-block font-1 pt-1 pb-1 mt-1"
                                            style="border-radius: 0px;padding: 0px;padding: 8px 10px 4px;"
                                            target="_blank"><span class="fal fa-link" style=""></span> رابط العمل
                                        </a>
                                    </span>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 px-0 py-1 py-lg-3 d-block d-lg-none">
                        <div class="col-12   main-nafez-box-styles px-0">
                            <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                <h5 style="font-size: 17px;color:var(--bg-color-0)"> مهارات العمل </h5>
                            </div>
                            <div class="col-12 p-3 row d-flex">
                                @foreach ($portfolio->skills as $skill)
                                    <a href="#"
                                        class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class">
                                        <span class="far fa-tags pl-1"></span> {{ $skill->name }}
                                    </a>
                                @endforeach
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
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                        class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-facebook-f d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <a href="https://twitter.com/share?url={{ Request::url() }}"
                                        class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-twitter d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}&title={{ $portfolio->title }}&summary={{ $portfolio->title }}&source=نفذلي"
                                        class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-linkedin-in d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text={{ Request::url() }}"
                                        data-action="share/whatsapp/share" class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-whatsapp d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                        data-url="{{ Request::url() }}" title="نسخ الرابط">
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
                                    <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg)">
                                        <h5 style="color: var(--bg-color-0);font-size: 17px"> بطاقة العمل </h5>
                                    </div>
                                    <div class="col-12 row p-3">
                                        <div class="col-12 row" style="padding:4px 5px">
                                            <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                style="color: var(--bg-color-0);font-size: 13px;">
                                                تاريخ النشر
                                            </div>
                                            <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                @php
                                                    Carbon\Carbon::setLocale('ar_EH');
                                                    $time = $portfolio->created_at->diffForHumans(Carbon\Carbon::now());
                                                @endphp
                                                {{ $time }}
                                            </div>
                                        </div>
                                        <div class="col-12 row" style="padding:4px 5px">
                                            <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                style="color: var(--bg-color-0);font-size: 13px;">
                                                المشاهدات
                                            </div>
                                            <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                {{ $portfolio->viewers()->count() }}
                                            </div>
                                        </div>
                                        <div class="col-12 row" style="padding:4px 5px">
                                            <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                style="color: var(--bg-color-0);font-size: 13px;">
                                                القسم
                                            </div>
                                            <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 "
                                                style="font-size:12px">
                                                <a href="/portfolios?specialize={{ $portfolio->category->id }}">
                                                    {{ $portfolio->category->name }}
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-12 p-0 my-3" style="height:1px;background: var(--bg-main-bg);">
                                        </div>
                                        <div class="col-12 px-2">
                                            <span class="px-1" style="padding:4px 5px;font-size:12px">المستقل</span>
                                        </div>
                                        <div class="col-12 px-2 row d-flex align-items-center justify-content-between text-truncate"
                                            style="flex-wrap: nowrap;">
                                            <div class="d-flex align-items-center">
                                                <a href="/freelancers/{{ $portfolio->user_id }}"
                                                    class="d-inline-block">
                                                    <img src="{{ asset('uploaded_images/users/' . ($portfolio->user->profile_image ?? 'defualt.png')) }}"
                                                        style="width: 70px;border-radius:inherit;padding: 6px;;border-radius: 50%;">
                                                </a>
                                                <div class="d-inline-block px-1" style="font-size:15px">
                                                    <a href="/freelancers/{{ $portfolio->user_id }}"
                                                        style="color: inherit;">
                                                        {{ $portfolio->user->full_name }}
                                                    </a>
                                                    <div class="d-block mt-1" style="font-size:10px;opacity: 0.7;">
                                                        <span class="d-inline-block">
                                                            <span class="fas fa-suitcase mb-1 pl-0 pl-md-1  "></span>
                                                            {{ $portfolio->user->job_name }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div style="width:96px">
                                                <a href="" class="d-inline-block  p-0">
                                                    <span class="btn btn-outline-primary font-1 text-center  font-1"
                                                        style="border-radius: 30px;padding: 5px 18px!important;">
                                                        <span class="fas fa-paper-plane font-1"></span>
                                                        <span class="font-1"> وظفني</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 px-0 py-1 py-lg-3 d-none d-lg-block">
                        <div class="col-12   main-nafez-box-styles px-0">
                            <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                <h5 style="font-size: 17px;color:var(--bg-color-0)"> مهارات العمل </h5>
                            </div>
                            <div class="col-12 p-3 row d-flex">
                                @foreach ($portfolio->skills as $skill)
                                    <a href="#"
                                        class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class">
                                        <span class="far fa-tags pl-1"></span> {{ $skill->name }}
                                    </a>
                                @endforeach
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
                                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                        class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-facebook-f d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <a href="https://twitter.com/share?url={{ Request::url() }}"
                                        class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-twitter d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <a href="https://www.linkedin.com/shareArticle?url={{ Request::url() }}"
                                        class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-linkedin-in d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <a href="https://api.whatsapp.com/send?text={{ Request::url() }}"
                                        data-action="share/whatsapp/share" class="d-inline-block p-1" target="_blank">
                                        <span class="fab fa-whatsapp d-inline-block "
                                            style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                    </a>
                                    <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                        data-url="{{ Request::url() }}" title="نسخ الرابط">
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
    <div class="col-12 py-2"></div>
    </div>
@endsection
