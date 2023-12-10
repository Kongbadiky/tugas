<?php
require 'koneksi.php';


session_start();


if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="1.css">
    <title>Portofolio Saya</title>
</head>
<body>
<nav id="desktop-nav">
    <div class="logo">Dicky</div>
    <div>
        <ul class="nav-links">
            <li><a href="#about">About</a></li>
            <li><a href="#experience">Experience</a></li>
            <li><a href="#contact">Contact</a></li>
            <li><a href="login.php" class="icon">Logout</a></li>

        </ul>
    </div>
</nav>
<section id="profile">
    <div class="section__pic-container">
        <img src="./asset/pp.png" alt="Dicky profile picture">
    </div>
    <div class="section__text">
        <p class="section__text__p1">Hello, I'm</p>
        <h1 class="title">Dicky Rizal Zikrullah</h1>
        <p class="section__text__p2">Mahasiswa Politani Prodi TRPL</p>
    </div>
</section>
<section id="about">
    <p class="section__text__p1">Get To Know Me</p>
    <h1 class="title">About Me</h1>
    <div class="section-contaoner">
        <div class="about-details-container">
            <div class="about-container">
                <div class="details-container">
                <img src="./asset/medal-solid-24.png" alt="Experience icon" class="icon">
                <h3>Experience</h3>
                <p>gatau tapi saya suka IoT</p>
                </div>
            </div>
            <div class="text-container">
            <p>intinya sedang menempuh pendidikan di politeknik pertanian negeri samarinda</p>
            </div>
        </div>
    </div>
    <img src="./asset/chevrons-right-solid-24.png" alt="Arrow Icon" class="Icon arrow" onclick="location.href='#experience'">
</section>
<section id="experience">
    <p class="section__text__p1">Explore My</p>
    <h1 class="title">Experience</h1>
    <div class="experience-detail-container">
        <div class="about-containers">
            <div class="details-container">
                <h2 class="experience-sub-title">Mahasiswa TRPL</h2>
                <div class="article-container">
                    <article>
                        <img src="./asset/badge-check-solid-24.png" alt="" class="icon">
                        <div>
                            <h3>HTML</h3>
                            <p>Intermediate</p>
                        </div>
                    </article>
                    <article>
                        <img src="./asset/badge-check-solid-24.png" alt="" class="icon">
                        <div>
                            <h3>CSS</h3>
                            <p>Intermediate</p>
                        </div>
                    </article>
                    <article>
                        <img src="./asset/badge-check-solid-24.png" alt="" class="icon">
                        <div>
                            <h3>JavaScript</h3>
                            <p>Intermediate</p>
                        </div>
                    </article>
                    <article>
                        <img src="./asset/badge-check-solid-24.png" alt="" class="icon">
                        <div>
                            <h3>IoT</h3>
                            <p>Intermediate</p>
                        </div>
                    </article>
                </div>
            </div>
        </div>
    </div>
    <img src="./asset/chevrons-right-solid-24.png" alt="Arrow icon" class="icon arrow" onclick="location.href= '#contact'">
</section>
<section id="contact">
    <div class="section__text">
        <p class="section__text__p1">Contact Me</p>
        <h1 class="title">Masukkan Kritik Dan Saran</h1>
    </div>
    <div class="contact">
        <form action="send_message.php" method="post">
            <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
        <input type="submit" value="Send Message" class="btn">
    </form>
    </div>
</section>
<footer>
    <nav>
        <div class="nav-links-containers">
            <ul class="nav-links">
                <li><a href="#about">About</a></li>
                <li><a href="#experience">Experience</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </nav>
    <p>Copyright &#169; 2023 Dicky. All Right Reserved.</p>
</footer>
</body>
</html>
