<div class="block">
	<a href="/" class="block-heading" data-toggle="collapse">Content</a>
	<div id="page-stats" class="block-body collapse in">

		<div class="">
			<div style="height:400px;">
				<button class="btn btn-primary" onclick="test_function();">Button</button>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">

	// load test view
	function test_function(){
		var request = "/";
		$('#main_load_area').button('loading');
		$('#main_load_area').load(
			request, 
			{
				key: "value", 
				key2:"value2"
			}, 
			function(responseText, status, XMLHttpRequest){
				console.log(request + "......" + status)
			}
		);
	}
</script>
