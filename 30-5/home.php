<?php

include("connect.php");



if(isset($_POST['actionName'])){

  $postId= $_POST['postId'];
  $name = $_POST['name'];
try{


		$query = "UPDATE  li_ajax_post_load post_desc='$name' WHERE post_id='$postId'";
		$result = mysqli_query($con, $query);

		// if($result){
		//     $resultData = array('status' => true, 'message' => 'Post Successfully updated...');
	  //   }else{
	  //   	$resultData = array('status' => false, 'message' => 'Can\'t able to update a post details...');
	  //   }
	
    // echo json_encode($resultData);
     echo $postId."<br>". $name;
}

catch(Exception $e)
{
echo json_encode($e->getMessage()); 

}
}
?>

<form method="POST">

<div class="form-group">
    <label for="exampleInputEmail1">Post desc</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="name">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">ID</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="postId">
  </div>
 
  <button type="submit" class="btn btn-primary" name="actionName">Submit</button>
</form>