<?php

require __DIR__."/../init/web.php";

sess_start();

if (isset($_SESSION["user"])) {
	require __DIR__."/home.php";
} else {
	require __DIR__."/login.php";
}
