<?php 

require '../app/start.php';

if (!empty($_POST)) {
	$id 	= $_POST['id'];
	$name 		= $_POST['name'];
	$label 		= $_POST['label'];
	$dsc 		= $_POST['dsc'];
	$price		= $_POST['price'];
	$price2		= $_POST['price2'];
	$price3		= $_POST['price3'];
	$price4		= $_POST['price4'];


	$updatePage = $db->prepare("
		UPDATE menu
		SET
			name 		= :name,
			label 		= :label,
			dsc 		= :dsc,
			price 		= :price,
			price2 		= :price2,
			price3 		= :price3,
			price4 		= :price4
		WHERE id = :id
	");

	$updatePage->execute([
		'id' 		=> $id,
		'name'		=> $name,
		'label'		=> $label,
		'dsc' 		=> $dsc,
		'price' 	=> $price,
		'price2'	=> $price2,
		'price3'	=> $price3,
		'price4' 	=> $price4,
	]);

	header('Location: ' . BASE_URL . '/admin/list.php');
}

if (!isset($_GET['id'])) {
	header('Location: ' . BASE_URL . '/admin/list.php');
	die(); 
}

$menuList = $db->prepare("
	SELECT id,name,label,dsc,price,price2,price3,price4
	FROM menu
	WHERE id = :id
");

$menuList->execute(['id' => $_GET['id']]);

$menuList = $menuList->fetch(PDO::FETCH_ASSOC);

require VIEW_ROOT . '/admin/edit.php';
?>