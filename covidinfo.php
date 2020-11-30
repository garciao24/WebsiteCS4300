<!DOCTYPE html>
<html>
<head>
  <title>COVID Information</title>
</head>
<body>
  <h1>COVID Information</h1>
  <?php

    if (!isset($_POST['name']) || !isset($_POST['address']) 
         || !isset($_POST['Title']) || !isset($_POST['Price'])) {
       echo "<p>You have not entered all the required details.<br />
             Please go back and try again.</p>";
       exit;
    }

    // create short variable names
    $name=$_POST['name'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
	$zipcode=$_POST['zipcode'];
	$email=$_POST['email'];
    

    @$db = new mysqli('localhost', 'root', '', 'covidinfo');

    if (mysqli_connect_errno()) {
       echo "<p>Error: Could not connect to database.<br/>
             Please try again later.</p>";
       exit;
    }

    $query = "INSERT INTO covidinfo VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $db->prepare($query);
    $stmt->bind_param('sssd', $name, $address, $city, $state, $zipcode, $email);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo  "<p>Information has been sucessfully submitted.</p>";
    } else {
        echo "<p>An error has occurred.<br/>
              The item was not added.</p>";
    }
  
    $db->close();
  ?>
</body>
</html>
