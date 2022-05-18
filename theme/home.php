<?php get_header() ?>
<!-------------------------------- 
/// 01   HERO SECTION
---------------------------------->
<section class="hero top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">our blog</h2>
            
        </div>
        
    </div>
</section>
<!-------------------------------
///  02  BLOG SECTION 
------------------------------->
<section class="blog pb-16 pt-20 bg-cream">
    <div class="cont mx-auto flex flex-col items-center justify-center gap-16 px-4">
        <!-------------- BLOGS -------------->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 sm:gap-y-12 w-full">

            <?php if( have_posts() ): while( have_posts() ): the_post();?>

                <?php get_template_part('template-parts/content/content','post');?>  

            <?php endwhile; else: endif; ?>
 
        </div>
        <!-------------- BUTTON -------------->
        <div class="flex justify-center items-center">
            <?php the_posts_pagination(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>