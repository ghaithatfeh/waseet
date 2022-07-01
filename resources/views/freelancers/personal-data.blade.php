@extends('layouts.app')
@section('content')
    <style type="text/css">
        .croppie-container .cr-viewport {
            box-shadow: 0 0 2000px 2000px rgba(0, 0, 0, 0.5) !important;
        }

        .ltr,
        .ltr * {
            direction: ltr !important;
            text-align: unset;
        }
    </style>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <button type="button" class="change-pic-btn d-none" data-toggle="modal" data-target=".ch-pic-modal"></button>
        <div class="modal fade ch-pic-modal" tabindex="-1" role="dialog" aria-hidden="true" id="avatar-modal">
            <div class="modal-dialog modal-lg" style="width: 500px;max-width: 100%">
                <div class="modal-content">
                    <div class="mx-auto col-12 px-0" style="max-width: 100%;border-radius: 3px;overflow: hidden;">
                        <div class="col-12 row border-bottom">
                            <div class="col-9 py-3">
                                تغيير الصورة الشخصية
                            </div>
                            <div class="col-3 text-left pt-1 px-0">
                                <span class="far fa-times p-3" style="color: #333;cursor: pointer;" data-dismiss="modal"
                                    aria-label="Close"></span>
                            </div>
                        </div>
                        <div class="col-12 pt-5 pb-4 px-2">
                            <div class="col-12 px-0 ltr">
                                <img class="my-image" id="demo-basic" style="z-index: 45454" />
                            </div>
                            <div class="col-12 text-left mt-3">
                                <button class="btn btn-secondary mx-1 font-1" data-dismiss="modal"
                                    aria-label="Close">إلغاء</button>
                                <button class="btn btn-primary mx-1 font-1 save-image" data-dismiss="modal"
                                    aria-label="Close">تغيير الصورة</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-5 change-profile-pic-modal"
            style="position: fixed;width: 100%;z-index: 66666;background: var(--bg-second-bg);height: 100vh;display: none;margin-top: -60px">
        </div>
        @php
            $section = $_GET['section'] ?? 'account';
        @endphp
        <script>
            let section = {{ json_decode($section) }}
            console.log(new URLSearchParams(window.location.search).get('page'))
        </script>
        <div class="col-12 px-0">
            <div class="container" x-data="{
                formType: true,
                section: new URLSearchParams(window.location.search).get('section') ?? 'account',
                setSection(newSection) {
                    const url = new URL(window.location);
                    url.searchParams.set('section', newSection);
                    window.history.pushState({}, '', url);
                    this.section = newSection;
                }
            }">
                <div class="col-12 row px-0">
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
                                        <a href="/freelancers/{{ $user->id }}">
                                            <div
                                                style="width: 150px;display: inline-block;border-radius: 50%!important;box-shadow: 0px 0px 12px var(--bg-main-bg);max-width: 100%; height: 150px;position: absolute;  left: 0;   right: 0;  margin-left: auto;   margin-right: auto;  ">
                                                <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                                    style="width: 100%;border-radius:inherit;padding: 10px;height: 100%;border-radius: 50%;object-fit: cover;">
                                                <a href="/freelancers/personal-data/{{ $user->id }}">
                                                    <div style="position: absolute;width: 40px;height: 40px;left: 6px;bottom: 10px;border-radius: 50%!important;background: var(--bg-second-bg);cursor: pointer;padding: 8px 0px;border:1px dashed var(--bg-font-4)"
                                                        class="text-center hover-darker">
                                                        <span class="fal fa-user-edit"
                                                            style="color: var(--bg-font-4);"></span>
                                                    </div>
                                                </a>
                                            </div>
                                        </a>
                                    </div>
                                    <h5 class="text-center pt-2 mb-0 pb-0 mt-2 almaria"
                                        style="font-size: 23px;color: var(--bg-font-4); ">
                                        {{ $user->first_name . ' ' . $user->last_name }}
                                        @if ($user->last_login == null)
                                            <span class="fas fa-circle" style="color:#3bc100;font-size:12px"></span>
                                        @endif
                                    </h5>
                                </div>
                            </div>
                            <div class="col-12 mb-2 mt-4 d-block d-md-none p-3 main-nafez-box-styles ">
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
                                <div class="col-12  text-center px-0 dash-list-area d-peter-none"
                                    style="border:1px solid var(--bg-main-bg) ;overflow: hidden;">
                                    <div class="col-12 p-2">
                                        لوحة التحكم
                                    </div>
                                    <div class="col-12 px-0 d-flex row">
                                        <div class="col-4 p-1  text-center font-1">
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
                                        <div class="col-4 p-1 text-center font-1">
                                            <a href="" @click.prevent="setSection('account')"
                                                :class="section == 'account' && 'd-block active'"
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
                                        <div class="col-4 p-1 text-center font-1">
                                            <a href="" class="d-block" @click.prevent="setSection('projects')"
                                                :class="section == 'projects' && 'd-block active'"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-suitcase d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            مشاريعي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1">
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
                                        <div class="col-4 p-1  text-center font-1">
                                            <a href="" class="d-block" @click.prevent="setSection('services')"
                                                :class="section == 'services' && 'active'"
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
                                        <div class="col-4 p-1  text-center font-1">
                                            <a href="" class="d-block" @click.prevent="setSection('offers')"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fal fa-handshake  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            عروضي
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                        <div class="col-4 p-1  text-center font-1">
                                            <a href="" class="d-block"
                                                @click.prevent="setSection('change-password')"
                                                style="border-radius: 7px;overflow: hidden;">
                                                <div class="col-12 p-2 text-center main-nafez-box-styles d-flex align-items-center"
                                                    style="color: var(--bg-font-4);height: 80px;border-radius: 7px;overflow: hidden;">
                                                    <div class="col-12 p-0 text-center">
                                                        <span class="fas fa-key  d-inline-block  font-3"
                                                            style="color: var(--bg-color-2);"></span>
                                                        <div class="col-12 px-0 text-center title">
                                                            كلمة المرور
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
                    <div class="col-12 col-lg-9 col-md-8 text-center content-area px-0 px-md-3 pb-2">
                        <!-- content area -->

                        {{-- personal date --}}
                        <template x-if="section == 'account'">
                            <form method="POST" action="/freelancers/personal_data_update/{{ $user->id }}"
                                enctype="multipart/form-data" id="profile-update-form">
                                @csrf
                                <div style="padding: 0px; min-height: 700px;"
                                    class="col-12 row mt-0 mt-md-5 main-nafez-box-styles">
                                    <div class="col-12 px-0">
                                        <div class="col-12 px-0" style="border-bottom: 1px solid var(--bg-main-bg)">
                                            <nav class="navbar navbar-expand-lg px-0 py-0">
                                                <span class="navbar-brand" href="#"
                                                    style="padding: 12px 0px!important;color: var(--bg-color-0) ;font-size: 16px">حسابي</span>
                                                <button class="navbar-toggler p-0" type="button" data-toggle="collapse"
                                                    data-target="#navbarSupportedContent"
                                                    aria-controls="navbarSupportedContent" aria-expanded="false"
                                                    aria-label="Toggle navigation">
                                                    <span
                                                        class="fal fa-caret-down font-2 border ml-2 py-1 px-2 hover-light"
                                                        style="color: #999"></span>
                                                </button>
                                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                                    <ul class="navbar-nav mr-auto pr-0">
                                                        <li class="nav-item">
                                                            <a @click.prevent="formType= true"
                                                                class="nav-link font-1 py-3 px-3 d-inline-block"
                                                                href="#" style="color: var(--bg-color-0);"
                                                                :style="formType ? { borderBottom: '3px solid #000' } :
                                                                    'color: var(--bg-color-0);'">
                                                                البيانات الشخصية
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a @click.prevent="formType = false"
                                                                class="nav-link font-1 py-3 px-3 d-inline-block"
                                                                href="#" style="color: var(--bg-color-0);"
                                                                :style="!formType ? { borderBottom: '3px solid #000' } :
                                                                    'color: var(--bg-color-0);'">
                                                                بيانات الموقع</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </nav>
                                        </div>

                                        <div x-show="formType" class="col-12" style="padding:12px 5px">
                                            <div class="col-12 col-md-12 mb-4 py-4 row text-center row">
                                                <div class="col-12 col-md-3 text-center mb-5">
                                                    {{-- upload profile image --}}
                                                    <div class="text-center"
                                                        style="height: 130px;width: 130px;border-radius: 50%!important;background-image: url('{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}'); background-size: cover; background-position: center;display: inline-block;cursor: pointer;position: relative;"
                                                        id="pf_foto">
                                                        <div class="text-left px-0 "
                                                            style="position: absolute;bottom: 10px;width: 100%;z-index: 2">
                                                            <span
                                                                class="btn  font-small d-inline-block mx-auto hover-darker btn-primary"
                                                                style="border-radius: 30px;z-index: 2;position: relative;"
                                                                onclick="$('#profile_image').click();">تغيير الصورة</span>
                                                        </div>
                                                        <input type="file" name="image" id="profile_image"
                                                            accept="image/*"
                                                            style="width: 100%;height: 130px;opacity: 0;z-index: 1;cursor: pointer;border-radius: 50%"
                                                            onclick="this.value=null;">
                                                        @error('image')
                                                            <label class="error mt-4 text-nowrap">يجب ان يكون الملف
                                                                صورة</label>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <script>
                                                    $(document).ready(function() {
                                                        $('#profile_image').change(function() {
                                                            let file = this.files[0];
                                                            let reader = new FileReader();
                                                            reader.readAsDataURL(file);
                                                            reader.onloadend = () => {
                                                                $('#pf_foto').css('background-image', 'url(' + reader.result + ')');
                                                            }
                                                        })
                                                    });
                                                </script>
                                                <div class="col-12 col-md-9 row">
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            الاسم الاول
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="" name="first_name" class="form-control"
                                                                minlength="2" maxlenght="30" required=""
                                                                value="{{ $user->first_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            اسم العائلة
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="" name="last_name" class="form-control"
                                                                minlength="2" maxlenght="30" required=""
                                                                value="{{ $user->last_name }}">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            رقم الهاتف <span style="color: #919191;"
                                                                class="font-small"></span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="" name="phone" class="form-control"
                                                                minlength="10" minlength="30"
                                                                value="{{ old('phone') ?? $user->phone }}">
                                                            @error('phone')
                                                                <small class="text-danger">
                                                                    رقم الهاتف مطلوب، يجب ان يتألف على الاقل من 10 ارقام.
                                                                </small>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            البلد
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <select class="col-12 font-1 form-control py-0 px-2"
                                                                name="country_id">
                                                                <option selected="" disabled=""></option>
                                                                @foreach (App\Models\Country::all() as $country)
                                                                    <option
                                                                        {{ $user->country_id == $country->id ? 'selected' : '' }}
                                                                        value="{{ $country->id }}">
                                                                        {{ $country->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-4">
                                                        <div class="col-12 font-1">
                                                            الجنس <span style="color: #919191;" class="font-small">(
                                                                إختياري )</span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <select class="form-control py-0 px-3" name="gender">
                                                                <option selected="" disabled=""></option>
                                                                <option value="Male"
                                                                    {{ $user->gender == 'Male' ? 'selected' : '' }}>ذكر
                                                                </option>
                                                                <option value="Female"
                                                                    {{ $user->gender == 'Female' ? 'selected' : '' }}>
                                                                    انثى
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 mb-4">
                                                        <div class="col-12 font-1">
                                                            تاريخ الميلاد <span style="color: #919191;"
                                                                class="font-small">(
                                                                إختياري )</span>
                                                        </div>
                                                        <div class="col-12 mt-2 row">
                                                            @php
                                                                $user_birthday = '';
                                                                $user_birthmonth = '';
                                                                $user_birthyear = '';
                                                                if (isset($user->birthdate)) {
                                                                    $user_birthday = $user->birthdate->format('d');
                                                                    $user_birthmonth = $user->birthdate->format('m');
                                                                    $user_birthyear = $user->birthdate->format('Y');
                                                                }
                                                            @endphp
                                                            <div class="col-4 px-0">
                                                                <select class="form-control py-0 px-1" name="day">
                                                                    <option selected="" disabled="">يوم</option>
                                                                    @for ($i = 1; $i <= 31; $i++)
                                                                        <option
                                                                            {{ $user_birthday == $i ? 'selected' : '' }}
                                                                            value="{{ $i }}">
                                                                            {{ $i }}
                                                                        </option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <select class="form-control py-0 px-1"
                                                                    style="border-left: none;border-right: none;"
                                                                    name="month">
                                                                    <option selected="" disabled="">شهر</option>
                                                                    @for ($i = 1; $i <= 12; $i++)
                                                                        <option
                                                                            {{ $user_birthmonth == $i ? 'selected' : '' }}
                                                                            value="{{ $i }}">
                                                                            {{ $i }}
                                                                        </option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                            <div class="col-4 px-0">
                                                                <select class="form-control py-0 px-1" name="year">
                                                                    <option selected="" disabled="">سنة</option>
                                                                    @for ($i = 2010; $i >= 1950; $i--)
                                                                        <option
                                                                            {{ $user_birthyear == $i ? 'selected' : '' }}
                                                                            value="{{ $i }}">
                                                                            {{ $i }}
                                                                        </option>
                                                                    @endfor
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4 mt-2">
                                                        <div class="col-12 text-left">
                                                            <button class="btn btn-primary font-1">حفظ التغييرات</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0 mt-2" style="position: relative;display: none;">
                                                    <div class="col-12 mt-3 ">
                                                    </div>
                                                    <div class="col-12 mt-2 text-center">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div x-show="!formType" class="col-12" style="padding:12px 5px">
                                            <div class="col-12 col-md-12 mb-4 py-4 row text-center row">
                                                <div class="col-12 col-md-6 mb-3">
                                                    <div class="col-12 font-1">
                                                        التخصص
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <select class=" col-12 font-1 form-control py-0 px-2"
                                                            name="category_id">
                                                            <option selected="" disabled=""></option>
                                                            @foreach ($categories as $category)
                                                                <option
                                                                    {{ $user->category_id == $category->id ? 'selected' : '' }}
                                                                    value="{{ $category->id }}">
                                                                    {{ $category->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6  mb-3">
                                                    <div class="col-12  kufi font-1 ">
                                                        المسمى الوظيفي
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <input type="text" name="job_name" class="form-control"
                                                            required="" minlength="3" maxlength="20"
                                                            value="{{ $user->job_name }}" id="job_title">
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
                                                        <textarea class="col-12 form-control" style="min-height: 250px" name="description">{{ $user->description }}</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-12 mb-3">
                                                    <div class="col-12 font-1">
                                                        المهارات الشخصية
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <select class="my-select col-12 px-0" multiple=""
                                                            name="skills[]"
                                                            style="height: 35px;border-color: #d0d0d0!important;">
                                                            @foreach ($skills as $skill)
                                                                <option
                                                                    {{ in_array($skill->id, $user->skills->pluck('id')->toArray()) ? 'selected' : '' }}
                                                                    value="{{ $skill->id }}">
                                                                    {{ $skill->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <script>
                                                        $(document).ready(function() {
                                                            $(".my-select").selectize({
                                                                plugins: ["remove_button"],
                                                                dataAttr: "data-extra",
                                                                searchField: ["tag_name", "arabic_name", "english_name", "slug", "value", "text", "id"],
                                                                maxItems: 25,
                                                                valueField: "id",
                                                                placeholder: ""
                                                            })
                                                        })
                                                    </script>
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
                        </template>

                        {{-- change password --}}
                        <template x-if="section == 'change-password'">
                            <form method="POST" action="/change-password" enctype="multipart/form-data"
                                id="profile-update-form">
                                @csrf
                                <div style="padding: 0px; min-height: 400px;"
                                    class="col-12 col-md-10 mx-auto row mt-0 mt-md-5 main-nafez-box-styles">
                                    <div class="col-12 px-0">
                                        <div class="col-12 px-0" style="border-bottom: 1px solid var(--bg-main-bg)">
                                            <nav class="navbar navbar-expand-lg px-0 py-0">
                                                <span class="navbar-brand" href="#"
                                                    style="padding: 12px 0px!important;color: var(--bg-color-0) ;font-size: 16px">
                                                    تغيير كلمة المرور
                                                </span>
                                            </nav>
                                        </div>

                                        <div class="col-12" style="padding:12px 5px">
                                            <div class="col-12 col-md-12 mb-4 py-4 row text-center row">
                                                <div class="col-12 col-md-9 mx-auto row">
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            كلمة المرور القديمة
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="password" name="old_password"
                                                                class="form-control" required="">
                                                            @error('old_password')
                                                                <label class="error">{{ $message }}</label>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            كلمة المرور الجديدة
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="password" name="new_password"
                                                                class="form-control" minlength="3" maxlenght="30"
                                                                required="">
                                                            @error('new_password')
                                                                <label class="error">{{ $message }}</label>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4">
                                                        <div class="col-12 font-1">
                                                            تأكيد كلمة المرور
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="password" name="new_password_confirmation"
                                                                class="form-control" minlength="3" maxlenght="30"
                                                                required="">
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-4 mt-2">
                                                        <div class="col-12 text-center">
                                                            <button class="btn btn-primary font-1">حفظ كلمة المرور</button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-0 mt-2" style="position: relative;display: none;">
                                                    <div class="col-12 mt-3 ">
                                                    </div>
                                                    <div class="col-12 mt-2 text-center">
                                                        <br>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </template>

                        {{-- services --}}
                        <template x-if="section == 'services'">
                            <div style="padding: 0px;" class="col-12 row mt-0 mt-md-5">
                                <div class="col-12 px-2">
                                    <div style="background: var(--bg-second-bg);" class="col-12 px-0">
                                        <div class="col-12 row px-0" style="border-bottom: 1px solid var(--bg-main-bg);">
                                            <div class="col-6 p-0">
                                                <h5 style="color: var(--bg-color-0);font-size: 17px;"
                                                    class="m-0 py-3 px-4 font-2 font-md-2 d-inline-block">معرض خدماتي</h5>
                                            </div>
                                            <div class="col-6 text-left px-2" dir="ltr" style="padding-top: 8px;">
                                                <a href="/services/create" class="d-inline-block ">
                                                    <span class="btn btn-primary cairo"
                                                        style=" padding: 5px 20px 9px;cursor: pointer;border:none;">إضافة
                                                        خدمة</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 row pb-5" style="padding:10px 0px;">
                                    @forelse ($user->services->sortByDesc('id') as $service)
                                        <div class="px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4">
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
                                    @empty
                                        <div class="col-12 px-2">
                                            <div class="row col-12 align-items-center"
                                                style="min-height: 50vh;margin: 0% 0px;background: var(--bg-second-bg)">
                                                <div class="row align-items-center">
                                                    <div class="col text-center">
                                                        <img src="https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-07-512.png"
                                                            width="120" style="opacity: .7;">
                                                        <div class="col-12 nafezly-alert font-1 mx-auto mt-3"
                                                            style="max-width:100%;width:500px;">
                                                            <h4 class="font-1 p-3 " style="line-height:1.8"> <span
                                                                    class="fal fa-lightbulb"></span> للمستقلين: تتيح لك
                                                                منصة
                                                                وسيط
                                                                إمكانية إضافة خدمات يمكنك تقديمها بمقابل تقوم بتحديده </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </template>

                        {{-- projects --}}
                        <template x-if="section == 'projects'">
                            <div style="padding: 0px;" class="col-12 row mt-0 mt-md-5 ">
                                <div class="col-12 px-2">
                                    <div style="background: var(--bg-second-bg);" class="col-12 px-0">
                                        <div class="col-12  row px-0"
                                            style="border-bottom: 1px solid var(--bg-main-bg);   ">
                                            <div class="col-6   p-0">
                                                <h5 style="color: ;font-size: 17px;"
                                                    class="m-0 py-3 px-4 font-2 font-md-2 cairo d-inline-block ">حقيبة
                                                    المشاريع
                                                </h5>
                                            </div>
                                            <div class="col-6 text-left px-2" dir="ltr" style="padding-top: 8px;">
                                                <a href="/projects/create" class="d-inline-block ">
                                                    <span class="btn btn-primary cairo"
                                                        style=" padding: 5px 20px 9px;cursor: pointer;border:none;">إضافة
                                                        مشروع</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 row pb-5 px-2" style="padding:10px 0px;">
                                    @forelse ($user->projects->sortByDesc('id') as $project)
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
                                                                    {{ $user->first_name . ' ' . $user->last_name }}
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
                                                            {{ $project->status }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 px-0">
                                            <div class="row col-12 align-items-center"
                                                style="min-height: 50vh;margin: 0% 0px;background: var(--bg-second-bg)">
                                                <div class="row align-items-center">
                                                    <div class="col text-center">
                                                        <img src="https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-07-512.png"
                                                            width="120" style="opacity: .7;">
                                                        <div class="col-12 nafezly-alert font-1 mx-auto mt-3"
                                                            style="max-width:100%;width:500px;">
                                                            <h4 class="font-1 p-3 " style="line-height:1.8"> <span
                                                                    class="fal fa-lightbulb"></span> لأصحاب المشاريع:
                                                                المشاريع
                                                                هي
                                                                المهام التي تحتاج أن ينجزها لك أحد المستقلين على وسيط </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                    {{-- <div class="col-12 pb-1 pt-2">
                                        {{ $projects->links('pagination-links') }}
                                    </div> --}}
                                </div>
                            </div>
                        </template>

                        {{-- offers --}}
                        <template x-if="section == 'offers'">
                            <div style="padding: 0px;" class="col-12 row mt-0 mt-md-5 ">
                                <div class="col-12 px-2">
                                    <div style="background: var(--bg-second-bg);" class="col-12 px-0">
                                        <div class="col-12  row px-0"
                                            style="border-bottom: 1px solid var(--bg-main-bg);   ">
                                            <div class="col-6   p-0">
                                                <h5 style="color: ;font-size: 17px;"
                                                    class="m-0 py-3 px-4 font-2 font-md-2 cairo d-inline-block ">
                                                    المشاريع المتقدم لها
                                                </h5>
                                            </div>
                                            <div class="col-6 text-left px-2" dir="ltr" style="padding-top: 8px;">
                                                <a href="/projects" class="d-inline-block ">
                                                    <span class="btn btn-primary cairo"
                                                        style=" padding: 5px 20px 9px;cursor: pointer;border:none;">
                                                        تصفح المشاريع
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 row pb-5 px-2" style="padding:10px 0px;">
                                    @forelse ($user->offers->sortByDesc('offers.created_at') as $offer)
                                        <div class="col-12 main-nafez-box-styles p-3 p-lg-4 mb-lg-3 mb-3 project-box"
                                            style="border-radius:5px;transition: 0.1s all ease-in-out;overflow: hidden;">
                                            <div class="col-12 p-0 row d-flex ">
                                                <div class="col-12 col-lg-9 p-0">
                                                    <h2 style="font-size:16px;height: 23px;"
                                                        class="d-block text-truncate overflow-hidden m-0">
                                                        <a href="/projects/{{ $offer->project->id }}"
                                                            style="color: var(--bg-color-3);"
                                                            class="text-truncate">{{ $offer->project->title }}</a>
                                                    </h2>
                                                    <div class="col-12 py-2 px-0">
                                                        <h3 class="naskh font-1 m-0 col-12 col-lg-10 px-0"
                                                            style="color:var(--bg-font-4);line-height: 1.8;overflow: hidden;height: 48px">
                                                            {{ $offer->project->description }}
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
                                                                    {{ $user->first_name . ' ' . $user->last_name }}
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
                                                            {{ number_format($offer->project->budget->from) . ' - ' . number_format($offer->project->budget->to) }}
                                                            ل.س
                                                        </span>
                                                    </div>
                                                    <div class="d-none d-lg-block px-1">
                                                        <span class="d-inline-block kufi "
                                                            style="font-size: 12px;color: #777777">
                                                            <span class="far fa-business-time " aria-hidden="true"
                                                                style="font-size: 12px;width:18px;text-align: center;"></span>
                                                            {{ $offer->project->expected_deadline }} أيام
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
                                                                $time = $offer->project->created_at->diffForHumans(Carbon\Carbon::now());
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
                                                            {{ $offer->project->status }}
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @empty
                                        <div class="col-12 px-0">
                                            <div class="row col-12 align-items-center"
                                                style="min-height: 50vh;margin: 0% 0px;background: var(--bg-second-bg)">
                                                <div class="row align-items-center">
                                                    <div class="col text-center">
                                                        <img src="https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-07-512.png"
                                                            width="120" style="opacity: .7;">
                                                        <div class="col-12 nafezly-alert font-1 mx-auto mt-3"
                                                            style="max-width:100%;width:500px;">
                                                            <h4 class="font-1 p-3 " style="line-height:1.8"> <span
                                                                    class="fal fa-lightbulb"></span>
                                                                للمستقلين: يتم هنا عرض المشاريع التي قمت بتقديم عرضك لها لتتابع حالة المشروع.
                                                            </h4>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforelse
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
