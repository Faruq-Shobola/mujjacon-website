<?php get_header() ?>
<!-------------------------------- 
/// 01   HERO SECTION
---------------------------------->
<section class="hero top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">Growing everyday business with innovative digital solutions</h2>
            <!------------ BUTTON ------------>
            <a href="/get-quote" class="bg-red-500 w-40 py-3 mx-auto text-center text-white font-semibold capitalize font-body">Get ed</a>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   HERO SECTION
---------------------------------->
<section class="py-16">
    <div class="cont px-4">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 py-10">
            <!------------ CARD 1 ------------>
            <div class="p-8 bg-stone-100">
                <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-pink-100 rounded-full mx-auto font-body">
                    <i class="fas fa-desktop"></i>
                </p>
                <p class="py-5 text-center font-body">
                    When Social Media is down, your website should save your business. Investing in your website is the next best thing you can do for your brand with our experience!
                </p>
            </div>
            <!------------ CARD 2 ------------>
            <div class="p-8 bg-stone-100">
                <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-pink-100 rounded-full mx-auto font-body">
                    <i class="fas fa-chart-line"></i>
                </p>
                <p class="py-5 text-center font-body">
                    Let's grow your business together! Being found on the first page of Google puts you ahead of your competitors. Let's help you do it!
                </p>
            </div>
            <!------------ CARD 3 ------------>
            <div class="p-8 bg-stone-100">
                <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-pink-100 rounded-full mx-auto font-body">
                    <i class="fas fa-users"></i>
                </p>
                <p class="py-5 text-center font-body">
                    Why not turn your likes and shares into money? Let your posts bring you customers. Let us help you sell more on social media.
                </p>
            </div>
        </div>
    </div>
   
</section>
<!-------------------------------- 
/// 03  PHASE 2 SECTION
---------------------------------->
<section class="service-two py-16">
    <div class="cont mx-auto flex flex-col-reverse md:grid grid-cols-2 px-4">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col justify-center gap-3 py-16 px-4 lg:px-8 bg-pink-100">
            <!-- <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-white rounded-full font-body">
                <i class="fas fa-edit"></i>
            </p> -->
            <h4 class="capitalize font-semibold text-4xl font-head mb-6">Phase II Estate</h4>
            <!------ Paragraph ------>
            <p class="lg:w-5/6 text-base font-body">Own a Home now at our ongoing Peace Garden Muslim Estate Phase II</p>
            <!-- Location -->
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
            <!------ Button ------>
            <a href="/what-we-do" class="bg-stone-500 w-32 py-3 text-center rounded-md text-white font-semibold capitalize font-body">Learn more</a>
        </div>
        <!------------- COLUMN 2 ------------>
        <div class="flex justify-center items-center">
            <img class="object-cover" src="/wp-content/themes/duromedia/images/graphics.jpg" alt="digital-branding">
        </div>
    </div>
</section>
<!-------------------------------- 
/// 04  FACILITIES SECTION
---------------------------------->
<section class="blog py-16 bg-cream">
    <div class="cont mx-auto flex flex-col items-center justify-center gap-14 px-4">
        <!-------------- HEADING -------------->
        <div class="flex flex-col justify-center gap-8 heading w-full">
            <h2 class="text-3xl md:text-4xl font-bold capitalize">our facilities</h2>
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
        <div class="btn">
            <button class="inline-flex border- border-green-800 hover:border-green-800 items-center px-6 py-3 bg-green-800 hover:bg-green-800 text-white font-medium rounded-sm">more facilities</button>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 05  PHASE 1 SECTION
---------------------------------->
<section class="service-two py-16">
    <div class="cont mx-auto flex flex-col md:grid md:grid-cols-3 px-4">
         <!------------- COLUMN 1 ------------>
         <div class="flex justify-center items-center col-span-2">
            <img class="object-cover" src="/wp-content/themes/duromedia/images/graphics.jpg" alt="digital-branding">
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="flex flex-col justify-center gap-3 col-span-1 py-16 px-4 lg:px-8 bg-pink-100">
            <!-- <p class="flex justify-center items-center font-bold text-4xl w-20 h-20 text-orange bg-white rounded-full font-body">
                <i class="fas fa-edit"></i>
            </p> -->
            <h4 class="capitalize font-semibold text-4xl font-head mb-6">Phase I Estate</h4>
            <!------ Paragraph ------>
            <p class="lg:w-5/6 text-base font-body">Own a Home now at our ongoing Peace Garden Muslim Estate Phase II</p>
            <!-- Location -->
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
            <!------ Button ------>
            <a href="/what-we-do" class="bg-stone-500 w-32 py-3 text-center rounded-md text-white font-semibold capitalize font-body">Learn more</a>
        </div>
       
    </div>
</section>   
<!-------------------------------
///  06   BLOG SECTION 
------------------------------->
<section class="blog py-16 bg-cream">
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
            <button class="inline-flex border- border-green-800 hover:border-green-800 items-center px-6 py-3 bg-green-800 hover:bg-green-800 text-white font-medium rounded-sm">more facilities</button>
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
<section class="text-white bg-center bg-no-repeat bg-cover">
    <div class="cont bg-green-800 px-4 py-16 mx-auto lg:items-center lg:flex rounded-md">
        <div class="max-w-3xl mx-auto text-center">
        <h3 class="text-3xl font-extrabold sm:text-4xl capitalize leading-6">Purchase Your Choice of Land Now</h3>

        <div class="flex flex-wrap justify-center gap-4 mt-12">
            <a href="<?php get_site_url() ?>/all-programmes" class="block w-full px-12 py-3 text-base font-medium text-white bg-primary border border-primary rounded sm:w-auto active:text-opacity-75 hover:bg-transparent hover:text-white focus:outline-none focus:ring">
            Get Started
            </a>
        </div>
        </div>
    </div>
</section>

<?php get_footer() ?>



