<?php
require_once 'app/backend/core/Init.php';

if (!$user->isLoggedIn()) {
    Redirect::to('login.php');
}
$data = $user->data();


$forum_id = Input::get('forum_id');
$topic_id = Input::get('topic_id');
$topics = Topic::getTopics()->results();
$posts = Post::getTopicPosts($topic_id)->results();
