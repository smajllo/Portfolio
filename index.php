<?php include('./include/db.php'); 
$query = "SELECT * FROM favicon,user,about";
$runquery = mysqli_query($db,$query);
if(!$db){
    echo 'database not connected';
}
$data = mysqli_fetch_array($runquery);
?>
<!DOCTYPE html>
<html lang="en">
  <meta http-equiv="content-type" content="text/html;charset=UTF-8" />

  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?=$data['title']?></title>
    <link href="assets/img/<?=$data['icon']?>" rel="icon" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <script src="./assets/js/main.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
    />
  </head>

  <body>
    <div class="banner">
      <nav class="nav-menu" >
        <ul id="links">
          <li><a href="#hero">Home</a></li>
          <li><a href="#about"> About</a></li>
          <li><a href="#projects">Projects</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </nav>
      <div class="banner-content">
        <div class="text" data-aos="fade-right">
          <h1 class="hi">Hi, I am</h1>
          <h1 class="emri"><?=$data['name']?></h1>
          <h2>Welcome to my portfolio website!</h2>
        </div>

        <div class="image" data-aos="fade-left">
          <img
            src="./assets/img/_Pngtree_modern_flat_design_concept_of_5332895-removebg-preview.png"
          />
        </div>
      </div>
    </div>

    <section id="about" class="about">
      <h2 data-aos="zoom-in">About</h2>
      <div class="about-container" data-aos="zoom-in">
        <div class="profile-pic">
          <img src="assets/img/<?=$data['profilepic']?>" alt="" />
        </div>
        <div class="other-text">
          <h3><?=$data['heading']?></h3>
          <p><?=$data['longdesc']?></p>
          <div class="links">
            <a href="assets/files/<?=$data['pdf']?>" download
              >Download Resume</a
            >
            <div class="social-media-links">
              <a href="<?=$data['linkedin']?>"
                ><i class="fa fa-linkedin"></i
              ></a>
              <a href="<?=$data['github']?>"><i class="fa fa-github"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="skills" class="skills">
      <h2>Skills</h2>
      <div class="skills-container" data-aos="zoom-in">
        <?php
                    $query3 = "SELECT * FROM skills";
                    $runquery3= mysqli_query($db,$query3);
                    while($data3=mysqli_fetch_array($runquery3)){
                    ?>
        <div class="circle">
          <span><?=$data3['skill']?> </span>
        </div>
        <?php
                       } 
                    ?>
      </div>
    </section>

    <section id="projects" class="projects">
      <h2 data-aos="zoom-in">Projects</h2>
      <div class="project-container">
        <?php
                    $query5 = "SELECT * FROM projects";
                    $runquery5= mysqli_query($db,$query5);
                    while($data5=mysqli_fetch_array($runquery5)){
                    ?>
        <div class="project-card" data-aos="zoom-in">
          <div class="title">
            <p><?=$data5['projectname']?></p>
            <a href="<?=$data5['projectlink']?>" target="_blank"
              >See the Code</a
            >
          </div>
          <div class="project-img">
            <img src="assets/img/<?=$data5['projectpic']?>" alt="" />
          </div>
        </div>
        <?php
                      }
                    ?>
      </div>
    </section>

    <section id="contact" class="contact">
      <h2>Contact</h2>
       <div class="question"></div>
      <div class="done"></div>
      <div class="chat"></div>
      <div class="error"></div>
      <div class="form-container" data-aos="zoom-in">
       
      <form action="include/message.php" method="post">
          <div class="inner">

            <div class="group">
              <label for="name">Your Name</label>
              <input type="text" name="name" id="name" placeholder="Enter Your Name"/>
            </div>

            <div class="group">
              <label for="email">Your Email</label>
              <input type="email" name="email" id="email"placeholder="Enter Your Email" />
            </div>

            <div class="group">
              <label for="subject">Subject</label>
              <input type="text" name="subject" id="subject" placeholder="Enter Subject"/>
            </div>

            <div class="group">
              <label for="message">Message</label>
              <textarea name="message" id="message" rows="10" placeholder="Enter Your Message"></textarea>
            </div>

            <button type="submit">Send Message</button>
                    </div>
        </form>

     </div>
     
    </section>

    <footer id="footer" class="footer">
      <div>
        <a href="mailto:<?=$data['emailid']?>"><?=$data['emailid']?></a>
      </div>

      <div>
        <a href="<?=$data['linkedin']?>"><i class="fa fa-linkedin"></i></a>
        <a href="<?=$data['github']?>"><i class="fa fa-github"></i></a>
      </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
      AOS.init({
        duration: 1000,
      });
    </script>
  </body>
</html>
