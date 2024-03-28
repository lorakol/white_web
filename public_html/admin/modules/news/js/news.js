/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onDeleteNews(id, confirm) {

	var url_str="actions.php?action=delete&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}


function onNewsEnable(id, path, enable, disable) {

	var url_str="actions.php?action=enable&id="+id;

	$.get( url_str, function( data ) {
		$("#div_active"+id).html('<a href="javascript:;" onclick="onNewsDisable(\''+id+'\',\''+path+'\',\''+enable+'\',\''+disable+'\');" style="text-decoration: none;"> <img src="'+path+'images/disable.png" class="tooltip" title="'+disable+'" alt=""> </a>');
	});

}

function onNewsDisable(id, path, enable, disable) {

	var url_str="actions.php?action=disable&id="+id;

	$.get( url_str, function( data ) {
		$("#div_active"+id).html('<a href="javascript:;" onclick="onNewsEnable(\''+id+'\',\''+path+'\',\''+enable+'\',\''+disable+'\');" style="text-decoration: none;"> <img src="'+path+'images/enable.png" class="tooltip" title="'+enable+'" alt=""> </a>');
	});

}

function onDeleteAllNews(str)
{
	if (myConfirm(str)==false) return;
	var response;
	var url_str="actions.php?action=list";

	$.get( url_str, function( data ) {

		if(data) {
			var split_arr=data.split(",");
			var no=split_arr.length;
			var i;
			for(i=0; i<no; i++) {
				var chk="chk"+split_arr[i];
				if($('#chk'+split_arr[i]).is(':checked')) {
					var url_str="actions.php?action=delete&id="+split_arr[i];
					$.get( url_str, function( data ) {

					});
				}
			}
		}
		location.reload(true);

	});

}
