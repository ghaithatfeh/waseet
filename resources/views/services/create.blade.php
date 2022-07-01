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
                                <form action="/services" method="POST" class="col-12 px-0" id="service-form"
                                    enctype="multipart/form-data">
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
                                                            <input type="" name="title" class="form-control"
                                                                required="" minlength="10" value="">
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
                                                                    <option value="1">أعمال وخدمات استشارية وإدارية
                                                                    </option>
                                                                    <option value="2">برمجة، تطوير المواقع والتطبيقات
                                                                    </option>
                                                                    <option value="3">تصميم وأعمال فنية وإبداعية
                                                                    </option>
                                                                    <option value="4">تسويق الكتروني ومبيعات</option>
                                                                    <option value="5">كتابة، صناعة محتوى، ترجمة ولغات
                                                                    </option>
                                                                    <option value="6">تدريب، تعليم ومساعدة عن بعد
                                                                    </option>
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
                                                                المعلومات والشروط .</div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <div class="col-12 row px-0">
                                                            <div class="col-12 mt-4 text-right px-0 " style=" ">
                                                                <div class="col-12 px-0 mt-2 px-0">
                                                                    <div class="col-12 mt-3 font-1 px-0 ">
                                                                        صور الخدمة
                                                                    </div>
                                                                    <div class="col-12 mt-2 px-0">
                                                                        <div class="col-12 attach px-0"
                                                                            style="overflow: hidden;">
                                                                            <div class="col-12 px-0"
                                                                                id="file-uploader-nafezly-main">
                                                                                <label id="images-label" for="images"
                                                                                    style="height: auto; padding: 9px 8px; cursor: pointer; border-width: 1px; color: #707070 !important; margin-bottom: -17px !important;"
                                                                                    class="form-control m-0">اختيار
                                                                                    الملفات</label>
                                                                                <input id="images" style="opacity: 0; height: 0"
                                                                                    name="images[]" type="file" multiple
                                                                                    class="form-control" required />
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <script>
                                                                        let input = document.getElementById("images");
                                                                        let imagesLabel = document.getElementById("images-label")

                                                                        input.addEventListener("change", () => {
                                                                            let inputImage = document.querySelector("input[type=file]").files;
                                                                            if (inputImage.length != 0) {
                                                                                imagesLabel.innerHTML = '';
                                                                                imagesLabel.style.color = '#fff';
                                                                                Object.values(inputImage).forEach(val => {
                                                                                    imagesLabel.innerHTML += val.name + '<br>';
                                                                                });
                                                                            } else {
                                                                                imagesLabel.innerHTML = 'اختيار الملفات';
                                                                                imagesLabel.style.color = '#707070';
                                                                            }
                                                                        })
                                                                    </script>
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
                                                            <select class="select2 col-12" multiple="" name="skills[]"
                                                                size="1" style="opacity: 0">
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
                                                        @php
                                                            $deadline = ['يوم واحد', 'يومين', 'ثلاثة أيام', 'أربعة أيام', 'خمسة أيام', 'ستة أيام', 'أسبوع', 'أسبوعين', 'ثلاثة أسابيع', 'شهر'];
                                                        @endphp
                                                        <div class="col-12 mt-2">
                                                            <select name="deadline" class="form-control font-1" required>
                                                                <option></option>
                                                                @foreach ($deadline as $d)
                                                                    <option value={{ $d }}>
                                                                        {{ $d }}
                                                                    </option>
                                                                @endforeach
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
                                                        @php
                                                            $prices = ['10000', '15000', '20000', '25000', '30000', '35000', '40000', '45000', '50000', '75000', '100000', '150000', '200000', '250000', '500000'];
                                                        @endphp
                                                        <div class="col-12 mt-2">
                                                            <select class="form-control" name="price" required="">
                                                                <option></option>
                                                                @foreach ($prices as $price)
                                                                    <option value="{{ $price }}">
                                                                        {{ number_format($price) }} ل.س</option>
                                                                @endforeach
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
@section('script')
    <script>
        $("#service-form").validate({});
    </script>
@endsection
@endsection
