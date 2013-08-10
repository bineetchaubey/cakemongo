<?php

/*var_dump($single);*/

 echo $this->displayNotification();

?>

<form action="" method="Post"  class="form-horizontal"> 

   <input type="hidden" name="DocId" value="<?php echo  $single['_id']->{'$id'}?>" />
	<div class="control-group">
 <label for"titile" class="control-label" >Title</label> 
 <div class="controls">
  <input type="text" name="title" placeholder="name" value="<?php echo $single['title'] ?>" />
   </div>
  </div>
  <div class="control-group">
    <label for"user" class="control-label" >Author</label> 
  <div class="controls">
 <input type="text" name="user" placeholder="author" value="<?php echo $single['user'] ?>" />
 </div>
  </div>
 <div class="control-group">

 <label for"tag" class="control-label">tag</label> 
 <div class="controls">
 <input type="text" name="tag" placeholder="Tag name in camma seprated" value="<?php echo implode(',', $single['tag'])  ?>"/>
 </div>
  </div>

<div class="control-group">
<label for"content" class="control-label" >Content</label> 
<div class="controls">
<textarea name="content" style="width:350px; height:225px;" ><?php echo $single['content'] ?></textarea>
</div>
 </div>
 <div class="controls">
 <input type="submit" name="updatePost" value="Update post" class="btn" /> 
 </div>

</form>












