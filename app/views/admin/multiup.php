<?php require VIEW_ROOT . '/templates/cmheader.php';?>

<div class="container medit__body">
	<div class="row" style="">
		<div class="col-xs-12" id="title"><h1>Upload Gallery Images</h1></div>
	</div>
	<p><br/><br/></p>
	<a href="upload-1.php" class="btn btn-primary">Upload</a><h4 style="display: inline-block; padding-left:15px; ">Do not upload large PNG files. JPG or JPEG images are fine.</h4>
	<!--<a href="upload-2.php" class="btn btn-success">Upload 2</a>-->
	<p><br/></p>
	<hr>
	<h2>Current Gallery Images:</h2>
	<table>
		<thead>
			<tr>
				<th width="40px;">No</th>
				<th>File</th>
				<th width="80px;">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php
			if(isset($_GET['id'])){
				if(unlink('../uploads/'.$_GET['name'])){
					$stmt = $db->prepare("delete from multiupload where id='".$_GET['id']."'");
					if($stmt->execute()){
						echo "<script>location.href='multiup.php'</script>";
					}
				}
			}
			$stmt = $db->prepare(" SELECT * FROM multiupload ORDER BY id DESC");
			$stmt->execute();
			while ($row = $stmt->fetch()) {
			?>
				<tr>
					<td><?php echo $row['id'] ?></td>
					<td style="padding-right: 10px;"><?php echo $row['name'] ?></td>
					<td>
						<a href="?name=<?php echo $row['name'] ?>&id=<?php echo $row['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php	
			}
			?>
		</tbody>
	</table>
</div><!--/container-->
	
<?php require VIEW_ROOT . '/templates/cmfooter.php';?>