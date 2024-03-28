/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onDeleteDI(id, confirm_str) {

	if(confirm_str != undefined && confirm_str != '' && myConfirm(confirm_str)==false) return false;
	var url_str="actions.php?action=delete&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}

