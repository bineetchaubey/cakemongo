<?php

   if(isset($error)){

    echo '<div class="alert alert-block alert-error"><a class="close">*</a>'.$error.'</div>';

   }
    if(isset($notification)){
   
    echo '<div class="alert alert-block alert-success"><a class="close">*</a>'.$notification.'</div>';

   }
  ?>
   
  
   <?php
   echo "<table class='table table-striped table-bordered'>";
   echo "<thead><tr><th>Name</th><th>Admin</th><th>Action</th></tr>";
	foreach ($allpost  as $Post) {
         echo "<thead><tr><td><a href='".ROOT_URL."posts/view/".$Post['_id']->{'$id'}."'>".$Post['title']."</a></td><td>".$Post['obj']['user']."</td><td><a href='".ROOT_URL."posts/edit/".$Post['_id']->{'$id'}."'>edit<i class='icon-edit'></a></i><a href='".ROOT_URL."posts/delete/".$Post['_id']->{'$id'}."'>Delete<i class='icon-edit'></a></i></td></tr>";
	}

   echo "</table>";
   echo "<a  href='".ROOT_URL."posts/add' class='btn'>Add New Post</a>";
  
   echo "<a  href='".ROOT_URL."posts' class='btn'>View all post</a>";
   ?>