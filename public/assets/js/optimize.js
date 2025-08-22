/**
 * Site Performance Optimization Script
 * This script implements various frontend performance optimizations
 */

document.addEventListener('DOMContentLoaded', function() {
    // Lazy load images
    lazyLoadImages();
    
    // Defer non-critical JavaScript
    deferNonCriticalJS();
    
    // Add intersection observer for animations
    setupIntersectionObserver();
});

/**
 * Lazy load images that are not in the viewport
 */
function lazyLoadImages() {
    // Check if browser supports Intersection Observer
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    const src = img.getAttribute('data-src');
                    
                    if (src) {
                        img.src = src;
                        img.removeAttribute('data-src');
                    }
                    
                    observer.unobserve(img);
                }
            });
        });
        
        // Target all images with data-src attribute
        document.querySelectorAll('img[data-src]').forEach(img => {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for browsers that don't support Intersection Observer
        document.querySelectorAll('img[data-src]').forEach(img => {
            img.src = img.getAttribute('data-src');
            img.removeAttribute('data-src');
        });
    }
}

/**
 * Defer loading of non-critical JavaScript
 */
function deferNonCriticalJS() {
    // Find scripts with data-defer attribute
    document.querySelectorAll('script[data-defer]').forEach(script => {
        const src = script.getAttribute('data-src');
        if (src) {
            setTimeout(() => {
                const newScript = document.createElement('script');
                newScript.src = src;
                document.body.appendChild(newScript);
            }, 2000); // Delay loading by 2 seconds
        }
    });
}

/**
 * Setup intersection observer for animations and other viewport-dependent features
 */
function setupIntersectionObserver() {
    if ('IntersectionObserver' in window) {
        const options = {
            root: null,
            rootMargin: '0px',
            threshold: 0.1
        };
        
        const observer = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const element = entry.target;
                    
                    // Add animation class when element enters viewport
                    if (element.classList.contains('animate-on-scroll')) {
                        element.classList.add('animated');
                    }
                    
                    // Load iframe content only when visible
                    if (element.tagName === 'IFRAME' && element.getAttribute('data-src')) {
                        element.src = element.getAttribute('data-src');
                        element.removeAttribute('data-src');
                    }
                    
                    observer.unobserve(element);
                }
            });
        }, options);
        
        // Observe elements that should animate on scroll
        document.querySelectorAll('.animate-on-scroll, iframe[data-src]').forEach(el => {
            observer.observe(el);
        });
    }
}

/**
 * Preload critical resources
 */
function preloadCriticalResources() {
    const resources = [
        // Add critical CSS/JS/font resources here
        '/assets/css/style.css',
        '/assets/js/main.js'
    ];
    
    resources.forEach(resource => {
        const link = document.createElement('link');
        link.rel = 'preload';
        link.href = resource;
        
        if (resource.endsWith('.css')) {
            link.as = 'style';
        } else if (resource.endsWith('.js')) {
            link.as = 'script';
        } else if (resource.endsWith('.woff2') || resource.endsWith('.woff')) {
            link.as = 'font';
            link.crossOrigin = 'anonymous';
        }
        
        document.head.appendChild(link);
    });
}

// Initialize preloading of critical resources
preloadCriticalResources();
