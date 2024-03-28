/*
	*	
	* OxyClassifieds.com : PHP Classifieds (https://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onDeleteTag(id, confirm) {

	var url_str="actions.php?action=delete&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}
