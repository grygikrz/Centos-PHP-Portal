<?php 
require('../app/init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Summernote</title>
  <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <link href="../css/admin.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
  <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>
  <script src="http://gregpike.net/demos/bootstrap-file-input/bootstrap.file-input.js"></script>
  
</head>
<body>
  	<form action="" type="submit">
    <div class="form-group">
    <label for="inputdefault">Title</label>
    <input class="form-control" id="inputdefault" type="text">
    <input type="file" title="Add title image"> 
  	</div>
  	<div id="summernote"><p>Hello Summernote</p></div>
    <button type="button" class="btn btn-success">Send</button>
  	</form>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote({
        height: 500
        });
    });
    $('input[type=file]').bootstrapFileInput();
	$('.file-inputs').bootstrapFileInput();
  </script>
</body>
</html>