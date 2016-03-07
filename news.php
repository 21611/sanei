<?php
/*
Template Name:news
*/
?>

<?php get_header(); ?>
<body <?php body_class(); ?> >
<div class="news_wp">

    <div class="news-top">
      <nav class="news-top__nav">
       <div class="news-top__nav-logo">
       <a href="<?php bloginfo('template_url') ?>/top"> 
       	<img class="news-top__nav-img" src="<?php bloginfo('template_url'); ?>/library/images/logo-white.svg"/></a>
      </div>
      	<div class="news-top__nav-links">
        <ul class="news-top__nav-bg">
          <li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/top">top</a></li>
        	<li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/company">company</a></li>
          <li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/product-kyoto">package</a></li>
          <li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/product-tokyo">gift</a></li>
          <li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/news">news</a></li>
        </ul>
      </div>
      

      </nav>
    </div>
    <div class="news-profile">
    <div class="news-profile__title-ct">
      <p class="news-profile__title-en">News</p>
      <p class="news-profile__title-jp">お知らせ</p>
    </div>



<div class="news-contents__ct">

<?php
$posts = get_posts('numberposts=100&category=3');
global $post;
?>

<?php if($posts): foreach($posts as $post): setup_postdata($post); ?>

<dl class="news-contents__box">
  <dt class="news-contents__time"><?php echo get_the_date('Y/m/d'); ?></dt>
  <dd class="news-contents__title">
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
  </dd >
</dl>

<?php endforeach; endif;
?>



	</div>

</div>

















<div class="news-nav">
<?php get_template_part( 'nav' ); ?>
</div>
  </div>

<?php get_footer(); ?>