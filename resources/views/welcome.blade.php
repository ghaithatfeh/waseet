@extends('layouts.app')
@section('content')
    <div class="col-12 px-0" id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 "
            style="padding: 0px;
                                                background-size: cover!important;
                                                background-position: center!important;
                                                background-repeat: no-repeat!important;
                                                background-image: url('{{ asset('site_images/background3.webp') }}')!important">
            <div style="overflow-x: hidden;margin-top: -60px;" class="col-12 px-0">
                <div class="container     d-flex" style="min-height: 60vh;">
                    <div class="col-12 row my-auto px-0">
                        <div class=" col-12 pt-6 d-flex h-100 px-0">
                            <div class="col-12 text-center  pt-2 px-0 px-md-2 " style="">
                                <div style="color: #fbfbfb;line-height: 1.5" class="text-center  pt-1 ">
                                    <h1 style="color: #fbfbfb; border-radius: 6px;line-height: 1.9;font-size: 17px"
                                        class="px-2 pt-0 text-center  font-md-3 font-lg-5">أنجز مشاريعك عبر
                                        الإنترنت بسهولة وأمان</h1>
                                    <h2 style="color: #fbfbfb; border-radius: 6px;line-height: 1.9;font-size: 15px"
                                        class="px-3 pb-3 mb-2  text-center font-md-2 font-lg-3">وظّف مستقلين
                                        محترفين لإنجاز أعمالك</h2>
                                    <form method="GET" action="/project/create-guest">
                                        <div class="col-12  row mx-auto " style="width: 800px;max-width: 100%;">
                                            <input type="text" name="title" class="form-control border-0"
                                                style="max-width:100%;border-radius: 5px;padding: 26px!important;border:none!important;"
                                                placeholder="أدخل عنوان المشروع الذي تريد تنفيذه..." maxlength="250">
                                            <button class="btn btn-primary text-center d-md-inline-block d-none"
                                                style="width: 150px;border-radius: 5px;color: #fff;position: absolute;top: 4px; left: 19px;height: 44px;"><span
                                                    class="fal fa-paper-plane"></span> أضف مشروعك</button>
                                        </div>
                                        <div class="col-12 px-0 row mx-auto mt-3 pt-1 "
                                            style="width: 800px;max-width: 100%;">
                                            <button class="btn btn-primary text-center mx-auto d-inline-block d-md-none"
                                                style="width: 150px;border-radius: 0px;color: #fff;height: 44px;border-radius: 5px;"><span
                                                    class="fal fa-paper-plane"></span> أضف مشروعك</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-md-0 pt-3 force-dark   " style="background: #fff" id="how-it-works">
            <div class="container py-md-5 py-3">
                <div class="col-12 px-0 py-4 row">
                    <h2 class="text-center kufi  pb-0 col-12 font-3 font-md-4" style="color:var(--bg-color-0);">
                        كيف يعمل</h2>
                    <div class="col-12 mt-2 pt-4 row px-0">
                        <div class="col-12 mb-4 row px-0">
                            <div class="col-12 col-md-6 px-0 order-2 order-md-1">
                                <div class="col-12 mb-md-2 px-0 ">
                                    <div class="col-12">
                                        <div class="col-12 text-center  px-0 ">
                                            <div
                                                class="col-12  text-right   font-2 font-md-3 pt-3 px-0 home-specialization-header">
                                                <span class="fas fa-check-circle " style="color: #03a9f4"></span> أضف
                                                المشروع
                                            </div>
                                            <div class="col-12 px-0" style="min-height: 67px">
                                                <div class="col-12 pt-2 px-0">
                                                    <p class="text-right   font-1 mb-md-1" style="color: #666">
                                                        أضف تفاصيل مشروعك والمهارات المطلوبة لإنجازه وابدأ
                                                        باستقبال عروض المستقلين عليه.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-md-2 px-0 ">
                                    <div class="col-12">
                                        <div class="col-12 text-center  px-0 ">
                                            <div
                                                class="col-12  text-right   font-2 font-md-3 pt-3 px-0 home-specialization-header">
                                                <span class="fas fa-check-circle " style="color: #03a9f4"></span> اختر العرض
                                                المناسب
                                            </div>
                                            <div class="col-12 px-0" style="min-height: 67px">
                                                <div class="col-12 pt-2 px-0">
                                                    <p class="text-right   font-1 mb-md-1" style="color: #666">
                                                        من بين العروض المقدمة لمشروعك، اختر العرض المناسب
                                                        لمتطلبات المشروع ثم ابدأ مباشرة مرحلة التنفيذ.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mb-md-2 px-0 ">
                                    <div class="col-12">
                                        <div class="col-12 text-center  px-0 ">
                                            <div
                                                class="col-12  text-right   font-2 font-md-3 pt-3 px-0 home-specialization-header">
                                                <span class="fas fa-check-circle " style="color: #03a9f4"></span> استلم
                                                المشروع
                                            </div>
                                            <div class="col-12 px-0" style="min-height: 67px">
                                                <div class="col-12 pt-2 px-0">
                                                    <p class="text-right   font-1 mb-md-1" style="color: #666">
                                                        سيعمل المستقل الذي اخترته معك حتى انتهاء العمل
                                                        وتسليم مشروعك بشكل كامل كما أردته.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="col-12 col-md-6 px-md-2 font-2 font-md-3 pt-0  pt-0 mt-md-2 mt-4 order-1 order-md-2">
                                <div
                                    style="    padding-bottom: 56.25%;    position: relative;
                                                    display: block; overflow: hidden;">
                                    <iframe
                                        style="position: absolute;
                                                top: 0;
                                                left: 0;
                                                bottom: 0;
                                                height: 100%;
                                                width: 100%;
                                                border: 0; "
                                        {{-- src="https://www.youtube.com/embed/JLGS4fP3DLM?controls=1&rel=0&showinfo=0&color=white" --}} allowfullscreen id="nafezly-video">
                                    </iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 pt-md-0 pt-3 force-dark   " style="background: #f5f5f5">
            <div class="container pt-5 pb-5">
                <div class="col-12 px-0 py-4 row">
                    <h2 class="text-center kufi  pb-0 col-12 font-3 font-md-4" style="color:var(--bg-color-0);">
                        لماذا وسيط</h2>
                    <div class="col-12 mt-2 pt-4 row px-0">
                        <div class="col-12 mb-4 row px-0">
                            <div class="col-6  col-lg-4 mb-4 px-1">
                                <div class="col-12 px-1 px-md-3">
                                    <div class="col-12 text-center py-md-5 py-3 px-0">
                                        <span class="fad fa-briefcase font-6 font-md-9" style="color: #4caf50"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            نفّذ مشاريعك بسهولة
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class="col-12 pt-2 px-0">
                                                <p class="text-center  font-1" style="color: #666">
                                                    أطرح مشروعك واترك مهمّة تنفيذه لأفضل خبراء الوطن العربي
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6  col-lg-4 mb-4 px-1">
                                <div class="col-12 px-1 px-md-3">
                                    <div class="col-12 text-center py-md-5 py-3 px-0">
                                        <span class="fad fa-paper-plane font-6 font-md-9" style="color: #03a9f4"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            وظّف <span class="d-none d-md-inline">مبدعين</span> بشكل سريع
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class="col-12 pt-2 px-0">
                                                <p class="text-center  font-1" style="color: #666">
                                                    إختر المبدع الذي تراه مناسباً وقم بتوظيفه مباشرةً
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6  col-lg-4 mb-4 px-1">
                                <div class="col-12 px-1 px-md-3">
                                    <div class="col-12 text-center py-md-5 py-3 px-0">
                                        <span class="fad fa-credit-card font-6 font-md-9" style="color: #ff9800"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            وسيط مجاني بالكامل
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class="col-12 pt-2 px-0">
                                                <p class="text-center  font-1" style="color: #666">
                                                    لا تدفع إلا المبلغ الذي يكلفه مشروعك بدون اي زوائد او نسب ربحية عليه
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6  col-lg-4 mb-4 px-1">
                                <div class="col-12 px-1 px-md-3">
                                    <div class="col-12 text-center py-md-5 py-3 px-0">
                                        <span class="fad fa-users font-6 font-md-9" style="color: #9b59b6"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            ابن فريق عمل مُتكامل
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class="col-12 pt-2 px-0">
                                                <p class="text-center  font-1" style="color: #666">
                                                    خبراء في مُختلف المجالات ومن مُختلف البلدان جاهزون
                                                    لخدمتك عبر وسيط
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6  col-lg-4 mb-4 px-1">
                                <div class="col-12 px-1 px-md-3">
                                    <div class="col-12 text-center py-md-5 py-3 px-0">
                                        <span class="fad fa-user-tie font-6 font-md-9" style="color: #607d8b"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            وظف الأفضل والأنسب لك
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class="col-12 pt-2 px-0">
                                                <p class="text-center  font-1" style="color: #666">
                                                    تصفح المبدعين و اطلع على ملفاتهم الشخصية ووظف مار تراه
                                                    مناسباً للوظيفة
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6  col-lg-4 mb-4 px-1">
                                <div class="col-12 px-1 px-md-3">
                                    <div class="col-12 text-center py-md-5 py-3 px-0">
                                        <span class="fad fa-sack font-6 font-md-9" style="color: #009688"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            نفذ مشاريعك بأقل تكلفة
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class="col-12 pt-2 px-0">
                                                <p class="text-center  font-1" style="color: #666">
                                                    وظّف أفضل الخبرات حسبما يتناسب مع ميزانيتك.
                                                </p>
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
        <div class="col-12 pt-md-0 pt-3 force-dark   " style="background: #fff">
            <div class="container pt-5 pb-5">
                <div class="col-12 px-0 py-4 row">
                    <h2 class="text-center kufi  pb-0 col-12 font-3 font-md-4" style="color:var(--bg-color-0);">
                        مجالات الاختصاص </h2>
                    <div class="col-12 mt-2 pt-4 row px-0">
                        <div class="col-12 mb-4 row px-0">
                            <div class="col-6 col-md-6 col-lg-4 mb-md-4 mb-2 px-1">
                                <div class="col-12 home-specialization px-1 px-md-3" style="border-radius: 5px">
                                    <div class="col-12 text-center py-5 px-0">
                                        <span class="fad fa-paint-brush-alt font-5 font-md-9"
                                            style="color: #f44336"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            تصميم و أعمال
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class=" pt-2 px-0 specialization-btns justify-content-center row pt-4"
                                                style="position: absolute;">
                                                <a href="/freelancers?specialize=3">
                                                    <span class="btn btn-primary mx-1 btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px;">منفذين</span>
                                                </a>
                                                <a href="/portfolios?specialize=3">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">أعمال</span>
                                                </a>
                                                <a
                                                    href="/services?specialize=3">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">خدمات</span>
                                                </a>
                                            </div>
                                            <div class="col-12 pt-2 px-0 specialization-details">
                                                <p class="text-center  font-1" style="color: #666">
                                                    التصميم الجرافيكي ، الهندسة الداخلية والتخطيط <br>
                                                    وتصميم الموشن جرافيك
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4 mb-md-4 mb-2 px-1">
                                <div class="col-12 home-specialization px-1 px-md-3" style="border-radius: 5px">
                                    <div class="col-12 text-center py-5 px-0">
                                        <span class="fad fa-language font-5 font-md-9" style="color: #4caf50"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            ترجمة و لغات
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class=" pt-2 px-0 specialization-btns justify-content-center row pt-4"
                                                style="position: absolute;">
                                                <a href="/freelancers?specialize=5">
                                                    <span class="btn btn-primary mx-1 btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px;">منفذين</span>
                                                </a>
                                                <a href="/portfolios?specialize=5">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">أعمال</span>
                                                </a>
                                                <a
                                                    href="/services?specialize=5">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">خدمات</span>
                                                </a>
                                            </div>
                                            <div class="col-12 pt-2 px-0 specialization-details">
                                                <p class="text-center  font-1" style="color: #666">
                                                    الترجمة القانونية ، الترجمة العامة ، والترجمة التقنية
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4 mb-md-4 mb-2 px-1">
                                <div class="col-12 home-specialization px-1 px-md-3" style="border-radius: 5px">
                                    <div class="col-12 text-center py-5 px-0">
                                        <span class="fad fa-code font-5 font-md-9" style="color: #ff9800"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            برمجة و تطوير
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class=" pt-2 px-0 specialization-btns justify-content-center row pt-4"
                                                style="position: absolute;">
                                                <a href="/freelancers?specialize=2">
                                                    <span class="btn btn-primary mx-1 btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px;">منفذين</span>
                                                </a>
                                                <a href="/portfolios?specialize=2">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">أعمال</span>
                                                </a>
                                                <a
                                                    href="/services?specialize=2">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">خدمات</span>
                                                </a>
                                            </div>
                                            <div class="col-12 pt-2 px-0 specialization-details">
                                                <p class="text-center  font-1" style="color: #666">
                                                    تطوير البرامج ,البرمجة والدعم وتطوير التطبيقات
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4 mb-md-4 mb-2 px-1">
                                <div class="col-12 home-specialization px-1 px-md-3" style="border-radius: 5px">
                                    <div class="col-12 text-center py-5 px-0">
                                        <span class="fad fa-pen-alt font-5 font-md-9" style="color: #2196f3"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            الكتابة و التحرير
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class=" pt-2 px-0 specialization-btns justify-content-center row pt-4"
                                                style="position: absolute;">
                                                <a href="/freelancers?specialize=5">
                                                    <span class="btn btn-primary mx-1 btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px;">منفذين</span>
                                                </a>
                                                <a href="/portfolios?specialize=5">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">أعمال</span>
                                                </a>
                                                <a
                                                    href="/services?specialize=5">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">خدمات</span>
                                                </a>
                                            </div>
                                            <div class="col-12 pt-2 px-0 specialization-details">
                                                <p class="text-center  font-1" style="color: #666">
                                                    كتابة المحتوى ، البحوث والتقارير، التحرير والتدقيق
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4 mb-md-4 mb-2 px-1">
                                <div class="col-12 home-specialization px-1 px-md-3" style="border-radius: 5px">
                                    <div class="col-12 text-center py-5 px-0">
                                        <span class="fad fa-lightbulb-on font-5 font-md-9" style="color: #ffc107"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            التسويق و المبيعات
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class=" pt-2 px-0 specialization-btns justify-content-center row pt-4"
                                                style="position: absolute;">
                                                <a href="/freelancers?specialize=4">
                                                    <span class="btn btn-primary mx-1 btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px;">منفذين</span>
                                                </a>
                                                <a href="/portfolios?specialize=4">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">أعمال</span>
                                                </a>
                                                <a
                                                    href="/services?specialize=4">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">خدمات</span>
                                                </a>
                                            </div>
                                            <div class="col-12 pt-2 px-0 specialization-details">
                                                <p class="text-center  font-1" style="color: #666">
                                                    التسويق الالكتروني ، حملات التواصل الإجتماعي ،
                                                    واستراتيجيات التسعير
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6 col-md-6 col-lg-4 mb-md-4 mb-2 px-1">
                                <div class="col-12 home-specialization px-1 px-md-3" style="border-radius: 5px">
                                    <div class="col-12 text-center py-5 px-0">
                                        <span class="fad fa-comments-alt font-5 font-md-9" style="color: #333"></span>
                                        <div
                                            class="col-12  text-center font-1 font-md-3 pt-3 px-0 home-specialization-header">
                                            الاستشارات و التدريب
                                        </div>
                                        <div class="col-12 px-0" style="min-height: 67px">
                                            <div class=" pt-2 px-0 specialization-btns justify-content-center row pt-4"
                                                style="position: absolute;">
                                                <a href="/freelancers?specialize=6">
                                                    <span class="btn btn-primary mx-1 btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px;">منفذين</span>
                                                </a>
                                                <a href="/portfolios?specialize=6">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">أعمال</span>
                                                </a>
                                                <a
                                                    href="/services?specialize=6">
                                                    <span
                                                        class="btn btn-primary mx-1  btn-sm font-1  text-center mb-2 px-0"
                                                        style="border-radius: 2px;padding: 6px 16px;cursor: pointer;width: 80px">خدمات</span>
                                                </a>
                                            </div>
                                            <div class="col-12 pt-2 px-0 specialization-details">
                                                <p class="text-center  font-1" style="color: #666">
                                                    تقديم نصائح و استشارات , تجارب و مراجعات و مشاركة
                                                    الخبرات
                                                </p>
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
        <div class="col-12 pt-md-0 pt-3 force-dark" style="background: #f5f5f5">
            <div class="container pt-5 pb-5">
                <div class="col-12 px-0 py-4 row">
                    <h2 class="text-center kufi  pb-0 col-12 font-3 font-md-4" style="color:var(--bg-color-0);">
                        الأسئلة الشائعة </h2>
                    <div class="col-12 mt-2 pt-4 row px-0">
                        <div class="col-12 mb-4 row px-0">
                            <div class="col-12 row d-flex px-0">
                                <div class="col-12 px-0">
                                    <div class="card border-0 mb-2">
                                        <div class="card-header border-0 btn py-2" id="headingOne"
                                            style="background: var(--bg-second-bg)">
                                            <h5 class="mb-0">
                                                <span
                                                    class="btn-link row d-flex col-12 color-333 kufi collapsed font-lg-2 font-1 py-2"
                                                    type="button" data-toggle="collapse" data-target="#s100"
                                                    aria-expanded="true" aria-controls="s100"
                                                    style="color: var(--bg-color-0)!important">
                                                    <div class="col px-0">
                                                        ما هي منصة وسيط ؟
                                                    </div>
                                                    <div class="col-1 text-left px-0">
                                                        <span class="fas fa-angle-down font-3"></span>
                                                    </div>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="s100" class="collapse" aria-labelledby="headingOne">
                                            <div class="card-body naskh border-top border-0">
                                                منصة وسيط هي منصة عربية تساعدك في الوصول إلى أفضل المستقلين
                                                المحترفين للتعاقد معهم للقيام بأعمالك ومشاريعك عبر الانترنت
                                                ، كذا تمكن المبدعين من إيجاد مكان للعمل وتحقيق دخل .
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="card border-0 mb-2">
                                        <div class="card-header border-0 btn py-2" id="headingOne"
                                            style="background: var(--bg-second-bg)">
                                            <h5 class="mb-0">
                                                <span
                                                    class="btn-link row d-flex col-12 color-333 kufi collapsed font-lg-2 font-1 py-2"
                                                    type="button" data-toggle="collapse" data-target="#s101"
                                                    aria-expanded="true" aria-controls="s101"
                                                    style="color: var(--bg-color-0)!important">
                                                    <div class="col px-0">
                                                        كيف يمكنني الاستفادة من وسيط ؟
                                                    </div>
                                                    <div class="col-1 text-left px-0">
                                                        <span class="fas fa-angle-down font-3"></span>
                                                    </div>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="s101" class="collapse" aria-labelledby="headingOne">
                                            <div class="card-body naskh border-top border-0">
                                                في منصة وسيط تستطيع نشر مشروعك كإنشاء موقع ويب أو تطبيق
                                                جوال أو حتى تصميم شعار وغيرها الكثير من التخصصات التي
                                                تحتاجها ، فتبدأ في تلقي عروض من المستقلين المحترفين المهتمين
                                                بالعمل على مشروعك لتقارن بين العروض وتختار أفضلها، ثم تقوم
                                                بتوظيف المستقل صاحب أفضل عرض وتتولى المتابعة معه حتى إتمام
                                                تنفيذ مشروعك، كما يمكنك البحث بنفسك عن أفضل المستقلين وتعرض
                                                عليهم مشروعك بشكل مباشر للعمل عليه ، توفر لك بيئة العمل
                                                للتعامل بشكل آمن وسريع مع كافة المستقلين
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="col-12 px-0">
                                    <div class="card border-0 mb-2">
                                        <div class="card-header border-0 btn py-2" id="headingOne"
                                            style="background: var(--bg-second-bg)">
                                            <h5 class="mb-0">
                                                <span
                                                    class="btn-link row d-flex col-12 color-333 kufi collapsed font-lg-2 font-1 py-2"
                                                    type="button" data-toggle="collapse" data-target="#s102"
                                                    aria-expanded="true" aria-controls="s102"
                                                    style="color: var(--bg-color-0)!important">
                                                    <div class="col px-0">
                                                        كيف تضمن منصة وسيط حقوقي ؟
                                                    </div>
                                                    <div class="col-1 text-left px-0">
                                                        <span class="fas fa-angle-down font-3"></span>
                                                    </div>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="s102" class="collapse" aria-labelledby="headingOne">
                                            <div class="card-body naskh border-top border-0">
                                                منصة وسيط تضمن لك حقك المالي بشكل كامل فلا داع ﻷي قلق، كن
                                                مطمئنا عند إنشاء أي مشاريع جديدة أو شراء خدمات كذلك تقديم
                                                عروض على المشاريع المعروضة في الموقع أو بيع خدمات ، حيث تقوم
                                                منصة وسيط بدور الوسيط بين صاحب المشروع أو مشتري الخدمة وبين
                                                المستقل أو بائع الخدمة وتحمي حقوق الطرفين المالية في حال
                                                الالتزام بشروط المنصة وبنود الضمان وتوضيح الاتفاق تماماً .
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                                <div class="col-12 px-0">
                                    <div class="card border-0 mb-2">
                                        <div class="card-header border-0 btn py-2" id="headingOne"
                                            style="background: var(--bg-second-bg)">
                                            <h5 class="mb-0">
                                                <span
                                                    class="btn-link row d-flex col-12 color-333 kufi collapsed font-lg-2 font-1 py-2"
                                                    type="button" data-toggle="collapse" data-target="#s103"
                                                    aria-expanded="true" aria-controls="s103"
                                                    style="color: var(--bg-color-0)!important">
                                                    <div class="col px-0">
                                                        ما هي المجالات التي يمكنني توظيف مستقلين فيها على
                                                        وسيط ؟
                                                    </div>
                                                    <div class="col-1 text-left px-0">
                                                        <span class="fas fa-angle-down font-3"></span>
                                                    </div>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="s103" class="collapse" aria-labelledby="headingOne">
                                            <div class="card-body naskh border-top border-0">
                                                تلجأ الشركات إلى توظيف العاملين عن بُعد في مختلف التخصصات،
                                                منها على سبيل المثال لا الحصر العاملين في مجال البرمجة،
                                                وتحرير النصوص، والتسويق الإلكتروني، والتصميم والإعلانات،
                                                والترجمة،وادخال البيانات، وكتابة المقالات، وبعض أعمال
                                                العلاقات العامة عبر الإنترنت، وتصميم المواقع الإلكترونية
                                                وإدارة المواقع الإلكترونية، والدراسات والتحاليل السوقية
                                                وغيرها من التخصصات التي تحتاجها .
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="card border-0 mb-2">
                                        <div class="card-header border-0 btn py-2" id="headingOne"
                                            style="background: var(--bg-second-bg)">
                                            <h5 class="mb-0">
                                                <span
                                                    class="btn-link row d-flex col-12 color-333 kufi collapsed font-lg-2 font-1 py-2"
                                                    type="button" data-toggle="collapse" data-target="#s104"
                                                    aria-expanded="true" aria-controls="s104"
                                                    style="color: var(--bg-color-0)!important">
                                                    <div class="col px-0">
                                                        لماذا التوظيف عبر وسيط هو الأفضل بالنسبة لي ؟
                                                    </div>
                                                    <div class="col-1 text-left px-0">
                                                        <span class="fas fa-angle-down font-3"></span>
                                                    </div>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="s104" class="collapse" aria-labelledby="headingOne">
                                            <div class="card-body naskh border-top border-0">
                                                مؤخراً انتشرت فكرة التوظيف عد بعد - خصوصاً بعد جائحة فيروس
                                                كورونا COVID-19 - حيث تلجأ الشركات والأفراد من انجاز
                                                مشاريعها عن بعد دون التقيد بأي حدود جغرافية ، لذلك فيمكنك
                                                الوصول إلى أفضل المستقلين المحترفين من جميع أنحاء العالم دون
                                                التقيد بزمان أو مكان محدد للعمل ، ومن هنا تزيد الانتاجية ،
                                                وكذلك ينخفض جزءً كبير من التكاليف وتوفر لك راحة نفسية وجسدية
                                                أثناء العمل
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0">
                                    <div class="card border-0 mb-2">
                                        <div class="card-header border-0 btn py-2" id="headingOne"
                                            style="background: var(--bg-second-bg)">
                                            <h5 class="mb-0">
                                                <span
                                                    class="btn-link row d-flex col-12 color-333 kufi collapsed font-lg-2 font-1 py-2"
                                                    type="button" data-toggle="collapse" data-target="#s105"
                                                    aria-expanded="true" aria-controls="s105"
                                                    style="color: var(--bg-color-0)!important">
                                                    <div class="col px-0">
                                                        ماذا سيحدث بعد نشر مشروعي على وسيط ؟
                                                    </div>
                                                    <div class="col-1 text-left px-0">
                                                        <span class="fas fa-angle-down font-3"></span>
                                                    </div>
                                                </span>
                                            </h5>
                                        </div>
                                        <div id="s105" class="collapse" aria-labelledby="headingOne">
                                            <div class="card-body naskh border-top border-0">
                                                بعد نشر مشروعك، سيبقى معلقًا بانتظار المراجعة من قبل الدعم
                                                الفني الخاص بوسيط . وبعدها إمّا تتم الموافقة عليه فيصلك
                                                إشعار بالموافقة ثم يظهر المشروع لجميع المستقلين للتقدم
                                                بعروضهم عليه، أو يتم رفضه مع ذكر الأسباب التي أدت لذلك لكي
                                                تقوم بتعديله وإرساله من جديد للمراجعة والقبول.
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
        <div class="col-12    px-0" style="background: var(--bg-color-3)">
            <div class="container  py-5 px-0">
                <div class="col-12 px-0 py-5  text-center ">
                    <div class="col-12 text-center">
                        <h2 class="text-center font-2 font-md-3 font-lg-4" style="color: #fff;line-height: 1.4">هل أنت
                            جاهز
                            لبدء مشروعك الخاص ؟</h2>
                        <br>
                    </div>
                    <a href="/projects" class="d-inline-block">
                        <button class="btn text-center mx-auto d-inline-block  px-3 py-2"
                            style="width: 150px;border-radius: 0px;color: #fff; background: #fff;color: var(--bg-color-3);">
                            ابدأ الآن</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

@stop
