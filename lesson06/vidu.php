<?php
session_start();

// var_dump($_SESSION);

//Them du lieu vao session
$_SESSION['abc'] = 'TRAN VAN A';

//Xoa du lieu khoi session
// unset($_SESSION['abc']);

//Sua thong tin
// $_SESSION['abc'] = '123';

// session_destroy();

echo 'Setup data';