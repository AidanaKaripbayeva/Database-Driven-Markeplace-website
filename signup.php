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
              echo '<p class = "signuperror">Fill in All the fields!</p>';
            }
            else if ($_GET['error'] == "invalidmailuid") {
              echo '<p class = "signuperror">Fill in All fields!</p>';
            }
            else if ($_GET['error'] == "invalidUsername") {
              echo '<p class = "signuperror">Enter a valid User Name (Make sure no invalid characters)!</p>';
            }
            else if ($_GET['error'] == "passwordcheck") {
              echo '<p class = "signuperror">Incorrect Password!</p>';
            }
            else if ($_GET['error'] == "usertaken") {
              echo '<p class = "signuperror">This Username is already taken choose a different Username</p>';
            }
          }
          else if (isset($_GET['signup'])) {
            if ($_GET['signup'] == "success") {
              echo '<p class = "signupsuccess">Great Job!! Your Signup was successful!</p>';
            }
          }
        ?>
        <form action="includes/signup.inc.php" method="post">
          <input type="text" name="uid" placeholder="Username">
          <input type="text" name="mail" placeholder="Email">
          <input type="password" name="pwd" placeholder="Password">
          <input type="password" name="pwd" placeholder="Repeat Password">
          <button type="submit" name="signup-submit">Signup</button>
        </form>
      </section>
    </div>
  </main>

<?php
  require "footer.php"
?>