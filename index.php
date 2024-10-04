<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  
  <main>
    <div class="container">
      <h1>Contact Form</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <label for="name" class="labels labelname">Enter your name:</label>
        <input type="text" class="input" name="name" placeholder="Name" required>
        <br>

        <label for="email" class="labels labelemail">Enter your email address:</label>
        <input type="email" class="input" name="email" placeholder="Email" required>
        <br>

        <label for="phone" class="labels labelphone">Enter your Phone Number:</label>
        <input type="tel" class="input" name="phone" placeholder="Phone" required>
        <br>

        <label for="message" class="labels labelmessage">Message:</label>
        <textarea class="input" name="message" placeholder="Your message here..." required></textarea>
        <br>

        <button type="submit" class="button">Submit</button>
        <br>
      </form>
    </div>

   <?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Get form data and sanitize it
       $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : '';
       $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : '';
       $phone = isset($_POST["phone"]) ? htmlspecialchars($_POST["phone"]) : '';
       $message = isset($_POST["message"]) ? htmlspecialchars($_POST["message"]) : '';
   
       // Check if fields are empty
       if ($name == '' || $email == '' || $phone == '' || $message == '') {
           echo "<p class='error'>Please fill all the fields.</p>";
       } else {
   
           echo "<p class='success'>Thank you, $name! Your message has been submitted successfully.</p>";
       }
   } else {
       echo "<p class='error'>Please try again.</p>";
   }

   
    ?>
  </main>
</body>
</html>
