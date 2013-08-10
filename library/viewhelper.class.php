<?php

class ViewHelper {

    var $notmessage = array();

    function taglink($tagString){
     
      $implodedata = explode(",", $tagString);
      $libkdata = "";
      foreach($implodedata  as $linkdata ){
        $libkdata .= " <a href='".ROOT_URL."posts/tag?tag=".$linkdata."'> ".$linkdata." </a>";
      }
       return $libkdata;
    }

    function notification($mssage){
         
        $this->notmessage[] = $mssage;
    }

    function displayNotification(){

        $not = "";
        foreach($this->notmessage as $not){
        	$not .= "<p>$not</p>" ;
        }

        return $not;

    }

}

