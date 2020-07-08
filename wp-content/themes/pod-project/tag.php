<?php
/**
 * The tag.php file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pod_project
 */

get_header();

?>


 <!-- ***** Breadcrumb Area Start ***** -->
 <!-- <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(img/bg-img/2.jpg);"> -->
 <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bg-img/2.jpg);">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <h2 class="title mt-70">Blog</h2>
        </div>
      </div>
    </div>
  </div>
  <div class="breadcumb--con">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blog</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Breadcrumb Area End ***** -->

  <!-- ***** Blog Area Start ***** -->
  <section class="blog-area">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-8">

      <!-- Single Blog Area -->
      <?php echo 'tag.php';?>
		  <?php if( have_posts() ){
			  while( have_posts()){
				  the_post();
				  ?>

			  
          <div class="single-blog-area mt-50 mb-50">
			<!-- <a href="#" class="mb-30"><img src="<?php //echo get_template_directory_uri();?>/img/bg-img/21.jpg" alt=""></a> -->
			<a href="#" class="mb-30"><?php the_post_thumbnail();?></a>
            <!-- Content -->
            <div class="post-content">
              <a href="#" class="post-date"><?php the_date();?></a>
              <a href="#" class="post-title"><?php the_title();?></a>
              <div class="post-meta mb-15">
                <a href="#" class="post-author"><?php the_author();?></a> |
                <a href="#" class="post-catagory"><?php the_category();?></a>
              </div>
              <p><?php the_content();?></p>
              <a href="<?php the_permalink();?>" class="read-more-btn">Continue reading <i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </div>
		  </div>
		  
		  <?php }
			  }?>

          
          

          <!-- Pagination -->
          <div class="poca-pager d-flex mb-80">
            <a href="#">Previous Post <span>Episode 3 – Wardrobe For Busy People</span></a>
            <a href="#"> Next Post <span>Episode 6 – Defining Your Style</span></a>
          </div>

        </div>

        <?php get_sidebar();?>
      </div>
    </div>
  </section>
  <!-- ***** Blog Area End ***** -->

  <!-- ***** Newsletter Area Start ***** -->
  <section class="poca-newsletter-area bg-img bg-overlay pt-50 jarallax" style="background-image: url(<?php echo get_template_directory_uri();?>/img/bg-img/15.jpg);">
    <div class="container">
      <div class="row align-items-center">
        <!-- Newsletter Content -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-content mb-50">
            <h2>Sign Up To Newsletter</h2>
            <h6>Subscribe to receive info on our latest news and episodes</h6>
          </div>
        </div>
        <!-- Newsletter Form -->
        <div class="col-12 col-lg-6">
          <div class="newsletter-form mb-50">
            <form action="#" method="post">
              <input type="email" name="nl-email" class="form-control" placeholder="Your Email">
              <button type="submit" class="btn">Subscribe</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ***** Newsletter Area End ***** -->










<?php
//get_sidebar();
get_footer();
