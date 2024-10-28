<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Pro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        /* Smooth scroll effect for anchor links */
        html {
            scroll-behavior: smooth;
        }

        .slide {
            transition: opacity 0.6s ease-in-out, transform 0.6s ease-in-out;
            opacity: 0;
            transform: translateX(100%);
        }

        .slide.active {
            opacity: 1;
            transform: translateX(0);
        }

        .slide.hidden {
            display: none;
        }

        .max-height-0 {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }

        .max-height-full {
            max-height: 300px;
            overflow: hidden;
            transition: max-height 0.5s ease-in-out;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-900 via-blue-600 to-blue-500 text-gray-100">

    <!-- Navbar -->
    <header class="bg-blue-800 shadow-lg sticky top-0 z-20">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-white">TravelPro</a>

            <!-- Hamburger Icon for Mobile -->
            <div class="md:hidden">
                <button id="hamburger-button" class="text-white focus:outline-none">
                    <svg class="w-6 h-6 transition-transform transform" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>

            <!-- Navigation Links for Desktop -->
            <nav id="nav-menu" class="hidden md:flex md:space-x-4">
                <a href="#about" class="text-gray-200 hover:text-blue-300 transition duration-300">About</a>
                <a href="#catalog-mobil" class="text-gray-200 hover:text-blue-300 transition duration-300">Mobil</a>
                <a href="#catalog-wisata" class="text-gray-200 hover:text-blue-300 transition duration-300">Wisata</a>
                <a href="#contact" class="text-gray-200 hover:text-blue-300 transition duration-300">Contact</a>
                <a href="order.php"
                    class="text-gray-200 hover:text-blue-300 transition duration-300">Order</a>
            </nav>
        </div>

        <!-- Mobile Menu Links with Smooth Slide-down Animation -->
        <div id="mobile-menu" class="md:hidden max-height-0 bg-blue-700 text-white">
            <a href="#about" class="block px-4 py-2 hover:bg-blue-600 transition duration-300">About</a>
            <a href="#catalog-mobil" class="block px-4 py-2 hover:bg-blue-600 transition duration-300">Mobil</a>
            <a href="#catalog-wisata" class="block px-4 py-2 hover:bg-blue-600 transition duration-300">Wisata</a>
            <a href="#contact" class="block px-4 py-2 hover:bg-blue-600 transition duration-300">Contact</a>
            <a href="order.php" class="block px-4 py-2 hover:bg-blue-600 transition duration-300">Order</a>
        </div>
    </header>

    <!-- Carousel -->
    <section class="mt-16">
        <div class="carousel relative container mx-auto px-4 py-10">
            <div class="carousel-inner relative overflow-hidden rounded-lg shadow-lg">
                <div class="carousel-item slide active w-full h-96 bg-cover bg-center"
                    style="background-image: url('images/travel1.jpg');"></div>
                <div class="carousel-item slide w-full h-96 bg-cover bg-center"
                    style="background-image:  url('images/travel2.jpg');"></div>
                <div class="carousel-item slide w-full h-96 bg-cover bg-center"
                    style="background-image:  url('images/travel3.jpg');"></div>
            </div>

            <!-- Carousel Navigation Buttons -->
            <button id="carousel-prev"
                class="carousel-prev absolute left-4 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-500 transition duration-300">
                ‹
            </button>
            <button id="carousel-next"
                class="carousel-next absolute right-4 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white p-2 rounded-full hover:bg-blue-500 transition duration-300">
                ›
            </button>
        </div>
    </section>

    <!-- Greeting Card -->
    <section class="text-center py-10 bg-white">
        <h2 class="text-4xl font-bold text-blue-500 mb-4">Welcome to TravelPro</h2>
        <p class="text-lg text-blue-400">Your gateway to unforgettable travel experiences.</p>
    </section>

    <!-- About -->
    <section id="about" class="bg-gradient-to-r from-blue-600 to-blue-800 text-white py-10">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold mb-4">About Us</h2>
            <p>Explore the best travel experiences with us. We offer car rentals and travel packages tailored to your
                needs.</p>
        </div>
    </section>

    <!-- Catalog Travel Mobil -->
    <section id="catalog-mobil" class="py-10 bg-white">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-blue-800 mb-4">Catalog Mobil</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card Example -->
                <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/car/car1.jpg" alt="Car Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Mobil Sedan</h3>
                    <p class="text-blue-600">Comfortable sedan for city travel.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/car/car2.jpg" alt="Car Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Mobil Sedan</h3>
                    <p class="text-blue-600">Comfortable sedan for city travel.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/car/car3.jpg" alt="Car Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Mobil Sedan</h3>
                    <p class="text-blue-600">Comfortable sedan for city travel.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/car/car4.jpg" alt="Car Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Mobil Sedan</h3>
                    <p class="text-blue-600">Comfortable sedan for city travel.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/car/car5.jpg" alt="Car Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Mobil Sedan</h3>
                    <p class="text-blue-600">Comfortable sedan for city travel.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-blue-100 rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/car/car6.jpg" alt="Car Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Mobil Sedan</h3>
                    <p class="text-blue-600">Comfortable sedan for city travel.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <!-- Additional Cards -->
            </div>
        </div>
    </section>

    <!-- Catalog Paket Wisata -->
    <section id="catalog-wisata" class="py-10 bg-gray-100">
        <div class="container mx-auto px-4 text-center">
            <h2 class="text-3xl font-bold text-blue-800 mb-4">Catalog Paket Wisata</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Paket Wisata Card -->
                <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/paket/paket1.jpg" alt="Tour Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Paket Bali</h3>
                    <p class="text-blue-600">Explore the beauty of Bali with our all-inclusive package.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/paket/paket8.jpg" alt="Tour Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Paket Bali</h3>
                    <p class="text-blue-600">Explore the beauty of Bali with our all-inclusive package.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/paket/paket3.jpg" alt="Tour Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Paket Bali</h3>
                    <p class="text-blue-600">Explore the beauty of Bali with our all-inclusive package.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/paket/paket5.jpg" alt="Tour Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Paket Bali</h3>
                    <p class="text-blue-600">Explore the beauty of Bali with our all-inclusive package.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/paket/paket6.jpg" alt="Tour Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Paket Bali</h3>
                    <p class="text-blue-600">Explore the beauty of Bali with our all-inclusive package.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 hover:scale-105 transform transition duration-300">
                    <img src="images/paket/paket7.jpg" alt="Tour Image" class="w-full h-48 rounded-md mb-4">
                    <h3 class="text-xl font-bold text-blue-800">Paket Bali</h3>
                    <p class="text-blue-600">Explore the beauty of Bali with our all-inclusive package.</p>
                    <div class="flex justify-center gap-2 mt-2">
                        <a href="#" class="px-2 py-2 bg-green-500 rounded">Description</a>
                        <a href="#" class="px-2 py-2 bg-blue-500 rounded">Order Now</a>
                    </div>
                </div>
                <!-- Additional Paket Wisata Cards -->
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="bg-blue-900 text-white py-10">
        <div class="container mx-auto px-4 text-center">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h4 class="text-xl font-bold mb-4">Our Location</h4>
                    <iframe class="w-full h-40 rounded-md" src="https://www.google.com/maps/embed?..."></iframe>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Subscribe</h4>
                    <form>
                        <input type="email" placeholder="Enter your email" class="w-full rounded-md p-2 mb-2 text-gray-800">
                        <button class="bg-blue-600 hover:bg-blue-800 text-white rounded-md px-4 py-2">Subscribe</button>
                    </form>
                </div>
                <div>
                    <h4 class="text-xl font-bold mb-4">Follow Us</h4>
                    <div class="flex justify-center space-x-4">
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-2xl hover:text-blue-300"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-8">
            <p>© 2024 TravelPro. All rights reserved.</p>
        </div>
    </footer>

    <!-- Script for Mobile Menu Toggle -->
    <script>
        const hamburgerButton = document.getElementById("hamburger-button");
        const mobileMenu = document.getElementById("mobile-menu");

        hamburgerButton.addEventListener("click", () => {
            mobileMenu.classList.toggle("max-height-0");
            mobileMenu.classList.toggle("max-height-full");
        });

        // Carousel Slide Functionality
        let currentSlide = 0;
        const slides = document.querySelectorAll(".slide");

        function showSlide(index) {
            slides.forEach((slide, i) => {
                slide.classList.toggle("active", i === index);
                slide.classList.toggle("hidden", i !== index);
            });
        }

        document.getElementById("carousel-prev").addEventListener("click", () => {
            currentSlide = (currentSlide > 0) ? currentSlide - 1 : slides.length - 1;
            showSlide(currentSlide);
        });

        document.getElementById("carousel-next").addEventListener("click", () => {
            currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
            showSlide(currentSlide);
        });

        // Auto-slide
        setInterval(() => {
            currentSlide = (currentSlide < slides.length - 1) ? currentSlide + 1 : 0;
            showSlide(currentSlide);
        }, 5000);
    </script>
</body>

</html>