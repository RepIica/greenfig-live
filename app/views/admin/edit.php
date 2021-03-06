<?php //require VIEW_ROOT . '/templates/header.php'; ?>

	
	<div id="container">
		<h2>Edit menu</h2>
		<form action="<?php echo BASE_URL; ?>/admin/edit.php" method="POST" autocomplete="off">
			<label for="name">
				Name:
				<input type="text" name="name" id="name" placeholder="item name" value="<?php echo e($menuList['name']); ?>">
			</label>
			<label for="label">
				Label:
				<input type="text" name="label" id="label" placeholder="item category" value="<?php echo e($menuList['label']); ?>">
			</label>
			<label for="price">
				Price:
				<input type="text" name="price" id="price" placeholder="0.00" value="<?php echo e($menuList['price']); ?>">
			</label>
			<label for="price2">
				Price 2:
				<input type="text" name="price2" id="price2" class="pricex" placeholder="only for 'The Bar' or 'The Hall of Fame' labels" value="<?php echo e($menuList['price2']); ?>">
			</label>
			<label for="price3">
				Price 3:
				<input type="text" name="price3" id="price3" class="pricex" placeholder="only for 'The Bar' or 'The Hall of Fame' labels" value="<?php echo e($menuList['price3']); ?>">
			</label>			
			<label for="price4">
				Price 4:
				<input type="text" name="price4" id="price4" class="pricex" placeholder="only for 'The Bar' or 'The Hall of Fame' labels" value="<?php echo e($menuList['price4']); ?>">
				<span id="double">*Enter 2.22 for any price to display DOUBLE</span>
			</label>
			<label for="dsc">
				Description:
				<textarea name="dsc" id="dsc" cols="30" rows="10" placeholder="optional"><?php echo e($menuList['dsc']); ?></textarea>
			</label>

			<input type="hidden" name="id" value="<?php echo $menuList['id']; ?>">

			<input type="submit" value="Save">
		</form>
	</div>
<?php //require VIEW_ROOT . '/templates/footer.php'; ?>

<style type="text/css">
body
{
	font:1em "Helvetica", sans-serif;
	background-color:#edeff0;
	margin:0;
}
#container{
	margin-top: 30px !important;
	margin: auto;
	width: 300px;
}
h2
{
	font-weight:200;
	text-align: center;
}

input,textarea { font-size:inherit; }
}
input{float: right;}
input[type="text"],textarea
{
	width:100%;
	padding:10px;
	box-sizing:border-box;
	border:1px solid #bbb;
}
label
{
	display:block;
	margin-bottom:20px;
}

table
{
	width:100%;
	table-layout:fixed;
	margin-bottom:20px;
}

table th 
{
	text-align: left;
}
.pricex::-webkit-input-placeholder,.pricex:-moz-placeholder,.pricex::-moz-placeholder,.pricex:-ms-input-placeholder {font-size: 10px;}
#double{
	color: lightgray;
	font-size: 10px;
}
</style>