@extends('backend.app')

@section('content_admin')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Ayarlar</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="x_panel">

            <div class="x_content">

                <form  action="/admin/genel-ayarlar" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                    {{csrf_field()}}

                    <!-- Açıklama -->
                    @if (Session::has('message'))
                        <div class="alert alert-info">{{ Session::get('message') }}</div>
                    @endif


                <div class="" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Genel Ayarlar</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">İletişim Ayarları</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">Sosyal Medya Ayarları</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">Google API</a>
                        </li>
                        <li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">Mail Ayarları</a>
                        </li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <!-- Genel Ayarlar -->
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

                            {{Form::bsText('site-title','Site Başlığı')}}

                            {{Form::bsText('site-keywords','Site Anahtar Kelimeler')}}
                            {{Form::bsText('site-description','Site Açıklaması')}}
                            {{Form::bsText('site-adres','Site Adresi')}}
                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                        <button type="submit"  class="btn btn-success">Kaydet</button>
                                    </div>
                                </div>

                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                            {{Form::bsText('telephone','Telefon')}}
                            {{Form::bsText('general-mail','Mail')}}
                            {{Form::bsText('adress','Adres')}}
                            {{Form::bsText('il','İl')}}
                            {{Form::bsText('ilce','İlçe')}}

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit"  class="btn btn-success">Kaydet</button>
                                    </div>
                                </div>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                            {{Form::bsText('facebook','Facebook')}}
                            {{Form::bsText('twitter','Twitter')}}
                            {{Form::bsText('insta','İnstagram')}}
                            {{Form::bsText('youtube','Youtube')}}

                                <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">

                                        <button type="submit"  class="btn btn-success">Kaydet</button>
                                    </div>
                                </div>

                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content4" aria-labelledby="profile-tab">
                            <p>xxFood truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo
                                booth letterpress, commodo enim craft beer mlkshk </p>
                        </div>


                        <div role="tabpanel" class="tab-pane fade" id="tab_content5" aria-labelledby="profile-tab">


                            {{Form::bsText('facebook','Facebook')}}
                            {{Form::bsText('password','Şifre')}}
                            {{Form::bsText('smtphost','SMTP HOST')}}
                            {{Form::bsText('smtpport','SMTP PORT')}}

                            <div class="form-group">
                                    <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                        <button type="submit"  class="btn btn-success">Kaydet</button>
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

    @endsection

@section('js')
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- PNotify -->
    <script src="../vendors/pnotify/dist/pnotify.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.buttons.js"></script>
    <script src="../vendors/pnotify/dist/pnotify.nonblock.js"></script>
    <!-- PNotify -->
    <script>
        $(document).ready(function() {
            new PNotify({
                title: "PNotify",
                type: "info",
                text: "Welcome. Try hovering over me. You can click things behind me, because I'm non-blocking.",
                nonblock: {
                    nonblock: true
                },
                addclass: 'dark',
                styling: 'bootstrap3',
                hide: false,
                before_close: function(PNotify) {
                    PNotify.update({
                        title: PNotify.options.title + " - Enjoy your Stay",
                        before_close: null
                    });

                    PNotify.queueRemove();

                    return false;
                }
            });

        });
    </script>
    <!-- /PNotify -->

    <!-- Custom Notification -->
    <script>
        $(document).ready(function() {
            var cnt = 10;

            TabbedNotification = function(options) {
                var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
                    "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

                if (!document.getElementById('custom_notifications')) {
                    alert('doesnt exists');
                } else {
                    $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
                    $('#custom_notifications #notif-group').append(message);
                    cnt++;
                    CustomTabs(options);
                }
            };

            CustomTabs = function(options) {
                $('.tabbed_notifications > div').hide();
                $('.tabbed_notifications > div:first-of-type').show();
                $('#custom_notifications').removeClass('dsp_none');
                $('.notifications a').click(function(e) {
                    e.preventDefault();
                    var $this = $(this),
                        tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
                        others = $this.closest('li').siblings().children('a'),
                        target = $this.attr('href');
                    others.removeClass('active');
                    $this.addClass('active');
                    $(tabbed_notifications).children('div').hide();
                    $(target).show();
                });
            };

            CustomTabs();

            var tabid = idname = '';

            $(document).on('click', '.notification_close', function(e) {
                idname = $(this).parent().parent().attr("id");
                tabid = idname.substr(-2);
                $('#ntf' + tabid).remove();
                $('#ntlink' + tabid).parent().remove();
                $('.notifications a').first().addClass('active');
                $('#notif-group div').first().css('display', 'block');
            });
        });
    </script>
    <!-- /Custom Notification -->
    @endsection

@section('css')
    <!-- iCheck -->
    <link href="/backend/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-progressbar -->
    <link href="/backend/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- PNotify -->
    <link href="/backend/vendors/pnotify/dist/pnotify.css" rel="stylesheet">
    <link href="/backend/vendors/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
    <link href="/backend/vendors/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">
    @endsection