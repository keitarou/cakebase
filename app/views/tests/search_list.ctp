<script type="text/javascript">

	function PrevOrNextBtnClick(page){
		var code     = $("#search_params_area .code").val();
		var name     = $("#search_params_area .name").val();
		var password = $("#search_params_area .password").val();
		var auth     = $("#search_params_area .auth").val();
		var page     = page;
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

	function DeleteBtnClick(id, code){

		if(!window.confirm(code+' delete ?')){
			return false;
		}

		var id      = id;
		var request = "/tests/delete";

		$.post(
			request, 
			{
				id       : id,
				submit   : "1"
			}, 
			function(responseText, status, XMLHttpRequest){
				console.log(request + "......" + status);
				alert(code+" delete !");
				$('#test_id_'+id).hide();
			}
		);
	}
</script>

<table class="search_list_table" width="100%" border="1">
	<thead>
		<tr>
			<th>code</th>
			<th>name</th>
			<th>password</th>
			<th>auth</th>
			<th>Action</th>
		</tr>
	</thead>
	<?php foreach ($tests as $key => $value): ?>
	<tbody class="search-result-clone">
		<tr id="test_id_<?php echo $value["Test"]["id"]; ?>">
			<td>
				<span><?php echo $value["Test"]["code"]; ?></span>
			</td>
			<td>
				<span><?php echo $value["Test"]["name"]; ?></span>
			</td>
			<td>
				<span><?php echo $value["Test"]["password"]; ?></span>
			</td>
			<td>
				<span><?php echo $value["Test"]["auth"]; ?></span>
			</td>
			<td>
				<a href="#tests/edit/" class="btn" onclick="loadPage('/tests/edit?id=<?php echo $value["Test"]["id"]; ?>');">Edit</a>
				<button class="btn" onclick="DeleteBtnClick(<?php echo $value["Test"]["id"]; ?>, '<?php echo $value["Test"]["code"]; ?>');">Delete</button>
			</td>
		</tr>
	</tbody>
	<?php endforeach; ?>
</table>

<div id="search_params_area">
	<input type="hidden" name="code" class="code" value="<?php echo $search["code"]; ?>">
	<input type="hidden" name="name" class="name" value="<?php echo $search["name"]; ?>">
	<input type="hidden" name="password" class="password" value="<?php echo $search["password"]; ?>">
	<input type="hidden" name="auth" class="auth" value="<?php echo $search["auth"]; ?>">
</div>

<div class="pagination">
	<span>all <?php echo $tests_all_count; ?> Records</span>
	<?php if($prev_page): ?>
	<button class="btn" onclick="PrevOrNextBtnClick(<?php echo $prev_page; ?>);">Prev</button>
	<?php endif; ?>
	<?php if($next_page): ?>
	<button class="btn" onclick="PrevOrNextBtnClick(<?php echo $next_page; ?>);">Next</button>
	<?php endif; ?>
</div>

<style type="text/css">
	th {
		background-color: #eeeeee;
	}

	.search_list_table th{
		padding: 8px;
	}

	.search_list_table td{
		padding: 8px;
	}

	.pagination {
		text-align: right;
	}
</style>