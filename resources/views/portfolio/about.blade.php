@extends('layouts.portfolio')

@section('title', 'About - Alex Chen')
@section('description', 'Learn more about Alex Chen, an IT student passionate about web development and software engineering.')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">About Me</h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Passionate IT student focused on creating modern web applications and digital solutions
            </p>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16 items-center">
            <!-- Profile Image Placeholder -->
            <div class="order-2 lg:order-1">
                <div class="bg-white rounded-2xl p-8 text-center border border-gray-200 shadow-sm">
                    <div class="w-48 h-48 mx-auto bg-gray-100 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-24 h-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-2">Alex Chen</h3>
                    <p class="text-gray-600">IT Student & Web Developer</p>
                </div>
            </div>
            
            <!-- About Content -->
            <div class="order-1 lg:order-2">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">My Journey</h2>
                <div class="space-y-6 text-gray-600">
                    <p>
                        I'm a dedicated IT student with a deep passion for web development and software engineering. My journey began with creating my first website as a teenager, fascinated by how code transforms into interactive digital experiences that people can use and enjoy.
                    </p>
                    <p>
                        Currently pursuing my degree in Information Technology, I've developed a comprehensive skill set in modern web technologies. I specialize in full-stack development, creating everything from responsive frontend interfaces to robust backend systems and APIs.
                    </p>
                    <p>
                        What drives me is the power of clean, efficient code to solve real-world problems. I believe in creating web applications that not only function flawlessly but also provide exceptional user experiences through thoughtful design and intuitive interfaces.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills & Technologies -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Skills & Technologies</h2>
            <p class="text-xl text-gray-600">Tools and technologies I work with</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Frontend Skills -->
            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                <div class="bg-gray-900 p-3 rounded-lg w-fit mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Frontend</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>• HTML5 & CSS3</li>
                    <li>• JavaScript (ES6+) & TypeScript</li>
                    <li>• React & Vue.js</li>
                    <li>• Tailwind CSS & Bootstrap</li>
                    <li>• Responsive Design</li>
                    <li>• UI/UX Principles</li>
                </ul>
            </div>
            
            <!-- Backend Skills -->
            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                <div class="bg-gray-700 p-3 rounded-lg w-fit mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Backend</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>• PHP & Laravel</li>
                    <li>• Node.js & Express</li>
                    <li>• Python & Django</li>
                    <li>• MySQL & PostgreSQL</li>
                    <li>• RESTful APIs & GraphQL</li>
                    <li>• Authentication & Security</li>
                </ul>
            </div>
            
            <!-- Tools & DevOps -->
            <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
                <div class="bg-gray-600 p-3 rounded-lg w-fit mb-4">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-bold text-gray-900 mb-3">Tools & DevOps</h3>
                <ul class="space-y-2 text-gray-600 text-sm">
                    <li>• Git & Version Control</li>
                    <li>• VS Code & IDEs</li>
                    <li>• Docker & Containerization</li>
                    <li>• Linux/Windows</li>
                    <li>• Figma & Design Tools</li>
                    <li>• Postman & API Testing</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Education & Experience -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Education -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Education</h2>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Bachelor of Information Technology</h3>
                                <p class="text-gray-600">Tech University</p>
                            </div>
                            <span class="text-gray-500 text-sm">2022 - 2026</span>
                        </div>
                        <p class="text-gray-600">
                            Specializing in Software Development with a focus on web technologies, 
                            database systems, and modern programming practices. Maintaining a 3.8 GPA.
                        </p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Web Development Certification</h3>
                                <p class="text-gray-600">Online Learning Platform</p>
                            </div>
                            <span class="text-gray-500 text-sm">2023</span>
                        </div>
                        <p class="text-gray-600">
                            Comprehensive full-stack web development program covering modern frameworks, 
                            responsive design, and best practices in web development.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Experience -->
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-8">Experience</h2>
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Freelance Web Developer</h3>
                                <p class="text-gray-600">Self-Employed</p>
                            </div>
                            <span class="text-gray-500 text-sm">2023 - Present</span>
                        </div>
                        <p class="text-gray-600">
                            Developing custom websites and web applications for small businesses and startups. 
                            Specializing in responsive design and modern web technologies.
                        </p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Web Development Tutor</h3>
                                <p class="text-gray-600">Tech University</p>
                            </div>
                            <span class="text-gray-500 text-sm">2023 - Present</span>
                        </div>
                        <p class="text-gray-600">
                            Tutoring students in web development fundamentals, helping with coding assignments, 
                            and conducting workshops on modern web frameworks and best practices.
                        </p>
                    </div>
                    
                    <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
                        <div class="flex items-start justify-between mb-4">
                            <div>
                                <h3 class="text-xl font-bold text-gray-900">Junior Developer Intern</h3>
                                <p class="text-gray-600">Local Tech Company</p>
                            </div>
                            <span class="text-gray-500 text-sm">Summer 2023</span>
                        </div>
                        <p class="text-gray-600">
                            Developed web applications using Laravel and Vue.js, collaborated on API development, 
                            and contributed to frontend optimization and user experience improvements.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Interests & Hobbies -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Beyond Code</h2>
            <p class="text-xl text-gray-600">What I do when I'm not building things</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-gray-900 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Innovation</h3>
                <p class="text-gray-600">Always exploring new technologies and brainstorming creative solutions to everyday problems.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gray-700 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Learning</h3>
                <p class="text-gray-600">Constantly reading tech blogs, watching tutorials, and staying updated with the latest industry trends.</p>
            </div>
            
            <div class="text-center">
                <div class="bg-gray-600 p-4 rounded-full w-16 h-16 mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path>
                    </svg>
                </div>
                <h3 class="text-xl font-bold text-gray-900 mb-2">Community</h3>
                <p class="text-gray-600">Active in tech communities, participating in hackathons, and mentoring fellow students.</p>
            </div>
        </div>
    </div>
</section>
@endsection