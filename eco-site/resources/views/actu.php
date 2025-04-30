<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Écologiques</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3b8e3b;
            --secondary-color: #70b570;
            --accent-color: #f5f5f5;
            --text-color: #333;
            --light-green: #e8f5e8;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
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
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        
        .footer-section {
            flex: 0 0 calc(25% - 30px);
            margin-right: 30px;
            margin-bottom: 30px;
        }
        
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--white);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive */
        @media screen and (max-width: 992px) {
            .news-card {
                flex: 0 0 calc(50% - 30px);
            }
            
            .footer-section {
                flex: 0 0 calc(50% - 30px);
            }
        }
        
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 15px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .news-card {
                flex: 0 0 calc(100% - 30px);
            }
        }
        
        @media screen and (max-width: 576px) {
            .footer-section {
                flex: 0 0 100%;
                margin-right: 0;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 5px 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">ÉcoRecyclage</a>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#" class="active">Actualités</a></li>
                    <li><a href="#">Recycler</a></li>
                    <li><a href="#">Conseils</a></li>
                    <li><a href="#">Événements</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

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

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>À propos</h3>
                    <p>ÉcoRecyclage est une plateforme dédiée à l'écologie, au recyclage et à la protection de l'environnement. Notre mission est d'informer et de sensibiliser pour un avenir plus vert.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Actualités</a></li>
                        <li><a href="#">Conseils pratiques</a></li>
                        <li><a href="#">Événements</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Catégories</h3>
                    <ul class="footer-links">
                        <li><a href="#">Écologie</a></li>
                        <li><a href="#">Recyclage</a></li>
                        <li><a href="#">Développement durable</a></li>
                        <li><a href="#">Énergie renouvelable</a></li>
                        <li><a href="#">Biodiversité</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Nous contacter</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Rue de l'Environnement, 75000 Paris</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@ecorecyclage.fr</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ÉcoRecyclage - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <script>
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
            });<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Écologiques</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3b8e3b;
            --secondary-color: #70b570;
            --accent-color: #f5f5f5;
            --text-color: #333;
            --light-green: #e8f5e8;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
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
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        
        .footer-section {
            flex: 0 0 calc(25% - 30px);
            margin-right: 30px;
            margin-bottom: 30px;
        }
        
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--white);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive */
        @media screen and (max-width: 992px) {
            .news-card {
                flex: 0 0 calc(50% - 30px);
            }
            
            .footer-section {
                flex: 0 0 calc(50% - 30px);
            }
        }
        
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 15px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .news-card {
                flex: 0 0 calc(100% - 30px);
            }
        }
        
        @media screen and (max-width: 576px) {
            .footer-section {
                flex: 0 0 100%;
                margin-right: 0;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 5px 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">ÉcoRecyclage</a>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#" class="active">Actualités</a></li>
                    <li><a href="#">Recycler</a></li>
                    <li><a href="#">Conseils</a></li>
                    <li><a href="#">Événements</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

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

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>À propos</h3>
                    <p>ÉcoRecyclage est une plateforme dédiée à l'écologie, au recyclage et à la protection de l'environnement. Notre mission est d'informer et de sensibiliser pour un avenir plus vert.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Actualités</a></li>
                        <li><a href="#">Conseils pratiques</a></li>
                        <li><a href="#">Événements</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Catégories</h3>
                    <ul class="footer-links">
                        <li><a href="#">Écologie</a></li>
                        <li><a href="#">Recyclage</a></li>
                        <li><a href="#">Développement durable</a></li>
                        <li><a href="#">Énergie renouvelable</a></li>
                        <li><a href="#">Biodiversité</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Nous contacter</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Rue de l'Environnement, 75000 Paris</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@ecorecyclage.fr</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ÉcoRecyclage - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <script>
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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Écologiques</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3b8e3b;
            --secondary-color: #70b570;
            --accent-color: #f5f5f5;
            --text-color: #333;
            --light-green: #e8f5e8;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
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
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        
        .footer-section {
            flex: 0 0 calc(25% - 30px);
            margin-right: 30px;
            margin-bottom: 30px;
        }
        
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--white);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive */
        @media screen and (max-width: 992px) {
            .news-card {
                flex: 0 0 calc(50% - 30px);
            }
            
            .footer-section {
                flex: 0 0 calc(50% - 30px);
            }
        }
        
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 15px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .news-card {
                flex: 0 0 calc(100% - 30px);
            }
        }
        
        @media screen and (max-width: 576px) {
            .footer-section {
                flex: 0 0 100%;
                margin-right: 0;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 5px 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">ÉcoRecyclage</a>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#" class="active">Actualités</a></li>
                    <li><a href="#">Recycler</a></li>
                    <li><a href="#">Conseils</a></li>
                    <li><a href="#">Événements</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

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

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>À propos</h3>
                    <p>ÉcoRecyclage est une plateforme dédiée à l'écologie, au recyclage et à la protection de l'environnement. Notre mission est d'informer et de sensibiliser pour un avenir plus vert.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Actualités</a></li>
                        <li><a href="#">Conseils pratiques</a></li>
                        <li><a href="#">Événements</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Catégories</h3>
                    <ul class="footer-links">
                        <li><a href="#">Écologie</a></li>
                        <li><a href="#">Recyclage</a></li>
                        <li><a href="#">Développement durable</a></li>
                        <li><a href="#">Énergie renouvelable</a></li>
                        <li><a href="#">Biodiversité</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Nous contacter</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Rue de l'Environnement, 75000 Paris</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@ecorecyclage.fr</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ÉcoRecyclage - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <script>
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
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualités Écologiques</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #3b8e3b;
            --secondary-color: #70b570;
            --accent-color: #f5f5f5;
            --text-color: #333;
            --light-green: #e8f5e8;
            --white: #ffffff;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
            background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('/api/placeholder/1200/400');
            background-size: cover;
            background-position: center;
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
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 50px 0 20px;
        }
        
        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        
        .footer-section {
            flex: 0 0 calc(25% - 30px);
            margin-right: 30px;
            margin-bottom: 30px;
        }
        
        .footer-section h3 {
            font-size: 18px;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-section h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background-color: var(--white);
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 10px;
        }
        
        .footer-links a {
            color: #e0e0e0;
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: white;
        }
        
        .footer-bottom {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }
        
        /* Responsive */
        @media screen and (max-width: 992px) {
            .news-card {
                flex: 0 0 calc(50% - 30px);
            }
            
            .footer-section {
                flex: 0 0 calc(50% - 30px);
            }
        }
        
        @media screen and (max-width: 768px) {
            .navbar {
                flex-direction: column;
            }
            
            .nav-links {
                margin-top: 15px;
            }
            
            .hero h1 {
                font-size: 36px;
            }
            
            .news-card {
                flex: 0 0 calc(100% - 30px);
            }
        }
        
        @media screen and (max-width: 576px) {
            .footer-section {
                flex: 0 0 100%;
                margin-right: 0;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .nav-links li {
                margin: 5px 10px;
            }
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="#" class="logo">ÉcoRecyclage</a>
                <ul class="nav-links">
                    <li><a href="#">Accueil</a></li>
                    <li><a href="#" class="active">Actualités</a></li>
                    <li><a href="#">Recycler</a></li>
                    <li><a href="#">Conseils</a></li>
                    <li><a href="#">Événements</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

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

    <!-- Footer Section -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>À propos</h3>
                    <p>ÉcoRecyclage est une plateforme dédiée à l'écologie, au recyclage et à la protection de l'environnement. Notre mission est d'informer et de sensibiliser pour un avenir plus vert.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Liens rapides</h3>
                    <ul class="footer-links">
                        <li><a href="#">Accueil</a></li>
                        <li><a href="#">Actualités</a></li>
                        <li><a href="#">Conseils pratiques</a></li>
                        <li><a href="#">Événements</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Catégories</h3>
                    <ul class="footer-links">
                        <li><a href="#">Écologie</a></li>
                        <li><a href="#">Recyclage</a></li>
                        <li><a href="#">Développement durable</a></li>
                        <li><a href="#">Énergie renouvelable</a></li>
                        <li><a href="#">Biodiversité</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Nous contacter</h3>
                    <ul class="footer-links">
                        <li><i class="fas fa-map-marker-alt"></i> 123 Rue de l'Environnement, 75000 Paris</li>
                        <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
                        <li><i class="fas fa-envelope"></i> contact@ecorecyclage.fr</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 ÉcoRecyclage - Tous droits réservés</p>
            </div>
        </div>
    </footer>

    <script>
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
