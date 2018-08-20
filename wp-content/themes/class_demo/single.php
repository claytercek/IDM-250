<?php get_header() ?>

<div id="page-banner" style="background-image: url(dist/img/s-1.jpg);">
  <div class="content  wow fdeInUp" style="visibility: visible; animation-name: fdeInUp;">
    <div class="container">
      <h1>Single / Post Detail</h1>
    </div>
  </div>
</div>

<!--page body-->

<div id="page-body">
  <div class="container">
    <div class="row  wow fdeInUp">
    
    <!--Image block-->
    <div class="col-md-6 col-sm-12">
    <figure> <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail( 'large', ['class' => "img-responsive"]) ; ?>
                    <?php else: ?>
                      <img src="https://placehold.it/1280x720/123" alt="">
                    <?php endif; ?>
    </figure>
    </div><!--/Image block-->

    <!--content block-->
    <div class="col-md-6 col-sm-12 page-block ">
  
          <header class="entry-header" >
          <span><a href="#">Design</a> . <a href="#">Illustrations</a></span>
        <h2><?php echo the_title();?></h2>  
        <ul class=" custom-social">
        <li>Share :</li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-facebook"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-rss"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-twitter"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-linkedin-square"></i></a></li>
                <li> <a href="mailto:someone@example.com?"><i class="fa fa-vimeo-square"></i></a></li>
              </ul>
           
  </header>
          
  <?php // TO SHOW THE PAGE CONTENTS?>
            <?php while (have_posts()) : the_post(); ?> <!--Because the_content() works only inside a WP Loop -->
              <?php the_content(); ?> <!-- Page Content (WYSIWYG Field) -->
            <?php endwhile; //resetting the page loop?>
            <?php wp_reset_query(); //resetting the page query?>
        
    </div><!--/content block-->
     <div class="clearfix"></div>
     
     <!--Portfolio nav-->
      <nav class="navigation posts-navigation" role="navigation">
          <ul>
            <li class="pull-left">
              <div class="nav-previous"><a href="http://localhost/wordpress/page/2/"><i class="fa fa-chevron-left"></i> Previous </a></div>
            </li>
            <li><a href="portfolio.html"><i class="fa fa-th-large"></i> Back to Porfolio</a></li>
            
            <li class="pull-right">
              <div class="nav-next"><a href="http://localhost/wordpress/page/2/">Next  <i class="fa fa-chevron-right"></i></a></div>
            </li>
          </ul>
        </nav>  <!--/Portfolio nav-->
 
    </div>
  </div>
</div>
<!--/page body-->
<div class="clearfix"></div>


<!-- our works block
    ==========================================-->
<section id="our-work-block">
  <div class="container">
    <div class="row"> 
      <!--section-title-->
      <div class="section-title text-center wow fadeInUp">
        <h4>Realated Projects</h4>
      
      </div>
      <!--/section-title-->
      <div class="clearfix"></div>
      <div class="works">
        <ul class="grid">
          <li>
            <figure><img src="dist/img/01-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Codetowp branding</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="dist/img/02-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
          <li>
            <figure><img src="dist/img/03-screenshot.jpg" alt="Screenshot 01">
              <figcaption>
                <div class="caption-content">
                  <h6>Optimised For Design</h6>
                  <a href="#">Design</a> <a href="#">brand</a>
                  <ul class="work-more">
                    <li><a href="#"><i class="fa fa-link"></i></a></li>
                  </ul>
                </div>
              </figcaption>
            </figure>
          </li>
       
        </ul>
         </div>
    </div>
  </div>
</section>

<?php get_footer() ?>