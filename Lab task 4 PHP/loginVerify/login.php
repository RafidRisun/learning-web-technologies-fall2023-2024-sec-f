<?php
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

if (str_contains($username, '!') || str_contains($username, '@') || str_contains($username, '#') || str_contains($username, '$') || str_contains($username, '%') || str_contains($username, '^') || str_contains($username, '&') || str_contains($username, '*') || str_contains($username, '(') || str_contains($username, ')') || str_contains($username, '-') || str_contains($username, '+') || str_contains($username, '=') || str_contains($username, '_') || str_contains($username, '{') || str_contains($username, '}') || str_contains($username, '[') || str_contains($username, ']') || str_contains($username, '/') || str_contains($username, '|') || str_contains($username, '?') || str_contains($username, '>') || str_contains($username, '<') || str_contains($username, ',') || str_contains($username, '.')) {
    echo "Username contains Invalid Character!";
} else if (strlen($username) < 2) {
    echo "Username too Short!";
} else {
    if (strlen($password) < 8) {
        echo "Password too short!";
    } else if (!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')) {
        echo "Password must contain one of the following characters : @, #, $, %";
    } else {
        echo "Successfully Logged In!";
    }
}


?>