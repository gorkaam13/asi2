<?php

// https://www.sitepoint.com/hashing-passwords-php-5-5-password-hashing-api/

$pass = 'p1';
$hash = password_hash($pass, PASSWORD_DEFAULT);
echo $hash;
//$hash = '$2y$10$g18PwdWt3sy2x4aO17/GT.vK3kM4fGsSVOwgT43MuElYvmiQaULhG$2y$10$g18PwdWt3sy2x4aO17/GT.vK3kM4fGsSVOwgT43MuElYvmiQaULhG';
$hash = '$2y$10$HRnWu0Br0teJdknFBvFRHuhcVym2yfl7CoTaZQ.gGphuBb05PbK3S';
echo $hash . "<br>";



if (password_verify($pass, $hash)) {
    // Success!
    echo "Success!";
}
else {
    // Invalid credentials
    echo "Error!";
}