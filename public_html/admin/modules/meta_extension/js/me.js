/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onDeleteAllExtensions(str)
{
	if (myConfirm(str)==false) return;
	var response;
	var url_str="actions.php?action=list";

	$.get( url_str, function( data ) {

		if(data) {
			var split_arr=response.split(",");
			var no=split_arr.length;
			var i;
			for(i=0; i<no; i++) {
				var chk="chk"+split_arr[i];
				if($('#chk'+split_arr[i]).is(':checked')) {
					var url_str="actions.php?action=delete&id="+split_arr[i];

					$.get( url_str, function( data ) { // synchronous ??!! 
					});

				}
			}
		}
		location.reload(true);
	});
}

function onDeleteExtension(str, id) {

	if (myConfirm(str)==false) return;

	var url_str="actions.php?action=delete&id="+id;

	$.get( url_str, function( data ) {
		location.reload(true);
	});

}
