<?php 
	require 'app/start.php';

	$multiupload = $db->query("
		SELECT id,name
		FROM multiupload
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/gallery.php';
?>