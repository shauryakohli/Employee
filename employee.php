<!DOCTYPE html>
<html>
<head>
    <title>Insert Page page</title>
</head>
<body>
    <center>
    <?php
  // servername => localhost
  // username => root
  // password => empty
  // database name => shaurya
  $conn = mysqli_connect("localhost", "root", "", "shaurya");
    
  // Check connection
  if($conn === false){
      die("ERROR: Could not connect. " 
          . mysqli_connect_error());
  }



  // Taking all 5 values from the form data(input)
  $eid =  $_POST['eid'];
  $ename = $_POST['ename'];
  $eage =  $_POST['eage'];
  $erole = $_POST['erole'];
  if (isset($_POST['eid'])) {
    $eid = $_POST['eid'];
}

if (isset($_POST['ename'])) {
    $ename = $_POST['ename'];}


if (isset ($_POST ['eage'])) {

$eage = $_POST['eage'];}


if (isset($_POST['erole'])) {
$erole = $_POST['erole'];}
    
  // Performing insert query execution
  // here our table name is college
  $sql = "INSERT INTO employee VALUES ('$eid', 
      '$ename','$eage','$erole')";
    
  if(mysqli_query($conn, $sql)){
      echo "<h3>data stored in a database successfully." 
          . " Please browse your localhost php my admin" 
          . " to view the updated data</h3>"; 

      echo nl2br("\n$eid\n $ename\n "
          . "$eage\n $erole");
  } else{
      echo "ERROR: Hush! Sorry $sql. " 
          . mysqli_error($conn);
  }
    
  // Close connection
  mysqli_close($conn);
  ?>
    </center>
</body>
</html>
