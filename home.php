<?php
/* Template Name: Home */
get_header();
?>

<section id="hero" class="w-full min-h-screen bg-cover bg-center"
    style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/main-section.webp');">
    <div class="container mx-auto px-4 py-32 text-white">
        <h2 class="text-4xl font-bold mb-8">Our Services</h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- cards -->
        </div>
    </div>
</section>


<?php get_footer(); ?>