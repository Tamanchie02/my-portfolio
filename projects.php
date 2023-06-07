<!DOCTYPE html>
<?php include 'connection.php'; ?>
<html>
<head> 
  <title>projects</title>
   <link rel="stylesheet" href="webpageStyle.css">
   <script src="myscripts.js" ></script> 
</head>  
  <header>
    <nav>
      <ul>
        <li> <a href="index.php"><t>Home</t></a> </li>
        <li> <a href="about.php"><t>About me</t></a> </li>
        <li> <a href="contacts.php"><t>contact me</t></a> </li>
        <li> <a href="skills.php"><t>Skills</t></a> </li>
    </ul>
    </nav>
    <h1>TAMANDA CHIDOTHE</h1><br>
  </header>
<body>
  <h2>PROJECTS </h2> 
  <input type="text" id="searchBar" placeholder="Search...." size="100">
  <button id="searchButton" onclick="doSearch">Search</button>


  <p>
    <input type="checkbox" id="filterA" onclick="filterProjects()">
    <label for="filterA">Filter 1</label>
    <input type="checkbox" id="filterB" onclick="filterProjects()">
    <label for="filterB">Filter 2</label>
    
      <dl id="itemList">
        <dt data-filter ="A">1.C program calculator (A)</dt>
      <dd>Through my C program course i learnt how to build a simple calculator<br>
        <img src="images/calculator.png" height="300px"><br>
        <a href=" https://www.javatpoint.com/calculator-program-in-c"><i>click here to view the full program</i></a>
      </dd>
   

   
      <dt data-filter ="B">2.Web design (B)</dt>
      <dd>I am currently taking the web design course to which i am learning to build simple webpages.
        And i have a webpage uploaded on github.<br>
        <img src="images/git.jpeg" width="300px"><br>
        <p>As you can see it is viewable on the web.</p>
        <a href="https://tamanchie02.github.io/my-portfolio/"><i>click here to view the page</i></a>
      </dd>
  
    </dl>
  </p>
  <h5 id="contacts"> CONTACT DETAILS</h5>
   <h5> <img src="images/phone.png" width="20px">09925556947 or 0886531880</h5>
   <h5> <img src="images/mail.png" width="20">Email:tamanchiechidothe@gmail.com</h5>
   <div class="progress-Bar" >
     <div class="progress">  </div>
   </div>
   <span class="loading">C program calculator 100%</span>
   <div class="progress-Bar" >
    <div class="progress2">  </div>
  </div>
  <span>Web Development 50%</span><br>

</body>
<footer>
  <ul>
    <li> <a href=" https://www.facebook.com/tamanchie.chidothe>"> <img src="images/fb.png" width="30px"></a><br></li>
    <li> <a href="https://twitter.com"> <img src="images/twitter.png" width="30px"> </a></li>
    <li> <a href="https://whatsapp.com"> <img src="images/whatsapp.png" width="30px"> </a></li>
    
  </ul>
  
  
</footer>
</html>
