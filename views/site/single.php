<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <article class="post">
                    <div class="post-thumb">
                        <a href="blog.html"><img src="<?= $book->getImage();?>" alt=""></a>
                    </div>
                    <div class="post-content">
                        <header class="entry-header text-center text-uppercase">
                            <h6><a href="#"> Travel</a></h6>

                            <h1 class="entry-title"><a href="blog.html"><?= $book->title;?></a></h1>


                        </header>
                        <div class="entry-content">
                            <p><?= $book->description;?></p>
                        </div>
                        <div class="decoration">
                            <a href="#" class="btn btn-default">Decoration</a>
                            <a href="#" class="btn btn-default">Decoration</a>
                        </div>

                        <div class="social-share">
							<span
                                class="social-share-title pull-left text-capitalize">By Rubel On  <?= $book->date;?></span>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
