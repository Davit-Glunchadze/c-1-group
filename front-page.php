

<?php 
$section_1 = get_field('1_section');
$hero_section_image = $section_1['hero_section_image'];
$hero_title = $section_1['hero_title'];
$hero_text = $section_1['hero_text'];
$hero_button = $section_1['hero_button'];
$hero_button_link = $section_1['hero_button_link'];

$services = get_field('2_section');
$service_title = $services['second_section_title'];
$service_title_link = $services['second_section_title_link'];
$service_card_id = $services['services'];

//  sabas ცვლადები
$packages_section = get_field('packages_section');
$cards = $packages_section['cards'];

$packages_title = !empty($packages_section) && isset($packages_section['packages_title']) ? $packages_section['packages_title'] : '';
$fast_offers = !empty($packages_section) && isset($packages_section['fast_offers']) ? $packages_section['fast_offers'] : [];
$image = !empty($cards) && isset($cards['location_image']) ? $cards['location_image'] : '';
$trip_duration = !empty($cards) && isset($cards['trip_duration']) ? $cards['trip_duration'] : '';
$trip_price = !empty($cards) && isset($cards['trip_price']) ? $cards['trip_price'] : '';
$trip_description = !empty($cards) && isset($cards['trip_description']) ? $cards['trip_description'] : '';
$location = !empty($cards) && isset($cards['trip_location']) ? $cards['trip_location'] : '';
$know = !empty($cards) && isset($cards['know_more']) ? $cards['know_more'] : '';
$discover_more = !empty($packages_section) && isset($packages_section['discover_more_link']) ? $packages_section['discover_more_link'] : '';


//echo '<pre>';
//print_r ($five_section_buttons);
//echo '</pre>';
?>


<?php 
get_header();
?>


<main class="home-page">
        <!--FIRST SECTION-->
    <section class="hero-section-1">
        <?php if($hero_section_image) :?>
        <div class="hero-section-photo">
            <img src=" <?php echo esc_url($hero_section_image['url']) ?>" alt="<?php echo esc_url($hero_section_image['alt'])?>">
        </div> 
        <?php endif; ?>
        <div class="hero-content">
                <h1 class="hero-title"><?php echo $hero_title; ?></h1>
                <p class="hero-text"><?php echo $hero_text; ?> </p>
            <?php if($hero_button_link):?>
                <a class="hero-button" href="<?php echo $hero_button_link; ?>"><?php echo $hero_button; ?></a>
            <?php endif; ?>
        </div>
    </section>
        <!--SECOND SECTION-->
    <section class="section-2">
        <div id="second-section" class="second-section-title">
            <a href="<?php echo $service_title_link; ?>"><h3><?php echo $service_title; ?></h3></a>
        </div>
        <div class="second-section-cards">
            <?php foreach($service_card_id as $service_card) : ?>
                <?php if ($service_card):?>
                <a href="<?php echo get_the_permalink($service_card); ?>">
                    <div class="second-section-card">
                        <img src="<?php echo get_the_post_thumbnail_url($service_card); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id($service_card), '_wp_attachment_image_alt', true));; ?>">
                        <h4><?php echo get_the_title($service_card); ?></h4>
                        <p><?php echo get_the_excerpt($service_card); ?></p>
                    </div>
                </a>
                <?php endif; ?>
            <?php endforeach; ?>
        </div>
    </section>
       
    <!-- PACKAGES SECTION -->
<section class="packages-section">

<h1><?php echo $packages_title ?></h1>



<div class="card-links">

    <a href="<?php echo $fast_offers['button_1_link']?>"><?php echo $fast_offers['button_1_text']?></a>
    <a href="<?php echo $fast_offers['button_2_link']?>"><?php echo $fast_offers['button_2_text']?></a>
    <a href="<?php echo $fast_offers['button_3_link']?>"><?php echo $fast_offers['button_3_text']?></a>
    <a href="<?php echo $fast_offers['button_4_link']?>"><?php echo $fast_offers['button_4_text']?></a>
    <a href="<?php echo $fast_offers['button_5_link']?>"><?php echo $fast_offers['button_5_text']?></a>
    <a href="<?php echo $fast_offers['button_6_link']?>"><?php echo $fast_offers['button_6_text']?></a>
    
</div>


        
<div class="cards">
<?php foreach ($cards as $card) : ?>
    <div class="card">
        
            <img src="<?php echo $card['location_image']?>" alt="">

        <div class="card-text">
            <h3><?php echo $card['trip_duration']?></h3>
            <h3><?php echo $card['trip_price']?></h3>
        </div>

        <p><?php echo $card['trip_description']?></p>

        <div class="location-seemore">

            <div class="location">
            <a href="./components/indonesia/indonesiaPage.php" class="marker"><img src="<?php echo get_template_directory_uri() . '/assets/images/ep_location.png'?>" alt=""></a>
            <p> <?php echo $card['trip_location'] ?></p>
            </div>
            <a href="<?php echo $card['know_more'] ?>" class="see-more"> Know More </a>
        </div>
        
    </div>
<?php endforeach ; ?>
</div>



<div class="discover-class">
<a href="<?php echo $discover_more ?>"> Discover More </a>
</div>

</section>


</main>

<?php get_footer(); ?>