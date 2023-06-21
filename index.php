<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head> 
  <title>Tamanda Chidothe portfolio</title>
   <link rel="stylesheet" href="webpageStyle.css">
   <script src="myscripts.js" ></script> 
</head>  
  <header>
    <nav>
      <ul class="nav-ul" id="nav-ul">
        <li class="nav-link" > <a href="index.php"><t>Home</t></a> </li>
        <li class="nav-link" > <a href="#Biography"><t>About me</t></a> </li>
        <li class="nav-link" > <a href="#Contacts"><t>contact me</t></a> </li>
        <li class="nav-link" > <a href="#Skills"><t>Skills</t></a> </li>
        <li class="nav-link" > <a href="#Projects"><t>Projects</t></a> </li>
      
      </ul>
    </nav>
    <h1>TAMANDA CHIDOTHE</h1><br>
  </header>
<body>
  <!-- A dynamic greeting feature -->
  <p id="para1" class="greeting" ></p>

  <!-- Welcoming remarks -->
  
     
  <h2 id="Biography"><img src="images/tamanda.jpg" height="350px"> <br>
    BIOGRAPHY
  </h2>
  <p id="para3">
    My name is Tamanda Chidothe, a 21 year old Malawian lady and a Mzuzu university Level 2 student currently studying ICT.
    I have completed courses like C programming, multimedia and end user computing to which i have all the basics of creating
    basic C programs, video creation and currently learning web designing. 
  </p>
  
  <p id="para4">
    I am also a business lady selling electronic gadgets for example, Extensions,Chargers, phone batteries and USB drives.
    
  </p>
  <h3 id="Projects">PROJECTS</h3>
  <img name="slide" width="350" height="500">
  <p id="para4">
    <dl>
      <dt>1.C program calculator</dt>
      <dd>Through my C program course i learnt how to build a simple calculator<br>
        <a href=" https://www.javatpoint.com/calculator-program-in-c"><i>click here to view the program</i></a>
    </dl>
    <a href="projects.php"><i>Click here to view all projects.....</i> </a>
  </p>
  
   <h4 id="Skills">SKILLS</h4>
  <p id="para5">
    <ol>
      <li>Communication skills</li>
      <li>PC Managing and maintaining</li>
      <li>C Programming</li>  
    </ol>
    <a href="skills.php"><i>Click here to view all skills.....</i> </a>
  </p>
      <h5 id="Contacts"> CONTACT DETAILS</h5>
   <h5> <img src="images/phone.png" width="20px">09925556947 or 0886531880</h5>
   <h5> <img src="images/mail.png" width="20">Email:tamanchiechidothe@gmail.com</h5>
   
   <h5 id="formTitle">CONTACT FORM</h5>
   <form id="form" action="/" method="GET">
    <div>
      
   <label for="name"><f>NAME</f></label><br>
   <input id="name" name="NAME" type="text" required placeholder="Enter your name" size="85">
 
 
   <label for="surname"><f>Surname</f></label><br>
   <input id="surname" name="SURNAME" type="text" required placeholder="Enter last name" size="85">
    </div>

    <div>
   <label for="password"><f>Password</f></label><br>
   <input id="password" name="PASSWORD" type="text" required placeholder="Enter Your password" size="85"><br>  
   </div>
  
   <br>
 <button type="submit" onclick="formSubmission()">SUBMIT</button> 
</form>
</body>
<footer>
 
  <ul>
    <li> <a href=" https://www.facebook.com/tamanchie.chidothe>"> <img src="images/fb.png" width="30px"></a><br></li>
    <li> <a href="https://twitter.com"> <img src="images/twitter.png" width="30px"> </a></li>
    <li> <a href="https://whatsapp.com"> <img src="images/whatsapp.png" width="30px"> </a></li>
    
  </ul>
  
  
</footer>
</html>
