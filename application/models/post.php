<?php

class Post extends modelMongo
{

function DeleteArraySingle($id, $nestArrid){

        $collection = new MongoCollection($this->db, $this->_table);

        if(!empty($id) && !empty($nestArrid)){
            $result = $collection->update(array('_id' => new MongoId($id)), array( '$pull' => array( 'comments' => array("uniqueid" => $nestArrid ))));
        }
      return $result;
     }

}