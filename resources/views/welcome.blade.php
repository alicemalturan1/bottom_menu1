<!doctype html>
<html lang="tr">

<head>

    <meta charset="utf-8" />
    <title>Alt Menü  | Panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- App favicon -->
    <link rel="shortcut icon" href="/admin-assets/assets/images/favicon.ico">

    <!-- datepicker css -->
    <link href="/admin-assets/assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">



    <!-- Icons Css -->
    <link href="/admin-assets/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    @include('section.panelstyle')

</head>

<body data-layout="detached" data-topbar="colored">



<!-- <body data-layout="horizontal" data-topbar="dark"> -->

<div class="container-fluid">
    <!-- Begin page -->
    <div id="layout-wrapper">



    <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">

                @include('section.page_header',['title'=>'Alt Menü'])

                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="card border" style="border-radius:1.2rem;">
                            <div class="card-body">
                                <div class="outer-repeater" method="post">
                                    <div class="row">
                                        <div class="row justify-content-end pb-3">
                                            <div class="col-xl-2 col-xxl-1 col-lg-4 col-md-5 col-sm-12">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#new_link_modal" style="width: 100%;" class="m-1 btn  btn-outline-success waves-effect waves-light">
                                                    <i class="fas fa-angle-double-right font-size-16 align-middle me-1"></i>
                                                     Link Oluştur
                                                </button>

                                            </div>
                                            <div class="col-xl-2 col-xxl-1 col-lg-4 col-md-5 col-sm-12">
                                                <button type="button" data-bs-toggle="modal" data-bs-target="#settings_modal" style="width: 100%;" class="m-1 btn  btn-outline-primary waves-effect waves-light">
                                                    <i class="fab fa-slack font-size-16 align-middle me-1"></i>
                                                    Ayarlar
                                                </button>

                                            </div>

                                        </div>
                                        <div class="col-lg-9">
                                            <div class="modal fade" id="new_link_modal" tabindex="-1" role="dialog"
                                                 aria-labelledby="composemodalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="composemodalTitle"> Link Oluştur</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <form class="new_linkform">
                                                            <div class="modal-body">

                                                                <div>


                                                                    <div class="mb-3">

                                                                        <input type="text" class="form-control" name="text" placeholder="Metin">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <input type="text" class="form-control" name="link" placeholder="Bağlantı">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <input type="text" class="form-control" name="icon" placeholder="İkon">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <div @class('alert alert-primary')>
                                                                            İkonu <a href="https://remixicon.com" target="_blank">buradan</a> seçebilirsiniz (sadece class bölümünü kopyalayın)
                                                                        </div>
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <input type="text" class="form-control" name="queue" data-toggle="touchspin" placeholder="Sıra" value="0">
                                                                    </div>

                                                                </div>


                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                                <button type="submit" class="btn btn-primary">Oluştur <i
                                                                        class="fab fa-telegram-plane ms-1"></i></button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal fade" id="settings_modal" tabindex="-1" role="dialog"
                                                 aria-labelledby="composemodalTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="composemodalTitle">Ayarlar</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                    aria-label="Close"></button>
                                                        </div>
                                                        <form class="update_settings-form">
                                                            <div class="modal-body">
                                                                <div>


                                                                    <div class="mb-3">
                                                                        <label>Arkaplan rengi</label>
                                                                        <input type="text" class="form-control" name="bg_color" value="{{Config::get('menu.background_color')}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Yazı rengi</label>
                                                                        <input type="text" class="form-control" name="txt_color" value="{{Config::get('menu.text_color')}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Aktif link rengi</label>
                                                                        <input type="text" @class('form-control')  name="active_color" value="{{Config::get('menu.active_color')}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>İkon boyutu</label>
                                                                        <input type="text" @class('form-control')  name="icon_size" value="{{Config::get('menu.icon_size')}}">
                                                                    </div>
                                                                    <div class="mb-3">
                                                                        <label>Yazı boyutu</label>
                                                                        <input type="text" @class('form-control')  name="text_size" value="{{Config::get('menu.text_size')}}">
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">İptal</button>
                                                                <button type="submit" class="btn btn-primary">Kaydet <i
                                                                        class="fab fa-telegram-plane ms-1"></i></button>
                                                            </div>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>



                                               @if(count(\App\Models\MenuItems::all())<1)
                                                <div class="col-lg-12 text-center font-size-14">
                                                    Link bulunamadı, hemen ana link oluştur butonuna tıklayarak link oluşturabilirsiniz.
                                                </div>
                                                @endif
                                            <div class="accordion" id="accordionExample">
                                                @foreach(\App\Models\MenuItems::all() as $item)

                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header" id="heading{{$item->id}}">
                                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{$item->id}}" aria-expanded="false" aria-controls="collapse{{$item->id}}">
                                                                <i @class('me-1 align-middle '.$item->icon)></i> {{$item->text}}
                                                            </button>
                                                        </h2>
                                                        <div id="collapse{{$item->id}}" class="accordion-collapse collapse" aria-labelledby="heading{{$item->id}}" data-bs-parent="#accordionExample" style="">
                                                            <div class="accordion-body">
                                                                <div class="p-1 ">
                                                                    <div class="p-1" >
                                                                        <div class="row justify-content-end">
                                                                            <div class="col-xl-3 col-lg-6 pt-1">

                                                                            </div>
                                                                            <template id="remove-confirmalert{{$item->id}}">
                                                                                <swal-title>
                                                                                    Silmek istediğine emin misin ?
                                                                                </swal-title>
                                                                                <swal-icon type="warning" color="red"></swal-icon>
                                                                                <swal-button type="confirm">
                                                                                    Sil
                                                                                </swal-button>
                                                                                <swal-button type="cancel">
                                                                                    İptal
                                                                                </swal-button>

                                                                                <swal-param name="allowEscapeKey" value="false" />
                                                                                <swal-param
                                                                                    name="customClass"
                                                                                    value='{ "popup": "my-popup" }' />
                                                                            </template>
                                                                            <div class="col-xl-3 col-lg-6 pt-1">
                                                                                <button type="button"  style="width: 100%;" class="btn btn-danger remove_linkbtn" data-id="{{$item->id}}"  data-bs-toggle="modal" data-bs-target="#remove_link_modal" data-swal-toast-template="#remove-confirmalert{{$item->id}}"> <i class="fas fa-ban"></i> Kaldır</button>
                                                                            </div>

                                                                        </div>
                                                                        <form class="px-5 update_menuitem-form">
                                                                            <input type="hidden" name="id" value="{{$item->id}}">
                                                                            <div class="row  p-1 mb-1">
                                                                                <div class="col-lg-12">
                                                                                    <label> Bağlantı</label>
                                                                                    <input type="text" name="link" class="form-control" value="{{$item->link}}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="row p-1 mb-1">
                                                                                <div class="col-lg-12">
                                                                                    <label> Metin</label>
                                                                                    <input type="text" name="text" class="form-control" value="{{$item->text}}">
                                                                                </div>

                                                                            </div>
                                                                            <div class="row p-1 mb-1">
                                                                                <div class="col-lg-12">
                                                                                    <label> İkon</label>
                                                                                    <input type="text" name="icon" class="form-control" value="{{$item->icon}}">
                                                                                </div>

                                                                            </div>
                                                                            <div class="row p-1 mb-1">
                                                                                <div class="col-lg-12">
                                                                                    <label >Sıra</label>
                                                                                    <input data-toggle="touchspin"  name="queue" type="text" value="{{$item->queue}}">
                                                                                </div>

                                                                            </div>
                                                                            <div class="row justify-content-center pt-1">
                                                                                <div class="col-lg-3 pt-1">
                                                                                    <button type="submit"  style="width: 100%;" class="btn btn-success"> <i class="fab fa-rev"></i> Güncelle</button>
                                                                                </div>

                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach


                                            </div>

                                        </div>


                                    </div>
                                </div>




                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->

            </div>
            <!-- End Page-content -->
            @include('section.footer')
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->

</div>
<!-- end container-fluid -->

<!-- JAVASCRIPT -->
<!-- JAVASCRIPT -->
<script src="/admin-assets/assets/libs/jquery/jquery.min.js"></script>
<script src="/admin-assets/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/admin-assets/assets/libs/metismenu/metisMenu.min.js"></script>
<script src="/admin-assets/assets/libs/simplebar/simplebar.min.js"></script>
<script src="/admin-assets/assets/libs/node-waves/waves.min.js"></script>
<script src="/admin-assets/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<!-- bootstrap datepicker -->
<script src="/admin-assets/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

<!--tinymce js-->
<script src="/admin-assets/assets/libs/tinymce/tinymce.min.js"></script>

<script src="/admin-assets/assets/libs/select2/js/select2.min.js"></script>
<script src="/admin-assets/assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="/admin-assets/assets/libs/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>

<script src="/admin-assets/assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
<!-- form repeater js -->
<script src="/admin-assets/assets/libs/jquery.repeater/jquery.repeater.min.js"></script>

<script src="/admin-assets/assets/js/pages/task-create.init.js"></script>
<script src="/admin-assets/assets/js/pages/form-advanced.init.js"></script>
<!-- App js -->
<script src="/js/app.js"></script>

</body>

</html>
