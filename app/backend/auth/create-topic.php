<?php
require_once 'app/backend/core/Init.php';

if (Input::exists()) {
    if (Token::check(Input::get('csrf_token'))) {
        $validate = new Validation();

        $validation = $validate->check($_POST, array(
            'title' => array(
                'required' => true,
                'min' => 2,
                'max' => 25
            ),

            'content' => array(
                'required' => true,
                'min' => 2,
                'max' => 255,
            ),
        ));

        if ($validate->passed()) {
            try {
                Topic::create(array(
                    'name'  => Input::get('title'),
                    'description'  => Input::get('content'),
                    'forum_id'    => Input::get('forum_id'),
                ));

                Session::flash('create-topic-success');
                Redirect::to('forum.php?forum_id=' . Input::get('forum_id') . '&topic_id=' . Input::get('topic_id'));
            } catch (Exception $e) {
                die($e->getMessage());
            }
        } else {
            foreach ($validate->errors() as $error) {
                echo '<div class="alert alert-danger"><strong></strong>' . cleaner($error) . '</div>';
            }
        }
    }
}
$forum_id = Input::get('forum_id');
if ($forum_id == 1) {
    $forum_name = "Finite Abys";
} else {
    $forum_name = "Mod Workshop";
}