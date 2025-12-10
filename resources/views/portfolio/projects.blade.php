@extends('layouts.portfolio')

@section('title', 'Projects - Renz Ivan Polancos')
@section('description', 'Explore Renz Ivan Polancos\'s portfolio of frontend development projects and user interface designs.')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-white mb-6">My Projects</h1>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                A collection of frontend projects and user interfaces that showcase my design and development skills
            </p>
        </div>
    </div>
</section>

<!-- Filter Tabs -->
<section class="py-8 bg-slate-800 border-b border-slate-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-wrap justify-center gap-4">
            <button class="filter-btn active px-6 py-3 rounded-lg bg-blue-600 text-white font-semibold transition-all shadow-lg" data-filter="all">
                All Projects
            </button>
            <button class="filter-btn px-6 py-3 rounded-lg bg-slate-700 text-slate-300 hover:bg-slate-600 hover:text-white font-semibold transition-all" data-filter="react">
                React Projects
            </button>
            <button class="filter-btn px-6 py-3 rounded-lg bg-slate-700 text-slate-300 hover:bg-slate-600 hover:text-white font-semibold transition-all" data-filter="vue">
                Vue.js Projects
            </button>
            <button class="filter-btn px-6 py-3 rounded-lg bg-slate-700 text-slate-300 hover:bg-slate-600 hover:text-white font-semibold transition-all" data-filter="ui-design">
                UI Design
            </button>
        </div>
    </div>
</section>

<!-- Projects Grid -->
<section class="py-20 bg-gray-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="projects-grid">
            
            <!-- Analytics Dashboard UI -->
            <div class="project-card bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-blue-500 transition-all hover:transform hover:scale-105 shadow-xl hover:shadow-2xl" data-category="react ui-design">
                <div class="h-48 bg-slate-700 flex items-center justify-center relative">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                    <div class="absolute top-4 right-4">
                        <span class="bg-blue-600 text-white px-3 py-1 rounded-full text-xs font-semibold">Featured</span>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Analytics Dashboard UI</h3>
                    <p class="text-slate-400 mb-4">Modern dashboard interface with interactive charts, real-time data visualization, and responsive design. Features dark/light mode toggle and smooth animations.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full font-medium">React</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full font-medium">TypeScript</span>
                        <span class="px-3 py-1 bg-cyan-600 text-white text-sm rounded-full font-medium">Chart.js</span>
                        <span class="px-3 py-1 bg-indigo-600 text-white text-sm rounded-full font-medium">Tailwind CSS</span>
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
                        <span class="text-slate-500 text-sm">Dec 2024</span>
                    </div>
                </div>
            </div>

            <!-- E-commerce Frontend -->
            <div class="project-card bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-emerald-400 transition-all hover:transform hover:scale-105 shadow-xl hover:shadow-2xl" data-category="react ui-design">
                <div class="h-48 bg-gradient-to-br from-green-600 to-blue-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">E-commerce Frontend</h3>
                    <p class="text-gray-400 mb-4">Modern shopping interface with product filtering, wishlist functionality, and smooth checkout flow. Features responsive design and micro-animations.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-red-600 text-white text-sm rounded-full">Next.js</span>
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">React</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Framer Motion</span>
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

            <!-- Learning Platform UI -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-yellow-500 transition-all hover:transform hover:scale-105" data-category="vue ui-design">
                <div class="h-48 bg-gradient-to-br from-yellow-600 to-orange-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Learning Platform UI</h3>
                    <p class="text-gray-400 mb-4">Clean, intuitive interface for online learning with course navigation, progress tracking, and interactive elements. Features accessible design and smooth transitions.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Nuxt.js</span>
                        <span class="px-3 py-1 bg-yellow-600 text-white text-sm rounded-full">SCSS</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Vuetify</span>
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

            <!-- Task Management Interface -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-purple-500 transition-all hover:transform hover:scale-105" data-category="vue ui-design">
                <div class="h-48 bg-gradient-to-br from-purple-600 to-pink-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Task Management Interface</h3>
                    <p class="text-gray-400 mb-4">Intuitive project management interface with drag-and-drop functionality, kanban boards, and team collaboration features. Built with Vue.js and modern UI patterns.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">TypeScript</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Vuex</span>
                        <span class="px-3 py-1 bg-orange-600 text-white text-sm rounded-full">Element Plus</span>
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

            <!-- Real Estate Landing Page -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-red-500 transition-all hover:transform hover:scale-105" data-category="react ui-design">
                <div class="h-48 bg-gradient-to-br from-red-600 to-pink-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Real Estate Landing Page</h3>
                    <p class="text-gray-400 mb-4">Stunning property showcase website with interactive galleries, search filters, and immersive property viewing experience. Features parallax scrolling and smooth animations.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">React</span>
                        <span class="px-3 py-1 bg-red-600 text-white text-sm rounded-full">TypeScript</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Next.js</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full">Tailwind CSS</span>
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

            <!-- Creative Portfolio -->
            <div class="project-card bg-gray-800 rounded-xl overflow-hidden border border-gray-700 hover:border-green-500 transition-all hover:transform hover:scale-105" data-category="react ui-design">
                <div class="h-48 bg-gradient-to-br from-green-600 to-blue-600 flex items-center justify-center">
                    <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Creative Portfolio</h3>
                    <p class="text-gray-400 mb-4">Elegant, interactive portfolio showcasing frontend projects with smooth page transitions, creative layouts, and engaging user experience design.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-red-600 text-white text-sm rounded-full">React</span>
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-yellow-600 text-white text-sm rounded-full">Framer Motion</span>
                        <span class="px-3 py-1 bg-green-600 text-white text-sm rounded-full">Three.js</span>
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
<section class="py-20 bg-slate-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-white mb-4">Interested in Collaborating?</h2>
        <p class="text-xl text-slate-300 mb-8">
            I'm always excited to work on new projects and explore innovative solutions. Let's create something amazing together!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg">
                Get In Touch
            </a>
            <a href="https://github.com" class="border-2 border-slate-600 hover:border-blue-500 text-slate-300 hover:text-blue-400 px-8 py-3 rounded-lg font-semibold transition-all hover:bg-slate-700">
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
                btn.classList.remove('active', 'bg-blue-600', 'text-white', 'shadow-lg');
                btn.classList.add('bg-slate-700', 'text-slate-300');
            });
            this.classList.add('active', 'bg-blue-600', 'text-white', 'shadow-lg');
            this.classList.remove('bg-slate-700', 'text-slate-300');
            
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