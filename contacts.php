<!DOCTYPE html>
<?php include 'connection.php'; ?>
<head>
    <link rel="stylesheet" href="webpageStyle.css">
    <script src="myscripts.js" ></script> 
<title>Contacts</title>
</head>
<header>
    <nav >
        <ul>
        <li><a href="index.html"><t>Home</t></a></li>
        <li><a href="about.html"><t>About me</t></a></li>
        <li><a href="contacts.html"><t>Contact me</t></a></li>
      </ul>
    </nav>

    <h1>TAMANDA CHIDOTHE</h1>
</header>
<body>
  <h5 id="formTitle">CONTACT FORM</h5>
  <P style="text-align: center;"> PLEASE VERIFY YOUR IDENTITY BELOW</P>
   <form id="form" action="/" method="GET">
    <div>
      
   <label for="name"><f>USERNAME</f></label><br>
   <input id="name" name="NAME" type="text" required placeholder="Enter your name" size="85">
 
    </div>
    
    <div>
 
   <label for="surname"><f>SURNAME</f></label><br>
   <input id="surname" name="SURNAME" type="text" required placeholder="Enter last name" size="85">
    </div>
   
    
   <label for="ID"><f>ID_NUMBER</f></label><br>
   <input id="idNumber" name="ID_NUMBER" type="text" required placeholder="Enter User  Id number" size="85">
    </div>
    
    <div>
   <label for="password"><f>PASSWORD</f></label><br>
   <input id="password" name="PASSWORD" type="text" required placeholder="Enter Your password" size="85"><br>  
   </div>
    <div>
   <label for="passwordCheck"><f>CONFIRM_PASSWORD</f></label><br>
   <input id="passwordCheck" name="confirmPassword" type="text" required placeholder="Enter the password Again!" size="85"><br>  
   </div>
   <br>
 <button type="submit" onclick="formSubmission()">SUBMIT</button> 
</form>
<h5> <img src="images/phone.png" width="20px">09925556947 or 0886531880</h5>
<h5> <img src="images/mail.png" width="20">Email:tamanchiechidothe@gmail.com</h5>
  <p>You can click on the Below icons to find us on social media or Email us, you can also call us using the numbers.
  </p>
</body>
<footer>
  <ul>
    <li> <a href=" https://www.facebook.com/tamanchie.chidothe>"> <img src="images/fb.png" width="30px"> </a></li>
    <li> <a href="https://twitter.com"> <img src="images/twitter.png" width="30px"> </a></li>
    <li> <a href="https://whatsapp.com"> <img src="images/whatsapp.png" width="30px"> </a></li>
    
  </ul></footer>
</html>