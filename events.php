<?php
    $church_name = "The Father's House";
    $address = "90, Ojodu Akute Road, Ajayi Farms Bus-Stop.";
    $phone = "+234 805 669 9920";
    $email = "churchadmin@tfhconline.net";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCSIA WORSHIP CENTER </title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/4/45/PhilippinesGeneralCounciloftheAssembliesofGod.png" type="image/png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
   <!-- Bootstrap CSS -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   
   <style>
        body {

            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #0e1a40;
        }
        .navbar {
            background-color: #2d2f63;
            padding: 10px;
        }
        .navbar a {
            color: white !important;
            font-weight: bold;
            text-decoration: none;
            margin: 0 15px;
        }
        .hero-section {
            position: relative;
            background: linear-gradient(135deg, #0e1a40, #2d2f63);
            height: 400px;
            color: white;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
            margin: 0;
        }
        .hero-section p {
            font-size: 1.5rem;
        }
        .image-count {
            text-align: center;
            padding: 20px;
            font-size: 1.2rem;
            color: white;
        }
        }


        .reverend-section {
            background-color: #444;
            color: white;
            padding: 50px 0;
        }
        .reverend-section h2 {
            color: #fff;
            font-weight: bold;
        }
        .reverend-section h4 {
            color: #f0a500;
        }
        .reverend-section p {
            color: #ccc;
        }
        .reverend-img {
            width: 100%;
            border-radius: 8px;
        }


        .hero-section {
    height: 400px;
    background: url('https://via.placeholder.com/1920x400/0e1a40/2d2f63') center center no-repeat;
    background-size: cover;
    position: relative;
    overflow: hidden;
}
.overlay {
    background: linear-gradient(135deg, rgba(14,26,64,0.85), rgba(45,47,99,0.85));
    z-index: 1;
}
.hero-section h1,
.hero-section h3 {
    z-index: 2;
}
.hero-section h1 {
    text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
}
.hero-section .logo-left,
.hero-section .logo-right {
    width: 80px;
    z-index: 3;
}
.hero-section .logo-left {
    animation: floatLeft 3s infinite ease-in-out;
}
.hero-section .logo-right {
    animation: floatRight 3s infinite ease-in-out;
}

@keyframes floatLeft {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

@keyframes floatRight {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(10px); }
}

body {
    font-family: Arial, sans-serif;
    background-color: #e0e7ff;
    color: #1e3a8a;
}
.text-warning {
    color: #3b82f6 !important;
}
.text-dark {
    color: #1e40af !important;
}
.py-5 {
    padding: 3rem 0;
}
.fw-bold {
    font-weight: bold;
}
.fst-italic {
    font-style: italic;
}
.display-4 {
    font-size: 2.5rem;
    font-weight: bold;
}
.container {
    max-width: 1200px;
    margin: 0 auto;
}
.my-5 {
    margin: 3rem 0;
}
.rounded-3 {
    border-radius: 1rem;
}
.reverend-section {
    background-color: #1e3a8a;
    color: white;
    padding: 3rem 0;
}
.reverend-section h2,
.reverend-section h4,
.reverend-section p {
    color: white;
}
.reverend-img {
    border-radius: 1rem;
    max-width: 100%;
    height: auto;
}
h2, h3, h4, h5 {
    color: #1e40af;
}
h2.text-warning,
h3.text-warning {
    color: #3b82f6;
}
h5.text-dark {
    color: #1e3a8a;
}
p {
    color: #475569;
}
.section-bg {
    background-color: #f0f4ff;
}


body {
            background: linear-gradient(135deg, #0e1a40, #2d2f63);
            color: white;
            font-family: Arial, sans-serif;
        }
        .hero-section {
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #e0e7ff;
            background: linear-gradient(135deg, #0e1a40, #2d2f63);
            position: relative;
            overflow: hidden;
        }
        .hero-section::before {
            content: 'JCSIA';
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 15rem;
            color: rgba(255, 255, 255, 0.05);
            z-index: 1;
            font-weight: bold;
        }
        .hero-content {
            z-index: 2;
        }
        .hero-content h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        .hero-content h3 {
            font-size: 2.5rem;
            font-weight: bold;
        }
        .hero-content p {
            font-size: 1.2rem;
            color: #60a5fa;
        }
        .footer-text {
            position: absolute;
            bottom: 10px;
            width: 100%;
            text-align: center;
            font-size: 1rem;
            color: #94a3b8;
        }

        .logo-img {
    width: 100px;
    height: auto;
}
footer a {
    text-decoration: none;
    color: #000;
}
footer a:hover {
    color: #28a745;
}
.social-icons a {
    text-decoration: none;
}


social-container {
    text-align: center;
}

.social-icons {
    display: flex;
    justify-content: center;
    gap: 20px;
    margin-bottom: 10px;
}

.social-link {
    background-color: #f16169;
    color: white;
    border-radius: 50%;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    width: 50px;
    height: 50px;
    text-decoration: none;
    font-size: 20px;
    transition: transform 0.3s;
}

.social-link:hover {
    transform: scale(1.1);
}

.location-text {
    color: #f16169;
    font-size: 20px;
    margin: 0;
}

.navbar-logo {
    width: 30px;
    height: 30px;
    margin-right: 10px;
    border-radius: 50%;
    vertical-align: middle;
}

.logo-right {
    width: 100px;      /* Adjust the width */
    height: 100px;     /* Adjust the height */
    border-radius: 50%;  /* Make it a circle *//
    
}

body {
            text-align: center;
         ;
        }
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.6);
        }
        .content {
            position: relative;
            z-index: 2;
        }
        .btn-custom {
            background-color: #ff6f42;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
        }
        .btn-custom:hover {
            background-color: #e65c34;
        }

        .banner {
            background: url('https://images.unsplash.com/photo-1509021436665-8f07dbf5bf1d?fm=jpg&q=60&w=3000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8YmlibGUlMjBiYWNrZ3JvdW5kfGVufDB8fDB8fHww') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 100px 20px;
        }
        .locations {
            background-color: #f8ebe4;
            padding: 50px 0;
        }
        .location-box {
            border: 2px solid #0044cc;
            padding: 20px;
            text-align: center;
            margin: 10px;
            border-radius: 5px;
        }
        .bible-study {
            background: url('https://www.shutterstock.com/image-photo/open-bible-hands-wheat-field-260nw-2352001425.jpg') center/cover no-repeat;
            color: white;
            text-align: center;
            padding: 80px 20px;
        }
        .newsletter {
            background-color: #002b7f;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }
        .newsletter input {
            width: 40%;
            padding: 10px;
            margin-right: 10px;
            border: none;
            border-radius: 5px;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #000;
            color: #fff;
        }
        .footer {
            background-color: #000;
            padding: 30px;
            text-align: center;
        }
        .footer-content {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .footer-section {
            margin: 20px;
        }
        .footer-section h3 {
            margin-bottom: 10px;
        }
        .social-icons a {
            margin: 10px;
            color: #fff;
            font-size: 20px;
        }
        .footer-bottom {
            text-align: center;
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #444;
        }
        .buttons button {
            background-color: transparent;
            border: 1px solid #fff;
            color: #fff;
            padding: 8px 15px;
            margin: 5px;
            cursor: pointer;
        }
        .buttons button:hover {
            background-color: #fff;
            color: #000;
        }
        .pastor-card {
            text-align: center;
            padding: 20px;
        }
        .pastor-img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }
     

        .schedule-section {
    text-align: center;
    padding: 20px;
}

.schedule-title {
    font-size: 28px;
    color: #2f2f2f;
    letter-spacing: 2px;
    margin-bottom: 30px;
}

.schedule-cards {
    display: flex;
    justify-content: center;
    gap: 20px;
    flex-wrap: wrap;
}

.card {
    background-color: #ffffff;
    border-radius: 15px;
    padding: 20px;
    width: 220px;
    box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);
    text-align: center;
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 20px rgba(0, 0, 0, 0.2);
}

.icon-container {
    background-color: #f0f0f5;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: 0 auto 15px;
}

.icon-container i {
    font-size: 28px;
    color: #4a4a4a;
}

.card h3 {
    font-size: 20px;
    color: #333;
    margin: 10px 0;
    font-weight: bold;
}

.card p {
    color: #555;
    font-size: 14px;
    line-height: 1.5;
}

.footer {
    background-color: #2c3e50;
    color: #fff;
    padding: 40px 20px;
    text-align: center;
}

.footer-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    max-width: 1200px;
    margin: 0 auto;
}

.footer-column {
    flex: 1;
    min-width: 250px;
    padding: 20px;
}

.footer-column h3 {
    font-size: 1.5em;
    margin-bottom: 15px;
    color: #f39c12;
}

.footer-column ul {
    list-style: none;
    padding: 0;
}

.footer-column ul li {
    margin-bottom: 10px;
}

.footer-column ul li a {
    text-decoration: none;
    color: #ecf0f1;
    transition: color 0.3s;
}

.footer-column ul li a:hover {
    color: #f39c12;
}

#contact-form {
    display: flex;
    flex-direction: column;
}

#contact-form input,
#contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: none;
    border-radius: 4px;
}

#contact-form button {
    background-color: #f39c12;
    color: #fff;
    border: none;
    padding: 10px 15px;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#contact-form button:hover {
    background-color: #e67e22;
}

/* Responsive Design */
@media (max-width: 768px) {
    .footer-container {
        flex-direction: column;
    }
}

.footer-column p {
    margin: 10px 0;
    color: #ecf0f1;
    font-size: 0.9em;
}

.footer-column p i {
    color: #f39c12;
    margin-right: 8px;
}

.social-icons {
    margin-top: 15px;
}

.social-icons a {
    text-decoration: none;
    color: #ecf0f1;
    font-size: 1.5em;
    margin: 0 10px;
    transition: color 0.3s;
}

.social-icons a:hover {
    color: #f39c12;
}

.footer-bottom {
    margin-top: 30px;
    color: #95a5a6;
    font-size: 0.8em;
    text-align: center;
    border-top: 1px solid #34495e;
    padding-top: 15px;
}

.service-card {
            position: relative;
            overflow: hidden;
            color: white;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .service-card:hover {
            transform: scale(1.05);
        }
        .service-card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            filter: brightness(0.6);
        }
        .service-text {
            position: absolute;
            bottom: 10px;
            left: 10px;
            text-align: left;
        }



    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <a href="#" class="navbar-brand">

                
                    <img src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-6/457747128_962634669239595_4955177700598035621_n.jpg?_nc_cat=108&ccb=1-7&_nc_sid=6ee11a&_nc_eui2=AeF4UtFRpdGvxggAa9aWGmzCfhXdXORtmkJ-Fd1c5G2aQoeXE0uNPZWwt3ch3mLrmUOwcg11XljmryXeRm9Fvqyq&_nc_ohc=qSKUQ90jo7cQ7kNvgEfgL0h&_nc_oc=Adiq4MqnFNLILZs0cMEz9PA62m5ZHHeHS9hSlN6LV2GYFNCzrQf-zKvHJInM3z7dzaw&_nc_zt=23&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=AXHlm10nJylf7N7KTay1_UJ&oh=00_AYBCrwRHB3idIxc584jXz98apWxF0sOpQatODw1LfU4dGA&oe=67B49ED7" alt="Logo" class="navbar-logo">
                    <span class="navbar-text">JCSIA WORSHIP CENTER BANKERS CALOOCAN CITY</span>
                </a>
                
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Home.php">HOME</a>
                </li>
                        
                   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Events.php">EVENTS</a>




                        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Gallery.php">GALLERY</a>


                        <li class="nav-item">
                            <a class="nav-link" href="About.php">ABOUT </a>

                            <li class="nav-item">
                                <a class="nav-link" href="Blog.php">BLOG </a>

                    
                                <li class="nav-item">
                                <a class="nav-link" href="Center.php">LOCATION </a>
                            </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Contact.php">CONTACT </a>

                    </li>
                </ul>
            </div>
        </div>
    </nav>

   

 
    <div class="d-flex justify-content-end">
    <a href="Home.php" class="btn btn-primary">
        Back to Home
    </a>
</div>



</head>
<body>
    
        <h1>JCSIA JESUS CHRIST SAVIOR INTERNATIONAL ASSEMBLY </h1>
        
        <h3>1474 JCSIA Worship Center Quirino Highway Bankers Village District I Zone 16 Tala, Caloocan, 1426</h3>
        <marquee>1474 JCSIA Worship Center Quirino Highway Bankers Village District I Zone 16 Tala, Caloocan, 1426</marquee>
        <h3>Thursdays - 8am to 10am</h3>
        <p>The Father’s House is a place for raising sons for the Kingdom. We would love you to be a part of us. Join in on our worship services and you'll be blessed.</p>
    </div>
    
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rotating Earth with Church Logo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #000;
            text-align: center;
        }
        .earth-container {
            position: relative;
            width: 300px;
            height: 300px;
            margin: 50px auto;
        }
        .earth {
            width: 100%;
            height: 100%;
            background: url('https://upload.wikimedia.org/wikipedia/commons/2/2c/Rotating_earth_%28large%29.gif') no-repeat center;
            background-size: cover;
            border-radius: 50%;
            animation: rotateEarth 10s linear infinite;
        }
        .church-logo {
            position: absolute;
            top: 40%; /* Adjusted to move logo higher */
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
            border-radius: 50%;
        }
        @keyframes rotateEarth {
            from { transform: rotate(0deg); }
            to { transform: rotate(0deg); }
        }

        .church-logo {
            width: 150px;  /* Set fixed width */
            height: 150px; /* Set fixed height */
            object-fit: contain; /* Ensures the entire image fits */
            margin: auto; /* Centers the logo */
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-white my-4">Rotating Earth with Church Logo</h1>
        <div class="earth-container">
            <div class="earth"></div>
            <img src="https://scontent.fmnl14-1.fna.fbcdn.net/v/t39.30808-6/286162374_970443906977330_6315923866001664631_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=6ee11a&_nc_ohc=j_n37pHc4noQ7kNvgEsrDqO&_nc_oc=AdhfdaqZiKlHjQRpxM48uYa7uN1P1WKMItZWqX04kj3nqxa1LP88pSFeRThDcLUtEZo&_nc_zt=23&_nc_ht=scontent.fmnl14-1.fna&_nc_gid=AsQQM5w5m4v7dNgVyWOZE-t&oh=00_AYBWfjY_uxQzUV6QID2jOwG7nsAxYrZ6IpTtGNURvu8s5w&oe=67BDBAE2" alt="Church Logo" class="church-logo">
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



</head>
<body>
    <div class="banner">
        <h2>Find the Father's House Closest to you</h2>
        <p>We look forward to worshipping with you</p>
    </div>

    <div class="container locations">
        <div class="row">
            <div class="col-md-6">
                <div class="location-box">
                    <h4>HEADQUARTERS</h4>
                    <p>90, Ojodu-Akute Road, Ajayi Farm Busstop, Akute</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="location-box">
                    <h4>MOWE CHURCH</h4>
                    <p>3, Transformation Avenue, Opposite Omapet Filling Station, Ofada Road Mowe</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="location-box">
                    <h4>IBADAN CHURCH</h4>
                    <p>Ologuneru, Beside Ekerin Junction, New Eleyele, Ibadan</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="location-box">
                    <h4>AREPO CHURCH</h4>
                    <p>1/3 Eurobodo Plaza, Journalist Estate Road, Arepo</p>
                </div>
            </div>
        </div>
    </div>

    <section class="schedule-section">
        <h2 class="schedule-title">WEEKLY PROGRAMS SCHEDULE</h2>
        <div class="schedule-cards">
            <div class="card">
                <div class="icon-container">
                    <i class="fas fa-praying-hands"></i>
                </div>
                <h3>Prayers & Counselling</h3>
                <p>Tuesday - Friday<br>10am - 2pm</p>
            </div>
            <div class="card">
                <div class="icon-container">
                    <i class="fas fa-sun"></i>
                </div>
                <h3>Light Encounter</h3>
                <p>Wednesday<br>6pm - 8pm</p>
            </div>
            <div class="card">
                <div class="icon-container">
                    <i class="fas fa-dove"></i>
                </div>
                <h3>Dominion Hour</h3>
                <p>Thursday<br>9am - 12pm</p>
            </div>
            <div class="card">
                <div class="icon-container">
                    <i class="fas fa-church"></i>
                </div>
                <h3>Main Service</h3>
                <p>Sunday<br>8am - 11:30am</p>
            </div>
        </div>
    </section>
    <!-- Bootstrap JS -->

    <div class="container mt-5">
        <div class="row text-center">
            <div class="col-md-12 text-center mb-4">
            
            </div>
            <div class="col-md-3 pastor-card">
                <img src="Derix600.webp" alt="Derio Dotosme" class="pastor-img">
                <h5>Derio Dotosme</h5>
                <p>8:00 am  9:00 pm </p>
                <p>Sunday Service</p>
            </div>
            <div class="col-md-3 pastor-card">
            <img src="13.jfif" alt="Derio Dotosme" class="pastor-img">
                <h5> Lucio Dotosme </h5>
                <p>8:00 am  9:00 pm </p>
                <p>Sunday Service</p>
            </div>
            <div class="col-md-3 pastor-card">
            <img src="14.jpg" alt="Derio Dotosme" class="pastor-img">
                <h5>Robert Dotosme</h5>
                <p>8:00 am  9:00 pm</p>
                <p>Sunday Service</p>
            </div>
            <div class="col-md-3 pastor-card">
            <img src="15.jpg" alt="Derio Dotosme" class="pastor-img">
                <h5>Robert Banawa </h5>
                <p>8:00 am  9:00 pm</p>
                <p>Sunday Service</p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  
    <div class="bible-study">
        <h2>Join Us Every Tuesday for Bible Study</h2>
        <p>Tuesdays - 6:45pm to 8:15pm</p>
        <p>The Father's House is a place for raising sons for the Kingdom. We would love you to be a part of us.</p>
        <button class="btn btn-warning">Get Direction</button>
    </div>



    <div class="container my-5">
        <div class="row align-items-center">
            <!-- YouTube Video -->
            <div class="col-md-6">
                <div class="ratio ratio-16x9">
                    <iframe id="youtube-video" 
                            src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
                            title="Church Service"
                            allowfullscreen></iframe>
                </div>
            </div>

            <!-- Text Content -->
            <div class="col-md-6">
                <h6 class="text-uppercase text-primary fw-bold">Watch on YouTube</h6>
                <h2 id="service-title">Our Latest Service from <span id="service-date"></span></h2>
                <p id="service-time">Join us every Sunday morning in-person or online from 
                    <strong>10:30–11:30AM.</strong>
                </p>
            </div>
        </div>
    </div>

  



    
    <footer class="footer">
    <div class="footer-container">
        <div class="footer-column">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">Gallery</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Policies</h3>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Cookie Policy</a></li>
                <li><a href="#">Terms and Conditions</a></li>
            </ul>
        </div>
        <div class="footer-column">
            <h3>Get in Touch</h3>
            <form id="contact-form">
                <input type="text" placeholder="Name" required>
                <input type="text" placeholder="Phone/Email" required>
                <textarea placeholder="Leave us a message" required></textarea>
                <button type="submit">Send</button>
                <div class="footer-section">
                <h3>Contact</h3>
                <p><i class="fas fa-map-marker-alt"></i> 90, Ojodu Akute Road, Ajayi Farms Bus-Stop</p>
                <p><i class="fas fa-envelope"></i> churchadmin@tfhconline.net</p>
                <p><i class="fas fa-phone"></i> +234 805 669 9920</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-youtube"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
        <div class="footer-bottom">&copy; 2023 The Father's House Church</div>


            </form>
        </div>
    </div>
</footer>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <div class="banner">
        TO GOD BE THE GLORY
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Copyright -->
<p class="text-muted mt-3">&copy; Copyright JCSIA (Jesus Christ the Savior International Assembly) 2025. All rights reserved.</p>
    
    
<sciptt>

<div class="container my-5">
    <div class="row align-items-center">
        <!-- YouTube Video -->
        <div class="col-md-6">
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/svxaXpJjdBs" 
                        title="Church Service"
                        allowfullscreen></iframe>
            </div>
        </div>

        <!-- Text Content -->
        <div class="col-md-6">
            <h6 class="text-uppercase text-primary fw-bold">Watch on YouTube</h6>
            <h2>JCSIA ANNIVERSAY </h2>
            <p>Join us every Sunday morning in-person or online from 
                <strong>10:30–11:30 AM.</strong>
            </p>
        </div>
    </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>

    // Automatically update the date to the most recent Sunday
function updateServiceDate() {
    let today = new Date();
    let daysSinceSunday = today.getDay(); // Get current day (0 = Sunday)
    
    // If today is Sunday, use today's date; otherwise, get the previous Sunday
    let lastSunday = new Date(today);
    lastSunday.setDate(today.getDate() - daysSinceSunday);
    
    // Format date to "Month Day, Year" (e.g., "February 16, 2025")
    let options = { year: "numeric", month: "long", day: "numeric" };
    document.getElementById("service-date").textContent = lastSunday.toLocaleDateString("en-US", options);
}

// Add hover effect to change text when mouse enters and leaves
function addHoverEffect() {
    let serviceTitle = document.getElementById("service-title");
    
    serviceTitle.addEventListener("mouseover", function() {
        serviceTitle.style.color = "#ff4757";
    });

    serviceTitle.addEventListener("mouseout", function() {
        serviceTitle.style.color = "#000";
    });
}

// Initialize functions
document.addEventListener("DOMContentLoaded", function() {
    updateServiceDate();
    addHoverEffect();
});

</script>

</sciptt>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="script.js"></script>




    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>




</script>
</body>
</html>



