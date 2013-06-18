<?php
/**
 * The template used for displaying page intro text
 */
?>

<!-- SHOW DIFFERENT HEADER FOR ARTCILES  -->
<?php if(get_field('is_article')): ?>
    <header class="pagetitle">
        <div class="container rel">
            <?php $parent_title = get_the_title($post->post_parent); ?>
            <span class="entry-title"><?php echo $parent_title; ?></span>
            <div class="calltoaction">
                <a href="#" class="btn-watchvideo">Watch Video</a>
                <a href="<?php bloginfo('url'); ?>/contact/" class="btn-contact">Contact Us</a>
            </div>
        </div>
	</header>
	<?php if(get_field('page_overview')) : ?>
        <section id="pageintro">
            <div class="container rel">
                <div class="row">
                    <?php if(get_field('intro_graphic')) : ?>
                    <div class="span8">
                        <?php the_field('page_overview'); ?>
                    </div>
                </div>
                <?php $image = get_field('intro_graphic'); ?>
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="intro-graphic" />
                <?php else : ?>
                    <div class="span12">
                        <?php the_field('page_overview'); ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endif; ?>
    
<!-- HEADER FOR ALL OTHER PAGES  -->
<?php elseif (is_single() && ! is_page_template('page-templates/features-internal.php') ) : ?>
	<header class="pagetitle">
        <div class="container rel">
            <span class="entry-title">Blog</span>
            <div class="calltoaction">
                <a href="#" class="btn-watchvideo">Watch Video</a>
                <a href="<?php bloginfo('url'); ?>/contact/" class="btn-contact">Contact Us</a>
            </div>
        </div>
	</header>
	<?php if(get_field('page_overview')) : ?>
    <section id="pageintro">
        <div class="container rel">
            <div class="row">
                <?php if(get_field('intro_graphic')) : ?>
                <div class="span8">
                    <?php the_field('page_overview'); ?>
                </div>
            </div>
            <?php $image = get_field('intro_graphic'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="intro-graphic" />
            <?php else : ?>
                <div class="span12">
                    <?php the_field('page_overview'); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; if(get_field('page_overview_leftover')) : ?>
    <section id="pageintro-leftover">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <?php the_field('page_overview_leftover'); ?>
                </div>
                <div class="span4"></div>
            </div>
        </div>
    </section>
    <?php endif; ?>

<!-- HEADER FOR ALL OTHER PAGES  --> 
<?php elseif ( is_page_template('page-templates/features-internal.php') ) : ?>
<header class="pagetitle">
	<div class="container rel">
		<span class="entry-title">Features</span>
        <div class="calltoaction">
            <a href="#" class="btn-watchvideo">Watch Video</a>
            <a href="<?php bloginfo('url'); ?>/contact/" class="btn-contact">Contact Us</a>
        </div>
    </div>
</header>
<?php if(get_field('page_overview')) : ?>
<section id="pageintro">
    <div class="container rel">
        <div class="row">
            <?php if(get_field('intro_graphic')) : ?>
            <div class="span8">
                <?php the_field('page_overview'); ?>
            </div>
        </div>
        <?php $image = get_field('intro_graphic'); ?>
        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="intro-graphic" />
        <?php else : ?>
            <div class="span12">
                <?php the_field('page_overview'); ?>
            </div>
        <?php endif; ?>
    </div>
</section>
 <?php endif; ?>
<?php else : ?>
	<header class="pagetitle">
        <div class="container rel">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <div class="calltoaction">
                <a href="#" class="btn-watchvideo">Watch Video</a>
                <a href="<?php bloginfo('url'); ?>/contact/" class="btn-contact">Contact Us</a>
            </div>
        </div>
	</header>
	<?php if(get_field('page_overview')) : ?>
    <section id="pageintro">
        <div class="container rel">
            <div class="row">
                <?php if(get_field('intro_graphic')) : ?>
                <div class="span8">
                    <?php the_field('page_overview'); ?>
                </div>
            </div>
            <?php $image = get_field('intro_graphic'); ?>
            <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" title="<?php echo $image['title']; ?>" class="intro-graphic" />
            <?php else : ?>
                <div class="span12">
                    <?php the_field('page_overview'); ?>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <?php endif; if(get_field('page_overview_leftover')) : ?>
    <section id="pageintro-leftover">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <?php the_field('page_overview_leftover'); ?>
                </div>
                <div class="span4"></div>
            </div>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>
		
