<script type="text/javascript">
	setPageTitle("test master Add");
	function addBtnClick(){
		var name     = $("#name").val();
		var password = $("#password").val();
		var auth     = $("#auth:checked").val()? $("#auth:checked").val(): null;
		var request = "/tests/add";

		$('#main_load_area').button('loading');
		$('#main_load_area').load(
			request, 
			{
				name     : name, 
				password : password,
				auth     : auth,
				submit   : "1"
			}, 
			function(responseText, status, XMLHttpRequest){
				console.log(request + "......" + status)
			}
		);
	}
</script>

<!-- error area -->
<?php if(is_array($error)): ?>
<div class="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Error!!</strong>
	<?php foreach ($error as $key => $value): ?>
	<div><?php echo $value; ?></div>
	<?php endforeach; ?>
</div>
<?php endif; ?>
<!-- /error area -->

<!-- complete area -->
<?php if($complete): ?>
<div class="alert alert-info">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	<strong>Complete!!</strong>
	add master <?php echo $complete["code"]; ?>
</div>
<?php endif; ?>
<!-- /complete area -->

<table width="100%" border="1">
	<tr>
		<th>name</th>
		<td>
			<input type="text" name="name" id="name" class="span12" value="<?php echo $test["name"]; ?>">
		</td>
		<th>password</th>
		<td>
			<input type="password" name="password" id="password" class="span12" value="<?php echo $test["password"]; ?>">
		</td>
	</tr>
	<tr>
		<th>auth</th>
		<td>
			<input type="radio" name="auth" id="auth" value="1" <?php echo ($test["auth"]=="1")? "checked": ""; ?> > admin
			<input type="radio" name="auth" id="auth" value="2" <?php echo ($test["auth"]=="2")? "checked": ""; ?> > user
		</td>
		<th></th>
		<td>
		</td>
	</tr>
	<tfoot>
		<tr>
			<td colspan="4" style="text-align:center;">
				<button id="add" class="btn btn-primary" onclick="addBtnClick();">Add</button>
			</td>
		</tr>
	</tfoot>
</table>

<style type="text/css">
	tr input{
		height: 20px;
	}
	th {
		background-color: #eeeeee;
	}
</style>