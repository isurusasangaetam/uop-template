<?php
$page_title = "Our Services";
/** @var array $site_config */

require_once 'includes/header.php'; 
require_once 'components/ui-page-header.php';
$base = $site_config['base_url'];

render_page_header("Our Services", "Comprehensive programs, training, and support systems designed for your success.");
?>

<style>
    html { scroll-behavior: smooth; }
</style>

<section class="py-12 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row gap-10">
        
        <!-- Sticky Sidebar Navigation -->
        <aside class="w-full md:w-1/4 lg:w-1/5 shrink-0 z-10">
            <div class="md:sticky md:top-32 bg-white rounded-xl shadow-sm border border-gray-100 p-4">
                <h3 class="text-sm font-bold text-gray-400 uppercase tracking-wider mb-4 px-2">Jump to Service</h3>
                <nav id="sidebar-nav" class="flex flex-row md:flex-col gap-2 overflow-x-auto md:overflow-visible pb-2 md:pb-0 scrollbar-hide">
                    <a href="#service-1" class="nav-link whitespace-nowrap md:whitespace-normal block px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors border-l-4 border-transparent hover:border-primary">Core Program</a>
                    <a href="#service-2" class="nav-link whitespace-nowrap md:whitespace-normal block px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors border-l-4 border-transparent hover:border-primary">Workshops & Training</a>
                    <a href="#service-3" class="nav-link whitespace-nowrap md:whitespace-normal block px-4 py-2 text-sm font-semibold text-gray-600 hover:bg-primary/10 hover:text-primary rounded-lg transition-colors border-l-4 border-transparent hover:border-primary">Consulting</a>
                </nav>
            </div>
        </aside>

        <!-- Services Content Area -->
        <div class="w-full md:w-3/4 lg:w-4/5 space-y-20">

            <!-- Service 1: Complex Layout with Table -->
            <div id="service-1" class="service-section scroll-mt-32">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-primary text-white rounded-lg flex items-center justify-center shadow-md shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Core Program / Course</h2>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <p class="text-gray-600 leading-relaxed mb-6">
                        Provide a detailed overview of your main program, course, or service here. Explain who it is for and what the main objectives are.
                    </p>

                    <h4 class="text-lg font-bold text-gray-900 mb-4">Program Structure</h4>
                    <div class="overflow-x-auto rounded-lg border border-gray-200 shadow-sm mb-6">
                        <table class="w-full text-left text-sm text-gray-600">
                            <thead class="bg-gray-100 text-gray-700 uppercase font-semibold text-xs">
                                <tr>
                                    <th scope="col" class="px-4 py-3 border-b">No</th>
                                    <th scope="col" class="px-4 py-3 border-b">Module / Topic</th>
                                    <th scope="col" class="px-4 py-3 border-b text-center">Duration</th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-3 font-medium text-gray-900">01</td>
                                    <td class="px-4 py-3">Introduction and Basics</td>
                                    <td class="px-4 py-3 text-center">2 Weeks</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition">
                                    <td class="px-4 py-3 font-medium text-gray-900">02</td>
                                    <td class="px-4 py-3">Advanced Concepts</td>
                                    <td class="px-4 py-3 text-center">4 Weeks</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="bg-secondary/10 rounded-lg p-4 flex flex-col sm:flex-row items-center justify-between border border-secondary/30">
                        <div>
                            <p class="font-bold text-gray-900 text-sm">Need more details?</p>
                            <p class="text-sm text-gray-600 mt-1">Email us at: <?php echo $site_config['contact']['email']; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 2: Grid/List Layout -->
            <div id="service-2" class="service-section scroll-mt-32 pt-6 border-t border-gray-200">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-secondary text-white rounded-lg flex items-center justify-center shadow-md shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 002-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Workshops & Training</h2>
                </div>
                
                <p class="text-gray-600 leading-relaxed mb-6">
                    Use this section to highlight continuous training sessions, seminars, or recurring events. Outline the main themes covered during these sessions.
                </p>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8">
                    <h4 class="text-lg font-bold text-gray-900 mb-6 border-b border-gray-100 pb-2">Training Themes</h4>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-y-4 gap-x-8">
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 text-sm md:text-base">Skill Development</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <svg class="w-5 h-5 text-primary mt-0.5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            <span class="text-gray-700 text-sm md:text-base">Professional Grooming</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Service 3: Action-Oriented Layout -->
            <div id="service-3" class="service-section scroll-mt-32 pt-6 border-t border-gray-200">
                <div class="flex items-center gap-4 mb-6">
                    <div class="w-12 h-12 bg-primary text-white rounded-lg flex items-center justify-center shadow-md shrink-0">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900">Consulting & Support</h2>
                </div>
                
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 md:p-8 flex flex-col md:flex-row gap-8 items-center border-l-4 border-l-secondary">
                    <div class="flex-grow">
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Describe personalized services such as 1-on-1 coaching, student support, or technical consulting here. 
                        </p>
                        <a href="<?php echo $base; ?>/index.php#contact" class="btn btn-primary mt-4">
                            Contact Us
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Scroll Spy Script for Sidebar -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const sections = document.querySelectorAll(".service-section");
        const navLinks = document.querySelectorAll("#sidebar-nav .nav-link");

        const observerOptions = {
            root: null,
            rootMargin: '-150px 0px -40% 0px',
            threshold: 0
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const id = entry.target.getAttribute("id");
                    
                    navLinks.forEach(link => {
                        link.classList.remove("bg-primary/10", "text-primary", "border-primary");
                        link.classList.add("text-gray-600", "border-transparent");
                        
                        if (link.getAttribute("href") === `#${id}`) {
                            link.classList.remove("text-gray-600", "border-transparent");
                            link.classList.add("bg-primary/10", "text-primary", "border-primary");
                        }
                    });
                }
            });
        }, observerOptions);

        sections.forEach(section => {
            observer.observe(section);
        });
    });
</script>

<?php require_once 'includes/footer.php'; ?>