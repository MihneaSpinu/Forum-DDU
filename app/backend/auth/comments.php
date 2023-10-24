<?php
require_once 'app/backend/core/Init.php';

$post_id = Input::get('post_id');
$comments = Comment::getAllComments($post_id);