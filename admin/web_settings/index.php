<?php
session_start();
require_once '../../config/utils.php';
$getwebsByIdQuery = "select * from web_settings ";
$webs = queryExecute($getwebsByIdQuery, false);
?>
<!DOCTYPE html>
<html>

<head>
    <?php include_once '../_share/style.php'; ?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Navbar -->
        <?php include_once '../_share/header.php'; ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php include_once '../_share/sidebar.php'; ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0 text-dark">Web-setting</h1>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <form id="edit-web-form" action="<?= ADMIN_URL . 'web_settings/save-edit.php' ?>" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $webs['id'] ?>">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Phone_number<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="Phone_number" value="<?= $webs['phone_number'] ?>">

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <img src="<?= BASE_URL . $webs['logo'] ?>" id="preview-img" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">LOGO</label>
                                        <input type="file" class="form-control" name="logo" onchange="encodeImageFileAsURL(this)">
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="">address<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="address" value="<?= $webs['address'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="">slogan<span class="text-danger"></span></label>
                                    <input type="text" class="form-control" name="slogan" value="<?= $webs['slogan'] ?>">
                                </div>

                            </div>
                            <div class="col-md-6">

                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <img src="<?= BASE_URL . $webs['banner'] ?>" id="preview-img" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">banner 1</label>
                                        <input type="file" class="form-control" name="banner" onchange="encodeImageFileAsURL(this)">
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3">
                                            <img src="<?= BASE_URL . $webs['image2'] ?>" id="preview-img" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="">banner2</label>
                                        <input type="file" class="form-control" name="image2" onchange="encodeImageFileAsURL(this)">
                                    </div>

                                </div>

                            </div>

                            <div class="col-12 d-flex justify-content-end">
                                <button type="submit" class="btn btn-primary">Tạo</button>&nbsp;
                                <a href="<?= ADMIN_URL . 'web-setting' ?>" class="btn btn-danger">Hủy</a>
                            </div>
                        </div>
                    </form>

                    <!-- /.row -->

                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?php include_once '../_share/footer.php'; ?>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php include_once '../_share/script.php'; ?>
    <script>
        function encodeImageFileAsURL(element) {
            var file = element.files[0];
            if (file === undefined) {
                $('#preview-img').attr('src', "<?= BASE_URL . $webs['background_img'] ?>");
                return false;
            }
            var reader = new FileReader();
            reader.onloadend = function() {
                $('#preview-img').attr('src', reader.result)
            }
            reader.readAsDataURL(file);
        }
        $('#edit-web-form').validate({
            rules: {
                name: {
                    required: true,
                    maxlength: 191
                },

                phone_number: {
                    number: true
                },
                identity_id: {
                    maxlength: 191
                },
                avatar: {
                    extension: "png|jpg|jpeg|gif"
                }
            },
            messages: {
                name: {
                    required: "Hãy nhập tên người dùng",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },
                email: {
                    required: "Hãy nhập email",
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự",
                    email: "Không đúng định dạng email",
                    remote: "Email đã tồn tại, vui lòng sử dụng email khác"
                },
                phone_number: {
                    min: "Bắt buộc là số có 10 chữ số",
                    max: "Bắt buộc là số có 10 chữ số",
                    number: "Nhập định dạng số"
                },
                identity_id: {
                    maxlength: "Số lượng ký tự tối đa bằng 191 ký tự"
                },
                avatar: {
                    extension: "Hãy nhập đúng định dạng ảnh (jpg | jpeg | png | gif)"
                }
            }
        });
    </script>
</body>

</html>
