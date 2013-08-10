<?php

   if(isset($error)){

   	echo '<div class="alert alert-block alert-error"><a class="close">*</a>'.$error.'</div>';

   }
    if(isset($notification)){

   	echo '<div class="alert alert-block alert-success"><a class="close">*</a>'.$notification.'</div>';

   }

   echo "<a  href='".ROOT_URL."posts' class='btn'>View all post</a>";
?>

<form action="" method="Post"  class="form-horizontal"> 
	<div class="control-group">
 <label for"titile" class="control-label" >Title</label> 
 <div class="controls">
  <input type="text" name="title" placeholder="name" />
   </div>
  </div>
  <div class="control-group">
    <label for"user" class="control-label" >Author</label> 
  <div class="controls">
 <input type="text" name="user" placeholder="author" />
 </div>
  </div>
 <div class="control-group">

 <label for"tag" class="control-label">tag</label> 
 <div class="controls">
 <input type="text" name="tag" placeholder="Tag name in camma seprated"/>
 </div>
  </div>

<div class="control-group">
<label for"content" class="control-label" >Content</label> 
<div class="controls">
<textarea name="content"   width="350px" height="225px"></textarea>
</div>
 </div>
 <div class="controls">
 <input type="submit" name="savePost" value="save post" class="btn" /> 
 </div>

</form>








