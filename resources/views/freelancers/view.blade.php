@extends('layouts.app')
@section('content')
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
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;" x-data="{
        formType: true,
        section: new URLSearchParams(window.location.search).get('section') ?? 'about',
        setSection(newSection) {
            const url = new URL(window.location);
            url.searchParams.set('section', newSection);
            window.history.pushState({}, '', url);
            this.section = newSection;
        }
    }">
        <div class="col-12 pt-0 profile-banner px-0 pb-md-4"
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
                                            stroke-dasharray="{{ $user_avg_score * 10 }},100" stroke-linecap="round"
                                            fill="none" cx="16.91549431" cy="16.91549431" r="15.91549431" />
                                        <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                            style="width: 100%;border-radius: 50%!important;height: 150px;position: absolute;padding: 10px;object-fit: cover;"
                                            alt="الصورة الشخصية" />
                                    </svg>
                                </div>
                                <div class="container text-center pt-2 pb-2">
                                    <h1 class="text-center pt-0 mb-0 pb-0 mt-2 almaria"
                                        style="font-size: 21px;color: var(--bg-color-0); text-transform: capitalize;">
                                        {{ $user->fullName }}
                                        @if ($user->last_login == null)
                                            <span class="fas fa-circle" style="color:#3bc100;font-size:12px"></span>
                                        @endif
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
                                    {{-- اوسمة المستخدم --}}
                                    {{-- <div class="col-12 px-0 text-center text-md-right col-12 col-lg-4 col-md-7 ">
                                        <span
                                            class="fad fa-badge-check font-4 text-center pt-1 nafezly-badge-style user_badge"
                                            data-placement='bottom' data-content='قام بتوثيق حسابه'></span>
                                        <span
                                            class="fad fa-users-crown font-4 text-center pt-1 nafezly-badge-style user_badge"
                                            data-placement='bottom' data-content='شريك نجاح'></span>
                                    </div> --}}
                                    <div class="m-auto m-md-0 py-2 d-block d-md-none row">
                                        <div class="col-12 px-0 row justify-content-center" style="">
                                            @if ($user->id == auth()->id())
                                                <div>
                                                    <a href="/my/profile">
                                                        <span class="btn btn-primary font-1 text-center   col-12"
                                                            style="border-radius: 2px">
                                                            <span class="fal fa-suitcase"></span> تعديل المعلومات الشخصية
                                                        </span>
                                                    </a>
                                                </div>
                                            @endif
                                            <div class="text-right text-md-left pr-2" style="position: relative;">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block pt-2 ml-1"
                                                            style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                            id="counter_{{ $user->id }}_sm">
                                                            {{ $user->likes_count ? $user->likes_count : '' }}
                                                        </span>
                                                        <span
                                                            class="d-inline-block love-favourite-area noselect {{ in_array(auth()->id(), $user->likes->pluck('id')->toArray()) ? 'added' : '' }}"
                                                            style=" cursor: pointer;" data-id="{{ $user->id }}_sm"
                                                            data-type="user" id="love_id_{{ $user->id }}_sm">
                                                            <span
                                                                class="fa-heart love-favourite font-3 {{ in_array(auth()->id(), $user->likes->pluck('id')->toArray()) ? 'fas' : 'fal' }}"
                                                                style="padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                id="icon_{{ $user->id }}_sm"></span>
                                                        </span>
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
                            @php
                                $items = [['section' => 'about', 'label' => 'نبذة عني', 'icon' => 'fal fa-user']];
                                if ($user->portfolios()->count()) {
                                    $items[] = ['section' => 'portfolios', 'label' => 'الأعمال', 'icon' => 'fal fa-images'];
                                }
                                if ($user->services()->count()) {
                                    $items[] = ['section' => 'services', 'label' => 'الخدمات', 'icon' => 'fal fa-boxes'];
                                }
                                if ($user->projects()->count()) {
                                    $items[] = ['section' => 'projects', 'label' => 'المشاريع', 'icon' => 'fal fa-suitcase'];
                                }
                            @endphp
                            <div class="user-nav row my-lg-0 d-flex" id="navbarSupportedContent"
                                style="background:var(--bg-second-bg);justify-content: space-between;">
                                <div class="d-inline-block px-0 hide-scrollbar" style="overflow-y:auto">
                                    <ul class=" ml-auto pr-lg-0 pr-0 d-flex "
                                        style=" background:var(--bg-second-bg);margin-bottom: 0px; border-radius: 5px; position: relative;">
                                        @foreach ($items as $item)
                                            <li class="nav-item text-center">
                                                <a class="nav-link kufi font-small font-md-1 text-center"
                                                    :class="section == '{{ $item['section'] }}' ? 'active' : ''"
                                                    @click.prevent="setSection('{{ $item['section'] }}')" href=""
                                                    style="color: var(--bg-font-4);line-height: 1.2"><span
                                                        class="{{ $item['icon'] }} font-md-1 font-4"></span>
                                                    <div class="text-center mt-2 d-md-inline-block mt-md-0">
                                                        {{ $item['label'] }} </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="form-inline my-2 my-lg-0 px-3 px-lg-3 d-none d-md-block pb-2">
                                    <div class="m-auto m-md-0  d-inline-block " style="max-width: 100%;padding-top: 13px">
                                        <div class="col-12 px-0 row">
                                            @if ($user->id == auth()->id())
                                                <a href="/my/profile" class="d-inline-block">
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
                                                            id="counter_{{ $user->id }}">
                                                            {{ $user->likes_count ? $user->likes_count : '' }}
                                                        </span>
                                                        <span
                                                            class="d-inline-block love-favourite-area noselect {{ in_array(auth()->id(), $user->likes->pluck('id')->toArray()) ? 'added' : '' }}"
                                                            style=" cursor: pointer;" data-id="{{ $user->id }}"
                                                            data-type="user" id="love_id_{{ $user->id }}">
                                                            <span
                                                                class="fa-heart love-favourite font-3 {{ in_array(auth()->id(), $user->likes->pluck('id')->toArray()) ? 'fas' : 'fal' }}"
                                                                style="padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                id="icon_{{ $user->id }}"></span>
                                                        </span>
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

        <div class="col-12 pt-0 mt-md-5 mt-lg-4 pt-2 px-0" style="position: relative;">
            <div class="col-12 px-0  ">
                <div class="container px-0">
                    <div class="col-12 row px-0 response-container">
                        {{-- about component --}}
                        <template x-if="section == 'about'">
                            <div class="col-12 col-lg-8 px-0">
                                <div class="col-12 p-1 px-lg-3 my-lg-3 d-flex">
                                    <div class="panel panel-default mrg--bm px-0  rounded main-nafez-box-styles"
                                        id="profile-stats">
                                        <div class="heada border-bottom row"
                                            style="border-color:var(--bg-main-bg)!important">
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
                                        <div class="heada border-bottom row"
                                            style="border-color:var(--bg-main-bg)!important">
                                            <div class="col-6 px-0 ">
                                                <h6 class="heada__title kufi font-2   px-3 py-3 mb-0"
                                                    style="color: var(--bg-color-0);">مهاراتي</h6>
                                            </div>
                                            <div class="col-6 text-left pt-2">
                                                @if (auth()->id() == $user->id)
                                                    <a href="/my/profile" class="btn btn-primary  font-1 edit-bio-btn"
                                                        style="cursor: pointer;"><span class="fal fa-edit"></span> تعديل
                                                    </a>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-12 py-3 d-flex row">
                                            @forelse ($user->skills as $skill)
                                                <a href="#"
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
                        </template>
                        {{-- end component --}}

                        {{-- services component --}}
                        <template x-if="section == 'services'">
                            <div class="col-12 col-lg-8 px-0 row my-lg-3 py-1">
                                @foreach ($user->services as $service)
                                    <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4">
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
                                                <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                                    <a href="/service/{{ $service->category->id }}" class="d-block"
                                                        style="color:var(--bg-color-0);">
                                                        <span class="fal fa-tag"
                                                            style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                        <span style="opacity: .7;font-size: 11px;">
                                                            {{ $service->category->name }}
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="col-12 nafezly-divider-full mb-0 mt-1 " style="min-height: 1px;">
                                            </div>
                                            <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                                <div class="d-inline-block py-2 pr-3"
                                                    style="height: 36px;overflow: hidden;width: auto;">
                                                    <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                        class="d-inline-block text-nowrap">
                                                        {{ $service->price }}
                                                        <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                                    </span>
                                                </div>
                                                <div class="d-inline-block py-2 d-flex justify-content-end align-items-center float-left"
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
                                @endforeach
                            </div>
                        </template>
                        {{-- end component --}}

                        {{-- services component --}}
                        <template x-if="section == 'projects'">
                            <div class="col-12 col-lg-8 row my-lg-3 py-1">
                                @foreach ($user->projects as $project)
                                    <div class="col-12 main-nafez-box-styles p-3 p-lg-4 mb-lg-3 mb-3 project-box"
                                        style="border-radius:5px;transition: 0.1s all ease-in-out;overflow: hidden;">
                                        <div class="col-12 p-0 row d-flex ">
                                            <div class="col-12 col-lg-9 p-0">
                                                <h2 style="font-size:16px;height: 23px;"
                                                    class="d-block text-truncate overflow-hidden m-0">
                                                    <a href="/projects/{{ $project->id }}"
                                                        style="color: var(--bg-color-3);"
                                                        class="text-truncate">{{ $project->title }}</a>
                                                </h2>
                                                <div class="col-12 py-2 px-0">
                                                    <h3 class="naskh font-1 m-0 col-12 col-lg-10 px-0"
                                                        style="color:var(--bg-font-4);line-height: 1.8;overflow: hidden;height: 48px">
                                                        {{ $project->description }}
                                                    </h3>
                                                </div>
                                                <div class="col-12 px-0 row align-items-center justify-content-between text-truncate mb-2 mb-lg-0 d-lg-flex d-none"
                                                    style="flex-wrap: nowrap;">
                                                    <div class="d-flex align-items-center">
                                                        <a href="/freelancers/{{ $user->id }}"
                                                            class="d-inline-block">
                                                            <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                                                style="width: 40px;border-radius:inherit;padding: 3px;;border-radius: 50%;height: 40px;border:1px solid rgb(139 139 139 / 18%);object-fit: cover;">
                                                        </a>
                                                        <div class="d-inline-block pl-0 pr-3" style="font-size:13px">
                                                            <a href="/freelancers/{{ $user->id }}"
                                                                style="color: inherit;opacity: .8;">
                                                                {{ $user->fullName }}
                                                            </a>
                                                            <div class="d-block mt-1"
                                                                style="font-size:10px;opacity: 0.6;">
                                                                <span class="d-inline-block">
                                                                    <span
                                                                        class="fas fa-map-marker-alt mb-1  pl-0 pl-md-1 "></span>
                                                                    {{ $user->country->name ?? '' }}
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-lg-3 p-0">
                                                <div class="d-none d-lg-block  px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-usd-circle " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        {{ number_format($project->budget->from) . ' - ' . number_format($project->budget->to) }}
                                                        ل.س
                                                    </span>
                                                </div>
                                                <div class="d-none d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-business-time " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        {{ $project->expected_deadline }} أيام
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-ballot " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        1 عروض
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-clock " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        @php
                                                            Carbon\Carbon::setLocale('ar_EH');
                                                            $time = $project->created_at->diffForHumans(Carbon\Carbon::now());
                                                        @endphp
                                                        {{ $time }}
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-none px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="far fa-map-marker-alt" aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;"></span>
                                                        {{ $user->country->name ?? '' }}
                                                    </span>
                                                </div>
                                                <div class="d-inline-block d-lg-block px-1">
                                                    <span class="d-inline-block kufi "
                                                        style="font-size: 12px;color: #777777">
                                                        <span class="fas fa-check-circle " aria-hidden="true"
                                                            style="font-size: 12px;width:18px;text-align: center;color:#28a745;"></span>
                                                        {{ __($project->status) }}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </template>
                        {{-- end component --}}

                        {{-- portfolios component --}}
                        <template x-if="section == 'portfolios'">
                            <div class="col-12 col-lg-8 px-0 row my-lg-3 py-1">
                                @foreach ($user->portfolios as $portfolio)
                                    <div class="col-6 col-sm-4 col-md-6 col-lg-4 p-1 p-md-2 portfolio-card">
                                        <div class="col-12 px-0">
                                            <div class="col-12 p-2 main-nafez-box-styles" style="border-radius: 5px;">
                                                <div class="col-12 p-0 p-md-1 d-flex  row"
                                                    style="border-radius: 0px!important;overflow: hidden;position: relative;">
                                                    <div class="col-12 p-0 row ">
                                                        <a href="/portfolios/{{ $portfolio->id }}"
                                                            class="pb-0 d-inline-block col-12 px-0">
                                                            <div class="col-12 px-0" style="">
                                                                <div class="col-12 px-0"
                                                                    style="overflow: hidden;border-radius: 4px!important">
                                                                    <img src="{{ asset('uploaded_images/portfolios/' . $portfolio->main_image) }}"
                                                                        style="width: 100%!important;padding: 0px;border-radius: 4px!important"
                                                                        class="portfolio-img">
                                                                    <div class="col-12 px-0"
                                                                        style="background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(81%, rgba(0, 0, 0, 0.6)));height: 50px;position: absolute;bottom: 0px;z-index: 0;border-radius: 0px 0px 0px 0px">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class=" pl-2  py-1 col-12"
                                                            style="position: absolute;z-index: 1;bottom: 10px;right: 0px;border-radius: 0px 50px 50px 0px">
                                                            <div class="col-12 px-0 almaria row text-right"
                                                                style="overflow: hidden;">
                                                                <a href="/freelancers/{{ $user->id }}">
                                                                    <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                                                        style="width: 25px;height: 25px;border-radius: 50%!important;"
                                                                        class=" d-inline-block"
                                                                        alt="{{ $user->fullName }}">
                                                                </a>
                                                                <div style="width: calc(100% - 25px);display: inline-block;position: relative;top: -4px;height:25px"
                                                                    class="pt-1 text-right ">
                                                                    <div style="font-size: 9px;position: relative;top:5px;height: 20px;overflow: hidden; color: #f1f1f1;"
                                                                        class="d-flex pr-0 pl-2 portfolio-card-user-name text-right row col-12">
                                                                        <div class="col-9 px-2">
                                                                            <a href="/freelancers/{{ $user->id }}"
                                                                                style="color: #f1f1f1;font-size: 12px;">
                                                                                {{ $user->fullName }}
                                                                            </a>
                                                                        </div>
                                                                        <div class="col-3 pl-2 pr-0 pt-1 text-left "
                                                                            style="font-size: 10px">
                                                                            {{ $portfolio->viewers->count() }} <span
                                                                                class="fas fa-eye"></span>
                                                                        </div>
                                                                    </div>
                                                                    <h2 style="font-size: 9px;position: relative;bottom:-60px;height: 20px;overflow: hidden; color: #f1f1f1;"
                                                                        class="d-block px-2 portfolio-card-details text-right">
                                                                        {{ $portfolio->title }}
                                                                    </h2>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </template>
                        {{-- end component --}}

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
                                                        @if ($user->last_login != null)
                                                            {{ $user->last_login->diffForHumans() }}
                                                        @else
                                                            <span class="fas fa-circle"
                                                                style="color:#3bc100;font-size:12px"></span> متصل
                                                        @endif
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
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
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
                labels: ['ملف شخصي', 'أعمال', 'خدمات', 'مشاريع', 'متميز'],
                datasets: [{
                    label: '# نقاط',
                    data: [
                        {{ $user_score['profile'] }},
                        {{ $user_score['portfolios'] }},
                        {{ $user_score['services'] }},
                        {{ $user_score['projects'] }},
                        {{ $user_score['likes'] }},
                    ],
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
