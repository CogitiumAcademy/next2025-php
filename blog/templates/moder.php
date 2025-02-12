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

                    <?php foreach ($comments as $comment) { ?>

                        <!-- Post preview-->
                        <div class="post-preview">
                            <p class="post-meta">
                                <?= $comment['content']; ?><br>
                                Ecrit par : <?= $comment['firstName'] . ' ' .  $comment['lastName']; ?><br>
                                Le : <?= $comment['createdAt']; ?><br>
                                <a onclick="return confirm('Etes-vous certain ?')" href="delComment.php?id=<?= $comment['id']; ?>"><i class="fa-solid fa-trash"></i></a>
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
