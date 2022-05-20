<?php get_header() ?>

<section class="contact-page top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">Get In Touch With Us</h2>
        </div>
    </div>
</section>

<section class="py-24">
    <!---------------------------------  
        CONTACT INFO SECTION START
    --------------------------------->
    <section class="px-4">
        <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-7 gap-14">
            <!---------------------------------  
                ADRESSES SECTION START
            --------------------------------->
            <div class="contact-address md:col-span-3 flex flex-col gap-12 px-10 py-8 rounded-lg">
                    <!-------------- HEADING -------------->
                <div class="heading text-left">
                    <h2 class="text-4xl font-bold capitalize text-green-800">get in touch</h2>
                    <h5 class="title text-lg capitalize mt-4 font-semibold">Reach out to us via our accessible channels </h5>
                </div>
                    <!-------------- INFO -------------->
                <div class="flex flex-col gap-4">
                    <!-------------- PHASE 1 LOCATION -------------->
                    <div class="flex gap-3 items-center">
                        <div class="">
                            <span class="flex justify-center items-center h-10 w-10 bg-orange-100 rounded-full">
                                <i class="fas fa-map-marker-alt text-green-800"></i>
                            </span>
                        </div>
                        <div class="">
                                <p class="text-base">Plot 12, Oladele Kadiri close Off Nob-Oluwa Street, Ogba, Ikeja Lagos.</p>
                        </div>
                    </div>
                    <!-------------- PHASE 2 LOCATION -------------->
                    <div class="flex gap-3 items-center">
                        <div class="">
                            <span class="flex justify-center items-center h-10 w-10 bg-orange-100 rounded-full">
                                <i class="fas fa-map-marker-alt text-green-800"></i>
                            </span>
                        </div>
                        <div class="">
                                <p class="text-base">Plot 12, Oladele Kadiri close Off Nob-Oluwa Street, Ogba, Ikeja Lagos.</p>
                        </div>
                    </div>
                    <!-------------- TELEPHONE -------------->
                    <div class="flex gap-3 items-center">
                        <div class="">
                            <span class="flex justify-center items-center h-10 w-10 bg-orange-100 rounded-full">
                                <i class="fas fa-phone rotate-90 text-green-800"></i>
                            </span>
                        </div>
                        <div class="">
                            <a href="tel:+2348081989240" class="text-base">+2348081989240</a>
                        </div>
                    </div>
                    <!-------------- MAIL -------------->
                    <div class="flex gap-3 items-center">
                        <div class="">
                            <span class="flex justify-center items-center h-10 w-10 bg-orange-100 rounded-full">
                                <i class="fas fa-envelope text-green-800"></i>
                            </span>
                        </div>
                        <div class="">
                            <a href="mailto:hi@zenithprecision.com.ng" class="text-base">hi@zenithprecision.com.ng</a>
                        </div>
                    </div>
                </div>
                    <!-------------- SOCIALS -------------->
                <div class="flex items-center gap-4">
                    <div class="flex justify-center items-center h-8 w-8 bg-green-800 rounded-full">
                        <i class="fab fa-facebook-f text-white"><a href=""></a></i>
                    </div>
                    <div class="flex justify-center items-center h-8 w-8 bg-green-800 rounded-full">
                        <i class="fab fa-twitter text-white"><a href=""></a></i>
                    </div>
                    <div class="flex justify-center items-center h-8 w-8 bg-green-800 rounded-full">
                        <i class="fab fa-instagram text-white"><a href=""></a></i>
                    </div>
                    <div class="flex justify-center items-center h-8 w-8 bg-green-800 rounded-full">
                        <a href="https://www.linkedin.com/company/zenith-precision-limited/"><i class="fab fa-linkedin-in text-white"></i></a>
                    </div>
                </div>
            </div>
                <!---------------------------------  
                ADRESSES SECTION END
            --------------------------------->

                <!---------------------------------  
                FORM SECTION START
            --------------------------------->
            <div class="md:col-span-4 flex justify-center">
                <div class="w-full lg:w-4/5">
                    <?php the_content();?>
                </div>
                
            </div>
            
            
        </div>
    </section>
   
</section>

<?php get_footer() ?>
