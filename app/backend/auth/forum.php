<?php
require_once 'app/backend/core/Init.php';

if (!$user->isLoggedIn()) {
    Redirect::to('login.php');
}
$data = $user->data();


$forum_id = Input::get('forum_id');
$topic_id = Input::get('topic_id');
$topics = Topic::getTopics()->results();
$posts = array();

if (Topic::getTopic($topic_id)->name == "All" || Topic::getTopic($topic_id)->name == "Trending") {
    foreach ($topics as $allTopics) {
        //if topic contains posts, write topic name
        foreach (Post::getTopicPosts($allTopics->topic_id)->results() as $post) {
            array_push($posts, $post);
        }
    }
} else {
    $posts = Post::getTopicPosts($topic_id)->results();
}
usort($posts, function ($a, $b) {
    return strtotime($b->created_at) - strtotime($a->created_at);
});
