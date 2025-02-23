

<?php 
$section_1 = get_field('1_section');
$hero_section_image = $section_1['hero_section_image'];
$hero_title = $section_1['hero_title'];
$hero_text = $section_1['hero_text'];
$hero_button = $section_1['hero_button'];
$hero_button_link = $section_1['hero_button_link'];

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
            <a href=""><h3>Our Service</h3></a>
        </div>
        <div class="second-section-cards">
            <a href="#">
                <div class="second-section-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/ticket-logo.png" ?>" alt="">
                    <h4>Ticket Booking</h4>
                    <p>We book all kind of national or international ticket for your destinaion.</p>
                </div>
            </a>
            <a href="#">
                <div class="second-section-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/ticket-logo.png" ?>" alt="">
                    <h4>Ticket Booking</h4>
                    <p>We book all kind of national or international ticket for your destinaion.</p>
                </div>
            </a>
            <a href="#">
                <div class="second-section-card">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/ticket-logo.png" ?>" alt="">
                    <h4>Ticket Booking</h4>
                    <p>We book all kind of national or international ticket for your destinaion.</p>
                </div>
            </a>
        </div>
    </section>
</main>

<?php get_footer(); ?>