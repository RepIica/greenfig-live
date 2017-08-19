<?php
	require 'app/start.php';

	$menu = $db->query("
		SELECT id,name,label,option1,option2,price,dsc,price2,price3,price4
		FROM menu

		ORDER BY label ASC
	")->fetchAll(PDO::FETCH_ASSOC);

	$itemsByBrand = [];

	foreach ($menu as $menuList)
	{
	  $itemsByBrand[$menuList['label']][] = $menuList;
	}

	require VIEW_ROOT . '/page/show.php';
?>