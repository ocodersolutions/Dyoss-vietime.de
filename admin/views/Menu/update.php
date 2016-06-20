<div class="container-fluid">
<?php 
//get item param from model
$menu = $viewModel->get('menu');
if(!is_object($menu)){
  echo 'Menu is not exist!';
}else{
?>
<h1>Update form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group" style="display: none;">
    <label class="control-label" for="inputId">ID</label>
    <div class="controls">
      <input type="text" id="inputId" name="id" value="<?php echo $menu->id; ?>">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputCategory">Category</label>
    <div class="controls">
    <?php $categories = $viewModel->get('categories'); //get all categories
      if(is_array($categories) && count($categories)){
    ?>
      <select class="form-control" name="category_id">
      <?php foreach ($categories as $category) { ?>
      <option value="<?php echo $category->id ?>" <?php if ($category->id==$menu->category_id){echo "selected";}else{ echo "";}?>><?php echo $category->name ;}?>
      </option>
      </select>
      <?php } else { ?>
      <span>Can't found categories</span>
    <?php } ?>
      </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Name</label>
    <div class="controls">
      <input type="text" id="inputName" name="name" value="<?php echo $menu->name; ?>" placeholder="Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputDescription">description</label>
    <div class="controls">
    <textarea id="inputDescription" name="description" style="width: 500px; height: 200px;"><?php echo $menu->description; ?></textarea>
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