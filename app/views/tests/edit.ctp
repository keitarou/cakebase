<script type="text/javascript">
	setPageTitle("test master Edit");

	function editBtnClick(){
		var id       = $("#id").val();
		var name     = $("#name").val();
		var password = $("#password").val();
		var auth     = $("#auth:checked").val()? $("#auth:checked").val(): null;
		var request = "/tests/edit";

		$('#main_load_area').button('loading');
		$('#main_load_area').load(
			request, 
			{
				id       : id,
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

	function deleteBtnClick(){
		var id       = $("#id").val();
		var request  = "/tests/delete";

		$('#main_load_area').button('loading');
		$('#main_load_area').load(
			request, 
			{
				id       : id,
				submit   : "1"
			}, 
			function(responseText, status, XMLHttpRequest){
				console.log(request + "......" + status)
			}
		);
	}
</script>

<table width="100%" border="1">
	<tr>
		<th>name</th>
		<td>
			<input type="text" name="name" id="name" class="span12" value="<?php echo $test["Test"]["name"]; ?>">
		</td>
		<th>password</th>
		<td>
			<input type="password" name="password" id="password" class="span12" value="<?php echo $test["Test"]["password"]; ?>">
		</td>
	</tr>
	<tr>
		<th>auth</th>
		<td>
			<input type="radio" name="auth" id="auth" value="1" <?php echo ($test["Test"]["auth"] == "1")? "checked": "";?> > admin
			<input type="radio" name="auth" id="auth" value="2" <?php echo ($test["Test"]["auth"] == "2")? "checked": "";?> > user
		</td>
		<th></th>
		<td>
		</td>
	</tr>
	<tfoot>
		<tr>
			<td colspan="4" style="text-align:center;">
				<input type="hidden" id="id" id="id" class="span12" value="<?php echo $test["Test"]["id"]; ?>">
				<button id="edit" class="btn btn-primary" onclick="editBtnClick();">Edit</button>
				<button id="delete" class="btn btn-primary" onclick="deleteBtnClick();">Delete</button>
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