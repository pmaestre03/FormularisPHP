<h2>Login</h2>

<form method="post">
    <input type="text" name="user" placeholder="user">
    <br>
    <input type="password" name="passwd" placeholder="password">
    <br>
    <input type="submit">
</form>

<?php
$users = [
    "pepe" => "1234",
    "pau" => "5678",
    "pepa" => "9876"
    
];
var_dump($users);
if (isset($_POST["user"])) {
    if ($users[0]==$_POST["user"] && $users[1]==$_POST["passwd"]) {
        echo "Welcome, " . $_POST["user"];
    }
    else {
        echo "User or password invalid";
    }
}



?>