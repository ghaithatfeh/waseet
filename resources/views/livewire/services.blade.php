<div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
    <div class="col-12 px-0">
        <div class="container pt-2 pt-md-2 d-flex   " style="min-height: 90vh">
            <div class="col-12 px-0 row">
                <div class="col-12 mb-2 px-0">
                    <div class="col-12 row d-flex justify-content-betweem px-2 px-md-0"
                        style="padding-top: 19px;padding-bottom: 19px;">
                        <h1 class="col-6 pl-1 pr-2 pr-md-3  pt-1 font-md-3 mb-0" style="font-size:15px">
                            الخدمات المصغرة
                        </h1>
                        <div class="col-6 text-left pl-1 pr-0 font-1 row justify-content-end">
                            <a href="/services/create"
                                class="btn btn-primary hover-darker d-inline-block ml-1 font-md-1 px-2 px-lg-3"
                                style="border-radius: 0px;font-size: 13px;margin-top:1px;border:1px solid var(--bg-color-3);color: #fff;border-radius: 2px">
                                <span class="fas fa-plus" style="font-size: 13px;color: #fff"></span> أضف خدمتك
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
                                        <input type="" name="key" class="form-control nafezly-filter " data-filter="key"
                                            value="" wire:model="search">
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)" class=" py-2  pt-3 px-2 mb-0 ">
                                        التصنيفات </h2>
                                    <div class="control-group pt-2 px-2">
                                        <div class="col-12 px-0 ">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-user-tie ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="business"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- أعمال وخدمات
                                                    استشارية وإدارية </label>
                                                <input type="checkbox" id="business" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="1"
                                                    class="nafezly-filter main-cat-input" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>

                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="ecommerce-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تجارة الكترونية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="voice-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات صوتية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="legal-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات قانونية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="finance-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات مالية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="research-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- دراسة و ابحاث
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="business-tips"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- نصائح تجارية
                                                    واعمال
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                        <div class="col-12 px-0 ">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-code ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="development"
                                                    style="cursor: pointer;color: var(--bg-font-4)">برمجة، تطوير المواقع
                                                    والتطبيقات </label>
                                                <input type="checkbox" id="development" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="2"
                                                    class="nafezly-filter main-cat-input" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="web-backend-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- برمجة مواقع
                                                    الانترنت
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="html-css-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- برمجة CSS و HTML
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="content-management-systems"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- أنظمة ادارة محتوى
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="mobile-development"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- برمجة تطبيقات
                                                    الجوال
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="development-tech-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات تقنية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                        <div class="col-12 px-0 py-1">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-paint-brush-alt ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="design"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تصميم وأعمال فنية
                                                    وإبداعية </label>
                                                <input type="checkbox" id="design" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="3"
                                                    class="nafezly-filter main-cat-input" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0" style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="logos-design"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تصميم الشعارات
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="covers-design"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تصميم الاغلفة
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="banners-design"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تصميم البانرات
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="business-cards"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تصميم بطاقات أعمال
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="presentation-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تصميم عروض تقديمية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="video"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- فيديو ومونتاچ
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="photo-editing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تعديل الصور
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                        <div class="col-12 px-0 ">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-bullseye-arrow ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="marketing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تسويق الكتروني
                                                    ومبيعات </label>
                                                <input type="checkbox" id="marketing" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="4"
                                                    class="nafezly-filter main-cat-input" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="website-advertising"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- إعلانات المواقع
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="social-media-marketing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تسويق عبر الشبكات
                                                    الاجتماعية </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="seo-services"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات SEO </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="reviews"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- ترويج ومراجعات
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                        <div class="col-12 px-0 ">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-pen-alt ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="writing-translation"
                                                    style="cursor: pointer;color: var(--bg-font-4)">كتابة، صناعة محتوى،
                                                    ترجمة ولغات </label>
                                                <input type="checkbox" id="writing-translation" name="titles[]"
                                                    data-ui="" data-filter="specialize" value="5"
                                                    class="nafezly-filter main-cat-input" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="writing-manual-pages"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تفريغ صفحات يدوية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="writing-audio"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تفريغ ملفات صوتية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="writing-proof-writing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات تدقيق لغوي
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="writing-translation-subcat"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- خدمات ترجمة
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="writing-resume"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- كتابة السيرة
                                                    الذاتية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="writing-copy-writing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- كتابة مقالات
                                                    ومراجعات </label>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                        <div class="col-12 px-0 ">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-headset ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="training"
                                                    style="cursor: pointer;color: var(--bg-font-4)">تدريب، تعليم ومساعدة
                                                    عن بعد </label>
                                                <input type="checkbox" id="training" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="6"
                                                    class="nafezly-filter main-cat-input" wire:model="categories" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="learn-programming"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تعلم البرمجة
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="learn-marketing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تعلم التسويق
                                                    الاكتروني </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="learn-designing"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تعلم التصميم
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="learn-languages"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- تعلم اللغات
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 pl-0 " style="padding-right: 27px">
                                            <label class="control control-checkbox mb-0">
                                                <label class="kufi font-1 mb-1" for="learn-school-help"
                                                    style="cursor: pointer;color: var(--bg-font-4)">- مساعدات اكاديمية
                                                </label>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                        <div class="col-12 px-0 ">
                                            <label class="control control-checkbox main-cat mb-2">
                                                <span class="fal fa-ellipsis-h-alt ml-1 " aria-hidden="true"
                                                    style="color: var(--bg-font-4)"></span>
                                                <label class="kufi font-1 d-inline " for="other"
                                                    style="cursor: pointer;color: var(--bg-font-4)">أمور أخرى </label>
                                                <input type="checkbox" id="other" name="titles[]" data-ui=""
                                                    data-filter="specialize" value="7" wire:model="categories"
                                                    class="nafezly-filter main-cat-input" />
                                                <div class="control_indicator"></div>
                                            </label>
                                        </div>
                                        <div class="col-12 py-2 px-0">
                                        </div>
                                    </div>
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                        class="py-2 pt-3 px-2 mb-0">المهارات</h2>
                                    <div class="control-group py-2 px-2" style="min-height: 64px" wire:ignore>
                                        <select class="select3 px-0 border-0 nafezly-filter" multiple=""
                                            style="width: 100%;background: #fff;opacity: 0" data-filter="skills"
                                            size="1">
                                            @foreach ($all_skills as $skill)
                                                <option value="{{$skill->id}}">{{$skill->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @section('script')
                                        <script>
                                            $('.select3').change(function(){
                                                let items = $('.selectize-input.items.not-full.has-options.has-items .item')
                                                let data = []
                                                items.each(() => {
                                                    data.push($(this).val()) 
                                                });
                                                Livewire.emit('set-skills', data[0])
                                            })
                                        </script>
                                    @endsection
                                    <h2 style="font-size: 16px;color: var(--bg-color-0)"
                                        class=" py-2  pt-3 px-2 mb-0 "> السعر </h2>
                                    <div style="" dir="ltr"
                                        class="px-2 text-center nafezly-slider-projects-search nafezly-filter"
                                        style="direction: ltr">
                                        <input type="" name=""
                                            class="js-range-slider-service nafezly-transition pricing"
                                            style="opacity: 0" data-filter="pricing-service">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-8 col-lg-9 px-0 px-md-1 mb-5 search-response-container">
                    <div class="col-12 row px-0">
                        @foreach ($services as $service)
                            <div class="px-lg-3 px-2 pb-3 pb-md-4 col-6 col-sm-6 col-md-4">
                                <div class="col-12 row main-nafez-box-styles service-card p-0 rounded">
                                    <div class="col-12 position-relative" style="padding-top: 70%;">
                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                            class="d-block">
                                            <img src="{{ asset('uploaded_images/services/' . ($service->images[0]->image_name ?? '')) }}"
                                                style="object-fit: cover;vertical-align: middle;position: absolute;top: 0;left: 0;max-height: 100%;width: 100%!important;height: 100%;padding: 8px;">
                                        </a>
                                    </div>
                                    <div class="col-12 font-1 p-2 ">
                                        <a href="{{ route('services.show', ['service' => $service]) }}"
                                            class="d-block" style="height:60px;overflow: hidden;">
                                            <h2 class="col-12 py-1 px-0"
                                                style="line-height: 1.8;color:var(--bg-color-0);font-size: 14px;">
                                                {{ $service->title }}
                                            </h2>
                                        </a>
                                        <div class="col-12 py-1 px-0" style="height:23px;overflow:hidden;">
                                            <a href="/service/{{ $service->category->id }}" class="d-block"
                                                style="color:var(--bg-color-0);">
                                                <span class="fal fa-tag"
                                                    style="color:var(--bg-color-3);font-size: 11px;"></span>
                                                <span style="opacity: .7;font-size: 11px;">
                                                    {{ $service->category->name }}
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-12 nafezly-divider-full mb-0 mt-1 " style="min-height: 1px;">
                                    </div>
                                    <div class="col-12 px-0 d-flex py-1" style="justify-content:space-between">
                                        <div class="d-inline-block py-2 pr-3"
                                            style="height: 36px;overflow: hidden;width: auto;">
                                            <span style="color:#1dbf73;font-size: 14px;font-weight: bold"
                                                class="d-inline-block text-nowrap">
                                                {{ $service->price }}
                                                <span class="fas fa-usd-circle" style="font-size:12px"></span>
                                            </span>
                                        </div>
                                        <div class="d-inline-block py-2 d-flex justify-content-end align-items-center float-left"
                                            style="padding-left: 13px;">
                                            <div class="col-12 p-0" style="white-space: nowrap;">
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
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 px-0"
                                        style="margin: auto;border-top: 1px solid var(--bg-main-bg)">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-12 px-0">
                        {{ $services->links('pagination-links') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
