@extends('layouts.app')

@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <div class="modal fade bd-example-modal-lg" id="exampleModalCenter" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
            style="z-index: 454454545;background: rgba(0, 0, 0, 0.45);">
            <div class="modal-dialog  modal-lg" role="document" style="z-index: 444;">
                <div class="modal-content">
                    <div class="col-12 px-0 row">
                        <div class="col-10" style="padding: 12px 16px;">
                            إعتماد العرض
                        </div>
                        <div class="col-2 p-0 d-flex justify-content-end">
                            <span class="fas fa-times close font-2 ml-1 p-3" data-dismiss="modal"></span>
                        </div>
                    </div>
                    <div class="nafezly-divider-right my-0" style="min-height:1px"></div>
                    <div class="modal-body">
                        <div class="alert nafezly-alert mb-0">
                            <ul class="p-2 py-3 mb-0">
                                <li class="font-1">تضمن منصة وسيط حقوقك كاملةً ويظل المبلغ في
                                    حسابك كاملاً لحين اعتماد انتهاء الصفقة من خلالك </li>
                                <li class="font-1">خدمة عملاء وسيط على مدار الساعة لإمدادك بالمزيد
                                    من الدعم على المنصة لذا لا تتردد ابدا في التواصل معنا إذا كان لديك اي
                                    استفسار او تساؤل</li>
                            </ul>
                        </div>
                    </div>
                    <div class="nafezly-divider my-0" style="min-height:1px"></div>
                    <div class="col-12 d-flex justify-content-end  p-2">
                        <button type="button" class="btn btn-light font-1 px-3 ml-2" data-dismiss="modal"
                            style="border-radius: 0px;">تراجع</button>
                        <button type="button" class="btn btn-success font-1 px-4" style="border-radius: 0px;"
                            onclick="document.getElementById('accept-deal').submit();">إعتماد العرض</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade close-project-modal" id="exampleModalCenter" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
            style="    z-index: 454454545;
                                                                                                                                                                                                background: rgba(0, 0, 0, 0.45);">
            <div class="modal-dialog  modal-lg" role="document" style="z-index: 444;">
                <div class="modal-content">
                    <div class="modal-header p-3">
                        <h5 class="modal-title kufi" id="exampleModalCenterTitle" style="font-size: 14px">
                            هل انت متاكد من عملية إغلاق المشروع ؟ </h5>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="alert nafezly-alert mb-0">
                            <ul class="p-2 py-3 mb-0">
                                <li class="font-1">سوف تقوم الآن بإغلاق المشروع ولن تتمكن من
                                    استقبال عروض جديدة على هذا المشروع</li>
                                <li class="font-1">يمكنك كذلك إعادة فتح المشروع مرة اخرى في أي وقت
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer border-0 ">
                        <button type="button" class="btn btn-light kufi ml-1" data-dismiss="modal"
                            style="font-size: 14px;border-radius: 0px;">تراجع</button>
                        <button type="button" class="btn btn-success kufi" style="font-size: 14px;border-radius: 0px;"
                            onclick="document.getElementById('project-close-form').submit();">إغلاق
                            المشروع</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade reopen-project-modal" id="exampleModalCenter" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true"
            style="    z-index: 454454545;
                                                                                                                                                                                                background: rgba(0, 0, 0, 0.45);">
            <div class="modal-dialog  modal-lg" role="document" style="z-index: 444;">
                <div class="modal-content">
                    <div class="modal-header p-3">
                        <h5 class="modal-title kufi" id="exampleModalCenterTitle" style="font-size: 14px">
                            هل انت متاكد من عملية إعادة فتح المشروع ؟ </h5>
                    </div>
                    <div class="modal-body pb-0">
                        <div class="alert nafezly-alert mb-0">
                            <ul class="p-2 py-3 mb-0">
                                <li class="font-1">سوف تقوم الآن بإعادة فتح المشروع ونشره على منصة
                                    وسيط وستتمكن من إستقبال عروض جديدة</li>
                            </ul>
                        </div>
                    </div>
                    <div class="modal-footer border-0 ">
                        <button type="button" class="btn btn-light kufi ml-1" data-dismiss="modal"
                            style="font-size: 14px;border-radius: 0px;">تراجع</button>
                        <button type="button" class="btn btn-success kufi" style="font-size: 14px;border-radius: 0px;"
                            onclick="document.getElementById('project-reopen-form').submit();">إعادة فتح
                            المشروع</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade edit-offer-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content edit-offer-modal-response">
                </div>
            </div>
        </div>
        <div class="col-12 px-0">
            <div class="col-12  p-0 pb-0 mb-1 mb-lg-4 ">
                <div class="col-12  px-0 row" style="background: var(--bg-head);padding: 20px!important">
                    <div class="container px-0 d-flex">
                        <div class="px-0 px-lg-4 row col-12">
                            <div class="col-12 px-0">
                                <div class="col-12 px-0 row ">
                                    <div class="col-12 col-lg-9  px-0">
                                        <div
                                            style=" display: inline-block;position: relative;font-size: 14px;color: #919191">
                                            <div class="col-12  px-0  text-right text-md-right naskh "
                                                style="color: #919191;font-size: 11px;padding: 0px 0px">
                                            </div>
                                            <h1 style="display: block;font-size: 17px;color: var(--bg-color-0) ;line-height: 1.5"
                                                class="kufi font-md-4  mb-0">
                                                {{ $project->title }}
                                            </h1>
                                        </div>
                                        <div class="col-12 p-0 text-truncate">
                                            <a href="/" style="color:inherit;font-size:11px;opacity:0.7">
                                                الرئيسية
                                            </a>
                                            <a href="/projects" style="color:inherit;font-size:11px;opacity:0.7">
                                                <span class="font-small px-1">/</span> المشاريع
                                            </a>
                                            <a href="#" style="color:inherit;font-size:11px;opacity:0.7">
                                                <span class="font-small px-1">/</span>
                                                {{ $project->title }}
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-3 px-0 d-flex d-flex justify-content-end ">
                                        <div
                                            class="col-12 px-0  d-flex align-items-center justify-content-between justify-content-lg-end  py-2">
                                            <a href="/projects/create?project_id={{ $project->id }}"
                                                class="btn btn-primary font-1 text-center "
                                                style="border-radius: 2px;border-radius: 428px;padding: 5px 18px!important;cursor: pointer;">
                                                <span class="fas fa-plus"></span>
                                                <span> مشروع مماثل</span>
                                            </a>
                                            <div class="d-inline-block mr-2">
                                                <div class="p-0 d-inline-block mr-auto" style="white-space: nowrap;">
                                                    <div class="col-12 px-1 d-flex align-items-center">
                                                        <span class="d-inline-block pt-2 ml-1"
                                                            style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                            id="counter_{{ $project->id }}">
                                                            {{ $project->likes()->count() ? $project->likes()->count() : '' }}
                                                        </span>
                                                        <span
                                                            class="d-inline-block love-favourite-area noselect {{ in_array(auth()->id(), $project->likes->pluck('id')->toArray()) ? 'added' : '' }}"
                                                            style="cursor: pointer;" id="love_id_{{ $project->id }}"
                                                            data-id="{{ $project->id }}" data-type="project">
                                                            <span
                                                                class="fa-heart love-favourite font-3 {{ in_array(auth()->id(), $project->likes->pluck('id')->toArray()) ? 'fas' : 'fal' }}"
                                                                style="padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3;"
                                                                id="icon_{{ $project->id }}"></span>
                                                        </span>
                                                        @if ($project->user->id == auth()->id())
                                                            <div class="dropdown show d-none d-inline-block">
                                                                <span
                                                                    class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                    style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                    role="button" id="dropdownMenuLink"
                                                                    data-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"></span>
                                                                <div class="dropdown-menu border"
                                                                    aria-labelledby="dropdownMenuLink"
                                                                    style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                                    <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 edit-dots-wedgit "
                                                                        href="/projects/{{ $project->id }}/edit"
                                                                        style="font-size: 13px;color: var(--bg-color-0)"><span
                                                                            class="fal fa-edit text-center"
                                                                            style="width: 20px;color: var(--bg-color-0)"></span>
                                                                        تعديل
                                                                    </a>
                                                                    <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 remove-dots-wedgit remove-project-click"
                                                                        href="#"
                                                                        style="font-size: 13px;color: var(--bg-color-0)">
                                                                        <span class="fal fa-trash text-center"
                                                                            style="width: 20px;color: var(--bg-color-0)"></span>
                                                                        حذف
                                                                    </a>
                                                                    <form id="remove-project-form" method="post"
                                                                        action="/projects/{{ $project->id }}">
                                                                        @method('delete')
                                                                        @csrf
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        @endif
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
            </div>
            <div class="container px-0 ">
                <div class="col-12 px-0 row">
                    <div class="col-12 col-lg-8 order-lg-1 order-3 px-0 px-lg-4 pb-lg-4 pt-0">
                        <div class="col-12 px-0 py-1 py-lg-3">
                            <div class="col-12 px-0">
                                <div class="col-12   main-nafez-box-styles px-0">
                                    <div class="col-12  p-2  py-md-3 ">
                                        <div class="col-12 px-0 row d-flex justify-content-between pt-2 ">
                                            <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                <span
                                                    style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                    class="text-center d-inline-block project-state active mx-2 mx-md-0">
                                                    <span class="d-flex justify-content-center align-items-center"
                                                        style="width:30px;height:30px">
                                                        <i class="fas fa-check"
                                                            style="color: var(--bg-second-bg);font-size: 15px;"></i>
                                                    </span>
                                                </span>
                                                <div class="d-none d-lg-block pb-2"></div>
                                                نشر المشروع
                                            </div>
                                            <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                <span
                                                    style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                    class="text-center d-inline-block project-state active mx-2 mx-md-0"><span
                                                        class="d-flex justify-content-center align-items-center"
                                                        style="width:30px;height:30px">
                                                        <i class="fas fa-chevron-left"
                                                            style="color: var(--bg-second-bg);font-size: 15px;"></i>
                                                    </span>
                                                </span>
                                                <div class="d-none d-lg-block pb-2"></div>
                                                تلقي العروض
                                            </div>
                                            <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                <span
                                                    style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                    class="text-center d-inline-block project-state mx-2 mx-md-0">
                                                    <span class="d-flex justify-content-center align-items-center"
                                                        style="width:30px;height:30px">
                                                        <i class="fas fa-check"
                                                            style="color:var(--bg-second-bg);font-size: 15px;"></i>
                                                    </span>
                                                </span>
                                                <div class="d-none d-lg-block pb-2"></div>
                                                تنفيذ المشروع
                                            </div>
                                            <div class="col-12 col-lg font-1 text-lg-center py-lg-0 py-2">
                                                <span
                                                    style="width: 30px;height: 30px;background: var(--bg-main-bg);border-radius: 50%;"
                                                    class="text-center d-inline-block project-state mx-2 mx-md-0 ">
                                                    <span class="d-flex justify-content-center align-items-center"
                                                        style="width:30px;height:30px">
                                                        <i class="fas fa-check "
                                                            style="color: var(--bg-second-bg);font-size: 15px;"></i>
                                                    </span>
                                                </span>
                                                <div class="d-none d-lg-block pb-2"></div>
                                                استلام المشروع
                                            </div>
                                        </div>
                                        <div class="col-10 mx-auto  px-0 mt-4 row d-none d-lg-flex "
                                            style="height: 9px;background: var(--bg-main-bg);border-radius: 12px">
                                            <span class="d-inline-block"
                                                style="width: 35%;height: 9px;background: var(--bg-color-4);border-radius: 12px 12px  ;opacity: .3;">
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-0 py-1 py-lg-3">
                            <div class="col-12 px-0 main-nafez-box-styles" style="overflow: hidden;">
                                <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                    <h5 style="font-size: 17px;color:var(--bg-color-0)"> تفاصيل المشروع</h5>
                                </div>
                                <div class="col-12" style="padding: 20px;;">
                                    <h2 class="col-12  p-0 naskh  font-2 m-0"
                                        style="white-space: pre-line; word-wrap: break-word;overflow: hidden;color:var(--bg-color-0);line-height: 1.6 ; ">
                                        {{ $project->description }}
                                    </h2>
                                    <div class="col-12 p-0 mt-2">
                                        @foreach ($project->attachments as $attachment)
                                            <div class="col-12 px-0">
                                                <a href="{{ asset('uploaded_images/projects/' . $attachment->file_name) }}"
                                                    class="d-block hover-light not-pace group_msg_attach_6297c242e8b1a"
                                                    style="padding: 4px;margin-bottom: 4px"
                                                    rel='group_msg_attach_6297c242e8b1a' download>
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
                            </div>
                        </div>
                        <div class="col-12 px-0 py-1 py-lg-3">
                            <div class="col-12   main-nafez-box-styles px-0">
                                <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                    <h5 style="font-size: 17px;color:var(--bg-color-0)"> مهارات مطلوبة</h5>
                                </div>
                                <div class="col-12 p-3 row d-flex">
                                    @foreach ($project->skills as $skill)
                                        <a href="#"
                                            class="mx-1 d-inline-block btn font-small rounded-pill py-1 my-1 tag-class"><span
                                                class="far fa-tags pl-1"></span> {{ $skill->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        @if (!(auth()->id() == $project->user_id || in_array(auth()->id(), $project->offers->pluck('user_id')->toArray())))
                            <div class="col-12 px-0 py-1 py-lg-3" id="add-offer">
                                <div class="col-12 px-0 main-nafez-box-styles">
                                    <div class="col-12 main-nafez-box-styles px-0">
                                        <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg)">
                                            <h5 style="color: var(--bg-color-0);font-size: 17px">أضف عرضك الآن
                                            </h5>
                                        </div>
                                        <div class="col-12 p-0 ">
                                            @guest
                                                <div class="col-12 px-0 py-3 text-center font-1 ">
                                                    <div class="col-12 px-0 row text-center justify-content-center d-flex">
                                                        <a href="/login" class="text-center ml-1"
                                                            style="position: relative;cursor: pointer;padding: 7px 0px 0px;text-align: center;;min-width: 60px;border-radius: 5px;   "
                                                            href="https://nafezly.com/freelancers">
                                                            <button class="btn btn-primary py-2 rounded-0"
                                                                style="border-radius: 3px;background: transparent!important;color:var(--bg-color-0)">دخول</button>
                                                        </a>
                                                        <a href="/register" class="text-center ml-1 ml-1"
                                                            style="position: relative;cursor: pointer;padding: 7px 0px 0px;text-align: center;;min-width: 107px;border-radius: 5px;   "
                                                            href="https://nafezly.com/freelancers">
                                                            <button class="btn btn-primary py-2 rounded-0"
                                                                style="border-radius: 3px;">حساب جديد</button>
                                                        </a>
                                                    </div>
                                                </div>
                                            @endguest
                                            @auth
                                                <div class="col-12 mt-4  px-0 mt-0 aardk pb-2">
                                                    <div class="col-12 mt-2  px-0 px-md-2">
                                                        <form class="col-12 px-0 row" id="offer-form" method="POST"
                                                            enctype="multipart/form-data" action="/offer/store">
                                                            @csrf
                                                            <div class="col-12 px-0 mb-2 row">
                                                                <input type="hidden" name="project_id"
                                                                    value="{{ $project->id }}">
                                                                <div class="col-6">
                                                                    <div class="col-12 mt-2   font-1 px-0">
                                                                        مدة التنفيذ <span
                                                                            style="color: #919191;font-size: 12px"
                                                                            class="naskh">( بالايام )</span>
                                                                    </div>
                                                                    <div class="col-12 mt-2 row px-0">
                                                                        <div class="col-12 px-0">
                                                                            <input type="number" name="deadline"
                                                                                class="form-control" min="1"
                                                                                max="90" required="" id="deadline">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="col-12 mt-2 font-1 px-0">
                                                                        قيمة عرضك <span style="color: #919191;font-size: 12px"
                                                                            class="naskh">( بالليرة السورية
                                                                            )</span>
                                                                    </div>
                                                                    <div class="col-12 mt-2 row px-0">
                                                                        <div class="col-12 px-0">
                                                                            <input type="number" name="price"
                                                                                class="form-control" required=""
                                                                                min="50" id="price"
                                                                                onkeyup="$('#gain_value').val($(this).val()- ($(this).val()*15/100) );$('.gain_value').text($(this).val()- ($(this).val()*15/100) );">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12  px-0 mt-2">
                                                                    <div class="col-12 mt-2 font-1 ">
                                                                        تفاصيل عرضك
                                                                    </div>
                                                                    <div class="col-12 mt-2">
                                                                        <textarea class="form-control mb-2" style="min-height: 234px;" placeholder="تفاصيل العرض" required=""
                                                                            minlength="30" maxlength="5000" id="description" name="description"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 row">
                                                                    <div class="col-6 px-0 mt-2 pt-2">
                                                                        <label id="files-label" for="files"
                                                                            class="btn btn-light pt-2 pb-1 font-1"
                                                                            style="background: var(--bg-main-bg);border:1px solid var(--bg-main-bg);cursor: pointer;">
                                                                            <h6 class=" px-0 mb-1 font-1">
                                                                                <span class="fal fa-paperclip"
                                                                                    aria-hidden="true"></span> إرفاق ملفات
                                                                            </h6>
                                                                        </label>
                                                                        <div id="files-names" class="mr-3"></div>
                                                                        <input class="d-none" type="file" name="files[]"
                                                                            id="files" multiple>
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
                                                                    </div>
                                                                    <div class="col-6 px-0 mt-2 pt-2 text-left">
                                                                        <button class="btn btn-primary pb-2 font-1"
                                                                            style="border:none; display: inline-block;"
                                                                            id="make-offer">
                                                                            تقديم عرضك
                                                                        </button>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12 mb-3"></div>
                                                                <div class="col-12 px-0">
                                                                    <ul>
                                                                        <li style="font-size: 13px;color: var(--bg-font-4);" class="naskh">
                                                                            قم بإضافة تفاصيل العرض بشكل مفهوم ودقيق
                                                                        </li>
                                                                        <li style="font-size: 13px;color: var(--bg-font-4);"
                                                                            class="naskh">
                                                                            قم بالاهتمام بمعرض اعمالك كي يتم اختيارك
                                                                        </li>
                                                                        <li style="font-size: 13px;color: var(--bg-font-4);"
                                                                            class="naskh">
                                                                        انتظر من صاحب المشروع التواصل معك لقبول عرضك
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            @endauth
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                        <div class="col-12 px-0 py-1 py-lg-3">
                            <div class="col-12 px-0 main-nafez-box-styles">
                                <div class="col-12"
                                    style="border-bottom: 1px solid var(--bg-main-bg);color: var(--bg-second-bg);color: var(--bg-color-0)">
                                    <div class="col-12 px-0 row d-flex justify-content-between">
                                        <div class="col px-0 py-3">
                                            العروض المقدمة <span
                                                class="fas fa-spinner-third fa-spin  mr-2 loading-offer-spin fast-spin"
                                                style="display: none;"></span>
                                        </div>
                                        <div class="col px-0">
                                            <div class="dropdown mt-2 pt-1 ml-md-2 text-left">
                                                <button class="btn btn-light border dropdown-toggle pl-1 rounded-0 ml-1"
                                                    id="offer-sort-list-btn-text" type="button" id="dropdownMenuButton"
                                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                                    style="font-size: 12px!important">
                                                    تلقائي
                                                </button>
                                                <div class="dropdown-menu border " aria-labelledby="dropdownMenuButton"
                                                    id="offer-sort-list">
                                                    <span class="dropdown-item d-block hover-darker font-1"
                                                        style="cursor: pointer;color: var(--bg-color-0)"
                                                        data-sort="NEWEST">الأحدث</span>
                                                    <span class="dropdown-item d-block hover-darker font-1"
                                                        style="cursor: pointer;color: var(--bg-color-0)"
                                                        data-sort="OLDEST">الأقدم</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-1 px-0 text-center d-none d-md-block py-3 "
                                            style=" max-width: 20px;cursor: pointer;"
                                            onclick="$('.offers-list').slideToggle();">
                                            <span class="fas fa-chevron-down" style="opacity: .7;"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 px-0" id="project-load-offers">
                                    <div class="col-12 offers-list px-0 ">
                                        @foreach ($project->offers->sortByDesc('created_at') as $offer)
                                            <div class="col-12 offer-order"
                                                style="border-bottom: 1px solid var(--bg-main-bg);padding: 21px 15px;"
                                                data-score="27.659574468085">
                                                <div class="col-12 row px-0 d-flex">
                                                    <div class="text-center d-inline-block"
                                                        style="width: 55px;padding: 5px!important">
                                                        <a href="/freelancers/{{ $offer->user_id }}"
                                                            style="display: block;">
                                                            <div style="width: 55px;background: var(--bg-second-bg);display: inline-block;border-radius: 50%!important;max-width: 100%;position: relative;max-height: 55px;"
                                                                class="d-inline-block">
                                                                <img src="{{ asset('uploaded_images/users/' . ($offer->user->profile_image ?? 'defualt.png')) }}"
                                                                    style="width: 100%;border-radius: 50%!important;padding: 3px;height: 45px"
                                                                    alt="صورة صاحب مقدم العرض">
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="p-0 d-inline-block">
                                                        <div class="col-12 px-2">
                                                            <div class="px-0 pt-0  mt-1 row col-12  ">
                                                                <div class="col-12 px-0 kufi">
                                                                    <a href="/freelancers/{{ $offer->user_id }}"
                                                                        style="font-size: 15px;line-height: 1.1;"
                                                                        class="pt-0 kufi  mt-0 d-inline-block">
                                                                        {{ $offer->user->fullName }}
                                                                    </a>
                                                                    <span
                                                                        style="color: #919191;position: relative;top: 0px"
                                                                        class="naskh font-small d-block">
                                                                        <span class="fal fa-clock " aria-hidden="true"
                                                                            style="font-size: 10px"></span>
                                                                        @php
                                                                            Carbon\Carbon::setLocale('ar_EH');
                                                                            $offerCreatedAt = $offer->created_at->diffForHumans(Carbon\Carbon::now());
                                                                        @endphp
                                                                        {{ $offerCreatedAt }} &nbsp; &nbsp;
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div
                                                                style=" display: inline-block;position: relative;font-size: 14px;color: #919191">
                                                                <div class="col-12  px-0  text-right text-md-right "
                                                                    style="color: #919191;font-size: 13px;padding: 0px 0px">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="d-inline-flex mr-auto pt-2">
                                                        <div class="col-12 px-1 d-flex align-items-center">
                                                            <span class="d-inline-block pt-2 ml-1"
                                                                style="position: relative;bottom: 2px;color: var(--bg-color-0);opacity: .8;font-size: 13px"
                                                                id="counter_{{ $offer->id }}">
                                                                {{ $offer->likes()->count() ? $offer->likes()->count() : '' }}
                                                            </span>
                                                            <span
                                                                class="d-inline-block love-favourite-area noselect {{ in_array(auth()->id(), $offer->likes->pluck('id')->toArray()) ? 'added' : '' }}"
                                                                style=" cursor: pointer;" data-id="{{ $offer->id }}"
                                                                data-type="offer" id="love_id_{{ $offer->id }}">
                                                                <span
                                                                    class="fa-heart love-favourite font-3 {{ in_array(auth()->id(), $offer->likes->pluck('id')->toArray()) ? 'fas' : 'fal' }}"
                                                                    style=" padding: 7px 6px 4px 6px; border-radius: 50%!important;color: #2196f3 ;"
                                                                    id="icon_{{ $offer->id }}"></span>
                                                            </span>
                                                            @if ($offer->user_id == auth()->id())
                                                                <div
                                                                    class="dropdown show d-none dots-{{ $offer->id }} ">
                                                                    <span
                                                                        class="fal fa-ellipsis-v hover-light btn btn-light border-0  rounded hover-darker"
                                                                        style="cursor: pointer;color: var(--bg-color-0);background: var(--bg-main-bg);padding: 2px 10px;"
                                                                        role="button" id="dropdownMenuLink"
                                                                        data-toggle="dropdown" aria-haspopup="true"
                                                                        aria-expanded="false"></span>
                                                                    <div class="dropdown-menu border"
                                                                        aria-labelledby="dropdownMenuLink"
                                                                        style="box-shadow: rgb(10 14 29 / 2%) 0px 8px 16px 0px, rgb(119 119 119 / 8%) 0px 8px 64px 0px;border-radius: 5px;">
                                                                        <a class="dropdown-item font-md-1 pr-2 hover-darker pl-3 remove-dots-wedgit remove-offer-click"
                                                                            href="#"
                                                                            style="font-size: 13px;color: var(--bg-color-0)">
                                                                            <span class="fal fa-trash text-center"
                                                                                style="width: 20px;color: var(--bg-color-0)"></span>
                                                                            حذف
                                                                        </a>
                                                                        <form id="remove-offer-form" method="post"
                                                                            action="/offer/{{ $offer->id }}">
                                                                            @method('delete')
                                                                            @csrf
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    @if ($project->user->id == auth()->id() || $offer->user_id == auth()->id())
                                                        <style>
                                                            .dots-62bed6e9f2eff {
                                                                display: inline-block !important;
                                                            }
                                                        </style>
                                                        <div class="col-12 px-0 naskh row justify-content-around pb-2 mb-4 border"
                                                            style="border-color: var(--bg-main-bg)!important;padding: 5px 0px;">
                                                            <div class="mx-3 font-1 d-block"
                                                                style="border-color: var(--bg-main-bg)!important">
                                                                <span style="opacity: .7;color: green;"
                                                                    class="font-1 pt-1 d-inline-block">
                                                                    <span class="fal fa-money-bill-alt"></span>
                                                                    {{ $offer->price }} ل.س
                                                                </span>
                                                            </div>
                                                            <div class="mx-3 font-1 d-block"
                                                                style="border-color: var(--bg-main-bg)!important">
                                                                <span style="opacity: .7;color: green;"
                                                                    class="font-1 pt-1 d-inline-block">
                                                                    <span class="fal fa-calendar-day font-1"></span>
                                                                    {{ $offer->deadline }} أيام
                                                                </span>
                                                            </div>
                                                            <div class="mx-3 font-1 d-block">
                                                                <a href="/freelancers/{{ $offer->user_id }}?section=portfolios"
                                                                    style="font-size: 12px;opacity: 1" class="pt-1">
                                                                    <span class="fal fa-images"></span>
                                                                    {{ $offer->user->portfolios()->count() }} أعمال في المعرض
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <h3 class="col-12 px-1 col-lg-11 naskh"
                                                        style="word-wrap: break-word;overflow: hidden; color: var(--bg-color-0);line-height: 1.7;font-size: 16px">
                                                        {{ $offer->description }}
                                                        @foreach ($offer->attachments as $attachment)
                                                            <div class="col-12 mt-3 px-0">
                                                                <a href="{{ asset('uploaded_images/offers/' . $attachment->file_name) }}"
                                                                    class="d-block hover-light not-pace group_msg_attach_6297c242e8b1a"
                                                                    style="padding: 4px;margin-bottom: 4px"
                                                                    rel='group_msg_attach_6297c242e8b1a' download>
                                                                    <div style="border-top: none; " class="px-2 pb-1">
                                                                        <span
                                                                            style="color: var(--bg-font-4);border-radius: 50px;padding-top: 3px;line-height: 1.2"
                                                                            class=" d-inline-block text-center">
                                                                            <span class="far fa-paperclip p-1"></span>
                                                                        </span>
                                                                        <span
                                                                            style="direction: ltr;position: relative;top: -2px"
                                                                            class="d-inline-block   naskh font-small">
                                                                            {{ $attachment->file_name }}
                                                                        </span>
                                                                        <span class="d-inline-block font-small naskh"
                                                                            style="color: var(--bg-font-4);position: relative;top: -2px">
                                                                            [
                                                                            {{ round(filesize('uploaded_images/offers/' . $attachment->file_name) / 1048576, 2) }}
                                                                            ميغا
                                                                            ]
                                                                        </span>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                        @endforeach
                                                    </h3>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-0 py-1 py-lg-3 d-block d-lg-none">
                            <div class="col-12 p-0 main-nafez-box-styles" id="share-widget">
                                <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                    <h5 style="font-size: 17px;color:var(--bg-color-0)"> شارك </h5>
                                </div>
                                <div class="col-12 px-0 py-2">
                                    <ul style="display: block;padding: 0px;list-style: none;position: relative;"
                                        class="mt-2 mb-2 text-center">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-facebook-f d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://twitter.com/share?url={{ Request::url() }}"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-twitter d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}" 
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-linkedin-in d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text={{ Request::url() }}"
                                            data-action="share/whatsapp/share" class="d-inline-block p-1"
                                            target="_blank">
                                            <span class="fab fa-whatsapp d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                            data-url="{{ Request::url() }}"
                                            title="نسخ الرابط">
                                            <span class="fal fa-copy d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: var(--bg-color-0);cursor: pointer;border-radius: 0"></span>
                                        </span>
                                        <input type="text" id="referral-input" readonly=""
                                            class="form-control py-0  px-1 font-small"
                                            style="border:none!important;height: 20px;background: var(--bg-second-bg);z-index: -1;opacity: 0;position: absolute;">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 order-lg-2 order-2 px-0 px-lg-4 pb-lg-4 pt-0">
                        <div class="col-12 px-0 py-1 py-lg-3">
                            <div class="col-12 px-0">
                                <div class="col-12 px-0 main-nafez-box-styles   py-0 rounded border-0">
                                    <div class="col-12 row px-0">
                                        <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg)">
                                            <h5 style="color: var(--bg-color-0);font-size: 17px"> بطاقة
                                                المشروع </h5>
                                        </div>
                                        <div class="col-12 row p-3">
                                            <div class="col-12 row" style="padding:4px 5px">
                                                <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                    style="color: var(--bg-color-0);font-size: 13px;">
                                                    حالة المشروع
                                                </div>
                                                <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                    <span
                                                        style="background:#28a745; color: #fff; padding: 0px 7px 1px!important; display: inline-block;position: relative ;font-size: 10px;border-radius:2px;line-height: 1.6;"
                                                        class=" p-1">
                                                        {{ __($project->status) }}
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col-12 row" style="padding:4px 5px">
                                                <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                    style="color: var(--bg-color-0);font-size: 13px;">
                                                    تاريخ النشر
                                                </div>
                                                <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                    @php
                                                        Carbon\Carbon::setLocale('ar_EH');
                                                        $time = $project->created_at->diffForHumans(Carbon\Carbon::now());
                                                    @endphp
                                                    {{ $time }}
                                                </div>
                                            </div>
                                            <div class="col-12 row" style="padding:4px 5px">
                                                <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                    style="color: var(--bg-color-0);font-size: 13px;">
                                                    المدة المتاحة
                                                </div>
                                                <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                    {{ $project->expected_deadline }} يوم
                                                </div>
                                            </div>
                                            <div class="col-12 row" style="padding:4px 5px">
                                                <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                    style="color: var(--bg-color-0);font-size: 13px;">
                                                    الميزانية
                                                </div>
                                                <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                    {{ number_format($project->budget->from) . ' - ' . number_format($project->budget->to) }}
                                                    ل.س
                                                </div>
                                            </div>
                                            <div class="col-12 row" style="padding:4px 5px">
                                                <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                    style="color: var(--bg-color-0);font-size: 13px;">
                                                    عدد المتقدمين
                                                </div>
                                                <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                    {{ $project->offers->count() }}
                                                </div>
                                            </div>
                                            <div class="col-12 row" style="padding:4px 5px">
                                                <div class="col-6 col-md-7 col-lg-6 col-xl-5 text-right  p-1"
                                                    style="color: var(--bg-color-0);font-size: 13px;">
                                                    متوسط العروض
                                                </div>
                                                <div class="col-6 col-md-5 col-lg-6 col-xl-7 px-0 text-right p-1 font-1">
                                                    @php
                                                        $prices = $project->offers->pluck('price')->toArray();
                                                    @endphp
                                                    {{ $prices ? array_sum($prices) / count($prices) : 0 }} ل.س
                                                </div>
                                            </div>
                                            <div class="col-12 p-0 my-3"
                                                style="height:1px;background: var(--bg-main-bg);"></div>
                                            <div class="col-12 px-2">
                                                <span class="px-1" style="padding:4px 5px;font-size:12px">صاحب
                                                    المشروع</span>
                                            </div>
                                            <div class="col-12 px-2 row d-flex align-items-center justify-content-between text-truncate"
                                                style="flex-wrap: nowrap;">
                                                <div class="d-flex align-items-center" style="width:calc(100% - 96px)">
                                                    <a href="/freelancers/{{ $project->user->id }}"
                                                        class="d-inline-block">
                                                        <img src="{{ asset('uploaded_images/users/' . ($project->user->profile_image ?? 'defualt.png')) }}"
                                                            style="width: 70px;border-radius:inherit;padding: 6px;;border-radius: 50%;height: 70px;object-fit: cover;">
                                                    </a>
                                                    <div class="d-inline-block px-1" style="font-size:15px">
                                                        <a href="/freelancers/{{ $project->user->id }}"
                                                            style="color: inherit;">
                                                            {{ $project->user->fullName }}
                                                        </a>
                                                        <div class="d-block mt-1" style="font-size:10px;opacity: 0.7;">
                                                            <span class="d-inline-block">
                                                                <span
                                                                    class="fas fa-map-marker-alt mb-1  pl-0 pl-md-1 "></span>
                                                                {{ $project->user->country->name ?? '' }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-0 py-1 py-lg-3 d-none d-lg-block">
                            <div class="col-12 p-0 main-nafez-box-styles" id="share-widget">
                                <div class="col-12 pt-3 pb-2" style="border-bottom: 1px solid var(--bg-main-bg);">
                                    <h5 style="font-size: 17px;color:var(--bg-color-0)"> شارك </h5>
                                </div>
                                <div class="col-12 px-0 py-2">
                                    <ul style="display: block;padding: 0px;list-style: none;position: relative;"
                                        class="mt-2 mb-2 text-center">
                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ Request::url() }}"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-facebook-f d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 14px ;border:1px solid var(--bg-main-bg);color: #3b5998;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://twitter.com/share?url={{ Request::url() }}"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-twitter d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #00aced;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ Request::url() }}"
                                            class="d-inline-block p-1" target="_blank">
                                            <span class="fab fa-linkedin-in d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #0073b1;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <a href="https://api.whatsapp.com/send?text={{ Request::url() }}"
                                            data-action="share/whatsapp/share" class="d-inline-block p-1"
                                            target="_blank">
                                            <span class="fab fa-whatsapp d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: #2bb641;cursor: pointer;border-radius: 0"></span>
                                        </a>
                                        <span style="cursor: pointer;" class="d-inline-block p-1 copy-referral-btn"
                                            data-url="{{ Request::url() }}"
                                            title="نسخ الرابط">
                                            <span class="fal fa-copy d-inline-block "
                                                style="width: 40px;height: 40px;padding: 11px 11px ;border:1px solid var(--bg-main-bg);color: var(--bg-color-0);cursor: pointer;border-radius: 0"></span>
                                        </span>
                                        <input type="text" id="referral-input" readonly=""
                                            class="form-control py-0  px-1 font-small"
                                            style="border:none!important;height: 20px;background: var(--bg-second-bg);z-index: -1;opacity: 0;position: absolute;">
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 py-1"></div>
    </div>
@endsection

@section('script')
    <script>
        $("#offer-form").validate({});
    </script>
@endsection
