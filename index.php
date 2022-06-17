<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Michelle's Portfolio</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/media-queries.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-50W90RK4EE"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-222416771-1');
        gtag('config', 'G-50W90RK4EE');
    </script>

</head>

<body>
    <header class="header">
        <div class="logo">
            <a class="logo-link" href="index.html" title="Home Page">
                <img src="images/logo-white.svg" alt="Logo">
            </a>
        </div>
        <button class="gn-trigger">
            <div class="burger"></div>
        </button>
        <nav class="gn">
            <ul class="gn-items">
                <li><a href="#work" title="work">Work</a></li>
                <li><a href="#about" title="About page">About</a></li>
                <li><a href="#connect" title="Contact me">Connect</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="bnr bg-repeat">
            <div class="left col">
                <div><img class="birds" src="images/birdline-teal.png"></div>
                <div><img class="birds-even" src="images/birdline-teal.png"></div>
                <div><img class="birds" src="images/birdline-teal.png"></div>
                <div><img class="birds-even" src="images/birdline-teal.png"></div>
            </div>
            <div class="right col">
                <h1>Michelle Cheung</h1>
                <h3> Creativity meets efficient problem solving</h3>
                <h2>Front-end developer and web designer</h2>
                <div class="cta">
                    <a href="#about" title="About section">About Me</a>
                </div>
            </div>
        </section>
        <section id="work" class="work">
            <h2 class="section-heading">Work</h2>
            <div class="container">
                <div class="card">
                    <div class="display-vid">
                        <video autoplay loop class="vid" poster="images/studybuddy/study-buddy-mock.jpg">
                            <source src="media/studybuddy/study-buddy-video.mp4" type="video/mp4">
                            "Sorry your browser does not support video."
                        </video>
                    </div>
                    <div class="accordion-btn">
                        <h3>Study Buddy Flashcards</h3>
                        <i class="fa-solid fa-chevron-down icon"></i>
                    </div>
                    <div class="content">
                        <div class="description">
                            <div class="blurb">
                                <p>A simple web app that allows you to make flashcards for studying. This project was a steep learning curve for me; however, after completing it, I am now familiar with concepts such as Object Oriented Programming, JSON objects, and sessions.</p>
                                <p>I stored each question as a JSON object in local storage using JSON.stringify(). Each object had an id, question, and answer property. Each time a new question is added, a new instantiation of the question object is created and is dynamically added to the page.</p>
                            </div>
                            <div class="ftr">
                                <div class="skills">
                                    <h4>Skills: HTML, CSS, JS</h4>
                                </div>
                                <div class="links">
                                    <div class="web-link">
                                        <a href="#" title="link to Study Buddy web app">
                                            <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                        </a>
                                    </div>
                                    <div class="git-link">
                                        <a href="#" title="link to Study Buddy Github">
                                            <i class="icon fa-brands fa-github fa-xl"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <h2 class="section-heading">About</h2>
            <div class="panel about-me">
                <div class="img">
                    <img src="images/pp.png" alt="Photo of Michelle">
                </div>
                <div class="content">
                    <p>I am currently a student enrolled in the BCIT New Media and Web Development program. I initially dipped my toes into the computer sciences disciplines while completing my bachelor in science at UBC. I quickly realized that I was able to combine the satisfaction of problem solving with my passion for creating things as a front end developer.</p>
                </div>
            </div>
            <div class="get-to-know">
                <h3>Get to know me!</h3>
                <p>Let's play a game! Can you guess which statements are true or false?</p>
                <div class="terms">
                    <div class="tile rev" data-group="like">Ultimate Frisbee</div>
                    <div class="tile" data-group="like">Yoga</div>
                    <div class="tile rev" data-group="like">Skincare</div>
                    <div class="tile" data-group="dislike">The dentist</div>
                    <div class="tile rev" data-group="dislike">The dairy industry</div>
                    <div class="tile" data-group="dislike">Orange fruit</div>
                </div>
            </div>
        </section>
        <section class="connect" id="connect">
            <?php include 'contact.php'; ?>
        </section>
    </main>
    <footer class="footer">
        <div class="content">
            <p class="copyright">Michelle Cheung &copy; 2022</p>
            <p class="pipe">|</p>
            <div class="socials">
                <a href="https://www.linkedin.com/in/michelle-cheung-vancouver" title="link to my Linkedin profile">
                    <i class="fa-brands fa-linkedin-in"></i></a>
                <a href="https://github.com/Mishninja" title="link to my Github">
                    <i class="fa-brands fa-github"></i></i></a>
            </div>
        </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="https://kit.fontawesome.com/4a13e67f54.js" crossorigin="anonymous"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/scroll-lock.js"></script>

</body>

</html>