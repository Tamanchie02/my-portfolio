 <DOCTYPE html>
 <?php include 'connection.php'; ?>
 <Html>
    <head>
    <link rel="stylesheet" href="webpageStyle.css">
    <script src="myscripts.js" ></script> 
<title>Contacts</title>
</head>
<header>
    <nav >
        <ul>
        <li><a href="index.php"><t>Home</t></a></li>
        <li><a href="about.php"><t>About me</t></a></li>
        <li><a href="contacts.php"><t>Contact me</t></a></li> 
        <li><a href="projects.php"><t>Projects</t></a></li> 
        <li><a href="skills.php"><t>Skills</t></a></li> 
      </ul>
    </nav>

    <h1>TAMANDA CHIDOTHE</h1>
</header>
<?php
if (isset($_POST['Register'])) {
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    $sql = "SELECT * FROM contacts WHERE Username = '$Username' AND Email ='$Email' ";
    $user =$connection ->query($sql);
    if ($user->num_rows > 0) {
        echo "Error: please use another username and Email ";
    }
    else{
    $sql = "INSERT INTO contacts (Username, Email, Password) VALUES ('$Username', '$Email', '$Password')";

    if ($connection->query($sql) === TRUE) {
        echo "<p class='message success'>successfully Registered!</p>";
    } else {
        echo "<p class='message error'>Error: " . $sql . "<br>" . $connection->error . "</p>";
    }
    }
    $connection->close();
}


?>
</head>
<body>
    <p>Please enter your details below to register</p>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method= "POST">

   <label for="name"><f>Username</f></label><br>
   <input id="name" name="Username" type="text" required placeholder="Enter your Username" size="85"><br>

   <label for="Email"><f>Email</f></label><br>
   <input id="Email" name="Email" type="text" required placeholder="Enter EmailAddress" size="85"><br>
     
   <label for="password"><f>Password</f></label><br>
   <input id="password" name="Password" type="text" required placeholder="Enter Your password" size="85"><br>  
   <br>
 <button type="submit"  name="Register">SUBMIT</button> 
</form>
</body>
<footer>
<ul>
    <li> <a href=" https://www.facebook.com/tamanchie.chidothe>"> <img src="images/fb.png" width="30px"> </a></li>
    <li> <a href="https://twitter.com"> <img src="images/twitter.png" width="30px"> </a></li>
    <li> <a href="https://whatsapp.com"> <img src="images/whatsapp.png" width="30px"> </a></li>
    
  </ul></footer>
</Html>