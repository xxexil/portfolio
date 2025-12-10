@extends('layouts.portfolio')

@section('title', 'Alex Chen - Web Developer & Software Engineer')
@section('description', 'IT Student specializing in web development and software engineering. Creating modern digital experiences with clean code.')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span class="text-gray-900">Alex</span>
                <span class="text-gray-600">Chen</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-600 mb-8 max-w-3xl mx-auto">
                IT Student specializing in <span class="text-gray-900 font-semibold">Web Development</span> 
                and <span class="text-gray-700 font-semibold">Software Engineering</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="/projects" class="bg-gray-900 hover:bg-gray-800 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                    View My Work
                </a>
                <a href="/contact" class="border border-gray-300 hover:border-gray-400 text-gray-900 px-8 py-3 rounded-lg font-semibold transition-colors">
                    Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- Skills Overview -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Technical Expertise</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                Creating modern web applications and digital experiences with clean, efficient code
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Frontend Development -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors shadow-sm">
                <div class="flex items-center mb-6">
                    <div class="bg-gray-900 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Frontend Development</h3>
                </div>
                <p class="text-gray-600 mb-6">
                    Building responsive, interactive user interfaces with modern frameworks and best practices.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">React & Vue.js Applications</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">Responsive Design & CSS Frameworks</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">JavaScript ES6+ & TypeScript</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">UI/UX Design & Prototyping</span>
                    </div>
                </div>
            </div>
            
            <!-- Backend Development -->
            <div class="bg-white p-8 rounded-xl border border-gray-200 hover:border-gray-300 transition-colors shadow-sm">
                <div class="flex items-center mb-6">
                    <div class="bg-gray-700 p-3 rounded-lg mr-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Backend Development</h3>
                </div>
                <p class="text-gray-600 mb-6">
                    Developing robust server-side applications, APIs, and database solutions for scalable web systems.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">Laravel & PHP Development</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">Node.js & Express.js</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">Database Design & Management</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-gray-400 rounded-full mr-3"></span>
                        <span class="text-gray-700">RESTful APIs & Authentication</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
            <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                A showcase of my latest web development projects and software solutions
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-gray-300 transition-all hover:transform hover:scale-105 shadow-sm">
                <div class="h-48 bg-gray-100 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">E-commerce Platform</h3>
                    <p class="text-gray-600 mb-4">Full-stack e-commerce solution with payment integration, inventory management, and admin dashboard.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">Vue.js</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">MySQL</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-gray-300 transition-all hover:transform hover:scale-105 shadow-sm">
                <div class="h-48 bg-gray-100 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Task Management App</h3>
                    <p class="text-gray-600 mb-4">Collaborative project management tool with real-time updates, team features, and progress tracking.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">React</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">Node.js</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">Socket.io</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="bg-white rounded-xl overflow-hidden border border-gray-200 hover:border-gray-300 transition-all hover:transform hover:scale-105 shadow-sm">
                <div class="h-48 bg-gray-100 flex items-center justify-center">
                    <svg class="w-16 h-16 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-gray-900 mb-2">Portfolio Website</h3>
                    <p class="text-gray-600 mb-4">Modern, responsive portfolio built with Laravel and Tailwind CSS showcasing web development projects.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">Laravel</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-gray-200 text-gray-700 text-sm rounded-full">JavaScript</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/projects" class="bg-gray-900 hover:bg-gray-800 text-white px-8 py-3 rounded-lg font-semibold transition-colors">
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-gray-900">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-white mb-4">Ready to Collaborate?</h2>
        <p class="text-xl text-gray-300 mb-8">
            Let's build something amazing together. Whether it's a web application, API, or digital solution, I'm excited to take on new challenges.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-white text-gray-900 px-8 py-3 rounded-lg font-semibold hover:bg-gray-100 transition-colors">
                Start a Project
            </a>
            <a href="/about" class="border border-gray-300 text-white px-8 py-3 rounded-lg font-semibold hover:bg-white hover:text-gray-900 transition-colors">
                Learn More About Me
            </a>
        </div>
    </div>
</section>

<style>
@keyframes fade-in {
    from {
        opacity: 0;
        transform: translateY(30px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.animate-fade-in {
    animation: fade-in 1s ease-out;
}
</style>
@endsection