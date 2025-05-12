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


        document.addEventListener('DOMContentLoaded', function() {
            // Toggle sidebar on mobile
            const sidebar = document.getElementById('sidebar');
            const openSidebarBtn = document.getElementById('openSidebar');
            const closeSidebarBtn = document.getElementById('closeSidebar');
            
            openSidebarBtn.addEventListener('click', function() {
              sidebar.classList.remove('-translate-x-full');
            });
            
            closeSidebarBtn.addEventListener('click', function() {
              sidebar.classList.add('-translate-x-full');
            });
            
            // User menu dropdown
            const userMenuButton = document.getElementById('userMenuButton');
            const userMenu = document.getElementById('userMenu');
            
            userMenuButton.addEventListener('click', function() {
              userMenu.classList.toggle('hidden');
            });
            
            // Close user menu when clicking outside
            document.addEventListener('click', function(event) {
              if (!userMenuButton.contains(event.target) && !userMenu.contains(event.target)) {
                userMenu.classList.add('hidden');
              }
            });
            
            // Navigation between sections
            const navLinks = document.querySelectorAll('nav a');
            const sections = document.querySelectorAll('main > section');
            
            navLinks.forEach(link => {
              link.addEventListener('click', function(e) {
                e.preventDefault();
                
                // Remove active class from all links
                navLinks.forEach(navLink => {
                  navLink.classList.remove('bg-primary-50', 'text-primary-700');
                  navLink.classList.add('text-gray-700', 'hover:bg-gray-100');
                });
                
                // Add active class to clicked link
                this.classList.remove('text-gray-700', 'hover:bg-gray-100');
                this.classList.add('bg-primary-50', 'text-primary-700');
                
                // Hide all sections
                sections.forEach(section => {
                  section.classList.add('hidden');
                });
                
                // Show the target section
                const targetId = this.getAttribute('href').substring(1);
                document.getElementById(targetId).classList.remove('hidden');
                
                // Close sidebar on mobile after navigation
                if (window.innerWidth < 768) {
                  sidebar.classList.add('-translate-x-full');
                }
              });
            });
            
            // Initialize charts (if you want to add charts)
            // This is a placeholder for chart initialization
            // You would need to add Chart.js or another charting library
            function initCharts() {
              // Add chart initialization code here
              console.log('Charts initialized');
            }
            
            // Call chart initialization
            // initCharts();
            
            // Example of data filtering (for demonstration)
            const filterButtons = document.querySelectorAll('.btn-outline');
            
            filterButtons.forEach(button => {
              button.addEventListener('click', function() {
                // Remove active class from all filter buttons in the same group
                const parentElement = this.parentElement;
                parentElement.querySelectorAll('.btn-outline').forEach(btn => {
                  btn.classList.remove('bg-primary-50', 'text-primary-700', 'border-primary-200');
                });
                
                // Add active class to clicked button
                this.classList.add('bg-primary-50', 'text-primary-700', 'border-primary-200');
                
                // Here you would typically filter data based on the selected filter
                console.log('Filter applied:', this.textContent.trim());
              });
            });
          });