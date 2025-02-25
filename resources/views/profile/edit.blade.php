<x-app-layout>
    <x-slot:title> My Profile - World Cup 2030 </x-slot>

    <!-- Profile Header Section -->
    <section class="relative py-16 bg-gradient-to-r from-[#FF5A5F] to-[#FF8A8F]">
        <div class="container mx-auto px-4 md:px-6 lg:px-8 relative z-10">
            <div class="flex flex-col md:flex-row items-center md:items-end space-y-6 md:space-y-0">
                <div class="relative group">
                    <div class="w-32 h-32 md:w-40 md:h-40 rounded-full overflow-hidden border-4 border-white shadow-xl">
                        <img id="profile-image" src="/api/placeholder/300/300" alt="Profile Photo" class="w-full h-full object-cover">
                    </div>
                    <label for="photo-upload" class="absolute inset-0 flex items-center justify-center bg-black bg-opacity-50 rounded-full opacity-0 group-hover:opacity-100 cursor-pointer transition duration-300">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="sr-only">Change Photo</span>
                    </label>
                    <input id="photo-upload" type="file" accept="image/*" class="hidden">
                </div>
                <div class="md:ml-8 text-center md:text-left">
                    <h1 class="text-3xl md:text-4xl font-bold text-white">
                        <span id="display-name">John Doe</span>
                        <span class="inline-block ml-3 px-3 py-1 bg-white text-[#FF5A5F] text-sm rounded-full font-medium uppercase" id="user-role">Tourist</span>
                    </h1>
                    <p class="text-white text-lg opacity-90 mt-2" id="user-since">Member since January 2023</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Profile Content -->
    <section class="py-12 bg-white">
        <div class="container mx-auto px-4 md:px-6 lg:px-8">
            <div class="max-w-4xl mx-auto">
                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-8">
                    <nav class="-mb-px flex space-x-8">
                        <a href="#" class="border-[#FF5A5F] text-[#FF5A5F] whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm">
                            Personal Information
                        </a>
                    </nav>
                </div>

                <!-- Profile Form -->
                <form id="profile-form" class="space-y-8">
                    <!-- Success Alert (Hidden by default) -->
                    <div id="success-alert" class="hidden bg-green-50 border-l-4 border-green-400 p-4 mb-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0">
                                <svg class="h-5 w-5 text-green-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <div class="ml-3">
                                <p class="text-sm text-green-700">Profile updated successfully!</p>
                            </div>
                            <div class="ml-auto pl-3">
                                <button type="button" onclick="document.getElementById('success-alert').classList.add('hidden')" class="inline-flex text-green-500 hover:text-green-600">
                                    <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Basic Info Section -->
                    <div class="bg-white shadow rounded-lg p-6 md:p-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Basic Information</h2>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1">First Name</label>
                                <input type="text" id="first-name" name="first-name" value="John" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                            </div>
                            
                            <div>
                                <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1">Last Name</label>
                                <input type="text" id="last-name" name="last-name" value="Doe" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                            </div>
                            
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" id="email" name="email" value="john.doe@example.com" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                            </div>
                            
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                <input type="tel" id="phone" name="phone" value="+1 (555) 123-4567" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                            </div>
                            
                            <div>
                                <label for="language" class="block text-sm font-medium text-gray-700 mb-1">Preferred Language</label>
                                <select id="language" name="language" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                                    <option value="en">English</option>
                                    <option value="es">Spanish</option>
                                    <option value="fr">French</option>
                                    <option value="pt">Portuguese</option>
                                    <option value="ar">Arabic</option>
                                </select>
                            </div>
                            
                            <div>
                                <label for="currency" class="block text-sm font-medium text-gray-700 mb-1">Preferred Currency</label>
                                <select id="currency" name="currency" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">
                                    <option value="usd">USD ($)</option>
                                    <option value="eur">EUR (€)</option>
                                    <option value="gbp">GBP (£)</option>
                                    <option value="mad">MAD (Dh)</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Profile Section -->
                    <div class="bg-white shadow rounded-lg p-6 md:p-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Profile Information</h2>
                        
                        <div class="space-y-6">
                            <div>
                                <label for="bio" class="block text-sm font-medium text-gray-700 mb-1">About Me</label>
                                <textarea id="bio" name="bio" rows="4" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-[#FF5A5F] focus:border-[#FF5A5F]">Football enthusiast excited about the World Cup 2030! Love traveling and experiencing new cultures.</textarea>
                            </div>
                            
                            <div>
                                <h3 class="text-sm font-medium text-gray-700 mb-1">Social Media Profiles</h3>
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mt-2">
                                    <div class="flex items-center border border-gray-300 rounded-lg p-3">
                                        <svg class="h-6 w-6 text-blue-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.325v-21.35c0-.732-.593-1.325-1.325-1.325z"></path>
                                        </svg>
                                        <input type="text" placeholder="Facebook URL" class="flex-1 ml-3 bg-transparent border-none focus:ring-0">
                                    </div>
                                    
                                    <div class="flex items-center border border-gray-300 rounded-lg p-3">
                                        <svg class="h-6 w-6 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723 10.054 10.054 0 01-3.127 1.184 4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"></path>
                                        </svg>
                                        <input type="text" placeholder="Twitter URL" class="flex-1 ml-3 bg-transparent border-none focus:ring-0">
                                    </div>
                                    
                                    <div class="flex items-center border border-gray-300 rounded-lg p-3">
                                        <svg class="h-6 w-6 text-red-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm4.441 16.892c-2.102.144-6.784.144-8.883 0-2.276-.156-2.541-1.27-2.558-4.892.017-3.629.285-4.736 2.558-4.892 2.099-.144 6.782-.144 8.883 0 2.277.156 2.541 1.27 2.559 4.892-.018 3.629-.285 4.736-2.559 4.892zm-6.441-7.234l4.917 2.338-4.917 2.346v-4.684z"></path>
                                        </svg>
                                        <input type="text" placeholder="YouTube URL" class="flex-1 ml-3 bg-transparent border-none focus:ring-0">
                                    </div>
                                    
                                    <div class="flex items-center border border-gray-300 rounded-lg p-3">
                                        <svg class="h-6 w-6 text-pink-600" fill="currentColor" viewBox="0 0 24 24">
                                            <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"></path>
                                        </svg>
                                        <input type="text" placeholder="Instagram URL" class="flex-1 ml-3 bg-transparent border-none focus:ring-0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Privacy Section -->
                    <div class="bg-white shadow rounded-lg p-6 md:p-8">
                        <h2 class="text-xl font-semibold text-gray-900 mb-6">Privacy Settings</h2>
                        
                        <div class="space-y-4">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="public-profile" name="public-profile" type="checkbox" checked class="h-4 w-4 text-[#FF5A5F] focus:ring-[#FF5A5F] border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="public-profile" class="font-medium text-gray-700">Public Profile</label>
                                    <p class="text-gray-500">Allow other users to view your profile</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="email-visible" name="email-visible" type="checkbox" class="h-4 w-4 text-[#FF5A5F] focus:ring-[#FF5A5F] border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="email-visible" class="font-medium text-gray-700">Show Email Address</label>
                                    <p class="text-gray-500">Make your email address visible to other users</p>
                                </div>
                            </div>
                            
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="marketing-emails" name="marketing-emails" type="checkbox" checked class="h-4 w-4 text-[#FF5A5F] focus:ring-[#FF5A5F] border-gray-300 rounded">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="marketing-emails" class="font-medium text-gray-700">Marketing Emails</label>
                                    <p class="text-gray-500">Receive emails about World Cup 2030 promotions and deals</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Form Buttons -->
                    <div class="flex justify-end space-x-4">
                        <button type="button" class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 bg-white hover:bg-gray-50 font-medium transition duration-300 ease-in-out">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-3 bg-[#FF5A5F] hover:bg-[#E94E53] text-white rounded-lg font-medium transition duration-300 ease-in-out">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- JavaScript for live image preview and form handling -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Variables
            const photoUpload = document.getElementById('photo-upload');
            const profileImage = document.getElementById('profile-image');
            const profileForm = document.getElementById('profile-form');
            const successAlert = document.getElementById('success-alert');
            const firstName = document.getElementById('first-name');
            const lastName = document.getElementById('last-name');
            const displayName = document.getElementById('display-name');
            const roleRadios = document.getElementsByName('role');
            const userRole = document.getElementById('user-role');
            
            // Handle image upload preview
            photoUpload.addEventListener('change', function(event) {
                if (event.target.files && event.target.files[0]) {
                    const reader = new FileReader();
                    
                    reader.onload = function(e) {
                        profileImage.src = e.target.result;
                    }
                    
                    reader.readAsDataURL(event.target.files[0]);
                }
            });
            
            // Update display name when first or last name changes
            firstName.addEventListener('input', updateDisplayName);
            lastName.addEventListener('input', updateDisplayName);
            
            function updateDisplayName() {
                displayName.textContent = `${firstName.value} ${lastName.value}`;
            }
            
            // Update user role when radio changes
            for (const radio of roleRadios) {
                radio.addEventListener('change', function() {
                    if (this.checked) {
                        // Capitalize first letter
                        const roleText = this.value.charAt(0).toUpperCase() + this.value.slice(1);
                        userRole.textContent = roleText;
                    }
                });
            }
            
            // Form submission
            profileForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Show success message
                successAlert.classList.remove('hidden');
                
                // Scroll to top to see the message
                window.scrollTo({ top: 0, behavior: 'smooth' });
                
                // Hide message after 5 seconds
                setTimeout(() => {
                    successAlert.classList.add('hidden');
                }, 5000);
                
                // In a real app, you would post the form data to your server here
                console.log('Form submitted');
            });
        });
    </script>
</x-app-layout>