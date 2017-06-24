<?php
include "util.php";

session_start();
session_destroy();
header("location:main.php?msg=로그아웃 되었습니다.");

?>