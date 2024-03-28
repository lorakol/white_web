/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onDeleteComment(id, confirm) {

	var url_str="actions.php?action=delete&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}


function onCommentEnable(id, path, enable, disable) {

	var url_str="actions.php?action=enable&id="+id;

	$.get( url_str, function( data ) {
		$("#div_active"+id).html('<a href="javascript:;" onclick="onCommentDisable(\''+id+'\',\''+path+'\',\''+enable+'\',\''+disable+'\');" style="text-decoration: none;"> <img src="'+path+'images/disable.png" class="tooltip" title="'+disable+'" alt=""> </a>');
	});

}

function onCommentDisable(id, path, enable, disable) {

	var url_str="actions.php?action=disable&id="+id;

	$.get( url_str, function( data ) {
		$("#div_active"+id).html('<a href="javascript:;" onclick="onCommentEnable(\''+id+'\',\''+path+'\',\''+enable+'\',\''+disable+'\');" style="text-decoration: none;"> <img src="'+path+'images/enable.png" class="tooltip" title="'+enable+'" alt=""> </a>');
	});

}

function onCommentBlock(id, path, block, unblock) {

	var url_str="actions.php?action=block&id="+id;

	$.get( url_str, function( data ) {
		$("#div_block"+id).html('<a href="javascript:;" onclick="onCommentUnblock(\''+id+'\',\''+path+'\',\''+block+'\',\''+unblock+'\');" style="text-decoration: none;"> <img src="'+path+'images/unblock.gif" class="tooltip" name="'+unblock+'" alt=""> </a>');
	});

}

function onCommentUnblock(id, path, block, unblock) {

	var url_str="actions.php?action=unblock&id="+id;

	$.get( url_str, function( data ) {
		$("#div_block"+id).html('<a href="javascript:;" onclick="onCommentBlock(\''+id+'\',\''+path+'\',\''+block+'\',\''+unblock+'\');" style="text-decoration: none;"><img src="'+path+'images/block.gif" class="tooltip" title="'+block+'" alt=""></a>');
	});

}
