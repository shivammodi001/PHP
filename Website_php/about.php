<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body class="bg-gray-50 text-gray-800">

    <!-- Header Section -->
    <header class="bg-gradient-to-r from-indigo-600 via-purple-600 to-pink-500 text-white py-16 text-center">
    
    <?php
    include('header.php');
    ?>    
    <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-4xl font-extrabold mb-4">About Us</h1>
            <p class="text-xl">Learn more about our mission, values, and what drives us every day!</p>
        </div>
    </header>

    <!-- Main Content Section -->
    <main class="max-w-7xl mx-auto px-6 py-16">
        <!-- Our Mission -->
        <section class="text-center mb-16">
            <h2 class="text-3xl font-semibold mb-4">Our Mission</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">We aim to provide the best services to our customers by focusing on innovation, excellence, and customer satisfaction.</p>
        </section>

        <!-- Our Values -->
        <section class="text-center mb-16">
            <h2 class="text-3xl font-semibold mb-4">Our Values</h2>
            <div class="flex justify-center gap-10 flex-wrap">
                <!-- Integrity -->
                <div class="bg-white shadow-lg p-6 rounded-lg w-72">
                    <div class="text-indigo-600 text-5xl mb-4"><i class="fas fa-handshake"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Integrity</h3>
                    <p class="text-gray-600">We operate with honesty, transparency, and the highest ethical standards.</p>
                </div>
                <!-- Excellence -->
                <div class="bg-white shadow-lg p-6 rounded-lg w-72">
                    <div class="text-yellow-500 text-5xl mb-4"><i class="fas fa-trophy"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Excellence</h3>
                    <p class="text-gray-600">We strive for excellence in everything we do, aiming to exceed expectations.</p>
                </div>
                <!-- Innovation -->
                <div class="bg-white shadow-lg p-6 rounded-lg w-72">
                    <div class="text-green-500 text-5xl mb-4"><i class="fas fa-lightbulb"></i></div>
                    <h3 class="text-xl font-semibold mb-2">Innovation</h3>
                    <p class="text-gray-600">We foster creativity and embrace new technologies to bring innovative solutions.</p>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer Section -->
    <footer class="bg-gray-800 text-gray-300 py-8 text-center">
        <?php include_once('footer.php'); ?>
    </footer>

</body>
</html>
