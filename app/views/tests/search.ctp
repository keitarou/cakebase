<script type="text/javascript">

	setPageTitle("test master Search");

	function searchBtnClick(){
		var code     = $("#code").val();
		var name     = $("#name").val();
		var password = $("#password").val();
		var auth     = $("#auth:checked").val()? $("#auth:checked").val(): "";
		var page     = "1";
		var request = "/tests/search_list";

		$('#search_list_area').button('loading');
		$('#search_list_area').load(
			request, 
			{
				code     : code, 
				name     : name, 
				password : password,
				auth     : auth,
				page     : page,
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
		<th>code</th>
		<td>
			<input type="text" name="code" id="code" class="span12">
		</td>
		<th>name</th>
		<td>
			<input type="text" name="name" id="name" class="span12">
		</td>
	</tr>
	<tr>
		<th>password</th>
		<td>
			<input type="password" name="password" id="password" class="span12">
		</td>
		<th>auth</th>
		<td>
			<input type="radio" name="auth" id="auth" value="1" > admin
			<input type="radio" name="auth" id="auth" value="2" > user
		</td>
	</tr>
	<tfoot>
		<tr>
			<td colspan="4" style="text-align:center;">
				<button id="add" class="btn btn-primary" onclick="searchBtnClick();">Search</button>
			</td>
		</tr>
	</tfoot>
</table>

<br /><br /><br />


<div id="search_list_area">
	<!-- load list... -->
</div>

<style type="text/css">
	tr input{
		height: 20px;
	}
	th {
		background-color: #eeeeee;
	}

</style>