/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onSPUnblock(id, confirm_str) {

	if(confirm_str != undefined && confirm_str != '' && myConfirm(confirm_str)==false) return false;
	
	var url_str="actions.php?action=unblock&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}

function onSPAddWhitelist(id, confirm_str) {

	if(confirm_str != undefined && confirm_str != '' && myConfirm(confirm_str)==false) return false;
	
	var url_str="actions.php?action=whitelist&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}
