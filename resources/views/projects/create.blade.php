@extends('layouts.app')
@section('content')

    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 px-0 pb-5">
            <div class="container pt-2  pb-5">
                <div class="col-12 row px-0">
                    <div class="col-12 px-2 mt-2 py-4 mx-auto col-12  px-lg-0  justify-content-between row">
                        <div class="col px-0 font-2 font-lg-4 pt-1">
                            إضافة مشروع
                        </div>
                        <div class="col px-0 text-left  d-lg-none">
                            <a href="https://www.youtube.com/watch?v=0xor8bLf5NE" class="btn hover-darker d-inline-block"
                                style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: var(--bg-color-3)"
                                target="_blank">
                                <span class="fal fa-play" style="font-size: 13px;color: var(--bg-color-3)"></span> نصائح
                                إضافة المشروع
                            </a>
                        </div>
                    </div>
                    <div class="col-12    px-0 main-nafez-box-styles col-12 col-lg-8">
                        <form method="POST" action="/projects" class="col-12 px-0 row" id="project-form">
                            @csrf
                            <div class="col-12 row  py-0 px-0 px-md-2 ">
                                <div class="col-12 px-0 mt-2">
                                    <div class="col-12 mt-3 kufi font-1 ">
                                        عنوان المشروع
                                    </div>
                                    <div class="col-12 mt-2">
                                        <input type="text" name="title" class="form-control" required="" minlength="10"
                                            value="" id="project_name" autofocus="">
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                            class="pt-1 naskh">أدرج عنوانا موجزا يصف مشروعك بشكل دقيق. </div>
                                    </div>
                                </div>
                                <div class="col-12  px-0 mt-2 px-0">
                                    <div class="col-12 mt-3 kufi font-1 ">
                                        مهارات متعلقة بالمشروع <span style="color: #919191;font-size: 12px"
                                            class="naskh">( إختياري )</span>
                                    </div>
                                    <div class="col-12 mt-2" style="min-height: 70px">
                                        <select class=" select3 col-12" multiple="" name="project_tags[]" style="opacity:0;"
                                            size="1">
                                            <option value="1">إدارة البريد الإلكتروني</option>
                                            <option value="380">الفوتوشوب</option>
                                            <option value="381">العربية</option>
                                            <option value="382">الإنجليزية</option>
                                            <option value="383">تصميم الفوتوشوب</option>
                                            <option value="384">Illustrator</option>
                                            <option value="385">Microsoft Word</option>
                                            <option value="386">تصميم الشعارات</option>
                                            <option value="387">تصميم الجرافيك</option>
                                            <option value="388">إعادة كتابة المقالات</option>
                                            <option value="389">التصميم الإبداعي</option>
                                            <option value="390">الترجمة</option>
                                            <option value="391">تصميم الإعلانات</option>
                                            <option value="392">إدخال البيانات </option>
                                            @foreach ($skills as $skill)
                                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                            @endforeach
                                        </select>
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                            class="naskh">حدد أهم المهارات المطلوبة لتنفيذ مشروعك. </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 mt-2">
                                    <div class="col-12 mt-3 kufi font-1 ">
                                        قم بوصف المشروع
                                    </div>
                                    <div class="col-12 mt-2">
                                        <textarea name="description" class="form-control" style="min-height: 250px" required="" minlength="100"
                                            id="project_details"></textarea>
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                            class="pt-1 naskh">أدرج وصفا مفصّلا ودقيقا لمشروعك. </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 px-0 mt-2">
                                    <div class="col-12 mt-3 kufi font-1">
                                        الميزانية المتوقعة
                                    </div>
                                    <div class="col-12 mt-2 row">
                                        <div class="col-12 px-0">
                                            <select class="form-control kufi py-0 px-2" name="project_budget" required="">
                                                <option value="" disabled="" selected=""></option>
                                                @foreach ($budgets as $budget)
                                                    <option value="{{ $budget->id }}">
                                                        {{ number_format($budget->from) . ' - ' . number_format($budget->to) }} ل.س</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                            class="pt-1 naskh">اختر ميزانية مناسبة لتحصل على عروض جيدة </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 px-0 mt-4">
                                    <div class="col-12 mt-0 kufi font-1">
                                        المدة المتوقعة للتسليم <span style="color: #919191;font-size: 12px"
                                            class="naskh">( بالايام )</span>
                                    </div>
                                    <div class="col-12 mt-2 row" style="position: relative;">
                                        <div class="col-12 px-0">
                                            <input type="number" name="expected_deadline" class="form-control" required=""
                                                value="" min="1" max="90">
                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                class="pt-1 naskh">متى تحتاج استلام مشروعك </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 mt-3">
                                </div>
                                <div class="col-12   mb-3">
                                    <span class="btn btn-light pt-2 pb-1 font-1 "
                                        style="background: var(--bg-main-bg);border:1px solid var(--bg-main-bg);cursor: pointer;"
                                        onclick="$('.attach').slideToggle();">
                                        <h6 class=" px-0 mb-1 font-1"> <span class="fal fa-paperclip"
                                                aria-hidden="true"></span> إرفاق ملفات </h6>
                                    </span>
                                </div>
                                <div class="col-12   attach " style="display: none;overflow: hidden;">
                                    <div class="col-12 px-0" id="file-uploader-nafezly">
                                        <input type="hidden" name="uploaded_files" value=""
                                            class="file-uploader-uploaded-files">
                                            <input name="file" type="file" multiple class="file-uploader-files"
                                                data-fileuploader-files="" style="opacity: 0" />
                                    </div>
                                </div>
                                <div class="col-12 pb-3">
                                    <button class="btn btn-success mt-2   text-center font-1 mb-2"
                                        style="border-radius: 0px;padding: 10px 16px" id="submitEvaluation">انشر
                                        الآن</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-12    px-4 col-12 col-lg-4 d-none d-lg-block">
                        <div class="col-12 px-2">
                            <div class="col-12 px-0 mb-4">
                                <h6 class="pb-2 col-12 px-0">أنشر مشروعك على وسيط</h6>
                                {{-- <div class="col-12 px-0 d-none d-lg-block mb-2">
                                    <iframe
                                        src="https://www.youtube.com/embed/0xor8bLf5NE?controls=1&rel=0&showinfo=0&color=white"
                                        style="width: 100%;height: 202px" allowfullscreen></iframe>
                                </div> --}}
                                <div class="col-12 px-0">
                                    <p style="color: var(--bg-font-4);font-size: 16px" class="naskh">تساعدك منصة
                                        وسيط على الوصول إلى أفضل المستقلين المحترفين لإنجاز أعمالك عن بعد . بعد إضافة
                                        مشروعك على وسيط ومراجعته ، سيتقدم إليك عدد من العروض من المستقلين المتخصيين يمكنك
                                        إختيار العرض الأنسب لك من العروض المقدمة وإعتماده </p>
                                </div>
                            </div>
                            <div class="col-12 px-0 mb-4">
                                <h6><span class="fal fa-lightbulb-on" style="color: var(--bg-color-3)"></span> نصائح إضافة
                                    المشروع</h6>
                                <div class="col-12 px-0">
                                    <ul class="px-3">
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">أدخل
                                            تفاصيل المشروع بدقة</li>
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">املأ جميع
                                            الحقول ووفّر أمثلة لما تريد</li>
                                        <li style="color: var(--bg-font-4);font-size: 16px" class="naskh pt-1">جزّء
                                            المشروع على عدّة مراحل صغيرة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
