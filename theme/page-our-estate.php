<?php get_header() ?>

<section class="hero top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">Growing everyday business with innovative digital solutions</h2>
            <!------------ BUTTON ------------>
            <a href="/get-quote" class="bg-red-500 w-40 py-3 mx-auto text-center text-white font-semibold capitalize font-body">Get started</a>
        </div>
    </div>
</section>

<!-------------------------------- 
/// 02  PHASE 1 SECTION
---------------------------------->
<section class="blog py-16 bg-cream">
    <div class="cont mx-auto flex flex-col justify-center gap-14 px-4">
        <div class="flex flex-col justify-center gap-2 heading w-full">
            <!-------------- HEADING -------------->
            <h2 class="text-3xl md:text-4xl font-bold capitalize">phase I estate</h2>
            <!-------------- LOCATION -------------->
            <div class="flex gap-3 items-center py-4">
                    <div class="">
                        <span class="flex justify-center items-center h-10 w-10 border border-green-800 rounded-full">
                            <i class="fas fa-map-marker-alt text-green-800"></i>
                        </span>
                    </div>
                    <div class="">
                            <p class="text-base">Ori-Okuta, Atan, Otta, Ogun State</p>
                    </div>
                </div>
        </div>
        <!-------------- FACILITIES -------------->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">

        <!-- facilities section -->
            <?php $query_args = array(
                'post_type' => 'facilities',
        //         'posts_per_page' => 5,
                'order' => 'ASC',
            );

            $query = new WP_Query( $query_args ); ?>

    <!-- <div class="max-w-5xl px-4 mx-auto owl-carousel owl-theme testimonial-slide"> -->
            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content/content','facilities');?>  
                
            <?php endwhile; else: endif; ?>
    <!-- </div> -->
        </div>
        <!-------------- BUTTON -------------->
       <div class="list">
            <ul role="list" class="marker:text-light-green pl-5 space-y-3 text-base font-medium list-outside list-disc">
                <li class="text-gray-900">
                    Windows Based OS
                </li>
                <li class="text-gray-900">
                    Full color touchscreen with integrated label design function
                </li>
                <li class="text-gray-900">
                    Ability to customize user interface
                </li>
                <li class="text-gray-900">
                    Ethernet connection and Windows driver
                </li>
                <li class="text-gray-900">
                    Unique font support (All languages for menu and auto codes)
                </li>
            </ul>
        </div>
       
    </div>
</section>
<!-------------------------------
///  03 TESTIMONY SECTION 
------------------------------->
<section class="py-20">
    <?php get_template_part('template-parts/content/content','testimonial');?>
</section>
<!-------------------------------- 
/// 04  PHASE 2 SECTION
---------------------------------->
<section class="blog py-16 bg-cream">
    <div class="cont mx-auto flex flex-col justify-center gap-14 px-4">
        <div class="flex flex-col justify-center gap-2 heading w-full">
            <!-------------- HEADING -------------->
            <h2 class="text-3xl md:text-4xl font-bold capitalize">phase II estate</h2>
            <!-------------- LOCATION -------------->
            <div class="flex gap-3 items-center py-4">
                    <div class="">
                        <span class="flex justify-center items-center h-10 w-10 border border-green-800 rounded-full">
                            <i class="fas fa-map-marker-alt text-green-800"></i>
                        </span>
                    </div>
                    <div class="">
                            <p class="text-base">Ori-Okuta, Atan, Otta, Ogun State</p>
                    </div>
                </div>
        </div>
        <!-------------- FACILITIES -------------->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">

        <!-- facilities section -->
            <?php $query_args = array(
                'post_type' => 'facilities',
        //         'posts_per_page' => 5,
                'order' => 'ASC',
            );

            $query = new WP_Query( $query_args ); ?>

    <!-- <div class="max-w-5xl px-4 mx-auto owl-carousel owl-theme testimonial-slide"> -->
            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content/content','facilities');?>  
                
            <?php endwhile; else: endif; ?>
    <!-- </div> -->
        </div>
        <!-------------- BUTTON -------------->
       <div class="list">
            <ul role="list" class="marker:text-light-green pl-5 space-y-3 text-base font-medium list-outside list-disc">
                <li class="text-gray-900">
                    Windows Based OS
                </li>
                <li class="text-gray-900">
                    Full color touchscreen with integrated label design function
                </li>
                <li class="text-gray-900">
                    Ability to customize user interface
                </li>
                <li class="text-gray-900">
                    Ethernet connection and Windows driver
                </li>
                <li class="text-gray-900">
                    Unique font support (All languages for menu and auto codes)
                </li>
            </ul>
        </div>
       
    </div>
</section>
<!-------------------------------
///  05 CTA SECTION 
------------------------------->
<section class="text-white bg-center bg-no-repeat bg-cover my-16">
    <?php get_template_part('template-parts/content/content','cta');?>
</section>

<?php get_footer() ?>