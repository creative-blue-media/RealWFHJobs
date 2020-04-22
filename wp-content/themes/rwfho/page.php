<?php
    get_header();
    while(have_posts()) {
        the_post();?>
        <h1><?php 
            $title=get_the_title(); 
            echo $title;
            if(strtolower($title) == 'opportunities') {
                ?>
                <h1>Opportunities Stuff goes here</h1>
                <?php
            } else {
                ?>

                <h1>Non Opportunities Pages here</h1>

                <?php
            }
        ?>
        </h1>
        <?php the_content(); ?>
 <?php   } 
 get_footer(); 
 ?>