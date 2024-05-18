<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto+Mono:ital,wght@0,100..700;1,100..700&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/9131de92f7.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <style>
        .form-btn a, .nav-btn a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-brand">
                <a href="index.php">TechBakery</a>
            </div>
            <div class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="">Podcast</a></li>
                    <li class="nav-item"><a href="">Blog</a></li>
                    <li class="nav-item"><a href="">About</a></li>
                    <li class="nav-item"><a href="">Contact</a></li>
                    <li class="nav-item"><a href="login.php">Login</a></li>
                    <li class="nav-item"><a href="admin_login.php">Admin</a></li>
                    <button class="nav-btn"><a href="signup.php">Subscribe</a></button>
                </ul>
            </div>
        </nav>
    </header>
    <main>
        <!-- front section -->
        <section class="front">
            <div class="front-info">
                <h1>Tech Bakery</h1>
                <p>Unveiling the Code of Tomorrow: Where Software Stories Unfold</p>
                <div class="button-list">
                    <button class="btn"><i class="fa-solid fa-podcast ap"></i>  Apple Podcasts</button>
                    <button class="btn"><i class="fa-brands fa-spotify sp"></i>  Spotify</button>
                    <button class="btn"><i class="fa-solid fa-tower-broadcast ov"></i>  Overcast</button>
                </div>
                <form action="">
                    <input type="text" value="" placeholder="Your email address">
                    <button class="form-btn"><a href="signup.php">Subscribe</a></button>
                </form>
            </div>
            <div class="front-img">
                <img height="250px" width="350px" src="media/frontpage/front.jpg" alt="">
            </div>
        </section>

        <!-- second section -->
        <section class="episodes-list">
            <h4>Latest episodes</h4>
            <div class="episode">
                <div class="episode1">
                    <div class="episode-info">
                        <div class="ep">
                            <h3>E1 </h3>
                            <p> 12 jan 2024 - public</p>
                        </div>
                        <h3>Digital Innovators: Unveiling the Tech Titans</h3>
                    </div>
                </div>
                <div class="episode2">
                    <div class="episode-info">
                        <div class="ep">
                            <h3>E2 </h3>
                            <p> 19 jun 2023 - public</p>
                        </div>
                        <h3>The Future of AI: Exploring Tomorrow's Intelligence</h3>
                    </div>
                </div>
                <div class="episode3">
                    <div class="episode-info">
                        <div class="ep">
                            <h3>E3 </h3>
                            <p> 22 Jul 2023 - public</p>
                        </div>
                        <h3>Cybersecurity Unplugged: Navigating the Digital Battlefield</h3>
                    </div>
                </div>
                <div class="episode4">
                    <div class="episode-info">
                        <div class="ep">
                            <h3>E4 </h3>
                            <p> 20 Oct 2023 - public</p>
                        </div>
                        <h3>Blockchain Revolution: Decentralizing the Future</h3>
                    </div>
                </div>
                <div class="episode5">
                    <div class="episode-info">
                        <div class="ep">
                            <h3>E5 </h3>
                            <p> 19 Jan 2023 - public</p>
                        </div>
                        <h3>Disruptive Technologies: Shaping the World of Tomorrow</h3>
                    </div>
                </div>
                <div class="episode6">
                    <div class="episode-info">
                        <div class="ep">
                            <h3>E6 </h3>
                            <p> 02 Dec 2023 - public</p>
                        </div>
                        <h3>The Internet of Things: Connecting the Dots of the Digital Universe</h3>
                    </div>
                </div>
            </div>
            <div class="load-btn">
                <button>Load more</button>
            </div>
        </section>
    </main>
    <footer>
        <div class="foot">
            <div class="social-icon">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="about">
                <a href="">Aspire Themes</a>
                <a href="">Changelog</a>
                <a href="">Documentation</a>
            </div>
            <div class="copyright">
                <p>© 2024 TechBakery - Published with Kamrul Hasan</p>
            </div>
        </div>
    </footer>
</body>
</html>