@extends('layouts.app')
@section('content')
    <div class="col-12 px-0 " id="main-content" style="transition:all  0.5s  ease-in-out!important;">
        <style type="text/css">
            .message_seen_status span.active {
                color: var(--bg-color-3)
            }

            .user-activity-status {
                color: #b4b4b4;
            }

            .user-activity-status.active {
                color: #4caf50 !important;
            }

            .message>div>span:nth-of-type(1) {
                font-size: 10px !important;
            }

            .single-profile-card {
                padding-bottom: 20px !important
            }

            .deal-tabs .nav-tabs .nav-item.show .nav-link,
            .nav-tabs .nav-link.active {
                color: var(--bg-color-0);
                background-color: linear-gradient(rgba(0, 0, 0, .05), rgba(0, 0, 0, .05));
                border-color: var(--bg-main-bg) var(--bg-main-bg) var(--bg-second-bg);
                background: var(--bg-second-bg);

            }

            .deal-tabs .nav-link {
                color: var(--bg-color-0);
            }

            .deal-tabs.nav-tabs {
                border-bottom: 1px solid var(--bg-main-bg)
            }
        </style>
        <div class="col-12 px-0 pb-5">
            <div class="container pt-2 d-flex  pb-5" style="min-height: 80vh">
                <div class="col-12 row px-0 my-auto">
                    <div class="col-12 col-md-4   order-2 order-md-2 px-0 p-md-2 mt-2 mt-md-2">
                        <div class="col-12 px-0">
                            <div class="col-12 px-0">
                                <div class="col-12 px-0 row main-nafez-box-styles mb-4">
                                    <div class="col-12 px-0 pt-3 pb-2 border-bottom row"
                                        style="border-color: var(--bg-main-bg)!important;">
                                        <div class="col px-0">
                                            <h5 style="color: var(--bg-color-0);font-size: 17px" class="px-3 pb-0 mb-2 ">
                                                معلومات</h5>
                                        </div>
                                    </div>
                                    <div class="col-12 px-2 row border-bottom "
                                        style="border-color: var(--bg-main-bg)!important;min-height: 45px;">
                                        <div class="col-4 p-2 d-flex" style="font-size: 12px;align-items: center;">
                                            بخصوص
                                        </div>
                                        <div class="col-8 p-2 d-flex" style="color: #28a542;align-items: center;">
                                            <a href="https://nafezly.com/service/2562-%D8%AA%D8%B5%D9%85%D9%8A%D9%85-%D8%B5%D9%81%D8%AD%D8%A9-%D9%88%D9%8A%D8%A8-%D8%A8%D8%A5%D8%B3%D8%AA%D8%AE%D8%AF%D8%A7%D9%85-Adobe-XD-%D8%A3%D9%88-Figma"
                                                style="font-size:12px"><span class="fal fa-info-circle"></span> الخدمة :
                                                تصميم صفحة
                                                ويب بإستخدام...</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-8   order-1 order-md-1 px-0 p-md-2 mt-2 mt-md-2">
                        <div class="px-0 main-nafez-box-styles ">
                            <div class="col-12 p-0 ">
                                <div class="col-12 p-0  row " style="border-bottom: 1px solid var(--bg-main-bg);   ">
                                    <div class="col-10 px-0">
                                        <h5 style="color: var(--bg-font-4);font-size: 17px;"
                                            class="m-0 p-0 font-2 font-md-2  p-3">
                                            <span class="fal fa-envelope"></span> &nbsp; مراسلة سامح أشرف
                                        </h5>
                                    </div>
                                    <div class="col-2 px-0 text-left ">
                                        <span class="d-inline-block   text-center"
                                            style="position: relative;width: 52px;cursor: pointer;padding: 7px 0px 0px;text-align: center;height: 52px;border-right: 1px solid var(--bg-main-bg);"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="https://nafezly-production.s3.eu-west-3.amazonaws.com/uploads/avatars/small/5325_1608384246_5fddfef6ec66e.jpg"
                                                style="width: 36px;border-radius: 50%!important;padding: 1px;height: 36px;border:2px solid var(--bg-second-bg);background: var(--bg-second-bg);border:1px solid #ddd"
                                                alt="الصورة الشخصية">
                                            <div class="dropdown-menu p-0 " aria-labelledby="dropdownMenuButton"
                                                style="padding: 0px 0px ;box-shadow: 0 0px 12px rgba(0,0,0,0.175); left: -47px;width: 170px!important">
                                                <span class="fas fa-caret-up"
                                                    style="color: var(--bg-second-bg);position: absolute;top:-13px;left: 12%;font-size: 21px"></span>
                                                <div style="  padding: 7px 0px "
                                                    class="col-12 row text-right dropdown-items">
                                                    <ul
                                                        style="list-style: none;padding: 0px 0px;width: 100%;margin-bottom: 0px">
                                                        <a href="https://nafezly.com/u/Sameh_Elalfi"
                                                            class="py-2 px-3  d-block hover-light">
                                                            <li style="font-size: 14px;color: var(--bg-color-0);height: 20px;    word-break: break-all; overflow: hidden;"
                                                                class=""> <span class="fal fa-user ml-2"></span>
                                                                سامح
                                                                أشرف </li>
                                                        </a>
                                                        <a href="https://nafezly.com/u/Sameh_Elalfi/portfolio"
                                                            class="py-2 px-3  d-block hover-light">
                                                            <li style="font-size: 14px;color: var(--bg-color-0)"
                                                                class=""> <span class="fal fa-image ml-2"></span>
                                                                الأعمال </li>
                                                        </a>
                                                        <a href="https://nafezly.com/u/Sameh_Elalfi/services"
                                                            class="py-2 px-3  d-block hover-light">
                                                            <li style="font-size: 14px;color: var(--bg-color-0)"
                                                                class=""> <span
                                                                    class="fal fa-hands-helping ml-2"></span>
                                                                الخدمات </li>
                                                        </a>
                                                        <a href="https://nafezly.com/u/Sameh_Elalfi/projects"
                                                            class="py-2 px-3  d-block hover-light">
                                                            <li style="font-size: 14px;color: var(--bg-color-0)"
                                                                class=""> <span class="fal fa-suitcase ml-2"></span>
                                                                المشاريع </li>
                                                        </a>
                                                    </ul>
                                                </div>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 px-0">
                                <form class="col-12 px-0 " id="message-store-form">
                                    <input type="hidden" name="_token" value="SOgYh8p4i0kJUzkHKzLYuuTNh0j2tunWR1MnSE42">
                                    <div class="col-12     p-0 justify-content-center pt-3  ">
                                        <div class="col-12 messaging-area px-2 px-md-0">
                                            <div class="col-12 px-1 px-lg-3 row py-2 message" style="direction: rtl"
                                                id='127988'>
                                                <div class="col-12 col-md-10 col-lg-9 col-xl-8 p-2 row"
                                                    style="direction: rtl">
                                                    <div style="width:60px;"
                                                        class="text-center d-none d-md-flex align-items-end">
                                                        <div class="d-inline-block">
                                                            <a href='https://nafezly.com/u/malik_malik'
                                                                class="d-inline-block text-center">
                                                                <img src='/site_images/user.png'
                                                                    style='width: 45px;height: 45px;display: inline-block;border-radius: 50%!important;padding: 3px;'
                                                                    class='mx-auto' alt='صورة المستخدم'>
                                                                <span
                                                                    style='display: inline-block;position: relative;top: 6px; '
                                                                    class='px-2 pt-0  float-right kufi'>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class=" px-2" style="width: calc(100% - 60px);">
                                                        <div class="col-12 rounded py-2"
                                                            style="background: var(--message-sender-bg);">
                                                            <div class="col-12 px-0 row">
                                                                <div class="col-7 px-0">
                                                                    <a href='https://nafezly.com/u/malik_malik'
                                                                        class="d-inline-block text-center">
                                                                        <span class="fas fa-circle"
                                                                            style="font-size:9px;color: #4caf50;"></span>
                                                                        <span
                                                                            style="font-size:13px;opacity: .7;font-weight: bold;color: var(--bg-color-0)"
                                                                            class="kufi">Malik
                                                                            Malik</span></a>
                                                                </div>
                                                                <div class="col-5 px-0 text-left">
                                                                    <span style="font-size:14px;opacity: .7"
                                                                        class="naskh">منذ 21 ثانية</span>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 px-0">
                                                                <div style=' position: relative;top: 0px;' class='py-2'>
                                                                    <span
                                                                        style=' position: relative;color: var(--bg-color-0); font-size: 17px;white-space: pre-line;word-wrap: break-word;overflow: hidden;  '
                                                                        class='p-0 naskh'> السلام عليكم
                                                                        اريد تصميم UI/UX لموقع لمعمل تصنيع
                                                                        مواد تغليف ومستلزمات المطاعم</span>
                                                                </div>
                                                                <div class='col-12 px-1'>
                                                                    <div class="col-12 px-0">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-12 px-0 row d-flex justify-content-end">
                                                                <div class="d-inline-block px-0 message_seen_status">
                                                                    <span class="fas fa-check font-small "></span>
                                                                    <span class="fas fa-check font-small  "
                                                                        style="display: none;"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 px-0">
                                            <div class="col-12 p-0 ">
                                                <div class="col-12 p-3 row">
                                                    <div class="d-inline-block " style="width:38px;">
                                                        <span
                                                            class="btn btn-light pt-2 pb-1 attachment-opener-btn-container-62cd9ad37c87d72731"
                                                            style="background: var(--bg-main-bg);border:1px solid var(--bg-main-bg);font-size: 13px;cursor: pointer;width: 38px"
                                                            onclick="$('.attachment-container-62cd9ad37c87d72731').slideToggle();">
                                                            <h6 class=" px-0 mb-1 font-1"><span class="fal fa-paperclip"
                                                                    aria-hidden="true"></span></h6>
                                                        </span>
                                                        <span
                                                            class="d-inline-block text-center btn btn-light px-2 pt-2 pb-1 mt-2 recorderNafezlyModalOpener mic-btn-recorder-container-62cd9ad37c87d72731"
                                                            data-attachment-uploader-container-selector=".attachment-container-62cd9ad37c87d72731"
                                                            data-textarea-message-selector=".textarea-message-62cd9ad37c87d72731"
                                                            data-toggle="modal" data-target="#recorderNafezly"
                                                            style="font-size: 13px;cursor: pointer;width: 38px;">
                                                            <h6 class=" px-0 mb-1 font-1 text-center"><span
                                                                    class="fal fa-microphone" aria-hidden="true"></span>
                                                            </h6>
                                                        </span>
                                                    </div>
                                                    <div class="col px-2 textarea-message-container-62cd9ad37c87d72731"
                                                        style="width: calc(100% - 100px);">
                                                        <textarea name="message" class="form-control textarea-message-62cd9ad37c87d72731 textarea-message"
                                                            style="min-height: 77px" required="" minlength="1" id="textarea-message-62cd9ad37c87d72731"
                                                            maxlength="5000" placeholder="" autofocus data-uniqid="62cd9ad37c87d72731"></textarea>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <span
                                                            class="btn btn-primary d-flex justify-content-center align-items-center rounded-circle textarea-message-push-btn"
                                                            style="width:50px;height: 50px;cursor: pointer;"
                                                            id="submit-btn-62cd9ad37c87d72731"
                                                            data-uniqid="62cd9ad37c87d72731" data-real_id=""
                                                            data-response-container="">
                                                            <span class="fal fa-paper-plane  font-3"
                                                                aria-hidden="true"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="col-12 attachment-container-62cd9ad37c87d72731"
                                                    style="display: none;overflow: hidden!important">
                                                    <div class="col-12 px-0 pt-2"></div>
                                                    <div class="col-12 px-0 row "
                                                        id="file-uploader-nafezly-62cd9ad37c87d72731">
                                                        <input type="hidden" name="file" value="">
                                                        <input name="file" type="file" multiple
                                                            class="file-uploader-files" style="opacity: 0"
                                                            data-fileuploader-files='' />
                                                    </div>
                                                    <div class="col-12 px-0 pt-2"></div>
                                                </div>
                                            </div>
                                            <div class="col-12 px-0 py-3">
                                                <div class="col-12 px-0">
                                                    <ul>
                                                        <li style="font-size: 13px;color: var(--bg-font-4);"
                                                            class="naskh">لا تستخدم وسائل تواصل خارجية
                                                        </li>
                                                        <li style="font-size: 13px;color: var(--bg-font-4);"
                                                            class="naskh"><a href="/tickets?create=1" class="naskh">
                                                                تواصل معنا </a> مباشرةً إذا
                                                            وجدت أي طلبات غريبة</li>
                                                        <li style="font-size: 13px;color: var(--bg-font-4);"
                                                            class="naskh">نحن معك على مدار الساعة لتقديم
                                                            الدعم الفني لك</li>
                                                    </ul>
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
    <input type="hidden" name="" id="last-message">
    <div class="temp-hidden d-none" style="overflow: hidden;"></div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).on("focusin", function() {
            $(".thumbnail-nafezly").fancybox({}); // fancybox
        });
        $('a.thumbnail-nafezly').on('click', function(e) {
            e.preventDefault();
        });
    </script>
    <script type="text/javascript"></script>
    <script type="text/javascript"></script>
    <script type="text/javascript">
        $('#deal_edit_to_input').on('keyup', function() {
            if ($(this).attr('data-current_amount') == $(this).val()) {
                $('#toggle-disabling-editing-btn').attr("disabled", true);
            } else
                $('#toggle-disabling-editing-btn').removeAttr("disabled");
        });
        $("#edit_deal_amount").validate();
        $("#message-store-form").validate();
        $('#message-store-form').submit(false);

        $('#submit-btn-62cd9ad37c87d72731').on('click', function() {
            if ($("#message-store-form").valid()) {
                var content = $('#textarea-message-62cd9ad37c87d72731').val();
                if (content != $('#last-message').val()) {
                    if ($(this).attr("disabled") == "disabled") {
                        toastr.info('برجاء الانتظار لحين الانتهاء من رفع الملفات')
                        return 0;
                    }
                    $('#last-message').val(content);
                    $.ajax({
                        method: "POST",
                        url: "https://nafezly.com/message/store",
                        data: {
                            msg: content,
                            receiver_id: "",
                            file: $(
                                    '#file-uploader-nafezly-62cd9ad37c87d72731 input[name="fileuploader-list-file"]'
                                )
                                .val(),
                            _token: "SOgYh8p4i0kJUzkHKzLYuuTNh0j2tunWR1MnSE42",
                            head_message_id: "9007"
                        },
                        success: function(data, textStatus, xhr) {
                            $('#textarea-message-62cd9ad37c87d72731').val('');
                            var api = $.fileuploader.getInstance(
                                "#file-uploader-nafezly-62cd9ad37c87d72731 .file-uploader-files");
                            api.reset();
                            $('.attachment-container-62cd9ad37c87d72731').slideUp();
                            $('.messaging-area').append(data);
                            $('.no-messages').fadeOut(0);
                            $(data).find('.thumbnail-nafezly').each(function(index) {
                                var cname = $(this).attr("rel")
                                $('.' + cname).fancybox();
                            });
                        }
                    });
                } else {
                    toastr.warning('تم ارسال هذه الرسالة من قبل برجاء تغيير محتوى الرسالة')
                };
            }
        });

        function get_new_messages() {
            var count_message = $(".message:last").attr("id");
            $.ajax({
                method: "POST",
                url: "https://nafezly.com/message/get-ajax-messages-interval?is_focused=" + !document.hidden,
                data: {
                    receiver_id: "5325",
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    last_message_id: count_message,
                    head_message_id: "9007"
                }
            }).done(function(msg) {
                $('.messaging-area').append(msg.render);
                if (msg.render != "") {
                    $('.no-messages').fadeOut(0);
                }
                $(msg.render).find('.thumbnail-nafezly').each(function(index) {
                    var cname = $(this).attr("rel")
                    $('.' + cname).fancybox();
                });
                if (msg.receiver_last_activity == 1) {
                    $('.message').find('.user-activity-status').addClass('active');
                    $('.message').each(function(index) {
                        $(this).find('.message_seen_status span').fadeIn();
                    });
                } else
                    $('.message').find('.user-activity-status').removeClass('active');
                $('.message').each(function(index) {
                    if ($(this).attr('id') <= msg.last_seen_message_id) {
                        $(this).find('.message_seen_status span').fadeIn().addClass('active');
                    }
                });
            });
        }
        get_new_messages();
    </script>
    <script type="text/javascript">
        dropZoneElement62cd9ad37c87d72731 = document.getElementById('textarea-message-62cd9ad37c87d72731');
        dropZoneElement62cd9ad37c87d72731.addEventListener("drop", (e) => {
            var slef = dropZoneElement62cd9ad37c87d72731;
            e.preventDefault();
            console.log(slef.getAttribute('data-uniqid'));
            var api = $.fileuploader.getInstance("#file-uploader-nafezly-" + dropZoneElement62cd9ad37c87d72731
                .getAttribute('data-uniqid') + " .file-uploader-files");
            $(".attachment-container-" + dropZoneElement62cd9ad37c87d72731.getAttribute('data-uniqid')).slideDown();
            var files_list = e.dataTransfer;
            Array.prototype.forEach.call(files_list.files, file => {
                api.add(file);
            });
        });
    </script>
    <style>
        .selectize-input {
            border: 1px solid #cdcdcd;
        }

        .fileuploader-theme-dragdrop .fileuploader-input {
            border-radius: 0px !important;
            border: 1px solid #cdcdcd !important;
        }

        .fileuploader {
            margin: 0px !important;
        }

        .fileuploader-input {
            text-align: center;
        }

        .fileuploader-input * {
            text-align: center;
        }

        .fileuploader-theme-dragdrop .fileuploader-input {
            background: var(--bg-second-bg);
            border: 1px dashed var(--bg-main-bg);
        }

        .fileuploader {
            background: var(--bg-second-bg);

            padding: 0px;
        }

        *[class^="fileuploader"] {
            direction: ltr !important;

        }

        .fileuploader-items .fileuploader-item {
            padding: 7px !important;
        }

        .fileuploader-items-list {
            width: 100% !important;
            margin: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

        .fileuploader-popup {
            z-index: 66666666666666666;

        }

        .fileuploader-popup * {
            text-align: center !important;

        }

        .fileuploader-popup-button[data-action="cancel"] {
            font-size: 0px !important
        }

        .fileuploader-popup .fileuploader-popup-header .fileuploader-popup-button {
            padding: 5px 15px !important;
            text-shadow: none;
        }

        .fileuploader-popup-button[data-action="cancel"]:after {
            content: 'إغلاق';
            font-size: 13px !important
        }

        .fileuploader-popup-footer {
            display: flex;
            justify-content: center;
        }

        .fileuploader-popup .fileuploader-popup-tools button[data-action="remove"] {
            font-size: 0px !important
        }

        .fileuploader-popup .fileuploader-popup-tools button[data-action="remove"]:after {
            content: ' حذف';
            font-size: 13px !important
        }

        *[class^="fileuploader-icon-"] {
            text-align: center !important;
        }

        .fileuploader-items .fileuploader-item {
            border-color: var(--bg-second-bg) !important;
        }

        .fileuploader-items .fileuploader-item .fileuploader-action+.fileuploader-action {
            margin-left: 0px !important;
            margin-right: 16px !important;
        }

        .fileuploader-input {
            padding-top: 30px !important;
            padding-bottom: 30px !important;
        }

        .fileuploader-icon-main {
            margin: 0px !important;
            padding: 10px !important;
            font-size: 30px !important;
        }

        .fileuploader-input-caption {
            font-size: 14px !important;
        }

        .fileuploader-input-inner p,
        .fileuploader-input-button {
            display: none !important
        }

        .fileuploader-input-inner:hover {
            opacity: .5 !important;
        }

        .fileuploader-icon-remove:before {
            content: "\e923";
            position: relative;
            top: -2px;
        }
    </style>
    <script>
        $('#file-uploader-nafezly-62cd9ad37c87d72731 .file-uploader-files').fileuploader({
            addMore: true,
            limit: 10,
            maxSize: 100,
            inputNameBrackets: false,
            enableApi: true,
            extensions:

                ['3gp', '7z', '7zip', 'ai', 'apk', 'avi', 'bin', 'bmp', 'bz2', 'css', 'csv', 'doc', 'docx', 'egg',
                    'flv', 'gif', 'gz', 'h264', 'htm', 'html', 'ia', 'icns', 'ico', 'jpeg', 'jpg', 'm4v',
                    'markdown', 'md', 'mdb', 'mkv', 'mov', 'mp3', 'mp4', 'mpa', 'mpeg', 'mpg', 'mpga',
                    'octet-stream', 'odp', 'ods', 'odt', 'ogg', 'otf', 'pak', 'pdf', 'pea', 'png', 'pps', 'ppt',
                    'pptx', 'psd', 'rar', 'rm', 'rss', 'rtf', 's7z', 'sql', 'svg', 'tar', 'tar', 'gz', 'tbz2',
                    'tex', 'tgz', 'tif', 'tiff', 'tlz', 'ttf', 'vob', 'wav', 'webm', 'wma', 'wmv', 'xhtml', 'xlr',
                    'xls', 'xlsx', 'xml', 'z', 'zip', 'zipx', 'qt'
                ],
            changeInput: '<div class="fileuploader-input mb-2">' +
                '<div class="fileuploader-input-inner">' +
                '<div class="fileuploader-icon-main"></div>' +
                '<h3 class="fileuploader-input-caption"><span>قم بإرفاق الملفات</span></h3>' +
                '<p>${captions.or}</p>' +
                '<button type="button" class="fileuploader-input-button"><span>${captions.button}</span></button>' +
                '</div>' +
                '</div>',
            theme: 'dragdrop',


            captions: {
                button: function(options) {
                    return 'تصفح ' + (options.limit == 1 ? 'ملف' : 'ملفات');
                },
                feedback: function(options) {
                    return 'اختر ' + (options.limit == 1 ? '1' : 'ملف') + ' للرفع';
                },
                feedback2: function(options) {
                    return options.length + ' ' + (options.length > 1 ? 'ملفات هنا' : 'ملفات كانت') + ' مختارة';
                },
                confirm: 'تأكيد',
                cancel: 'الغاء',
                name: 'الاسم',
                type: 'النوع',
                size: 'الحجم',
                dimensions: 'الأبعاد',
                duration: 'المدة',
                crop: 'اقتصاص',
                rotate: 'تدوير',
                sort: 'ترتيب',
                download: 'تحميل',
                remove: 'حذف',
                drop: 'قم بافلات الملفات هنا للرفع',
                paste: '<div class="fileuploader-pending-loader"></div> ملف تالف اضغط للحذف.',
                removeConfirmation: 'هل أنت متأكد من حذف الملف ?',
                errors: {
                    filesLimit: function(options) {
                        return 'فقط ${limit} ' + (options.limit == 1 ? 'ملف' : 'ملفات') + ' يمكن رفعها.'
                    },
                    filesType: 'فقط ${extensions} الانواع السابقة من الملفات التي يمكن رفعها.',
                    fileSize: '${name} حجمه كبير جداً! يمكن رفع ملفات لحد أقصى ${fileMaxSize}MB.',
                    filesSizeAll: 'الملفات المستخدمة كبيرة للغاية! من فضلك قم بإختيار ملفات لحد اقصى ${maxSize} MB.',
                    fileName: 'الملف بالاسم ${name} مستخدم من قبل.',
                    remoteFile: 'دوران الملف غير مسموح به.',
                    folderUpload: 'ملفات غير مدعومة.'
                }
            },


            upload: {
                url: 'https://nafezly.com/message/attachment-store',
                data: {
                    _token: 'SOgYh8p4i0kJUzkHKzLYuuTNh0j2tunWR1MnSE42'
                },
                type: 'POST',
                enctype: 'multipart/form-data',
                start: true,
                synchron: true,
                beforeSend: null,
                onSuccess: function(result, item) {


                    $("#submit-btn-62cd9ad37c87d72731").attr("disabled", false);
                    $('.pace-inactive').fadeOut('fast');


                    var data = {};


                    /*  var uploaded_files=$("#uploaded_files").val();
                                    $("#uploaded_files").val(uploaded_files.replace(item.name+'/',''));
                                    var _ref;   return (_ref = file.name) != null ? _ref.parentNode.removeChild(file.name) : void 0;
                    */

                    // get data
                    if (result && result.files)
                        data = result;
                    else
                        data.hasWarnings = true;

                    // if success
                    if (data.isSuccess && data.files[0]) {
                        item.name = data.files[0].name;
                        item.html.find('.column-title > div:first-child').text(data.files[0].name).attr('title',
                            data.files[0].name);
                    }

                    // if warnings
                    if (data.hasWarnings) {
                        for (var warning in data.warnings) {
                            alert(data.warnings[warning]);
                        }

                        item.html.removeClass('upload-successful').addClass('upload-failed');
                        // go out from success function by calling onError function
                        // in this case we have a animation there
                        // you can also response in PHP with 404
                        return this.onError ? this.onError(item) : null;
                    }

                    item.html.find('.fileuploader-action-remove').addClass('fileuploader-action-success');
                    setTimeout(function() {
                        item.html.find('.progress-bar2').fadeOut(400);
                    }, 400);
                },
                onError: function(item) {

                    $("#submit-btn-62cd9ad37c87d72731").attr("disabled", false);
                    $('.pace-inactive').fadeOut('fast');


                    var progressBar = item.html.find('.progress-bar2');

                    if (progressBar.length) {
                        progressBar.find('span').html(0 + "%");
                        progressBar.find('.fileuploader-progressbar .bar').width(0 + "%");
                        item.html.find('.progress-bar2').fadeOut(400);
                    }

                    item.upload.status != 'cancelled' && item.html.find('.fileuploader-action-retry').length ==
                        0 ? item.html.find('.column-actions').prepend(
                            '<button type="button" class="fileuploader-action fileuploader-action-retry text-center" style="background:#03A9F4;border-radius:50%;margin-left:10px;" title="اعادة المحاولة"><i class="far fa-redo-alt font-1" style="color:#fff;position: relative;left: -2px;top: -2px;padding: 1px;"></i></button>'
                        ) : null;
                },
                onProgress: function(data, item) {

                    $("#submit-btn-62cd9ad37c87d72731").attr("disabled", true);
                    $('.pace-inactive').fadeIn('fast');



                    var progressBar = item.html.find('.progress-bar2');

                    if (progressBar.length > 0) {
                        progressBar.show();
                        progressBar.find('span').html(data.percentage + "%");
                        progressBar.find('.fileuploader-progressbar .bar').width(data.percentage + "%");
                    }
                },
                onComplete: null,
            },
            onRemove: function(item) {
                /* return false;*/
                $.ajax({
                    url: 'https://nafezly.com/message/attachment-delete',
                    method: 'POST',
                    data: {
                        name: item.name,
                        '_token': 'SOgYh8p4i0kJUzkHKzLYuuTNh0j2tunWR1MnSE42',
                        type: 'new',
                        parent_id: item.name
                    }
                }).done(function(msg) {
                    console.log(msg);
                });
            },
            captions: $.extend(true, {}, $.fn.fileuploader.languages['en'], {
                feedback: 'اضغط او قم بالسحب و الافلات هنا',
                feedback2: 'رفع المزيد',
                drop: 'قم بإفلات الملفات',
                or: 'او',
                button: 'تصفح الملفات',
            })

        });
    </script>
    <script src="/livewire/livewire.js?id=a3766c6f9aadee9b7977" data-turbo-eval="false" data-turbolinks-eval="false">
    </script>
    <script data-turbo-eval="false" data-turbolinks-eval="false">
        window.livewire = new Livewire();
        window.Livewire = window.livewire;
        window.livewire_app_url = '';
        window.livewire_token = 'SOgYh8p4i0kJUzkHKzLYuuTNh0j2tunWR1MnSE42';
        window.deferLoadingAlpine = function(callback) {
            window.addEventListener('livewire:load', function() {
                callback();
            });
        };
        let started = false;
        window.addEventListener('alpine:initializing', function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            if (!started) {
                window.livewire.start();
                started = true;
            }
        });
    </script>
    <script type="text/javascript">
        $('#recorderNafezly').on('hide.bs.modal', function() {
            $(this).find('audio').attr('src', '');
            $(this).find('audio,.recorder-send-audio-container').css('opacity', '0.2');
        });
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194"
        integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw=="
        data-cf-beacon='{"rayId":"729aff494f3c7344","version":"2022.6.0","r":1,"token":"e3146e29712049fe8454df255b17cf54","si":100}'
        crossorigin="anonymous"></script>
@endsection
