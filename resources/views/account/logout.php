<?php

/*
 * /resources/views/account/logout.php
 */

session_start();

session_unset();

session_destroy();

header("Location: home.php");