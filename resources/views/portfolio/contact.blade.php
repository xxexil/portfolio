@extends('layouts.portfolio')

@section('title', 'Contact - Renz Ivan Polancos')
@section('description', 'Get in touch with Renz Ivan Polancos for collaboration opportunities, project inquiries, or technical discussions.')

@section('content')
<!-- Hero Section -->
<section class="py-20 bg-slate-900">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold text-white mb-6">Let's Connect</h1>
            <p class="text-xl text-slate-400 max-w-3xl mx-auto">
                Ready to collaborate on your next project? I'd love to hear from you and discuss how we can work together.
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-16">
            <!-- Contact Information -->
            <div>
                <h2 class="text-3xl font-bold text-white mb-8">Get In Touch</h2>
                <p class="text-slate-400 mb-8">
                    Whether you have a project in mind, need technical consultation, or just want to connect, 
                    I'm always open to discussing new opportunities and innovative ideas.
                </p>
                
                <div class="space-y-6">
                    <!-- Email -->
                    <div class="flex items-center">
                        <div class="bg-blue-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Email</h3>
                            <a href="mailto:polancosivan@gmail.com" class="text-blue-400 hover:text-blue-300 transition-colors">
                                polancosivan@gmail.com
                            </a>
                        </div>
                    </div>
                    
                    <!-- Phone -->
                    <div class="flex items-center">
                        <div class="bg-green-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Phone</h3>
                            <a href="tel:+639381927446" class="text-green-400 hover:text-green-300 transition-colors">
                                +639381927446
                            </a>
                        </div>
                    </div>
                    
                    <!-- Location -->
                    <div class="flex items-center">
                        <div class="bg-purple-600 p-3 rounded-lg mr-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-white font-semibold">Location</h3>
                            <p class="text-purple-400">Digos City, Philippines</p>
                        </div>
                    </div>
                </div>
                
                <!-- Social Links -->
                <div class="mt-12">
                    <h3 class="text-white font-semibold mb-4">Connect With Me</h3>
                    <div class="flex space-x-4">
                        <a href="https://github.com" class="bg-gray-700 hover:bg-gray-600 p-3 rounded-lg transition-colors">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://linkedin.com" class="bg-gray-700 hover:bg-gray-600 p-3 rounded-lg transition-colors">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd" />
                            </svg>
                        </a>
                        <a href="https://twitter.com" class="bg-gray-700 hover:bg-gray-600 p-3 rounded-lg transition-colors">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-gray-900 p-8 rounded-xl border border-gray-700">
                <h3 class="text-2xl font-bold text-white mb-6">Send Me a Message</h3>
                <form id="contact-form" class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Name</label>
                            <input type="text" id="name" name="name" required 
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                   placeholder="Your Name">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email</label>
                            <input type="email" id="email" name="email" required 
                                   class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                                   placeholder="your.email@example.com">
                        </div>
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-gray-300 mb-2">Subject</label>
                        <input type="text" id="subject" name="subject" required 
                               class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors"
                               placeholder="Project Collaboration">
                    </div>
                    
                    <div>
                        <label for="project-type" class="block text-sm font-medium text-gray-300 mb-2">Project Type</label>
                        <select id="project-type" name="project-type" 
                                class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors">
                            <option value="">Select a project type</option>
                            <option value="frontend-development">Frontend Development</option>
                            <option value="ui-ux-design">UI/UX Design</option>
                            <option value="responsive-website">Responsive Website</option>
                            <option value="react-vue-app">React/Vue Application</option>
                            <option value="consultation">Technical Consultation</option>
                            <option value="collaboration">General Collaboration</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-300 mb-2">Message</label>
                        <textarea id="message" name="message" rows="6" required 
                                  class="w-full px-4 py-3 bg-gray-800 border border-gray-600 rounded-lg text-white placeholder-gray-400 focus:outline-none focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition-colors resize-none"
                                  placeholder="Tell me about your project or how I can help you..."></textarea>
                    </div>
                    
                    <button type="submit" 
                            class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-3 px-6 rounded-lg transition-colors focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 focus:ring-offset-gray-900">
                        Send Message
                    </button>
                </form>
                
                <!-- Success Message -->
                <div id="success-message" class="hidden mt-6 p-4 bg-green-600 text-white rounded-lg">
                    <div class="flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        Thank you for your message! I'll get back to you within 24 hours.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="py-20 bg-gray-900">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-white mb-4">Frequently Asked Questions</h2>
            <p class="text-xl text-gray-400">Common questions about working with me</p>
        </div>
        
        <div class="space-y-6">
            <div class="bg-gray-800 rounded-xl border border-gray-700">
                <button class="faq-button w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-white">What types of projects do you work on?</h3>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-gray-400">
                        I specialize in frontend development projects including responsive websites, user interface design, interactive web applications, 
                        and modern frontend solutions. I focus on creating beautiful, accessible, and performant user experiences.
                    </p>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl border border-gray-700">
                <button class="faq-button w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-white">What's your typical project timeline?</h3>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-gray-400">
                        Project timelines vary depending on complexity. Simple landing pages typically take 1-2 weeks, while 
                        complex interactive applications with custom animations can take 4-8 weeks. I always provide detailed timelines during 
                        the initial consultation phase.
                    </p>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl border border-gray-700">
                <button class="faq-button w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-white">Do you provide ongoing support?</h3>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-gray-400">
                        Yes! I offer ongoing support and maintenance for all projects. This includes bug fixes, updates, 
                        feature enhancements, and technical support. Support packages can be customized based on your needs.
                    </p>
                </div>
            </div>
            
            <div class="bg-gray-800 rounded-xl border border-gray-700">
                <button class="faq-button w-full text-left p-6 focus:outline-none" onclick="toggleFAQ(this)">
                    <div class="flex justify-between items-center">
                        <h3 class="text-lg font-semibold text-white">Can you work with existing teams?</h3>
                        <svg class="w-5 h-5 text-gray-400 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </div>
                </button>
                <div class="faq-content hidden px-6 pb-6">
                    <p class="text-gray-400">
                        Absolutely! I'm experienced in collaborative environments and can integrate seamlessly with existing 
                        development teams. I'm comfortable with various project management tools and development workflows.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
// Contact form handling
document.getElementById('contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Simulate form submission
    const submitButton = this.querySelector('button[type="submit"]');
    const originalText = submitButton.textContent;
    
    submitButton.textContent = 'Sending...';
    submitButton.disabled = true;
    
    setTimeout(() => {
        document.getElementById('success-message').classList.remove('hidden');
        this.reset();
        submitButton.textContent = originalText;
        submitButton.disabled = false;
        
        // Hide success message after 5 seconds
        setTimeout(() => {
            document.getElementById('success-message').classList.add('hidden');
        }, 5000);
    }, 1000);
});

// FAQ toggle functionality
function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('svg');
    
    if (content.classList.contains('hidden')) {
        content.classList.remove('hidden');
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.classList.add('hidden');
        icon.style.transform = 'rotate(0deg)';
    }
}
</script>
@endsection