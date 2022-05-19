
           
           <div class="w-full bg-white rounded-lg drop-shadow-sm  overflow-hidden">
                <?php if(has_post_thumbnail()):?>
                    <img src="<?php the_post_thumbnail_url();?>" alt="<?php the_title();?>" class="object-cover w-full h-64" />
                <?php endif;?>
               <div class="relative px-5 py-7 flex flex-col bg-gray">
                   <h3 class="mt-4 text-xl font-medium text-light-green">
                    <?php the_title();?>
                   </h3>
                   <div class="flex gap-3 items-center py-2">
                        <div class="">
                            <span class="flex justify-center items-center">
                                <i class="fas fa-map-marker-alt text-dark-green"></i>
                            </span>
                        </div>
                        <div class="">
                                <p class="capitalize text-base text-black"> <?php the_field('location') ?> </p>
                        </div>
                    </div>
                    <div class="flex gap-3 items-center py-2">
                        <div class="">
                            <span class="flex justify-center items-center">
                                <i class="fas fa-ruler-triangle text-dark-green"></i>
                                <i class="fas fa-ruler-triangle"></i>
                            </span>
                        </div>
                        <div class="">
                                <p class="capitalize text-base text-black"> <?php the_field('size') ?> </p>
                        </div>
                    </div>
                   
               </div>
           </div>     
