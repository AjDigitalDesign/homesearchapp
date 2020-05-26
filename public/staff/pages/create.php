<?php
require_once('../../../private/initialize.php');

if (is_post_request()) {
    // Handle form values sent by new.php

    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';


    echo "Form parameters<br />";
    echo "menu Name: " . $menu_name . "<br />";
    echo "Position: " . $position . "<br />";
    echo "visible: " . $visible . "<br />";
} else {
    redirect_to(url_for('/staff/pages/new.php'));
}
