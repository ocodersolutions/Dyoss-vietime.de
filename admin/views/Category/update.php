<div class="container-fluid">
<?php 
//get item param from model
$categories = $viewModel->get('categories');
if(!is_array($categories)){
  echo 'Category is not exist!';
}else{foreach ($categories as $category) {
?>
<h1>Update form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group" style="display: none;">
    <label class="control-label" for="inputId">ID</label>
    <div class="controls">
      <input type="text" id="inputId" name="id" value="<?php echo $category->id; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Name</label>
    <div class="controls">
      <input type="text" id="inputName" name="name" value="<?php echo $category->name; ?>" placeholder="Name">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
<?php } ;}?>
</div>