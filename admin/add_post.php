<?php
require_once "header.php";
?>
<section class="content blog-page">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Добавить новость</h2>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <form action="add_post.php" method="get" id="form">
                        <div class="card">
                            <div class="body">
                                <div class="form-group">
                                    <input type="text" id="title" name="title" class="form-control"
                                           placeholder="Enter title"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="description" name="description" class="form-control"
                                           placeholder="Enter description"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="author" name="author" class="form-control"
                                           placeholder="Enter author"/>
                                </div>
                                <div class="form-group">
                                    <input type="date" id="date" name="date" class="form-control"
                                           placeholder="Enter date"/>
                                </div>
                                <div class="form-group">
                                    <input type="text" id="visible" name="visible" class="form-control"
                                           placeholder="Enter visible"/>
                                </div>

                                <select id="category" name="category" class="form-control show-tick">
                                    <option>Select Category --</option>
                                    <option>Web Design</option>
                                    <option>Photography</option>
                                    <option>Technology</option>
                                    <option>Lifestyle</option>
                                    <option>Sports</option>
                                </select>
                            </div>
                        </div>
                        <div class="card">
                            <div class="body">
                                <div>
                                <textarea name="text" id="text" cols="100" rows="10"
                                          placeholder="Enter text post"></textarea>
                                </div>
                                <button type="submit" name="enter" class="btn btn-info waves-effect m-t-20">POST
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
