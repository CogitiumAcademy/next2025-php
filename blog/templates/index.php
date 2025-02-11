<?php include("parts/header.inc.php"); ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('public/assets/img/home-bg.jpg')">
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

                    <?php foreach ($data as $post) { ?>

                        <!-- Post preview-->
                        <div class="post-preview">
                            <a href="post.php?slug=<?= $post['slug']; ?>">
                                <h2 class="post-title"><?= $post['title']; ?></h2>
                                <img src="<?= $post['image']; ?>" width="300" alt="">
                                <h3 class="post-subtitle"><?= $post['content']; ?>...</h3>
                            </a>
                            <p class="post-meta">
                                Posted by
                                <a href="#!"><?= $post['firstName'] . ' ' . $post['lastName']; ?></a>
                                on <?= $post['updatedAt']; ?>
                            </p>
                        </div>
                        <!-- Divider-->
                        <hr class="my-4" />

                    <?php } ?>

                    <!-- Pager-->
                    <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older Posts →</a></div>
                </div>
            </div>
        </div>

<?php include("parts/footer.inc.php"); ?>
