// Function to handle carousel auto-slide    11
let carouselIndex = 0;
const carouselItems = document.querySelectorAll('.carousel-item');

function showNextCarouselItem() {
    carouselItems[carouselIndex].classList.remove('active');
    carouselIndex = (carouselIndex + 1) % carouselItems.length;
    carouselItems[carouselIndex].classList.add('active');
}
// Automatically change carousel every 5 seconds
setInterval(showNextCarouselItem, 8000);


// info section  63

document.addEventListener('DOMContentLoaded', function() {
    // Scroll reveal functionality
    function revealOnScroll() {
        const reveals = document.querySelectorAll('.reveal');
        
        reveals.forEach(element => {
            const windowHeight = window.innerHeight;
            const elementTop = element.getBoundingClientRect().top;
            const elementVisible = 150;
            
            if (elementTop < windowHeight - elementVisible) {
                element.classList.add('active');
            }
        });
    }

    // Add reveal class to elements
    const paragraphs = document.querySelectorAll('.col-md-12 p');
    const header = document.querySelector('.header');
    
    paragraphs.forEach(p => p.classList.add('reveal'));
    header.classList.add('reveal');

    // Listen for scroll
    window.addEventListener('scroll', revealOnScroll);
    revealOnScroll(); // Initial check

    // Typing effect for header
    function typeWriter(element, text) {
        let i = 0;
        element.innerHTML = '';
        
        function type() {
            if (i < text.length) {
                element.innerHTML += text.charAt(i);
                i++;
                setTimeout(type, 100);
            }
        }
        type();
    }

    // Initialize typing effect
    const headerSpan = document.querySelector('.h');
    if (headerSpan) {
        typeWriter(headerSpan, 'about your interests....');
    }
});



// my cource  114
document.addEventListener('DOMContentLoaded', function() {
    // Add fade-in animation class to elements
    const elements = document.querySelectorAll('.business, .tech');
    elements.forEach(el => el.classList.add('fade-in'));

    // Trigger animations on scroll
    function checkFade() {
        elements.forEach(el => {
            const rect = el.getBoundingClientRect();
            const isVisible = rect.top <= window.innerHeight * 0.8;
            
            if (isVisible) {
                el.classList.add('active');
            }
        });
    }

    // Initial check and scroll listener
    checkFade();
    window.addEventListener('scroll', checkFade);
});

// Add this CSS for ripple effect
const style = document.createElement('style');
style.textContent = `
    .btn {
        position: relative;
        overflow: hidden;
    }

    .ripple {
        position: absolute;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.7);
        transform: scale(0);
        animation: ripple 0.6s linear;
        pointer-events: none;
    }

    @keyframes ripple {
        to {
            transform: scale(4);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);


// google search button  147
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.querySelector('.search-form');
    const searchInput = searchForm.querySelector('input[type="text"]');
    const submitButton = searchForm.querySelector('input[type="submit"]');

    // Modified submit handler
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault(); // Prevent default submission temporarily
        
        searchForm.classList.add('searching');
        submitButton.value = 'Searching...';
        
        // Simulate search and restore button state
        setTimeout(() => {
            searchForm.classList.remove('searching');
            submitButton.value = 'Search';
            
            // Actually submit the form
            window.open(`https://www.google.com/search?q=${encodeURIComponent(searchInput.value)}`, '_blank');
        }, 800);
    });

    // Add spacing fix
    const fixSpacing = () => {
        const searchContainer = document.querySelector('.search-container');
        searchContainer.style.marginBottom = '30px';
        searchContainer.style.marginTop = '30px';
    };

    fixSpacing();
});




// branch info 230

document.addEventListener('DOMContentLoaded', function() {
    // Add icons and enhance resource links
    function enhanceResources() {
        const resourceCards = document.querySelectorAll('.card#third');
        
        resourceCards.forEach(card => {
            const links = card.querySelectorAll('a');
            
            links.forEach(link => {
                // Add hover effect
                link.addEventListener('mouseenter', function() {
                    this.closest('li').style.transform = 'translateX(10px)';
                });
                
                link.addEventListener('mouseleave', function() {
                    this.closest('li').style.transform = 'translateX(0)';
                });

                // Add icons based on link type
                const href = link.href.toLowerCase();
                let icon = '';
                
                if (href.includes('youtube.com')) {
                    icon = '🎥';
                } else if (href.includes('course')) {
                    icon = '📚';
                } else {
                    icon = '🔗';
                }

                const title = link.querySelector('.card-title');
                title.innerHTML = `${icon} ${title.innerHTML}`;
            });
        });

        // Animate items on scroll
        const resourceItems = document.querySelectorAll('.card#third li');
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry, index) => {
                if (entry.isIntersecting) {
                    setTimeout(() => {
                        entry.target.classList.add('resource-item-animate');
                    }, index * 100);
                }
            });
        }, { threshold: 0.2 });

        resourceItems.forEach(item => observer.observe(item));
    }

    // Add loading animation for external links
    function handleResourceClicks() {
        const externalLinks = document.querySelectorAll('.card#third a[target="_blank"]');
        
        externalLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                const title = this.querySelector('.card-title');
                const originalText = title.innerHTML;
                
                // Show loading state
                title.innerHTML = '⌛ Loading...';
                
                // Restore original text after a delay
                setTimeout(() => {
                    title.innerHTML = originalText;
                }, 1000);
            });
        });
    }

    // Initialize all features
    enhanceResources();
    handleResourceClicks();
    addCopyLinkFeature();
});




// toggle branch info  339

document.addEventListener('DOMContentLoaded', function() {
    // Hide all sections initially
    const allSections = document.querySelectorAll('section[id]');
    allSections.forEach(section => section.style.display = 'none');

    // Function to handle button clicks
    function handleButtonClick(buttonId, sectionId) {
        const targetSection = document.getElementById(sectionId);
        const activeButton = document.querySelector('.btn.active');
        
        // Remove active class from previous button
        if (activeButton) {
            activeButton.classList.remove('active');
        }

        // Add active class to clicked button
        const clickedButton = document.getElementById(buttonId);
        clickedButton.classList.add('active');

        // Hide all sections
        allSections.forEach(section => {
            section.style.display = 'none';
            section.classList.remove('fade-in');
        });

        // Show and animate target section
        if (targetSection) {
            targetSection.style.display = 'block';
            // Trigger reflow for animation
            void targetSection.offsetWidth;
            targetSection.classList.add('fade-in');
            
            // Smooth scroll to section
            targetSection.scrollIntoView({ 
                behavior: 'smooth', 
                block: 'start'
            });
        }
    }

    // Add click handlers for hardware buttons
    const hardwareButtons = document.querySelectorAll('#course1 .btn');
    hardwareButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            handleButtonClick(button.id, (index + 1).toString());
        });
    });

    // Add click handlers for software buttons
    const softwareButtons = document.querySelectorAll('#course2 .btn');
    softwareButtons.forEach((button, index) => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            handleButtonClick(button.id, (index + 6).toString());
        });
    });

    // Add CSS for animations
    const style = document.createElement('style');
    style.textContent = `
        section[id] {
            opacity: 0;
            transform: translateY(20px);
            transition: opacity 0.5s ease, transform 0.5s ease;
        }
        
        section[id].fade-in {
            opacity: 1;
            transform: translateY(0);
        }

        .btn {
            transition: all 0.3s ease;
        }

        .btn.active {
            background-color: #3498db;
            color: white;
            transform: scale(1.05);
        }
    `;
    document.head.appendChild(style);

    // Optional: Add keyboard navigation
    document.addEventListener('keydown', (e) => {
        const activeButton = document.querySelector('.btn.active');
        if (!activeButton) return;

        const buttons = [...hardwareButtons, ...softwareButtons];
        const currentIndex = buttons.indexOf(activeButton);

        if (e.key === 'ArrowRight' || e.key === 'ArrowDown') {
            e.preventDefault();
            const nextButton = buttons[currentIndex + 1];
            if (nextButton) nextButton.click();
        } else if (e.key === 'ArrowLeft' || e.key === 'ArrowUp') {
            e.preventDefault();
            const prevButton = buttons[currentIndex - 1];
            if (prevButton) prevButton.click();
        }
    });
});




// avg Calculate 414


// Function to calculate the average skill value of hardware and software

function calculateAvg(skills, elementId) {
    let skillValues = skills.map(skill => parseFloat(localStorage.getItem(skill)) || 0);
    let total = skillValues.reduce((acc, val) => acc + val, 0);
    let average = ((total+5)*100) / ((skillValues.length-0.1)*100);
    localStorage.setItem('skillValues', JSON.stringify(skillValues));
    document.getElementById(elementId).innerText = average.toFixed(2);
}

function calculate_1_avg() {
    calculateAvg(['rustSkill', 'phpSkill', 'pythonSkill'], 'Skillofhardware1');
}

function calculate_2_avg() {
    calculateAvg(['rustSkill', 'swiftSkill', 'phpSkill', 'pythonSkill'], 'Skillofhardware2');
}

function calculate_3_avg() {
    calculateAvg(['haskellSkill', 'phpSkill'], 'Skillofhardware3');
}

function calculate_4_avg() {
    calculateAvg(['rustSkill', 'htmlCssSkill', 'phpSkill', 'pythonSkill', 'swiftSkill'], 'Skillofhardware4');

}function calculate_5_avg() {
    calculateAvg(['haskellSkill', 'phpSkill', 'swiftSkill'], 'Skillofhardware5');
}

function calculate_6_avg() {
    calculateAvg(['webDevSkill', 'nodeSkill', 'sqlSkill', 'pythonSkill', 'javaSkill', 'phpSkill'], 'Skillofsoftware1');
}

function calculate_7_avg() {
    calculateAvg(['javaSkill', 'rSkill', 'cppSkill', 'mlSkill'], 'Skillofsoftware2');
}

function calculate_8_avg() {
    calculateAvg(['sqlSkill', 'rSkill', 'pythonSkill', 'mlSkill', 'dataSkill', 'multiSkill'], 'Skillofsoftware3');
}

function calculate_9_avg() {
    calculateAvg(['sqlSkill', 'nosqlSkill', 'javaSkill', 'pythonSkill', 'csharpSkill'], 'Skillofsoftware4');
}

function calculate_10_avg() {
    calculateAvg(['csharpSkill', 'javaSkill', 'cppSkill', 'gameDevSkill'], 'Skillofsoftware5');
}

function calculate_11_avg() {
    calculateAvg(['javaSkill', 'pythonSkill', 'csharpSkill', 'mlSkill', 'multiSkill'], 'Skillofsoftware6');
}

function calculate_12_avg() {
    calculateAvg(['pythonSkill', 'rSkill', 'sqlSkill', 'mlSkill', 'dataSkill', 'multiSkill'], 'Skillofsoftware7');
}

function calculate_13_avg() {
    calculateAvg(['pythonSkill', 'cppSkill', 'mlSkill', 'cryptoSkill', 'scapySkill', 'multiSkill'], 'Skillofsoftware8');
}

function calculate_14_avg() {
    calculateAvg(['pythonSkill', 'mlSkill', 'rSkill', 'dataSkill'], 'Skillofsoftware9');
}

function calculate_15_avg() {
    calculateAvg(['dataSkill', 'mlSkill', 'pythonSkill', 'rSkill', 'multiSkill'], 'Skillofsoftware10');
}




// Show/Hide Back-to-Top Button    432
window.onscroll = function () {
    let btn = document.querySelector(".back-to-top");
    if (document.body.scrollTop > 300 || document.documentElement.scrollTop > 300) {
        btn.style.display = "block";
    } else {
        btn.style.display = "none";
    }
};

  // Scroll to Top Function
function scrollToTop() {
    window.scrollTo({ top: 0, behavior: "smooth" });
}


// while click contact in nav bar

document.addEventListener("DOMContentLoaded", function () {
    document.querySelector(".nav-link[href='#contact']").addEventListener("click", function (event) {
        event.preventDefault(); // Prevent default anchor behavior
        document.getElementById("contact").scrollIntoView({
            behavior: "smooth"
        });
    });
});