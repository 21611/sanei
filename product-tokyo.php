<?php
/*
Template Name:productokyo
*/
?>

<?php get_header(); ?>

   <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/library/css/fonts/font-awesome-4.3.0/css/font-awesome.min.css" />
<body <?php body_class(); ?> >
<div class="product__ct">

  <div class="product-top">
    <nav class="product-top__nav">
         <div class="product-top__nav-logo">
         <a href="<?php bloginfo('template_url') ?>/top"> 
          <img class="product-top__nav-img" src="<?php bloginfo('template_url'); ?>/library/images/logo-white.svg"/></a>
        </div>
          <div class="product-top__nav-links">
          <ul class="product-top__nav-bg">
            <li class="product-top__nav-link"><a href="<?php bloginfo('template_url') ?>/top">top</a></li>
            <li class="product-top__nav-link"><a href="<?php bloginfo('template_url') ?>/company">company</a></li>
            <li class="product-top__nav-link"><a href="<?php bloginfo('template_url') ?>/product-kyoto">package</a></li>
            <li class="product-top__nav-link"><a href="<?php bloginfo('template_url') ?>/product-tokyo">gift</a></li>
            <li class="product-top__nav-link"><a href="<?php bloginfo('template_url') ?>/news">news</a></li>
          </ul>
        </div>
    </nav>
  </div>

  
  <section class="product-title__ct">
     <div class="product-title__title">
      <p class="product-title__title-en">Our products</p>
      <span class="product-title__title-jp">ギフト商品</span>
    </div>
    <ul class="product-title__contact">
      <li class="product-title__contact-text">ギフト商品のお問い合わせ</li>
      <li class="product-title__contact-tel"><i class="fa fa-phone"></i>03-6434-7062</li>
      <li class="product-title__contact-email"><i class="fa fa-envelope"></i><a href="mailto:tokyo@san-ay.co.jp">tokyo@san-ay.co.jp</a></li>
    </ul>
  </section>



  <div id="theSidebar" class="sidebar"></div>
    <div id="theGrid" class="main">
      <section class="grid">
        <?php $blog_postss = query_posts('category_name=tokyo');foreach($blog_postss as $post): ?>
        <a class="grid__item" href="#">
          <div class="card-img__ct">
            <img class="card-img__img" src="<?php echo catch_that_image() ?>" />
            <div class="loader"></div>
          </div>
        </a>
<!-- ここまでループ-->
        <?php endforeach; ?>
      </section>

<!-- contents of light box -->
      <section class="content">
        <div class="scroll-wrap">
          <?php $blog_posts = query_posts('category_name=tokyo');foreach($blog_posts as $post): ?>
          <article class="content__item">
            <div class="meta meta--full">
              <?php the_post_thumbnail( 'large' );  ?>
              <span class="category"><?php the_title(); ?></span>
              <div class="content__ct">
                <?php echo apply_filters('the_content', $post->post_content);?>
               <ul class="content__text">
                <li><?php echo the_field("productnumber", $post -> ID); ?></li>
                <li><?php echo the_field("productname", $post -> ID); ?></li>
                <li><?php echo the_field("productsize", $post -> ID); ?></li>
                <li><?php echo the_field("productmaterial", $post -> ID); ?></li>
                <li><?php echo the_field("producthako", $post -> ID); ?></li>
                <li><?php echo the_field("productprice", $post -> ID); ?></li>
                <li><img src="<?php echo the_field("productcolor", $post -> ID); ?>" ></li>
                
                </ul>
              </div>
            </div>
          </article>
<!-- ここまでループ-->
          <?php endforeach; ?>
        </div>
        <button class="close-button"><i class="fa fa-close"></i><span>Close</span></button>
      </section><!--/ content -->

      </div><!-- /#theGrid -->

    </div><!-- /product-tokyo__ct-->


<?php get_template_part( 'nav' ); ?>



    <script src="<?php echo get_template_directory_uri(); ?>/library/js/site/modernizr.custom.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/site/classie.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/site/main.js"></script>





<?php wp_footer(); ?>

  </body>
</html>


