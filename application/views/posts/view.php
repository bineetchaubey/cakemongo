<?php

/*var_dump($single);*/
?>




<h2><?php echo $single['title']; ?></h2>
<br/>

<span>Tags</span> <?php echo $this->taglink(implode(',', $single['tag'])) ?>

<p><?php echo $single['content']; ?></p>


 <?php
 echo "<h2> Comments On this Post</h2>";
 ?>
<?php
 if(isset($single['comments']) && count($single['comments']) > 0){

 foreach($single['comments'] as  $comments) {

   echo "Written by <b>". $comments['name'] ."</b>";
   echo "<p>".$comments['content']."</p>";
   echo "<a href='".ROOT_URL."posts/comdelete/".$single['_id']->{'$id'}."/".$comments['uniqueid']."'  >Delete Commants</a>";
   echo "<br/>";
 }
 }else{
 	echo "<p>Sorry no Comment on this post </p>" ;
 }
?>

<?php
 echo "<h2> Post Comments </h2>";
 ?>



<form action="" method="Post"  class="form-horizontal"> 

	<input type="hidden" name="updateid" value="<?php  echo $single['_id']->{'$id'} ?>"  /> 
	<div class="control-group">
 <label for"titile" class="control-label" >Name</label> 
 <div class="controls">
  <input type="text" name="name" placeholder="name" />
   </div>
  </div>
  <div class="control-group">
    <label for"user" class="control-label" >Email</label> 
  <div class="controls">
 <input type="text" name="email" placeholder="Email" />
 </div>
  </div>
<div class="control-group">
<label for"content" class="control-label" >Content</label> 
<div class="controls">
<textarea name="content"   width="350px" height="225px"></textarea>
</div>
 </div>
 <div class="controls">
 <input type="submit" name="saveComment" value="save Comment" class="btn" /> 
 </div>

</form>



<?php
echo "<a  href='".ROOT_URL."posts' class='btn'>View all post</a>";
?>

