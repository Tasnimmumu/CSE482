<?php

    session_start();
    session_unset();
    header("location: ./sign-up.php");