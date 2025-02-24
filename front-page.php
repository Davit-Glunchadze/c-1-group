

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

//echo '<pre>';
//print_r ($service_card_id);
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
        <div class="second-section-title">
            <a href="<?php echo $service_title_link; ?>"><h3><?php echo $service_title; ?></h3></a>
        </div>
        <div class="second-section-cards">
            <?php foreach($service_card_id as $service_card) : ?>
                <a href="<?php echo get_the_permalink($service_card); ?>">
                    <div class="second-section-card">
                        <img src="<?php echo get_the_post_thumbnail_url($service_card); ?>" alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id($service_card), '_wp_attachment_image_alt', true));; ?>">
                        <h4><?php echo get_the_title($service_card); ?></h4>
                        <p><?php echo get_the_excerpt($service_card); ?></p>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
    

    <section class="section-4">
        <div class="image-box">
            <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/world_map.png'; ?>" alt="photo">
        </div>
        <div class="section-4-content">
            <div class="section-4-text">
                <h2 class="section-4-title">We always try to give you the best service</h2>
                <h3 class="section-4-subtitle">We always try to make our customer Happy. We provide all kind of facilities. Your Satisfaction is our main priority.</h3> 
            </div>
            <div class="cards">
                <div class="mysection-card">
                    <div class="mysection-content">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/simple-line-icons_calender.png'; ?>" alt="photo">
                        <h2 class="mysection-card-title">15k+</h2>
                        <h3 class="mysection-card-subtitle">Years of Experience</h3>
                    </div>
                </div>
                <div class="mysection-card">
                    <div class="mysection-content">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/simple-line-icons_calender.png'; ?>" alt="photo">
                        <h2 class="mysection-card-title">15k+</h2>
                        <h3 class="mysection-card-subtitle">Years of Experience</h3>
                    </div>
                </div>
                <div class="mysection-card">
                    <div class="mysection-content">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/simple-line-icons_calender.png'; ?>" alt="photo">
                        <h2 class="mysection-card-title">15k+</h2>
                        <h3 class="mysection-card-subtitle">Years of Experience</h3>
                    </div>
                </div>
                <div class="mysection-card">
                    <div class="mysection-content">
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/simple-line-icons_calender.png'; ?>" alt="photo">
                        <h2 class="mysection-card-title">15k+</h2>
                        <h3 class="mysection-card-subtitle">Years of Experience</h3>
                    </div>
                </div>
            </div>
            
            
        </div>
    </section>
                    


</main>

<?php get_footer(); ?>