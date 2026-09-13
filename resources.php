<?php
$page_title = "Resources";
/** @var array $site_config */
require_once 'includes/header.php'; 
require_once 'components/ui-page-header.php';
$base = $site_config['base_url'];

render_page_header("Resources", "Access our official publications, guides, and helpful video content.");
?>

<section class="py-16 bg-gray-50 min-h-screen">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <!-- Publications Section -->
        <div class="mb-20">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8 border-b border-gray-200 pb-4">Publications & Handbooks</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                
                <!-- Document Card -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 p-8 flex flex-col group relative overflow-hidden">
                    <div class="w-16 h-16 bg-primary/10 text-primary rounded-xl flex items-center justify-center mb-6 transition-colors duration-300 group-hover:bg-primary group-hover:text-white">
                        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path></svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3">Official Magazine</h3>
                    <p class="text-gray-600 mb-8 flex-grow">Read our official annual magazine featuring success stories and insights.</p>
                    <a href="#" class="btn btn-secondary !text-primary !border-primary hover:!bg-primary hover:!text-white w-full">
                        Download PDF
                    </a>
                </div>

            </div>
        </div>

        <!-- Video Library Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-extrabold text-gray-900 mb-8 border-b border-gray-200 pb-4">Video Library</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Video Card -->
                <div class="bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 overflow-hidden group cursor-pointer flex flex-col" onclick="openVideoModal('HIXv_gzDivI')">
                    <div class="relative w-full aspect-video bg-gray-900 overflow-hidden">
                        <img src="https://img.youtube.com/vi/HIXv_gzDivI/maxresdefault.jpg" class="w-full h-full object-cover opacity-90 group-hover:opacity-100 group-hover:scale-105 transition-transform duration-700">
                        <div class="absolute inset-0 flex items-center justify-center">
                            <div class="w-16 h-16 bg-red-600/90 text-white rounded-full flex items-center justify-center backdrop-blur-sm shadow-lg group-hover:bg-red-600 group-hover:scale-110 transition-transform">
                                <svg class="w-7 h-7 ml-1" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                            </div>
                        </div>
                    </div>
                    <div class="p-6 flex flex-col flex-grow">
                        <h3 class="text-lg font-bold text-gray-900 mb-3 group-hover:text-primary transition-colors">Video Title Goes Here</h3>
                        <p class="text-sm text-gray-600">A brief description of what this video is about and why students should watch it.</p>
                    </div>
                </div>
            </div>
            
            <div class="mt-12 text-center">
                <a href="<?php echo $site_config['socials']['youtube']; ?>" target="_blank" class="btn btn-secondary !text-red-600 !border-red-600 hover:!bg-red-600 hover:!text-white">
                    View More on YouTube 
                </a>
            </div>
        </div>

    </div>
</section>

<!-- Video Modal UI Component -->
<div id="video-modal" class="fixed inset-0 z-[9999] bg-black/95 hidden flex justify-center items-center opacity-0 transition-opacity duration-300 backdrop-blur-md">
    <button onclick="closeVideoModal()" class="absolute top-6 right-8 text-white text-5xl hover:text-red-500 transition-colors focus:outline-none z-50">&times;</button>
    <div id="video-container" class="w-full max-w-5xl px-4 md:px-8 mx-auto transform scale-95 transition-transform duration-300">
        <div class="relative w-full overflow-hidden rounded-2xl shadow-2xl bg-black" style="padding-top: 56.25%;">
            <iframe id="youtube-iframe" class="absolute top-0 left-0 w-full h-full" src="" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<script>
    const videoModal = document.getElementById('video-modal');
    const ytIframe = document.getElementById('youtube-iframe');
    const videoContainer = document.getElementById('video-container');

    function openVideoModal(videoId) {
        ytIframe.src = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
        videoModal.classList.remove('hidden');
        setTimeout(() => {
            videoModal.classList.remove('opacity-0');
            videoContainer.classList.remove('scale-95');
            videoContainer.classList.add('scale-100');
        }, 10);
    }

    function closeVideoModal() {
        videoModal.classList.add('opacity-0');
        videoContainer.classList.remove('scale-100');
        videoContainer.classList.add('scale-95');
        setTimeout(() => {
            videoModal.classList.add('hidden');
            ytIframe.src = ''; 
        }, 300);
    }
</script>

<?php require_once 'includes/footer.php'; ?>