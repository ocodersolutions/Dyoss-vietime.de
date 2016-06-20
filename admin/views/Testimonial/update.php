<div class="container-fluid">
<?php 
//get item param from model
$testimonial = $viewModel->get('testimonial');
if(!is_object($testimonial)){
  echo 'Testimonial is not exist!';
}else{
?>
<h1>Update form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group" style="display: none;">
    <label class="control-label" for="inputId">ID</label>
    <div class="controls">
      <input type="text" id="inputId" name="id" value="<?php echo $testimonial->id; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Name</label>
    <div class="controls">
      <input type="text" id="inputName" name="name" value="<?php echo $testimonial->name; ?>" placeholder="Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputContent">Content</label>
    <div class="controls">
      <textarea name="content" style="width: 500px; height: 200px;"><?php echo $testimonial->content; ?></textarea>
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