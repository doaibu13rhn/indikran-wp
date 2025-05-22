<?php /* Template Name: Home */ ?>
<?php get_header(); ?>

<div class="container mx-auto px-4">
    <div class="flex flex-col items-center justify-center min-h-screen">
        <h1 class="text-4xl font-bold text-green-400 mb-4">Welcome to Indikran</h1>
        <p class="text-lg text-gray-300 mb-8">Your one-stop solution for all your needs.</p>
        <a href="#services" class="bg-green-500 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-green-600 transition duration-300">Explore Services</a>
    </div>

    <section id="services" class="mt-16">
        <h2 class="text-3xl font-bold text-center mb-8">Our Services</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Service 1</h3>
                <p class="text-gray-400">Description of Service 1.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Service 2</h3>
                <p class="text-gray-400">Description of Service 2.</p>
            </div>
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-semibold mb-4">Service 3</h3>
                <p class="text-gray-400">Description of Service 3.</p>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
