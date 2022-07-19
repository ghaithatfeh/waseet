@extends('layouts.app')

@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
        </style>
        <div class="container d-flex" style="min-height: 90vh">
            <div class="row my-auto  justify-content-center ">
                <div class="col-12 row px-0 justify-content-center d-flex">
                    <div class="col-12 col-lg-6 px-lg-2 px-0">
                        <div class="col-12 px-0">
                            <div class="card-body  px-2   text-center border-0 main-nafez-box-styles" style="padding: 0px ">
                                <div class="col-12 px-0 row justify-content-center">
                                    <div class="col-10 px-0">
                                        <div class="col-12 px-0 row pt-4 mb-4">
                                        </div>
                                        @error('email')
                                            <div class="col-12">
                                                <div class="alert alert-danger font-1">
                                                    البريد الالكتروني او كلمة المرور خاطئيين، حاول مرة آخرى.
                                                </div>
                                            </div>
                                        @enderror
                                        <div class="col-12">
                                            <h1 class="font-2">تسجيل الدخول</h1>
                                        </div>
                                        <form method="POST" action="{{ route('login') }}" class="row px-0"
                                            id="login-form">
                                            @csrf
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="email"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px; border-radius: 3px!important">البريد
                                                        الالكتروني</label>
                                                    <input id="email" type="email"
                                                        class="form-control mt-2 d-inline-block form-control" name="email"
                                                        required autocomplete="off" autofocus
                                                        style=";height: 42px;border-color: #eaedf1;border-radius: 3px!important">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="password"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px;border-radius: 3px!important">كلمة
                                                        المرور</label>
                                                    <input id="password" type="password"
                                                        class="form-control mt-2 d-inline-block" name="password" required
                                                        autocomplete="off" autofocus
                                                        style=";height: 42px;border-color: #eaedf1;border-radius: 3px!important">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-0 row" style="position: relative;">
                                                    <div class="col-6 px-0 pt-1">
                                                        <div class="text-right d-inline-block px-0 "
                                                            style="min-width: 120px;direction: ltr;">
                                                            <label class="control control-checkbox">
                                                                <label class="cairo font-1" for="remember"
                                                                    style="cursor: pointer;">تذكرني </label>
                                                                <input name="remember" type="checkbox" id="remember" />
                                                                <div class="control_indicator"></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 px-0 text-left">
                                                        <button type="submit"
                                                            class="btn btn-primary   py-2 px-4 font-1 text-center"
                                                            style="border-radius: 3px">
                                                            تسجيل دخول
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-12 px-2">
                                                    <div class="col-12 text-center mt-3 px-0">
                                                        <div class="text-center mt-2 " style="margin: 0px auto;">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="nafezly-divider-right"></div>
                                <div class="col-12 px-4 py-2">
                                    <div class="col-12 px-0 mb-2">
                                        مساعدة
                                    </div>
                                    <ul style="list-style:none;" class="p-0">
                                        <li class=" d-block"><a href="{{ route('register') }}"
                                                class="naskh py-2 d-block"><span class="fas fa-circle font-small"
                                                    style="color:var(--bg-color-3);"></span> لا أملك حساب بعد</a></li>
                                        {{-- <li class="d-block"><a href="/password/reset"
                                                class="naskh py-2 d-block"><span class="fas fa-circle font-small"
                                                    style="color:var(--bg-color-3);"></span> نسيت كلمة المرور</a></li> --}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection