<?php get_header();?>
    <div id="header-wrapper">
        <div id="header-image"><img  src="<?php echo get_theme_file_uri('/assets/images/rwfho-header.png') ?>"/></div>

        <div id="header-line"><h3>Everything is better in your pajamas</h3>
    </div>

    <div class="container-fluid likes-acknowledgement">
    <div class="row"> 
        <div class="col-md-4">
            <img src="<?php echo get_theme_file_uri('/assets/images/man.jpg')?>" alt="likes pictures"/>
        </div>
        <div class="col-md-4 text-content">
        <h4>Legitimate work from home opportunities for anyone looking to make money from home.
             <span>
                 <a href="https://www.facebook.com/hashtag/realwfhjobs">#realwfhjobs
                </a>
            </span>
            <br>
            <br>
            <span class="facebook-link"><button class="btn btn-primary">Check out our facebook</button></span>
        </h4>
        
            <!-- <img src="<?php //echo get_the_file_uri('assets/images/likes-acknowledgement.jpg')?>" alt="likes pictures"> -->
        </div>
        <div class="col-md-4">
            <img src="<?php echo get_theme_file_uri('/assets/images/pjs.jpg')?>" alt="likes pictures"/>
        </div>
    </div>

    </div>

<?php
    //while(have_posts()) {
        //the_post();
        ?>
        <h1><a href="<?php 
        //the_permalink()
        ?>"><?php 
        //the_title()
        ?></a></h1>
        <?php 
        //the_content();
    //}  
    ?>
  
 <?php
get_footer(); 
 ?>