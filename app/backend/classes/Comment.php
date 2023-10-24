<?php

class Comment
{
    public static function create($fields = array())
    {
        if (!Database::getInstance()->insert('comments', $fields)) {
            throw new Exception("Unable to create the comment.");
        }
    }

    public static function delete($id)
    {
        if (!Database::getInstance()->delete('comments', array('comment_id', '=', $id))) {
            throw new Exception("Unable to delete the comment.");
        }
    }

    public static function getAllComments($post_id)
    {
        $comments = Database::getInstance()->get('comments', array('post_id', '=', $post_id))->results();
        //return list of comments
        return $comments;
    }

    // public static function getCommentById($comment_id)
    // {
    //     $comment = Database::getInstance()->get('comments', array('comment_id', '=', $comment_id));
    //     if ($comment->count()) {
    //         return $comment->first();
    //     }
    // }
}
