<?php
require_once 'app/backend/core/Init.php';

if (!Input::get('post_id')) {
    Redirect::to('index.php');
}

if (Input::exists()) {
    Comment::create(array(
        'user_id' => $data->uid,
        'post_id' => $post_id,
        'content' => Input::get('content'),
        'created_at' => date('Y-m-d H:i:s')
    ));
    Redirect::to('posts.php?post_id=' . $post_id);
}

$data = $user->data();
$channel_id = Input::get('channel_id');
$post_id = Input::get('post_id');