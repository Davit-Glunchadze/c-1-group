<!-- 
 Template Name: section-Page 
-->


<?php

$four_section=get_field('section_4');
$four_section_background=$four_section["section_four_background"];
$four_section_subtitle=$four_section["section_four_subtitle"];
$four_section_title=$four_section["section_four_description"];

$four_section_card_1=$four_section["section_four_card_1"];
$four_section_card_2=$four_section["section_four_card_2"];
$four_section_card_3=$four_section["section_four_card_3"];
$four_section_card_4=$four_section["section_four_card_4"];

//echo '<pre>';
//print_r($four_section);
//echo '</pre>';


get_header();
?>

<main> 
<section class="section-4">
    <div class="image-box">
                     <?php if($four_section_background): ?>
                        <img src="<?php echo $four_section_background['url'] ?>" alt="<?php echo $four_section_background['alt']?>" >
                    <?php endif; ?>
        </div>
    <div class="section-4-content">
            <div class="section-4-text">
                     <h2 class="section-4-title"><?php echo $four_section_subtitle ?></h2>
                     <h3 class="section-4-subtitle"><?php echo $four_section_title ?></h3>
            </div>
                <div class="cards">
                    <div class="mysection-card">
                            <div class="mysection-content">
                               <?php if($four_section_card_1['section_four_icon']): ?>
                                   <img  src="<?php echo $four_section_card_1['section_four_icon']['url']?>" alt="<?php echo $four_section_card_1['section_four_icon'] ['alt']?>" >
                                        <?php endif; ?> 
                                             <h2 class="mysection-card-title">
                                    <?php  echo $four_section_card_1['section_four_card_title'] ?> 
                                </h2>
                        <h3 class="mysection-card-subtitle"> 
                     <?php echo $four_section_card_1['section_four_card_subtitle']  ?>
                </h3>
        </div>
    </div>
    <div class="mysection-card">
        <div class="mysection-content">
            <?php if($four_section_card_2['section_four_icon']): ?>
                  <img  src="<?php echo $four_section_card_2['section_four_icon']['url']?>" alt="<?php echo $four_section_card_2['section_four_icon'] ['alt']?>" >
               <?php endif; ?> 
                        <h2 class="mysection-card-title">
                             <?php  echo $four_section_card_2['section_four_card_title'] ?> 
                        </h2>
                    <h3 class="mysection-card-subtitle"> 
                <?php echo $four_section_card_2['section_four_card_subtitle']  ?>
            </h3>
        </div>
    </div>
    <div class="mysection-card">
        <div class="mysection-content">
            <?php if($four_section_card_3['section_four_icon']): ?>
                  <img  src="<?php echo $four_section_card_3['section_four_icon']['url']?>" alt="<?php echo $four_section_card_3['section_four_icon'] ['alt']?>" >
               <?php endif; ?> 
                       <h2 class="mysection-card-title">
                             <?php  echo $four_section_card_3['section_four_card_title'] ?> 
                       </h2>
                    <h3 class="mysection-card-subtitle"> 
                <?php echo $four_section_card_3['section_four_card_subtitle']  ?>
            </h3>
        </div>
    </div>
    <div class="mysection-card">
         <div class="mysection-content">
             <?php if($four_section_card_4['section_four_icon']): ?>
                 <img  src="<?php echo $four_section_card_4['section_four_icon']['url']?>" alt="<?php echo $four_section_card_4['section_four_icon'] ['alt']?>" >
              <?php endif; ?> 
                        <h2 class="mysection-card-title">
                             <?php  echo $four_section_card_4['section_four_card_title'] ?> 
                        </h2>
                    <h3 class="mysection-card-subtitle"> 
               <?php echo $four_section_card_4['section_four_card_subtitle']  ?>
            </h3>
        </div>
    </div>
</div>
</div>



                  
</section>










































     

</main>

