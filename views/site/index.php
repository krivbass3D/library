<?php
use yii\helpers\Url;
use yii\widgets\LinkPager;

?>
<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <?php foreach ($books as $book):?>
                    <article class="post">
                        <div class="post-thumb">
                            <a href="<?= Url::toRoute(['site/view','id'=>$book->id]);?>"><img src="<?= $book->getImage();?>" alt=""></a>

                            <a href="<?= Url::toRoute(['site/view','id'=>$book->id]) ;?>" class="post-thumb-overlay text-center">
                                <div class="text-uppercase text-center">Подробнее</div>
                            </a>
                        </div>
                        <div class="post-content">
                            <header class="entry-header text-center text-uppercase">
                                <h6><a href="#"> Travel</a></h6>

                                <h1 class="entry-title"><a href="<?= Url::toRoute(['site/view','id'=>$book->id]) ;?>"><?= $book->title;?></a></h1>


                            </header>
                            <div class="entry-content">
                                <p><?= $book->description;?>
                                </p>

                                <div class="btn-continue-reading text-center text-uppercase">
                                    <a href="<?= Url::toRoute(['site/view','id'=>$book->id]) ;?>" class="more-link">Подробнее..</a>
                                </div>
                            </div>
                            <div class="social-share">
                                <span class="social-share-title pull-left text-capitalize">By <a href="#">Rubel</a> <?= $book->date;?></span>
                                <!--
                                <ul class="text-center pull-right">
                                    <li><a class="s-facebook" href="#"><i class="fa fa-eye"></i></a></li>325
                                </ul>
                                -->
                            </div>
                        </div>
                    </article>
                <?php endforeach;?>


                <?php

                echo LinkPager::widget([
                    'pagination' => $pagination,
                ]);

                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <!--
                    <aside class="widget">
                        <h3 class="widget-title text-uppercase text-center">Popular Posts</h3>

                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>

                            </div>
                        </div>
                        <div class="popular-post">

                            <a href="#" class="popular-img"><img src="public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                        <div class="popular-post">


                            <a href="#" class="popular-img"><img src="public/images/p1.jpg" alt="">

                                <div class="p-overlay"></div>
                            </a>

                            <div class="p-content">
                                <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                <span class="p-date">February 15, 2016</span>
                            </div>
                        </div>
                    </aside>
                    <aside class="widget pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Recent Posts</h3>

                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                        <div class="thumb-latest-posts">


                            <div class="media">
                                <div class="media-left">
                                    <a href="#" class="popular-img"><img src="public/images/r-p.jpg" alt="">
                                        <div class="p-overlay"></div>
                                    </a>
                                </div>
                                <div class="p-content">
                                    <a href="#" class="text-uppercase">Home is peaceful Place</a>
                                    <span class="p-date">February 15, 2016</span>
                                </div>
                            </div>
                        </div>
                    </aside>
                    -->
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Авторы</h3>
                        <ul>
                            <?php foreach ($authors as $author):?>
                            <li>
                                <a href="#"><?= $author->firstname;?> <?= $author->surname;?></a>
                                <span class="post-count pull-right"> (<?= $author->getBooks()->count();?>)</span>
                            </li>
                            <?php endforeach;?>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->
<!--footer start-->
