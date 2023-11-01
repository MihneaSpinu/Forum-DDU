<?php

class Topic
{
    public static function create($fields = array())
    {
        if (!Database::getInstance()->insert('topics', $fields)) {
            throw new Exception("Unable to create the topic.");
        }
    }

    public static function delete($id)
    {
        if (!Database::getInstance()->delete('topics', array('topic_id', '=', $id))) {
            throw new Exception("Unable to delete the topic.");
        }
    }

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
            return $ret->first();
        }        
    }
}
