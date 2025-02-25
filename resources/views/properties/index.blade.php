<x-app-layout>
    <x-slot:title> World Cup 2030 Accommodations </x-slot>

    <!-- Enhanced Hero Section -->
    <section class="relative py-24 overflow-hidden">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold leading-tight mb-6">
                    Experience the <span class="text-[#FF5A5F]">World Cup 2030</span> in Style
                </h1>
                <p class="text-xl mb-8 max-w-3xl mx-auto">
                    Book your dream accommodation across Morocco, Spain, and Portugal. Enjoy comfort, convenience, and unforgettable memories.
                </p>
                <a href="#properties" class="bg-white border-2 border-[#FF5A5F] text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white px-8 py-4 rounded-full text-lg font-semibold transition duration-300 ease-in-out inline-block">
                    Explore Properties
                </a>
            </div>
        </div>
    </section>

    <!-- Improved Search Section -->
    <section class="py-12 bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-lg p-6 -mt-20 relative z-20">
                <form class="flex flex-col md:flex-row gap-4 items-center">
                    <div class="flex-grow">
                        <input type="text" autocomplete="off" id="search" placeholder="Search by location, property name, or amenities" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                    </div>
                    <div class="md:w-48">
                        <select id="perPage" class="w-full p-4 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                            <option value="12">12 per page</option>
                            <option value="24">24 per page</option>
                            <option value="36">36 per page</option>
                            <option value="48">48 per page</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-6 py-4 rounded-lg font-medium transition duration-300 ease-in-out flex items-center justify-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                        </svg>
                        Search
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- Properties Section -->
    <section id="properties" class="py-8 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Property Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200">
                    <img src="/api/placeholder/400/300" alt="Luxury Apartment in Marrakech" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Luxury Apartment with Pool</h3>
                                <p class="text-gray-600">Marrakech, Morocco</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Spacious 3-bedroom apartment with private pool, perfect for your World Cup stay.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$150 <span class="text-sm font-normal text-gray-600">/ night</span></span>
                            <button class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-4 py-2 rounded-lg font-medium transition duration-300 ease-in-out">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200">
                    <img src="/api/placeholder/400/300" alt="Cozy Studio in Barcelona" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Cozy Studio near Stadium</h3>
                                <p class="text-gray-600">Barcelona, Spain</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Comfortable studio apartment just 10 minutes walk from the main stadium.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$95 <span class="text-sm font-normal text-gray-600">/ night</span></span>
                            <button class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-4 py-2 rounded-lg font-medium transition duration-300 ease-in-out">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Property Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200">
                    <img src="/api/placeholder/400/300" alt="Villa in Lisbon" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Luxurious Villa with View</h3>
                                <p class="text-gray-600">Lisbon, Portugal</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Stunning 4-bedroom villa with panoramic views of Lisbon and the Atlantic Ocean.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$320 <span class="text-sm font-normal text-gray-600">/ night</span></span>
                            <button class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-4 py-2 rounded-lg font-medium transition duration-300 ease-in-out">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Add more property cards here -->

            </div>

            <!-- Pagination (Kept as requested) -->
            <div class="mt-12 flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">12</span> of <span class="font-medium">300</span> results
                    </p>
                </div>
                <div>
                    <nav class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Previous</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="#" aria-current="page" class="z-10 bg-[#FF5A5F] border-[#FF5A5F] text-white relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            1
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            2
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                            3
                        </a>
                        <span class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700">
                            ...
                        </span>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 hidden md:inline-flex relative items-center px-4 py-2 border text-sm font-medium">
                            8
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            9
                        </a>
                        <a href="#" class="bg-white border-gray-300 text-gray-500 hover:bg-gray-50 relative inline-flex items-center px-4 py-2 border text-sm font-medium">
                            10
                        </a>
                        <a href="#" class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                            <span class="sr-only">Next</span>
                            <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>