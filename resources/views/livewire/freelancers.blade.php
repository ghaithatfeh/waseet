<div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
    <div class="col-12 px-0">
        <div class="container pt-md-4 pt-2   " style="min-height: 90vh">
            <div class="col-12 row px-0">
                <div class="col-12 col-md-4 col-lg-3 p-0 ">
                    <div class="col-12 px-2">
                        <div class="col-12 row d-flex justify-content-betweem px-0"
                            style="padding-top: 19px;padding-bottom: 19px;">
                            <h1 class="col px-1 font-2 pt-1 font-lg-3">
                                المنفذين
                            </h1>
                            <div class="col text-left px-1 font-1 d-md-none">
                                <span style="cursor: pointer;background: var(--bg-second-bg);color:var(--bg-font-4);"
                                    class="btn py-1 px-2" onclick="$('.filter-aside').toggleClass('outside');">
                                    <span class="fas fa-abacus"></span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <style type="text/css">
                        .irs-bar {
                            position: relative !important;
                        }
                    </style>
                    <style type="text/css">
                        .tt {
                            display: inline-block;
                            float: right;
                            margin-left: 14px;

                        }

                        .nafezly-slider-projects-search * {
                            direction: ltr;
                        }

                        .irs-line {
                            height: 12px !important;
                            cursor: pointer;
                            position: relative;
                            top: 32px !important
                        }

                        .irs-bar {
                            height: 12px !important;
                            cursor: pointer;
                            position: relative;
                            top: 21px !important
                        }

                        .irs-handle.to,
                        .irs-handle.from.type_last {
                            cursor: pointer;
                        }

                        option,
                        .irs-from,
                        .irs-to,
                        .irs-max,
                        .irs-min {
                            font-family: '';
                        }

                        .page-link:focus {
                            z-index: 2;
                            outline: 0;
                            box-shadow: unset !important;
                        }
                    </style>
                    <div class="col-12  mb-3  py-md-0 px-0 px-md-1 position-md-relative d-md-block filter-aside outside"
                        style="width:100%">
                        <div class="col-12 d-md-none" style="border-bottom: 1px solid var(--bg-main-bg)">
                            <div class="col-12 row d-flex justify-content-betweem px-0"
                                style="padding-top: 19px;padding-bottom: 19px;">
                                <div class="col px-1 font-1">
                                    <a href="#" onclick="$('.filter-aside').toggleClass('outside');"
                                        style="color:var(--bg-color-3)">
                                        <span class="fas fa-chevron-right pl-1"
                                            style="font-size: 22px;color:var(--bg-color-3)"></span>
                                        <span style="position: relative;top: -2px">عودة</span>
                                    </a>
                                </div>
                                <div class="col text-left px-1 pt-1 font-1">
                                    <a href="#" style="color:var(--bg-color-3)"
                                        onclick="$('.filter-aside').toggleClass('outside');">
                                        نتائج البحث
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 px-3 px-md-0 py-md-0 py-3 aside-filter-container">
                            <div class="col-12 border-0 px-0">
                                <div class="col-12 px-0 pb-5 " id="right-search-section">
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                        class=" py-2  pt-3 pt-md-0 px-2 mb-0  "> بحث </h2>
                                    <div class="col-12  px-2 mb-3  ">
                                        <input wire:model="search" type="" name="key"
                                            class="form-control nafezly-filter " data-filter="key" value="">
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                        التصنيفات </h2>
                                    <div class="control-group py-2 px-2 ">
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-user-tie ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="business"
                                                style="cursor: pointer;color: var(--bg-font-4)">أعمال وخدمات
                                                استشارية
                                                وإدارية </label>
                                            <input type="checkbox" id="business" name="titles[]" data-ui=""
                                                data-filter="specialize" value="1" class="nafezly-filter"
                                                wire:model="categories" />
                                            <div class="control_indicator"></div>
                                        </label>
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-code ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="development"
                                                style="cursor: pointer;color: var(--bg-font-4)">برمجة، تطوير المواقع
                                                والتطبيقات </label>
                                            <input type="checkbox" id="development" name="titles[]" data-ui=""
                                                data-filter="specialize" value="2" class="nafezly-filter"
                                                wire:model="categories" />
                                            <div class="control_indicator"></div>
                                        </label>
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-paint-brush-alt ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="design"
                                                style="cursor: pointer;color: var(--bg-font-4)">تصميم وأعمال فنية
                                                وإبداعية </label>
                                            <input type="checkbox" id="design" name="titles[]" data-ui=""
                                                data-filter="specialize" value="3" class="nafezly-filter"
                                                wire:model="categories" />
                                            <div class="control_indicator"></div>
                                        </label>
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-bullseye-arrow ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="marketing"
                                                style="cursor: pointer;color: var(--bg-font-4)">تسويق الكتروني
                                                ومبيعات
                                            </label>
                                            <input type="checkbox" id="marketing" name="titles[]" data-ui=""
                                                data-filter="specialize" value="4" class="nafezly-filter"
                                                wire:model="categories" />
                                            <div class="control_indicator"></div>
                                        </label>
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-pen-alt ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="writing-translation"
                                                style="cursor: pointer;color: var(--bg-font-4)">كتابة، صناعة محتوى،
                                                ترجمة ولغات </label>
                                            <input type="checkbox" id="writing-translation" name="titles[]" data-ui=""
                                                data-filter="specialize" value="5" wire:model="categories"
                                                class="nafezly-filter" />
                                            <div class="control_indicator"></div>
                                        </label>
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-headset ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="training"
                                                style="cursor: pointer;color: var(--bg-font-4)">تدريب، تعليم ومساعدة
                                                عن
                                                بعد </label>
                                            <input type="checkbox" id="training" name="titles[]" data-ui=""
                                                data-filter="specialize" value="6" class="nafezly-filter"
                                                wire:model="categories" />
                                            <div class="control_indicator"></div>
                                        </label>
                                        <label class="control control-checkbox pb-2">
                                            <span class="fal fa-ellipsis-h-alt ml-1 d-inline d-md-none d-xl-inline "
                                                aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                            <label class="kufi font-1 d-inline " for="other"
                                                style="cursor: pointer;color: var(--bg-font-4)">أمور أخرى </label>
                                            <input type="checkbox" id="other" name="titles[]" data-ui=""
                                                data-filter="specialize" value="7" class="nafezly-filter"
                                                wire:model="categories" />
                                            <div class="control_indicator"></div>
                                        </label>
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                        المهارات</h2>
                                    <div class="control-group py-2 px-2" style="min-height: 64px">
                                        <select class="select3 px-0 border-0 nafezly-filter" multiple=""
                                            style="width: 100%;background: #fff;opacity: 0" size="1">
                                            <option value="kayako">Kayako</option>
                                            <option value="vuejs">VueJs</option>
                                        </select>
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                        متصل </h2>
                                    <div class="control-group py-2 px-2">
                                        <label class="control control-checkbox">
                                            <span class="fas fa-circle ml-1 " aria-hidden="true"
                                                style="color: green"></span>
                                            <label class="kufi font-1" for="online"
                                                style="cursor: pointer;color: var(--bg-font-4)">متصل الآن </label>
                                            <input type="checkbox" id="online" name="titles[]" data-ui=""
                                                data-filter="online" value="1" class="nafezly-filter" 
                                                wire:model="online"/>
                                                @php
                                                    // dd($categories);
                                                @endphp
                                            <div class="control_indicator"></div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8  col-lg-9 px-0 px-md-1 pt-md-4 search-response-container">
                    <script type="text/javascript">
                        var get_body = document.getElementById("body");
                        if (!get_body) {
                            location.reload();
                        }
                    </script>
                    <div class="col-12 row px-0">
                        @foreach ($users as $user)
                            <div class=" mt-0 col-6 col-sm-6 col-md-6 col-lg-4 p-1 p-lg-2  pb-2 text-center single-profile-card"
                                style="display: inline-block;  max-width: 100%;">
                                <div class="main-nafez-box-styles px-0 py-0 text-center profile-search-card rounded-0"
                                    style="border-radius: 8px!important;border:1px solid var(--bg-main-bg)!important;overflow: hidden;">
                                    <div
                                        style="width: 90px;background: var(--bg-second-bg);display: inline-block;border-radius: 50%!important;box-shadow: 0px 0px 12px var(--bg-main-bg);max-width: 100%; height: 90px; left: 0;   right: 0;margin: 10px auto;">
                                        <a href="/freelancers/{{ $user->id }}">
                                            <img src="{{ asset('uploaded_images/users/' . ($user->profile_image ?? 'defualt.png')) }}"
                                                style="width: 100%;border-radius:inherit;padding: 6px;height: 100%;border-radius: 50%;">
                                        </a>
                                    </div>
                                    <h2 class="text-center mb-0 pb-0   almaria font-1 font-md-2"
                                        style="color: var(--bg-color-0) ;font-size: 16px;text-transform: capitalize;">
                                        <a href="/freelancers/{{ $user->id }}" style="color: inherit;">
                                            {{ $user->first_name . ' ' . $user->last_name }}
                                        </a>
                                        @if ($user->last_login == null)
                                            <span class="fas fa-circle" style="color:#3bc100;font-size:12px"></span>
                                        @endif
                                    </h2>
                                    <h2 class="text-center px-1  kufi mt-1 mb-0 font-small pt-1 "
                                        style="opacity: 0.65;">
                                        <span class="d-inline-block">
                                            <span class="fas fa-user-tie mb-1 pl-0 pl-md-1  "></span>
                                            {{ $user->job_name }}
                                        </span>
                                        &nbsp;
                                        <span class="d-inline-block">
                                            <span class="fas fa-map-marker-alt pl-0 pl-md-1"></span>
                                            {{ $user->country->name ?? '' }}
                                        </span>
                                    </h2>
                                    <h6 class="text-center pt-1" style="color: #c5c5c5">
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                        <span class="fas fa-star"
                                            style="color: var(--bg-color-4);font-size:10px;"></span>
                                    </h6>
                                    <div class="col-12 py-3" style="background: var(--bg-second-bg)"><a
                                            href="/freelancers/{{ $user->id }}" style="display: block;"><span
                                                class="btn btn-success text-center hover-darker col-12 font-1"
                                                style="background: var(--bg-color-3);border:none;border-radius: 4px;color: #fff">
                                                الملف الشخصي</span></a></div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 row px-0 pt-0 pb-4">
                        {{ $users->links('pagination-links') }}
                    </div>
                    @section('script')
                        <script>
                            $(function() {
                                $('[data-toggle="popover"]').popover({
                                    trigger: "hover"
                                });
                            });
                        </script>
                    @endsection
                </div>
            </div>
        </div>
    </div>
</div>
