<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Open+Sans:wght@300&family=Pacifico&family=Roboto:wght@300;400&display=swap" rel="stylesheet">

<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    
    <link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>


    <title>Solicode Learning</title>
</head>
<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<body>
    
        <div class="nav1">
            <div class="left">
                <ul class="nav-menu1">
                    <li class="nav-item1">
                        <i class="fas fa-phone-alt"> </i>
                        <a href="tel:0708700319"> 0708700319</a>
                    </li>

                    <li class="nav-item1">
                        <i class="far fa-envelope"> </i>
                        <a href="#"> Contact.solicode@gmail.com</a>
                    </li>
                </ul>
            </div>
            <ul class="nav-menu1">
                <div class="center">
                    <li class="nav-item1">
                        <i class="icon fas fa-user"></i>
                        <a href="login.php">Sign In</a>
                    </li>

                    <li class="nav-item1">
                        <i class="fas fa-sign-in-alt"></i>
                        <a href="register.php">Register</a>
                    </li>
                    <li class="nav-item1">
                        <i class="fas fa-sign-in-alt"></i>
                        <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>

                    </li>
                </div>
                <div class="vl"></div>
                    <div class="right">
                    <li class="nav-item1">
                        <a href="#">
                    <i class="fab fa-twitter"></i></a>
                    </li>

                    <li class="nav-item1">
                        <a href="#">
                    <i class="fab fa-instagram"></i></a>
                    </li>

                    <li class="nav-item1">
                        <a href="#">
                    <i class="fab fa-linkedin"></i></a>
                    </li>

                    <li class="nav-item1">
                        <a href="#">
                            <i class="fab fa-github"></i></a>
                    </li>
                    
                </div>
                </ul>
            </div>
        </div>
        <header class="header">
           
                   
               
        <nav class="navbar">
            <div class="logo">
                <a href="#">Solicode<span class="design"> Online</span></a>
            </div>  
            <ul class="nav-menu">
              
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="courses.html" class="nav-link">Courses</a>
                </li>


                <li class="nav-item">
                    <a href="teachers.html" class="nav-link">Techears</a>
                </li>



                <li class="nav-item">
                    <a href="blog.html" class="nav-link">Blog</a>
                </li>

                <li class="nav-item">
                    <a href="index.php" class="nav-link">About</a>
                </li>

               
            </ul>
            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div> 
            
        </nav> 
    </header>
  
    
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>

      <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
              <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2020/12/slider-3.jpg" alt="image" />
              <div class="img1">
                <p>Learn Anything Online</p>
                <h1>Online Study Is Now Much Easier</h1>
                <div class="buttons">
                    <a href="courses.html" class=" first">VIEW COURSES</a>
                    <a href="blog.html" class="second">LEARN MORE</a>
                </div>
              </div>
            
          </div>
          <div class="swiper-slide">
              
              <img src="http://learnify.axiomthemes.com/wp-content/uploads/revslider/learnify/learnify_slide-01-copyright.jpg" alt="image" />

              <div class="img2">
                <p>Hight Quality Courses</p>
                <h1>distance learning is the future of education</h1>
                <div class="buttons2">
                    <a href="courses.html" class=" first">VIEW COURSES</a>
                    <a href="blog.html" class="second">LEARN MORE</a>
                </div>
              </div>
          </div>
          
        </div>

</div>

    <section class="section1">
        <div data-aos="fade-up" data-aos-duration="1300">        
            <p class="center1">What We Do</p>
            <h1>Online courses for remote <br>education</h1>
           
            <div class="section11">
            <div class="box1">
                <i class="fas fa-user-graduate"></i>
                <h3>Online Courses</h3>
                <p>We offer a wide range of courses for all ages and levels.</p>
            </div>

            <div class="box1">
                <i class="fas fa-graduation-cap"></i>
                <h3>
                    Personal Teacher</h3>
                   <p>You can choose an individual study plan for better focus.</p>
            </div>
            
            <div class="box1">
                <i class="fas fa-phone-alt"></i>
                <h3>24/7 Support</h3>
                <p>We offer a wide range of courses for all ages and levels.</p>
            </div>
            

            <div class="box1">
                <i class="fas fa-chalkboard-teacher"></i>
                <h3>Personal Teacher</h3>
                    <p>You can choose an individual study plan for better focus.</p>
            </div> </div>
    </section>

    <section class="section2"> 
        <div class="box2">
             <div data-aos="fade-up" data-aos-duration="1300">   
            <h1>Start Learning with Solicode Online Now</h1>
            <p>Distant learning for creative solutions, Our school is known for the high-quality education programs. We work with the best teachers who know how to engage students in the learning activities!</p>
            <div class="imoji">
                <i class="fas fa-laptop-code"></i>
                <h4>Start Learning From Our Experts</h4>
                <i class="fas fa-chart-line"></i>
                <h4>Enhance your skills with us now</h4>
                
            </div>

            <div class="buttons3">
                <a href="courses.html">View All Courses</a>
            </div>

           </div>
        </div>
        <div data-aos="fade-down" data-aos-duration="1300">     
        <div class="box2">
            <div class="one">
                <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/image-4.jpg" alt="image" />
            </div>
            <div class="two">
                <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/image-5.jpg" alt="image" />
            </div>
        </div>
        </div>
    </section>

    <section class="section3">
        <div data-aos="fade-up" data-aos-duration="1300"></div>
        <h1>Explore Courses</h1>
        <div class="box3">
            


        <div class="box5">
                            <a href="./courses/course1/responsive_design.php">
                          <div class="box4">
                          <div class="image2">
                        <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/course-4-580x385.jpg" alt="image" />
                        </div>

                       
                        <div class="bottom1">
                            <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/avatar-5-180x180.jpg" alt="image" />
                            <div class="fl">
                            <p>Rehana Smith</p>
                            <h4>Free</h4>
                            </div>
                          <i class="tutor-icon-user"></i>
                        </div>
                        <div class="padd">
                            <a href="./courses/course1/responsive_design.php">Responsive Web Design With Html & Css</a>
                            </div>
                        
                            <br>  
                            <div class="sub">
                             <span class="lessons">
                            <i class="far fa-folder-open"></i>
                           12 Lessons</span>
                         
                         <span class="sub2">
                             <i class="far fa-flag"></i>
                              Expert
                          </span>
                         
                        </div>
                      </div>
                    </a>
                    </div>

                    <div class="box5">
                        <a href="courses.html">
                        <div class="box4">
                        <div class="image2">
                      <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/course-1-580x385.jpg" alt="image" />
                      </div>

                     
                      <div class="bottom1">
                          <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/avatar-1-180x180.jpg" alt="image" />
                          <div class="fl">
                          <p>Jessica Smith</p>
                          <h4>$499</h4>
                          </div>
                        <i class="tutor-icon-user"></i>
                      </div>
                      <div class="padd">
                        <a href="courses.html">Javascript Crash Course From Zero To Expert</a>
                        </div>
                      
                          <br>  
                          <div class="sub">
                           <span class="lessons">
                          <i class="far fa-folder-open"></i>
                         16 Lessons</span>
                       
                       <span class="sub2">
                           <i class="far fa-flag"></i>
                            Expert
                        </span>
                       
                      </div>
                    </div>
                </a>
                  </div>


                    <div class="box5">

                        <a href="courses.html">
                        <div class="box4">
                        <div class="image2">
                      <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/course-8-580x385.jpg" alt="image" />
                      </div>

                      
                      <div class="bottom1">
                          <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/avatar-2-180x180.jpg" alt="image" />
                          <div class="fl">
                          <p>Jenica Algo</p>
                          <h4>FREE</h4>
                          </div>
                        <i class="tutor-icon-user"></i>
                      </div>
                      <div class="padd">
                        <a href="courses.html">Learn Python Programming For Beginners</a>
                        </div>
                      
                          <br>  
                          <div class="sub">
                           <span class="lessons">
                          <i class="far fa-folder-open"></i>
                         25 Lessons</span>
                       
                       <span class="sub2">
                           <i class="far fa-flag"></i>
                            beginners
                        </span>
                       
                    </div>
                    </div>
                    </a>
                </div>
                        <div class="box5">
                            <a href="courses.html">
                        <div class="box4">
                        <div class="image2">
                      <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/course-6-580x385.jpg" alt="image" />
                      </div>

                      
                      <div class="bottom1">
                          <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2021/06/avatar-5-180x180.jpg" alt="image" />
                          <div class="fl">
                          <p>Billie Smith</p>
                          <h4>$99</h4>
                          </div>
                        <i class="tutor-icon-user"></i>
                      </div>
                      <div class="padd">
                      <a href="courses.html">The Complete Product Management Course</a>
                      </div>
                          <br>  
                          <div class="sub">
                           <span class="lessons">
                          <i class="far fa-folder-open"></i>
                         32 Lessons</span>
                       
                       <span class="sub2">
                           <i class="far fa-flag"></i>
                            Intermediate
                        </span>
                       
                      </div>
                    </div>
                </a>
                </div>
                    
                      <!-- <div class="swiper-slide">Slide 2</div>
                      <div class="swiper-slide">Slide 3</div>
                      <div class="swiper-slide">Slide 4</div>
                      <div class="swiper-slide">Slide 5</div> -->
                     
                    </div>
                    <!-- <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div> -->
                  </div>
                </div>

    </section>


    

    <br><Br><br><br><br>
        <!-- Add From This Line -->
        <section id="section5">
            <div class="all">
                 <div data-aos="zoom-in" data-aos-duration="1300">
            <div class="image11">
                <img src="http://learnify.axiomthemes.com/wp-content/uploads/2021/04/about-3-copyright-840x840.jpg" alt="image" />
                <h1>Design</h1>
                <p>Complete Design Course
            </div>
    
            <div class="image22">
                <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/image-home-1-1-copyright-840x840.jpg" alt="image" />
                <h1>Photography</h1>
                <p>Seeing World through camera </p>
            </div>
    
            <div class="image33">
                <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/image-home-1-2-copyright-840x840.jpg" alt="image" />
                <h1>Visualization</h1>
                <p>Data visualization with Python </p>
            </div>
            <div class="image44">
                <img src=" http://learnify.axiomthemes.com/wp-content/uploads/2019/02/image-home-1-3-copyright-840x840.jpg" alt="image" />
                <h1>Finance</h1>
                <p> Financial market analysis</p>
            </div>
            </div>
            </div>
    
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                
        <div class="section8">
            <br><br>    <br><br><br><br>
             <div data-aos="zoom-in-up" data-aos-duration="1300"> 
                <h1>Only creative & professional<br> learning courses.</h1>
                <div class="box88">
                <div class="box8">
                    <img src="http://learnify.axiomthemes.com/wp-content/uploads/2021/04/image-home-4-4-copyright.jpg" alt="image" />
                </div>
                <div class="box8">
                    <p>We offer a brand new approach to the most basic learning paradigms. Choose from a wide range of learning options and gain new skills!</p>
                    <br>
                    <p>The Graphic Design course with Magin Revillo is excellent.</p>
                    <p>Contact our support centre and our managers will help you to choose the course of approprite subject and level.</p>
                    <br>
                    <p>Sign up and try for free! Online education has never been easier!</p>
                    <div class="card">
                        <div class="card1">
    
                        <h2>Students</h2>
                          <h3>2000+</h3>
                        <h4>Happy online graduates</h4>
                         
                     
                    </div>
                    <div class="card1">
                         
                        <h2>Word Offices</h2>
                        <h3>6+</h3>
                            <h4>Throuout The World</h4>
                         
                    </div>
                </div>
                
        </div>
                </div>
                </div>
    
        <div class="section9">
            <div data-aos="fade-up"
         data-aos-anchor-placement="top-bottom">
    
            <p>Our Team</p>
            <h1>Teaching Team</h1>
            <div class="team">
                <div class="first1">
                    <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/team-1-new-copyright-570x696.jpg" alt="image" />
                <h3>Stiven Groove</h3>
                <h4>English Teacher</h4>
                </div>
                <div class="first1">
    
                    <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/team-11-new-copyright-570x696.jpg" alt="image" />
                <h3>Wendy Peterson</h3>
                <h4>Design Teacher</h4>
                </div>
                <div class="first1">
                <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/team-2-new-copyright-570x696.jpg" alt="image" />
                <h3>billie Forest</h3>
                <h4>Software developer</h4>
                </div>
    
                <div class="first1">
                <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/team-3-new-copyright-570x696.jpg" alt="image" />
    
                <h3>John Assaf</h3>
                <h4>Web developer</h4>
    
                </div>
                </div>
            </div>
        </div>
    
        </div>
         
    
    
        </div>
    
        <div class="articles">
            <div data-aos="fade-up" data-aos-duration="1300">
            <h1>Latest Articles</h1>
            <div class="allarticles">
                <div class="artcile1">
                    <img src="http://learnify.axiomthemes.com/wp-content/uploads/2019/02/image-44-copyright-410x273.jpg" alt="image" />
                    <h3>How to build a data analysis porfolio</h3>
                    <h6>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquid et accusantium, quia doloremque assumenda delectus blanditiis deserunt? Impedit  
                    </h6>  <br><br>
                        <a href="blog.html">Read More</a>
                </div>
    
                <div class="artcile1">
                    <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2020/12/post-5-580x385.jpg" alt="image" />
                    <h3>Data Analyst Skill To Get Hired Right Now</h3>
                    <h6>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquid et accusantium, quia doloremque assumenda delectus blanditiis deserunt? Impedit                  </h6>
        <br><br>
        <a href="blog.html">Read More</a>
                </div>
    
                <div class="artcile1">
                    <img src="https://gaviaspreview.com/wp/zilom/wp-content/uploads/2020/12/post-6-580x385.jpg" alt="image" />
                    <h3>Sql Certification for Your Data Career</h3>
                    <h6>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae aliquid et accusantium, quia doloremque assumenda delectus blanditiis deserunt? Impedit  
                    </h6>  <br><br>
                    <a href="blog.html">Read More</a>
                </div>
    
            </div>
            </div>
    
        </div>
    
        <footer>
            <div class="center11">
                <h1>#Want some fresh updates?</h1>
                <input type="email" placeholder="Write Your Email Hire" />
                 
            </div>
    
            <div class="center22">
                <h1>Solicode Online</h1>
            </div>
    
            <div class="icons">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-linkedin"></i>
            </div>
    
            <div class="center33">
                <a href="#">Home</a>
                <a href="#">Course</a>
                <a href="#">Teachers</a>
                <a href="#">Blog</a>
                <a href="#">About</a>
            </div>
         
        </footer>
    
        
        
    
          <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
          <script>
            
          </script>
    
          <script src="script.js"></script>
     
    <!-- AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
       <script>
      AOS.init();
    </script>
    </body>
    </html>
