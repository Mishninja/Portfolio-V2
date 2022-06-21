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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

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
                        <img class="image" src="images/studybuddy/study-buddy-mock.jpg" alt="Study Buddy Mock Up" loading="lazy">
                        <video autoplay loop class="vid" poster="images/studybuddy/study-buddy-mock.jpg">
                            <source src="media/studybuddy/study-buddy-video.mp4" type="video/mp4">
                            "Sorry your browser does not support video."
                        </video>
                    </div>
                    <div class="text">
                        <div class="accordion-btn">
                            <h3>Study Buddy Flashcards</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <div class="blurb">
                                    <p>A simple web app that allows you to make flashcards for studying. This project was a steep learning curve
                                        for me; however, after completing it, I am now familiar with concepts such as Object Oriented
                                        Programming, JSON objects, and sessions.</p>
                                    <p>I stored each question as a JSON object in local storage using JSON.stringify(). Each object had an id,
                                        question, and answer property. Each time a new question is added, a new instantiation of the question
                                        object is created and is dynamically added to the page.</p>
                                </div>
                                <div class="ftr">
                                    <div class="skills">
                                        <h4>Skills: HTML, CSS, JS</h4>
                                    </div>
                                    <div class="links">
                                        <div class="web-link">
                                            <a href="https://studybuddy.michellecheung.net/" title="link to Study Buddy web app" target="_blank">
                                                <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                        <div class="git-link">
                                            <a href="https://github.com/Mishninja/Study-Buddy-Flashcards" title="link to Study Buddy Github" target="_blank">
                                                <i class="icon fa-brands fa-github fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card reverse">
                    <div class="display-vid">
                        <img class="image" src="images/contactform/contac-form-mock.png" alt="Contact Form Mock Up" loading="lazy">
                        <video autoplay loop class="vid" poster="images/contactform/contac-form-mock.png">
                            <source src="media/contactform/contact-form-mock.mp4" type="video/mp4">
                            "Sorry your browser does not support video."
                        </video>
                    </div>
                    <div class="text">
                        <div class="accordion-btn">
                            <h3>PHP Contact Form</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <div class="blurb">
                                    <p>A reusable contact form for a portfolio or a local business. This contact form uses the PHPMailer class
                                        and Google reCaptcha to safely handle contact form inputs and emails. The form also has required fields
                                        to ensure users include all necessary information.</p>
                                    <p>My main takeaways from this project are a stronger understanding of conditional rendering in PHP and how
                                        to implement the PHP Mailer class. I reused the code to implement my own contact form below. Check it
                                        out down below or on my GitHub.</p>
                                </div>
                                <div class="ftr">
                                    <div class="skills">
                                        <h4>Skills: HTML, CSS, JS, PHP</h4>
                                    </div>
                                    <div class="links">
                                        <div class="web-link">
                                            <a href="https://contact.michellecheung.net/index.php" title="link to contact page demo" target="_blank">
                                                <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                        <div class="git-link">
                                            <a href="https://github.com/Mishninja/Contact-Form" title="link to contact form on Github" target="_blank">
                                                <i class="icon fa-brands fa-github fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="display-vid">
                        <img class="image" loading="lazy" src="images/supu/supu-mockup.png" alt="Supu onboarding screen">
                        <video class="vid" autoplay loop class="vid" poster="images/supu/supu-mockup.png" loading>
                            <source src="media/supu/supu-mock.mp4" type="video/mp4">
                            "Sorry your browser does not support video."
                        </video>
                    </div>
                    <div class="text">
                        <div class="accordion-btn">
                            <h3>SUPU Prototype</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <div class="blurb">
                                    <p>SUPU is an fictional noodle restaurant for which I created a prototype app for online ordering. The project was created on Figma and applies several UI/UX design principles, such as the law of easing, law of context, and law of feedback. This project introduced me to the powerful prototyping and design capabilities of Figma such as components, grids, and variants.</p>
                                    <p>Logo Design: <a href="https://anitalam.ca/" title="Anita's portfolio" target="_blank">Anita Lam</a></p>
                                </div>
                                <div class="ftr">
                                    <div class="skills">
                                        <h4>Skills: Figma, UI/UX, Design principles</h4>
                                    </div>
                                    <div class="links">
                                        <div class="web-link">
                                            <a href="https://www.figma.com/proto/vxwNdOycT3XDnZA1CF7ubA/SUPU-prototype?node-id=2%3A2&starting-point-node-id=2%3A2&scaling=scale-down" title="link to Figma prototype" target="_blank">
                                                <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <a href="https://github.com/Mishninja" target="_blank" title="link to my Github">
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