

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

$section_five = get_field('5_section');
$five_section_title = $section_five['five_section_title'];
$section_title_link = $section_five['five_section_title_link'];
$five_section_buttons = $section_five['five_section_buttons'];


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
       

</main>

<?php get_footer(); ?>