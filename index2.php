<?php get_header(); ?><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Parse My Mind Theme</title>

    <!-- stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
    <link href="css/bootstrap-responsive.css" rel="stylesheet">
    <link href="css/Carousel_files/carousel.css" rel="stylesheet">
    <link rel="stylesheet" href="/tweetslider/style.css" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js">  </script>
    <script type="text/javascript" src="/tweetslider/jquery.tweetslider.min.js"></script>  
    <script type="text/javascript">
    </script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
    <script src="js/myscript.js"></script>
    <script src="test_files/nav-content.js"></script>
    <link href="css/index_styles.css" rel="stylesheet">
 </head>
			
 <div id="content">

				<div id="inner-content" class="wrap cf">

						<div id="main" class="m-all t-2of3 d-5of7 cf" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
							<!-- place header code in tag below-->
								
						<header class="navbar navbar-transparenta article-header" role="navigation">
            				<div class = "content row container-fluid">
                            <div id="branding">
                                 <a href="#"><img src="images/logos/TFO_green.png" alt ="TFO Logo">
                                 <span id="title-text"> THE FOREIGN OBSERVER  </span></a>

                            </div>
                            <div id="header-titles">
                                    <h1>Foreign Policy | Security </h1>
                                    <h2> Economics | Public Health | Opinion </h2>
                            </div>
            				</div>

						      <div class="container">
						        <div class="navbar-header">
						          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						            <span class="sr-only">
						              Toggle navigation
						            </span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						          </button>
						        </div> <!--/.navbar-header -->
						        <div class="navbar-collapse collapse">
						          <ul class="nav navbar-nav">
						            <li>
						              <a href="about.html">
						                About us?
						              </a>
						            </li>
						            <li>
						              <a href="/">
						                Contact us
						              </a>
						            </li>
				                    <li>
						              <a href="/">
						                Events
						              </a>
						            </li>
						          </ul>
				                <ul class="nav navbar-nav navbar-right">  
				                    <li class="dropdown">
						              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						                Sections <span class="caret"></span>
						              </a>
						              <ul class="dropdown-menu">
						                <li>
						                  <a href="/">
						                    Foreign Policy 
				                            
						                  </a>
						                </li>
						                <li>
						                  <a href="/">
						                    Security
						                  </a>
						                </li>
						                <li>
						                  <a href="/">
						                  Economics 
						                  </a>
						                </li>
						                <li>
						                  <a href="/">
						                   Public Health
						                  </a>
						                </li>
						                <li>
						                  <a href="/">
						                    Opinion
						                  </a>
						                </li>
						                <li class="divider"></li>
						                <li>
						                  <a href="/">
						                    <span class="label label-success">Jobs</span>
						                    Get involved with TFO
						                  </a>
						                </li>
						              </ul>
						            </li>
				                    <form class="navbar-form navbar-right" role="search">
				                        <div class="form-group">
				                            <input type="text" class="form-control" placeholder="Search">
				                        </div>
				                        <button type="submit" class="btn btn-default">Search</button>
				                    </form>
				                    </li>
				                </ul><!-- end of navbar section-->
						        </div> <!--/.nav-collapse -->
						      </div> <!--/.container -->
						    </header> <!--/.navbar-transparent -->
						    <header style="" class="navbar-slide">
						      <div class="navbar navbar-default" role="navigation">
						        <div class="container">
						          <div class="navbar-header">
						            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						              <span class="sr-only">
						                Toggle navigation
						              </span>
						              <span class="icon-bar"></span>
						              <span class="icon-bar"></span>
						              <span class="icon-bar"></span>
						            </button>
						            <a href="/" class="navbar-brand">
						              TFO
						            </a>
						          </div> <!--/.navbar-header -->
						          <div class="navbar-collapse collapse">
						            <ul class="nav navbar-nav">
						              <li>
						                <a href="/">
						                  What We Do
						                </a>
						              </li>
						              <li>
						                <a href="/">
						                  Why TFO?
						                </a>
						              </li>
						              <li class="dropdown">
						                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
						                  More <span class="caret"></span>
						                </a>
						                <ul class="dropdown-menu">
						                  <li>
						                    <a href="/">
						                      FAQs
						                    </a>
						                  </li>
						                  <li>
						                    <a href="/">
						                      Our Team
						                    </a>
						                  </li>
						                  <li>
						                    <a href="/">
						                      Sections
						                    </a>
						                  </li>
						                  <li>
						                    <a href="/">
						                      TFO + Plus Partners
						                    </a>
						                  </li>
						                  <li>
						                    <a href="/">
						                      Refer &amp; Earn
						                    </a>
						                  </li>
						                  <li class="divider"></li>
						                  <li>
						                    <a href="/">
						                      <span class="label label-success">Jobs</span>
						                      Work at TFO
						                    </a>
						                  </li>
						                </ul>
						              </li>
						            </ul>
						            <ul class="nav navbar-nav navbar-right">
						              <li>
						                <a href="/" class="btn btn-navbar-slide-plans">
						                  Sections
						                </a>
						              </li>
						            </ul>
						          </div> <!--/.nav-collapse -->
						        </div> <!--/.container -->
						      </div> <!--/.navbar-default -->
						    </header> <!--/.navbar-slide -->

									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline vcard">
                                        <?php printf( __( 'Posted <time class="updated" datetime="%1$s" pubdate>%2$s</time> by <span class="author">%3$s</span>', 'bonestheme' ), get_the_time('Y-m-j'), get_the_time(get_option('date_format')), get_the_author_link( get_the_author_meta( 'ID' ) )); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_content(); ?>
								</section>

								<footer class="article-footer cf">
									<p class="footer-comment-count">
										<?php comments_number( __( '<span>No</span> Comments', 'bonestheme' ), __( '<span>One</span> Comment', 'bonestheme' ), __( '<span>%</span> Comments', 'bonestheme' ) );?>
									</p>


                 	<?php printf( '<p class="footer-category">' . __('filed under', 'bonestheme' ) . ': %1$s</p>' , get_the_category_list(', ') ); ?>

                  <?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>


								</footer>

							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</div>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
