<?php
session_start();
session_destroy();
header("Location: ../../../securite/login.php");