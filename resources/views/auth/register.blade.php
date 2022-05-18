@extends('layouts.app')

@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="container d-flex" style="min-height: 90vh">
            <div class="row my-auto  justify-content-center py-md-5">
                <div class="col-12 row px-0 d-flex justify-content-center">
                    <div class="col-12 col-lg-6 px-lg-2 px-0">
                        <div class="col-12 px-0">
                            <div class="card-body border-0  px-2   text-center main-nafez-box-styles" style="padding: 0px ">
                                <div class="col-12 px-0 row justify-content-center">
                                    <div class="col-10 px-0">
                                        <div class="col-12 pt-4">
                                            <h1 class="font-2">التسجيل</h1>
                                        </div>
                                        <form method="POST" action="{{ route('register') }}" class="row px-0"
                                            id="register-form">
                                            @csrf
                                            <div class="form-group row mb-4 col-6   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="firstname"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px; border-radius: 3px!important">الاسم
                                                        الاول</label>
                                                    <input id="firstname" type="text"
                                                        class="form-control mt-2 d-inline-block " name="first_name" value=""
                                                        required autocomplete="off" autofocus
                                                        style=";height: 42px;border-radius: 3px!important">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 col-6 px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="lastname"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px; border-radius: 3px!important">اسم
                                                        العائلة</label>
                                                    <input id="lastname" type="text"
                                                        class="form-control mt-2 d-inline-block " name="last_name" value=""
                                                        required autocomplete="off" autofocus
                                                        style=";height: 42px;border-radius: 3px!important">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="email"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px; border-radius: 3px!important">البريد
                                                        الالكتروني</label>
                                                    <input id="email" type="email" class="form-control mt-2 d-inline-block "
                                                        name="email" value="" required autocomplete="off" autofocus
                                                        style=";height: 42px;border-radius: 3px!important">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="password"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px;border-radius: 3px!important">كلمة
                                                        المرور</label>
                                                    <input id="password" type="password"
                                                        class="form-control mt-2 d-inline-block " name="password" value=""
                                                        required autocomplete="off" autofocus
                                                        style=";height: 42px;border-radius: 3px!important" minlength="6">
                                                </div>
                                            </div>
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-4" style="position: relative;">
                                                    <label for="password"
                                                        class="col-form-label text-md-right mb-1 font-small px-2 py-1 d-inline"
                                                        style="background:var(--bg-main-bg);position: absolute;top: 17px;right: 20px;border-radius: 3px!important">تاكيد
                                                        كلمة المرور </label>
                                                    <input id="password" type="password"
                                                        class="form-control mt-2 d-inline-block "
                                                        name="password_confirmation" value="" required autocomplete="off"
                                                        autofocus style=";height: 42px;border-radius: 3px!important"
                                                        minlength="6">
                                                </div>
                                            </div>
                                            <div class="col-12  pb-2 px-2">
                                                <input type="hidden" name="recaptcha" id="recaptcha">
                                            </div>
                                            <div class="form-group row mb-4 col-12   px-0 pt-2 ">
                                                <div class="col-md-12 px-2 pt-0 row" style="position: relative;">
                                                    <div class="col-12 px-0 pt-1 font-1" style="line-height:1.9">
                                                        بتسجيلك في منصة نفذلي فإنك توافق علي <a href="/terms">شروط
                                                            الاستخدام</a> و <a href="/privacy-policy">سياسة الخصوصية</a>
                                                    </div>
                                                    <div class="col-12 px-0 text-left pt-3">
                                                        <button type="submit"
                                                            class="btn btn-primary py-2 px-4 font-1 text-center"
                                                            style="border-radius: 3px">
                                                            إنشاء الحساب
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://www.google.com/recaptcha/api.js?render=6Lc1ELAZAAAAAEqL84DevF3OWMRLfzTwzsZdZATQ"></script>
        <script>
            grecaptcha.ready(function() {
                grecaptcha.execute('6Lc1ELAZAAAAAEqL84DevF3OWMRLfzTwzsZdZATQ', {
                    action: 'contact'
                }).then(function(token) {
                    if (token) {
                        document.getElementById('recaptcha').value = token;
                    }
                });
            });
        </script>
    </div>
@endsection
