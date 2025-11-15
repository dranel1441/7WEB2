<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvador Lenard - Portfolio</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Custom CSS */
        :root {
            --primary-color: #0d6efd;
            --secondary-color: #6c757d;
            --dark-color: #212529;
            --light-color: #f8f9fa;
        }
        
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 70px;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }
        
        section {
            padding: 80px 0;
        }
        
        .hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/placeholder.svg?height=1080&width=1920');
            background-size: cover;
            background-position: center;
            color: white;
            height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .hero-content {
            max-width: 800px;
        }
        
        .hero h1 {
            font-size: 3.5rem;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 40px;
            padding-bottom: 20px;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
        }
        
        .timeline {
            position: relative;
            padding-left: 30px;
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
            padding-bottom: 30px;
            border-left: 2px solid var(--primary-color);
            padding-left: 20px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -10px;
            top: 0;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background-color: var(--primary-color);
        }
        
        .timeline-item:last-child {
            border-left: 2px solid transparent;
        }
        
        .skill-item {
            margin-bottom: 20px;
        }
        
        .skill-name {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .project-card {
            margin-bottom: 30px;
            transition: transform 0.3s ease;
            height: 100%;
        }
        
        .project-card:hover {
            transform: translateY(-5px);
        }
        
        .project-img {
            height: 200px;
            object-fit: cover;
        }
        
        .contact-info {
            margin-bottom: 30px;
        }
        
        .social-links {
            margin-top: 20px;
        }
        
        .social-links a {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--dark-color);
            transform: translateY(-3px);
        }
        
        footer {
            background-color: var(--dark-color);
            color: white;
            padding: 20px 0;
            text-align: center;
        }
        
        .profile-img {
            width: 500px;
            height: 500px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid white;
        }
        
        .btn-custom {
            padding: 10px 25px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-custom:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .form-control:focus {
            box-shadow: none;
            border-color: var(--primary-color);
        }
        
        .invalid-feedback {
            display: none;
        }
        
        .was-validated .form-control:invalid ~ .invalid-feedback {
            display: block;
        }

        /* Navigation hover effect */
        .hover-nav-link {
            position: relative;
            display: inline-block;
        }

        .hover-nav-link::after,
        .hover-nav-link::before {
            content: "";
            position: absolute;
            width: 100%;
            height: 2px;
            background: linear-gradient(to right, #ff0000, #00ffff);
            bottom: 0;
            left: 0;
            transform: scaleX(0);
            transform-origin: right;
            transition: transform 0.4s ease-out;
        }

        .hover-nav-link::before {
            top: 0;
            transform-origin: left;
        }

        .hover-nav-link:hover::after,
        .hover-nav-link:hover::before {
            transform: scaleX(1);
        }

        /* Social icons styling */
        .social-container {
            display: flex;
            justify-content: flex-start;
            margin-top: 20px;
        }

        .social-icons {
            display: flex;
            padding: 0;
            margin: 0;
        }

        .social-icons li {
            list-style: none;
            margin-right: 20px;
        }

        .social-icons li a {
            width: 60px;
            height: 60px;
            background-color: #fff;
            text-align: center;
            line-height: 60px;
            font-size: 24px;
            margin: 0 10px;
            display: block;
            border-radius: 50%;
            position: relative;
            overflow: hidden;
            border: 3px solid #fff;
            z-index: 1;
        }

        .social-icons li a .icon {
            position: relative;
            color: #262626;
            transition: .5s;
            z-index: 3;
        }

        .social-icons li a:hover .icon {
            color: #fff;
            transform: rotateY(360deg);
        }

        .social-icons li a:before {
            content: "";
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            height: 100%;
            background: #f00;
            transition: .5s;
            z-index: 2;
        }

        .social-icons li a:hover:before {
            top: 0;
        }

        .social-icons li:nth-child(1) a:before {
            background: #333; /* GitHub */
        }

        .social-icons li:nth-child(2) a:before {
            background: #0077b5; /* LinkedIn */
        }

        .social-icons li:nth-child(3) a:before {
            background: #1da1f2; /* Twitter */
        }

        .social-icons li:nth-child(4) a:before {
            background: #e1306c; /* Instagram */
        }
    </style>
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#home">My Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link hover-nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-nav-link" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-nav-link" href="#projects">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link hover-nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="hero-content">
                        <h1>Hi, I'm <span class="text-primary">Salvador Lenard </span></h1>
                        <p class="lead">Bachelor of Science in Computer Science Student</p>
                        <p>I design and develop experiences that make people's lives simpler through Web and Mobile apps. I work with HTML, CSS, JavaScript, React and more.</p>
                        <a href="#contact" class="btn btn-primary btn-lg btn-custom">Get In Touch</a>
                    </div>
                </div>
                <div class="col-md-6 text-center">
                    <img src="SalvadorLP.jpg" alt="Profile Photo" class="profile-img img-fluid">
                </div>
            </div>
        </div>
    </section>

    <!-- About/Achievements Section -->
    <section id="about" class="bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h2 class="section-title">About Me</h2>
                    <p>I am a passionate Computer Science student with a focus on web development and software engineering. I am committed to coding and learning more each day, challenging myself to learn and adapt to new things.</p>
                    <p>Currently pursuing my Bachelor's degree in Computer Science at City Collage of Angeles, I am constantly learning and improving my skills to stay updated with the latest technologies and industry trends.</p>
                    <p>Outside of coding, I enjoy walking/running, reading manhwa, watch movies and spend time with family. I believe in continuous learning and giving back to the community through open-source contributions.</p>
                </div>
                <div class="col-lg-6">
                    <h2 class="section-title">Education & Achievements</h2>
                    <div class="timeline">
                        <div class="timeline-item">
                            <h4>Bachelor of Science in Computer Science</h4>
                            <p class="text-muted">City Collage of Angles (2022 - Present)</p>
                            <p>Currently a Deans Lister and focusing on programming</p>
                        </div>
                        <div class="timeline-item">
                            <h4>Graduated at STI Angeles</h4>
                            <p class="text-muted">Computer and Communication Technology(2020-2022)</p>
                            <p>Graduated at a Tech School</p>
                        </div>
                        <div class="timeline-item">
                            <h4>Graduated in Rafael L. Lazatin Memorial High school</h4>
                            <p class="text-muted">2017-2021</p>
                            <p>High school education with focus on academics</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section id="skills">
        <div class="container">
            <h2 class="section-title text-center">My Skills</h2>
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-4">Technical Skills</h3>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>HTML/CSS</span>
                            <span>95%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>JavaScript</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Java</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>C++</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Python</span>
                            <span>70%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <h3 class="mb-4">Soft Skills</h3>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Problem Solving</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Teamwork</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Communication</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Time Management</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    
                    <div class="skill-item">
                        <div class="skill-name d-flex justify-content-between">
                            <span>Adaptability</span>
                            <span>85%</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Projects Section -->
    <section id="projects" class="bg-light">
        <div class="container">
            <h2 class="section-title text-center">My Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100">
                        <img src="Home Page.png" class="card-img-top project-img" alt="Project 1">
                        <div class="card-body">
                            <h5 class="card-title">Meal Planning/Recipe Application</h5>
                            <p class="card-text">An Android Appllication that Plan a meal for the user and have a recipe they can follow for a healthy lifestyle </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Live Demo</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">GitHub</a>
                                </div>
                                <small class="text-muted">Android Studio, Java</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100">
                        <img src="Taskmanagement.png" class="card-img-top project-img" alt="Project 2">
                        <div class="card-body">
                            <h5 class="card-title">Task Management Webapp</h5>
                            <p class="card-text">A productivity web application that helps users organize tasks with features like drag-and-drop, priority setting, and deadline notifications.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Live Demo</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">GitHub</a>
                                </div>
                                <small class="text-muted">JavaScript, CSS</small>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card project-card h-100">
                        <img src="Salvador_brandingboard.png" class="card-img-top project-img" alt="Project 3">
                        <div class="card-body">
                            <h5 class="card-title">DL Clothing Branding Dashboard</h5>
                            <p class="card-text">A Branding board for our prototype Product. </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="#" class="btn btn-sm btn-outline-primary">Live Demo</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">GitHub</a>
                                </div>
                                <small class="text-muted">Photoshop</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <h2 class="section-title text-center">Get In Touch</h2>
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-info">
                        <h3>Contact Information</h3>
                        <p><i class="fas fa-envelope me-2"></i> slenard23-0026@cca.edu.ph</p>
                        <p><i class="fas fa-phone me-2"></i> (63) 993-3114-3728</p>
                        <p><i class="fas fa-map-marker-alt me-2"></i> Mexico, Pampanga</p>
                        
                        <div class="social-container">
                            <ul class="social-icons">
                                <li>
                                    <a href="#">
                                        <i class="fab fa-github icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-twitter icon"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fab fa-instagram icon"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <form id="contactForm" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Your Name" required>
                            <div class="invalid-feedback">
                                Please enter your name.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Your Email" required>
                            <div class="invalid-feedback">
                                Please enter a valid email address.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subject</label>
                            <input type="text" class="form-control" id="subject" placeholder="Subject" required>
                            <div class="invalid-feedback">
                                Please enter a subject.
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your Message" required></textarea>
                            <div class="invalid-feedback">
                                Please enter your message.
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-custom">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <p>&copy; 2023 My Portfolio. All Rights Reserved.</p>
        </div>
    </footer>

    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript -->
    <script>
        // Form validation
        (function() {
            'use strict';
            
            // Fetch all forms that need validation
            const forms = document.querySelectorAll('.needs-validation');
            
            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    } else {
                        event.preventDefault();
                        // Here you would typically send the form data to a server
                        alert('Form submitted successfully! In a real application, this would be sent to a server.');
                        form.reset();
                    }
                    
                    form.classList.add('was-validated');
                }, false);
            });
            
            // Smooth scrolling for navigation links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    
                    if (targetElement) {
                        window.scrollTo({
                            top: targetElement.offsetTop - 60,
                            behavior: 'smooth'
                        });
                        
                        // Close mobile menu if open
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse.classList.contains('show')) {
                            navbarCollapse.classList.remove('show');
                        }
                    }
                });
            });
            
            // Active navigation link based on scroll position
            window.addEventListener('scroll', () => {
                const sections = document.querySelectorAll('section');
                const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
                
                let current = '';
                
                sections.forEach(section => {
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.clientHeight;
                    
                    if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
                        current = section.getAttribute('id');
                    }
                });
                
                navLinks.forEach(link => {
                    link.classList.remove('active');
                    if (link.getAttribute('href') === `#${current}`) {
                        link.classList.add('active');
                    }
                });
            });
        })();
    </script>
</body>
</html>
Portfolio.html
Displaying Portfolio.html.