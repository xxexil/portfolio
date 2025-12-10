@extends('layouts.portfolio')

@section('title', 'Renz Ivan Polancos - Frontend Developer')
@section('description', 'IT Student specializing in frontend development. Creating beautiful, responsive user interfaces with modern web technologies.')

@section('content')
<!-- Hero Section -->
<section class="min-h-screen flex items-center justify-center bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-bold mb-6">
                <span class="text-white">Renz Ivan</span>
                <span class="text-blue-400">Polancos</span>
            </h1>
            <p class="text-xl md:text-2xl text-slate-300 mb-8 max-w-3xl mx-auto">
                IT Student specializing in <span class="text-blue-400 font-semibold">Frontend Development</span> 
                and <span class="text-cyan-400 font-semibold">User Interface Design</span>
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="/projects" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                    View My Work
                </a>
                <a href="/contact" class="border-2 border-slate-600 hover:border-blue-500 text-slate-300 hover:text-blue-400 px-8 py-3 rounded-lg font-semibold transition-all hover:bg-slate-800">
                    Get In Touch
                </a>
            </div>
        </div>
        
        <!-- Scroll indicator -->
        <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
            <svg class="w-6 h-6 text-slate-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
            </svg>
        </div>
    </div>
</section>

<!-- Skills Overview -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Frontend Expertise</h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                Crafting beautiful, responsive user interfaces and engaging digital experiences
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12">
            <!-- Frontend Development -->
            <div class="bg-slate-700 p-8 rounded-2xl border border-slate-600 hover:border-blue-500 transition-all shadow-lg hover:shadow-xl">
                <div class="flex items-center mb-6">
                    <div class="bg-blue-600 p-3 rounded-xl mr-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">Modern Frameworks</h3>
                </div>
                <p class="text-slate-300 mb-6">
                    Building dynamic, interactive applications with the latest frontend frameworks and libraries.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">React & Next.js Applications</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">Vue.js & Nuxt.js Development</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-indigo-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">JavaScript ES6+ & TypeScript</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-purple-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">State Management (Redux, Vuex)</span>
                    </div>
                </div>
            </div>
            
            <!-- UI/UX Design -->
            <div class="bg-slate-700 p-8 rounded-2xl border border-slate-600 hover:border-cyan-500 transition-all shadow-lg hover:shadow-xl">
                <div class="flex items-center mb-6">
                    <div class="bg-cyan-600 p-3 rounded-xl mr-4">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-white">UI/UX Design</h3>
                </div>
                <p class="text-slate-300 mb-6">
                    Creating beautiful, responsive designs with modern CSS frameworks and design systems.
                </p>
                <div class="space-y-3">
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-cyan-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">Tailwind CSS & Styled Components</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-teal-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">Responsive & Mobile-First Design</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-sky-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">Figma & Adobe XD Prototyping</span>
                    </div>
                    <div class="flex items-center">
                        <span class="w-2 h-2 bg-blue-400 rounded-full mr-3"></span>
                        <span class="text-slate-300">Animation & Micro-interactions</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Featured Projects</h2>
            <p class="text-xl text-slate-400 max-w-2xl mx-auto">
                A showcase of my latest frontend projects and user interface designs
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <!-- Project 1 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-blue-500 transition-all hover:transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="h-48 bg-slate-700 flex items-center justify-center">
                    <svg class="w-16 h-16 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">E-commerce Interface</h3>
                    <p class="text-slate-400 mb-4">Modern, responsive e-commerce frontend with smooth animations, product filtering, and intuitive checkout flow.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-blue-600 text-white text-sm rounded-full font-medium">React</span>
                        <span class="px-3 py-1 bg-cyan-600 text-white text-sm rounded-full font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full font-medium">Framer Motion</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 2 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-cyan-500 transition-all hover:transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="h-48 bg-slate-700 flex items-center justify-center">
                    <svg class="w-16 h-16 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Dashboard Interface</h3>
                    <p class="text-slate-400 mb-4">Clean, intuitive dashboard design with data visualization, drag-and-drop functionality, and responsive layout.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-emerald-600 text-white text-sm rounded-full font-medium">Vue.js</span>
                        <span class="px-3 py-1 bg-teal-600 text-white text-sm rounded-full font-medium">Chart.js</span>
                        <span class="px-3 py-1 bg-cyan-600 text-white text-sm rounded-full font-medium">SCSS</span>
                    </div>
                </div>
            </div>
            
            <!-- Project 3 -->
            <div class="bg-slate-800 rounded-2xl overflow-hidden border border-slate-700 hover:border-purple-500 transition-all hover:transform hover:scale-105 shadow-lg hover:shadow-xl">
                <div class="h-48 bg-slate-700 flex items-center justify-center">
                    <svg class="w-16 h-16 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-bold text-white mb-2">Portfolio Website</h3>
                    <p class="text-slate-400 mb-4">Elegant, responsive portfolio showcasing frontend projects with smooth animations and modern design principles.</p>
                    <div class="flex flex-wrap gap-2 mb-4">
                        <span class="px-3 py-1 bg-indigo-600 text-white text-sm rounded-full font-medium">Next.js</span>
                        <span class="px-3 py-1 bg-purple-600 text-white text-sm rounded-full font-medium">Tailwind CSS</span>
                        <span class="px-3 py-1 bg-violet-600 text-white text-sm rounded-full font-medium">TypeScript</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="/projects" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
                View All Projects
            </a>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="py-20 bg-slate-800">
    <div class="max-w-4xl mx-auto text-center px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold text-white mb-4">Ready to Collaborate?</h2>
        <p class="text-xl text-slate-300 mb-8">
            Let's create beautiful user experiences together. Whether it's a responsive website, interactive application, or modern interface, I'm excited to bring your vision to life.
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="/contact" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition-all transform hover:scale-105 shadow-lg">
                Start a Project
            </a>
            <a href="/about" class="border-2 border-slate-600 hover:border-blue-500 text-slate-300 hover:text-blue-400 px-8 py-3 rounded-lg font-semibold transition-all hover:bg-slate-700">
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