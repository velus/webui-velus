<?php
include 'core/init.php';

if (empty($_POST) === false) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if (empty($username) === true || empty($password) === true){
        $errors[]='you need to enter a username and password';
    } elseif (user_exists($username) === false) {
        $errors[]='we can\'t find that username. have you registered?';
    } elseif (user_exists($username)===false) {
        $errors[] = 'we can\'t find your user name sorry, have you registered?';
    } elseif (user_active($username)=== false) {
        $errors[]='you haven\'t activated your acount';
} else {
    $login = login($username,$password);
    if ($login === false) {
        $errors[] = 'something wasnt right there please check your password again';
    } else {
        echo 'ok!';
        // start useer session
        $_SESSION['user_id']=$login;
        //redirect user to home
        header('Location: index.php');
        exit();
    }
}
}
 else {
$errors[]= 'no data recived';
}

include 'includes/overall/header.php';
if (empty($errors)=== false){
    
}
?>
<h2>We tried to log you in but ....</h2>
<?php
echo output_errors($errors);
include 'includes/overall/footer.php';
?>
