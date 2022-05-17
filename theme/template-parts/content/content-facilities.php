
           
           <div class="w-full bg-white rounded-sm shadow-md overflow-hidden">
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="object-cover w-full h-64" />
                <?php endif;?>
               <div class="relative px-5 py-7 flex flex-col">
                   <h3 class="mt-4 text-xl font-medium">
                    <?php the_title();?>
                   </h3>
                   <p class="py-2 text-base text-black-800">
                       Ori-Okuta, Atan, Otta, Ogun State
                   </p>
                   <p class="text-base">
                       land size: 10.67 sq ft
                   </p>
               </div>
           </div>     
  	