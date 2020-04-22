<?php
function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}?>
<?php
    get_header();
    while(have_posts()) {
        the_post();?>
        <div class="pages-header d-flex align-items-center justify-content-center">
        <h1>
            <?php $title=get_the_title(); 
            echo $title; ?>
        </h1>
        </div>
        <?php 
        
            if(strtolower($title) == 'opportunities') {
        ?>
                <?php
                    $theParent = wp_get_post_parent_id(get_the_ID());                  
                    if($theParent) {
                        $findChildrenOf = $theParent;
                    } else {
                        $findChildrenOf = get_the_ID(); 
                    }
                 ?>

                <div class="page-content">
                    <?php the_content() ?>
                </div>

                <!-- <div class="d-flex justify-content-center">
                    <ul class="opportunities-list"> -->
                        <?php
                        
                        // wp_list_pages(array(
                        //     'title_li' => NULL,
                        //     'child_of'=>$findChildrenOf//,
                        //     // ''=>''
                        
                        // ));
                        ?>
                    <!-- </ul>
                </div> -->
        
            <?php
            } else {
            ?>

                <h1>Non Opportunities Pages here</h1>

            <?php
            }
            ?>
        
        <?php $content= get_the_content(); 
            // console_log($content);
            
            // echo substr($content,0,100);;
        ?>
 <?php   } 
 get_footer(); 
 ?>