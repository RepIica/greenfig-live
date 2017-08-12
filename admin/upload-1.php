<?php 
	require '../app/start.php';
	require VIEW_ROOT . '/templates/cmheader.php';
?>
<p><br/><br/></p>

<div class="container">
	<?php
	if(isset($_FILES['files'])) {
		foreach ($_FILES['files']['name'] as $file=> $name) {
			$filename = date('Ymd-His',time()).mt_rand().'-'.$name;
			try {
				if(move_uploaded_file($_FILES['files']['tmp_name'][$file],'../uploads/'.$filename)){
					$stmt = $db->prepare("INSERT INTO multiupload VALUES(null,?)");
					$stmt->bindParam(1, $filename);
					$stmt->execute();
				}
			} catch(Exception $e) {
				echo $e;
			}

		}
	}
	?>
	<form method="POST" enctype="multipart/form-data">
		<input type="file" name="files[]" multiple>
		<input type="submit" class="btn btn-primary" value="Upload">
		<a href="multiup.php" class="btn btn-info">Back</a>
	</form>
</div><!--/container-->

<?require VIEW_ROOT . '/templates/cmfooter.php';?>