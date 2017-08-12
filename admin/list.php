<?php
	require '../app/start.php';

	$menu = $db->query("
		SELECT id,name,label,price,dsc,price2,price3,price4
		FROM menu
		
		ORDER BY id DESC
	")->fetchAll(PDO::FETCH_ASSOC);

	require VIEW_ROOT . '/admin/list.php';
?>