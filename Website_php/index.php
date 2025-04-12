<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800">

    

    
    <?php include_once('header.php'); ?>
    <!-- Main Content -->
    <main class="max-w-6xl mx-auto px-4 py-12">
        <!-- Intro Text -->
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-2">Why Choose Us?</h2>
            <p class="text-lg text-gray-600">Explore our services and get to know us better.</p>
        </div>

        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Service 1 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <div class="text-indigo-600 text-4xl mb-4"><i class="fas fa-code"></i></div>
                <h3 class="text-xl font-semibold mb-2">Web Development</h3>
                <p class="text-gray-600">Responsive, dynamic websites built with modern tech for performance and design.</p>
            </div>

            <!-- Service 2 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <div class="text-green-500 text-4xl mb-4"><i class="fas fa-mobile-alt"></i></div>
                <h3 class="text-xl font-semibold mb-2">Mobile App Development</h3>
                <p class="text-gray-600">Custom mobile applications for iOS and Android tailored to your business.</p>
            </div>

            <!-- Service 3 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <div class="text-pink-500 text-4xl mb-4"><i class="fas fa-bullhorn"></i></div>
                <h3 class="text-xl font-semibold mb-2">Digital Marketing</h3>
                <p class="text-gray-600">Grow your brand online with expert SEO, social media, and paid advertising.</p>
            </div>

            <!-- Service 4 -->
            <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                <div class="text-yellow-500 text-4xl mb-4"><i class="fas fa-search"></i></div>
                <h3 class="text-xl font-semibold mb-2">SEO Optimization</h3>
                <p class="text-gray-600">Rank higher on search engines and drive organic traffic to your site.</p>
            </div>
        </div>
    </main>

    <?php include_once('footer.php'); ?>

</body>
</html>
