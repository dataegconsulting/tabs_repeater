 
 
<!-- Why Choose Section -->
<section class="commonSection chooseUs">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h4 class="sub_title">Nuestros Valores</h4>
                <h2 class="sec_title">Nuestros Valores</h2>
                <p class="sec_desc">
                En  DATA EG nos reinventamos diariamente para seguir siendo una Agencia Digital de categoría mundial
                </p>
            </div>
        </div>
        <div id="tabs">
            <?php
            if( have_rows('general') ):
                $i = 1; ?>
                <div class="row">
                    <div class="col-lg-12">
                        <ul class="chooseUs_title">
                            <?php
                                while ( have_rows('general') ) : the_row();
                                    $title = get_sub_field('tab_title');
                                    $content = get_sub_field('tab_content');
                                    $images = get_sub_field('tab_images');
                                    ?>
                                    <li <?php if($i == 1) echo 'class= "active"';?> >
                                            <a  href="#tes_tab_<?php echo sanitize_title($title); ?>"  data-toggle="tab" ><?php echo $title; ?></a>
                                    </li>
                                    <?php   $i++; 
                                endwhile;
                            ?>
                        </ul>
                    </div>

                </div>
                <div class="row">
                    <div class="tab-content clearfix">
                        <?php $i = 1; // Set the increment variable                            
                        // loop through the rows of data for the tab content
                        while ( have_rows('general') ) : the_row();
                            $title = get_sub_field('tab_title');
                            $content = get_sub_field('tab_content');
                            $images = get_sub_field('tab_images'); ?>
                            <div class="tab-pane fade <?php if($i == 1) echo 'active in';?>" id="tes_tab_<?php echo sanitize_title($title); ?>"> 
                                <div class="col-lg-12 col-sm-12 col-md-12">
                                    <div class="wh_choose">
                                        <p style="text-align:center">
                                        <?php echo $content; ?>
                                        </p> 
                                    </div>
                                </div> 
                            </div>
                            <?php   $i++; 
                        endwhile;?>
                    </div>
                </div>
                <?php
            endif;?>
        </div>
    </div>
</section>
<!-- Why Choose Section -->


 
<?php

// *Repeater
// tabs_repeater
// *Sub-Fields
// tab_header
// tab_content

// check if the repeater field has rows of data
if( have_rows('general') ):
	$i = 1; // Set the increment variable
	
	echo '<ul class="nav nav-tabs" id="myTab" role="tablist">';
 	
 	// loop through the rows of data for the tab header
    	while ( have_rows('general') ) : the_row();
		$header = get_sub_field('tab_title');
		$content = get_sub_field('tab_content');
	?>
	
	<li class="nav-item">
    		<a class="nav-link <?php if($i == 1) echo 'active';?>" id="<?php echo sanitize_title($header); ?>-tab" data-toggle="tab" href="#<?php echo sanitize_title($header); ?>" role="tab" aria-controls="<?php echo sanitize_title($header); ?>" aria-selected="true"><?php echo $header; ?></a>
	</li>
	              
	<?php   $i++; // Increment the increment variable

	endwhile; //End the loop 
	
    echo '</ul>
    
	<div class="tab-content" id="myTabContent">';
	$i = 1; // Set the increment variable
	
	// loop through the rows of data for the tab content
	while ( have_rows('general') ) : the_row();
		$header = get_sub_field('tab_title');
		$content = get_sub_field('tab_content');
	?>
	
	  <div class="tab-pane fade show <?php if($i == 1) echo 'active';?>" id="<?php echo sanitize_title($header); ?>" role="tabpanel" aria-labelledby="<?php echo sanitize_title($header); ?>-tab"><?php echo $content; ?></div>
	
	<?php   $i++; // Increment the increment variable
		
	endwhile; //End the loop 
	
	echo '</div>';

else :

    // no rows found

endif;?>

 