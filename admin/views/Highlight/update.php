<div class="container-fluid">
<?php 
//get item param from model
$highlights = $viewModel->get('highlight');
if(!is_object($highlights)){
  echo 'Highlights is not exist!';
}else{
?>
<h1>Update form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group" style="display: none;">
    <label class="control-label" for="inputId">ID</label>
    <div class="controls">
      <input type="text" id="inputId" name="id" value="<?php echo $highlights->id; ?>">
    </div>
  </div>
  <div class="control-group" >
    <label class="control-label" for="inputId">Tittle</label>
    <div class="controls">
      <input type="text" id="inputId" name="tittle" value="<?php echo $highlights->tittle; ?>">
    </div>
  </div>  
  <div class="control-group">
    <label class="control-label" for="inputContent">Description</label>
    <div class="controls">
      <textarea name="description" style="width: 500px; height: 200px;"><?php echo $highlights->description; ?></textarea>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Images</label>
    <div class="controls">
      <input type="text" id="inputName" name="images" value="<?php echo $highlights->images; ?>" placeholder="Name">
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