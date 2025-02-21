<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $subject = htmlspecialchars($_POST["subject"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "admin@tfhconline.net"; // Change to your email
    $headers = "From: " . $email;
    $body = "Name: $name\nEmail: $email\n\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Message failed to send.'); window.location.href='index.html';</script>";
    }
}
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
    
        body 
        {
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
`

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
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="history.php">History</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 2</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">Submenu 3</a></li>
                            <li><a class="dropdown-item" href="#">Submenu 3</a></li>
                        </ul>
                    </li>
                    
                   
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="Gallery.php">GALLERY</a>


                        <li class="nav-item">
                            <a class="nav-link" href="About.php">ABOUT </a>

                            <li class="nav-item">
                                <a class="nav-link" href="Blog.php">BLOG </a>

                                <li class="nav-item">
                                <a class="nav-link" href="Center.php">CENTER  </a>

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


<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

document.querySelector("form").addEventListener("submit", function(event) {
    let name = document.querySelector("[name='name']").value;
    let email = document.querySelector("[name='email']").value;
    if (name === "" || email === "") {
        alert("Please fill in all required fields!");
        event.preventDefault();
    }
});

</script>



    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>



</script>
</body>
</html>

