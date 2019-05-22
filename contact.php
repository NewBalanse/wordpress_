<?php

if (isset($_POST['message']))
    exit;

//require(dirname(__FILE__) . '/wp-load.php');

if (isset($_POST['name'])
    && isset($_POST['email']) && is_email($_POST['email'])
) {
    $headers = array(
        "Content-type: text/html; charset=utf-8",
        "From" . $_POST['name'] . "<" . $_POST['email'] . ">"
    );

    if (wp_mail(get_option('admin_email'), "Message with site", wpautop($_POST['message']), $headers)) {
        header('Location:' . site_url('/contact?msg=success'));
        exit;
    }
}

header('Location:' . site_url('/contact?msg=error'));
exit;