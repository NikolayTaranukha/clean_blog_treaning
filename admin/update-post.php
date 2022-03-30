<?php
require_once ('header.php');
?>

<section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Изменить новость</h2>
<!--                                        <ul class="breadcrumb">-->
<!--                                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>-->
<!--                                            <li class="breadcrumb-item"><a href="blog-dashboard.html">Blog</a></li>-->
<!--                                            <li class="breadcrumb-item active">New Post</li>-->
<!--                                        </ul>-->
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="update-post.php" method="get" id="form">
                        <div class="card">
                            <div class="body">
                                <div class="form-group">
                                    <input type="hidden" id="change_id" name="change_id" class="form-control"
                                           value="<?= $data_fo_change['change_id'];?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control"
                                           value="<?= $data_fo_change['title'];?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="description" name="description" class="form-control"
                                           value="<?= $data_fo_change['description'];?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="author" name="author" class="form-control"
                                           value="<?= $data_fo_change['author'];?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="date" name="date" class="form-control"
                                           value="<?= $data_fo_change['date'];?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="visible" name="visible" class="form-control"
                                           value="<?= $data_fo_change['visible'];?>"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="category" name="category" class="form-control"
                                           value="<?= $data_fo_change['category'];?>"/>
                                </div>
                            </div>
                        </div>
                </div>
<!--                <div>-->
<!--                    --><?php //var_dump($data_fo_change['change_id']);?>
<!--                </div>-->
                <div class="card">
                    <div class="body">
                        <label for="text"></label><textarea id="text" name="text" cols="137"
                                                            rows="10"><?= $data_fo_change['text_post']; ?></textarea>
                        <button name="enter" type="submit" class="btn btn-info waves-effect m-t-20">Update
                        </button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>


</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
<script src="assets/plugins/summernote/dist/summernote.js"></script>
</body>
</html>
