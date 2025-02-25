<x-app-layout>
    <x-slot:title> Add New Property </x-slot>

    <!-- Add Property Form Section -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto bg-white rounded-xl shadow-md border border-gray-200 overflow-hidden">
                <!-- Progress Steps -->
                <div class="bg-gray-50 px-6 py-4 border-b border-gray-200">
                    <div class="flex items-center justify-between">
                        <div class="flex flex-col items-center">
                            <div class="bg-[#FF5A5F] text-white h-8 w-8 rounded-full flex items-center justify-center">
                                <span class="text-sm font-bold">1</span>
                            </div>
                            <span class="text-xs mt-1 font-medium text-[#FF5A5F]">Property Details</span>
                        </div>
                        <div class="flex-1 h-1 mx-2 bg-gray-300">
                            <div class="h-full bg-[#FF5A5F] w-0"></div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="bg-gray-300 text-gray-600 h-8 w-8 rounded-full flex items-center justify-center">
                                <span class="text-sm font-bold">2</span>
                            </div>
                            <span class="text-xs mt-1 font-medium text-gray-500">Photos & Amenities</span>
                        </div>
                        <div class="flex-1 h-1 mx-2 bg-gray-300">
                            <div class="h-full bg-[#FF5A5F] w-0"></div>
                        </div>
                        <div class="flex flex-col items-center">
                            <div class="bg-gray-300 text-gray-600 h-8 w-8 rounded-full flex items-center justify-center">
                                <span class="text-sm font-bold">3</span>
                            </div>
                            <span class="text-xs mt-1 font-medium text-gray-500">Pricing & Availability</span>
                        </div>
                    </div>
                </div>

                <!-- Form Content -->
                <div class="p-6 md:p-8">
                    <form id="addPropertyForm" class="space-y-8">
                        <!-- Property Title -->
                        <div>
                            <label for="propertyTitle" class="block text-sm font-medium text-gray-700 mb-1">Property Title</label>
                            <input autocomplete="off" type="text" id="propertyTitle" name="propertyTitle" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" placeholder="e.g. Luxury Apartment with Ocean View">
                        </div>

                        <!-- Property Type & Bedrooms -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="propertyType" class="block text-sm font-medium text-gray-700 mb-1">Property Type</label>
                                <select id="propertyType" name="propertyType" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                                    <option value="">Select property type</option>
                                    <option value="apartment">Apartment</option>
                                    <option value="house">House</option>
                                    <option value="villa">Villa</option>
                                    <option value="condo">Condo</option>
                                    <option value="cabin">Cabin</option>
                                </select>
                            </div>
                            <div>
                                <label for="bedrooms" class="block text-sm font-medium text-gray-700 mb-1">Bedrooms</label>
                                <select id="bedrooms" name="bedrooms" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                                    <option value="1">1 Bedroom</option>
                                    <option value="2">2 Bedrooms</option>
                                    <option value="3">3 Bedrooms</option>
                                    <option value="4">4 Bedrooms</option>
                                    <option value="5">5+ Bedrooms</option>
                                </select>
                            </div>
                        </div>

                        <!-- Bathrooms Only (Removed Sleeps) -->
                        <div>
                            <label for="bathrooms" class="block text-sm font-medium text-gray-700 mb-1">Bathrooms</label>
                            <select id="bathrooms" name="bathrooms" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                                <option value="1">1 Bathroom</option>
                                <option value="2">2 Bathrooms</option>
                                <option value="3">3 Bathrooms</option>
                                <option value="4">4+ Bathrooms</option>
                            </select>
                        </div>

                        <!-- Location Section -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Property Location</label>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                                <div>
                                    <label for="country" class="block text-sm font-medium text-gray-500 mb-1">Host Country*</label>
                                    <select id="country" name="country" class="w-full border border-gray-300 rounded-lg py-3 px-4 bg-gray-100 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" disabled>
                                        <option value="morocco" selected>Morocco</option>
                                    </select>
                                </div>
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-500 mb-1">City*</label>
                                    <select id="city" name="city" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                                        <option value="">Select city</option>
                                        <option value="casablanca">Casablanca</option>
                                        <option value="rabat">Rabat</option>
                                        <option value="marrakech">Marrakech</option>
                                        <option value="fes">Fes</option>
                                        <option value="tangier">Tangier</option>
                                        <option value="agadir">Agadir</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-500 mb-1">Full Address*</label>
                                <input type="text" id="address" name="address" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" placeholder="Street address">
                            </div>
                        </div>

                        <!-- Description Section -->
                        <div>
                            <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Property Description</label>
                            <textarea id="description" name="description" rows="4" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" placeholder="Describe your property and highlight what makes it special for World Cup visitors..."></textarea>
                            <div class="flex justify-between mt-1">
                                <span class="text-xs text-gray-500">Minimum 100 characters</span>
                                <span id="charCount" class="text-xs text-gray-500">0/2000</span>
                            </div>
                        </div>

                        <!-- Single Image Upload Section -->
                        <div class="border border-dashed border-gray-300 rounded-lg p-6">
                            <label class="block text-sm font-medium text-gray-700 mb-3">Property Photo</label>
                            
                            <div id="imageUploadContainer" class="text-center">
                                <div id="previewContainer" class="hidden mb-6">
                                    <div class="relative mx-auto w-full max-w-md">
                                        <img id="photoPreview" src="" alt="Property image" class="w-full h-48 object-cover rounded-lg">
                                        <button type="button" id="removePhoto" class="absolute top-2 right-2 bg-white p-1.5 rounded-full text-gray-600 hover:text-red-500">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path>
                                            </svg>
                                        </button>
                                        <div class="absolute bottom-2 left-2 bg-white px-2 py-1 text-xs font-medium rounded">Cover Photo</div>
                                    </div>
                                </div>
                                
                                <div id="uploadPrompt" class="py-8 flex flex-col items-center justify-center">
                                    <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                        <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <div class="mt-4 flex text-sm text-gray-600">
                                        <label for="imageUpload" class="relative cursor-pointer bg-white rounded-md font-medium text-[#FF5A5F] hover:text-[#E94E53] focus-within:outline-none">
                                            <span>Upload image</span>
                                            <input id="imageUpload" name="image" type="file" class="sr-only" accept="image/*">
                                        </label>
                                        <p class="pl-1">or drag and drop</p>
                                    </div>
                                    <p class="text-xs text-gray-500 mt-2">PNG, JPG, GIF up to 10MB</p>
                                </div>
                            </div>
                        </div>

                        <!-- Pricing & Availability Section -->
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-3">Pricing & Availability</label>
                            
                            <div class="mb-6">
                                <label for="price" class="block text-sm font-medium text-gray-500 mb-1">Price per Night (MAD)*</label>
                                <div class="relative mt-1 rounded-md shadow-sm">
                                    <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                        <span class="text-gray-500 sm:text-sm">DH</span>
                                    </div>
                                    <input type="number" name="price" id="price" class="w-full border border-gray-300 rounded-lg py-3 pl-10 pr-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" placeholder="0.00">
                                </div>
                            </div>
                            
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div>
                                    <label for="startDate" class="block text-sm font-medium text-gray-500 mb-1">Start Date*</label>
                                    <div class="relative">
                                        <input type="text" id="startDate" name="startDate" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" placeholder="Select start date">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <label for="endDate" class="block text-sm font-medium text-gray-500 mb-1">End Date*</label>
                                    <div class="relative">
                                        <input type="text" id="endDate" name="endDate" class="w-full border border-gray-300 rounded-lg py-3 px-4 focus:ring-[#FF5A5F] focus:border-[#FF5A5F]" placeholder="Select end date">
                                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="flex justify-between pt-6 border-t border-gray-200">
                            <button type="button" class="bg-white border-2 border-gray-300 text-gray-700 hover:bg-gray-50 px-6 py-3 rounded-lg text-sm font-semibold transition duration-300 ease-in-out inline-block">
                                Back
                            </button>
                            <button type="button" class="bg-[#FF5A5F] text-white hover:bg-[#E94E53] px-6 py-3 rounded-lg text-sm font-semibold transition duration-300 ease-in-out inline-block" id="goToStep2">
                                Publish Property
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Include Flatpickr Date Picker Library -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <!-- JavaScript for interactive features -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Single image upload and preview
            const imageUpload = document.getElementById('imageUpload');
            const previewContainer = document.getElementById('previewContainer');
            const uploadPrompt = document.getElementById('uploadPrompt');
            const photoPreview = document.getElementById('photoPreview');
            const removePhotoBtn = document.getElementById('removePhoto');
            
            imageUpload.addEventListener('change', function() {
                if (this.files && this.files.length > 0) {
                    const file = this.files[0];
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        photoPreview.src = e.target.result;
                        previewContainer.classList.remove('hidden');
                        uploadPrompt.classList.add('hidden');
                    };
                    
                    reader.readAsDataURL(file);
                }
            });
            
            // Remove photo button
            removePhotoBtn.addEventListener('click', function() {
                imageUpload.value = '';
                photoPreview.src = '';
                previewContainer.classList.add('hidden');
                uploadPrompt.classList.remove('hidden');
            });
            
            // Allow drag and drop file upload
            const dropArea = document.getElementById('imageUploadContainer');
            
            ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, preventDefaults, false);
            });
            
            function preventDefaults(e) {
                e.preventDefault();
                e.stopPropagation();
            }
            
            ['dragenter', 'dragover'].forEach(eventName => {
                dropArea.addEventListener(eventName, highlight, false);
            });
            
            ['dragleave', 'drop'].forEach(eventName => {
                dropArea.addEventListener(eventName, unhighlight, false);
            });
            
            function highlight() {
                dropArea.classList.add('bg-gray-100');
            }
            
            function unhighlight() {
                dropArea.classList.remove('bg-gray-100');
            }
            
            dropArea.addEventListener('drop', handleDrop, false);
            
            function handleDrop(e) {
                const dt = e.dataTransfer;
                const files = dt.files;
                
                if (files.length > 0) {
                    imageUpload.files = files;
                    
                    // Trigger change event manually
                    const event = new Event('change');
                    imageUpload.dispatchEvent(event);
                }
            }
            
            // Character counter for description
            const descriptionField = document.getElementById('description');
            const charCount = document.getElementById('charCount');
            
            descriptionField.addEventListener('input', function() {
                const count = this.value.length;
                charCount.textContent = `${count}/2000`;
                
                if (count > 2000) {
                    charCount.classList.add('text-red-500');
                    charCount.classList.remove('text-gray-500');
                } else {
                    charCount.classList.remove('text-red-500');
                    charCount.classList.add('text-gray-500');
                }
            });
            
            // Initialize Flatpickr date pickers for separate start and end dates
            flatpickr("#startDate", {
                dateFormat: "Y-m-d",
                minDate: "today",
                onChange: function(selectedDates, dateStr) {
                    // Set the minimum date of the end date picker to the selected start date
                    endDatePicker.set("minDate", dateStr);
                }
            });
            
            const endDatePicker = flatpickr("#endDate", {
                dateFormat: "Y-m-d",
                minDate: "today"
            });
            
            // Simulate the form submission
            document.getElementById('goToStep2').addEventListener('click', function() {
                alert('Form validation would occur here, and then proceed to step 2: Photos & Amenities');
            });
        });
    </script>
</x-app-layout>