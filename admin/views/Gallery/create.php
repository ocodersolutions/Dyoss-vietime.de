<div class="container-fluid">
<h1>Create form</h1>
<form class="form-horizontal" method="POST">
  <div class="control-group">
    <label class="control-label" for="inputName">Url</label>
    <div class="controls">
      <input type="text" id="ckfinder-input-popup-1" name="url" placeholder="url...">
      <a id="ckfinder-popup-1" class="btn btn-default" onclick="selectFileWithCKFinder( 'ckfinder-input-popup-1' )">Choose File</a>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputdescription">Description</label>
    <div class="controls">
      <textarea id="inputdescription" name="description" style="width: 500px; height: 200px;"></textarea>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <button type="submit" class="btn btn-success">Submit</button>
    </div>
  </div>
</form>
</div>
<script type="text/javascript">
  var button1 = document.getElementById( 'ckfinder-popup-1' );
 function selectFileWithCKFinder( elementId ) {
    CKFinder.popup( {
      chooseFiles: true,
      width: 800,
      height: 600,
      onInit: function( finder ) {
        finder.on( 'files:choose', function( evt ) {
          var file = evt.data.files.first();
          var output = document.getElementById( elementId );
          output.value = file.getUrl();
        } );
  window.onload= function(){ 
    // your code 
    finder.on( 'file:choose:resizedImage', function( evt ) {
          var output = document.getElementById( elementId );
          output.value = evt.data.resizedUrl;
        } );
  };
        
      }
    } );
  }

  </script>
