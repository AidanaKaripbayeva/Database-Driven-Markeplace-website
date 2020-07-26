<?php
  require "header.php";

?>
  <main>
    <div class="wrapper-main">
      <section class="section-default">
        <h1>Signup</h1>
        <?php
          if (isset($_GET['error'])) {
            if ($_GET['error'] == "emptyfields") {
              echo '<p> Please fill all fields.</p>';
            } else if ($_GET['error'] == "invalidemail") {
              echo '<p> Please check your email.</p>';
            } else if ($_GET['error'] == "passwordcheck") {
              echo '<p> Please check your password.</p>';
            }
          } else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "sucess") {
              echo '<p> Signup sucessful!</p>';
            }

          }
        ?>

        <p> Sign up to buy or sell different products </p>

        <form class ="signupForm" action = "includes/signup.inc.php" method = "post">
          <input type = "text" name ="username" placeholder = "Username">
          <input type = "text" name ="mail" placeholder = "E-mail">
          <input type = "password" name ="pwd" placeholder = "Password">
          <input type = "password" name ="pwd-repeat" placeholder = "Repeat password">
          <input type = "text" name ="address" placeholder = "Address">
          <input type = "text" name ="phone" placeholder = "Phone number">
          <input type = "text" name ="zipcode" placeholder = "Zipcode">
          <p> <span> </span></p>
          <button class="signupBtn" type="submit" name="signup-submit">Signup</buttom>
        </form>
      </section>
    </div>
  </main>

<?php
  require "footer.php"
?>
