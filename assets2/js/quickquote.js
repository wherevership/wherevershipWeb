var quickQ = {
	checkField: function(obj,option){
		var str = $(obj).val();
		var state = $('#'+option).val();
		var ste = "";
		
		
		if (str.length == 5) {
			var intStr = parseInt(str);
			console.log(intStr);
			
			if (intStr >= 1000 && intStr <=2899) {
				window.ste = "pls";
			} else if (intStr >= 5000 && intStr <=9899) {
				window.ste = "kdh";	
			}  else if (intStr >= 10000 && intStr <=14499) {
				window.ste = "png";	
			}  else if (intStr >= 15000 && intStr <=18399) {
				window.ste = "ktn";	
			} else if (intStr >= 20000 && intStr <=24399) {
				window.ste = "trg";	
			} else if (intStr >= 25000 && intStr <=28899) {
				window.ste = "pah";	
			} else if (intStr >= 30000 && intStr <=34949) {
				window.ste = "per";	
			} else if (intStr >= 34950 && intStr <=34999) {
				window.ste = "kdh";	
			} else if (intStr >= 45000 && intStr <=36899) {
				window.ste = "per";	
			} else if (intStr >= 40000 && intStr <=48399) {
				window.ste = "sgr";	
			} else if (intStr >= 50000 && intStr <=57999) {
				window.ste = "kul";	
			} else if (intStr >= 62000 && intStr <=62988) {
				window.ste = "pjy";	
			} else if (intStr >= 68000 && intStr <=68199) {
				window.ste = "sgr";	
			} else if (intStr >= 69000 && intStr <=69099) {
				window.ste = "pah";	
			} else if (intStr >= 70000 && intStr <=73500) {
				window.ste = "nsn";	
			} else if (intStr >= 75000 && intStr <=78399) {
				window.ste = "mlk";	
			} else if (intStr >= 79100 && intStr <=86799) {
				window.ste = "jhr";	
			} else if (intStr >= 87000 && intStr <=87099) {
				window.ste = "lbh";	
			} else if (intStr >= 88000 && intStr <=91399) {
				window.ste = "sbh";	
			} else if (intStr >= 93500 && intStr <=98899) {
				window.ste = "srw";	
			}
			
			if (window.ste != state) {
				$(obj).val("");
			
				swal({
					title: 'Oops',
					type: 'error',
					html: 'Postcode not in this stage',
					confirmButtonColor: '#4e97d8'
				});

				
			}
			console.log(window.ste);
			console.log(state);
			
		}
	/*	if(str.length == fromPostCode){
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
		$(obj).val(str); */
	},
	clearPostcode: function(){
		laststr = "";
	}
};