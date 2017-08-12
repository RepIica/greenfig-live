<?require VIEW_ROOT . '/templates/cmheader.php';?>
<body class="medit__body">
    <div id="title">
    	<h1>Menu Editor</h1>	
    </div>

	<?php if (empty($menu)): ?>
		<p>No menu at the moment.</p>
	<?php else: ?>
		<div id="container">
				<table>

					<thead>
						<tr height="60">
							<th>Label</th>
							<th>Title</th>
							<th class="pricewidth">Price</th>
							<th>Description</th>
							<th><a id="addnew" href="<?php echo BASE_URL; ?>/admin/add.php">Add New Page</a></th>
							<th class="tablebutton"></th>
						</tr>
					</thead>

					<tbody>
						<?php foreach($menu as $menuList): ?>
							<tr height="50">
								<td><?php echo e($menuList['label']); ?></td>
								<td><?php echo e($menuList['name']); ?></td>
								<td class="pricewidth"><?php echo e($menuList['price']); ?></td>
								<td>
									<?php if(!empty($menuList['dsc'])): ?>
										<?php echo e($menuList['dsc']); ?>
									<?php else: ?>
										<p style="font-size:10px;font-weight:200;"><i>This item does not currently have a description.<i></p>
									<?php endif; ?>
								</td>
								<td class="tablebutton"><a href="<?php echo BASE_URL;?>/admin/edit.php?id=<?php echo e($menuList['id']); ?>">Edit</a></td>
								<td class="tablebutton"><a href="<?php echo BASE_URL;?>/admin/delete.php?id=<?php echo e($menuList['id']); ?>">Delete</a></td>
							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
		</div>
	<?php endif; ?>
	<div id="bot-btn">
	<a id="addnew" href="<?php echo BASE_URL; ?>/admin/add.php">Add New Page</a>
	<a id="addnew" href="#title">Back to top</a>
	</div>
</body>
</html>
<?require VIEW_ROOT . '/templates/cmfooter.php';?>