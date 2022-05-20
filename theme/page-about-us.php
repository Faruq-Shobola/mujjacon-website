<?php get_header() ?>

<section class="about-page top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">What you should know about us</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   ABOUT US SECTION
---------------------------------->
<section class="service-two">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 py-16 ">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col gap-5 px-4 lg:px-8">
            <!------ TITLE ------>
            <h2 class="capitalize font-bold text-3xl py-2 font-head">About us</h2>
            <!------ PARAGRAPH 1------>
            <p class="text-base font-body">We are a Real Estate Company that provides Excellent landed properties and Affordable Housing to All Muslims. Our Passion is to fulfill our obligation, an Act of Sadaqah jaariyah to the Muslim Community in Nigeria and Africa.
            </p>
            <!------ PARAGRAPH 2------>
            <p class="text-base font-body">With Our Peace Garden Phase I Estate @Oruku Village completed, we are committed to providing value to our Clients. Our Phase II project is underway at Ori-Okuta, Atan, Otta, Ogun State.
            </p>
           
           
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="flex justify-center flex-col">
            <!--------- IMAGE --------->
             <!------------ MISSION ------------>
            <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
                <h2 class="capitalize font-bold text-3xl py-2 font-head">Our Vision</h2>
                <!------ PARAGRAPH ------>
                <p class="lg:w-5/6 my-4 text-base capitalize font-body">To be the Topmost Real Estate Company in Nigeria and Africa at large. Provide Our Fellow Islamic Brethren with Comfortable, Affordable Housing that meets Global Standard.</p>
            </div>
            <!------------ VISION ------------>
            <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
                <h2 class="capitalize font-bold text-3xl py-2 font-head">Our Mission</h2>
                <!------ PARAGRAPH ------>
                <p class="lg:w-5/6 my-4 text-base capitalize font-body">Our goal is to continually stand by our religious obligation to provide Sadaqah jariyah in offering our clients affordable homes, comfortable with the sole purpose of making life livable.
                </p>
            </div>
        </div>
    </div>
</section>
<!-------------------------------
///  03 CORE VALUES SECTION 
------------------------------->
<section class="service-one">
    <!------------ CORE VALUES ------------>
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 py-16 ">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col justify-center gap-5 px-4 lg:px-8">   
            <h2 class="capitalize font-bold text-3xl py-2 font-head">Our Core Values</h2>
             <!------ PARAGRAPH 1------>
            <p class="text-base font-body">We know the importance of living in a home with Peace and Comfort. That is why our focus is to provide you with your needed social amenities.
            </p>
            <!------ PARAGRAPH 2------>
            <p class="text-base font-body">With our Team of Builders and Architects, we will help you build a house that meets Modern Standard and Beautification.
            </p>
            <!------ PARAGRAPH 3------>
            <p class="text-base font-body">We provide you with the opportunity to build houses according to your specifications. We deliver independent ownership of Land with a government-approved Certificate of Occupancy. We allow you to buy and resell at your will. 
            </p>
            <!-- <ul class="flex flex-col gap-y-2">
                <li class="flex items-center gap-2 text-base">
                    <i class="fas fa-check-circle text-orange"></i>
                    <span class="">Fear of God</span>
                </li>
                <li class="flex items-center gap-2 text-base">
                    <i class="fas fa-check-circle text-orange"></i>
                    <span class="">Knowledge and truth</span>
                </li>
                <li class="flex items-center gap-2 text-base">
                    <i class="fas fa-check-circle text-orange"></i>
                    <span class="">Positive power of technology</span>
                </li>
                <li class="flex items-center gap-2 text-base">
                    <i class="fas fa-check-circle text-orange"></i>
                    <span class="">Pursuit of excellence</span>
                </li>
                <li class="flex items-center gap-2 text-base">
                    <i class="fas fa-check-circle text-orange"></i>
                    <span class="">Democracy of Ideas</span>
                </li>
                <li class="flex items-center gap-2 text-base">
                    <i class="fas fa-check-circle text-orange"></i>
                    <span class="">Ethical</span>
                </li>
            </ul> -->
        </div>
        <div class="flex justify-center items-center h-full rounded-md overflow-hidden">
            <img class="object-cover h-full" src="https://www.industrialempathy.com/img/remote/ZiClJf-1920w.jpg" alt="duromedia-group">
        </div>
    </div>
</section>
<!-------------------------------
///  04 CTA SECTION 
------------------------------->
<section class="text-white bg-center bg-no-repeat bg-cover my-16">
    <?php get_template_part('template-parts/content/content','cta');?>
</section>
<?php get_footer() ?>
