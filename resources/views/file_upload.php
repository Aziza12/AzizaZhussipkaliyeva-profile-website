<html>
<body>

<?php 
echo Form::open(array('url' => '/uploadfile','files' => 'true'));
echo 'select the file to upload.';
echo Form::file('image');
echo Form::submit('Upload File');
echo Form::close();
?>
</body>
</html>