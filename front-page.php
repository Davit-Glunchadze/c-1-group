

<?php 
$section_1 = get_field('1_section');
$hero_section_image = $section_1['hero_section_image'];
$hero_title = $section_1['hero_title'];
$hero_text = $section_1['hero_text'];
$hero_button = $section_1['hero_button'];
$hero_button_link = $section_1['hero_button_link'];
$button_copy = $section_1['button_copy'];

//echo '<pre>';
//print_r ($section_1);
//echo '</pre>';
?>


<?php 
get_header();
?>


<main class="home-page">
    <!--FIRST SECTION-->
    <section class="hero-section-1">
        <?php if(!empty($hero_section_image['url']) && !empty($hero_section_image['alt']) ) :?>
            <img src=" <?php echo esc_url($hero_section_image['url']) ?>" alt="<?php echo esc_url($hero_section_image['alt'])?>">
        <?php endif; ?>
        <div class="hero-content">
                <h1 class="hero-title"><?php echo $hero_title; ?></h1>
                <p class="hero-text"><?php echo $hero_text; ?> </p>
            <?php if($hero_button_link):?>
                <a class="hero-button" href="<?php echo $hero_button_link; ?>"><?php echo $hero_button; ?></a>
                <a class="hero-button" href="<?php echo $hero_button_link; ?>"><?php echo $button_copy; ?></a>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>