 <DOCTYPE html>
 <?php include 'connection.php'; ?>
 <Html>
    <head>
    <link rel="stylesheet" href="webpageStyle.css">
<?php
if (isset($_POST['Register'])) {
    $Username = $_POST["Username"];
    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    $sql = "INSERT INTO contacts (Username, Email, Password) VALUES ('$Username', '$Email', '$Password')";

    if ($connection->query($sql) === TRUE) {
        echo "<p class='message success'>successfully Registered!</p>";
    } else {
        echo "<p class='message error'>Error: " . $sql . "<br>" . $connection->error . "</p>";
    }

    $connection->close();
}

?>
</head>
<body>
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
</Html>