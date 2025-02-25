<x-app-layout>
    <x-slot:title> My Favorites </x-slot>

    <!-- Hero Section -->
    <section class="relative py-20 overflow-hidden bg-gray-50">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 relative z-10">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-4">
                    Your <span class="text-[#FF5A5F]">Favorite</span> Properties
                </h1>
                <p class="text-lg mb-6 max-w-2xl mx-auto text-gray-600">
                    Manage your saved properties across Morocco, Spain, and Portugal for the World Cup 2030.
                </p>
            </div>
        </div>
    </section>

    <!-- Favorites Content -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            
            <!-- Filters and Sort -->
            <div class="mb-8 flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0">
                <h2 class="text-2xl font-semibold text-gray-900">My Favorites <span class="text-sm font-normal text-gray-500">(12 properties)</span></h2>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <select class="border border-gray-300 rounded-lg p-2 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                        <option>All Countries</option>
                        <option>Morocco</option>
                        <option>Spain</option>
                        <option>Portugal</option>
                    </select>
                    
                    <select class="border border-gray-300 rounded-lg p-2 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                        <option>Sort: Recommended</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                        <option>Newest First</option>
                    </select>
                </div>
            </div>
            
            <!-- Empty State (Hidden by default using the hidden class) -->
            <div class="hidden text-center py-16 border-2 border-dashed border-gray-200 rounded-xl bg-gray-50">
                <svg class="w-16 h-16 mx-auto text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                </svg>
                <h3 class="text-xl font-medium text-gray-900 mb-2">No favorites yet</h3>
                <p class="text-gray-600 max-w-md mx-auto mb-6">Start exploring properties and click the heart icon to add them to your favorites.</p>
                <a href="#" class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-6 py-3 rounded-lg font-medium transition duration-300 ease-in-out inline-block">
                    Explore Properties
                </a>
            </div>

            <!-- Favorites Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Favorite Property Card 1 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200 relative">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="bg-white p-2 rounded-full shadow-md text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
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

                <!-- Favorite Property Card 2 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200 relative">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="bg-white p-2 rounded-full shadow-md text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
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

                <!-- Favorite Property Card 3 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200 relative">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="bg-white p-2 rounded-full shadow-md text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
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

                <!-- Favorite Property Card 4 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200 relative">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="bg-white p-2 rounded-full shadow-md text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <img src="/api/placeholder/400/300" alt="Seafront Apartment in Valencia" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Seafront Apartment</h3>
                                <p class="text-gray-600">Valencia, Spain</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Modern 2-bedroom apartment with breathtaking views of the Mediterranean Sea.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$185 <span class="text-sm font-normal text-gray-600">/ night</span></span>
                            <button class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-4 py-2 rounded-lg font-medium transition duration-300 ease-in-out">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Favorite Property Card 5 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200 relative">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="bg-white p-2 rounded-full shadow-md text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <img src="/api/placeholder/400/300" alt="Historic Apartment in Porto" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Historic Apartment</h3>
                                <p class="text-gray-600">Porto, Portugal</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Charming 1-bedroom apartment in a historic building in downtown Porto.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$110 <span class="text-sm font-normal text-gray-600">/ night</span></span>
                            <button class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-4 py-2 rounded-lg font-medium transition duration-300 ease-in-out">Book Now</button>
                        </div>
                    </div>
                </div>

                <!-- Favorite Property Card 6 -->
                <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition duration-300 border border-gray-200 relative">
                    <div class="absolute top-4 right-4 z-10">
                        <button class="bg-white p-2 rounded-full shadow-md text-[#FF5A5F] hover:bg-[#FF5A5F] hover:text-white transition duration-300">
                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </div>
                    <img src="/api/placeholder/400/300" alt="Mountain Cabin in Sierra Nevada" class="w-full h-56 object-cover">
                    <div class="p-6">
                        <div class="flex justify-between items-start mb-2">
                            <div>
                                <h3 class="text-xl font-semibold text-gray-900">Mountain Cabin</h3>
                                <p class="text-gray-600">Sierra Nevada, Spain</p>
                            </div>
                        </div>
                        <p class="text-gray-600 mb-4">Cozy cabin with fireplace and mountain views, 30 minutes drive from Granada stadium.</p>
                        <div class="flex items-center justify-between">
                            <span class="text-lg font-bold text-gray-900">$130 <span class="text-sm font-normal text-gray-600">/ night</span></span>
                            <button class="bg-[#FF5A5F] hover:bg-[#E94E53] text-white px-4 py-2 rounded-lg font-medium transition duration-300 ease-in-out">Book Now</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="mt-12 flex justify-between items-center">
                <div>
                    <p class="text-sm text-gray-700">
                        Showing <span class="font-medium">1</span> to <span class="font-medium">6</span> of <span class="font-medium">12</span> favorites
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