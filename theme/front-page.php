<?php get_header() ?>
<!-------------------------------- 
/// 01   HERO SECTION
---------------------------------->
<section class="hero top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center justify-center items-center text-center  text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">The Foremost Muslim Real Estate Company In Nigeria Providing Homes that fulfill Your Dreams</h2>
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
/// 02  SERVICE SECTION
---------------------------------->
<section class="">
    <div class="cont px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
            <!------------ CARD 1 ------------>
            <div class="p-8">
                <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-light-green rounded-full mx-auto font-body">
                    <i class="fas fa-desktop text-white"></i>
                </p>
                <p class="py-5 text-center font-body">
                    Biggest Company in Real Estate for Muslim Investors, Partners, and Clients
                </p>
            </div>
            <!------------ CARD 2 ------------>
            <div class="p-8">
                <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-light-green rounded-full mx-auto font-body">
                    <i class="fas fa-chart-line text-white"></i>
                </p>
                <p class="py-5 text-center font-body">
                    We make Owning a House easy for You
                </p>
            </div>
            <!------------ CARD 3 ------------>
            <div class="p-8">
                <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-light-green rounded-full mx-auto font-body">
                    <i class="fas fa-users text-white"></i>
                </p>
                <p class="py-5 text-center font-body">
                We make Owning a House easy for You
                </p>
            </div>
        </div>
    </div>
   
</section>
<!-------------------------------- 
/// 03  PHASE 1 SECTION
---------------------------------->
<section class="pb-16">
    <div class="cont mx-auto flex flex-col-reverse md:grid grid-cols-2 px-4">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col justify-center gap-3 py-16 px-4 lg:px-8 bg-gray">
            <!-- <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-white rounded-full font-body">
                <i class="fas fa-edit"></i>
            </p> -->
            <h4 class="capitalize font-semibold text-4xl font-head mb-6 text-black">Phase I Estate</h4>
            <!------ Paragraph ------>
            <p class="lg:w-5/6 text-base font-body text-black">Own a Home now at our ongoing Peace Garden Muslim Estate Phase II</p>
            <!-- Location -->
            <div class="flex gap-3 items-center py-4">
                <div class="">
                    <span class="flex justify-center items-center h-10 w-10 border border-dark-green rounded-full">
                        <i class="fas fa-map-marker-alt text-dark-green"></i>
                    </span>
                </div>
                <div class="">
                        <p class="text-base text-black">Ori-Okuta, Atan, Otta, Ogun State</p>
                </div>
            </div>
            <!------ Button ------>
            <div class="btn">
                <a href="<?php get_site_url() ?>/our-estate" class="inline-flex capitalize border border-dark-green hover:border-dark-green items-center px-6 py-3 bg-dark-green hover:bg-transparent text-white hover:text-dark-green font-medium rounded transition duration-300 hover:ease-in">more facilities</a>
            </div>
        </div>
        <!------------- COLUMN 2 ------------>
        <div class="flex justify-center">
            <img class="object-cover" src="/wp-content/themes/mujjacon-website/theme/asset/image/estate-3.jpg" alt="digital-branding">
        </div>
    </div>
</section>
<!-------------------------------- 
/// 04  FACILITIES SECTION
---------------------------------->
<section class="py-16 bg-cream">
    <div class="cont mx-auto flex flex-col items-center justify-center gap-14 px-4">
        <!-------------- HEADING -------------->
        <div class="flex flex-col justify-center gap-8 heading w-full">
            <h2 class="text-3xl md:text-4xl font-bold capitalize">our facilities</h2>
        </div>
        <!-------------- FACILITIES -------------->
        
        <div class="owl-carousel owl-theme facilities-slide">
            <!-- facilities section -->
            <?php $query_args = array(
                'post_type' => 'facilities',
                'posts_per_page' => 999,
                'order' => 'DSC',
                'taxonomy' => 'phase1',
            );
            
            $query = new WP_Query( $query_args ); ?>


            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content/content','facilities');?>  
                
            <?php endwhile; else: endif; ?>

        </div>
        <!-------------- BUTTON -------------->
        <div class="btn">
            <a href="<?php get_site_url() ?>/our-estate" class="inline-flex capitalize border border-dark-green hover:border-dark-green items-center px-6 py-3 bg-dark-green hover:bg-transparent text-white hover:text-dark-green font-medium rounded transition duration-300 hover:ease-in">more facilities</a>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 05  PHASE 2 SECTION
---------------------------------->
<section class="service-two py-16">
    <div class="cont mx-auto flex flex-col md:grid md:grid-cols-5 px-4">
         <!------------- COLUMN 1 ------------>
         <div class="flex justify-center items-center col-span-3">
            <img class="object-cover" src="/wp-content/themes/mujjacon-website/theme/asset/image/estate-2.jpg" alt="digital-branding">
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="flex flex-col justify-center gap-3 col-span-2 py-16 px-4 lg:px-10 bg-gray">
            <!-- <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-white rounded-full font-body">
                <i class="fas fa-edit"></i>
            </p> -->
            <h4 class="capitalize font-semibold text-4xl font-head mb-6 text-black">Phase II Estate</h4>
            <!------ Paragraph ------>
            <p class="lg:w-5/6 text-base font-body text-black">Own a Home now at our ongoing Peace Garden Muslim Estate Phase II</p>
            <!-- Location -->
            <div class="flex gap-3 items-center py-4">
                <div class="">
                    <span class="flex justify-center items-center h-10 w-10 border border-dark-green rounded-full">
                        <i class="fas fa-map-marker-alt text-dark-green"></i>
                    </span>
                </div>
                <div class="">
                        <p class="text-base text-black">Ori-Okuta, Atan, Otta, Ogun State</p>
                </div>
            </div>
            <!------ Button ------>
            <div class="btn">
                <a href="<?php get_site_url() ?>/our-estate" class="inline-flex capitalize border border-dark-green hover:border-dark-green items-center px-6 py-3 bg-dark-green hover:bg-transparent text-white hover:text-dark-green font-medium rounded transition duration-300 hover:ease-in">more facilities</a>
            </div>
        </div>
       
    </div>
</section>   
<!-------------------------------
///  06   BLOG SECTION 
------------------------------->
<section class="py-16 bg-cream">
    <div class="cont mx-auto flex flex-col items-center justify-center gap-16 px-4">
        <!-------------- HEADING -------------->
        <div class="flex flex-col items-center justify-center gap-8 heading text-center">
            <h2 class="text-3xl md:text-4xl font-bold capitalize">our blog</h2>
        </div>
        <!-------------- BLOGS -------------->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 w-full">

             <!-- post section -->
             <?php $query_args = array(
                'post_type' => 'post',
             'posts_per_page' => 3,
                'order' => 'ASC',
            );

            $query = new WP_Query( $query_args ); ?>
            <?php if( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>

                <?php get_template_part('template-parts/content/content','post');?>  

            <?php endwhile; else: endif; ?>
 
        </div>
        <!-------------- BUTTON -------------->
        <div class="btn">
            <a href="<?php get_site_url() ?>/blog" class="inline-flex capitalize border border-dark-green hover:border-dark-green items-center px-6 py-3 bg-dark-green hover:bg-transparent text-white hover:text-dark-green font-medium rounded transition duration-300 hover:ease-in">view more</a>
        </div>
    </div>
</section>
<!-------------------------------
///  07 TESTIMONY SECTION 
------------------------------->
<section class="py-20">
    <?php get_template_part('template-parts/content/content','testimonial');?>
</section>
<!-------------------------------
///  08 CTA SECTION 
------------------------------->
<section class="text-white bg-center bg-no-repeat bg-cover my-16">
    <?php get_template_part('template-parts/content/content','cta');?>
</section>

<?php get_footer() ?>



