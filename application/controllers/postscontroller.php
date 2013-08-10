<?php
/**
*
* File for post controller
*
*
* @package Cakemongo
* @author Bineet kumar chaubey <bineet08@gmail.com>
*
*/

/**
*
* Class file for post controller
*
*
* @package Cakemongo
* @author Bineet kumar chaubey <bineet08@gmail.com>
*
*/

class PostsController  extends Controller 
{

    
   function index(){
     $this->set("allpost",$this->Post->selectAll());
   }

   function view($id){

       if(isset($_POST['saveComment'])){

        unset($_POST['saveComment']); 
        $docid = $_POST['updateid'];
        unset($_POST['updateid']); 
        $alldata = $_POST;
        $alldata['uniqueid'] =  uniqid('comments_');
         $alldata['created'] = new MongoDate();
      

        // $data["comments"][] = $alldata;
        // here we are going to update a new files coments in posts table for comments
        
        $result = $this->Post->pushupdate($docid,'comments',$alldata);
         if($result['ok'] == 1){
            /*echo "post have been save";*/
            $this->set("notification",'post have been save');
            // $this->notification("post have been save");
          }else{
            /*echo "Opps sonthing Wrong";*/
            $this->set("error",'Opps sonthing Wrong...');
            // $this->notification("Opps sonthing Wrong..");
          }
       }

     $this->set("single",$this->Post->select($id));

    }
   
  function add(){

        if(isset($_POST['savePost'])){

        	unset($_POST['savePost']);
	        $alldata = $_POST;

	        $alldata['content'] = utf8_encode($alldata['content']);
          $alldata['tag'] = explode(',', $alldata['tag']);

	        $result = $this->Post->save($alldata);
	        // var_dump($result) ;
	        if($result['ok'] == 1){
	        	/*echo "post have been save";*/
	        	$this->set("notification",'post have been save');
	        	// $this->notification("post have been save");
	        }else{
	        	/*echo "Opps sonthing Wrong";*/
	        	$this->set("error",'Opps sonthing Wrong...');
	        	// $this->notification("Opps sonthing Wrong..");
	        }
       }

   }

   function  edit($id){
   	  /*echo $id ;*/
     
      if(isset($_POST['updatePost'])){
      		$docid =  $_POST['DocId'];
        	unset($_POST['updatePost']);
            unset($_POST['DocId']); 
            $alldata = $_POST;
            $alldata['content'] = utf8_encode($alldata['content']);
            $alldata['tag'] = explode(',', $alldata['tag']);
	        $result = $this->Post->update($docid,$alldata);
	       /* var_dump($result) ;*/
	        if($result['ok'] == 1){
	        	/*echo "Post Update";*/
	        	// $this->notification("Post Update notification");
	        	$this->set("notification",'Post Update');

	        }else{
	        	/*echo "Opps Somthing wrong with Update.. ";*/
	        	$this->set("error",'Post Update');
	        	// $this->notification("Post not Update notification");
	        }
       }

     $this->set("single",$this->Post->select($id));

    }

   function delete($id){

         $result = $this->Post->delete($id);

         // var_dump($result);
         if($result['ok'] == 1){
           $this->set("notification",'Post Deleted');
           header( 'Location:'.ROOT_URL."posts") ;
         }
         // exit();
         die();

   }

   function search(){
       /* var_dump($_GET);
        $searchTag = $_GET['tag'];*/

      // print_r($this->param['query']);
        $string = isset($this->param['query']['searchQuery']) ? $this->param['query']['searchQuery'] :"" ;
        // $criteria = array('$or' => array(array('title' => $string,'tag' => $string)));
        $this->set("allpost",$this->Post->findSearch($string));
   }
    
   function tag(){

        $tag = isset($this->param['query']['tag']) ? $this->param['query']['tag'] :"" ;       
        $criteria = array('$or' => array(array('title' => $tag,'tag' => $tag)));
        $this->set("allpost",$this->Post->search($criteria));
   }


   function comdelete($id,$second){

    /*var_dump($id);
      var_dump($second);

       exit("ddd");*/


      $result = $this->Post->DeleteArraySingle($id,$second);
      if($result['ok'] == 1){
           $this->set("notification",'Post Deleted');
           header( 'Location:'.ROOT_URL."posts") ;
         }

   }  

}

