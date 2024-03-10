<?php
  session_start();
  // initializing variables
  $username = "";
  $email    = "";
  $usertype ="";
  $errors = array(); 

  // connect to the database
  // format: host, user, password, db
  $db = mysqli_connect('localhost', 'root', '', 'signup_db');

  // REGISTER USER
  if (isset($_POST['signup'])) {
    // receive all input values from the form
    $fname = mysqli_real_escape_string($db, $_POST['firstName']);
    $lname = mysqli_real_escape_string($db, $_POST['lastName']);
    $blklot = mysqli_real_escape_string($db, $_POST['lotBlkStreet']);
    $province = mysqli_real_escape_string($db, $_POST['province']);
    $cityMunicipality = mysqli_real_escape_string($db, $_POST['cityMunicipality']);
    $brgy = mysqli_real_escape_string($db, $_POST['barangay']);
    $country = mysqli_real_escape_string($db, $_POST['country']);
    $contactno = mysqli_real_escape_string($db, $_POST['countryCode']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password']);
    $password_2 = mysqli_real_escape_string($db, $_POST['repeatPassword']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($fname)) { array_push($errors, "First name is required"); }
    if (empty($lname)) { array_push($errors, "Last name is required"); }
    if (empty($blklot)) { array_push($errors, "Block/Lot is required"); }
    if (empty($province)) { array_push($errors, "Province is required"); }
    if (empty($cityMunicipality)) { array_push($errors, "City/Municipality is required"); }
    if (empty($brgy)) { array_push($errors, "Barangay is required"); }
    if (empty($country)) { array_push($errors, "Country is required"); }
    if (empty($contactno)) { array_push($errors, "Contact number is required"); }
    if (empty($email)) { array_push($errors, "Email is required"); }
    if (empty($password_1)) { array_push($errors, "Password is required"); }
    if ($password_1 != $password_2) {array_push($errors, "The two passwords do not match"); }

    // first check the database to make sure 
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM users WHERE email='$email' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);
    
    if ($user) { // if user exists
      if ($user['email'] === $email) {
        array_push($errors, "Email already exists");
      }
    }

    // ============TO BE MODIFIED===========
    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
      $password = ($password_1);
      $query = "INSERT INTO users (fname, lname, blklot, province, cityMunicipality, brgy, country, contactno, email, password) 
          VALUES ('$fname', '$lname', '$blklot', '$province', '$cityMunicipality', '$brgy', '$country', '$contactno', '$email', '$password')";
      mysqli_query($db, $query);
      $_SESSION['success'] = "You are now registered";
      header('location: login.php'); // landing page when the user's registered in the website
    }
  }

  // LOGIN USER
   
  if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    if (empty($email)) {
      array_push($errors, "Email is required");
    }
    if (empty($password)) {
      array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
      $password = ($password);
      $query = "SELECT * FROM users WHERE email='$email' AND password='$password'";
      $results = mysqli_query($db, $query);
      $row = mysqli_fetch_array($results);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['fname'] = $fname;
        $_SESSION['id'] = $id;
        $_SESSION['success'] = "You are now logged in";
          header('location: index.php'); // landing page when the user's logged in the website eeee
          exit;
        
      } else {
        array_push($errors, "Wrong email/password combination");
      }
    }
  }
?>