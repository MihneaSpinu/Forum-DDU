<?php
require_once 'app/backend/core/Init.php';

if (!$user->isLoggedIn()) {
    Redirect::to('login.php');
}
$data = $user->data();
$topics = Topic::gettopics();
