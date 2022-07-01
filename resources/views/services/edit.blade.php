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
                                    تعديل الخدمة: {{ $service->title }}
                                </div>
                            </div>
                            <div class="col-12 px-0 main-nafez-box-styles mx-auto col-12 col-lg-8">
                                <form action="/services/{{ $service->id }}" method="POST" class="col-12 px-0"
                                    id="service-form" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
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
                                                                required="" minlength="10"
                                                                value="{{ $service->title ?? '' }}">
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
                                                                    @foreach ($categories as $category)
                                                                        <option value="{{ $category->id }}"
                                                                            {{ $service->category->id == $category->id ? 'selected' : '' }}>
                                                                            {{ $category->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                    class="naskh">
                                                                    حدد الصنف الذي تتبع له خدمتك.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 px-0 mt-2 px-0">
                                                        <div class="col-12 mt-3 font-1">
                                                            تفاصيل الخدمة
                                                        </div>
                                                        <div class="col-12 mt-2">
                                                            <textarea class="form-control" style="min-height: 208px;" name="description" required="" minlength="200">{{ $service->description ?? '' }}</textarea>
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
                                                                                    style="height: auto; padding: 9px 8px; cursor: pointer; border-width: 1px; color: #707070 !important;{{ $service->images->count() == 0 ? 'margin-bottom: -17px !important;' : '' }}"
                                                                                    class="form-control m-0">اختيار
                                                                                    الملفات</label>
                                                                                <input id="images"
                                                                                    style="{{ $service->images->count() == 0 ? 'opacity: 0;' : 'display:none;' }} height: 0"
                                                                                    name="images[]" type="file" multiple
                                                                                    class="form-control" required />
                                                                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                                        class="naskh mt-1">
                                                                                        اختر الصور المناسبة لابراز خدمتك بشكل مميز.
                                                                                    </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-12 row align-items-end">
                                                                            @foreach ($service->images as $image)
                                                                                <div class="d-flex flex-column col-3 mt-3">
                                                                                    <img class="img-fluid rounded-top"
                                                                                        src="{{ asset('uploaded_images/services/' . $image->image_name) }}"
                                                                                        alt="">
                                                                                    <button href="" type="button"
                                                                                        id="{{ $image->id }}"
                                                                                        class="delete-btn btn btn-danger text-center m-0 py-1"
                                                                                        style="border-radius: 0 0 3px 3px !important; font-size: .8rem">
                                                                                        <i class="fa fa-trash"></i>
                                                                                        حذف</button>
                                                                                </div>
                                                                            @endforeach
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
                                                                    <option
                                                                        {{ in_array($skill->id, $service->skills->pluck('id')->toArray()) ? 'selected' : '' }}
                                                                        value="{{ $skill->id }}">
                                                                        {{ $skill->name }}
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
                                                            <select name="deadline" class="form-control font-1">
                                                                @foreach ($deadline as $d)
                                                                    <option value={{ $d }}
                                                                        {{ $d == $service->deadline ? 'selected' : '' }}>
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
                                                                @foreach ($prices as $price)
                                                                    <option value="{{ $price }}"
                                                                        {{ $price == $service->price ? 'selected' : '' }}>
                                                                        {{ number_format($price) }} ل.س</option>
                                                                @endforeach
                                                            </select>
                                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                                class="pt-1 naskh">حدد سعر مناسب لخدمتك. </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mt-3 row">
                                                        <button class="btn btn-success" style="border-radius: 0px;"
                                                            id="submitEvaluation">حفظ التعديل</button>
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
@endsection


@section('script')
    <script>
        $("#service-form").validate({});

        $('.delete-btn').on('click', function() {

            let image = $(this).attr('id');
            Swal.fire({
                title: "هل انت متأكد من حذف صورة الخدمة ؟",
                icon: "warning",
                showCancelButton: !0,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "حذف",
                cancelButtonText: "إلغاء"
            }).then((result) => {
                if (result.isConfirmed)
                    $.ajax({
                        method: "delete",
                        context: $(this),
                        url: "/services/delete-image/" + image,
                        success: function(response) {
                            if (response) {
                                this.parent().remove()
                                Swal.fire({
                                    title: 'تم الحذف!',
                                    text: 'تم حذف صورة الخدمة.',
                                    icon: 'success',
                                    confirmButtonText: 'حسناً'
                                })
                            }
                        }
                    });
            })
        })
    </script>
@endsection
