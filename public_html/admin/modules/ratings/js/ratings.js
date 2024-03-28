/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onDeleteReview(id, confirm_str, rtype) {

	if(confirm_str != undefined && confirm_str != '' && myConfirm(confirm_str)==false) return false;

	var url_str="actions.php?action=delete&id="+id+"&type="+rtype;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}


function onReviewEnable(id, path, enable, disable, rtype) {

	var url_str="actions.php?action=enable&id="+id+"&type="+rtype;

	$.get( url_str, function( data ) {
		$("#div_active"+id).html('<a href="javascript:;" onclick="onReviewDisable(\''+id+'\',\''+path+'\',\''+enable+'\',\''+disable+'\' ,\''+rtype+'\');" style="text-decoration: none;"> <img src="'+path+'images/disable.png" class="tooltip" title="'+disable+'" alt=""> </a>');
	});

}

function onReviewDisable(id, path, enable, disable, rtype) {

	var url_str="actions.php?action=disable&id="+id+"&type="+rtype;

	$.get( url_str, function( data ) {
		$("#div_active"+id).html('<a href="javascript:;" onclick="onReviewEnable(\''+id+'\',\''+path+'\',\''+enable+'\',\''+disable+'\' ,\''+rtype+'\');" style="text-decoration: none;"> <img src="'+path+'images/enable.png" class="tooltip" title="'+enable+'" alt=""> </a>');
	});

}

function onReviewBlock(id, path, block, unblock, rtype) {

	var url_str="actions.php?action=block&id="+id+"&type="+rtype;

	$.get( url_str, function( data ) {
		$("#div_block"+id).html('<a href="javascript:;" onclick="onReviewUnblock(\''+id+'\',\''+path+'\',\''+block+'\',\''+unblock+'\' ,\''+rtype+'\');" style="text-decoration: none;"> <img src="'+path+'images/unblock.gif" class="tooltip" title="'+unblock+'" alt=""> </a>');
	});

}

function onReviewUnblock(id, path, block, unblock, rtype) {

	var url_str="actions.php?action=unblock&id="+id+"&type="+rtype;

	$.get( url_str, function( data ) {
		$("#div_block"+id).html('<a href="javascript:;" onclick="onReviewBlock(\''+id+'\',\''+path+'\',\''+block+'\',\''+unblock+'\' ,\''+rtype+'\');" style="text-decoration: none;"><img src="'+path+'images/block.gif" class="tooltip" title="'+block+'" alt=""></a>');
	});

}
