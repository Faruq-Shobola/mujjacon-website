
           <div class="w-full bg-white rounded-lg shadow-md overflow-hidden">
                <?php if(has_post_thumbnail()):?>
                    <img
                        class="object-cover w-full h-56"
                        src="<?php the_post_thumbnail_url();?>"
                        alt="<?php the_title();?>"
                        />
                    <?php endif;?>
                
                    <div class="relative px-5 py-7 flex flex-col">
                        <h5 class="text-base font-medium text-gray-500">January 05, 2022</h5>
                        <h3 class="mt-4 text-2xl capitalize font-medium">
                            <?php the_title();?>
                        </h3>
                    
                        <p class="mt-4 text-base text-gray">
                           <?php the_excerpt() ?>
                        </p>
                        <p class="mt-6 flex items-center">
                            <a href="<?php the_permalink() ?>" class="text-wine text-sm font-semibold cursor-pointer">Continue reading</a>
                        </p>
                    </div>
                </div>

  	