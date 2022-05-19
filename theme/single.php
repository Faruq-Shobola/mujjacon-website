<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package duromedia
 */

get_header();
?>

<!-------------------------------- 
/// 01   HERO SECTION
---------------------------------->

<section class="top-0 relative flex justify-center items-center overflow-hidden">
	<?php if(has_post_thumbnail()):?>
		<img
			class="absolute inset-0 object-[25%] object-cover w-full h-full opacity-25"
			src="<?php the_post_thumbnail_url();?>"
			alt="<?php the_title();?>"
		/>
  	<?php endif;?>

  <div class="block inset-0 absolute bg-gradient-to-r from-dark-green/75 to-light-green/75"></div>

  <div class="relative max-w-screen-2xl px-4 py-32 mx-auto">
    <div class="max-w-3xl text-center">
      <h1 class="text-white capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug "><?php the_title(); ?></h1>
    </div>
  </div>
</section>
<!-------------------------------- 
/// 02   BLOG CONTENT SECTION
---------------------------------->
<section class="py-16">
    <div class="max-w-6xl mx-auto flex flex-col md:grid md:grid-cols-6 gap-6">
        <!------------ BLOG CONTENT ------------>
        <div class="col-span-4 p-4 lg:p-8">
            <!------------ COLUMN 1 ------------>
            <div class="flex flex-col gap-3">
                <!------------ AUTHOR ------------>
                <div class="flex flex-col gap-4">
                    <p class="capitalize text-sm">posted by</p>
                    <div class="flex gap-4 items-center">
						<?php $author_id=$post->post_author; ?>
                        <h6 class="capitalize text-base font-bold"><?php the_author_meta( 'display_name' , $author_id ); ?></h6>
                    </div>
                </div>
                <!------------ DATE & TIME ------------>



            
            


                <div class="flex gap-2 capitalize text-base text-gray-200">
                    <time><?php echo get_the_date( 'jS F, Y' );?></time>
                </div>
            </div>
            <!------------ COLUMN 2 ------------>
            <div class="flex flex-col justify-center gap-5 py-10">
                <!------ CONTENT ------>
                <?php the_content(); ?>
            </div>
        </div>
        <!------------ BLOG SIDEBAR ------------>
        <div class="col-span-2 p-4 lg:p-8">
            <div class="flex flex-col gap-2 lg:w-5/6 mx-auto">
                <!------------ TITLE ------------>
                <h2 class="capitalize font-bold text-3xl py-2 text-orange">Related post</h2>
                <!------------ RELATED POST ------------>
                <div class="flex flex-col gap-6">
                    <div class="flex flex-col gap-6">
						<?php $related = get_posts( 
							array( 
								'category__in' => wp_get_post_categories($post->ID), 
								'numberposts' => 5, 
								'post__not_in' => array($post->ID) ) ); 
								if( $related ) 
									foreach( $related as $post ) { setup_postdata($post); 
						?>
						<!------------ BLOG CONTENT ------------>
						<div class="">
							<div class="flex flex-col gap-1">
								<a href="<?php the_permalink() ?>" class="capitalize text-base font-bold"><?php the_title(); ?></a>
								<p class="capitalize text-base"><?php the_excerpt();?></p>
                        	</div>
                        	<!------------ DATE & TIME ------------>
							<div class="flex gap-x-2 capitalize text-sm text-gray-200">
								<time><?php echo get_the_date( 'jS F, Y' );?></time> | 
								<span><?php the_field('read_time'); ?></span>
							</div>
						</div>
						
						
						<?php } wp_reset_postdata(); ?>
                    </div>
				</div>    
				
            </div> 
        </div> 
    </div>
</section>

<?php
get_footer();
