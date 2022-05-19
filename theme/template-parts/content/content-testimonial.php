        <!-- testimonials section -->
        <?php $query_args = array(
        'post_type' => 'testimony',
//         'posts_per_page' => 5,
        'order' => 'ASC',
    );

    $query = new WP_Query( $query_args ); ?>

<div class="max-w-5xl px-4 mx-auto flex flex-col items-center justify-center gap-14">
    <!-------------- HEADING -------------->
    <div class="flex flex-col items-center justify-center gap-8 heading text-center">
        <h2 class="text-3xl md:text-4xl font-bold capitalize">what our happy client says</h2>
    </div>
    <div class="owl-carousel owl-theme testimonial-slide">
	    <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
            <div class="bg-gray rounded-lg mx-1 overflow-hidden grid gap-x-4">
                <div class="grid grid-cols-1 sm:grid-cols-3 sm:items-center">
                        <div class="h-full">
                            <?php if(has_post_thumbnail()):?>
                                <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="object-cover h-full" />
                            <?php endif;?>
                        </div>
    
                    <blockquote class="sm:col-span-2 p-8 flex flex-col gap-3">
                        <div class="client-title flex items-center gap-4">
                           
                            <div class="title">
                                <h5 class="capitalize text-base font-bold text-light-green"><?php the_title();?></h5>
                                <p class="capitalize text-dark-green text-sm"><?php the_field('occupation') ?></p>
                            </div>
                        </div>
                        <p class="text-lg font-medium"><?php the_content(); ?></p>
    
                    </blockquote>
                </div>
            </div>
            <?php endwhile; else: endif; ?>
		</div>
</div>