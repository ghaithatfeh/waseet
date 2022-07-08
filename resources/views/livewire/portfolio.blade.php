<div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
    <div class="col-12 px-0">
        <div class="container pt-2 pt-md-2   " style="min-height: 90vh">
            <div class="col-12 row px-0">
                <div class="col-12 mb-2 px-0">
                    <div class="col-12 row d-flex justify-content-betweem px-2 px-md-0"
                        style="padding-top: 19px;padding-bottom: 19px;">
                        <h1 class="col-6 pl-1 pr-2 pr-md-3  pt-1 font-md-3 mb-0" style="font-size:15px">
                            معرض الأعمال
                        </h1>
                        <div class="col-6 text-left pl-1 pr-0 font-1 row justify-content-end">
                            <a href="/portfolios/create"
                                class="btn btn-primary hover-darker d-inline-block ml-1 font-md-1 px-2 px-lg-3"
                                style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: #fff;border-radius: 2px">
                                <span class="fas fa-plus" style="font-size: 13px;color: #fff"></span> أضف عملك
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
                                        class=" py-2  pt-3 pt-md-0 px-2 mb-0"> بحث </h2>
                                    <div class="col-12  px-2 mb-3  ">
                                        <input type="" name="key" class="form-control nafezly-filter "
                                            data-filter="key" value="" wire:model="search">
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                        التصنيفات </h2>
                                    <div class="control-group py-2 px-2 ">
                                        @php
                                            $categories_icons = ['fa-user-tie', 'fa-code', 'fa-paint-brush', 'fa-bullseye-arrow', 'fa-pen-alt', 'fa-headset', 'fa-ellipsis-h-alt'];
                                        @endphp
                                        @foreach ($all_categories as $i => $category)
                                            <label class="control control-checkbox pb-2">
                                                <span class="fal {{$categories_icons[$i]}} ml-1 d-inline d-md-none d-xl-inline "
                                                    aria-hidden="true" style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="category-{{ $category->id }}"
                                                    style="cursor: pointer;color: var(--bg-font-4)">{{ $category->name }}
                                                </label>
                                                <input type="checkbox" id="category-{{ $category->id }}" name="titles[]"
                                                    data-ui="" data-filter="specialize" value="{{ $category->id }}"
                                                    class="nafezly-filter" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        @endforeach
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                        المهارات</h2>
                                    <div class="control-group py-2 px-2" style="min-height: 64px" wire:ignore>
                                        <select class="select3 px-0 border-0 nafezly-filter" multiple=""
                                            style="width: 100%;background: #fff;opacity: 0" data-filter="skills"
                                            size="1">
                                            @foreach ($all_skills as $skill)
                                                <option value="{{ $skill->id }}">{{ $skill->name }}</option>
                                            @endforeach
                                        </select>
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
                                        </script>
                                    @endsection
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9 px-2 px-md-1 search-response-container"
                    wire:loading.class="loading-state">
                    <div class="col-12 row px-0">
                        @foreach ($portfolios as $portfolio)
                            <div class="col-6 col-sm-4 col-md-6 col-lg-4 p-1 p-md-2 portfolio-card">
                                <div class="col-12 px-0">
                                    <div class="col-12 p-2 main-nafez-box-styles" style="border-radius: 5px;">
                                        <div class="col-12 p-0 p-md-1 d-flex  row"
                                            style="border-radius: 0px!important;overflow: hidden;position: relative;">
                                            <div class="col-12 p-0 row ">
                                                <a href="/portfolios/{{ $portfolio->id }}"
                                                    class="pb-0 d-inline-block col-12 px-0">
                                                    <div class="col-12 px-0" style="">
                                                        <div class="col-12 px-0"
                                                            style="overflow: hidden;border-radius: 4px!important">
                                                            <img src="{{ asset('uploaded_images/portfolios/' . $portfolio->main_image) }}"
                                                                style="width: 100%!important;padding: 0px;border-radius: 4px!important"
                                                                class="portfolio-img">
                                                            <div class="col-12 px-0"
                                                                style="background-image: -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(81%, rgba(0, 0, 0, 0.6)));height: 50px;position: absolute;bottom: 0px;z-index: 0;border-radius: 0px 0px 0px 0px">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class=" pl-2  py-1 col-12"
                                                    style="position: absolute;z-index: 1;bottom: 10px;right: 0px;border-radius: 0px 50px 50px 0px">
                                                    <div class="col-12 px-0 almaria row text-right"
                                                        style="overflow: hidden;">
                                                        <a href="/freelancers/{{ $portfolio->user->id }}">
                                                            <img src="{{ asset('uploaded_images/users/' . ($portfolio->user->profile_image ?? 'defualt.png')) }}"
                                                                style="width: 25px;height: 25px;border-radius: 50%!important;"
                                                                class=" d-inline-block"
                                                                alt="{{ $portfolio->user->fullName }}">
                                                        </a>
                                                        <div style="width: calc(100% - 25px);display: inline-block;position: relative;top: -4px;height:25px"
                                                            class="pt-1 text-right ">
                                                            <div style="font-size: 9px;position: relative;top:5px;height: 20px;overflow: hidden; color: #f1f1f1;"
                                                                class="d-flex pr-0 pl-2 portfolio-card-user-name text-right row col-12">
                                                                <div class="col-9 px-2">
                                                                    <a href="/freelancers/{{ $portfolio->user->id }}"
                                                                        style="color: #f1f1f1;font-size: 12px;">
                                                                        {{ $portfolio->user->fullName }}
                                                                    </a>
                                                                </div>
                                                                <div class="col-3 pl-2 pr-0 pt-1 text-left "
                                                                    style="font-size: 10px">
                                                                    {{ $portfolio->viewers->count() }} <span
                                                                        class="fas fa-eye"></span>
                                                                </div>
                                                            </div>
                                                            <h2 style="font-size: 9px;position: relative;bottom:-60px;height: 20px;overflow: hidden; color: #f1f1f1;"
                                                                class="d-block px-2 portfolio-card-details text-right">
                                                                {{ $portfolio->title }}
                                                            </h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 pb-1 pt-2">
                        {{ $portfolios->links('pagination-links') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
