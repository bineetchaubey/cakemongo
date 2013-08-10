<?php
/**
**
*  This is  Mongo db Query Php Class File 
*
* PHP 5.4
* @author Bineet Kumar Chaubey <bineet.chaubey@indinaic.com>
*/


/**
**
*  This is  Mongo db Query Php Class File 
*
* PHP 5.4
* @author Bineet Kumar Chaubey <bineet.chaubey@indinaic.com>
* @version 1,0
* @see
* @package cakeMongo
* @subpackeg Mongo
*/

class MongoQuery {
    protected $_dbHandle;
    protected $_result;
    protected $_db;

    /** Connects to database **/

    function connect($address, $account, $pwd, $name) {
        
         $m = new MongoClient();
         $this->db = $m->selectDB($name);
         return  $this->db;

    }

    /** Disconnects from database **/

    /**
    * Retrive all record from table
    * 
    * @return result  Mongo  db object 
    * 
    */
    function selectAll() {
        $collection = new MongoCollection($this->db, $this->_table);
    	$query = $collection->find();
    	return $query;
    }
    
    /**
    * Find a single record from table 
    *
    * @param string Document $id 
    * @return result  Mongo  db object 
    */

    function select($id) {
        $collection = new MongoCollection($this->db, $this->_table);
    	$result = $collection->findOne(array('_id' => new MongoId($id)));
    	return $result;
  
    }
    
    /**
    * save Record into Collection
    *
    * @param array $data
    * @return result  Mongo  db object 
    */

    function save($data = array()){
      $collection = new MongoCollection($this->db, $this->_table);

     /* var_dump(json_encode($data));*/
      $result = $collection->insert($data);
      return $result ;

    }


    /**
    *  Update Record into Collection
    *
    * @param array $data
    * @param string $id Document Id
    * @return result  Mongo  db object 
    */

    function update($id,$data=array()){
       
       $collection = new MongoCollection($this->db, $this->_table);

        if(!empty($data)){
            $newdata = array('$set' => $data);
            $result = $collection->update(array('_id' => new MongoId($id)), $newdata);
        }

      return $result;
    }

    function pushupdate($id,$column,$data=array()){
     
      $collection = new MongoCollection($this->db, $this->_table);

        if(!empty($data) && !empty($column)){
            $newdata = array('$set' => $data);
            $result = $collection->update(array('_id' => new MongoId($id)), array( '$push' => array( $column => $data)));
        }
      return $result;
    }




    function delete($id){
        
        $collection = new MongoCollection($this->db, $this->_table);
        $criteria = array('_id' => new MongoId($id));
        $result = $collection->remove($criteria);

        return $result;

    }

    function search($criteria){
        $collection = new MongoCollection($this->db, $this->_table);
        $query = $collection->find($criteria);// ->explain();
        /*echo "<pre>";
        var_dump($query);*/
        return $query;

    }

     function findSearch($criteria){

       $result = $this->db->command(
            array(
                'text' => 'posts', //this is the name of the collection where we are searching
                'search' => $criteria, //the string to search
                'limit' => 5, //the number of results, by default is 1000
                
            )
        ); 
         /*echo "<pre>";
         print_r($result);*/
         return $result;
     }
   
}

/**
*  some mongo db command 
*  below creat a text index enable 
*  db.adminCommand( { setParameter : "*", textSearchEnabled : true } );
* 
*  create a index text 
*  db.posts.ensureIndex({title:"text",content:"text"})
*  run a query 
*  db.posts.runCommand( "text", { search: "Ahmedabad" } )
*
*  mongoexport -d blog -c posts -o file-bk.json
*
*
*/