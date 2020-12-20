<?php  
  $host='ec2-52-6-75-198.compute-1.amazonaws.com';
  $db = 'dq22oqbhhje8j';
  $username = 'btsgokzekbpgts';
  $password = '922d82db920a404f4cffebde604ca8816473d638c959de7670c4dadc1c60c9dd';

  $dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$username;password=$password";

  try{
    // create a PostgreSQL database connection
    $conn = new PDO($dsn); 
    // display a message if connected to the PostgreSQL successfully
    if($conn){
      echo "Connected to the <strong>$db</strong> database successfully!";
    }
  }catch (PDOException $e){
    // report error message
    echo $e->getMessage();
    die();
  }
  $query = "SELECT * FROM student";
  $stmt = $conn->query($query);
  $result = $stmt->fetch(PDO::FETCH_ASSOC);
  var_dump($result);
?>
