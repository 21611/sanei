<?php get_header(); ?>

			<div class="news_ct">
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
          <li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/-tokyo">gift</a></li>
          <li class="news-top__nav-link"><a href="<?php bloginfo('template_url') ?>/news">news</a></li>
        </ul>
      </div>
      </nav>
    </div>
    <div class="news-profile">
    <div class="news-profile__title-ct">
      <p class="news-profile__title-en">News</p>
      <span class="news-profile__title-jp">お知らせ</span>
    </div>

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<?php get_template_part( 'post-formats/format', get_post_format() );?>
						<?php endwhile; ?>
						<?php else : ?>

							<article id="post-not-found" class="hentry cf">
									<header class="article-header">
										<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
									</header>
									<section class="entry-content">
										<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
									</footer>
							</article>

						<?php endif; ?>

					</main>



				</div>

			</div>



<div class="news-nav">
<?php get_template_part( 'nav' ); ?>
</div>

<?php get_footer(); ?>
