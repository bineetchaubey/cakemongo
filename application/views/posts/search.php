<?php

   if(isset($error)){

    echo '<div class="alert alert-block alert-error"><a class="close">*</a>'.$error.'</div>';

   }
    if(isset($notification)){
   
    echo '<div class="alert alert-block alert-success"><a class="close">*</a>'.$notification.'</div>';

   }
  ?>
   <!-- <form action=""  class="form-search">
	<div class="input-append">
	<input type="text" class="span2 search-query" name="searchQuery">
	<button type="submit" class="btn">Search</button>
	</div>
  </form> -->
   


   <?php
 
   echo "<table class='table table-striped table-bordered'>";
   echo "<thead><tr><th>Name</th><th>Admin</th><th>Action</th></tr>";
	foreach ($allpost['results']  as $Post) {
         echo "<thead><tr><td><a href='".ROOT_URL."posts/view/".$Post['obj']['_id']->{'$id'}."'>".$Post['obj']['title']."</a></td><td>".$Post['obj']['user']."</td><td><a href='".ROOT_URL."posts/edit/".$Post['obj']['_id']->{'$id'}."'>edit<i class='icon-edit'></a></i><a href='".ROOT_URL."posts/delete/".$Post['obj']['_id']->{'$id'}."'>Delete<i class='icon-edit'></a></i></td></tr>";
	}

   echo "</table>";
   echo "<a  href='".ROOT_URL."posts/add' class='btn'>Add New Post</a>";
  
   echo "<a  href='".ROOT_URL."posts' class='btn'>View all post</a>";
   ?>