<?php get_header() ?>

<section class="estate-page top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">Check out our completed peace Garden Phase I Estate and our ongoing Phase II</h2>
            <!------------ BUTTON ------------>
            <div class="flex flex-wrap justify-center">
                <a href="<?php get_site_url() ?>/contact" class="block w-full px-12 py-3 text-base font-medium text-white bg-dark-green border border-dark-green hover:border-white rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring  transition duration-300 hover:ease-in">
                    Get Started
                </a>
            </div>
        </div>
    </div>
</section>

<!-------------------------------- 
/// 02  PHASE 1 SECTION
---------------------------------->
<section class="py-16 bg-cream">
    <div class="cont mx-auto flex flex-col justify-center gap-14 px-4">
        <div class="flex flex-col justify-center gap-2 heading w-full">
            <!-------------- HEADING -------------->
            <h2 class="text-3xl md:text-4xl font-bold capitalize">phase I estate</h2>
            <!-------------- LOCATION -------------->
            <div class="flex gap-3 items-center pt-4">
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
         <!-------------- FACILITY -------------->
       <div class="list pl-5">
            <ul role="list" class="marker:text-green-800 pl-5 space-y-3 text-base font-medium list-outside list-disc">
                <li class="text-gray-900">
                    25-Minute Drive into Lagos
                </li>
                <li class="text-gray-900">
                    Islamic School
                </li>
                <li class="text-gray-900">
                    Standard Built Mosque
                </li>
                <li class="text-gray-900">
                    Constant Electricity
                </li>
                <li class="text-gray-900">
                    Accessible Road Networks
                </li>
            </ul>
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
<section class="py-16 bg-cream">
    <div class="cont mx-auto flex flex-col justify-center gap-14 px-4">
        <div class="flex flex-col justify-center gap-2 heading w-full">
            <!-------------- HEADING -------------->
            <h2 class="text-3xl md:text-4xl font-bold capitalize">phase II estate</h2>
            <!-------------- LOCATION -------------->
            <div class="flex gap-3 items-center pt-4">
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
        <!-------------- FACILITY -------------->
        <div class="list pl-5">
            <ul role="list" class="marker:text-green-800 pl-5 space-y-3 text-base font-medium list-outside list-disc">
                <li class="text-gray-900">
                    25-Minute Drive into Lagos
                </li>
                <li class="text-gray-900">
                    Islamic School
                </li>
                <li class="text-gray-900">
                    Standard Built Mosque
                </li>
                <li class="text-gray-900">
                    Constant Electricity
                </li>
                <li class="text-gray-900">
                    Accessible Road Networks
                </li>
            </ul>
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
       
    </div>
</section>
<!-------------------------------
///  05 CTA SECTION 
------------------------------->
<section class="text-white bg-center bg-no-repeat bg-cover my-16">
    <?php get_template_part('template-parts/content/content','cta');?>
</section>

<?php get_footer() ?>