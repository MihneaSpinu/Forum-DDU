<?php
require_once 'app/backend/core/Init.php';

if (!$user->isLoggedIn()) {
    Redirect::to('index.php');
}

// if (Input::get('post_id')) {
//     $post_id = Input::get('post_id');
//     $post = Post::getPostById($post_id);
//     $comments = Comment::getAllComments($post_id);
//     $topic_id = $post->topic_id;
// }

// if (Input::get('topic_id')) {
//     $topic_id = Input::get('topic_id');
//     $topic = Topic::getTopic($topic_id);
//     $posts = Post::getTopicPosts($topic_id);
// }

$post = Post::getPostById(Input::get('post_id'));
$topic_id = $post->topic_id;
$data = $user->data();

if (Input::get('submit')) {

    Post::create($post);
    Redirect::to('topic.php?id=' . $topic_id);
}