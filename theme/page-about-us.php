<?php get_header() ?>

<section class="about top-0 relative flex justify-center items-center overflow-hidden">
    <!------------ PAGE TITLE ------------>
    <div class="md:max-w-3xl mx-auto px-4">
        <div class="flex flex-col gap-8 text-center text-white">
            <h2 class="capitalize font-bold text-4xl md:text-5xl leading-tight md:leading-snug font-head">Growing everyday business with innovative digital solutions</h2>
        </div>
    </div>
</section>
<!-------------------------------- 
/// 02   ABOUT US SECTION
---------------------------------->
<section class="service-two">
    <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 py-16 ">
        <!------------ COLUMN 1 ------------>
        <div class="flex flex-col justify-center gap-5 px-4 lg:px-8">
            <!------ TITLE ------>
            <h2 class="capitalize font-bold text-3xl py-2 font-head">About us</h2>
            <!------ PARAGRAPH 1------>
            <p class="text-base font-body">Duromedia was formed in 2016 by Founder, Mr. AbdulHad Durodola. 
                He believes when passionate people and like minds work together and well empowered, amazing things happen.
            </p>
            <!------ PARAGRAPH 2------>
            <p class="text-base font-body">In these few years, Duromedia has made its mark in Nigeria as well
                as getting international recognition for excellence. The company has also made serious impact on people, small- and large-scale
                businesses. 
            </p>
            <!------ PARAGRAPH 3------>
            <p class="text-base font-body">The DuroMedia Team which consists of Rahmat Bello, Ahmed Olusesi, Yusuf AbdulLateef, 
                Sumaiyah Ajani, Olatunji Olayemi, Faruq Shobola and Faizol Shobola is a very versatile team with large efforts and commitments on 
                every project. 
            </p>
           
        </div>
        <!------------ COLUMN 2 ------------>
        <div class="flex justify-center flex-col">
            <!--------- IMAGE --------->
             <!------------ MISSION ------------>
            <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
                <h2 class="capitalize font-bold text-3xl py-2 font-head">Our Vision</h2>
                <!------ PARAGRAPH ------>
                <p class="lg:w-5/6 my-4 text-base capitalize font-body">To be the best among our equals. Providing outstanding results and value to our stakeholders</p>
            </div>
            <!------------ VISION ------------>
            <div class="flex flex-col justify-center gap-3 px-4 md:px-8">
                <h2 class="capitalize font-bold text-3xl py-2 font-head">Our Mission</h2>
                <!------ PARAGRAPH ------>
                <p class="lg:w-5/6 my-4 text-base capitalize font-body">We work to eliminate the apathy that will suck the life out of any business in the world. We do this by 
                    using result-oriented digital and brand identity solutions to inspire the spirit, penetrate the heart, and ignite the mind.
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
            <p class="text-base font-body">Duromedia was formed in 2016 by Founder, Mr. AbdulHad Durodola. 
                He believes when passionate people and like minds work together and well empowered, amazing things happen.
            </p>
            <!------ PARAGRAPH 2------>
            <p class="text-base font-body">In these few years, Duromedia has made its mark in Nigeria as well
                as getting international recognition for excellence. The company has also made serious impact on people, small- and large-scale
                businesses. 
            </p>
            <!------ PARAGRAPH 3------>
            <p class="text-base font-body">The DuroMedia Team which consists of Rahmat Bello, Ahmed Olusesi, Yusuf AbdulLateef, 
                Sumaiyah Ajani, Olatunji Olayemi, Faruq Shobola and Faizol Shobola is a very versatile team with large efforts and commitments on 
                every project. 
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
