<?php get_header();?>

<?php $hero = get_field('hero'); ?>

<section class="bg-1 h-900x main-slider pos-relative">
        <div class="triangle-up pos-bottom"></div>
        <div class="container h-100">
                <div class="dplay-tbl">
                        <div class="dplay-tbl-cell center-text color-white">

                                <h5><b><?php echo $hero['small_title']; ?></b></h5>
                                <h1 class="mt-30 mb-15"><?php echo $hero['main_title']; ?></h1>

                                <?php if($hero['link']): ?>
                                <h5>
                                        <a href="<?php echo $hero['link']; ?>" class="btn-primaryc plr-25"><b><?php echo $hero['link_text']; ?></b>
                                        </a>
                                </h5>

                                <?php endif;?>
                        </div><!-- dplay-tbl-cell -->
                </div><!-- dplay-tbl -->
        </div><!-- container -->
</section>



<section class="story-area left-text center-sm-text pos-relative">
        <div class="abs-tbl bg-2 w-20 z--1 dplay-md-none"></div>
        <div class="abs-tbr bg-3 w-20 z--1 dplay-md-none"></div>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_directory');?>/images/heading_logo.png" alt="">
                        <h2>Our Story</h2>
                </div>

                <div class="row">
                        <div class="col-md-6">
                                <p class="mb-30">Maecenas fermentum tortor id fringilla molestie. In hac habitasse
                                        platea dictumst. Morbi maximus
                                        lobortis ipsum, ut blandit augue ullamcorper vitae.
                                        Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel convallis
                                        massa. Morbi tellus
                                        tortor, luctus et lacinia non, tincidunt in lacus.
                                        Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulum id
                                        dapibus dolor, ac
                                        cursus nulla. </p>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                                <p class="mb-30">Maecenas fermentum tortor id fringilla molestie. In hac habitasse platea
                                        dictumst.Morbi maximus lobortis ipsum, ut blandit augue ullamcorper vitae.
                                        Nulla dignissim leo felis, eget cursus elit aliquet ut. Curabitur vel
                                        convallismassa. Morbi tellus tortor, luctus et lacinia non, tincidunt in lacus.
                                        Vivamus sed ligula imperdiet, feugiat magna vitae, blandit ex. Vestibulumidda
                                        pibus dolor, accursus nulla. </p>
                        </div><!-- col-md-6 -->
                </div><!-- row -->
        </div><!-- container -->
</section>


                                <?php if( have_rows('best_sellers') ): ?>

                                <section class="story-area bg-seller color-white pos-relative">
                                        <div class="pos-bottom triangle-up"></div>
                                        <div class="pos-top triangle-bottom"></div>
                                        <div class="container">
                                                <div class="heading">
                                                
                                                        <img class="heading-img" src="<?php bloginfo('template_directory');?>/images/heading_logo.png" alt="">
                                                        <h2>Best Sellers</h2>
                                                </div>
                                <div class="row">
                                <?php while (have_rows('best_sellers') ): the_row();
                                        $image = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        $price = get_sub_field('price');
                                        $link = get_sub_field('link');
                                        $offer = get_sub_field('offer');
                                        ?>
                                <div class="col-lg-3 col-md-4  col-sm-6 ">
                                                                <div class="center-text mb-30">
                                                                <div class="ïmg-200x mlr-auto pos-relative">

                                                                <?php if($offer): ?>
                                                <h6 class="ribbon-cont"><div class="ribbon primary"></div><b>Sale</b></h6>
                                                <?php endif; ?>
                                                <img src="<?php echo $image['sizes']['product_image_small']; ?>" alt="">
                                        </div>
        
                                                                        <h5 class="mt-20"><?php echo $title; ?></h5>
                                                                        <h4 class="mt-5"><b>$<?php echo $price; ?></b></h4>

                                                                        <?php if($link): ?>
                                                                        <h6 class="mt-20"><a href="<?php echo $link;?>" class="btn-brdr-primary plr-25"><b>Check it out</b></a></h6>
                                                                        <?php endif;?>
                                                                </div><!--text-center-->
                                                        </div><!-- col-md-3 -->

                                <?php endwhile; ?>
                                </div><!-- row -->



                                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
                                        </div><!-- container -->
                                </section>
                                <?php endif; ?>


<section>
        <div class="container">
                <div class="heading">
                        <img class="heading-img" src="<?php bloginfo('template_directory');?>/images/heading_logo.png" alt="">
                        <h2>Our Menu</h2>
                </div>

                                        <?php if(have_rows('our_menu') ): ?>
                                        <div class="row">
                                                <div class="col-sm-12">
                                                        <ul class="selecton brdr-b-primary mb-70">

                                        <?php  while(have_rows('our_menu') ): the_row();

                                                $category_name = get_sub_field('category_name');
                                                $menu_items = get_sub_field('category');
                                                
                                                ?>
                                                
                                                <li><a href="#" class="active" data-select="<?php echo sanitize_title($category_name); ?>"><b><?php echo $category_name;?></b></a></li>
                                                              
                                                        
                                                
                                        <?php endwhile; ?>

                                        </ul>
                                                </div><!--col-sm-12-->
                                        </div><!--row-->

                                         <?php endif; wp_reset_query(); ?>

                <?php if(have_rows('our_menu') ): ?>

                         <div class="row">
        
                                 <?php  while(have_rows('our_menu') ): the_row();

                                        $category_name = get_sub_field('category_name');
                                        $menu_items = get_sub_field('category');
                
                                ?>


                                        <div class="col-md-6 food-menu <?php echo sanitize_title($category_name); ?>">

                                        <?php if(have_rows('category')): ?>

                                        <?php  while(have_rows('category') ): the_row();
                                         $image = get_sub_field('image');
                                        $title = get_sub_field('title');
                                        $description = get_sub_field('description');
                                        $price = get_sub_field('price');

                                        ?>

                                                <div class="sided-90x mb-30 ">
                                                <?php if($image): ?>
                                                        <div class="s-left">
                                                        <img class="br-3" src="<?php echo $image['sizes']['product_image_small']; ?>" alt="<?php $title; ?>">
                                                        </div><!--s-left-->
                                        <?php  endif; ?>
                                                                <div class="s-right">
                                                                        <h5 class="mb-10"><b><?php echo $title; ?></b><b class="color-primary float-right">$<?php echo $price ?></b></h5>
                                                                        <p class="pr-70"><?php echo $description; ?></p>
                                                                </div><!--s-right-->
                                                        </div><!-- sided-90x -->


                                <?php endwhile; ?>
                  <?php endif; ?>

                        </div><!-- food-menu -->
                
                                
                        
                
        <?php endwhile; ?>

        
                
                </div>

<?php endif; ?>


               

                

                <h6 class="center-text mt-40 mt-sm-20 mb-30"><a href="#" class="btn-primaryc plr-25"><b>SEE TODAYS MENU</b></a></h6>
        </div><!-- container -->
</section>

<?php get_footer();?>

