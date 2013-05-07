/**
* common.js
*
* @class common.js
* @author Keitarou
* @date 2013.4.30
*/


/**
* method loadPage
* ロードエリアにajaxロードろかける
*
* @method loadPage
* @param {String} request リクエスト先
* @return boolean false
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

/**
* method setPageTitle
* タイトルバーのタイトルを設定する
*
* @method setPageTitle
* @param {String} title タイトル
* @return boolean false
*/
function setPageTitle(title){
	$('.page-title').text(title);
	return false;
}