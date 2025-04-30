<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eco_responsive</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <style>
        :root {
            --primary-color: #4CAF50;
            --secondary-color: #388E3C;
            --dark-color: #1B5E20;
            --light-color: #C8E6C9;
            --text-color: #333;
            --light-text: #FFF;
            --background-color: #F9F9F9;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--background-color);
            color: var(--text-color);
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        ul {
            list-style: none;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
        }

        .btn-primary {
            background-color: var(--primary-color);
            color: var(--light-text);
        }

        .btn-primary:hover {
            background-color: var(--secondary-color);
        }

        .btn-outline {
            background-color: transparent;
            color: var(--light-text);
            border: 1px solid var(--light-text);
        }

        .btn-outline:hover {
            background-color: var(--light-text);
            color: var(--dark-color);
        }

        /* Header */
        header {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 15px 0;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .logo {
            display: flex;
            align-items: center;
            color: var(--light-text);
            font-size: 24px;
            font-weight: 700;
        }

        .logo i {
            color: var(--primary-color);
            margin-right: 8px;
        }

        .nav-menu {
            display: flex;
            align-items: center;
        }

        .nav-menu li {
            margin: 0 15px;
        }

        .nav-menu a {
            color: var(--light-text);
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .nav-menu a:hover {
            color: var(--primary-color);
        }

        .hamburger {
            display: none;
            font-size: 24px;
            color: var(--light-text);
            cursor: pointer;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 0,0,0.5), rgba(0, 0, 0, 0.5)), url(images/j.jpg) no-repeat center/cover;
            background-size: cover;         /* L'image couvre tout l'écran */
            background-position: center;    /* L'image est centrée */
            background-repeat: no-repeat;
            height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: var(--light-text);
            padding: 0 20px;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            line-height: 1.2;
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            max-width: 700px;
        }

        .hero-buttons {
            display: flex;
            gap: 15px;
        }

        /* Categories Section */
        .categories {
            padding: 20px 0;
            background-color: var(--primary-color);
            color: var(--light-text);
        }

        .categories-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 15px;
        }

        .category {
            padding: 5px 15px;
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .category i {
            margin-right: 5px;
        }

        /* Features Section */
        .features {
            padding: 80px 0;
        }

        .features-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .features-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .feature-icon {
            width: 40px;
            height: 40px;
            background-color: var(--light-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: var(--primary-color);
        }

        .feature-info h3 {
            margin-bottom: 10px;
            color: var(--dark-color);
        }

        .feature-img img {
            border-radius: 8px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Services Section */
        .services {
            padding: 80px 0;
            background-color: #f5f5f5;
        }

        .section-header {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-header h2 {
            font-size: 2.2rem;
            color: var(--dark-color);
            margin-bottom: 15px;
        }

        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .service-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0,9, 0.05);
            transition: transform 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-10px);
        }

        .service-icon {
            width: 50px;
            height: 50px;
            background-color: var(--primary-color);
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            margin-bottom: 15px;
            color: white;
            font-size: 1.2rem;
        }

        .service-content {
            padding: 20px;
        }

        .service-content h3 {
            margin-bottom: 15px;
            color: var(--dark-color);
        }

        .service-img {
            height: 200px;
            overflow: hidden;
        }

        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .pagination-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ddd;
            cursor: pointer;
        }

        .pagination-dot.active {
            background-color: var(--primary-color);
        }

        /* Stats Section */
        .stats {
            padding: 80px 0;
        }

        .stats-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .stats-text h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--dark-color);
        }

        .stats-badges {
            display: flex;
            gap: 15px;
            margin-bottom: 30px;
        }

        .badge {
            background-color: var(--light-color);
            color: var(--dark-color);
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            display: flex;
            align-items: center;
        }

        .badge i {
            margin-right: 5px;
            color: var(--primary-color);
        }

        .progress-item {
            margin-bottom: 20px;
        }

        .progress-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .progress-bar {
            height: 8px;
            background-color: #e9e9e9;
            border-radius: 4px;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            background-color: var(--primary-color);
            border-radius: 4px;
        }

        .stats-img {
            position: relative;
        }

        .stats-img img {
            border-radius: 50%;
            width: 100%;
            max-width: 400px;
            display: block;
            margin: 0 auto;
        }

        .stats-badge {
            position: absolute;
            top: 0;
            right: 20%;
            background-color: var(--primary-color);
            color: white;
            padding: 10px;
            border-radius: 50%;
            width: 80px;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            font-weight: bold;
            font-size: 0.9rem;
        }

        /* Footer */
        footer {
            background-color: var(--dark-color);
            color: var(--light-text);
            padding: 50px 0 20px;
        }

        .footer-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }

        .footer-col h3 {
            font-size: 1.2rem;
            margin-bottom: 20px;
            position: relative;
        }

        .footer-col h3::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-col ul li {
            margin-bottom: 10px;
        }

        .footer-col ul li a:hover {
            color: var(--primary-color);
        }

        .social-links {
            display: flex;
            gap: 15px;
        }

        .social-links a {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .social-links a:hover {
            background-color: var(--primary-color);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 992px) {
            .features-container,
            .stats-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .feature-item {
                justify-content: center;
            }

            .feature-img,
            .stats-img {
                margin-top: 40px;
            }
        }

        @media (max-width: 768px) {
            .nav-menu {
                position: fixed;
                top: 70px;
                left: -100%;
                width: 100%;
                background-color: rgba(0, 0, 0, 0.9);
                flex-direction: column;
                padding: 20px 0;
                transition: all 0.3s ease;
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                margin: 15px 0;
            }

            .hamburger {
                display: block;
            }

            .hero h1 {
                font-size: 2.2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .hero-buttons {
                flex-direction: column;
            }

            .features-container,
            .stats-container {
                text-align: center;
            }

            .feature-item {
                flex-direction: column;
                align-items: center;
            }

            .feature-icon {
                margin-right: 0;
                margin-bottom: 10px;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .services-container {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .hero h1 {
                font-size: 1.8rem;
            }

            .categories-container {
                flex-direction: column;
                align-items: center;
            }

            .category {
                width: 80%;
                justify-content: center;
            }

            .footer-container {
                grid-template-columns: 1fr;
                text-align: center;
            }

            .footer-col h3::after {
                left: 50%;
                transform: translateX(-50%);
            }

            .social-links {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <a href="#" class="logo">
                <span><span style="color: rgba(40, 150, 50, 50); font-weight: bold; font-size: 40px">Eco</span> Responsive</span>
                <i class="fas fa-leaf"></i>
                
            </a>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="/actu">Eco Actus</a></li>
                    <li><a href="#">Mon Guide Eco</a></li>
                    <li><a href="#">Education</a></li>
                    <li><a href="#">A propos</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
            <a href="#" class="btn btn-primary">S'inscrire</a>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
s    </header>

    <!-- Hero Section -->

    <section class="hero">
       
        <h1>Apprenez, Agissez, Changez Le Monde!</h1>
        <p>"Apprenez les gestes écoresponsables et l’importance du recyclage pour préserver notre planète. Informez-vous, adoptez de nouvelles habitudes et réduisez votre impact environnemental dès aujourd’hui !"</p>
        <div class="hero-buttons">
            <a href="#" class="btn btn-primary">Commencer Mon Parcours</a>
            <a href="#" class="btn btn-outline">En Savoir plus</a>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="categories">
        <div class="container categories-container">
            <div class="category">
                <i class="fas fa-recycle"></i>
                Recyclage
            </div>
            <div class="category">
                <i class="fas fa-tree"></i>
                Environnement
            </div>
            <div class="category">
                <i class="fas fa-solar-panel"></i>
                Solution
            </div>
            <div class="category">
                <i class="fas fa-water"></i>
                Education
            </div>
            <div class="category">
                <i class="fas fa-leaf"></i>
                Ecologie
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container features-container">
            <div class="feature-img">
                <img src="/images/etudiants-ramassent-ordures-dans-parc_274689-50763.jpg" alt="Environmental Sustainable">
            </div>
            <div class="features-text">
                <h2>Sensibiliser, informer et accompagner chacun vers un mode de vie plus respectueux de l’environnement.</h2>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                    <div class="feature-info">
                        <h3>Economic Benefits</h3>
                        <p>Our sustainable approach provides economic advantages while protecting environmental resources.</p>
                    </div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="feature-info">
                        <h3>Safe Environment</h3>
                        <p>Creating a safe and healthy environment for current and future generations.</p>
                    </div>
                </div>
                <a href="#" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <div class="section-header">
                <h2>Echofy Provide Environment Best Leading Services</h2>
            </div>
            <div class="services-container">
                <div class="service-card">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-recycle"></i>
                        </div>
                        <h3>Daily Recycling</h3>
                        <p>Efficient and responsible daily recycling services for homes and businesses.</p>
                    </div>
                    <div class="service-img">
                        <img src="/api/placeholder/400/300" alt="Daily Recycling">
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3>Safe Environment</h3>
                        <p>Creating and maintaining safe environmental conditions for sustainable living.</p>
                    </div>
                    <div class="service-img">
                        <img src="/api/placeholder/400/300" alt="Safe Environment">
                    </div>
                </div>
                <div class="service-card">
                    <div class="service-content">
                        <div class="service-icon">
                            <i class="fas fa-water"></i>
                        </div>
                        <h3>Cleaning Ocean</h3>
                        <p>Dedicated projects to clean and protect our oceans from pollution and waste.</p>
                    </div>
                    <div class="service-img">
                        <img src="/api/placeholder/400/300" alt="Cleaning Ocean">
                    </div>
                </div>
            </div>
            <div class="pagination">
                <div class="pagination-dot active"></div>
                <div class="pagination-dot"></div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container stats-container">
            <div class="stats-text">
                <h2>Getting A Greener Future Safe Environment</h2>
                <div class="stats-badges">
                    <div class="badge">
                        <i class="fas fa-shield-alt"></i>
                        Safe Environment
                    </div>
                    <div class="badge">
                        <i class="fas fa-recycle"></i>
                        Active Recycling
                    </div>
                </div>
                <div class="progress-item">
                    <div class="progress-info">
                        <span>Green Energy</span>
                        <span>75%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 75%;"></div>
                    </div>
                </div>
                <div class="progress-item">
                    <div class="progress-info">
                        <span>Clean Process</span>
                        <span>85%</span>
                    </div>
                    <div class="progress-bar">
                        <div class="progress" style="width: 85%;"></div>
                    </div>
                </div>
            </div>
            <div class="stats-img">
                <img src="/api/placeholder/500/500" alt="Plant in hands">
                <div class="stats-badge">PLAN+ ACTION</div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>About Us</h3>
                    <p>Echofy is dedicated to providing environmental solutions that ensure a sustainable future for our planet while promoting economic growth.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Projects</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="#">Daily Recycling</a></li>
                        <li><a href="#">Safe Environment</a></li>
                        <li><a href="#">Ocean Cleaning</a></li>
                        <li><a href="#">Renewable Energy</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Green St, Eco City</li>
                        <li><i class="fas fa-phone"></i> +1 234 567 8901</li>
                        <li><i class="fas fa-envelope"></i> info@echofy.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Echofy. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const hamburger = document.querySelector('.hamburger');
        const navMenu = document.querySelector('.nav-menu');

        hamburger.addEventListener('click', () => {
            navMenu.classList.toggle('active');
        });

        // Close menu when clicking on a nav item
        document.querySelectorAll('.nav-menu a').forEach(item => {
            item.addEventListener('click', () => {
                navMenu.classList.remove('active');
            });
        });

        // Pagination functionality
        const dots = document.querySelectorAll('.pagination-dot');
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                dots.forEach(d => d.classList.remove('active'));
                dot.classList.add('active');
                // Here you would typically add code to change the visible services
            });
        });
    </script>
</body>
</html>