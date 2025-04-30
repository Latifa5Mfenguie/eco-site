<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Écologiques</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
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

        body {
            background-color: var(--accent-color);
            color: var(--text-color);
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        /* Header styles */
        header {
            background-color: var(--white);
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }
        
        .logo {
            font-size: 24px;
            font-weight: 700;
            color: var(--primary-color);
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
        }
        
        .nav-links li {
            margin-left: 20px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: var(--text-color);
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover, 
        .nav-links a.active {
            color: var(--primary-color);
        }
        
        /* Hero section */
        .hero {
            background: linear-gradient(rgba(0, 0,0,0.5), rgba(0, 0, 0, 0.5)), url(images/j.jpg) no-repeat center/cover;
            background-size: cover;         /* L'image couvre tout l'écran */
            background-position: center;    /* L'image est centrée */
            height: 300px;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            color: white;
            padding: 0 50px;
        }
        
        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        /* News grid */
        .news-grid {
            padding: 50px 0;
        }
        
        .grid-title {
            margin-bottom: 30px;
            text-align: center;
            font-size: 32px;
            color: var(--primary-color);
        }
        
        .news-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -15px 30px;
        }
        
        .news-card {
            flex: 0 0 calc(33.33% - 30px);
            margin: 0 15px 30px;
            background-color: var(--white);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.15);
        }
        
        .news-image {
            height: 200px;
            overflow: hidden;
        }
        
        .news-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }
        
        .news-card:hover .news-image img {
            transform: scale(1.05);
        }
        
        .news-content {
            padding: 20px;
        }
        
        .news-meta {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }
        
        .news-date {
            background-color: var(--primary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            margin-right: 10px;
        }
        
        .news-author {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #666;
        }
        
        .news-author i {
            margin-right: 5px;
            color: var(--primary-color);
        }
        
        .news-title {
            font-size: 18px;
            font-weight: 600;
            line-height: 1.4;
            margin-bottom: 10px;
            color: var(--primary-color);
        }
        
        .news-excerpt {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 15px;
        }
        
        .read-more {
            display: flex;
            align-items: center;
            text-decoration: none;
            color: var(--primary-color);
            font-size: 14px;
            font-weight: 600;
            transition: color 0.3s;
        }
        
        .read-more i {
            margin-right: 5px;
            transition: transform 0.3s;
        }
        
        .read-more:hover {
            color: var(--secondary-color);
        }
        
        .read-more:hover i {
            transform: translateX(3px);
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
                    <li><a href="/guide">Mon Guide Eco</a></li>
                    <li><a href="/educ">Education</a></li>
                    <li><a href="/about">A propos</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </nav>
            <a href="#" class="btn btn-primary">S'inscrire</a>
            <div class="hamburger">
                <i class="fas fa-bars"></i>
            </div>
s    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1>Actualités</h1>
        </div>
    </section>

    <!-- News Grid Section -->
    <section class="news-grid">
        <div class="container">
            <h2 class="grid-title">Restez informé sur l'écologie et le recyclage</h2>
            
            <!-- News Row 1 -->
            <div class="news-row">
                <!-- News Card 1 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/300" alt="Femme avec écouteurs travaillant sur un ordinateur">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">20 Avr, 2025</span>
                            <span class="news-author"><i class="fas fa-user"></i> Par Admin</span>
                        </div>
                        <h3 class="news-title">Réduire la fracture numérique avec des solutions écologiques</h3>
                        <p class="news-excerpt">Découvrez comment les initiatives vertes réduisent la fracture numérique tout en préservant l'environnement.</p>
                        <a href="#" class="read-more">
                            <i class="fas fa-arrow-right"></i> LIRE PLUS
                        </a>
                    </div>
                </div>
                
                <!-- News Card 2 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/300" alt="Personnes se serrant la main dans un bureau">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">18 Avr, 2025</span>
                            <span class="news-author"><i class="fas fa-user"></i> Par Admin</span>
                        </div>
                        <h3 class="news-title">Partenariats durables pour une économie circulaire</h3>
                        <p class="news-excerpt">Les entreprises s'unissent pour créer des solutions innovantes de recyclage et réduire leur empreinte carbone.</p>
                        <a href="#" class="read-more">
                            <i class="fas fa-arrow-right"></i> LIRE PLUS
                        </a>
                    </div>
                </div>
                
                <!-- News Card 3 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/300" alt="Femme discutant avec une autre personne">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">15 Avr, 2025</span>
                            <span class="news-author"><i class="fas fa-user"></i> Par Admin</span>
                        </div>
                        <h3 class="news-title">Éducation environnementale : Former les citoyens de demain</h3>
                        <p class="news-excerpt">Nouvelles approches pédagogiques pour sensibiliser les jeunes aux enjeux écologiques et au recyclage.</p>
                        <a href="#" class="read-more">
                            <i class="fas fa-arrow-right"></i> LIRE PLUS
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- News Row 2 -->
            <div class="news-row">
                <!-- News Card 4 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/300" alt="Femme avec écouteurs travaillant sur un ordinateur">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">12 Avr, 2025</span>
                            <span class="news-author"><i class="fas fa-user"></i> Par Admin</span>
                        </div>
                        <h3 class="news-title">Technologies vertes : Innovations pour un futur durable</h3>
                        <p class="news-excerpt">Les dernières avancées technologiques qui révolutionnent notre approche de la protection environnementale.</p>
                        <a href="#" class="read-more">
                            <i class="fas fa-arrow-right"></i> LIRE PLUS
                        </a>
                    </div>
                </div>
                
                <!-- News Card 5 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/300" alt="Personnes se serrant la main dans un bureau">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">10 Avr, 2025</span>
                            <span class="news-author"><i class="fas fa-user"></i> Par Admin</span>
                        </div>
                        <h3 class="news-title">Zéro déchet : Mode de vie ou nécessité pour notre planète ?</h3>
                        <p class="news-excerpt">Analyse du mouvement zéro déchet et son impact concret sur la réduction de notre empreinte écologique.</p>
                        <a href="#" class="read-more">
                            <i class="fas fa-arrow-right"></i> LIRE PLUS
                        </a>
                    </div>
                </div>
                
                <!-- News Card 6 -->
                <div class="news-card">
                    <div class="news-image">
                        <img src="/api/placeholder/400/300" alt="Femme discutant avec une autre personne">
                    </div>
                    <div class="news-content">
                        <div class="news-meta">
                            <span class="news-date">8 Avr, 2025</span>
                            <span class="news-author"><i class="fas fa-user"></i> Par Admin</span>
                        </div>
                        <h3 class="news-title">Biodiversité urbaine : Quand les villes redeviennent sauvages</h3>
                        <p class="news-excerpt">Découvrez comment les initiatives de verdissement urbain favorisent le retour de la biodiversité.</p>
                        <a href="#" class="read-more">
                            <i class="fas fa-arrow-right"></i> LIRE PLUS
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

      <!-- Footer -->
      <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-col">
                    <h3>A propos de nous</h3>
                    <p>Echofy is dedicated to providing environmental solutions that ensure a sustainable future for our planet while promoting economic growth.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Lien Rapide</h3>
                    <ul class="nav-menu">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="/actu">Eco Actus</a></li>
                    <li><a href="/guide">Mon Guide Eco</a></li>
                    <li><a href="/educ">Education</a></li>
                    <li><a href="/about">A propos</a></li>
                    <li><a href="/contact">Contact</a></li>
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
                    <h3>Contactez Nous</h3>
                    <ul>
                        <li><i class="fas fa-map-marker-alt"></i> 123 Green St, Eco City</li>
                        <li><i class="fas fa-phone"></i> +237 659 00 00 90</li>
                        <li><i class="fas fa-envelope"></i> info@ecoresponsive.com</li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2025 Eco responsive. Tout droits reserver.</p>
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
    
        // JavaScript pour ajouter des fonctionnalités interactives si nécessaire
        document.addEventListener('DOMContentLoaded', function() {
            // Animation pour faire apparaître les cartes d'actualités
            const newsCards = document.querySelectorAll('.news-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, {
                threshold: 0.1
            });
            
            newsCards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>
