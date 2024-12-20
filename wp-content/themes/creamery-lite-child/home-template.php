<?php
/*
    Template Name: Home Template
*/
get_header();
?>
    <main>
        <h1 hidden="hidden">Головна сторінка</h1>
        <section class="hero-section" style="background-image: url(<?php echo get_field('header_background_img'); ?>)">
            <div class="logo-header">
                <img src="<?php echo get_field('image_header'); ?>" alt="logo">
                <a href="#contact-form"><button class="btn-header" type="button">Зв'язатися з нами</button></a>
            </div>
        </section>
        <div class="content-about-us" id="about-us">
            <h2>Про Нас</h2>
            <div class="text-about-us">
                <?php echo do_shortcode('[text_about_us]'); ?>
            </div>
        </div>
        <div class="main-gallery" id="gallery">
            <h2>Галерея</h2>
            <?php echo do_shortcode('[gallery]'); ?>
        </div>
        <div class="main-form" id="contact-form">
            <h2>Контакти</h2>
            <?php echo do_shortcode('[contact-form-7 id="fa54047" title="Untitled"]'); ?>
        </div>
    </main>
<?php
get_footer();
?>