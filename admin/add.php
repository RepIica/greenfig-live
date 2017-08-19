<?php 

	require '../app/start.php';
		
	if (!empty($_POST)) {
		$name 		= $_POST['name'];
		$label 		= $_POST['label'];			
		$dsc 		= $_POST['dsc'];
		$price		= $_POST['price'];
		$price2		= $_POST['price2'];
		$price3		= $_POST['price3'];
		$price4		= $_POST['price4'];

		$insertPage = $db->prepare("
			INSERT INTO menu (name, label, dsc,price,price2,price3,price4)
			VALUE (:name, :label, :dsc, :price,:price2,:price3,:price4)
		");

		$insertPage->execute([
			'name' 		=> $name,
			'label' 	=> $label,
			'dsc' 		=> $dsc,
			'price' 	=> $price,
			'price2' 	=> $price2,
			'price3' 	=> $price3,
			'price4' 	=> $price4,
		]);

		header('Location: ' . BASE_URL . '/admin/list.php');
	}

	require VIEW_ROOT . '/admin/add.php';

?>