import './bootstrap';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
document.addEventListener("DOMContentLoaded", () => {
    const videoContainer = document.getElementById("videoContainer");
    if (!videoContainer) return;

    const videoSrc = videoContainer.getAttribute("data-src");

    const observer = new IntersectionObserver(
        (entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    videoContainer.innerHTML = `
                        <iframe 
                            class="w-full h-full"
                            src="${videoSrc}" 
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen
                            referrerpolicy="strict-origin-when-cross-origin"
                        ></iframe>`;
                    
                    observer.unobserve(videoContainer);
                }
            });
        },
        { threshold: 0.5 }
    );

    observer.observe(videoContainer);
});

    document.addEventListener('DOMContentLoaded', function () {
        const toggle = document.getElementById('profileToggle');
        const dropdown = document.getElementById('profileDropdown');
        const wrapper = document.getElementById('profileDropdownWrapper');

        // Toggle dropdown on click
        toggle.addEventListener('click', function (e) {
            e.preventDefault();
            dropdown.classList.toggle('hidden');
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function (e) {
            if (!wrapper.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
        });
    });


  
    
        document.addEventListener('DOMContentLoaded', function() {
            const playButton = document.getElementById('playVideo');
            const videoContainer = document.getElementById('videoContainer');
            
            if (playButton && videoContainer) {
                playButton.addEventListener('click', function() {
                    const videoSrc = videoContainer.getAttribute('data-src');
                    videoContainer.innerHTML = `<iframe src="${videoSrc}" class="w-full h-full" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>`;
                    playButton.style.display = 'none';
                });
            }
        });

        const toggleButton = document.querySelector('.fixed button');
        const chatBox = document.getElementById('chatBox');
      
        toggleButton.addEventListener('click', () => {
          chatBox.classList.toggle('hidden');
        });
