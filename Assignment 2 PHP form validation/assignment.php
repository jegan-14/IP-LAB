<?php
// Define variables and set to empty values
$userid = $password = $username = $address = $zipcode = $country = $email =$gender= "";
$useridErr = $passwordErr = $usernameErr = $addressErr = $zipcodeErr = $countryErr = $emailErr =$genderErr= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Validate User ID
  if (empty($_POST["userid"])) {
    $useridErr = "User ID is required";
  } else {
    $userid = test_input($_POST["userid"]);
    // Check if User ID is between 5 and 7 characters
    if (strlen($userid) < 5 || strlen($userid) > 7) {
      $useridErr = "User ID must be between 5 and 7 characters";
    }
  }

  // Validate Password
  if (empty($_POST["password"])) {
    $passwordErr = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
    // Check if Password is between 7 and 12 characters
    if (strlen($password) < 7 || strlen($password) > 12) {
      $passwordErr = "Password must be between 7 and 12 characters";
    }
  }

  // Validate Username
  if (empty($_POST["username"])) {
    $usernameErr = "Username is required";
  } else {
    $username = test_input($_POST["username"]);
    // Check if Username contains only alphabets
    if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
      $usernameErr = "Only alphabets are allowed for Username";
    }
  }

  // Validate Address
  if (empty($_POST["address"])) {
    $addressErr = "Address is required";
  } else {
    $address = test_input($_POST["address"]);
    // Check if Address contains only alphanumeric characters
    if (!preg_match("/^[a-zA-Z0-9 ]*$/",$address)) {
      $addressErr = "Only alphanumeric characters are allowed for Address";
    }
  }

  // Validate Zipcode
  if (empty($_POST["zipcode"])) {
    $zipcodeErr = "Zipcode is required";
  } else {
    $zipcode = test_input($_POST["zipcode"]);
    // Check if Zipcode contains only alphanumeric characters
    if (!preg_match("/^[a-zA-Z0-9]*$/",$zipcode)) {
      $zipcodeErr = "Only alphanumeric characters are allowed for Zipcode";
    }
  }

  // Validate Country
  if (empty($_POST["country"])) {
    $countryErr = "Country is required";
  } else {
    $country = test_input($_POST["country"]);
  }

  // Validate Email
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // Check if Email is a valid email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<style>
  .error{
    color:#ff0000;
  }
</style>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

  User ID: <input type="text" name="userid" value="<?php echo $userid;?>">
  <span class="error" >* <?php echo $useridErr;?> </span>
<br><br>

Password: <input type="password" name="password">
<span class="error">* <?php echo $passwordErr;?> </span>
<br><br>

Username: <input type="text" name="username" value="<?php echo $username;?>">
<span class="error">* <?php echo $usernameErr;?> </span>
<br><br>

Address: <input type="text" name="address" value="<?php echo $address;?>">
<span class="error">* <?php echo $addressErr;?> </span>
<br><br>

Zipcode: <input type="text" name="zipcode" value="<?php echo $zipcode;?>">
<span class="error">* <?php echo $zipcodeErr;?> </span>
<br><br>

Country: <select name="country">
<option value=""></option>
<option value="India" <?php if ($country=="India") echo "selected";?>>India</option>
<option value="USA" <?php if ($country=="USA") echo "selected";?>>USA</option>
<option value="Australia" <?php if ($country=="Australia") echo "selected";?>>Australia</option>
</select>
<span class="error">* <?php echo $countryErr;?> </span>
<br><br>

Email: <input type="text" name="email" value="<?php echo $email;?>">
<span class="error">* <?php echo $emailErr;?> </span>
<br><br>

<label for="gender">Gender</label>
		<input type="radio" id="male" name="gender">
		<label for="male" value="male">male</label>
		<input type="radio" id="female" name="gender">
		<label for="female" value="female">female</label>
    <br><br>


<label for="language">Language</label>
		<input type="radio" id="English" name="language">
		<label for="English" value="English">English</label>
		<input type="radio" id="Nonenglish" name="language">
		<label for="Nonenglish" value="Nonenglish">Nonenglish</label><br><br>

<label for="about" value="about">About</label>
		<textarea id="about" name="about"></textarea>
    <br><br>
  <input type="submit" name="submit" value="Submit">

</form>
