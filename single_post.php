<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>
<?php 
    if (isset($_GET['post-slug'])) {
        $post = getPost($_GET['post-slug']);
    }
    $topics = getAllTopics();
?>
<?php include('header.php') ?>

</nav>
        <div class="detail-header detail-header-blogs-detail-full">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Blogs</a></li>                        
                </ol>
                <div class="detail-title">
                    <h1>Quisque a eleifend velit. Nullam pellen tesque ligula aliquam</h1>
                </div>


            </div>
            <div class="background" style="background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5)), url(images/blogs/blog1.jpg);"></div>
        </div>



    </header>    
    <!-- end of banner header -->
    <main>    
        <div class="container">
            
            <div class="detail-topinfo col-lg-12 col-md-12 col-sm-12 col-xs-12">
                

                <div class="detail-sharing">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-google"></a>
                    <a href="#" class="fa fa-pinterest"></a>
                    <a href="#" class="fa fa-tumblr"></a>
                    <a href="#" class="fa fa-reddit"></a>
                    <a href="#" class="fa fa-rss"></a>
                </div>
            </div>



            <article class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blogs-content blogs-content-detail">

                <div class="feature">

                    <div class="detail-description textalign">
                        <span class="dropcaps">L</span>orem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

                    </div>

                    <div class="detail-content textalign">
                        

                        <div class="image-box">
                            <a target="_blank" href="images/blogs/blog3.jpg" data-lightbox="roadtrip" data-title="Nullam pellentesque ligula aliquam, tempus eros vitae">
                                <img src="<?php echo BASE_URL . '/static/images/' . $post['image']; ?>" class="post_image" alt="">
                            </a>
                            
                        </div>

                        <p>
                           <div class="post-wrapper">
                               <!-- full post div -->
                               <div class="full-post-div">
                               <?php if ($post['published'] == false): ?>
                                   <h2 class="post-title">Sorry... This post has not been published</h2>
                               <?php else: ?>
                                   <h2 class="post-title"><?php echo $post['title']; ?></h2>
                                   <div class="post-body-div">
                                       <?php echo html_entity_decode($post['body']); ?>
                                   </div>
                               <?php endif ?>
                               </div>
                               <!-- // full post div -->
                               
                               <!-- comments section -->
                               <!--  coming soon ...  -->
                           </div>
                           <!-- // Page wrapper -->
                        </p>

                       

                        <blockquote class="detail-quote">
                            <div class='quotemarks'>
                                Praesent volutpat rutrum tortor. Quisque sit amet justo semper. Quisque a eleifend velit.<br><br>
                                <?php foreach ($topics as $topic): ?>
                                    <a 
                                        href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>">
                                        <?php echo $topic['name']; ?>
                                    </a> 
                                <?php endforeach ?> 
                            </div>
                            <small>@2017. Quisque sit amet justo semper. <a href="">See detail</a></small>

                        </blockquote>

                       




                       
                        <div class="image-box image-box-50-left">
                            <a target="_blank" href="images/blogs/blog2.jpg" data-lightbox="roadtrip" data-title="Quisque sit amet justo semper. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus">
                                <img src="images/blogs/blog2.jpg" alt="Forest" >
                            </a>
                            <div class="desc">Quisque sit amet justo semper. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus</div>
                        </div>

                        <p>
                            Porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…
                        </p>

                        <p>
                            Praesent volutpat rutrum tortor. Quisque sit amet justo semper. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…
                        </p>

                        <p>
                            Porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…
                        </p>

                        <p>
                            Praesent volutpat rutrum tortor. Quisque sit amet justo semper. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…
                        </p>
                        <h4>Quisque sit amet justo semper</h4>

                        <p>
                            Porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…
                        </p>

                        <p>
                            Praesent volutpat rutrum tortor. Quisque sit amet justo semper. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…
                        </p>

                    </div>

                    <div class="detail-author">

                        <fieldset>
                            <legend>Author: <a href="">Henry Pham</a></legend>
                            <div class="avatar">
                                <img src="images/face/face4.jpg">
                            </div>
                            <div class="author-intro">
                                Porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna… Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus
                            </div>

                            <div class="social-networks">
                                <div>
                                    Mobie: <b>012 899 87771</b>. Or connect with me 
                                </div>
                                <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-vimeo-square" aria-hidden="true"></i></a>
                                <a href=""><i class="fa fa-tumblr-square" aria-hidden="true"></i></a>
                            </div>
                        </fieldset>

                    </div>
                </div>


                <div class="related-blogs">
    <h3>Related posts</h3>

    <div class="posts row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">
            <div class="photo sticky-new">
                <a href=""><img src="images/blogs/blog2.jpg"></a>
            </div>
            <h3><a href="">Natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus</a></h3>
            <div class="info">
                <span class="date">by <a href="">Admin</a> January 1, 2017.</span>

                <span class="comment">
                    <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                </span>
            </div>

            <div class="description">
                Dros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante. Nulla sem sem, bibendum eu magna…

            </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">

            <div class="photo sticky-feature">
                <a href=""><img src="images/blogs/blog5.jpg"></a>
            </div>
            <h3><a href="">Phasellus ultrices diam lorem</a></h3>
            <div class="info">
                <span class="date">by <a href="">Admin</a> January 1, 2017.</span>

                <span class="comment">
                    <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                </span>
            </div>

            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Quisque sit amet justo semper, porta metus id..

            </div>


        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 item">

            <div class="photo">
                <a href=""><img src="images/blogs/blog1.jpg"></a>
            </div>
            <h3><a href="">Quisque a eleifend velit. Nullam pellentesque ligula aliquam</a></h3>
            <div class="info">
                <span class="date">by <a href="">Admin</a> January 1, 2017.</span>
                <span class="comment">
                    <a href=""><i class="fa fa-comment-o" aria-hidden="true"></i> 12</a>
                </span>
            </div>

            <div class="description">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend veli tellus. Praesent volutpat rutrum tortor..

            </div>
        </div>
    </div>

</div>
<ul class="pagination pagination-lazyload">
    <li>
        <a href="#">Load more posts <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
    </li>
</ul>
<!-- End of related posted -->                <div class="detail-comments">
    <a name="comments"></a>
    <h3>1 Comments</h3>
    <ul class="comments-list">
        <li class="item">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/face/face1.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <div class="content">
                        <div class="author">
                            <a href="">Consectetur Adipiscing</a> <span>said:</span>
                        </div>
                        <div class="info">
                            <div class="date">
                                March 9, 2017. At 12h:30 AM
                            </div>
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. 
                            <br><br>
                            Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante

                        </div>
                        <div class="button">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-reply" aria-hidden="true"></i> REPLY</a>
                            <a href="" class="btn btn-default btn-sm"><i class="fa fa-flag" aria-hidden="true"></i> REPORT</a>
                        </div>
                    </div>    

                </div>
            </div>
        </li>
        <li class="item">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/face/face2.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <div class="content">
                        <div class="author">
                            <a href="">Sit Amet</a> <span>said:</span>
                        </div>
                        <div class="info">
                            <div class="date">
                                March 9, 2017. At 12h:30 AM
                            </div>
                        </div>
                        <div class="text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In eu vulputate elit. Quisque a eleifend velit. Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus.
                        </div>
                        <div class="button">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-reply" aria-hidden="true"></i> REPLY</a>
                            <a href="" class="btn btn-default btn-sm"><i class="fa fa-flag" aria-hidden="true"></i> REPORT</a>
                        </div>
                    </div>    

                </div>
            </div>
        </li>
        <li class="item item-reply">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/face/face1.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <div class="content">
                        <div class="author">
                            <a href="">Sit Amet</a> <span>reply:</span>
                        </div>
                        <div class="info">
                            <div class="date">
                                March 9, 2017. At 12h:30 AM
                            </div>
                        </div>
                        <div class="text">
                            Hi Sit Amet, lorem ipsum dolor sit amet, consectetur adipiscing elit..
                        </div>

                    </div>    

                </div>
            </div>
        </li>
        <li class="item item-reply">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/face/face2.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <div class="content">
                        <div class="author">
                            <a href="">Consectetur Adipiscing</a> <span>reply:</span>
                        </div>
                        <div class="info">
                            <div class="date">
                                March 9, 2017. At 12h:30 AM
                            </div>
                        </div>
                        <div class="text">
                            Thank you!! ^^
                        </div>

                    </div>    

                </div>
            </div>
        </li>
        <li class="item">
            <div class="media">
                <div class="media-left">
                    <a href="#">
                        <img class="media-object" src="images/face/face3.jpg" alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <div class="content">
                        <div class="author">
                            <a href="">Eros Vitae</a> <span>said:</span>
                        </div>
                        <div class="info">
                            <div class="date">
                                March 9, 2017. At 12h:30 AM
                            </div>
                        </div>
                        <div class="text">
                            Nullam pellentesque ligula aliquam, tempus eros vitae, hendrerit tellus. Praesent volutpat rutrum tortor. Quisque sit amet justo semper, porta metus id, ultrices ante

                        </div>
                        <div class="button">
                            <a href="" class="btn btn-primary btn-sm"><i class="fa fa-reply" aria-hidden="true"></i> REPLY</a>
                            <a href="" class="btn btn-default btn-sm"><i class="fa fa-flag" aria-hidden="true"></i> REPORT</a>
                        </div>
                    </div>    

                </div>
            </div>
        </li>
    </ul>
    <ul class="pagination pagination-lazyload">
        <li>
            <a href="#">Load more comments <i class="fa fa-angle-double-down" aria-hidden="true"></i></a>
        </li>
    </ul>

    <h3>Leave a reply</h3>
    <form data-toggle="validator" action="" method="GET"> 
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form-group">
                <input class="form-control" id="inputsm" type="text" placeholder="Name" required="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form-group">
                <input class="form-control" id="inputsm" type="email" placeholder="Email" required="">
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 form-group">
                <input class="form-control" id="inputsm" type="text" placeholder="Website" required="">
            </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" rows="6" placeholder="Message" required=""></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-primary" type="submit">
                Post comment
            </button>
        </div>
    </form>
</div>    
<!-- End of Comments -->
            </article>


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