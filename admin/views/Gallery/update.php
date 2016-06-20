<div class="container-fluid">
<?php 
//get item param from model
$galleries = $viewModel->get('galleries');
if(!is_object($galleries)){
  echo 'Gallery is not exist!';
}else{
?>
<h1>Update form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group" style="display: none;">
    <label class="control-label" for="inputId">ID</label>
    <div class="controls">
      <input type="text" id="inputId" name="id" value="<?php echo $galleries->id; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Url</label>
    <div class="controls">
      <input type="text" id="inputName" name="url" value="<?php echo $galleries->url; ?>" placeholder="Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputContent">Description</label>
    <div class="controls">
      <textarea name="description" style="width: 500px; height: 200px;"><?php echo $galleries->description; ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<?php } ?>
</div>