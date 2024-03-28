/*
	*	
	* OxyClassifieds.com : PHP Classifieds (http://www.oxyclassifieds.com)
	* version 9
	* (c) 2017 OxyClassifieds.com (office@oxyclassifieds.com).
	*
*/

function onCharset()
{

	var charset = $("#db_charset").val();

	var url_str="include/get_info.php?charset="+charset;

	$.get( url_str, function( data ) {

		var split_ch=data.split(",");
		var no = split_ch.length;
		$("#db_collation").empty();
		var option;

		for (var j=0;j<no;j++) {
			split_d=split_ch[j].split(':');
			var collation=split_d[0];
			var def=split_d[1];
			option = $('<option></option>').attr("value", collation).text(collation);
			if(def==1) option.attr('selected', 'selected');
			$("#db_collation").append(option);

		}
	});

}
