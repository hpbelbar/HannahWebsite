<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://unpkg.com/typed.js@2.0.15/dist/typed.umd.js"></script>
    
</head>
<body>
    <header class="header">
        <a href="#" class="logo">hannah.</a>

        <nav class="navbar">
            <a href="#Home" style="--i: 1" class="active">Home</a>
            <a href="#About" style="--i: 2">About</a>
            <a href="#Services" style="--i: 3">Services</a>
            <a href="#Skills" style="--i: 4">Skills</a>
            <a href="#Projects" style="--i: 5">Projects</a>
            <a href="#Blog" style="--i: 6">Blog</a>
            <a href="#Contact" style="--i: 7">Contact</a>
        </nav>
    </header>
    <section class="home" id="Home"> 
        <div class="home-content">
            <h3>Hello, It's Me</h3>
            <h1>Hannah Belbar</h1>
            <h3>And I'm a <span class="text"></span></h3>
            <p>I'm a 2nd Year College student majoring in Bachelor of Science in Information and Technology at National University Fairview</p>

            <div class="home-sci">
                <a href="https://www.facebook.com/akosi.awit.9/" style="--i: 6" target="_blank"> <i class='bx bxl-facebook'></i></a>
                <a href="https://www.instagram.com/hahahannahbee/?next=%2F" target="_blank" style="--i: 7"> <i class='bx bxl-instagram'></i></a>
                <a href="https://www.linkedin.com/in/hannah-belbar-b95903252/" target="_blank" style="--i: 8"> <i class='bx bxl-linkedin'></i></a>
                <a href="https://github.com/hpbelbar" target="_blank" style="--i: 9"> <i class='bx bxl-github'></i></a>
                <a href="" target="_blank" style="--i: 10"> <i class='bx bxl-twitter'></i></a>
            </div>
            <a href="Hannah Psalm Belbar.pdf" target="_blank" class="btn-box">Download CV</a>
        </div>
        <span class="home-imgHover"></span>
    </section>

    <section class="about" id="About">
        <div class="about-img">
            <img src="IMG.JPG" alt="Profile Image">
        </div>
        <div class="about-text">
            <h2>About<span>Me</span></h2>
            <h4>2nd Year IT Student!</h4>
            <p>I'm currently a 2nd Year college student at National University Fairview,
                 majoring in Bachelor of Science in Information and Technology. I have basic 
                 knowledge of coding languages such as Python, HTML, CSS, and Javascript. 
                 I also have experience in designing and creating database management systems.</p>

                 <div class="tab-titles">
                    <p class="tab-links active-link" onclick="opentab('skills')">Skills</p>
                    <p class="tab-links" onclick="opentab('experience')">Experience</p>
                    <p class="tab-links" onclick="opentab('education')">Education</p>
                </div>
            
                <div class="tab-contents active-tab" id="skills">
                    <ul>
                        <li><span>UI/UX</span><br>Designing Web/App Interface</li>
                        <li><span>Web Development</span><br>Web App Development</li>
                        <li><span>App Development</span><br>Building Android/iOS apps</li>
                    </ul>
                </div>
            
                <div class="tab-contents" id="experience">
                    <ul>
                        <li><span>July 2023 - August 2023</span><br>Sales Assistant at Ace Builders Fairview</li>
                        <li><span>December 2022</span><br>Sales Clerk at Surplus</li>
                        <li><span>December 2020 - July 2021</span><br>Staff at Gangnam Korean Mart</li>
                        <li><span>2020 - 2019</span><br>Vice President - Supreme Student Government</li>
                        <li><span>2019 - 2018</span><br>Grade 9 Representative - Supreme Student Government</li>
                        <li><span>2017 - 2016</span><br>Grade 7 Representative - Supreme Student Government</li>
                        <li><span>2019 - 2015</span><br>Children Ministry Teacher and Coordinator - Jesus Centered Church</li>

                    </ul>
                </div>
            
                <div class="tab-contents" id="education">
                    <ul>
                        <li><span>August 2022 - Present</span><br>National University Fairview</li>
                        <li><span>September 2020 - 2022</span><br>Our Lady of Fatima University</li>
                        <li><span>2020 - 2017</span><br>West Fairview High School</li>
                        <li><span>2017 - 2016</span><br>Sta. Lucia High School</li>
                        <li><span>2016 - 2015</span><br>Hope Integrated School</li>
                        <li><span>2015 - 2012</span><br>Soter Christian Academy</li>

                    </ul>
                </div>
                 
           
        </div>
    </section>

    <section class="services" id="Services">
        <div class="container">
            <h1 class="sub-title">My<span>Services</span></h1>
            <div class="services-list">  
                <div>
                    <i class='bx bx-desktop' style='color:#f4e810' ></i>
                    <h2>Graphic Design</h2>
                    <p>I could offer graphic design services for projects, presentations, or social media content. Create visually appealing materials for events or organizations on campus.</p>
                    <a href="#" class="read">Learn More</a>
                </div>
                <div>
                    <i class='bx bxs-video-plus' style='color:#f8ec0f'  ></i>
                    <h2>Video Editing</h2>
                    <p>From compelling corporate presentations to engaging social media content, I could transform raw footage into polished masterpieces,seamlessly blending creativity with precision, ensuring your message captivates your audience </p>
                    <a href="#" class="read">Learn More</a>
                </div>
                <div>
                    <i class='bx bxl-meta' style='color:#f8ec11' ></i>
                    <h2>Social Media Management</h2>
                    <p>Assist individuals or organizations with managing their social media accounts. Offer services such as content scheduling, community engagement, and growth strategies.</p>
                    <a href="#" class="read">Learn More</a>
                </div>
                <div>
                    <i class='bx bx-repost' style='color:#f8ec11'  ></i>
                    <h2>Content Creation</h2>
                    <p>I could provide content creation services such as writing blog posts, creating social media content, or producing videos. Offer your skills in photography, videography, or graphic design for various projects.</p>
                    <a href="#" class="read">Learn More</a>
                </div>
            </div>
        </div>
    </section> 
    <section class="skills" id="Skills"></section>
<h1 class="sub-title">My<span>Skills</span></h1>

<!------SKILL SECTION------>
<div class="main-section">
    <div class="container">
     
      <div class="width-50">
        <div class="skill">
          <b>HTML</b>
          <span>95%</span>
          <div>
            <span style="width:95%"></span>
          </div>
        </div>
        <div class="skill">
          <b>CSS</b>
          <span>91%</span>
          <div>
            <span style="width:91%"></span>
          </div>
        </div>
        <div class="skill">
          <b>JavaScript</b>
          <span>85%</span>
          <div>
            <span style="width:85%"></span>
          </div>
        </div>
        <div class="skill">
          <b>React js</b>
          <span>79%</span>
          <div>
            <span style="width:79%"></span>
          </div>
        </div>
      </div>
     

        <div class="portfolio" id="Projects">
            <div class="main-text" id="project">
                <h2>My<span>Portfolio</span></h2>
                <div class="work-list">
                    <div class="work">
                        <img src="work1.jpg">
                        <div class="layer">
                            <h3>Social Media Business Promotion</h3>
                            <p>Excited to share my latest project – crafting a delectable baking 
                                menu for a talented baker's social media promotion!</p>
                            <a href="#"><i class='bx bx-link-external' style="color: green;"></i></a>
                        </div>
                    </div>
                    <div class="work">
                        <img src="work2.jpg">
                        <div class="layer">
                            <h3>Infographics</h3>
                            <p>Reflecting on my senior high project, I dove into the fascinating world 
                                of molecules, bringing them to life through captivating infographics.
                                Each design was a visual journey, simplifying complex concepts and making chemistry accessible.</p>
                            <a href="#"><i class='bx bx-link-external' style="color: green;"></i></a>
                        </div>
                </div>
                <div class="work">
                    <img src="work3.jpg">
                    <div class="layer">
                        <h3>Digital Poster</h3>
                        <p>Tn my recent project, I ventured into the realm of digital design, crafting 
                            visually engaging infographics that conveyed information seamlessly.</p>
        
                            <a href="#"><i class='bx bx-link-external' style="color: green;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   
    <div id="Certificate">
        <div class="container">
            <h4 class="sub-title">My<span>Certificates</span></h4>
            <div class="certs-list">
                <div>
                    <i class='bx bxs-certification'></i>
                    <h2>IBM Training</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae pulvinar nibh.</p>
                    <a href="cert1.pdf" target="_blank">See Certificate</a>

                </div>
                <div>
                    <i class='bx bxl-linkedin-square'></i>
                    <h2>LinkedIn Learning</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae pulvinar nibh.</p>
                    <a href="cert2.pdf" target="_blank">See Certificate</a>
                </div>
                <div>
                    <i class='bx bxl-linkedin-square'></i>
                    <h2>LinkedIn Learning</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae pulvinar nibh.</p>
                    <a href="cert3.pdf" target="_blank">See Certificate</a>
                </div>
            </div>
        </div>
    </div>

    <section class="blog" id="Blog"> 
    <div id="Blog">
        <div class="container">
            <h4 class="sub-title">My<span>Blog</span></h4>
            <div class="blog">

                <div class ="blog-container">
                    <div class="blog-box">
                        <div class="blog-img">
                    </div>
                    <div class="blog-text">
                        <span>January 17, 2024  / Mobile Technology</span>
                        <a href ="https://www.macrumors.com/roundup/iphone-16/" target="_blank" class="blog-title">All the rumors about the iPhone 16, coming in 2024.</a>
                        <p>Apple just launched the 2023 iPhone 15 and iPhone 15 Pro models, but as is typical with rumors, analysts, 
                            leakers, and others with insider information are already looking to the 2024 iPhone 16 lineup </p>
                            <a href="https://www.macrumors.com/roundup/iphone-16/" target="_blank">Read More</a>
                    </div>
                </div>
                <div class="blog-box">
                    <div class="blog-img">
                    
                </div>
                <div class="blog-text">
                    <span>January 18, 2024 / Technology</span>
                    <a href ="https://tech.co/news/what-is-galaxy-ai" target="_blank" class="blog-title">What Is Galaxy AI? Samsung’s New AI System Explained.</a>
                    <p>Samsung launched a wide range of new products at its Unpacked 2024, but the biggest announcement wasn't about a smartphone, tablet, or any other physical device; it was the brand-new AI system.
</p>
                        <a href="https://tech.co/news/what-is-galaxy-ai" target="_blank">Read More</a>
                </div>
            </div>
            <div class="blog-box">
                <div class="blog-img">
                    
            </div>
            <div class="blog-text">
                <span>January 13, 2024 / Technology</span>
                <a href ="https://www.cnet.com/tech/home-entertainment/are-transparent-televisions-the-next-big-thing/" target="_blank" class="blog-title">Are Transparent TVs the Next Big Thing?.</a>
                <p>At CES 2024, both LG and Samsung debuted big screen transparent TVs. Like something out of science fiction, these are absolutely as crazy as they sound. When the TVs is off, it's like it's no longer there. Not invisible exactly, </p>
                    <a href="https://www.cnet.com/tech/home-entertainment/are-transparent-televisions-the-next-big-thing/" target="_blank">Read More</a>
            </div>
        </div>

    <section class="contact" id="Contact">
        <div class="contact-text">
            <h2>Contact <span>Me</span></h2>
            <h4>Let's work Together</h4>
            <p>Ready to create something amazing together? Whether you're seeking my expertise or eye-catching services, 
                I'm here for it! Feel the urge to connect? Drop me a message on any of my social media accounts or 
                use the handy contact form – let's bring your ideas to life!  </p>
                <div class="contact-list">
                    <li><i class='bx bxs-send' style='color:#ffd915'  ></i> hpbelbar@gmail.com</li>
                    <li><i class='bx bxs-phone' style='color:#ffd915'  ></i> 09226668003</li>
                </div>
                <div class="contact-icons">
                    <a href="https://www.facebook.com/akosi.awit.9/" target="_blank"> <i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-twitter'></i></a>
                    <a href="https://www.instagram.com/hahahannahbee/?next=%2F" target="_blank"><i class='bx bxl-instagram'></i></a>
                    <a href="https://www.linkedin.com/in/hannah-belbar-b95903252/" target="_blank"><i class='bx bxl-linkedin'></i> </a>
                    <a href="https://github.com/hpbelbar" target="_blank"></a><i class='bx bxl-github'></i></a>
        </div>
        <a href="#About" download class="download-button">More About Me</a>

        </div>

        <div class="contact-form">
            <form action="">
                <input type="" placeholder="Name" required>
                <input type="email" placeholder="Enter Your Email" required>

                <input type="" placeholder="Enter Your Subject">
                <textarea name="" id="" cols="40" rows="10" placeholder="Enter Your Message" required></textarea>
                <input type="submit" value="Submit" class="send">
            </form>
        </div>
    </section>

    <div class="top">
        <a href="#Home"><i class='bx bxs-up-arrow-square'></i></a>
    </div>

        <div class="copyright">
            <p>Copyright 2024 © by Hannah Psalm Belbar All Rights Reserved.<i class='bx bxs-heart'></i></p>
        </div>
       
    
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
    <script src="main.js"></script>
</body>
</html>