<?php

$errors = [];

if(isset($_POST['submit'])) {  

    $firstname = mysqli_real_escape_string($con , $_POST['firstname'] ) ??null;
    $lastname =  mysqli_real_escape_string($con , $_POST['lastname']);
    $email =     mysqli_real_escape_string($con , $_POST['email']); 

    $sql = "INSERT INTO users (fristName , lastName , email )
            VALUES ('$firstname' , '$lastname' , '$email') ";

    if(empty($firstname)){
        $errors['firstnameError'] = ' يرجى ادخال الاسم الاول '; 
    }

    if(empty($lastname)){
        $errors['lastnameError'] = ' يرجى ادخال الاسم الاخير ';
    }

    if(empty($email)){
        $errors['emailError'] = ' يرجى ادخال الايميل ';
    }elseif(!filter_var($email , FILTER_VALIDATE_EMAIL)){
        $errors['emailError'] = ' يرجى ادخال ايميل صحيح ';
    }

    if (empty($errors)) {

        if(mysqli_query($con , $sql)){
            header('Location: ' .  $_SERVER['PHP_SELF'] );
        }else{
            echo 'Error: ' . mysqli_error($con);
        }
        
    }
    

}

?>