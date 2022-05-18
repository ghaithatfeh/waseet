@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
            .d-inline-block-text-left>div,
            .d-inline-block-text-left>span {
                display: inline-block !important;
                text-align: left !important;
            }

        </style>
        <div class="col-12 px-0">
            <div class="container  ">
                <div class="col-12 row px-0">
                    <div class="col-12   text-center content-area px-0 px-md-1">
                        <div class="col-12 row pt-0 px-0">
                            <div class="col-12 px-2 mt-2 py-4 mx-auto col-12 col-lg-8 px-lg-0  justify-content-between row">
                                <div class="col px-0 font-2 font-lg-4 pt-1">
                                    أضف خدمة جديدة
                                </div>
                            </div>
                            <div class="col-12 px-0 main-nafez-box-styles mx-auto col-12 col-lg-8">
                                <form action="/services" method="POST" class="col-12 px-0"
                                    id="service-form" enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 px-0 pb-2 row">
                                        <div class="col-12 mb-3 px-0 px-md-2">
                                            <div class="col-12  row px-0">
                                                <div class="col-12 row  mt-2 text-right px-0 " style=" ">
                                                    <div class="col-12   px-0 mt-2 px-0">
                                                        <div class="col-12 mt-3 font-1 ">
                                                            ماذا سوف تقدم في الخدمة
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <input type="" name="title" class="form-control" required=""
                                                                minlength="10" value="">
                                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                class="pt-1 naskh">أدخل عنواناً واضحاً باللغة العربية
                                                                يصف الخدمة التي تريد أن تقدمها. لا تدخل رموزاً أو كلمات مثل
                                                                "حصرياً"، "لأول مرة"، "لفترة محدود".. الخ. </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0 row">
                                                        <div class="col-12 px-0 mt-2 px-0">
                                                            <div class="col-12 mt-3 font-1">
                                                                القسم الرئيسي
                                                            </div>
                                                            <div class="col-12 mt-2">
                                                                <select class="form-control col-12" name="category_id"
                                                                    id="specializations" required="">
                                                                    <option selected=""></option>
                                                                    <option value="1">أعمال وخدمات استشارية وإدارية</option>
                                                                    <option value="2">برمجة، تطوير المواقع والتطبيقات
                                                                    </option>
                                                                    <option value="3">تصميم وأعمال فنية وإبداعية</option>
                                                                    <option value="4">تسويق الكتروني ومبيعات</option>
                                                                    <option value="5">كتابة، صناعة محتوى، ترجمة ولغات
                                                                    </option>
                                                                    <option value="6">تدريب، تعليم ومساعدة عن بعد</option>
                                                                    <option value="7">أمور أخرى</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0 mt-2 px-0">
                                                        <div class="col-12 mt-3 font-1">
                                                            تفاصيل الخدمة
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <textarea class="form-control" style="min-height: 208px;" name="description" required="" minlength="200"></textarea>
                                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                class="pt-1 naskh">أدخل وصف الخدمة بدقة يتضمن جميع
                                                                المعلومات والشروط . يمنع وضع البريد الالكتروني، رقم الهاتف
                                                                أو أي معلومات اتصال أخرى. </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <div class="col-12 row px-0">
                                                            <div class="col-12 mt-4 text-right px-0 " style=" ">
                                                                <div class="col-12 px-0 mt-2 px-0">
                                                                    <div class="col-12 mt-3 font-1 px-0 ">
                                                                        صورة الخدمة
                                                                    </div>
                                                                    <div class="col-12 mt-2 px-0">
                                                                        <div class="col-12 pb-3 mb-0 attach px-0"
                                                                            style="overflow: hidden">
                                                                            <div class="col-12 px-0"
                                                                                id="file-uploader-nafezly-main">
                                                                                <input name="images[]" type="file" multiple
                                                                                    class="form-control-file" />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0 mt-2 px-0">
                                                        <div class="col-12 mt-3 font-1">
                                                            مهارات متعلقة بالخدمة: <span style="color: #aaa"
                                                                class="font-small">(إختياري)</span>
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <select class="select2 col-12" multiple=""
                                                                name="skills[]" size="1" style="opacity: 0">
                                                                @foreach ($skills as $skill)
                                                                    <option value="{{ $skill->id }}">{{ $skill->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                class="naskh">حدد أهم المهارات التي تتعلق بالخدمة
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6 px-0 mt-2 px-0">
                                                        <div class="col-12 mt-3 font-1">
                                                            مدة إنجاز الخدمة:
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <select name="deadline" class="form-control font-1">
                                                                <option value="يوم واحد">يوم واحد</option>
                                                                <option value="يومين">يومين</option>
                                                                <option value="ثلاثة أيام">ثلاثة أيام</option>
                                                                <option value="أربعة أيام">أربعة أيام</option>
                                                                <option value="خمسة أيام">خمسة أيام</option>
                                                                <option value="ستة أيام">ستة أيام</option>
                                                                <option value="أسبوع">أسبوع</option>
                                                                <option value="أسبوعين">أسبوعين</option>
                                                                <option value="ثلاثة أسابيع">ثلاثة أسابيع</option>
                                                                <option value="شهر">شهر</option>
                                                            </select>
                                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                class="pt-1 naskh">حدد مدة تسليم مناسبة لك. يستطيع
                                                                المشتري إلغاء الخدمة مباشرة في حال التأخر بتسليم الخدمة في
                                                                الموعد المحدد. </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-lg-6   px-0 mt-2 px-0">
                                                        <div class="col-12 mt-3 font-1 ">
                                                            سعر خدمتك:
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <select class="form-control" name="price" required="">
                                                                <option value="10000"> 10,000 ل.س</option>
                                                                <option value="15000"> 15,000 ل.س</option>
                                                                <option value="20000"> 20,000 ل.س</option>
                                                                <option value="25000"> 25,000 ل.س</option>
                                                                <option value="30000"> 30,000 ل.س</option>
                                                                <option value="35000"> 35,000 ل.س</option>
                                                                <option value="40000"> 40,000 ل.س</option>
                                                                <option value="45000"> 45,000 ل.س</option>
                                                                <option value="50000"> 50,000 ل.س</option>
                                                                <option value="75000"> 75,000 ل.س</option>
                                                                <option value="100000"> 100,000 ل.س</option>
                                                                <option value="150000"> 150,000 ل.س</option>
                                                                <option value="200000"> 200,000 ل.س</option>
                                                                <option value="250000"> 250,000 ل.س</option>
                                                                <option value="500000"> 500,000 ل.س</option>
                                                            </select>
                                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                class="pt-1 naskh">حدد سعر مناسب لخدمتك. </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3 row">
                                                        <button class="btn btn-success" style="border-radius: 0px;"
                                                            id="submitEvaluation">أضف الخدمة</button>
                                                    </div>
                                                </div>
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
@stop
