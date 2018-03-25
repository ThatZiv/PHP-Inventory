<!DOCTYPE html>
<!--
All scripts and code are by ThatZiv (Zua)

GO TO CONFIG FOR FURTHER CONFIGURATION
-->

<?php
   include 'inc/config.php';
?>
<html>
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="ThatZiv's Simple Webpage">
    <meta name="author" content="Zavaar Shah" />

    <title>
    <?php 
    echo $websitetitle; 
    ?>
    </title>
  <link rel="stylesheet" href="style.css" type="text/css">

  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  </head>
  <body>
</div>
    <div id="container">

     <div id="heading">
         <br>
         <h1>
             <?php
             echo $websiteheading;
             ?>
          </h1>
        </div>
        

        <div id="content">
            <p>
                Take a look at our latest items!
            </p>
           
        </div>

        <div id="main">
      
            
<?php
        $sql = "SELECT * FROM inventory;";
    $result = mysqli_query($conn, $sql); 
    $resultCheck = mysqli_num_rows($result);
            echo "<table>";
            echo "<tr>
                <th>Product</th>
                <th>Price</th>
                <th>Stock</th>
                </tr>";

                if ($resultCheck > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr><th>";
                        echo $row['item'];
                        echo "<th>";
                        echo $row['price'];
                        echo "<th>";
                        echo $row['quantity'];
                        echo "</th></td></tr>";
                    } 
                }                      
?>
                     <p2>
                Copyright &copy; ThatZiv
            </p2>
            
        </div>

        
    </div>
    
</div>

  </body>
</html>