<div class="container space" style="margin: 0px 15px;">
	<h1 class="text-center">Volumetric Calculator</h1>
    <h5 class="text-center">If you’re sending large items, kindly measure your volumetric weight here. Parcel weight will be determined by either actual or volumetric weight (VW) or whichever is higher.</h5>
	<div class="col-xs-12">
		<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Calculate Your Parcel Volumetric Weight Here</h3>
		</div>
			<div class="panel-body" style="background-color:#FAFAFA;">
		    <form class="myform" data-toggle="validator">
				<div class="col-sm-12">
					<div class="has-feedback">
						<div class="form-group">
							<label for="width">Width (cm)<span style="color:red;"> *</span></label>
							<input type="text" class="form-control" name="txt_width" placeholder="Enter Width (In cm)" onkeypress="return isNumberKey(event)" title="Please enter the width"/>
							<span class="glyphicon glyphicon-remove-circle form-control-feedback hide"  aria-hidden="true" style="color:red;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="has-feedback">
						<div class="form-group">
							<label for="length">Length (cm)<span style="color:red;"> *</span></label>
	                        <input type="text" class="form-control required digits" name="txt_length" placeholder="Enter Length (In cm)" onkeypress="return isNumberKey(event)" title="Please enter the length">
							<span class="glyphicon glyphicon-remove-circle form-control-feedback hide"  aria-hidden="true" style="color:red;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div class="has-feedback">
						<div class="form-group">
	                        <label for="height">Height (cm)<span style="color:red;"> *</span></label>
	                        <input type="text" class="form-control required digits" name="txt_height" placeholder="Enter Height (In cm)" onkeypress="return isNumberKey(event)" title="Please enter the height">
							<span class="glyphicon glyphicon-remove-circle form-control-feedback hide"  aria-hidden="true" style="color:red;"></span>
						</div>
					</div>
				</div>
				<div class="col-sm-12">
					<div id="weightResult" class="form-group">
                        <label for="result">Volumetric Weight (kg)</label>
                        <input type="text" class="form-control required digits" name="txt_result" placeholder="Display Volumetric Weight (KG)" readonly>
					</div>
				</div>
				<!-- <div class="col-md-3">
					<div class="form-group">
						<label id="remarkRow" class="col-lg-2 control-label"></label>
					</div>
				</div> -->
				<div class="clearfix col-sm-12"> 
					<input type="button" id="submit" class="btn btn-primary" value="Calculate" name="submit" onclick="Calculate()" />
					<input type="button" class="btn btn-warning" value="Reset" onclick="reset1()"/>
				</div>
			</form>
			</div>
		</div>
	</div>
</div>
<div id = "dialog"></div>
<script>
function close_window(){
	window.close();
}

function Calculate(){ 
	inputValidation = "";
	if($(".myform [name=txt_width]").val() == "" || $(".myform [name=txt_length]").val() == "" || $(".myform [name=txt_height]").val() == ""){
		inputValidation = "Please Fill In All The Input Fields.";
		CheckNull($(".myform [name=txt_width]"),$(".myform [name=txt_length]"),$(".myform [name=txt_height]"));
	}else if(isNaN($(".myform [name=txt_width]").val())||isNaN($(".myform [name=txt_length]").val())||isNaN($(".myform [name=txt_height]").val())){
		inputValidation = "Invalid Input.";
	}
	if(inputValidation == ""){
		CheckNull($(".myform [name=txt_width]"),$(".myform [name=txt_length]"),$(".myform [name=txt_height]"));
		var data = {
		width : $(".myform [name=txt_width]").val(),
		length : $(".myform [name=txt_length]").val(),
		height : $(".myform [name=txt_height]").val()
		};
		
		result = Math.round(data.width * data.length * data.height / 5000 * 100)/100;
		$("#weightResult").show();
		$(".myform [name=txt_result]").val(result+" KG");
	}else{
		swal({
			title: 'Oops',
			type: 'error',
			html: '' + inputValidation,
			confirmButtonColor: '#4e97d8'
			})
	}
}

function isNumberKey(evt){
    var charCode = (evt.which) ? evt.which : event.keyCode
    if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57))){
        return false;
	}
    return true;
}     

function reset1(){ 
	$(".myform [name=txt_width]").val("");
	$(".myform [name=txt_length]").val("");
	$(".myform [name=txt_height]").val("");
	$(".myform [name=txt_result]").val("");
	$("#weightResult").hide();
}

function CheckNull(obj,obj1,obj2){

	//var width  = $(".myform [name=txt_width]");
	//var length  = $(".myform [name=txt_length]");
	//var height  = $(".myform [name=txt_height]");
	
	if(General.isTextEmpty($(obj))){
		doFail(obj);
	}else{
		clearNull(obj);
	}
	if(General.isTextEmpty($(obj1))){
		doFail(obj1);
	}else{
		clearNull(obj1);
	}
	if(General.isTextEmpty($(obj2))){
		doFail(obj2);
	}else{
		clearNull(obj2);
	}
}

/*function doPass(obj){
	$(obj).addClass("pass");
	$(obj).removeClass("padding");
	$(obj).removeClass("fail");
	$(obj).css("border-color","#0F0");
	$(obj).parent().children().eq(2).addClass("hide");
} */

function doFail(obj){
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
	$(obj).parent().children().eq(2).removeClass("hide");
}

function clearNull(obj){
	$(obj).removeClass("pass");
	$(obj).removeClass("fail");
	$(obj).removeClass("padding");
	$(obj).css("border-color","");
	$(obj).parent().children().eq(2).addClass("hide");
}

window.onload = $("#weightResult").hide();
</script>
</div>
<div id="mainTrackResult"></div>