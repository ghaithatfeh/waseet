@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 px-0">
            <div class="col-12  p-0 pb-0 ">
                <div class="col-12  p-0 pb-0 mb-1 mb-lg-4 " style="background: var(--bg-head);padding: 20px!important">
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
                                                {{ $service->title }}
                                            </h1>
                                        </div>
                                        <div class="col-12 p-0 text-truncate">
                                            <a href="/" style="color:inherit;font-size:11px;opacity:0.7">
                                                الرئيسية
                                            </a>
                                            <a href="/services" style="color:inherit;font-size:11px;opacity:0.7">
                                                <span class="font-small px-1">/</span> الخدمات
                                            </a>
                                            <a href="#" style="color:inherit;font-size:11px;opacity:0.7">
                                                <span class="font-small px-1">/</span>
                                                {{ $service->title }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 px-0 d-flex d-flex justify-content-end ">
                                        <div
                                            class="col-12 px-0  d-flex align-items-center justify-content-between justify-content-md-end  py-2">
                                            <span class="btn btn-primary font-1 text-center "
                                                style="border-radius: 2px;border-radius: 428px;padding: 5px 18px!important;cursor: pointer;"
                                                data-toggle="modal" data-target=".order-service">
                                                <span class="fal fa-shopping-cart"></span>
                                                <span> شراء الخدمة</span>
                                            </span>
                                            <div class="d-inline-block mr-2">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block love-favourite-area noselect "
                                                            style=" cursor: pointer;" data-id="62b223353bf94"
                                                            data-type="project" data-type_id="5990"
                                                            id="love_id_62b223353bf94">
                                                            <span class="fa-heart love-favourite fal font-3"
                                                                style="padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                id="icon_62b223353bf94"></span>
                                                        </span>
                                                        @if ($service->user->id == auth()->id())
                                                            <div class="dropdown show d-none d-inline-block">
                                                                <span
                                                                    class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                    style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                    role="button" id="dropdownMenuLink"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"></span>
                                                                <div class="dropdown-menu border"
                                                                    aria-labelledby="dropdownMenuLink"
                                                                    style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                                    <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 edit-dots-wedgit "
                                                                        href="/services/{{$service->id}}/edit"
                                                                        style="font-size: 13px;color: var(--bg-color-0)"><span
                                                                            class="fal fa-edit text-center"
                                                                            style="width: 20px;color: var(--bg-color-0)"></span>
                                                                        تعديل
                                                                    </a>
                                                                    <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 remove-dots-wedgit remove-service-click"
                                                                        href="#"
                                                                        style="font-size: 13px;color: var(--bg-color-0)">
                                                                        <span class="fal fa-trash text-center"
                                                                            style="width: 20px;color: var(--bg-color-0)"></span>
                                                                        حذف
                                                                    </a>
                                                                    <form id="remove-service-form" method="post" action="/services/{{$service->id}}">
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
            <div class="container px-0 ">
                <div class="col-12 px-0 row">
                    <div class=" col-12 col-lg-8 order-lg-1 order-3 px-0 px-lg-4 pb-lg-4 pt-0">
                        <div class="col-12 px-0 py-1 py-lg-3">
                            <div class="col-12 px-0 main-nafez-box-styles" style="overflow: hidden;">
                                <div class="col-12 px-0 row ">
                                    <div class="col-8 px-0">
                                    </div>
                                    <div class="col-12 mb-0 mt-0 px-0">
                                        <div class="col-12 px-0">
                                            <div class="col-12 row px-0 min-hight-450-md-U"
                                                style="z-index: 0;max-height: 450px!important;">
                                                <div class="owl-carousel">
                                                    @foreach ($service->images as $image)
                                                        <div class="mx-2 pb-0 pt-2 item min-hight-450-md-U"
                                                            style="max-height: 450px!important;">
                                                            <div class="card mb-0">
                                                                <img class=""
                                                                    src="{{ asset('uploaded_images/services/' . $image->image_name) }}"
                                                                    alt="صورة الخدمة تصميم صفحه ويب متجاوبه مع كل الشاشات"
                                                                    style="max-height: 450px;  width: 100%;
                                                                                                min-height: 300px;
                                                                                                font-family: 'object-fit: cover; object-position: bottom;';
                                                                                                vertical-align: middle;
                                                                                                border-radius: 3px!important;object-fit: cover;">
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12  " style="border-top:1px solid var(--bg-main-bg);padding: 20px;">
                                    <h2 class="col-12 p-0  naskh  font-2  "
                                        style="white-space: pre-line; word-wrap: break-word;overflow: hidden;color:var(--bg-color-0);line-height: 1.6  ">
                                        {{ $service->description }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                        @if (isset($service->skills[0]))
                            <div class="col-12 px-0 py-1 py-lg-3  ">
                                <div class="col-12 main-nafez-box-styles px-0">
                                    <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                        <h5 style="font-size: 17px;color:var(--bg-color-0)"> مهارات متعلقة بالخدمة</h5>
                                    </div>
                                    <div class="col-12 p-3 row">
                                        @foreach ($service->skills as $skill)
                                            <a href="#"
                                                class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                    class="far fa-tags ml-1"></span> {{ $skill->name }}</a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-12 px-0 py-1 py-lg-3  ">
                            <div class="col-12 main-nafez-box-styles px-0">
                                <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                    <h5 style="font-size: 17px;color:var(--bg-color-0)"> مهارات البائع</h5>
                                </div>
                                <div class="col-12 p-3 row">
                                    @forelse ($service->user->skills as $skill)
                                        <a href="#"
                                            class="d-inline-block btn font-small rounded-pill py-1 my-1 tag-class ml-1"><span
                                                class="far fa-tags ml-1"></span> {{ $skill->name }}</a>
                                    @empty
                                        لم يحدد بعد.
                                    @endforelse
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
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-facebook-f d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://twitter.com/share?url=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-twitter d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA&title=تصميم صفحه ويب متجاوبه مع كل الشاشات&summary=سوف اقوم بإنشاء صفحه ويب كامله مقابل 10 دولار علي أن تكون الصفحه متجاوبه مع جميع الشاشات
                                                            مع امكانيه استخدام التقنيات الحديثة مثل
                                                            Sass
                                                            Pug
                                                            حتي يكون المشروع منظم بقدر الإمكان
                                                            بالتأكيد استخدم في المشروع
                                                            Html5
                                                            Css3
                                                            JavaScript or jQuery
                                                            Bootstrap
                                                            Pug
                                                            Sass&source=نفذلي"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-linkedin-in d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                            data-action="share/whatsapp/share" class="d-inline-block p-1"
                                            target="_blank">
                                            <span class="fab fa-whatsapp d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                            data-url="https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
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
                                    <div class="col-12 px-0  ">
                                        <div class="col-12 row px-0 main-nafez-box-styles ">
                                            <div class="col-12 pt-3 pb-2"
                                                style="border-bottom: 1px solid var(--bg-main-bg)">
                                                <h5 style="color: var(--bg-color-0);font-size: 17px"> بطاقة الخدمة </h5>
                                            </div>
                                            <div class="col-12 row p-3">
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        التقييمات
                                                    </div>
                                                    <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1  align-items-center"
                                                        style="height:29px">
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);font-size:11px;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);font-size:11px;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);font-size:11px;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);font-size:11px;"></span>
                                                        <span class="fas fa-star"
                                                            style="color: var(--bg-color-4);font-size:11px;"></span>
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        سعر الخدمة
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        {{ number_format($service->price) }} ل.س
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        مدة التسليم
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        {{ $service->deadline }}
                                                    </div>
                                                </div>
                                                <div class="col-12 row" style="padding:4px 5px">
                                                    <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                        style="color: var(--bg-color-0);font-size: 13px;">
                                                        خدمات مباعة
                                                    </div>
                                                    <div
                                                        class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                        1
                                                    </div>
                                                </div>
                                                <div class="col-12 p-0 my-3"
                                                    style="height:1px;background: var(--bg-main-bg);"></div>
                                                <div class="col-12 px-2">
                                                    <span class="px-1 " style="padding:4px 5px;font-size:12px">بائع
                                                        الخدمة</span>
                                                </div>
                                                <div class="col-12 px-2 row d-flex align-items-center justify-content-between text-truncate"
                                                    style="flex-wrap: nowrap;">
                                                    <div class="d-flex align-items-center">
                                                        <a href="/freelancers/{{ $service->user->id }}"
                                                            class="d-inline-block">
                                                            <img src="{{ asset('uploaded_images/users/' . ($service->user->profile_image ?? 'defualt.png')) }}"
                                                                style="width: 70px;border-radius:inherit;padding: 6px;;border-radius: 50%;height: 70px;object-fit: cover;">
                                                        </a>
                                                        <div class="d-inline-block px-1" style="font-size:15px">
                                                            <a href="/freelancers/{{ $service->user->id }}"
                                                                style="color: inherit;">
                                                                {{ $service->user->first_name . ' ' . $service->user->last_name }}
                                                            </a>
                                                            <div class="d-block mt-1"
                                                                style="font-size:10px;opacity: 0.7;">
                                                                <span class="d-inline-block">
                                                                    <span
                                                                        class="fas fa-suitcase mb-1 pl-0 pl-md-1  "></span>
                                                                    {{ $service->user->job_name }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div style="width:96px">
                                                        {{-- زر تواصل --}}
                                                        <a href="" class="d-inline-block  p-0">
                                                            <span
                                                                class="btn btn-outline-primary font-1 text-center  font-1"
                                                                style="border-radius: 30px;padding: 5px 18px!important;">
                                                                <span class="fal fa-paper-plane font-1"></span>
                                                                <span class="font-1"> تواصل</span>
                                                            </span>
                                                        </a>
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
                                        <a href="https://www.facebook.com/sharer/sharer.php?u=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-facebook-f d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://twitter.com/share?url=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-twitter d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA&title=تصميم صفحه ويب متجاوبه مع كل الشاشات&summary=سوف اقوم بإنشاء صفحه ويب كامله مقابل 10 دولار علي أن تكون الصفحه متجاوبه مع جميع الشاشات
                                                            مع امكانيه استخدام التقنيات الحديثة مثل
                                                            Sass
                                                            Pug
                                                            حتي يكون المشروع منظم بقدر الإمكان
                                                            بالتأكيد استخدم في المشروع
                                                            Html5
                                                            Css3
                                                            JavaScript or jQuery
                                                            Bootstrap
                                                            Pug
                                                            Sass&source=نفذلي"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-linkedin-in d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text=https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
                                            data-action="share/whatsapp/share" class="d-inline-block p-1"
                                            target="_blank">
                                            <span class="fab fa-whatsapp d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                            data-url="https://nafezly.com/service/223-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D9%87-%D9%88%D9%8A%D8%A8-%D9%85%D8%AA%D8%AC%D8%A7%D9%88%D8%A8%D9%87-%D9%85%D8%B9-%D9%83%D9%84-%D8%A7%D9%84%D8%B4%D8%A7%D8%B4%D8%A7%D8%AA"
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
        <div class="col-12 py-2"></div>
    </div>
@endsection
