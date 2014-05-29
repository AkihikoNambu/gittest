
<body>
    <!-- NAVIGATION -->
    <nav class="fixed-top fixed-visable" id="navigation">
        <div class="container">
            <div class="row-fluid">
                <div class="span12 center">
                    <!-- LOGO -->
                    <a class="brand pull-left" href="../../">
                        <img src="../../assets/images/logo.png" alt="Treble">
                    </a>
                    <!-- END LOGO -->

                    <!-- MOBILE MENU BUTTON -->
                    <div class="mobile-menu" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                    <!-- END MOBILE MENU BUTTON -->
                    
                    <!-- MAIN MENU -->
                    <ul id="main-menu" class="nav-collapse collapse">
                        <li><a href="../../#page-welcome">Home</a></li>
                        <li><a href="../../#page-work">Work</a></li>
                        <li><a href="../../#page-features">Features</a></li>
                        <li><a href="../../#page-about">About</a></li>
                        <li><a href="../../#page-blog">Blog</a></li>
                        <li><a href="../../#page-contact">Contact</a></li>
                    </ul>
                    <!-- END MAIN MENU -->
                    
                    <!-- SOCIAL ICONS -->
                    <div class="social-icons hover-big pull-right">
                        <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                        <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                        <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                        <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                        <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                    </div>
                    <!-- END SOCIAL ICONS -->
                </div>
            </div>
        </div>
    </nav>
    <!-- END NAVIGATION -->
    
    <!-- PAGE | BLOG -->
    <div class="pages page-blog-list" id="page-blog-list">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Blog</h4>
                <h1>Blog Posts</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <div class="input-append">
                          <input class="span5" id="appendedInputButton" type="text" placeholder="Search Blog">
                          <button class="btn btn-primary sicon-search sicon-white" type="button"><i>Search</i></button>
                        </div>
                    </div>
                </div>
            </header>
            <!-- End Header -->

            <div class="row-fluid">
                <div class="span8 blog-details">
                    <!-- Article -->
                    <article>
                        <!-- Blog image -->
                        <a href="blog_1.html">
                            <img src="http://placehold.it/900x450">
                        </a>
                        
                        <!-- Blog title -->
                        <!-- ここのidとかいつ投稿したかとかを変えれば良い -->
                        <?php foreach ($writeins as $writein): ?>
                        <h5>
                            <?php echo $writein->getTitle() ?><br/>
                            <small>Posted By <a href="#"><?php echo link_to($writein->getId(), 'writein/show?id='.$writein->getId()) ?></a>
                            <?php echo $writein->getCreatedAt() ?> <a href="#">Photography</a></small>
                        </h5>
                        
                        <!-- Blog post description -->
                        <p>
                            <?php echo $writein->getBody() ?> 
                        </p>
                        <?php endforeach?>
                        
                        <!-- Blog read more -->
                        <div class="read-more">
                            <a href="blog_1.html">Read More...</a>
                        </div>
                        
                        <!-- Blog comments -->
                        <div class="comments">
                            <a href="#">4 comments</a>
                        </div>

                    </article>
                    
                    
                    
                    
                    <!-- Pagination -->
                    <div class="pagination center">
                        <ul>
                            <li><a href="#">Prev</a></li>
                            <li class="active"><span>1</span></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>
                <div class="span4 blog-list-right">
                    <!-- Latest blog posts block -->
                    <div class="block">
                        <h6>Lates blog posts</h6>
                        <ul class="simple-link-list">
                            <li>
                                <a href="blog_1.html" class="active">Blog post title 1</a>
                            </li>
                            <li>
                                <a href="blog_2.html">Blog post title 2</a>
                            </li>
                            <li>
                                <a href="blog_3.html">Blog post title 3</a>
                            </li>
                            <li>
                                <a href="blog_4.html">Blog post title 4</a>
                            </li>
                            <li>
                                <a href="blog_5.html">Blog post title 5</a>
                            </li>
                            <li>
                                <a href="blog_6.html">Blog post title 6</a>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Tags -->
                    <div class="block">
                        <h6>Categories</h6>
                        <nav class="submenu">
                            <ul>
                                <li>
                                    <a href="./blog.html" class="active">All</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Technology</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Design</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Future trends</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Photography</a>
                                </li>
                                <li>
                                    <a href="./blog.html">Other</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    
                    <!-- Twitter -->
                    <div class="block">
                        <h6>Twitter</h6>
                        <div class="twitterfeed"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END PAGE | BLOG -->
    
    <!-- PAGE | CONTACT -->
    <div class="pages black-bg white page-contact" id="page-contact">
        <div class="container">
            <!-- Header -->
            <header>
                <h4 class="line-divider">Contact</h4>
                <h1>Say hello!</h1>
                <div class="row">
                    <div class="span8 offset2">
                        <p>
                            We like to create things with fun, open-minded people. Feel free to say hello! We'll respond as soon as possible.
                        </p>
                    </div>
                </div>
            </header>
            <!-- End Header -->
            
            <!-- Start Article -->
            <article>
                <div class="row-fluid">
                    <div class="span6">
                        <h5>Drop Us A Line</h5>
                        <form>
                            <input type="text" class="span12" placeholder="Title">
                            <input type="text" class="span12" placeholder="Email">
                            <textarea rows="10" class="span12"></textarea>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="span5 offset1">
                        <h5>Meet Us</h5>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-phone"><i>Phone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                (+1) 502 964-0393 | (+1) 502 964-0393 (FAX)
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-place"><i>Location</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                1095 Columbus Ave., San Francisco, CA 94133
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-mail"><i>email</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                mail@crollify.com
                            </div>
                        </div>
                        <div class="media">
                            <div class="social-icons sicon-white pull-left">
                                <a href="#" class="sicon-clock"><i>Time zone</i></a>
                            </div> 
                            <div class="media-body smallFontBy08">
                                UTC / GMT -5
                            </div>
                        </div>
                        <br/>
                        <br/>
                        <br/>
                        <h5>Get social</h5>
                        <div class="social-icons sicon-white bordered">
                            <a href="#" class="sicon-facebook"><i>Facebook</i></a>
                            <a href="#" class="sicon-twitter"><i>Twitter</i></a>
                            <a href="#" class="sicon-linkedin"><i>LinkedIn</i></a>
                            <a href="#" class="sicon-youtube"><i>Youtube</i></a>
                            <a href="#" class="sicon-pinterest"><i>Pinterest</i></a>
                        </div>
                    </div>
                </div>
            </article>
            <!-- End Article -->
            
        </div>
        
        <!-- Background map image -->
        <div id="map-image">
            <img src="../../assets/images/pages/contact/map_bck.jpg">
        </div>
    </div>
    <!-- END PAGE | CONTACT -->
    
    
    <!-- JQUERY -->
    <script src="../../assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
    
    
    <!-- TWITTER BOOTSTRAP -->
    <script src="../../assets/js/bootstrap/bootstrap.min.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
        <script src="../../assets/js/bootstrap/html5shiv.js"></script>
    <![endif]-->
    
    
    <!-- PLUGINS -->
    <script src="../../assets/js/plugins/jquery.responsivevideos.min.js" type="text/javascript"></script>
    <script src="../../assets/js/plugins/jquery.tweet.min.js" type="text/javascript"></script>
        
    
    <!-- INITIALIZE -->
    <script src="../../assets/js/application/application-blog-list.min.js" type="text/javascript"></script>
    
    
    <!-- GOOGLE ANALYTICS -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44061294-1', 'gridelicious.net');
        ga('send', 'pageview');
    </script>

    <?php echo $sf_data->getRaw('sf_content') ?>
</body>
</html>


