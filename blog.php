<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="blog.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body class="bg-dark text-light">
    <header>
        <nav>
            <div class="nav-brand">
                <a href="index.php">TechBakery</a>
            </div>
            <div class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="podcast.php">Podcast</a></li>
                    <li class="nav-item"><a href="blog.php">Blog</a></li>
                    <li class="nav-item"><a href="">About</a></li>
                    <li class="nav-item"><a href="">Contact</a></li>
                    <li class="nav-item"><div class="user-icon" data-toggle="modal" data-target="#userInfoModal"><ion-icon class="user" name="person-circle-outline"></ion-icon></div></li>
                    <div class="modal fade" id="userInfoModal" tabindex="-1" role="dialog" aria-labelledby="userInfoModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-dark" id="userInfoModalLabel">User Profile</h5>
                            <button class="" type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body text-dark">
                            <!-- User Information will be displayed here -->
                            <div id="userDetails text-dark">
                            <!-- User info will be populated here -->
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </ul>
            </div>
        </nav>
    </header>
    <section class="container-fluid">
        <div class="row">
            <div class="col-1">

            </div>
            <div class="col-6 mt-2">
                <div class="mb-5">
                    <div class="hero">
                        <img src="media/blog/7.jpg" height="400px" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>Tech Trends 2024: Predicting the Next Wave of Innovation</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">24 april, 2024</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <p class="text-secondary h6">
                            Peer into the crystal ball of technology and forecast the next wave of innovation that will shape the decade ahead.Explore emerging trends in artificial intelligence, quantum computing, biotechnology, and more, as pioneers push the boundaries of what's possible. Examine the potential implications of these technologies on industries, economies, and societies worldwide, from healthcare and transportation to entertainment and beyond.
                        </p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
                <div class="my-5">
                    <div class="hero">
                        <img src="media/blog/1.jpg" height="400px" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>Navigating the Digital Transformation: A Guide for Businesses</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">04 june, 2023</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <p class="text-secondary h6">
                            In this blog post, we'll explore the essential steps businesses need to take to navigate the digital transformation successfully. From adopting cloud computing and embracing data analytics to leveraging artificial intelligence and enhancing cybersecurity, we'll provide practical insights and strategies for organizations looking to thrive in the digital age.
                        </p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
                <div class="my-5">
                    <div class="hero">
                        <img src="media/blog/2.jpg" height="400px" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>The Future of Work: Embracing Remote Collaboration and Digital Innovation</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">17 october, 2022</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <p class="text-secondary h6">
                            This blog post delves into the evolving landscape of work in the digital era. With remote work becoming increasingly prevalent and technological advancements reshaping traditional workflows, we'll discuss the future of work and how organizations can adapt to embrace remote collaboration, digital innovation, and flexible work arrangements.                        </p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
                <div class="my-5">
                    <div class="hero">
                        <img src="media/blog/3.jpg" height="400px" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>Unlocking the Power of Biotechnology: Transforming Healthcare and Beyond</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">21 february, 2024</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <p class="text-secondary h6">
                            Explore the groundbreaking advancements in biotechnology and their potential to revolutionize healthcare, agriculture, and the environment. From CRISPR gene editing to mRNA vaccines, we'll delve into the latest biotech breakthroughs and their impact on society. Join us as we uncover the ethical considerations, regulatory challenges, and transformative potential of biotechnology in shaping the future of humanity.                        </p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
            <div class="col-3 p-2">
                <center class="mb-5">
                    <img class="border-rounded" src="media/blog/cbg2.png" height="100%" width="100%" alt="">
                    <div>
                        <h2>About Me</h2>
                        <hr class="hr">
                        <div>
                            <p class="text-secondary">My name is Kamrul Hasan. I am a Bsc. engineer of Computer Science. Provide a guide for dive into Tech industry.</p>
                        </div>
                        <div class="d-flex h4 gap-3 justify-content-center text-light">
                            <a href=""><ion-icon name="logo-twitter"></ion-icon></a>
                            <a href=""><ion-icon name="logo-facebook"></ion-icon></a>
                            <a href=""><ion-icon name="logo-linkedin"></ion-icon></a>
                            <a href=""><ion-icon name="logo-instagram"></ion-icon></a>
                        </div>
                    </div>
                </center>
                <center class="mt-5">
                    <h2>Featured posts</h2>
                    <hr class="hr">
                </center>
                <div class="my-5">
                    <div class="hero">
                        <img src="media/blog/4.jpg" height="100%" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>TechTide Insights: Navigating the Waves of Innovation</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">12 august, 2023</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
                <div class="my-5">
                    <div class="hero">
                        <img src="media/blog/5.jpg" height="100%" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>CodeCraft Chronicles: Crafting the Future of Software</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">21 january, 2024</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
                <div class="my-5">
                    <div class="hero">
                        <img src="media/blog/5.jpg" height="100%" width="100%" alt="">
                    </div>
                    <div class="mt-2 fs-5">
                        <h2>ByteBurst: Exploring the Digital Universe One Byte at a Time</h2>
                    </div>
                    <div class="mt-2 d-flex align-items-center h6">
                        <ion-icon name="stopwatch-outline" class="text-light bg-danger"></ion-icon>
                        <p class="mx-3 mt-3">21 may, 2024</p>
                        <ion-icon name="menu-outline" class="text-light bg-danger"></ion-icon>
                        <p class="ms-3 mt-3">Technology</p>
                    </div>
                    <div>
                        <button class="btn mt-3 bg-danger text-light rounded-0 fw-bold fs-6 d-flex align-items-center">Read more  <ion-icon class="ms-2 fw-bold" name="arrow-forward-outline"></ion-icon></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="foot">
            <div class="social-icon">
                <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                <a href=""><i class="fa-brands fa-instagram"></i></a>
                <a href=""><i class="fa-brands fa-twitter"></i></a>
                <a href=""><i class="fa-brands fa-linkedin-in"></i></a>
            </div>
            <div class="about">
                <a href="">Donation</a>
                <a href="">Research</a>
                <a href="">About me</a>
            </div>
            <div class="copyright">
                <p>© 2024 TechBakery - Published with Kamrul Hasan</p>
            </div>
        </div>
    </footer>
    <script>
$(document).ready(function() {
  // Handle click event on user icon
  $(".user-icon").click(function() {
    // AJAX call to fetch user data from PHP script
    $.ajax({
      url: "http://localhost/podcast/fetch_data.php", // Change this to the actual PHP script URL
      method: "GET",
      dataType: "json",
      success: function(response) {
        // Check if user data is empty
        if (response.length > 0) {
          // Take the first user data (you can modify this logic as needed)
          var user = response[0];
          var userDetailsHTML = "<p><strong>Username:</strong> " + user.name + "</p>";
          userDetailsHTML += "<p><strong>Email:</strong> " + user.email + "</p>";
          // Add more user details as needed

          // Populate modal with user information
          $("#userDetails").html(userDetailsHTML);
        } else {
          // Handle case when no user data is returned
          $("#userDetails").html("No user data available");
        }

        // Show the modal
        $("#userInfoModal").modal("show");
      },
      error: function(xhr, status, error) {
        console.error(error);
        // Handle error
      }
    });
  });
});
</script>





</body>
</html>