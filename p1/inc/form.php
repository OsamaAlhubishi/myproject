<?php 

$firstName =         $_POST['firstName'];
$lastName =          $_POST['lastName'];
$email =             $_POST['email'];


$errors = [
    'firstNameError' => '',
    'lastNameErroe' => '',
    'emailError' => '',

];

if (isset($_POST['submit'])) { 





//تحقق الاسم الاول
if(empty($firstName)){
    $errors['fristNameError'] = 'يرجى ادخال الاسم الاول';
    }
    
    //تححق الاسم الاخير
    if(empty($lastName)){ 
        $errors['lastNameError'] = 'يرجى ادخال الاسم الاخير';
}

//تحقق الايميل 
if(empty($email)){
    $errors['emailError'] = 'يرجى ادخال الايميل';
}elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'يرجى ادخال ايميل صحيح';
}


//تححق لا يوجد اخطاء
if(!array_filter($errors)){
    /*
    $firstName =        mysqli_real_escape_string($_POST['firstName']); 
    $lastName =         mysqli_real_escape_string($_POST['lastName']); 
    $email =            mysqli_real_escape_string($_POST['email']); 
*/
    $sql = "INSERT INTO users(firstName, lastName, email)
    VALUES ('$firstName', '$lastName', '$email')";    


    if(mysqli_query($conn, $sql)){
        header('Location: ' . $_SERVER['PHP_SELF']);
    } else{
        echo 'Error: ' . mysqli_error($conn);
    }
}

}



