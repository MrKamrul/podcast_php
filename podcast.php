<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        header{
            height: 650px;
            width: 100%;
            background-position: center;
        }
        .bg{
            background-position: center;
            height: 100%;
            
        }
        .bg-inner{
            height: 500px;
            width: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .bg-inner h1{
            color: white;
            font-weight: 700;
            font-size: 50px;
            
        }
        main{
            margin-top: 70px;
            margin-left: 100px;
        }
        .pod-info button{
            padding: 10px;
            border-radius: 10px;
            font-weight: 700;
            font-size: medium;
            border-color: blueviolet;
        }
        .pod-info button:hover{
            border-color: black;
            color: blueviolet;
        }
        .pod-info{
            margin-left: 40px;
            margin-right: 100px;
        }
        .pod-info h3{
            color: blueviolet;
        }
        .podcast1 a{
            text-decoration: none;
            display: flex;
            color: black;
            justify-content: center;
            align-items: center;
            margin-bottom: 100px;
            /* border: 1px solid black; */
            padding: 20px;
            border-radius: 20px;
        }
        .podcast1 a:hover{
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
        nav{
            background-color: rgb(35, 35, 41);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
        }

        .nav-brand a{
            font-family: "Roboto", sans-serif;
            font-weight: 900;
            font-style: italic;
            font-size: xx-large;
            text-decoration: none;
            color: white;
            margin-left: 50px;
        }
        .nav-list{
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 5px;
        }
        .nav-item{
            list-style-type: none;
        }
        .nav-btn{
            border: none;
            background-color: rgb(32, 89, 245);
            font-size: 15px;
            color: white;
            padding: 3px 10px;
            font-weight: 700;
            margin-right: 40px;
        }
        .nav-item a{
            font-weight: 700;
            text-decoration: none;
            color: white;
            margin-right: 40px;
            font-size: 15px;
        }
        .user{
            font-size: 30px;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <div class="nav-brand">
                <a href="index.html">TechBakery</a>
            </div>
            <div class="nav">
                <ul class="nav-list">
                    <li class="nav-item"><a href="podcast.php">Podcast</a></li>
                    <li class="nav-item"><a href="blog.php">Blog</a></li>
                    <li class="nav-item"><a href="">About</a></li>
                    <li class="nav-item"><a href="">Contact</a></li>
                    <li class="nav-item"><button type="button" class="bg-dark border-0 text-white" data-bs-toggle="modal" data-bs-target="#exampleModal"><ion-icon class="user" name="person-circle-outline"></ion-icon></button></li>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                              ...
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                          </div>
                        </div>
                      </div>
                </ul>
            </div>
        </nav>
        <div class="bg" style="background-image:url('media/frontpage/Gear-Podcast-Hearing-Loss-1279654034.jpg');">
            <center>
                <div class="bg-inner">
                    <h1>Unlocking Tech's Untold Stories</h1>
                </div>
            </center>
        </div>
    </header>
    <main>
        <div class="podcast">
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd1.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>The Augmented Reality</h3>
                    <h2>Virtual Realms: Exploring the Boundaries of Augmented Reality</h2>
                    <h5>by Kamrul Hasan</h5>
                    <p>Delve into the immersive world of augmented reality (AR), where digital overlays enhance our physical environment. Discover how AR is revolutionizing industries, from gaming to education and healthcare, by blending virtual elements with real-world experiences. Explore the potential applications of AR in training simulations, interactive storytelling, and remote assistance, pushing the boundaries of innovation and human-computer interaction..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd2.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Big Data Analysis</h3>
                    <h2>Data Deluge: Riding the Wave of Big Data Innovation</h2>
                    <h5>by MR. Israfil hossain</h5>
                    <p>Dive into the vast ocean of big data and its transformative impact on industries worldwide. Explore how organizations harness massive datasets to derive valuable insights, driving decision-making, and innovation. Uncover the technologies powering data collection, storage, and analysis, from machine learning algorithms to cloud computing infrastructure. Navigate the challenges of data privacy, security, and ethical considerations in this data-driven era, where opportunities abound for those who can ride the wave of big data innovation..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd3.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Cloud Computing</h3>
                    <h2>Cloud Chronicles: Navigating the Skies of Cloud Computing</h2>
                    <h5>Embark on a journey through the clouds and explore the transformative power of cloud computing. Learn how cloud services enable organizations to scale infrastructure, deploy applications, and innovate at unprecedented speed. Discover the key players in the cloud industry and the diverse array of services they offer, from infrastructure as a service (IaaS) to software as a service (SaaS). Navigate the complexities of cloud migration, governance, and security, as businesses embrace the agility and flexibility of the cloud to drive digital transformation..</h5>
                    <p></p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd4.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Automation system</h3>
                    <h2>Robot Revolution: Embracing the Age of Automation</h2>
                    <h5>by Istiak Hosen Shihab</h5>
                    <p>Witness the dawn of a new era as robots revolutionize industries and redefine the future of work. Explore the latest advancements in robotics, from humanoid robots to autonomous drones, and their applications across manufacturing, healthcare, agriculture, and beyond. Examine the societal implications of automation, including job displacement, ethical considerations, and the potential for human-robot collaboration. Embrace the opportunities presented by the robot revolution, as businesses and individuals adapt to a rapidly changing landscape shaped by advances in artificial intelligence and robotics technology..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd5.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Tech Industry</h3>
                    <h2>Tech Titans Unveiled: Stories Behind Industry Giants</h2>
                    <h5>by Abdullah Bin Kashem Bhuiyan</h5>
                    <p>Peer behind the curtains of tech giants and uncover the stories of visionaries who shaped the digital landscape. From humble beginnings in garages to global dominance, explore the rise of companies like Apple, Google, Microsoft, and Amazon. Learn from their successes, failures, and strategic maneuvers that propelled them to the forefront of innovation. Examine the impact of their products and services on society, economy, and culture, as these tech titans continue to shape our digital future..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd6.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Ethical Hacking</h3>
                    <h2>Hacking Horizons: Journey into the World of Ethical Hacking</h2>
                    <h5>by Ariful Rahman Shifat</h5>
                    <p>Embark on a captivating journey into the world of ethical hacking, where white-hat hackers defend against cyber threats and vulnerabilities. Explore the techniques and tools used by ethical hackers to identify and mitigate security risks, from penetration testing to vulnerability assessments. Learn about the importance of cybersecurity in safeguarding critical infrastructure, financial systems, and personal data in an increasingly connected world..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd7.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Tech Industry</h3>
                    <h2>Tech Trends 202X: Predicting the Next Wave of Innovation</h2>
                    <h5>by Tanjim Ahmed Pasha</h5>
                    <p>Peer into the crystal ball of technology and forecast the next wave of innovation that will shape the decade ahead. Explore emerging trends in artificial intelligence, quantum computing, biotechnology, and more, as pioneers push the boundaries of what's possible. Examine the potential implications of these technologies on industries, economies, and societies worldwide, from healthcare and transportation to entertainment and beyond. Join the conversation as experts speculate on the future of technology and its transformative impact on our lives in the years to come..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd8.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Tech Industry</h3>
                    <h2>Future of Work: Adapting to the Digital Workplace</h2>
                    <h5>by Jhankar Mahbub</h5>
                    <p>Navigate the evolving landscape of work in the digital age, where remote collaboration, automation, and flexibility redefine traditional notions of employment. Explore the trends shaping the future of work, from remote work and gig economy to artificial intelligence and digital skills training. Learn about the challenges and opportunities presented by the digital workplace, including workforce diversity, mental health, and work-life balance. Discover strategies for organizations and individuals to adapt and thrive in a rapidly changing environment, as the future of work unfolds before our eyes..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd9.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Bio Technology</h3>
                    <h2>BioTech Breakthroughs: Revolutionizing Healthcare and Beyond</h2>
                    <h5>by SOmeone Biotech specialist</h5>
                    <p>Explore the frontier of biotechnology and its transformative impact on healthcare, agriculture, and the environment. Discover the latest breakthroughs in gene editing, regenerative medicine, and synthetic biology, as scientists unlock the secrets of life itself. Learn about the potential applications of biotechnology in curing diseases, increasing food security, and mitigating climate change. Delve into the ethical considerations surrounding biotech research and the regulatory frameworks governing its use, as humanity harnesses the power of biology to address some of the most pressing challenges of our time..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            <div class="podcast1">
                <a href="">
                    <div><img src="media/podcast/pd10.png" height="200px" width="300px" alt=""></div>
                    <div class="pod-info">
                    <h3>Global Digitalization</h3>
                    <h2>Smart Cities: Building Tomorrow's Urban Landscapes</h2>
                    <h5>by Kamrul Hasan</h5>
                    <p>Journey into the cities of the future, where technology and innovation converge to create smarter, more sustainable urban environments. Explore the concept of smart cities and the technologies driving their development, from IoT sensors and data analytics to renewable energy and autonomous transportation. Learn about the potential benefits of smart city initiatives, including improved efficiency, enhanced quality of life, and reduced environmental impact. Discover the challenges of implementing smart city solutions, from privacy concerns to digital divide, as cities around the world strive to build a better tomorrow for their citizens..</p>
                    <button><ion-icon name="play-outline"></ion-icon> PLAY EPISODE</button>
                </div>
                </a>
            </div>
            
        </div>
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