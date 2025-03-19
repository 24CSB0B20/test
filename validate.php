<?php
    $name = $email = $gender = $area = $phone_number = $dob = $address = $password = "";
    $favs = [];
    $errors = []; 
    $passedValidation = true;
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $email = $_POST["email"] ?? "";
        $password = $_POST["pass"] ?? "";
        $first_name = $_POST["first"] ?? "";
        $last_name = $_POST["last"] ?? "";
        $gender = $_POST["Gender"] ?? "";
        $area = $_POST["choice"] ?? "";
        $phone_number = $_POST["number"] ?? "";
        $dob = $_POST["dob"] ?? "";
        $address = $_POST["addy"] ?? "";
        $favs = $_POST["favs"];
        if($first_name == ""){
            $errors[] = 'First Name is Missing!';
            $passedValidation = false;
        }
        if($password == ""){
            $errors[] = 'Password is Missing!';
            $passedValidation = false;
        }
        if($last_name == ""){
            $errors[] = 'Last Name is Missing!';
            $passedValidation = false;
        }
        if($email == ""){
            $errors[] = 'Email is Missing!';
            $passedValidation = false;
        }
        if($gender == ""){
            $errors[] = 'Gender is Missing!';
            $passedValidation = false;
        }
        if($area == ""){
            $errors[] = 'Area is Missing!';
            $passedValidation = false;
        }
        if($phone_number == ""){
            $errors[] = 'Phone Number is Missing!';
            $passedValidation = false;
        }
        if($dob == ""){
            $errors[] = 'Date of Birth is Missing!';
            $passedValidation = false;
        }
        if($address == ""){
            $errors[] = 'Address is Missing!';
            $passedValidation = false;
        }
    }
    if($passedValidation){
        echo "<h2>Looks like you passed validation!</h2>
        <h2>Here's your data (on the server): </h2>";
        echo "<p><strong>First Name:</strong> $first_name</p>";
        echo "<p><strong>Last Name:</strong> $last_name</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Area:</strong> $area</p>";
        echo "<p><strong>Phone Number:</strong> $phone_number</p>";
        echo "<p><strong>Date of Birth:</strong> $dob</p>";
        echo "<p><strong>Address:</strong> $address</p>";
        if(!empty($favs)){
            echo "<p><strong>Favorites:</strong></p>";
            echo "<ul>";
            foreach($favs as $fav) echo "<li>$fav</li>";
            echo "</ul>";
        }
        else echo "<p><strong>Favorites:</strong> None selected</p>";
        
    } 
    else{
        echo "<h2>Validation failed. Here's your Errors:</h2>";
        echo "<ul>";
        foreach($errors as $error) echo "<li>$error</li>";
        echo "</ul>";
    }
?>
