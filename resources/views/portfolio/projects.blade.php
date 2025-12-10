@extends('layouts.portfolio')

@section('title', 'Projects - Alex Chen')
@section('description', 'Explore Alex Chen\'s portfolio of hardware engineering and web development projects.')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-gradient-to-br from-gray-900 via-blue-900 to-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-white mb-6">My Projects</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">
                A collection of hardware innovations and web applications that showcase my technical skills and creativity
            </p>
        </div>
    </div>
</section>

<!-- Filter Tabs -->
<section class="py-8 bg-gray-800 border-b border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn active px-6 py-2 rounded-full bg-blue-600 text-white font-semibold transition-colors" data-filter="all">
                All Projects
            </button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 font-semibold transition-colors" data-filter="hardware">
                Hardware
            </button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 font-semibold transition-colors" data-filter="web">
                Web Development
            </button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-700 text-gray-300 hover:bg-gray-600 font-semibold transition-colors" data-filter="iot">
                IoT Projects
            </button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
            
            <!-- Smart Home IoT Hub -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-blue-500 transition-all hover:transform hover:scale-105" data-category="hardware iot">
                <div class="h-48 bg-gradient-to-br from-blue-600 to-purple-600 flex items-center justify-center relative">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                    </svg>
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-500 text-white px-2 py-1 rounded text-xs font-semibold">Featured</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Smart Home IoT Hub</h3>
                    <p class="text-gray-400 mb-4">Custom PCB design with web dashboard for controlling smart home devices via ESP32 microcontroller. Features real-time monitoring and automated scheduling.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">ESP32</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">PCB Design</span>
                        <span class="px-3 py-1 bg-orange-600 text-white text-sm rounded-full">MQTT</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                        <span class="text-gray-500 text-sm">Dec 2024</span>
                    </div>
                </div>
            </div>

            <!-- E-commerce Website -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition-all hover:transform hover:scale-105" data-category="web">
                <div class="h-48 bg-gradient-to-br from-green-600 to-blue-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">TechStore E-commerce</h3>
                    <p class="text-gray-400 mb-4">Full-stack e-commerce platform built with Laravel and React. Features include payment integration, inventory management, and admin dashboard.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-red-600 text-white text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">React</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">MySQL</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Stripe</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                        <span class="text-gray-500 text-sm">Nov 2024</span>
                    </div>
                </div>
            </div>

            <!-- Arduino Weather Station -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-500 transition-all hover:transform hover:scale-105" data-category="hardware iot">
                <div class="h-48 bg-gradient-to-br from-yellow-600 to-orange-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Arduino Weather Station</h3>
                    <p class="text-gray-400 mb-4">Comprehensive weather monitoring system with multiple sensors, LCD display, and data logging capabilities. Includes web interface for historical data.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Arduino</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Sensors</span>
                        <span class="px-3 py-1 bg-yellow-600 text-white text-sm rounded-full">JavaScript</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Chart.js</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <span class="text-gray-500 text-sm">Oct 2024</span>
                    </div>
                </div>
            </div>

            <!-- Task Management App -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-purple-500 transition-all hover:transform hover:scale-105" data-category="web">
                <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">TaskFlow - Project Manager</h3>
                    <p class="text-gray-400 mb-4">Collaborative task management application with real-time updates, team collaboration features, and progress tracking dashboard.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Node.js</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Socket.io</span>
                        <span class="px-3 py-1 bg-orange-600 text-white text-sm rounded-full">MongoDB</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                        <span class="text-gray-500 text-sm">Sep 2024</span>
                    </div>
                </div>
            </div>

            <!-- LED Matrix Display -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-red-500 transition-all hover:transform hover:scale-105" data-category="hardware">
                <div class="h-48 bg-gradient-to-br from-red-600 to-pink-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4V2a1 1 0 011-1h8a1 1 0 011 1v2m-9 0h10m-10 0a2 2 0 00-2 2v14a2 2 0 002 2h10a2 2 0 002-2V6a2 2 0 00-2-2M9 12h6m-6 4h6"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Programmable LED Matrix</h3>
                    <p class="text-gray-400 mb-4">32x32 LED matrix display with custom driver board. Features text scrolling, animations, and smartphone app control via Bluetooth.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Arduino</span>
                        <span class="px-3 py-1 bg-red-600 text-white text-sm rounded-full">LED Matrix</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Bluetooth</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Mobile App</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                        </div>
                        <span class="text-gray-500 text-sm">Aug 2024</span>
                    </div>
                </div>
            </div>

            <!-- Portfolio Website -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition-all hover:transform hover:scale-105" data-category="web">
                <div class="h-48 bg-gradient-to-br from-green-600 to-blue-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Personal Portfolio Website</h3>
                    <p class="text-gray-400 mb-4">Modern, responsive portfolio built with Laravel and Tailwind CSS. Features smooth animations, project showcase, and contact functionality.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-red-600 text-white text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-yellow-600 text-white text-sm rounded-full">JavaScript</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Responsive</span>
                    </div>
                    <div class="flex justify-between items-center">
                        <div class="flex space-x-3">
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                                </svg>
                            </a>
                            <a href="#" class="text-blue-400 hover:text-blue-300 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                            </a>
                        </div>
                        <span class="text-gray-500 text-sm">Dec 2024</span>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gradient-to-r from-blue-600 to-purple-600">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-white mb-4">Interested in Collaborating?</h2>
        <p class="text-xl text-blue-100 mb-8">
            I'm always excited to work on new projects and explore innovative solutions. Let's create something amazing together!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-white text-blue-600 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Get In Touch
            </a>
            <a href="https://github.com" class="border border-white text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-blue-600 transition-colors">
                View GitHub
            </a>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            const filter = this.getAttribute('data-filter');
            
            // Update active button
            filterButtons.forEach(btn => {
                btn.classList.remove('active', 'bg-blue-600', 'text-white');
                btn.classList.add('bg-gray-700', 'text-gray-300');
            });
            this.classList.add('active', 'bg-blue-600', 'text-white');
            this.classList.remove('bg-gray-700', 'text-gray-300');
            
            // Filter projects
            projectCards.forEach(card => {
                const categories = card.getAttribute('data-category');
                if (filter === 'all' || categories.includes(filter)) {
                    card.style.display = 'block';
                    card.style.animation = 'fadeIn 0.5s ease-in';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    });
});
</script>

<style>
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
</style>
@endsection