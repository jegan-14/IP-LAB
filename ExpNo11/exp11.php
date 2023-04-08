<?php
$name=$mail=$phone="";
$nameError=$mailError=$phoneError="";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
    $nameError = "Username is required";
  } else {
    $name = test_input($_POST["name"]);
   
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameError = "Only alphabets are allowed for Username";
    }

  }

if(empty($_POST["phone"])){
$phoneError="Phone number is required";
}
else{
$phone=test_input($_POST["phone"]);
if(!is_numeric($phone)){
$phoneError="Invalid phone number";
}

}

if (empty($_POST["email"])) {
    $mailError = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $mailError = "Invalid email format";
    }
if(!($nameError == "" && $mailError == "" && $phoneError == "")){
echo "Not inserted";
}

  }
  ?>
<?php
if($nameError == "" && $mailError == "" && $phoneError == ""){

$ser="localhost";
$user="root";
$pw="";
$db="test";
$conn=new mysqli($ser,$user,$pw,$db);

$sql="insert into user111 values('$name','$email','$phone')";
if($conn->query($sql)===True){
echo "value inserted";
}
else{
echo "value not inserted";
}
}
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            Name:<input type="text" name="name">
            <span class="error">*<?php echo $nameError; ?></span>
            <br>
            <br>
            Email:<input type="text" name="email">
            <span class="error">*<?php echo $mailError; ?></span>
            <br>
            <br>
            Phone No.<input type="text" name="phone">
            <span class="error">*<?php echo $phoneError; ?></span>
            <br>
            <br>
            <input type="submit">
</form>
