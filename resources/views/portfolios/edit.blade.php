@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 px-0 pb-5">
            <div class="container pt-2  pb-5">
                <div class="col-12 row px-0">
                    <div class="col-12 px-2 mt-2 py-4 mx-auto col-12 px-lg-0  justify-content-between row">
                        <div class="col px-0 font-2 font-lg-4 pt-1">
                            تعديل العمل: {{ $portfolio->title }}
                        </div>
                        <div class="col px-0 text-left d-lg-none">
                            <a href="https://www.youtube.com/watch?v=-wjFfII5UbA" class="btn hover-darker d-inline-block"
                                style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3)"
                                target="_blank">
                                <span class="far fa-play" style="font-size: 13px;color: var(--bg-color-3)"></span> نصائح
                                إضافة العمل
                            </a>
                        </div>
                    </div>
                    <div class="px-0 main-nafez-box-styles  col-12 col-lg-8">
                        <form action="/portfolios/{{ $portfolio->id }}" method="POST" class="col-12 px-0 row"
                            id="portfolio-form" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-12   px-0 mt-2 px-0">
                                <div class="col-12 mt-3 font-1 ">
                                    عنوان العمل
                                </div>
                                <div class="col-12 mt-2">
                                    <input type="" name="title" class="form-control" required="" minlength="10"
                                        value="{{ $portfolio->title }}">
                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="pt-1 naskh">أدخل
                                        عنواناً واضحاً باللغة العربية
                                        يصف العمل الذي قمت به.</div>
                                </div>
                            </div>
                            <div class="col-12 px-0 mt-2 px-0">
                                <div class="col-12 mt-3 font-1">
                                    تفاصيل العمل
                                </div>
                                <div class="col-12 mt-2">
                                    <textarea class="form-control" style="min-height: 131px;" name="description" required="" minlength="10">{{ $portfolio->description }}</textarea>
                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="pt-1 naskh">
                                        أدخل وصف توضح به تفاصيل العمل والمهام التي قمت بها.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6  px-0 mt-2 px-0">
                                <div class="col-12  mt-3 font-1 ">
                                    الصورة الرئيسية
                                </div>
                                <div class="col-12 mt-2 px-0">
                                    <div class="col-12 attach" style="overflow: hidden;">
                                        <div class="col-12 px-0" id="file-uploader-nafezly-main">
                                            <label for="main-image"
                                                style="height: auto; padding: 9px 8px; cursor: pointer; border-width: 1px; color: #707070 !important; margin-bottom: -17px !important;"
                                                class="form-control m-0">اختيار صورة</label>
                                            <input id="main-image" style="opacity: 0; height: 0" name="main_image_input"
                                                type="file" class="image-input form-control" />
                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                class="naskh mt-1">
                                                اختر الصورة الرئيسية التي ستظهر في قائمة جميع الاعمال.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 row align-items-end">
                                        <div class="d-flex flex-column col-6 mt-3">
                                            <img class="img-fluid rounded"
                                                src="{{ asset('uploaded_images/portfolios/' . $portfolio->main_image) }}"
                                                alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 px-0 mt-2 px-0">
                                <div class="col-12 mt-3 font-1">
                                    صور العمل
                                </div>
                                <div class="col-12 mt-2 px-0">
                                    <div class="col-12 attach" style="overflow: hidden;">
                                        <div class="col-12 px-0" id="file-uploader-nafezly-main">
                                            <label for="images"
                                                style="height: auto; padding: 9px 8px; cursor: pointer; border-width: 1px; color: #707070 !important; margin-bottom: -17px !important;"
                                                class="form-control m-0">اختيار
                                                الملفات</label>
                                            <input id="images" style="opacity: 0; height: 0" name="images[]"
                                                type="file" multiple class="image-input form-control" />
                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                class="naskh mt-1">
                                                اختر الصور المناسبة لابراز عملك بشكل مميز.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 row align-items-end">
                                        @foreach ($portfolio->images as $image)
                                            <div class="d-flex flex-column col-6 mt-3">
                                                <img class="img-fluid rounded-top"
                                                    src="{{ asset('uploaded_images/portfolios/' . $image->image_name) }}"
                                                    alt="">
                                                <button href="" type="button" id="{{ $image->id }}"
                                                    class="delete-btn btn btn-danger text-center m-0 py-1"
                                                    style="border-radius: 0 0 3px 3px !important; font-size: .8rem">
                                                    <i class="fa fa-trash"></i>
                                                    حذف</button>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0 mt-2 px-0">
                                <div class="col-12 mt-3 font-1">
                                    مهارات متعلقة بالعمل <span style="color: #aaa" class="font-small naskh">(إختياري)</span>
                                </div>
                                <div class="col-12 mt-2" style="min-height: 47px">
                                    <select class=" select2 col-12" multiple="" name="skills[]" size="1"
                                        style="opacity: .4">
                                        @foreach ($skills as $skill)
                                            <option
                                                {{ in_array($skill->id, $portfolio->skills->pluck('id')->toArray()) ? 'selected' : '' }}
                                                value="{{ $skill->id }}">{{ $skill->name }}</option>
                                        @endforeach
                                    </select>
                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="naskh">حدد
                                        أهم
                                        المهارات والأدوات التي استخدمتها في العمل.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6 px-0 mt-2 px-0">
                                <div class="col-12 mt-3 font-1">
                                    قسم العمل
                                </div>
                                <div class="col-12 mt-2">
                                    <select class="form-control col-12" name="category_id" id="specializations"
                                        required="">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}"
                                                {{ $portfolio->category->id == $category->id ? 'selected' : '' }}>
                                                {{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="naskh">
                                        حدد الصنف المتعلق به عملك.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-6   px-0 mt-2 px-0">
                                <div class="col-12 mt-3 font-1 ">
                                    رابط العمل <span style="color: #aaa" class="font-small">(إختياري)</span>
                                </div>
                                <div class="col-12 mt-2">
                                    <input type="url" name="url" class="form-control"
                                        value="{{ $portfolio->url }}">
                                    <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="naskh">
                                        ادخل رابط العمل ان كان متوفراً.
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 pb-3 mt-3">
                                <button class="btn btn-success mt-2   text-center font-1 mb-2"
                                    style="border-radius: 0px;padding: 10px 16px" id="submitEvaluation">
                                    حفظ التعديل
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="col-12    px-4 col-12 col-lg-4 d-none d-lg-block">
                        <div class="col-12 px-2">
                            <h6>أضف سابقة أعمالك</h6>
                            <div class="col-12 px-0 mb-4">
                                <div class="col-12 px-0">
                                    <p style="color: var(--bg-font-4);font-size: 16px" class="naskh">يمكنك في وسيط
                                        إضافة سابقة أعمالك وعرضها على عملائك لزيادة فرصة توظيفك , قم بإضافة عنوان ووصف العمل
                                        , وكذلك وضع بعض الصور التي تبرز العمل بشكل مناسب , بعدها يمكن للعملاء تصفح العمل
                                        الخاص بك و طلب أعمال مشابهة حسب طلبهم</p>
                                </div>
                            </div>
                            <div class="col-12 px-0 mb-4">
                                <h6><span class="fal fa-lightbulb-on" style="color: var(--bg-color-3)"></span> نصائح
                                    لعرض عمل بشكل مميز</h6>
                                <div class="col-12 px-0">
                                    <ul class="px-3">
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">قم بوضع
                                            عنوان واضح وغير مختصر و معبر</li>
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">قم بوصف
                                            العمل بشكل دقيق </li>
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">حاول أن
                                            تتوقع ما هي الصيغة التي يبحث بها عميلك عن العمل الذي تقوم بإضافته في محركات
                                            البحث . فهذا يزيد من فرصة ظهور العمل الخاص بك في صدارة محركات البحث و بالتالي
                                            زيادة احتمالية الحصول على عملاء جدد</li>
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">يفضل وضع
                                            مهارات مناسبة للعمل</li>
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">لا تنس
                                            إضافة رابط العمل الخاص بك إذا كان هناك رابط يبرز العمل بشكل مباشر</li>
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

@section('script')
    <script>
        $('.delete-btn').on('click', function() {

            let image_id = $(this).attr('id');
            Swal.fire({
                title: "هل انت متأكد من حذف صورة العمل ؟",
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
                        url: "/portfolios/delete-image/" + image_id,
                        success: function(response) {
                            if (response) {
                                this.parent().remove()
                                Swal.fire({
                                    title: 'تم الحذف!',
                                    text: 'تم حذف صورة العمل.',
                                    icon: 'success',
                                    confirmButtonText: 'حسناً'
                                })
                            }
                        }
                    });
            })
        })
    </script>
    <script>
        $('input.image-input').on('change', function() {
            console.log(this.files);
            let inputImage = this.files;
            if (inputImage.length != 0) {
                $(this).prev().html('');
                $(this).prev().css('color', '#fff');
                Object.values(inputImage).forEach(val => {
                    $(this).prev().html($(this).prev().html() + val.name + '<br>');
                });
            } else {
                $(this).prev().html('اختيار الملفات');
                $(this).prev().css('color', '#707070');
            }
        })
        $("#portfolio-form").validate({});
    </script>
@endsection
