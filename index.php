<?php

include('config.php/connect.php');
if(isset($_POST['submit'])){
    extract($_POST);
    $sql = "INSERT INTO record(name, email, subject, message)VALUES('$name', '$email', '$subject', '$message')";
    $result = $conn->query($sql);
    header('Location: thanks.php');
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhib Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <style>
        /* CSS will go here - see below for full CSS */
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loader">
        <div class="loader-inner">
            <div class="loader-line-wrap">
                <div class="loader-line"></div>
            </div>
            <div class="loader-text">LOADING PORTFOLIO</div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="logo" data-text="MUHIB ULLAH KHAN">MUHIB ULLAH KHAN</div>
        <div class="nav-links">
            <a href="#home" class="nav-link">HOME</a>
            <a href="#about" class="nav-link">ABOUT</a>
            <a href="#skills" class="nav-link">SKILLS</a>
            <a href="#projects" class="nav-link">PROJECTS</a>
            <a href="#contact" class="nav-link">CONTACT</a>
        </div>
        <div class="hamburger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="hero-title">
                <span class="title-word title-word-1">CREATIVE</span>
                <span class="title-word title-word-2">DEVELOPER</span>
                <span class="title-word title-word-3">&</span>
                <span class="title-word title-word-4">DESIGNER</span>
            </h1>
            <p class="hero-subtitle">Building digital experiences that stand out</p>
            <div class="hero-btns">
                <a href="#projects" class="btn btn-primary">VIEW WORK</a>
                <a href="#contact" class="btn btn-secondary">CONTACT ME</a>
            </div>
        </div>
        <div class="hero-image">
            <div class="image-container">
                <img src="images/main.jpg" alt="Profile Image" class="profile-img">
                <div class="tech-circle"></div>
                <div class="tech-circle"></div>
                <div class="tech-circle"></div>
            </div>
        </div>
        <div class="scroll-down">
            <div class="mouse">
                <div class="wheel"></div>
            </div>
            <div class="arrows">
                <span class="arrow"></span>
                <span class="arrow"></span>
                <span class="arrow"></span>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="section-header">
            <h2>ABOUT <span>ME</span></h2>
            <div class="header-line"></div>
        </div>
        <div class="about-content">
            <div class="about-text">
                <h3>Who am I?</h3>
                <p>I'm a passionate developer and designer with a focus on creating immersive digital experiences. I combine technical skills with creative vision to build websites and applications that users love.</p>
                <div class="stats">
                    <div class="stat-item">
                        <div class="stat-number" data-count="50">0</div>
                        <div class="stat-text">PROJECTS</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="5">0</div>
                        <div class="stat-text">YEARS EXPERIENCE</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number" data-count="100">0</div>
                        <div class="stat-text">SATISFIED CLIENTS</div>
                    </div>
                </div>
            </div>
            <div class="about-image">
                <div class="hexagon">
                    <div class="hexagon-inner">
                        <img src="https://via.placeholder.com/300x300" alt="About Image">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills" class="skills">
        <div class="section-header">
            <h2>MY <span>SKILLS</span></h2>
            <div class="header-line"></div>
        </div>
        <div class="skills-container">
            <div class="skill-category">
                <h3>Development</h3>
                <div class="skill-item">
                    <div class="skill-name">HTML/CSS</div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="95"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">JavaScript</div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="90"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">React</div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="85"></div>
                    </div>
                </div>
            </div>
            <div class="skill-category">
                <h3>Design</h3>
                <div class="skill-item">
                    <div class="skill-name">UI/UX</div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="90"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">Photoshop</div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="80"></div>
                    </div>
                </div>
                <div class="skill-item">
                    <div class="skill-name">Figma</div>
                    <div class="skill-bar">
                        <div class="skill-progress" data-width="75"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="projects">
        <div class="section-header">
            <h2>MY <span>PROJECTS</span></h2>
            <div class="header-line"></div>
        </div>
        <div class="projects-container">
            <div class="project-card">
                <div class="project-image">
                    <img src="images/pizza back2.jpg" alt="Project 1">
                    <div class="project-overlay">
                        <h3>Shale Pizzas</h3>
                        <p>Pizza website for all humans!</p>
                        <a href="projects/Shale-Pizza/index.html" class="btn btn-primary">VIEW PROJECT</a>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/taxi.jpg" alt="Project 2">
                    <div class="project-overlay">
                        <h3>Travel website</h3>
                        <p>Taxi Go website for travelling ride book</p>
                        <a href="projects/TaxiGo/index (2).html" class="btn btn-primary">VIEW PROJECT</a>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-image">
                    <img src="images/school.jpg" alt="Project 3">
                    <div class="project-overlay">
                        <h3>School Website</h3>
                        <p>School info website for easy your searching</p>
                        <a href="projects/School-info/index.html" class="btn btn-primary">VIEW PROJECT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="section-header">
            <h2>GET IN <span>TOUCH</span></h2>
            <div class="header-line"></div>
        </div>
        <div class="contact-container">
            <div class="contact-info">
                <h3>Contact Information</h3>
                <div class="info-item">
                    <i class="fas fa-envelope"></i>
                    <span>muhibkhan6045@gmail.com</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-phone"></i>
                    <span>+92 324 6180144</span>
                </div>
                <div class="info-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Hyderabad Sindh, Pakistan</span>
                </div>
                <div class="social-links">
                    <a href="#"><i class="fab fa-github"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <form class="contact-form" method="post">
                <div class="form-group">
                    <input type="text" name="name" placeholder="Your Name" required>
                </div>
                <div class="form-group">
                    <input type="email" name="email" placeholder="Your Email" required>
                </div>
                <div class="form-group">
                    <input type="subject" name="subject" placeholder="Subject">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Your Message" required></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">SEND MESSAGE</button>
            </form>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="logo" data-text="MUHIB ULLAH KHAN">MUHIB ULLAH KHAN</div>
            <div class="footer-links">
                <a href="#home">Home</a>
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#projects">Projects</a>
                <a href="#contact">Contact</a>
            </div>
            <div class="footer-copy">
                &copy; 2025 MUHIB ULLAH KHAN Portfolio. All Rights Reserved.
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
    // Loader
    window.addEventListener('load', function() {
        const loader = document.querySelector('.loader');
        setTimeout(function() {
            loader.style.opacity = '0';
            setTimeout(function() {
                loader.style.display = 'none';
                
                // Animate hero content after loader
                animateHeroContent();
            }, 500);
        }, 1500);
    });

    // Navbar scroll effect
    window.addEventListener('scroll', function() {
        const navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
        
        // Animate sections on scroll
        animateOnScroll();
    });

    // Mobile menu toggle
    const hamburger = document.querySelector('.hamburger');
    const navLinks = document.querySelector('.nav-links');
    const navItems = document.querySelectorAll('.nav-link');
    
    hamburger.addEventListener('click', function() {
        navLinks.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
    
    navItems.forEach(item => {
        item.addEventListener('click', function() {
            navLinks.classList.remove('active');
            hamburger.classList.remove('active');
        });
    });

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);
            
            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });

    // Animate hero content
    function animateHeroContent() {
        const titleWords = document.querySelectorAll('.title-word');
        const subtitle = document.querySelector('.hero-subtitle');
        const buttons = document.querySelector('.hero-btns');
        const scrollDown = document.querySelector('.scroll-down');
        
        // Animate title words
        titleWords.forEach((word, index) => {
            setTimeout(() => {
                word.style.opacity = '1';
                word.style.transform = 'translateY(0)';
            }, 300 * index);
        });
        
        // Animate subtitle
        setTimeout(() => {
            subtitle.style.opacity = '1';
            subtitle.style.transform = 'translateY(0)';
        }, 1200);
        
        // Animate buttons
        setTimeout(() => {
            buttons.style.opacity = '1';
            buttons.style.transform = 'translateY(0)';
        }, 1500);
        
        // Animate scroll down
        setTimeout(() => {
            scrollDown.style.opacity = '1';
        }, 2000);
    }

    // Animate elements on scroll
    function animateOnScroll() {
        const sections = document.querySelectorAll('section');
        const windowHeight = window.innerHeight;
        const scrollPosition = window.scrollY;
        
        sections.forEach(section => {
            const sectionTop = section.offsetTop;
            const sectionHeight = section.offsetHeight;
            
            // Check if section is in viewport
            if (scrollPosition + windowHeight > sectionTop + 100 && 
                scrollPosition < sectionTop + sectionHeight - 100) {
                
                // Animate about section
                if (section.id === 'about') {
                    const statNumbers = document.querySelectorAll('.stat-number');
                    statNumbers.forEach(number => {
                        const target = parseInt(number.getAttribute('data-count'));
                        const duration = 2000;
                        const start = 0;
                        const increment = target / (duration / 16);
                        
                        let current = start;
                        const timer = setInterval(() => {
                            current += increment;
                            if (current >= target) {
                                clearInterval(timer);
                                current = target;
                            }
                            number.textContent = Math.floor(current);
                        }, 16);
                    });
                }
                
                // Animate skills section
                if (section.id === 'skills') {
                    const skillBars = document.querySelectorAll('.skill-progress');
                    skillBars.forEach(bar => {
                        const width = bar.getAttribute('data-width');
                        bar.style.width = width + '%';
                    });
                }
            }
        });
    }

    // Initialize animations
    animateOnScroll();
    
    // Form submission
    // const contactForm = document.querySelector('.contact-form');
    // if (contactForm) {
    //     contactForm.addEventListener('submit', function(e) {
    //         e.preventDefault();
            
    //         // Here you would typically send the form data to a server
    //         // For demo purposes, we'll just show an alert
    //         alert('Thank you for your message! I will get back to you soon.');
    //         this.reset();
    //     });
    // }
});
    </script>
</body>
</html>