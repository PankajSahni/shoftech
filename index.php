<?php
// Include WordPress
define('WP_USE_THEMES', false);
require('./blog/wp-load.php');
query_posts('showposts=2');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
        <link rel="stylesheet" href="css/news_slider.css" type="text/css" media="all">
        <script type="text/javascript" src="js/jquery-1.6.js" ></script>
        <script type="text/javascript" src="js/cufon-yui.js"></script>
        <script type="text/javascript" src="js/tms-0.3.js"></script>
        <script type="text/javascript" src="js/tms_presets.js"></script>
        <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="js/atooltip.jquery.js"></script>
        <!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<link rel="stylesheet" href="css/ie.css" type="text/css" media="all">
		<![endif]-->
        <!--[if lt IE 7]>
			<div style=' clear: both; text-align:center; position: relative;'>
				<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a>
			</div>
		<![endif]-->
    </head>
    <body id="page1">
        <div class="main">
            <!--header -->
            <header>
                <div class="wrapper">
                    <h1><a href="index.html"><span id="logo_name">Shoftech</span><span id="logo_com">.com</span></a></h1>
                    <!--<form id="search" method="post">
						<fieldset>
							<div class="bg"><input class="input" type="text" value="Search"  onblur="if(this.value=='') this.value='Search'" onFocus="if(this.value =='Search' ) this.value=''" ></div>
						</fieldset>
					</form>-->
                </div>
                <nav>
                    <ul id="menu">
                        <li class="active"><a href="index.html"><span style="top: -10px">Homepage</span></a></li>
                        <li><a href="Company.html"><span style="top: -10px">Company</span style="top: -10px"></a></li>
                        <li><a href="Solutions.html"><span style="top: -10px">Solutions</span></a></li>
                        <li><a href="Services.html"><span style="top: -10px">Services</span></a></li>
                        <li class="last"><a href="Contacts.html"><span style="top: -10px">Contacts</span></a></li>
                    </ul>
                </nav>
                <div id="slider">
                    <ul class="items">
                        <li>
                            <img src="images/seo.jpg" alt="">
                            <!--<div class="banner">
								<span class="title"><span class="color2">We Have</span><span class="color1">Propositions</span><span>For Everybody</span></span>

							</div>-->
                        </li>
                        <li>
                            <img src="images/ppc.jpg" alt="">
                            <!--<div class="banner">
								<span class="title"><span class="color2">Fresh Ideas</span><span class="color1">For Growing</span><span>Your Business</span></span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do eiusmod tempor.</p>
								<a href="#" class="button1">Read More</a>
							</div>-->
                        </li>
                        <li>
                            <img src="images/web_design.jpg" alt="">
                            <!--<div class="banner">
								<span class="title"><span class="color2">The Best</span><span class="color1">You Can Find</span><span>On The Web</span></span>

							</div>-->
                        </li>
                        <li>
                            <img src="images/mobile_app.jpg" alt="">
                            <!--<div class="banner">
								<span class="title"><span class="color2">The Best</span><span class="color1">You Can Find</span><span>On The Web</span></span>

							</div>-->
                        </li>
                        <li>
                            <img src="images/smo.png" alt="Social Media Optimization">
                            <!--<div class="banner">
								<span class="title"><span class="color2">The Best</span><span class="color1">You Can Find</span><span>On The Web</span></span>

							</div>-->
                        </li>
                    </ul>
                </div>
            </header>
            <!--header end-->
            <!--content -->
            <article id="content"><div class="ic">More Website Templates @ TemplateMonster.com - November 14, 2011!</div>
                <div class="wrapper">
                    <div class="col1 marg_right1">
                        <h2>Consulting</h2>
                        <p>Superior.com is one of <a href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com. It is also XHTML & CSS valid.</p>
                    </div>
                    <div class="col1 marg_right1">
                        <h2>Analysis</h2>
                        <p>This website template has sev- eral pages: <a href="index.html">Home</a>, <a href="Company.html">Company</a>, <a href="Solutions.html">Solutions</a>, <a href="Services.html">Services</a>, <a href="Contacts.html">Contact Us</a> (contact form – doesn’t work).</p>
                    </div>
                    <div class="col1 marg_right1">
                        <h2><a href="hello.html">Strategy</a></h2>
                        <p>This <a href="http://blog.templatemonster.com/2011/11/14/free-website-template-jquery-slider-business-project/" target="_blank">Superior Template</a> goes with two packages. PSD source files are available for the registered members.</p>
                    </div>
                    <div class="col1">
                        <h2>Services</h2>
                        <ul class="list1">
                            <li><a href="#">Sed ut perspiciatis unde </a></li>
                            <li><a href="#">Omnis iste natus errorsitvo</a></li>
                            <li><a href="#">Uptatem acusantium domque </a></li>
                            <li><a href="#">Laudantium totam rem</a></li>
                        </ul>
                    </div>

                </div>
            </article>
            <div class="wrapper">
                <div class="col2 marg_right1">

                    <div class="wrapper">
                        <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
                        <p>Corrupti quos dolores et quas molestiaCorrupti quos dolores et quas molestiaCorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>

                    </div>

                    <h2>Who We Are</h2>
                    <div class="wrapper">
                        <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
                        <p>Corrupti quos dolores et quas molestiaCorrupti quos dolores et quas molestiaCorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>

                    </div>
                    <h2>Who We Are</h2>
                    <div class="wrapper">
                        <figure class="left marg_right1"><img src="images/page2_img1.jpg" alt=""></figure>
                        <p>Corrupti quos dolores et quas molestiaCorrupti quos dolores et quas molestiaCorrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi.</p>

                    </div>
                </div>
                <div class="col1">
                    <h2>Client Reviews</h2>
                    <div style="height: 500px;">
                    <ul id="ticker">
                        <li>
                            1)Testimonial one.
                        </li>
                        <li>
			   2)Testimonial two.
                        </li>
                        <li>
                           3)Testimonial two.
                        </li>
                        <li>
                            4)Testimonial two.
                        </li>
                    </ul>
                        </div>
                </div>
                <?php while (have_posts()): the_post(); ?>
<h2><?php the_title(); ?></h2>
<?php the_excerpt(); ?>
<img src="<?php echo catch_that_image() ?>" alt="<?php the_title(); ?>"/>
<p><a href="<?php the_permalink(); ?>">Read more...</a></p>
<?php endwhile; ?>
            </div>
        </div>
        <div class="bg1">
            <div class="main">
                <article id="content2">
                    <div class="wrapper">
                        <!--<div class="col2 marg_right1">
                            <h3>Welcome to Our Company!</h3>
                            <div class="wrapper">
                                <figure class="left marg_right1"><img src="images/page1_img1.jpg" alt=""></figure>
                                <p class="color2 pad_bot1">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum accusamus</p>
                                <p>Corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum.</p>
                            </div>
                            <p>Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minusi quod maxime placeat facere possimus omnis voluptas assumenda est omnis dolor repellendus. Temporibus autem quibusdam aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae molestiae.</p>
                            <a href="#" class="button1">Read More</a>
                        </div>-->

                        <div class="col1" style="width:240px;">
                            <h4>Publications</h4>
                            <ul class="list2">
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                            </ul>
                        </div>
                        <div class="col1" style="width:240px;">
                            <h4>Publications</h4>
                            <ul class="list2">
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                            </ul>
                        </div>
                        <div class="col1" style="width:240px;">
                            <h4>Publications</h4>
                            <ul class="list2">
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                            </ul>
                        </div>

                        <div class="col1" style="width:240px;">
                            <h4>Publications</h4>
                            <ul class="list2">
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                                <li><a href="#">PR Management</a></li>
                            </ul>
                        </div>

                    </div>
                </article>
            </div>
        </div>
        <div class="main">
            <!--content end-->
            <!--footer -->
            <footer>
                <ul id="icons">
                    <li class="first">Follow Us:</li>
                    <li><a href="#" class="normaltip" title="Facebook"><img src="images/icon1.jpg" alt=""></a></li>
                    <li><a href="#" class="normaltip" title="Twitter"><img src="images/icon2.jpg" alt=""></a></li>
                    <li><a href="#" class="normaltip" title="Picasa"><img src="images/icon3.jpg" alt=""></a></li>
                    <li><a href="#" class="normaltip" title="YouTube"><img src="images/icon4.jpg" alt=""></a></li>
                </ul>
                <div style="text-align: center;">
                    <a href="">Home</a> |
                    <a href="">About Us</a> |
                    <a href="">SEO Articles</a> |
                    <a href="">Pricing & Info</a> |
                    <a href="">Career</a> |
                    <a href="">Contact Us</a> |
                    <a href="">Resource</a> |
                    <a href="">Site Map</a>
                </div>
                <!--Superior.com &copy; 2011 <br>Website Template by <a href="http://www.templatemonster.com/" target="_blank">TemplateMonster.com</a><br>-->
                <!-- {%FOOTER_LINK} -->
            </footer>
            <!--footer end-->
        </div>
        <script type="text/javascript"> Cufon.now(); </script>
        <script>
            $(window).load(function(){
                $('#slider')._TMS({
                    banners:true,
                    waitBannerAnimation:false,
                    preset:'diagonalFade',
                    easing:'easeOutQuad',
                    pagination:false,
                    duration:400,
                    slideshow:2000,
                    bannerShow:function(banner){
                        banner.css({marginRight:-500}).stop().animate({marginRight:0}, 600)
                    },
                    bannerHide:function(banner){
                        banner.stop().animate({marginRight:-500}, 600)
                    }
                })
            })
        </script>
        <script>

            function tick(){
                $('#ticker li:first').slideUp( function () { $(this).appendTo($('#ticker')).slideDown(); });
            }
            setInterval(function(){ tick () }, 2000);


        </script>
    </body>
</html>