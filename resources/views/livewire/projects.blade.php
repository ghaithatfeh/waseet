<div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
    <div class="col-12 px-0 pb-5">
        <div class="container pt-2 pt-md-2  " style="min-height: 90vh">
            <div class="col-12 row px-0">
                <div class="col-12 mb-2 px-0">
                    <div class="col-12 row d-flex justify-content-betweem px-2 px-md-0"
                        style="padding-top: 19px;padding-bottom: 19px;">
                        <h1 class="col-6 pl-1 pr-2 pr-md-3  pt-1 font-md-3 mb-0" style="font-size:15px">
                            المشاريع المعروضة
                        </h1>
                        <div class="col-6 text-left pl-1 pr-0 font-1 row justify-content-end">
                            <a href="/projects/create"
                                class="btn btn-primary hover-darker d-inline-block ml-1 font-md-1 px-2 px-lg-3"
                                style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: #fff;border-radius: 2px">
                                <span class="fas fa-plus" style="font-size: 13px;color: #fff"></span> أضف مشروعك
                                <span class="d-none d-md-inline">الآن</span>
                            </a>
                            <span
                                style="cursor: pointer;background: var(--bg-second-bg);color:var(--bg-font-4);border-radius: 2px"
                                class="btn py-1 px-2 d-md-none" onclick="$('.filter-aside').toggleClass('outside');">
                                <span class="fas fa-abacus"></span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4 col-lg-3 p-0 ">
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
                            <div class="col-12   border-0  px-0">
                                <div class="col-12 px-0 pb-5 " id="right-search-section">
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                        class=" py-2  pt-3 pt-md-0 px-2 mb-0  "> بحث </h2>
                                    <div class="col-12  px-2 mb-3  ">
                                        <input type="" name="key" class="form-control nafezly-filter "
                                            data-filter="key" value="" wire:model="search">
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
                                            <input type="checkbox" id="writing-translation" name="titles[]"
                                                data-ui="" data-filter="specialize" value="5"
                                                wire:model="categories" class="nafezly-filter" />
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
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                        class=" py-2  pt-3 px-2 mb-0 ">
                                        المهارات</h2>
                                    <div class="control-group py-2 px-2" style="min-height: 64px" wire:ignore>
                                        <select class="select3 px-0 border-0 nafezly-filter" multiple=""
                                            style="width: 100%;background: #fff;opacity: 0" size="1">
                                            @foreach ($all_skills as $skill)
                                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                        class=" py-2  pt-3 px-2 mb-0 ">
                                        الميزانية </h2>
                                    <div style="" dir="ltr" wire:ignore
                                        class="px-2 text-center nafezly-slider-projects-search nafezly-filter"
                                        style="direction: ltr">
                                        <input type="" name=""
                                            class="js-range-slider nafezly-transition pricing" style="opacity: 0"
                                            data-filter="pricing">
                                    </div>
                                    @section('script')
                                        <script>
                                            $('.select3').change(function() {
                                                let items = $('.selectize-input.items.not-full.has-options.has-items .item')
                                                let data = []
                                                items.each(() => {
                                                    data.push($(this).val())
                                                });
                                                Livewire.emit('set-skills', data[0])
                                            });

                                            $(".js-range-slider").ionRangeSlider({
                                                type: "double",
                                                skin: "round",
                                                values: [
                                                    "10,000", "50,000", "100,000", "200,000", "300,000", "500,000", "750,000",
                                                    "1,000,000", "1,500,000", "2,000,000"
                                                ],
                                                min: 0,
                                                max: 10,
                                                from: 0,
                                                to: 9,
                                                /*  grid: true,*/
                                                grid_snap: true,
                                                from_fixed: false, // fix position of FROM handle
                                                to_fixed: false,
                                                onFinish: function() {
                                                    $this = $('.js-range-slider');
                                                    let data = $this.val().replace(/,/g, '')
                                                    Livewire.emit('set-budget', data)
                                                },
                                            });
                                        </script>
                                    @endsection
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9 px-0 px-md-2">
                    <div class="col-12 px-0 pb-0 ">
                        <div class="col-12 px-0 search-response-container" wire:loading.class="loading-state">
                            <div class="col-12 pt-1 px-0 pb-0">
                                <div class="col-12 px-2">
                                    <div class="col-12 px-0 ">
                                        @foreach ($projects as $project)
                                            <div class="col-12 main-nafez-box-styles p-3 p-lg-4 mb-lg-3 mb-3 project-box"
                                                style="border-radius:5px;transition: 0.1s all ease-in-out;overflow: hidden;">
                                                <div class="col-12 p-0 row d-flex ">
                                                    <div class="col-12 col-lg-9 p-0">
                                                        <h2 style="font-size:16px;height: 23px;"
                                                            class="d-block text-truncate overflow-hidden m-0">
                                                            <a href="projects/{{ $project->id }}"
                                                                style="color: var(--bg-color-3);"
                                                                class="text-truncate">{{ $project->title }}</a>
                                                        </h2>
                                                        <div class="col-12 py-2 px-0">
                                                            <h3 class="naskh font-1 m-0 col-12 col-lg-10 px-0"
                                                                style="color:var(--bg-font-4);line-height: 1.8;overflow: hidden;height: 48px">
                                                                {{ $project->description }}
                                                            </h3>
                                                        </div>
                                                        <div class="col-12 px-0 row align-items-center justify-content-between text-truncate mb-2 mb-lg-0 d-lg-flex d-none"
                                                            style="flex-wrap: nowrap;">
                                                            <div class="d-flex align-items-center">
                                                                <a href="/freelancers/{{ $project->user->id }}"
                                                                    class="d-inline-block">
                                                                    <img src="{{ asset('uploaded_images/users/' . ($project->user->profile_image ?? 'defualt.png')) }}"
                                                                        style="width: 40px;border-radius:inherit;padding: 3px;;border-radius: 50%;height: 40px;border:1px solid rgb(139 139 139 / 18%);object-fit: cover;">
                                                                </a>
                                                                <div class="d-inline-block pl-0 pr-3"
                                                                    style="font-size:13px">
                                                                    <a href="/freelancers/{{ $project->user->id }}"
                                                                        style="color: inherit;opacity: .8;">
                                                                        {{ $project->user->first_name . ' ' . $project->user->last_name }}
                                                                    </a>
                                                                    <div class="d-block mt-1"
                                                                        style="font-size:10px;opacity: 0.6;">
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
                                                    <div class="col-12 col-lg-3 p-0">
                                                        <div class="d-none d-lg-block  px-1">
                                                            <span class="d-inline-block kufi "
                                                                style="font-size: 12px;color: #777777">
                                                                <span class="far fa-usd-circle " aria-hidden="true"
                                                                    style="font-size: 12px;width:18px;text-align: center;"></span>
                                                                {{ number_format($project->budget->from) . ' - ' . number_format($project->budget->to) }}
                                                                ل.س
                                                            </span>
                                                        </div>
                                                        <div class="d-none d-lg-block px-1">
                                                            <span class="d-inline-block kufi "
                                                                style="font-size: 12px;color: #777777">
                                                                <span class="far fa-business-time " aria-hidden="true"
                                                                    style="font-size: 12px;width:18px;text-align: center;"></span>
                                                                {{ $project->expected_deadline }} أيام
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-lg-block px-1">
                                                            <span class="d-inline-block kufi "
                                                                style="font-size: 12px;color: #777777">
                                                                <span class="far fa-ballot " aria-hidden="true"
                                                                    style="font-size: 12px;width:18px;text-align: center;"></span>
                                                                1 عروض
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-lg-block px-1">
                                                            <span class="d-inline-block kufi "
                                                                style="font-size: 12px;color: #777777">
                                                                <span class="far fa-clock " aria-hidden="true"
                                                                    style="font-size: 12px;width:18px;text-align: center;"></span>
                                                                @php
                                                                    Carbon\Carbon::setLocale('ar_EH');
                                                                    $time = $project->created_at->diffForHumans(Carbon\Carbon::now());
                                                                @endphp
                                                                {{ $time }}
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-lg-none px-1">
                                                            <span class="d-inline-block kufi "
                                                                style="font-size: 12px;color: #777777">
                                                                <span class="far fa-map-marker-alt" aria-hidden="true"
                                                                    style="font-size: 12px;width:18px;text-align: center;"></span>
                                                                {{ $project->user->country->name ?? '' }}
                                                            </span>
                                                        </div>
                                                        <div class="d-inline-block d-lg-block px-1">
                                                            <span class="d-inline-block kufi "
                                                                style="font-size: 12px;color: #777777">
                                                                <span class="fas fa-check-circle " aria-hidden="true"
                                                                    style="font-size: 12px;width:18px;text-align: center;color:#28a745;"></span>
                                                                {{ $project->status }}
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                        <div class="col-12 pb-1 pt-2">
                                            {{ $projects->links('pagination-links') }}
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
