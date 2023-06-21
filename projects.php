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

    <?php
$query="SELECT Id ,Name, Description FROM projects";
$result= mysqli_query($connection,$query);

if(!$result){
  die("Error:".mysqli_error($connection));
}
  ?>
<div>
<?php while($row = mysqli_fetch_assoc($result)) {?>
<div>
<h1><?php echo  $row ['Id']." ".$row['Name'];?></h1>
<p><?php echo $row['Description'];?></p>
</div>
<?php } ?>
</div>

<?php
mysqli_free_result($result);
mysqli_close($connection);
?>
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
