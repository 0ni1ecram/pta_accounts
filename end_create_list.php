<?php

session_start();

session_destroy();

header("Location:book.php");
exit;