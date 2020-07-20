<!DOCTYPE html>
<html>
  <head>
    <meta charset = "UTF-8">
    <meta name = "description" content = "This is an website for students in UIUC">
    <title> Marketplace </title>
  </head>
  <body>
    <h1  style = "background-color: peachpuff;"> Marketplace for UIUC </h1>
    <p> This is a website for <i><b> students</b></i> </p>
    <hr/>
    <?php
        echo "All the Customer in database:  ";
        require_once('mysqli_connect.php');
        $query = "SELECT User_ID, User_Name FROM Customer";
        $response = @mysqli_query($dbc, $query);
        if($response){
          while($row = mysqli_fetch_array($response)){
            echo $row['User_ID'] . ' ' . $row['User_Name'];
          }
        }
    ?>
  </body>
</html>
