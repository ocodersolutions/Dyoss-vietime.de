<?php 
$categories = $viewModel->get('categories'); //get all categories
?>
<div class="container-fluid">
<h1>Create form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputCategory">Category</label>
    <div class="controls">
    <?php if(is_array($categories) && count($categories)){ ?>
      <select class="form-control" name="category_id">
        <?php foreach ($categories as $category) { ?>
          <option value="<?php echo $category->id ?>"><?php echo $category->name ?></option>
        <?php } ?>
      </select>
    <?php } else { ?>
      <span>Can't found categories</span>
    <?php } ?>
    
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputName">Name</label>
    <div class="controls">
      <input type="text" id="inputName" name="name" placeholder="Name">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputDescription">Description</label>
    <div class="controls">
      <textarea id="inputDescription" name="description" style="width: 500px; height: 200px;"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>