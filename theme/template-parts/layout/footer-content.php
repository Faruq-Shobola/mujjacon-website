<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mujjacon
 */

?>

<!-------------- FOOTER -------------->
<section class="footer py-16 px-4 bg-gray bottom-0">
    <footer class="relative max-w-6xl mx-auto flex flex-col justify-center gap-20">
        <!-------------- FOOTER WIDGETS -------------->
        <div class="grid md:grid-cols-7 gap-8 md:gap-3">
            <!-------------- COLUMN 1 -------------->
                <div class="md:col-span-3 flex flex-col gap-3 list-none">
                    <?php if(is_active_sidebar('footer-sidebar-1')):?>
                        <?php dynamic_sidebar('footer-sidebar-1');?>
                    <?php endif;?>
                </div>
            <!-------------- COLUMN 2 -------------->
                <div class="md:col-span-2 flex flex-col gap-3 list-none">
                    <?php if(is_active_sidebar('footer-sidebar-2')):?>
                        <?php dynamic_sidebar('footer-sidebar-2');?>
                    <?php endif;?>
                </div>
            <!-------------- COLUMN 3 -------------->
                <div class="md:col-span-2 flex flex-col gap-3 list-none">
                    <?php if(is_active_sidebar('footer-sidebar-3')):?>
                        <?php dynamic_sidebar('footer-sidebar-3');?>
                    <?php endif;?>
                </div>
        </div>  
        <!-------------- ADDRESS / COPYRIGHT - TERMS & CONDITION -------------->
        <div class="copyright grid md:grid-cols-2 gap-14">
            <div class="address capitalize text-base list-none">
                <?php if(is_active_sidebar('address')):?>
                    <?php dynamic_sidebar('address');?>
                <?php endif;?>
            </div>
            <div class="md:justify-self-end capitalize text-base list-none">
                <?php if(is_active_sidebar('copyright')):?>
                    <?php dynamic_sidebar('copyright');?>
                <?php endif;?>
            </div>
        </div>
        <!-------------- BACK TO TOP -------------->
        <!-- <a id="button" class="flex items-center justify-center z-10 text-center fixed bg-orange h-12 w-12 rounded-md">
            <i class="fas fa-chevron-up text-3xl text-white hover:pointer active:pointer"></i>
        </a> -->
    </footer>
</section>
<!-------------- NEWSLETTER -------------->
<section>
    <div class="max-w-6xl mx-auto py-6 px-4 ">
        <div class="flex justify-center grid lg:grid-cols-2 gap-10">
            <!-------------- HEADING -------------->
            <div class="heading text-center lg:text-left flex flex-col justify-center">
                <h2 class=" text-xl md:text-2xl font-semibold ">Join our newsletter today</h2>
                <h5 class="mt-4">Get the latest branding and marketing ideas directly to your inbox</h5>
            </div>
            <!-------------- FORM -------------->
            <div class="px-4 rounded-md gap-y-4">
                <div class="newsletter-form flex justify-center sm:col-span-3 list-none">
                    <?php if(is_active_sidebar('newsletter')):?>
                        <?php dynamic_sidebar('newsletter');?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>
