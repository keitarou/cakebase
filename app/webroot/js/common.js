/*
	Load Main Area Page

	@params	
		string: request
	@return 
		false
*/
function loadPage(request){
	$('#main_load_area').button('loading');
	$('#main_load_area').load(
		request, 
		null, 
		function(responseText, status, XMLHttpRequest){
			console.log(request + "......" + status)
		}
	);
	return false;
}

/*
	Set Page Title
	
	@params	
		string page-title
	@return 
		false
*/
function setPageTitle(title){
	$('.page-title').text(title);
	return false;
}