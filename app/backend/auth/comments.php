<?php
require_once 'app/backend/core/Init.php';

$post_id = Input::get('post_id');
$comments = Comment::getAllComments($post_id);
usort($comments, function($a, $b) {
    return strtotime($b->created_at) - strtotime($a->created_at);
});
$data = $user->data();