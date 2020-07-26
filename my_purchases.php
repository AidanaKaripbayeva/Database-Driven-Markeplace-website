<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>UIUC Markeplace</title>
    <link rel = "stylesheet" href='style.css'>
  </head>

  <?php
  session_start();
  /*session is started if you don't write this line can't use $_Session  global variable*/
  ?>
<body class='wrapper'>
  <nav>
    <ul>
      <li> <a href="testphp.php">Home</a></li>
      <li> <a href="my_products.php">My Products</a></li>
      <li> <a href="my_purchases.php"><h4 class="chosen">My Purchases</h4></a></li>
      <li> <a href="my_favorites.php">My Favorites</a></li>
      <li> <a href="my_reviews.php">My Reviews</a></li>
      <li> <a href="my_profile.php">My Profile</a></li>
      <li> <form action="includes/logout.inc.php" method="post">
            <button type="submit" name="logout-submit">LogOut</button>
          </form>
      </li>


    </ul>

  </nav>


  <?php
  // require_once('mysqli_connect.php');
  require 'includes/dbh.inc.php';

  $id = $_SESSION['User_ID'];

  // print_r($_SESSION['User_ID']);

  $sql = "SELECT * FROM Purchase_Record WHERE Buyer_ID = 2;";
  // $result = mysqli_query($dbc,$sql);
  // $resultCheck = mysqli_num_rows($result);
  $stmt = mysqli_stmt_init($conn);
  if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../my_purchases.php?error=sqlerror");
      exit();
    }
    else{
    mysqli_stmt_prepare($stmt, $sql);
    mysqli_stmt_execute($stmt);
    // $result = mysqli_stmt_get_result($stmt);
    $result = $conn->query($sql);
    $resultCheck = mysqli_stmt_num_rows($stmt);

    if($resultCheck > 0){
      $row = mysqli_fetch_assoc($result);
      while($row = $result->fetch_assoc()){


  ?>

  <table>
    <tr>
      <td>Buyer ID </td>
      <td><?php echo $row['Buyer_ID']; ?></td>
    </tr>
    <tr>
      <td>Product ID </td>
      <td><?php echo $row['Product_ID']; ?></td>
    </tr>
    <tr>
      <td>Location </td>
      <td><?php echo $row['Location']; ?></td>
    </tr>
    <tr>
      <td>Time of Purchase</td>
      <td><?php echo $row['TimeOfPurchase']; ?></td>
    </tr>
    <tr>
      <td>Leave a Review</td>
      <td><form action="includes/review.inc.php" method="post">
              <input type='text' name="review" placeholder="Please give your reviews for this purchase here...">
              <button type="submit" name="review-submit">Submit Review</button>
          </form>
      </td>
    </tr>

  </table>

  <br><br>

  <?php }
  }else{
    echo "You didn't buy anything";
  } 
    }?>
 

</body>