<h1>Check Passwords</h1>

<?php
    $password1 = $_POST["passwd1"];
    $password2 = $_POST["passwd2"];
    $numeric = false;
    for ($i=0;$i<strlen($password1);$i++) {
        if (is_numeric($password1[$i])) {
            $numeric = true;
        }
    }
    if ($password1==$password2) {
        if ($numeric) {
            echo "<p>Correct password</p>";
        } else {
            echo "<p>Not contains a number</p>";
        }
    } else {
        echo "<p>Incorrect password</p>";
    }
?>