<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shoe Website - Home</title>
    <!-- Include Tailwind CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="assets/validation.js" defer></script>
</head>
<body class="bg-gray-100">
    <!-- Navigation -->
    <nav class="bg-gray-800 py-6">
        <div class="container mx-auto flex justify-between items-center px-4">
            <div class="text-white text-2xl font-semibold">Shoe Website</div>
            <ul class="flex space-x-6 text-white">

            

            <li><a href="../index.php" class="hover:text-gray-300">Logout</a></li>
                <li><a href="index.php" class="hover:text-gray-300">Home</a></li>
                <li><a href="pages/shop.php" class="hover:text-gray-300">Shop</a></li>
                <li><a href="index.php?page=about" class="hover:text-gray-300">About</a></li>
                <li><a href="index.php?page=contact" class="hover:text-gray-300">Contact</a></li>
                
            </ul>
        </div>
    </nav>

    <!-- Showcase Products -->
    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-semibold mb-6">Featured Products</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            <!-- Product Card (Example) -->
            <!-- Repeat this block for each product -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker1.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Adidas - Scarlet Black</h3>
                    <p class="text-gray-700">$99.99</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>


            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker2.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Adidas Samba</h3>
                    <p class="text-gray-700">$89.99</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker3.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Adidas Campus 00s</h3>
                    <p class="text-gray-700">$79.99</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>


            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker4.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Nike Air Zoom Pegasus</h3>
                    <p class="text-gray-700">$109.99</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker5.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Puma Cassia</h3>
                    <p class="text-gray-700">$90.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker6.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Adidas Gazelle</h3>
                    <p class="text-gray-700">$85.99</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker7.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Zatz Chunky Sneakers</h3>
                    <p class="text-gray-700">$70.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker8.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Nike High Dunks</h3>
                    <p class="text-gray-700">$120.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker9.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Nike Air Jordan - Black </h3>
                    <p class="text-gray-700">$110.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker10.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Nike Air Jordan - Green</h3>
                    <p class="text-gray-700">$110.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker11.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Nike Air Trails </h3>
                    <p class="text-gray-700">$75.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img src="../assets/sneaker12.jpeg" alt="Product Image" class="w-full h-64 object-cover">
                <div class="p-4">
                    <h3 class="text-xl font-semibold mb-2">Adidas Sports</h3>
                    <p class="text-gray-700">$90.00</p>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">Add to Cart</button>
                </div>
            </div>
            <!-- End Product Card -->
        </div>
    </div>

    
</body>
</html>
