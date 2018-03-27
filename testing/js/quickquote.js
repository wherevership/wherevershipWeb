var quickQ = {
	checkField: function(obj,option){
		var str = $(obj).val();
		if(str.length == fromPostCode){
			if(laststr !== str){
				laststr = str;
				$.ajax({
					type  : "post",
					url : home+"?ac=doGetState",
					async : false,
					data : {
						postcode : str,
					},
					success : function(result){
						if(result.trim()!=noStateMsg){
							$('#'+option).selectpicker('val', result.trim());
						}
					}
				});
			}
		}
		str = str.replace(/[^0-9]+/g,'');
		$(obj).val(str);
	},
	clearPostcode: function(){
		laststr = "";
	}
};