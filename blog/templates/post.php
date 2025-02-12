<?php include("parts/header.inc.php"); ?>

        <!-- Page Header-->
        <header class="masthead" style="background-image: url('<?= $data['image']; ?>')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="post-heading">
                            <h1><?= $data['title']; ?></h1>
                            <!--<h2 class="subheading">Problems look mighty small from 150 miles up</h2>-->
                            <span class="meta">
                                Posted by
                                <a href="#!"><?= $data['firstName'] . ' ' . $data['lastName']; ?></a>
                                on <?= $data['updatedAt']; ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Post Content-->
        <article class="mb-4">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <p><?= $data['content']; ?></p>
                        <!--
                        <p>
                            Placeholder text by
                            <a href="http://spaceipsum.com/">Space Ipsum</a>
                            &middot; Images by
                            <a href="https://www.flickr.com/photos/nasacommons/">NASA on The Commons</a>
                        </p>
                        -->
                        <?php if ($nbComments > 0) { ?>
                            <h2><?= pluralize('Le', $nbComments) ?> <?= ($nbComments==1)?'':$nbComments; ?> <?= pluralize('commentaire',$nbComments) ?> :</h2>
                            <?php foreach ($comments as $comment) { ?>
                                <ul>
                                    <li>
                                        Le <?= $comment['createdAt']; ?> 
                                        <?= $comment['firstName']; ?> <?= $comment['lastName']; ?> a écrit :<br>
                                        <?= $comment['content']; ?>
                                    </li>
                                </ul>
                            <?php } ?>
                        <?php } ?>

                        <?php if (isset($_SESSION['user'])) { ?>
                            <h2>Saisir un commentaire</h2>
                            <form action="post.php?slug=<?= $_GET['slug']; ?>" method="post">
                                <textarea class="form-control" name="content" id="comment"></textarea>
                                <input type="hidden" name="idPost" value="<?= $data['id']; ?>">
                                <button class="btn btn-primary text-uppercase" type="submit">Enregistrer</button>
                            </form>
                        <?php } ?>

                    </div>
                </div>
            </div>
        </article>



<?php include("parts/footer.inc.php"); ?>
