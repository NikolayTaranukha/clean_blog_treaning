<?php
require_once ('header.php');
?>

<!-- Main Content -->
<section class="content">
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Ticket list</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item">Project</li>
                        <li class="breadcrumb-item active">Ticket list</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                                class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                                class="zmdi zmdi-arrow-right"></i></button>
                    <button class="btn btn-success btn-icon float-right" type="button"><i class="zmdi zmdi-plus"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>2,365</h5>
                                <span>Total Tickets</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px"
                                 data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#FFC107">5,2,3,7,6,4,8,1
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>365</h5>
                                <span>Pending</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px"
                                 data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#46b6fe">8,2,6,5,1,4,4,3
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>65</h5>
                                <span>Responded</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px"
                                 data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#ee2558">4,4,3,9,2,1,5,7
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card state_w1">
                        <div class="body d-flex justify-content-between">
                            <div>
                                <h5>2,055</h5>
                                <span>Resolve</span>
                            </div>
                            <div class="sparkline" data-type="bar" data-width="97%" data-height="55px"
                                 data-bar-Width="3" data-bar-Spacing="5" data-bar-Color="#04BE5B">7,5,3,8,4,6,2,9
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a href="add_post.php" type="button" class="btn btn-danger">Добавить новость</a>
            <div class="row clearfix">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="card project_list">
                        <div class="table-responsive">
                            <table class="table table-hover c_table">
                                <thead>
                                <tr>
                                    <th>id</th>
                                    <th>category</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>text_post</th>
                                    <th>author</th>
                                    <th>date</th>
                                    <th>visible</th>
                                    <th>created_at</th>
                                    <th>updated_at</th>
                                    <th>action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php
                                foreach (get_post() as $item) :?>
                                    <tr>
                                        <td><strong><?php echo $item['id'] ?></strong></td>
                                        <td><strong><?php echo $item['category'] ?></strong></td>
                                        <td><a href="ticket-detail.html"><?php echo $item['title'] ?></a></td>
                                        <td><?php echo $item['description'] ?></td>
                                        <td><?php echo $item['text_post'] ?></td>
                                        <td><?php echo $item['author'] ?></td>
                                        <td><?php echo $item['date'] ?></td>
                                        <td><?php if ($item['visible'] == 1) {
                                                echo "True";
                                            } else {
                                                echo "False";
                                            } ?></td>
                                        <td><?php echo $item['created_at'] ?></td>
                                        <td><?php echo $item['updated_at'] ?></td>
                                        <td>
                                            <a href="update-post.php?change_id=<?= $item['id']; ?>&category=<?= $item['category'];?>&title=<?= $item['title']; ?>&description=<?= $item['description']; ?>&text_post=<?= $item['text_post']; ?>&author=<?= $item['author']; ?>&date=<?= $item['date']; ?>&visible=<?=$item['visible'] ;?> "
                                               class="btn btn-primary btn-sm"><i class="zmdi zmdi-edit"></i></a>
                                                <a href="ticket-list.php?del_id=<?=$item['id'] ?>" type="submit" id="del" name="del"  class="btn btn-danger btn-sm"><i class="zmdi zmdi-delete"></i>
                                                </a>


                                        </td>
                                    </tr>

                                <?php endforeach; ?>

                                </tbody>
                            </table>
                        </div>
                        <ul class="pagination pagination-primary mt-4">
                            <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript:void(0);">5</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="assets/bundles/sparkline.bundle.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/charts/sparkline.js"></script>
</body>
</html>