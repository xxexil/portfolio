@extends('layouts.portfolio')

@section('title', 'About - Renz Ivan Polancos')
@section('description', 'Learn more about Renz Ivan Polancos, an IT student passionate about frontend development and user interface design.')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-white mb-6">About Me</h1>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Passionate IT student focused on creating beautiful user interfaces and engaging digital experiences
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Profile Image -->
            <div class="order-2 lg:order-1">
                <div class="bg-slate-700 rounded-2xl p-8 text-center border border-slate-600 shadow-lg">
                    <div class="w-48 h-48 mx-auto mb-6 overflow-hidden rounded-full border-4 border-blue-400">
                        <img src="{{ asset('images/profile-photo.jpg') }}" 
                             alt="Renz Ivan Polancos - Profile Photo" 
                             class="w-full h-full object-cover transform scale-200"
                             style="object-position: center 15%;"
                             onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                        <!-- Fallback SVG if image fails to load -->
                        <div class="w-full h-full bg-slate-600 rounded-full flex items-center justify-center" style="display: none;">
                            <svg class="w-24 h-24 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                            </svg>
                        </div>
                    </div>
                    <h3 class="text-2xl font-bold text-white mb-2">Renz Ivan Polancos</h3>
                    <p class="text-blue-400 font-medium">IT Student & Frontend Developer</p>
                </div>
            </div>
            
            <!-- About Content -->
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl font-bold text-white mb-6">My Journey</h2>
                <div class="space-y-6 text-slate-300">
                    <p>
                        I'm a dedicated IT student with a deep passion for frontend development and user interface design. My journey began with creating my first website as a teenager, fascinated by how design and code come together to create beautiful, interactive experiences.
                    </p>
                    <p>
                        Currently pursuing my degree in Information Technology, I've developed expertise in modern frontend technologies and design principles. I specialize in creating responsive, accessible user interfaces that provide exceptional user experiences across all devices.
                    </p>
                    <p>
                        What drives me is the intersection of design and technology. I believe in crafting interfaces that are not only visually appealing but also intuitive, performant, and accessible to all users. Every pixel matters in creating memorable digital experiences.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Technologies -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Skills & Technologies</h2>
            <p class="text-xl text-slate-400">Tools and technologies I work with</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Frontend Skills -->
            <div class="bg-slate-700 p-6 rounded-xl border border-slate-600">
                <div class="bg-blue-600 p-3 rounded-lg w-fit mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Frontend</h3>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li>• HTML5 & CSS3</li>
                    <li>• JavaScript (ES6+) & TypeScript</li>
                    <li>• React & Vue.js</li>
                    <li>• Tailwind CSS & Bootstrap</li>
                    <li>• Responsive Design</li>
                    <li>• UI/UX Principles</li>
                </ul>
            </div>
            
            <!-- Design Skills -->
            <div class="bg-slate-700 p-6 rounded-xl border border-slate-600">
                <div class="bg-cyan-600 p-3 rounded-lg w-fit mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Design & UX</h3>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li>• Figma & Adobe XD</li>
                    <li>• UI/UX Design Principles</li>
                    <li>• Wireframing & Prototyping</li>
                    <li>• Design Systems</li>
                    <li>• Accessibility (WCAG)</li>
                    <li>• User Research & Testing</li>
                </ul>
            </div>
            
            <!-- Tools & DevOps -->
            <div class="bg-slate-700 p-6 rounded-xl border border-slate-600">
                <div class="bg-purple-600 p-3 rounded-lg w-fit mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-white mb-3">Tools & Workflow</h3>
                <ul class="space-y-2 text-slate-300 text-sm">
                    <li>• Git & Version Control</li>
                    <li>• VS Code & WebStorm</li>
                    <li>• Webpack & Vite</li>
                    <li>• npm & Yarn</li>
                    <li>• Chrome DevTools</li>
                    <li>• Lighthouse & Performance</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Education & Experience -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Education -->
            <div>
                <h2 class="text-3xl font-bold text-white mb-8">Education</h2>
                <div class="space-y-6">
                
                    
                    <div class="bg-slate-700 p-6 rounded-xl border border-slate-600 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-white">Web Development Certification</h3>
                                <p class="text-slate-300">Online Learning Platform</p>
                            </div>
                            <span class="text-slate-400 text-sm">2024</span>
                        </div>
                        <p class="text-slate-300 mb-4">
                            Comprehensive frontend development program covering modern frameworks, 
                            responsive design, and UI/UX best practices.
                        </p>
                        
                        <!-- Certificate Image -->
                        <div class="mt-4 p-4 bg-slate-600 rounded-lg border border-slate-500">
                            <div class="aspect-[4/3] bg-slate-800 rounded border-2 border-dashed border-slate-400 flex items-center justify-center overflow-hidden cursor-pointer hover:bg-slate-700 transition-colors" onclick="openCertificateModal()">
                                <img src="{{ asset('images/web-dev-certificate.jpg') }}" 
                                     alt="Web Development Certification" 
                                     class="w-full h-full object-contain hover:scale-105 transition-transform"
                                     onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';">
                                <!-- Fallback placeholder -->
                                <div class="flex flex-col items-center justify-center text-slate-400" style="display: none;">
                                    <svg class="w-12 h-12 mb-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                    <p class="text-sm text-center">Certificate Image<br><span class="text-xs">Add: web-dev-certificate.jpg</span></p>
                                </div>
                            </div>
                            <p class="text-xs text-slate-400 mt-2 text-center">Click to view full size</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Experience -->
            <div>
                <h2 class="text-3xl font-bold text-white mb-8">Experience</h2>
                <div class="space-y-6">
                    <div class="bg-slate-700 p-6 rounded-xl border border-slate-600 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-white">Freelance Frontend Developer</h3>
                                <p class="text-slate-300">Self-Employed</p>
                            </div>
                            <span class="text-slate-400 text-sm">2023 - Present</span>
                        </div>
                        <p class="text-slate-300">
                            Creating custom user interfaces and responsive websites for small businesses and startups. 
                            Specializing in modern frontend frameworks and user experience design.
                        </p>
                    </div>
                    
                    <div class="bg-slate-700 p-6 rounded-xl border border-slate-600 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-white">Junior Developer Intern</h3>
                                <p class="text-slate-300">Local Tech Company</p>
                            </div>
                            <span class="text-slate-400 text-sm">Summer 2023</span>
                        </div>
                        <p class="text-slate-300">
                            Developed responsive user interfaces using Vue.js and React, collaborated on design systems, 
                            and contributed to frontend optimization and user experience improvements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interests & Hobbies -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Beyond Code</h2>
            <p class="text-xl text-slate-400">What I do when I'm not building things</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-600 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Innovation</h3>
                <p class="text-slate-300">Always exploring new technologies and brainstorming creative solutions to everyday problems.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-cyan-600 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Learning</h3>
                <p class="text-slate-300">Constantly reading tech blogs, watching tutorials, and staying updated with the latest industry trends.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-purple-600 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-white mb-2">Community</h3>
                <p class="text-slate-300">Active in tech communities, participating in hackathons, and mentoring fellow students.</p>
            </div>
        </div>
    </div>
</section>

<!-- Certificate Modal -->
<div id="certificateModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center z-50 hidden">
    <div class="relative max-w-4xl max-h-[90vh] p-6 bg-slate-800 rounded-xl border-4 border-blue-400 shadow-2xl">
        <!-- Close button -->
        <button onclick="closeCertificateModal()" class="absolute top-4 right-4 bg-red-600 hover:bg-red-700 text-white rounded-full w-10 h-10 flex items-center justify-center z-10 transition-colors border-2 border-white shadow-lg">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
        </button>
        
        <!-- Certificate image -->
        <img src="{{ asset('images/web-dev-certificate.jpg') }}" 
             alt="Web Development Certification - Full Size" 
             class="max-w-full max-h-full object-contain rounded-lg shadow-xl border border-slate-600"
             onclick="event.stopPropagation();">
    </div>
</div>

<script>
function openCertificateModal() {
    document.getElementById('certificateModal').classList.remove('hidden');
    document.body.style.overflow = 'hidden'; // Prevent background scrolling
}

function closeCertificateModal() {
    document.getElementById('certificateModal').classList.add('hidden');
    document.body.style.overflow = 'auto'; // Restore scrolling
}

// Close modal when clicking outside the image
document.getElementById('certificateModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeCertificateModal();
    }
});

// Close modal with Escape key
document.addEventListener('keydown', function(e) {
    if (e.key === 'Escape') {
        closeCertificateModal();
    }
});
</script>

@endsection