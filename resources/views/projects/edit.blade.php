@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="col-12 px-0 pb-5">
            <div class="container pt-2  pb-5">
                <div class="col-12 row px-0">
                    <div class="col-12 px-2 mt-2 py-4 mx-auto col-12  px-lg-0  justify-content-between row">
                        <div class="col px-0 font-2 font-lg-4 pt-1">
                            تعديل المشروع: {{ $project->title }}
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
                        <form method="POST" action="/projects/{{ $project->id }}" class="col-12 px-0 row"
                            id="project-form" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="col-12 row  py-0 px-0 px-md-2 ">
                                <div class="col-12 px-0 mt-2">
                                    <div class="col-12 mt-3 kufi font-1 ">
                                        عنوان المشروع
                                    </div>
                                    <div class="col-12 mt-2">
                                        <input type="text" name="title" class="form-control" required=""
                                            minlength="10" value="{{ $project->title ?? '' }}" id="project_name"
                                            autofocus="">
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="pt-1 naskh">
                                            أدرج عنوانا موجزا يصف مشروعك بشكل دقيق. </div>
                                    </div>
                                </div>
                                <div class="col-12  px-0 mt-2 px-0">
                                    <div class="col-12 mt-3 kufi font-1 ">
                                        مهارات متعلقة بالمشروع <span style="color: #919191;font-size: 12px" class="naskh">(
                                            إختياري )</span>
                                    </div>
                                    <div class="col-12 mt-2" style="min-height: 70px">
                                        <select class=" select3 col-12" multiple="" name="project_tags[]"
                                            style="opacity:0;" size="1">
                                            @php
                                                $project_skills = [];
                                                if (isset($project)) {
                                                    $project_skills = $project->skills->pluck('id')->toArray() ?? '';
                                                }
                                            @endphp
                                            @foreach ($skills as $skill)
                                                <option {{ in_array($skill->id, $project_skills) ? 'selected' : '' }}
                                                    value="{{ $skill->id }}">
                                                    {{ $skill->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="naskh">حدد
                                            أهم المهارات المطلوبة لتنفيذ مشروعك. </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 mt-2">
                                    <div class="col-12 mt-3 kufi font-1 ">
                                        قم بوصف المشروع
                                    </div>
                                    <div class="col-12 mt-2">
                                        <textarea name="description" class="form-control" style="min-height: 250px" required="" minlength="100"
                                            id="project_details">{{ $project->description ?? '' }}</textarea>
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="pt-1 naskh">
                                            أدرج وصفا مفصّلا ودقيقا لمشروعك. </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 px-0 mt-2">
                                    <div class="col-12 mt-3 kufi font-1">
                                        الميزانية المتوقعة
                                    </div>
                                    <div class="col-12 mt-2 row">
                                        <div class="col-12 px-0">
                                            <select class="form-control kufi py-0 px-2" name="budget_id" required="">
                                                <option value="" disabled="" selected=""></option>
                                                @foreach ($budgets as $budget)
                                                    <option
                                                        {{ isset($project->budget) && $project->budget == $budget ? 'selected' : '' }}
                                                        value="{{ $budget->id }}">
                                                        {{ number_format($budget->from) . ' - ' . number_format($budget->to) }}
                                                        ل.س</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;" class="pt-1 naskh">
                                            اختر ميزانية مناسبة لتحصل على عروض جيدة </div>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-6 px-0 mt-4">
                                    <div class="col-12 mt-0 kufi font-1">
                                        المدة المتوقعة للتسليم <span style="color: #919191;font-size: 12px" class="naskh">(
                                            بالايام )</span>
                                    </div>
                                    <div class="col-12 mt-2 row" style="position: relative;">
                                        <div class="col-12 px-0">
                                            <input type="number" name="expected_deadline" class="form-control"
                                                required="" value="{{ $project->expected_deadline ?? '' }}"
                                                min="1" max="90">
                                            <div style="font-size: 13px;color:var(--bg-font-4);opacity: .6;"
                                                class="pt-1 naskh">متى تحتاج استلام مشروعك </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0 mt-3">
                                </div>
                                <div class="col-12 mb-3">
                                    <label id="files-label" for="files" class="btn btn-light pt-2 pb-1 font-1"
                                        style="background: var(--bg-main-bg);border:1px solid var(--bg-main-bg);cursor: pointer;">
                                        <h6 class=" px-0 mb-1 font-1">
                                            <span class="fal fa-paperclip" aria-hidden="true"></span> إرفاق ملفات
                                        </h6>
                                    </label>
                                    <div id="files-names" class="mr-3"></div>
                                    <div class="col-12 p-0 mt-2">
                                        @foreach ($project->attachments as $attachment)
                                            <div class="col-12 d-flex align-items-center hover-light"
                                                style="padding: 4px;">
                                                <button onclick="deleteAttach({{ $attachment->id }})" type="button"
                                                    class="btn btn-sm btn-danger m-0">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                                <a href="{{ asset('uploaded_images/projects/' . $attachment->file_name) }}"
                                                    class="d-block w-100" download>
                                                    <div style="border-top: none; " class="px-2 pb-1">
                                                        <span
                                                            style="color: var(--bg-font-4);border-radius: 50px;padding-top: 3px;line-height: 1.2"
                                                            class=" d-inline-block text-center">
                                                            <span class="far fa-paperclip p-1"></span>
                                                        </span>
                                                        <span style="direction: ltr;position: relative;top: -2px"
                                                            class="d-inline-block   naskh font-small">
                                                            {{ $attachment->file_name }}
                                                        </span>
                                                        <span class="d-inline-block font-small naskh"
                                                            style="color: var(--bg-font-4);position: relative;top: -2px">
                                                            [
                                                            {{ round(filesize('uploaded_images/projects/' . $attachment->file_name) / 1048576, 2) }}
                                                            ميغا
                                                            ]
                                                        </span>
                                                    </div>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                <input class="d-none" type="file" name="files[]" id="files" multiple>
                                <script>
                                    let input = document.getElementById("files");
                                    let imagesLabel = document.getElementById("files-names")
                                    input.addEventListener("change", () => {
                                        let inputImage = input.files;
                                        imagesLabel.innerHTML = '';
                                        Object.values(inputImage).forEach(val => {
                                            imagesLabel.innerHTML += val.name + '<br>';
                                        });
                                    })
                                </script>

                                <div class="col-12 pb-3">
                                    <button class="btn btn-success mt-2   text-center font-1 mb-2"
                                        style="border-radius: 0px;padding: 10px 16px" id="submitEvaluation">
                                        تعديل
                                    </button>
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
@section('script')
    <script>
        $("#project-form").validate({});
    </script>
@endsection
@endsection
