<?php
require_once 'frontend/header.php';
require_once 'functions.php';
?>
<!-- Page Header-->
<header class="masthead" style="background-image: url('frontend/assets/img/home-bg.jpg')">
    <div class="container position-relative px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <div class="site-heading">
                    <h1>Clean Blog</h1>
                    <span class="subheading">A Blog Theme by Start Bootstrap</span>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Content-->

<div class="container px-4 px-lg-5">
    <div class="row gx-4 gx-lg-5 justify-content-center">
        <div class="col-md-10 col-lg-8 col-xl-7">
            <!-- Post preview-->
            <?php
            foreach (get_post() as $item) : ?>
            <div class="post-preview">
                <a href="frontend/post.php">
                    <h2 class="post-title"><a href="/frontend/page-post.php?title=<?= $item['title']; ?>&text_post=<?= $item['text_post']; ?>"><?php echo $item['title'] ?></a></h2>
                    <h3 class="post-subtitle"><?php echo $item['description'] ?></h3>
                </a>
                <p class="post-meta">
                    Posted by
                    <a href="#"><?php echo $item['author'] ?></a>
                    <?php data_del($item['date']);?>
                </p>
            </div>
            <?php endforeach; ?>
            <!-- Divider-->
            <hr class="my-4"/>


            <!-- Post preview-->
<!--            <div class="post-preview">-->
<!--                <a href="frontend/post.php"><h2 class="post-title">I believe every human has a finite number of-->
<!--                        heartbeats. I-->
<!--                        don't intend to waste any of mine.</h2></a>-->
<!--                <p class="post-meta">-->
<!--                    Posted by-->
<!--                    <a href="#!">Start Bootstrap</a>-->
<!--                    on September 18, 2022-->
<!--                </p>-->
<!--            </div>-->
<!--             Divider-->
<!--            <hr class="my-4"/>-->
<!--             Post preview-->
<!--            <div class="post-preview">-->
<!--                <a href="frontend/post.php">-->
<!--                    <h2 class="post-title">Science has not yet mastered prophecy</h2>-->
<!--                    <h3 class="post-subtitle">We predict too much for the next year and yet far too little for the next-->
<!--                        ten.</h3>-->
<!--                </a>-->
<!--                <p class="post-meta">-->
<!--                    Posted by-->
<!--                    <a href="#!">Start Bootstrap</a>-->
<!--                    on August 24, 2022-->
<!--                </p>-->
<!--            </div>-->
<!--             Divider-->
<!--            <hr class="my-4"/>-->
<!--             Post preview-->
<!--            <div class="post-preview">-->
<!--                <a href="/frontend/post.php">-->
<!--                    <h2 class="post-title">Failure is not an option</h2>-->
<!--                    <h3 class="post-subtitle">Many say exploration is part of our destiny, but it’s actually our duty to-->
<!--                        future generations.</h3>-->
<!--                </a>-->
<!--                <p class="post-meta">-->
<!--                    Posted by-->
<!--                    <a href="#!">Start Bootstrap</a>-->
<!--                    on July 8, 2022-->
<!--                </p>-->
<!--            </div>-->
<!--             Divider-->
<!--            <hr class="my-4"/>-->
<!--             Pager-->
<!--            <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts-->
<!--                    →</a></div>-->
<!--        </div>-->
    </div>
</div>
<!-- Footer-->
<?php
require_once 'frontend/footer.php';
?>
