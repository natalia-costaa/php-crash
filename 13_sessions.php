<?php
session_start();
if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_FULL_SPECIAL_CHARS);

    $password = $_POST['password'];

    if($username == 'john' && $password = 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'Incorrect login!';
    }
       
}
?>


<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"
method="POST">
    <div>
        <label>Username: </label>
        <input type="text" name="username">
    </div>
    <div>
        <label>Password: </label>
        <input type="password" name="password">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>