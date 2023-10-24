<?php

class Topic
{
    public static function getTopics()
    {
        $topics = Database::getInstance()->get('topics', array('topic_id', '>', '0'));
        //return list of topics
        return $topics;
    }

    public static function getTopic($id)
    {
        $ret = Database::getInstance()->get('topics', array('topic_id', '=', $id));
        
        if ($ret->count()) {
            echo $ret->first()->topic_subject;
            return $ret->first();
        }        
    }
}
