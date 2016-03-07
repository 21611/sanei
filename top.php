<?php
/*
Template Name:top
*/
?>




	




<?php get_header(); ?>



<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
<div class="top-container">


<div class="top__nav-logo-mobile">
    <img class="top__nav-img" src="<?php bloginfo('template_url'); ?>/library/images/logo-black.svg"/>
</div>

<div class="top-left">
<a href="/product-kyoto" class="top-left__bg">tokyo</a>
</div>

<div class="top-right">
<a href="/product-tokyo" class="top-right__bg"></a>
</div>

<div class="top-text__ct">
	<p>こころをこめた贈り物は絆のしるし</p>
  <p>想いをカタチにします</p>
</div>
<div class="top-footer">
	

<!- nav ->
      <nav class="top__nav">
      	<div class="top__nav-news">
   <?php $blog_posts = query_posts('category_name=news&showposts=3');
  foreach($blog_posts as $post): ?>

  <div class="">
       <span class="columns small-2 small-offset-2"><?php echo get_the_date('m/d'); ?></span>
     <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
      </div>
  
<!-- ここまでループ-->
   <?php endforeach; ?>
      		</div>
        <div class="top__nav-logo">
          <img class="top__nav-img" src="<?php bloginfo('template_url'); ?>/library/images/logo-black.svg"/>
        </div>
        <div class="top__nav-links">
          <ul class="top__nav-bg">
            <li class="top__nav-link"><a href="<?php bloginfo('template_url') ?>/top">top</a></li>          
            <li class="top__nav-link"><a href="<?php bloginfo('template_url') ?>/company">company</a></li>
            <li class="top__nav-link"><a href="<?php bloginfo('template_url') ?>/product-kyoto">package</a></li>
            <li class="top__nav-link"><a href="<?php bloginfo('template_url') ?>/product-tokyo">gift</a></li>
            <li class="top__nav-link"><a href="<?php bloginfo('template_url') ?>/news">news</a></li>
          </ul>
        </div>
      </nav>

</div>

















</div>




