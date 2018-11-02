<?php 
if(isset($_POST['insert']))
{ 
	if(isset($_POST['name']) && isset($_POST['image']) && isset($_POST['detail']))
	{
		$id=$_GET['id'];
		$name=$_POST['name'];
		$image=($_POST['image']=='')?$_POST['image_tmp']:$_POST['image'];
		$detail=$_POST['detail'];
		$ccoach = new c_AdCoach();
		$ccoach->postUpdateCoach($name, $image, $detail, $id);
	}
}
else
{
	$ccoach = new c_AdCoach();
	$coach = $data['coach'];
}
if(isset($_POST['upload']))
{
  if(isset($_POST['name']) && isset($_POST['image']) && isset($_POST['detail']))
  {
    $name=$_POST['name'];
    $image=$_POST['image'];
    $detail=$_POST['detail'];
  }

  $image = $_FILES["fileToUpload"]["name"];
  $target_dir = "public/images/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
    } else {
      echo "File is not an image.";
      $uploadOk = 0;
    }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}
  // Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
}
?>
<div class="section__content section__content--p30">
  <div class="container-fluid">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Edit Coach</h3>
            </div>
            <form role="form" action="#" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Full Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1"  value="<?=$coach->coachName?>">
                </div>

                <div class="form-group">
                  <div><label for="exampleInputFile">Image</label></div>              
                  <input type="file" name="fileToUpload" id="fileToUpload">
                  <div id="preview"><img src="public/images/<?=isset($image)?$image:'Uploading2.png'?>"></div>
                  <input class="btn btn-success" type="submit" name="upload" value="upload">
                </div>
                <div class="form-group">
                  <label>Detail</label>
                  <textarea name="detail" class="form-control" rows="5" placeholder="Detail"><?=$coach->coachDetail?></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button name="insert" type="submit" class="btn btn-primary">Update</button>
              </div>
              <input type="hidden" name="image" value="<?=isset($image)?$image:''?>">
            </form>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
    </section>

    <!-- /.content -->
  </div>
</div>






