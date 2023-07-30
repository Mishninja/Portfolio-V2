<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creativity meets efficient problem solving. A Web Developer and Designer from Vancouver, B.C. and who loves building things with code.">
    <meta property="og:url" content="http://michellecheung.net" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Michelle Cheung's Web Development and Design Portfolio" />
    <meta property="og:description" content="Creativity meets efficient problem solving. A Web Developer and Designer from Vancouver, B.C. and who loves building things with code." />
    <meta property="og:image" content="images/bnr-img.svg" />

    <meta name="twitter:card" content="summary" />

    <meta property="twitter:url" content="http://michellecheung.net" />
    <meta property="twitter:type" content="website" />
    <meta property="twitter:title" content="Michelle Cheung's Web Development and Design Portfolio" />
    <meta property="twitter:description" content="Creativity meets efficient problem solving. A Web Developer and Designer from Vancouver, B.C. and who loves building things with code." />
    <meta property="twitter:image" content="images/logo-bg.png" />

    <title>Michelle's Portfolio</title>

    <link rel="icon" type="image/png" href="images/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
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
                <img src="images/logo-pink-gr.svg" alt="Logo" loading="lazy">
            </a>
        </div>
        <button class="gn-trigger">
            <div class="burger"><i class="fa-solid fa-chevron-down icon"></i></div>
        </button>
        <nav class="gn">
            <ul class="gn-items">
                <li><a href="#work" title="My work">Work</a></li>
                <li><a href="#about" title="About page">About</a></li>
                <li><a href="#connect" title="Contact me">Connect</a></li>
            </ul>
        </nav>
    </header>
    <main class="main">
        <section class="bnr bg-repeat">
            <div class="right col">
                <h1>Michelle Cheung</h1>
                <h3> Creativity meets efficient problem solving</h3>
                <h2>Web designer</h2>
                <div class="cta">
                    <a href="#about" title="About section">About Me</a>
                </div>
            </div>
            <div class="left col">
                <img src="images/bnr-img.svg" alt="Peace sign illustration">
            </div>
        </section>
        <section id="work" class="work">
            <h2 class="section-heading">Work</h2>
            <div class="container">
                <div class="card">
                    <div class="content-wrapper" data-aos="fade-right">
                        <div class="accordion-btn">
                            <h3>Chenko Studios Website Redesign</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h4 class="heading">Description</h4>
                                <p>Complete website redesign for chenko studios</p>
                                <h4 class="heading">Technology</h4>
                                <ul>
                                    <li>Figma</li>
                                    <li>UI/UX Principles</li>
                                    <li>UX research</li>
                                    <li>Squarespace</li>
                                </ul>
                            </div>
                            <div class="ftr">
                                <div class="web-link">
                                    <a href="chenko.html" title="chenko studios case study" target="_blank">
                                        <i class=" icon fa-regular fa-file"></i>
                                    </a>
                                </div>
                                <div class="git-link">
                                    <a href="https://www.chenkostudios.com/" title="chenko studios website" target="_blank">
                                        <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="display-vid " data-aos="fade-left">
                        <img class="image" src="images/chenko/chenko-mock.png" alt="Contact Form Mock Up" loading="lazy">
                    </div>

                </div>
                <div class="card">
                    <div class="display-vid" data-aos="fade-right">
                        <img class="image" src="images/studybuddy/study-buddy-mock.png" alt="Study Buddy Mock Up" loading="lazy">
                    </div>
                    <div class="content-wrapper" data-aos="fade-left">
                        <div class="accordion-btn">
                            <h3>Study Buddy Flashcards</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h4 class="heading">Description</h4>
                                <p>A flash card web app for studying. This web page was built using an object oriented approach
                                    and uses local storage, JSON and sessions.</p>
                                <h4 class="heading">Languages</h4>
                                <ul>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                                <h4 class="heading">Takeaways</h4>
                                <ul>
                                    <li>Learned Object Oriented Programming in JS.</li>
                                    <li>Allowed me to practice my HTML, CSS and JavaScript.</li>
                                </ul>
                            </div>
                            <div class="ftr">
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
                <div class="card reverse">
                    <div class="display-vid " data-aos="fade-left">
                        <img class="image" src="images/contactform/contac-form-mock.png" alt="Contact Form Mock Up" loading="lazy">
                    </div>
                    <div class="content-wrapper" data-aos="fade-right">
                        <div class="accordion-btn">
                            <h3>PHP Contact Form</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h4 class="heading">Description</h4>
                                <p>A reusable contact form for a portfolio or a local business. This contact form uses the
                                    PHPMailer class and Google reCaptcha to safely handle contact form inputs and emails. The
                                    form also has required fields to ensure users include all necessary information.</p>
                                <h4 class="heading">Languages</h4>
                                <ul>
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                    <li>PHPMailer</li>
                                    <li>Google reCaptcha</li>
                                </ul>
                                <h4 class="heading">Takeaways</h4>
                                <ul>
                                    <li>Became more familiar with conditional rendering in PHP.</li>
                                    <li>Practiced reading documentation to implement something new.</li>
                                </ul>
                            </div>
                            <div class="ftr">
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
                <div class="card supu">
                    <div class="display-vid" data-aos="fade-right">
                        <img class="image" loading="lazy" src="images/supu/supu-mockup.png" alt="Supu onboarding screen">
                    </div>
                    <div class="content-wrapper" data-aos="fade-left">
                        <div class="accordion-btn">
                            <h3>SUPU Prototype</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h4 class="heading">Description</h4>
                                <p>SUPU is an fictional noodle restaurant for which I created a prototype app for online
                                    ordering.</p>
                                <p>Logo Design: <a href="https://anitalam.ca/" title="Anita's portfolio" target="_blank">Anita
                                        Lam</a></p>
                                <h4 class="heading">Technology</h4>
                                <ul>
                                    <li>Figma</li>
                                    <li>UI/UX</li>
                                    <li>Design Principles</li>
                                </ul>
                                <h4 class="heading">Takeaways</h4>
                                <ul>
                                    <li>Application of UI/UX laws such as law of easing, law of context, and law of feedback.
                                    </li>
                                    <li>Familiarizing myself with Figma prototyping tools such as variants, components and
                                        grids.</li>
                                </ul>
                            </div>
                            <div class="ftr">
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
                <div class="card reverse">
                    <div class="display-vid" data-aos="fade-left">
                        <img class="image" src="images/beautyhub/beauty-hub-mock.png" alt="Beauty hub landing page mock ups" loading="lazy">
                    </div>
                    <div class="content-wrapper" data-aos="fade-right">
                        <div class="accordion-btn">
                            <h3>Beauty Hub Landing Page</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h4 class="heading">Description</h4>
                                <p>A hi-fidelity mock up for a landing page designed and prototyped on Figma.</p>
                                <p>Beauty Hub is a fictional small business focused on a clean beauty products. A minimal and almost sterile-looking design was chosen.</p>
                                <h4 class="heading">Technology</h4>
                                <ul>
                                    <li>Figma</li>
                                    <li>Photoshop</li>
                                </ul>
                                <h4 class="heading">Takeaways</h4>
                                <ul>
                                    <li>Mobile responsive design</li>
                                    <li>UI/UX design for delivering educational information</li>
                                    <li>Clean and DRY code</li>
                                </ul>
                            </div>
                            <div class="ftr">
                                <div class="web-link">
                                    <a href="https://www.figma.com/proto/CRlnVakcOS5rqxklXP6wZc/Beauty-Hub-Landing-Page-Mock-up?type=design&node-id=215-233&t=KyxoeKDGTxZHcqAD-1&scaling=scale-down&page-id=0%3A1&starting-point-node-id=215%3A233&show-proto-sidebar=1&mode=design" title="Beauty Hub Prototype" target="_blank">
                                        <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="display-vid" data-aos="fade-right">
                        <img class="image" src="images/frogfacts/frog-mock.png" alt="Frog facts landing page mock ups" loading="lazy">
                    </div>
                    <div class="content-wrapper" data-aos="fade-left">
                        <div class="accordion-btn">
                            <h3>Frog Facts Page</h3>
                            <i class="fa-solid fa-chevron-down icon"></i>
                        </div>
                        <div class="content">
                            <div class="description">
                                <h4 class="heading">Description</h4>
                                <p>The main purpose of this website is to educate users about frogs and how climate change is affecting them. </p>
                                <p>The website is mobile responsive and uses a number of plugins to make the information easy to read. A cohesive color scheme reflects the topic and theme of the website.</p>
                                <h4 class="heading">Technology</h4>
                                <ul>
                                    <li>jQuery/JS</li>
                                    <li>Gridder</li>
                                    <li>Isotope/Masonry</li>
                                    <li>Accordion</li>
                                </ul>
                                <h4 class="heading">Takeaways</h4>
                                <ul>
                                    <li>How to prototype in Figma</li>
                                    <li>Designing on a grid</li>
                                    <li>Creating effective call to actions above the fold</li>
                                </ul>
                            </div>
                            <div class="ftr">
                                <div class="web-link">
                                    <a href="https://github.com/Mishninja/Mobile-Responsive-Frog-Awareness-Website/tree/main/frog-fact-website" title="link to more details for Beauty Hub Landing Page Mock Up">
                                        <i class="icon fa-solid fa-arrow-up-right-from-square fa-xl"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <h2 class="section-heading">About Me</h2>
            <div class="panel">
                <div class="img bg-repeat me" data-aos="fade-right">
                    <img src="images/about/pp.jpg" alt="Photo of Michelle">
                </div>
                <div class="content" data-aos="fade-left">
                    <p>I am a web designer with a passion for creating impactful products for my clients. My research-driven design process allows me to create tailored solutions for businesses.</p>
                    <p>I am looking for opportunities where I can use my creativity and problem-solving skills to contribute to meaningful projects. My technical skillset consists of conducting user research, wireframing, prototyping, and user testing.</p>
                    <p>In my free time, I enjoy playing Ultimate Frisbee, baking cookies and pastries, and crocheting cat sweaters.</p>
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
                    <i class="fa-brands fa-github"></i></a>
            </div>
        </div>
    </footer>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js'></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.min.js" integrity="sha256-eTyxS0rkjpLEo16uXTS0uVCS4815lc40K2iVpWDvdSY=" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/4a13e67f54.js" crossorigin="anonymous"></script>
    <script src="scripts/main.js"></script>
    <script src="scripts/scroll-lock.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>