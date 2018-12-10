<!-- The first include should be config.php -->
<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<!-- Retrieve all posts from database  -->
<?php $posts = getPublishedPosts(); ?>

<?php include('header.php') ?>


</nav>
        <div class="detail-header detail-header-blog-category">
            <div class="container">
                <h1>Our Latest Posts</h1>

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item"><a href="blog-full.php">Blogs</a></li>
                    <li class="breadcrumb-item active"> Our Latest Posts</li>
                </ol>
            </div>
            <div class="background"></div>
        </div>

    </header>    
    <!-- end of banner header -->
    <main>    
        <div class="container">
            <article class="col-lg-8 col-md-8 col-sm-8 col-xs-12 blogs-content">
                <div class="detail-description textalign"><h2 class="content-title">Recent Articles</h2>
                    <?php foreach ($posts as $post): ?>
                <div class="blog-item-big sticky-feature">
                    <div class="photo">
                        <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>"><img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt=""></a>
                    </div>
                    <h3>
                        <!-- Added this if statement... -->
                        <?php if (isset($post['topic']['name'])): ?>
                         <a 
                             href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $post['topic']['id'] ?>"
                             class="btn category">
                             <?php echo $post['topic']['name'] ?>
                         </a>
                        <?php endif ?>
                    </h3>
                    <div class="info">
                        <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                        <span class="category">
                            <a href="">#Quisque Out</a>, 
                            <a href="">#Praesent volutpat rutrum </a>, 
                            <a href="">#Nulla sem sem</a>.
                        </span>
                        <span class="comment">
                            <a href="#comments"><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                        </span>
                    </div>

                    <div class="description">
                        <?php echo html_entity_decode($post['body']); ?>

                    </div>
                    <blockquote class="detail-quote">
                        <div class='quotemarks'>
                            Praesent volutpat rutrum tortor. Quisque sit amet justo semper. Quisque a eleifend velit.<br><br>
                            <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
                                <div class="post_info">
                                    <h3><?php echo $post['title'] ?></h3>
                                    
                                </div>
                            </a>
                        </div>
                        <small><span><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></span> <a href=""><span class="read_more">Read more...</span></a></small>

                    </blockquote>

                    <?php endforeach ?>
                </div>


















                

                <div class="blog-item-big sticky-new">
                    <div class="photo">
                        <a href="blog-detail-regular2.html"><img src="images/blogs/blog2.jpg"></a>
                    </div>
                    <h3><a href="blog-detail-regular2.html">Natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</a></h3>
                    <div class="info">
                        <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                        <span class="category">
                            <a href="">#Praesent volutpat rutrum </a>, 
                            <a href="">#Nulla sem sem</a>.
                        </span>
                        <span class="comment">
                            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                        </span>
                    </div>

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

                    </div>
                </div>

                <div class="blog-item-big">
                    <div class="photo">
                        <iframe class="media-video" width="100%" src="https://www.youtube.com/embed/r3ebOxltJ1w" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <h3><a href="blog-detail-regular2.html">Qrhoncus risus eget, sodales ex. In malesuada urna magna. Vestibulum ante…</a></h3>
                    <div class="info">
                        <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                        <span class="category">
                            <a href="">#Quisque Out</a>, 
                            <a href="">#Praesent volutpat rutrum </a>, 
                            <a href="">#Nulla sem sem</a>.
                        </span>
                        <span class="comment">
                            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                        </span>
                    </div>

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

                    </div>
                </div>

                <div class="blog-item-big">
                    <div class="photo">

                        <div id="myCarousel3" class="carousel slide carousel-fade" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#myCarousel3" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel3" data-slide-to="1"></li>
                                <li data-target="#myCarousel3" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">

                                <div class="item active">
                                    <a href="blog-detail-regular2.html"><img src="images/blogs/blog4.jpg" class="left-img"></a>
                                </div>
                                <div class="item">
                                    <a href="blog-detail-regular2.html"><img src="images/blogs/blog6.jpg" class="left-img"></a>
                                </div>
                                <div class="item">
                                    <a href="blog-detail-regular2.html"><img src="images/blogs/blog7.jpg" class="left-img"></a>
                                </div>

                            </div>

                        </div>
                    </div>
                    <h3><a href="blog-detail-regular2.html">Adipiscing elit. Phasellus ultrices diam lorem, sit amet ullamcorper</a></h3>
                    <div class="info">
                        <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                        <span class="category">
                            <a href="">#Praesent volutpat rutrum </a>, 
                            <a href="">#Nulla sem sem</a>.
                        </span>
                        <span class="comment">
                            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 2</a>
                        </span>
                    </div>

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

                    </div>
                </div>

                <div class="blog-item-big">
                    <div class="photo">
                        <a href="blog-detail-regular2.html"><img src="images/blogs/blog5.jpg"></a>
                    </div>
                    <h3><a href="blog-detail-regular2.html">Phasellus ultrices diam lorem</a></h3>
                    <div class="info">
                        <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                        <span class="category">
                            <a href="">#Quisque Out</a>, 
                            <a href="">#Nulla sem sem</a>.
                        </span>
                        <span class="comment">
                            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                        </span>
                    </div>

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

                    </div>
                </div>

                <div class="blog-item-big">

                    <h3><a href="blog-detail-regular2.html">Consectetur adipiscing Phasellus ultrices diam lorem</a></h3>
                    <div class="info">
                        <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                        <span class="category">
                            <a href="">#Quisque Out</a>, 
                            <a href="">#Nulla sem sem</a>.
                        </span>
                        <span class="comment">
                            <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                        </span>
                    </div>

                    <div class="description">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

                    </div>
                </div>

                <ul class="pagination pagination-lg">
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">Next</a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>

                </ul>

            </article>
            <aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="panel panel-default panel-noborder widget-features">
    <div class="panel-heading">
        Feature posts
    </div>
    <div class="panel-body">
        <ul>
            <li class="bigger">
                <div class="media">
                    <div class="media-left">
                        <a href="blog-detail-regular2.html">
                            <img class="media-object" src="images/pages/welcome1.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="blog-detail-regular2.html">Cras sit amet nibh libero, in gravida nulla</a>
                        </h4>
                        <div class="info">
                            <div class="description">
                                Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at..
                            </div>
                            <div class="date">
                                March 9, 2017 - <a href="">Numquam Eius</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <div class="media-left">
                        <a href="blog-detail-regular2.html">
                            <img class="media-object" src="images/pages/welcome2.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="blog-detail-regular2.html">Neque porro quisquam est, qui dolorem</a>
                        </h4>
                        <div class="info">
                            <div class="date">
                                March 9, 2017 - <a href="">Sed Perspiciatis</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="media">
                    <div class="media-left">
                        <a href="blog-detail-regular2.html">
                            <img class="media-object" src="images/pages/welcome3.jpg" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h4 class="media-heading">
                            <a href="blog-detail-regular2.html">Sed quia non numquam eius modi tempora</a>
                        </h4>
                        <div class="info">
                            <div class="date">
                                March 9, 2017 - <a href="">Henry Pham</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>                <div class="panel panel-default panel-noborder widget-categories">
    <div class="panel-heading">
        Categories
    </div>
    <div class="panel-body">
        <ul>
            <li><i class="fa fa-angle-right"></i> <a href="blog-category.html">User Interface <span class="badge">21</span></a></li>
            <li><i class="fa fa-angle-right"></i> <a href="blog-category.html">Human Interaction June 2017 <span class="badge">85</span></a></li>
            <li><i class="fa fa-angle-down"></i> 
                <a href="blog-category.html">Enduser Research <span class="badge">13</span></a>
                <ul>
                    <li><a href="blog-category.html">Personas <span class="badge">8</span></a></li>
                    <li><a href="blog-category.html">Competitor Research <span class="badge">1</span></a></li>
                    <li><a href="blog-category.html">Market Research <span class="badge">4</span></a></li>
                </ul>
            </li>
            <li><i class="fa fa-angle-right"></i> <a href="blog-category.html">Information Design <span class="badge">13</span></a></li>
            <li><i class="fa fa-angle-right"></i> <a href="blog-category.html">Frontend Development <span class="badge">13</span></a></li>
        </ul>
    </div>
</div>                <div class="panel with-nav-tabs panel-default panel-noborder widget-tab-popular">
    <div class="panel-heading">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab1default" data-toggle="tab">Popular</a></li>
            <li><a href="#tab2default" data-toggle="tab">Lastest</a></li>

        </ul>
    </div>
    <div class="panel-body">
        <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1default">
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/pages/welcome1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">Cras sit amet nibh libero, in gravida nulla</a>
                                </h4>
                                <div class="info">
                                    <div class="description">
                                        Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at..
                                    </div>
                                    <div class="date">
                                        March 9, 2017 - <a href="">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/pages/welcome2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">Neque porro quisquam est, qui dolorem</a>
                                </h4>
                                <div class="info">
                                    <div class="description">
                                        Vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at..
                                    </div>
                                    <div class="date">
                                        March 9, 2017 - <a href="">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/pages/welcome3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">Sed quia non numquam eius modi tempora</a>
                                </h4>
                                <div class="info">
                                    <div class="description">
                                        Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio..
                                    </div>
                                    <div class="date">
                                        March 9, 2017 - <a href="">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>


            </div>
            <div class="tab-pane fade" id="tab2default">
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/pages/welcome6.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">Neque porro quisquam est, qui dolorem</a>
                                </h4>
                                <div class="info">
                                    <div class="description">
                                        Vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at..
                                    </div>
                                    <div class="date">
                                        March 9, 2017 - <a href="">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/pages/welcome2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">Sed quia non numquam eius modi tempora</a>
                                </h4>
                                <div class="info">
                                    <div class="description">
                                        Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio..
                                    </div>
                                    <div class="date">
                                        March 9, 2017 - <a href="">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="#">
                                    <img class="media-object" src="images/pages/welcome1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="">Asunt in anim uis aute irure dolor in </a>
                                </h4>
                                <div class="info">
                                    <div class="description">
                                        Nulla vel metus scelerisque voluptate velit esse cillum dolore eu fugiat nulla..
                                    </div>
                                    <div class="date">
                                        March 9, 2017 - <a href="">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

            </div>

        </div>
    </div>
</div>                <div class="panel panel-default panel-noborder widget-archives">
    <div class="panel-heading">Archives</div>
    <div class="panel-body">
        <ul>
            <li><a href="blog-category-3cols.html"><i class="fa fa-folder-o"></i> May 2017 <span class="badge">190</span></a></li>
            <li><a href="blog-category-3cols.html"><i class="fa fa-folder-o"></i> June 2017 <span class="badge">81</span></a></li>
            <li><a href="blog-category-3cols.html"><i class="fa fa-folder-o"></i> July 2017 <span class="badge">2</span></a></li>
        </ul>
    </div>
</div>                <div class="widget-search">
    <form data-toggle="validator" action="" method="GET"> 
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search in website" id="txtSearch" required="">
            <div class="input-group-btn">
                <button class="btn btn-primary" type="submit">
                    Go
                </button>
            </div>
        </div>
    </form>
</div>                <div class="panel panel-default panel-noborder widget-tags">
    <div class="panel-heading">Tags Cloud</div>
    <div class="panel-body">
        <div class="tagcloud">
            <a href="blog-search.html" class="tag-5">#Maecenas</a>
            <a href="blog-search.html" class="tag-5">#Tempus</a>
            <a href="blog-search.html" class="tag-5">#Condimentum</a>
            <a href="blog-search.html" class="tag-5">#Xem</a>
            <a href="blog-search.html" class="tag-4">#Quam</a>
            <a href="blog-search.html" class="tag-4">#Semper</a>
            <a href="blog-search.html" class="tag-4">#libero</a>
            <a href="blog-search.html" class="tag-3">#Adipiscing sem</a>
            <a href="blog-search.html" class="tag-3">#Condimentum</a>
            <a href="blog-search.html" class="tag-2">#Duis Aute Irure</a>
            <a href="blog-search.html" class="tag-2">#eiusmod</a>
            <a href="blog-search.html" class="tag-1">#Reprehenderit</a>
            <a href="blog-search.html" class="tag-1">#Maecenas tempus</a>
            <a href="blog-search.html" class="tag-1">#Rhoncus</a>
            <a href="blog-search.html" class="tag-1">#Dolor</a>
        </div>
    </div>
</div>

            </aside>

        </div>

    </main>

    <footer>
    <div class="footer-row">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-posts">

                <h3 class="under-line">
                    LASTEST
                    <div class="line"></div>
                </h3>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome5.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome4.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Nullam pellentesque ligula aliquam, tempus eros vitae</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome6.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Dros vitae, hendrerit tellus. Praesent volutpat</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-posts">

                <h3 class="under-line">
                    FEATURES
                    <div class="line"></div>
                </h3>
                <ul>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome1.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Cras sit amet nibh libero, in gravida nulla</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome2.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Neque porro quisquam est, qui dolorem</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="blog-detail-regular2.html">
                                    <img class="media-object" src="images/pages/welcome3.jpg" alt="...">
                                </a>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">
                                    <a href="blog-detail-regular2.html">Sed quia non numquam eius modi tempora</a>
                                </h4>
                                <div class="info">
                                    <div class="date">
                                        March 9, 2017 - <a href="blog-detail-regular2.html">Admin</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                </ul>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-photos">

                <h3 class="under-line">
                    PHOTOS
                    <div class="line"></div>
                </h3>
                <div class="grid row">
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/1.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/1.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/2.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/2.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/3.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/3.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/4.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/4.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/5.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/5.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/6.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/6.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/7.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/7.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/8.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/8.jpg" alt="Forest" >
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4 photo">
                        <a target="_blank" href="images/porfolios/9.jpg" data-lightbox="photos" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                            <img src="images/porfolios/9.jpg" alt="Forest" >
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="footer-row">
        <div class="container">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-about">
                <div class="logo">
                    <a href="blog-detail-regular2.html"><img src="images/duende-logo.png">   
                        <div class="name">Duende</div>
                        <div class="slogan">the hidden charm form your website</div>
                    </a>
                </div>
                <div class="about-us">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer non elementum nunc. Praesent molestie justo dictum pharetra aliquam. 
                    <p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

                </div>

                <div class="social">
                    <a href="blog-detail-regular2.html"><img src="images/icon-facebook.png"></a>
                    <a href="blog-detail-regular2.html"><img src="images/icon-twitter.png"></a>
                    <a href="blog-detail-regular2.html"><img src="images/icon-linkedin.png"></a>
                </div>

            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-link">

                <h3 class="under-line">
                    HELP
                    <div class="line"></div>
                </h3>
                <ul>
                    <li><a href="page-about-us.html">Support center</a></li>
                    <li><a href="page-about-us.html">Contact Us</a></li>
                </ul>
                <ul>
                    <li><a href="page-about-us.html">Careers</a></li>
                    <li><a href="page-about-us.html">Become a Contributor</a></li>
                    <li><a href="page-about-us.html">Affiliate/Reseller Program</a></li>
                    <li><a href="page-about-us.html">International Reseller Program</a></li>
                    <li><a href="page-about-us.html">Developers</a></li>
                    <li><a href="page-about-us.html">R&D Program</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 col-footer col-link">

                <h3 class="under-line">
                    LEGALS
                    <div class="line"></div>
                </h3>
                <ul>
                    <li><a href="page-about-us.html">Privacy Policy</a></li>
                    <li><a href="page-about-us.html">Terms & Conditions</a></li>
                    <li><a href="page-about-us.html">© Commerzial 2017</a></li>
                </ul>

                <h3>TAGS</h3>

                <ul class="tags">
                    <li><a href="blog-search.html">Business</a></li>
                    <li><a href="blog-search.html">UX Design</a></li>
                    <li><a href="blog-search.html">Personal</a></li>
                    <li><a href="blog-search.html">Blogger</a></li>
                    <li><a href="blog-search.html">Social network</a></li>
                    <li><a href="blog-search.html">Professional Services</a></li>
                </ul>

            </div>
        </div>
    </div>
    <div class="footer-under">
        <div class="container">
            © 2015-2017. This perfect theme is made by <i class="fa fa-heart-o"></i>  by <a href="https://herryboard.com" target="_blank">Herry Board</a>.
        </div>
    </div>
</footer>



<a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
    <span class="glyphicon glyphicon-chevron-up"></span>
</a>

    <!-- End of footer -->

    <a id="back-to-top" href="#" class="back-to-top" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left">
        <span class="glyphicon glyphicon-chevron-up"></span>
    </a>

    <!-- Modal -->
    <div id="sendMemberEmail" class="modal modalFullscreen">

        <div class="modal-content">
            <span class="closeX" data-dismiss="modal">&times;</span>

            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-left">
                    <div class="avatar">
                        <img src="images/face/face2.jpg">
                    </div>

                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 col-right">
                    <h3>
                        Moptate Velit
                    </h3>
                    <div class="description">
                        <p class="customer">
                            Position: <b>Visual Designer</b>.                                
                            Phone number: <b>+01 88997 99002 </b>.  
                            Email: <b>abc@mydomain.com </b>.  
                        </p>

                        <form data-toggle="validator" action="" method="GET"> 
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input class="form-control input-lg" id="inputsm" type="text" placeholder="Name" required="">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 form-group">
                                    <input class="form-control input-lg" id="inputsm" type="email" placeholder="Email" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <input class="form-control input-lg" id="inputsm" type="text" placeholder="Subject" required="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control input-lg" rows="6" placeholder="Message" required=""></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-lg" type="submit">
                                    <i class="fa fa-envelope-o"></i> SEND EMAIL
                                </button>
                            </div>
                        </form>                                


                    </div>

                </div>
            </div>
        </div>
    </div>

</body>
<!-- Bootstrap core JavaScript
    ================================================== -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="libs/bootstrap.min.js"></script>

<script src="libs/lightbox-plus-jquery.min.js"></script>
<script src="libs/isotope.pkgd.min.js"></script>

<!-- Placed at the end of the document so the pages load faster -->
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="js/ie10-viewport-bug-workaround.js"></script>

<script src="js/common.js?Sunday 8th of October 2017 10:17:41 AM"></script>

<script>

    $(document).ready(function () {
        backToTop();
        checkNavbarScroll();
    });

</script>
</html>