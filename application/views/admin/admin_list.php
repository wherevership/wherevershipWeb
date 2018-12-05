 <script>
	$('#admin').collapse();
	$("ul[data-target='#admin']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#admin_list").addClass('active selected');

</script>
<div class="col-md-10 col-xs-12 dashboard-wrapped padding-right-off" >
		
		  <div class="row dashoboard-account">
    <div class="container-fluid space-small" style="padding-bottom: 15px;">
	<style>
.table>thead:first-child>tr:first-child>th {
	text-align: center;
	border-right: 1px solid;
	border-color: #fff;
}

.table>tbody>tr>td {
	text-align: center;
	border-right: 1px solid #ddd;
}

.well {
	background-color: #ddd;
	margin-bottom: 0px;
}

tr#DetailRow>td {
    text-align: left;
}

button.close {
    position: absolute;
    right: 30px;
    z-index: 2;
}
#OrdDetailRow th {
    background-color: #DDD;
    color: #333;
    font-weight: normal;
}
.form-control-feedback.epi-info-circled { 
	position: absolute;
	padding-top: 8px;
	color: #d82b1f ;
	font-size: 18px;
}
</style>
<div> 
  
  <h2 class="dashboard-title">Admin listing
    
  </h2>
  
   
</div>
</div>
<div class="clearfix"> 
  
  <div class="well col-xs-12 col-sm-12" onkeypress="return checkEnter(event)">
    <div class="hidden-xs">
      <div class="col-xs-3 padding-left-off">
        <select class="form-control" id="category" name="category" onchange="changeCategory()">    
			<option value='firstname' >First Name</option>
			<option value='lastname' >Last Name</option>
			<option value='email' >Email</option>
			<option value='status' >status</option>
        </select>
      </div>
      <div id="searchfield" class="input-group col-xs-9" >
		<div class="has-feedback">
        	<input class="form-control" type="text" name="search2" placeholder="Search"/>
			<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
		</div>

        <span class="input-group-btn">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
      
    </div>
    <div class="visible-xs">
      <select class="form-control col-xs-12" id="category" name="category" onchange="changeCategory()">
			<option value='firstname' >First Name</option>
			<option value='lastname' >Last Name</option>
			<option value='email' >Email</option>
			<option value='status' >status</option>
      </select>
      <div class="input-group col-xs-12">
        <input class="form-control" type="text" name="search2" placeholder="Serach"/>
        <span class="input-group-btn ">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
    </div>
  </div>
   
  
  
   
  <!-- /input-group --> 
  <!-- /.col-lg-6 --> 
  <div class="visible-xs">&nbsp;</div>
<div class="container-fluid">
<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 150px;">
		<option value='-1' selected>Bluk Action</option>
		<option value='delete'>Delete</option>
		<option value='freeze'>Freeze</option>
    </select>
    <button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
  </div>
<div class="form-inline pull-right" style="margin: 20px 20px;"> 
	<button class="btn btn-primary" onclick='addAdmin()' >Add</button>
</div>
<div class="pull-right hidden-xs">
  <ul class="pagination">
    
  </ul>
</div>



<table id="myTable" class="table table-striped" width="100%">
  <thead>
    <tr>
      <th width="5%" class="hidden-xs"><input type='checkbox' name='checkAllOrderOrder' id='checkAllOrder' onclick="checkAllOrderBox()"></th>
      <th class="hidden-xs" width="20%">First Name</th>
      <th class="hidden-xs" width="20%">Last Name</th>
      <th class="hidden-xs" width="20%">Email</th>
      <th class="hidden-xs" width="20%">Status</th>
      <th class="visible-xs" width="67%">Admin Summary</th>
      <th width="15%"></th>
    </tr>
  </thead>
  <tbody id="table1">
  <?php 
  
	if (!empty($adminList)) {
		foreach ($adminList as $v) {
   ?>
	<tr>
		<td width="5%" class="hidden-xs"><input type='checkbox' name="checkBluckAction" id="checkBluck-<?=$v['id']?>" onclick="checknow('<?=$v['id']?>')" value="<?=$v['id']?>"></td>
		<td class="hidden-xs" width="20%"><?=$v['firstname']?></td>
		<td class="hidden-xs" width="20%"><?=$v['lastname']?></td>
		<td class="hidden-xs" width="20%"><?=$v['email']?></td>
		<td class="hidden-xs" width="20%"><?=$v['status']?></td>
		<td width="15%">
		<a href="javascript:showDetail('<?=$v['id']?>');" class="btn btn-success btn-xs">See More</a>
		<a href="javascript:toDelete('<?=base_url('admin/admin_delete/'.$v['id'])?>');" class="btn btn-danger btn-xs">Delete</a>
		<a href="javascript:updateStatus('<?=$v['id']?>','Freeze');" class="btn btn-info btn-xs">Freeze</a>
		</td>
	</tr>
  
	<?php
	}}
	  else {
		  
    ?>
	  <tr><td colspan='7'>No Record Found.</td></tr>
	
	<?php
	  }
	
	?>
    

    </tbody>
  
</table>
<div class="form-inline pull-left" style="margin: 20px 0px;">
    <select class="form-control dashboard-bulk-action" id="bulkAction2" name="bulkAction2" onchange="" style="width: 150px;">
		<option value='-1' selected>Bulk Actions</option>
		<option value='delete'>Delete</option>
		<option value='freeze'>Freeze</option>
		
    </select>
    <button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
  </div>
  

<div class="dashboard-pagination">
  <ul class="pagination">
    
  </ul>
</div>


<div class="clearfix"></div>

</div>
<div id="dialog"></div>

	<div class="modal fade" id="adminDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			
			<div class="modal-dialog" role="document" id="services1">
				<div class="modal-content">
					<div class="modal-header">
						<h2 class="modal-title" id="name"></h2>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">
						 <div class="col-md-6 col-xs-12 profile-pic text-center padding-off" style="position: relative;">
							<div class="profile_picture"> <img src="<?=base_url('assets2/image/user.jpg')?>">
              
							</div>
           
								<br>
            
						</div>  
					<div class="clearfix visible-xs"></div>
					<hr class="visible-xs">
					<div class="col-md-6 col-xs-12 padding-off">
						<div class="col-sm-6 col-xs-12">
							<label>First Name</label>
							<div class="has-feedback">
								<p id="first_name"></p>
                  
							</div>
						</div>
						<div class="col-sm-6 col-xs-12 form-group">
							<label>Last Name</label>
							<p id="last_name"></p>
              
						</div> 
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12 form-group">
						<label>Email <span style="color:red;">*</span></label>
						<p id="email"></p>
					</div>
					<div class="col-md-12 col-sm-6 col-xs-12 form-group">
					</div>
       
					<div class="clearfix"></div>
						<hr />
							<div>
								<div class="col-md-6 col-xs-12 padding-off">
									<div class="col-xs-12">
										<label>Address</label>
              
											<p id="unit"></p>
									</div>
									<div class="col-xs-12 form-group">
										<p id="building"></p>
									</div>
									<div class="col-xs-12 form-group">
										<p  id="street"></p>
									</div>
             
								</div>
								<div class="col-md-6  col-xs-12 padding-off">
									<div class="col-md-12 col-sm-6 col-xs-12 form-group">
										<label>Town/City</label>
										<p id="city"></p>
               
									</div>
								</div>
								<div class="col-md-12 col-sm-6 col-xs-12 form-group">
									<label>Zip/Postal Code</label>
              
									<p  id="postcode"></p>
                
								</div>
							</div>
							<div class="col-md-12 col-sm-6 col-xs-12 form-group">
								<label>State</label>
								<p  id="state"></p>
							</div>
							<div class="col-md-12 col-sm-6 col-xs-12 form-group">
								<label>Country </label>
								<p  id="country"></p>
							</div>
					
        
					<div class="clearfix"></div>
					<div class="col-md-6 col-xs-12 padding-off">
						<div class="col-xs-12 form-group">
							<label>Mobile No. </label>
							<p  id="mobile"></p>
                    
                  
						</div>
					</div>
            
				</div>
        <div class="clearfix"></div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
       
					</div>
				</div>
			</div>
			</div>




<script>
<!-- checkbox usage START-->
var lastChecked = null;

$(document).ready(function() {
	var $checkbox = $('input[name=checkBluckAction]');
	$checkbox.click(function(e) {
		if(!lastChecked) {
			lastChecked = this;
			return;
		}

		if(e.shiftKey) {
			var start = $checkbox.index(this);
			var end = $checkbox.index(lastChecked);

			$checkbox.slice(Math.min(start,end), Math.max(start,end)+ 1).prop('checked', lastChecked.checked);

		}

		lastChecked = this;
	});
});
<!-- checkbox usage END -->

function toDelete(url) {
		swal({
        title: 'Delete Admin',
        text: 'Are you sure want to remove the this?',
        type: 'warning',
        confirmButtonColor: '#4e97d8',
        showCancelButton: true
      }).then(function() {
         location.href=url;
      });
	
	
}

function addAdmin() {
	window.location.href = '<?=base_url("admin/add_admin")?>';
}

function updateStatus(id,status) {
	url = "<?=base_url('admin/updateAdminStatus')?>";
		
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					id: id,
					status: status
				},
				
				success: function(result) {
					console.log(result);
					window.location.href = '<?=base_url("admin/admin_list")?>';
					  
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				}	
			
			});
}

function showDetail(id) {
	url = "<?=base_url('api/adminDetail/')?>" + id;
	$.ajax({
		method: "GET",
		url: url,
		dataType: "json"
	}).done(function(response){
		console.log(response);
		setTimeout(function(){ 
			
				$("#name").text(response.firstname + " " + response.lastname);
				$("#first_name").text(response.firstname);
				$("#last_name").text(response.lastname);
				$("#email").text(response.email);
				$("#unit").text(response.address1);
				$("#building").text(response.address2);
				$("#street").text(response.address3);
				$("#mobile").text(response.mobile);
				$("#city").text(response.city);
				$("#postcode").text(response.postcode);
				$("#state").text(response.state);
				$("#country").text(response.country);
				
			
				$("#adminDetail").modal();
		
		},2000);
		
	}).fail(function(XMLHttpRequest,textStatus,textStatus){
				console.log(XMLHttpRequest.responseText);
				console.log(XMLHttpRequest.status);
				console.log(XMLHttpRequest.readyState);
				console.log(textStatus);
				alert("something wrong");
	
	});
	
	//$("#name").text(id);
	
	
}



var orderlist = {
	Detail : function(ref_id){
		var listrow = document.getElementsByClassName("listrow-"+ref_id);
		if($($(listrow).find(".action .mini img")).attr("src") == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png"){
			orderlist.RemoveDetail();
		}else{			
			orderlist.RemoveDetail();
			$(listrow).after(
				'<tr id="OrdDetailRow"><td colspan="7"><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/ajax-loader.gif" /></td></tr>'
			);
			$.ajax({
				type : "post",
				url : "./?cp=MemberOrderDetail",
				data : {oid : $(listrow).attr("data-id")},
				success : function(result){
					$($(listrow).find(".action .mini img")).attr("src","https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png");
					$("#OrdDetailRow").find("td").html(result);
			}
		}).fail(function(){
		swal({
				title: 'Error',
				type: 'error',
				html: 'fail',
				confirmButtonColor: '#4e97d8'
				})
		});
	}
	},
	
	statussort : function(key){
		if(key == ''){
			key = $('#OSSelect').val();
		}
		var url = QueryString(window.location.href);
		var os = key;
		var qs = "";
		for(p in url.qs){
			if(p != "sc" && p != "os" && p != "sf" && p != "lpg"){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			};
		}
		window.location.href = url.link + "?" + qs + (os.length > 0 ? "&os=" + os : "");
	},
	
	resultLimit : function(limit){
		var url = QueryString(window.location.href);
		var rl = limit;
		var qs = "";
		for(p in url.qs){
			if(p != "lpg"&& p != "rl"){
				if(qs.length > 0) qs += "&";
				qs += p + "=" + url.qs[p]
			};
		}
		window.location.href = url.link + "?" + qs + (rl.length > 0 ? "&rl=" + rl : "");
	},
	
	search : function(){
		url = "<?=base_url('admin/searchAdmin')?>";
		var category = ($("[name=category]").val().trim());
		var search = ($("[name=search2]").val().trim());
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					category: category, 
					search: search
				},
				
				success: function(result) {
					console.log(result);
					var json = JSON.parse(result);
					var x = 0;
					$("#table1").html("");
					console.log(json.length);
					if (json.length > 0) {
						for (var i=0; i < json.length; i++) {
							if (json[i].result != 'empty') { 
						
								//	var deleteurl = '<??>'
								if (json[i].is_deleted == 0) {
									var tr = $("<tr>").html('<td width="5%" class="hidden-xs"><input type=\'checkbox\' name="checkBluckAction" id="checkBluck-'+json[i].id+'" onclick="checknow(\''+json[i].id+'\')" value="'+json[i].id+'"></td><td class="hidden-xs" width="20%">'+json[i].firstname+'</td><td class="hidden-xs" width="20%">'+json[i].lastname+'</td><td class="hidden-xs" width="20%">'+json[i].email+'</td><td class="hidden-xs" width="20%">'+json[i].status+'</td><td width="15%"><a href="javascript:showDetail(\''+json[i].id+'\');" class="btn btn-success btn-xs">See More</a><a href="javascript:toDelete(\'<?=base_url('admin/admin_delete/')?>'+json[i].id+'\');" class="btn btn-danger btn-xs">Delete</a><a href="javascript:updateStatus(\''+json[i].id+'\',\'Freeze\');" class="btn btn-info btn-xs">Freeze</a></td>');
									$("#table1").append(tr);
								} else {
									x += 1;
									console.log(x);
									if (x == json.length) {
										var tr = $("<tr>").html('<td colspan=\'7\'>No Record Found.</td>');
										$("#table1").append(tr);
									}
								} 
							} else {
								var tr = $("<tr>").html('<td colspan=\'7\'>No Record Found.</td>');
								$("#table1").append(tr);
							}
						}
						
					} else {
						
							var tr = $("<tr>").html('<tr><td colspan=\'7\'>No Record Found.</td></tr>');
							$("#table1").append(tr);
					}
					//console.log(result);
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				}	
			
			});
	},
	
	Del :function(obj) {
		//alert($(obj).html());
		/*
		$('#popupbox .modal-header h3').html("Confirm delete this unpaid order?");
		$("#popupbox .modal-body").html("Are you SURE?");
		$("#popupbox .modal-footer").html('<button type="button" class="btn btn-primary" dt-id="'+$(obj).attr("dt-id")+'" onclick="orderlist.Delete(this)">OK</button>' + 
		'<button type="button" class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>');
		$('#popupbox').modal('toggle');//*/
		swal({
			title: 'Confirm delete this unpaid order?',
			text: "Are you SURE?",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#4e97d8',
			confirmButtonText: 'Yes',
			cancelButtonText: 'Cancel'
			}).then(function() {
				id = $(obj).attr("dt-id");
				orderlist.Delete(id);
			})
	},
	
Delete :function (obj) {
	var
	type ="post",
	url = "./?ac=doDeleteInvoice",
	data ={id},
	callback = function(result){
			if($.trim(result) == "pass"){
				swal({
					title: 'Success',
					type: 'success',
					html: 'The item has been succesfully deleted!',
					confirmButtonColor: '#4e97d8'
					}).then(function() {
						window.location.reload();
					})
			}else{
				swal({
					title: 'Oops',
					type: 'error',
					html: '' + result,
					confirmButtonColor: '#4e97d8'
				})
			} 
		};
		General.loadAjax(type,url,data,callback);
	},	
	
	RemoveDetail : function(){
		$("#OrdDetailRow").remove();
		$('.action .mini').html("<img src='https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png'>");
	},
};
var ordershipmentlist = {
	Detail : function(obj){
		var parent = $(obj).parent();
		if($(parent).find('a.pull-right img').first().attr('src') == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png"){
			$(parent).find('a.pull-right img').first().attr("src", "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png");
			ordershipmentlist.RemoveDetail();
		}else{
			ordershipmentlist.RemoveDetail();
			$($(parent).find('a.pull-right img').first()).parent().parent().parent().after(
				'<tr id="DetailRow"><td colspan="9"><img src="https://secure.easyparcel.my/pass/application/source/Malaysia/img/ajax-loader.gif" /></td></tr>'
			);
			$.ajax({
				type : "post",
				url : "./?cp=MemberShipmentDetail",
				data : {iid : $(obj).attr("data-id")},
				success : function(result){
					$("#DetailRow").find("td").html(result);
					if($(parent).find('a.pull-right img').first().attr('src') == "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png"){
						$(parent).find('a.pull-right img').first().attr("src", "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-minus.png");
					}
				}
			}).fail(function(){
			swal({
				title: 'Error',
				type: 'error',
				html: 'fail',
				confirmButtonColor: '#4e97d8'
				})
			});
		}
	},
	
	RemoveDetail : function(){
		$("#DetailRow").prev().find('a.pull-right img').first().attr("src", "https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png");
		$("#DetailRow").remove();
		
	},
		
	search : function(){
		var message = "";
		var url = QueryString(window.location.href);
		var sc = $("[name=search]").val();
		if(sc == ""){
			sc = ($("[name=search2]").val().trim());
		}
		var sf = ($("[name=category]").val().trim());
		if (sf == '1'){
			sc =  'From='+($("[name=dateFrom]").val().trim())+'To='+($("[name=dateTo]").val().trim());
		}
		
		if(sc == ""){
			message+="No Search Key Is Inserted.</br>";
			if(message != ""){
				swal({
					title: 'Oops',
					type: 'error',
					html: '' + message,
					confirmButtonColor: '#4e97d8'
				})
				return false;
			}
		}else{
			var qs = "";
			for(p in url.qs){
				if(p != "sc" && p != "lpg"){
					if(qs.length > 0) qs += "&";
					qs += p + "=" + url.qs[p]
				};
			}
			window.location.href = url.link + "?" + qs + (sc.length > 0 ? "&sc=" + sc : "");
		}
	},

	Track : function(ref,awb,courier){
			$.ajax({
				type : "post",
				url : "./?ac=doTrackAwb",
				data : {
					courier : courier,
				},
				success : function(res){
					//var myWindow = window.open("./?pg=Track&t="+res+"/"+awb, "Easyparcel Track Popout", "width=700, height=400");
					var myWindow = window.open("./?pg=Track&t="+res+"/"+awb, '_blank');
					if(myWindow == null || typeof(myWindow)=='undefined'){
						swal({
							title: 'Oops',
							type: 'info',
							html: 'We found out your browser disabled the pop-up settings.<br>Please disable your pop-up blocker and have another try.',
							confirmButtonColor: '#4e97d8'
						})
					}
				}
			}).fail(function(){
				swal({
					title: 'Error',
					type: 'error',
					html: 'Fail',
					confirmButtonColor: '#4e97d8'
					})
			});
		}
};

function CheckNull(obj,obj1,obj2){
	var from  = $("[name=dateFrom]");
	var to  = $("[name=dateTo]");
	var sc  = $("[name=search]");
	if(obj == "0" && obj1 == "0"){
		if(General.isTextEmpty($(obj2))){
			doFail(obj2);
		}else{
			clearClass(obj2);
		}
	}else{
		if(General.isTextEmpty($(obj))){
			doFail(obj);
		}else{
			clearClass(obj);
		}
		if(General.isTextEmpty($(obj1))){
			doFail(obj1);
		}else{
			clearClass(obj1);
		}
	}
}

function doFail(obj){
	$(obj).addClass("fail");
	$(obj).removeClass("padding");
	$(obj).removeClass("pass");
	$(obj).css("border-color","#F00");
	$(obj).parent().children().eq(1).removeClass("hide");
}

function clearClass(){
	var names = ["dateFrom","dateTo","search"];
	for (i = 0; i < names.length; i++) { 
		$("[name="+names[i]+"]").removeClass("pass");
		$("[name="+names[i]+"]").removeClass("fail");
		$("[name="+names[i]+"]").removeClass("padding");
		$("[name="+names[i]+"]").css("border-color","");
		$("[name="+names[i]+"]").parent().children().eq(1).addClass("hide");
	}
}

function QueryString(url){
	var link = url.split("?");
	var url = {link: link[0], qs : {}};
	if(link[1] == null) return url;
	var qs = link[1].split("&");
	for(var i = 0; i < qs.length;i++){
		var param = qs[i].split("=");
		if(param[0] != null) url.qs[param[0]] = param[1];
	}
	return url;
}

function RemoveDetail(){
	$("#DetailRow").remove();
	$('.action .mini').html("<img src='https://secure.easyparcel.my/pass/application/source/Malaysia/img/detail-icon-new.png'>");
}

function checkAllOrderBox(){
	var checkboxes = document.getElementsByName('checkBluckAction');
	if(document.getElementById('checkAllOrder').checked){
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = true;
			}
		}
	}else{
		for (var i = 0; i < checkboxes.length; i++) {
			console.log(i)
			if (checkboxes[i].type == 'checkbox'){
				checkboxes[i].checked = false;
			}
		}
	}
}

function checknow(id){
	if(document.getElementById('checkAllOrder').checked){
		document.getElementById('checkAllOrder').checked=false;
	}else{
		var checkboxes = document.getElementsByName('checkBluckAction');
		var allchecked=0;
		for(var i = 0; i < checkboxes.length; i++){
			if(checkboxes[i].type == 'checkbox'){
				if(checkboxes[i].checked == false){
					allchecked=1;
				}
			}
 		}

		if(allchecked==0){
			document.getElementById('checkAllOrder').checked=true;
		}
	}
}

function changeCategory(){
	var sf = ($("[name=category]").val().trim());
	if(sf == 1){
		$('#searchfield_normal').attr('style','display: none');
		$('#searchfield_calendar').attr('style','display: ""');
	}else{
		$('#searchfield_normal').attr('style','display: ""');
		$('#searchfield_calendar').attr('style','display: none');
	}
}

function bulkDelete(){
	var checkboxes = document.getElementsByName('checkBluckAction');
	id=[];
	count=0;
	
	for(var i = 0; i < checkboxes.length; i++){
		if(checkboxes[i].checked == true){
			var myElem = document.getElementById((checkboxes[i].id));
			if (myElem != null){
				
				id[count] = document.getElementById((checkboxes[i].id)).value;
				
				count++;
			}
		}
	}
	
	console.log(id);
   	
	if(id==""){
		swal({
			title: 'Oops',
			type: 'error',
			html: 'error',
			confirmButtonColor: '#4e97d8'
			})
	}else{
		swal({
        title: 'Delete Admin',
        text: 'Are you sure want to remove the ('+id.length+') selected admin?',
        type: 'warning',
        confirmButtonColor: '#4e97d8',
        showCancelButton: true
      }).then(function() {
          bulkDeleteFunc(id);
      });
		
		//bulkDeleteFunc(id);
	}
}

function bulkDeleteFunc(id) {
	url = "<?=base_url('admin/adminBulkDelete')?>";
		
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					id: id,  
				},
				
				success: function(result) {
					console.log(result);
					window.location.href = '<?=base_url("admin/admin_list")?>';
					  
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				}	
			
			});
	
}

function bulkUpdateStatus(status){
	var checkboxes = document.getElementsByName('checkBluckAction');
	id=[];
	count=0;
	
	for(var i = 0; i < checkboxes.length; i++){
		if(checkboxes[i].checked == true){
			var myElem = document.getElementById((checkboxes[i].id));
			if (myElem != null){
				
				id[count] = document.getElementById((checkboxes[i].id)).value;
				
				count++;
			}
		}
	}
	
	console.log(id);
   	
	if(id==""){
		swal({
			title: 'Oops',
			type: 'error',
			html: 'error',
			confirmButtonColor: '#4e97d8'
			})
	}else{
		swal({
        title: 'Delete Admin',
        text: 'Are you sure want to remove the ('+id.length+') selected admin?',
        type: 'warning',
        confirmButtonColor: '#4e97d8',
        showCancelButton: true
      }).then(function() {
          bulkUpdateFunc(id,status);
      });
		
		//bulkDeleteFunc(id);
	}
}

function bulkUpdateFunc(id,status) {
	url = "<?=base_url('admin/bulkUpdateAdminStatus')?>";
		
			$.ajax({
				url: url,
				type: "POST",
				dataType: "text",
				async: true,
				data: {
					id: id,
					status: status
				},
				
				success: function(result) {
					console.log(result);
					window.location.href = '<?=base_url("admin/admin_list")?>';
					  
				},
				error: function(XMLHttpRequest,textStatus,textStatus){
					console.log(XMLHttpRequest.responseText);
					console.log(XMLHttpRequest.status);
					console.log(XMLHttpRequest.readyState);
					console.log(textStatus);
					alert(XMLHttpRequest.responseText);
			
				}	
			
			});
	
}

$(function(){
	$( "#fromDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
    $( "#toDate" ).datepicker({dateFormat: 'yy-mm-dd', maxDate: '+0d'});
	changeCategory();
});

function checkEnter(e) {
    if(e.keyCode == 13) {
		orderlist.search();
    }
}

function performBulkAction(value){
	switch(value){
		case "delete" : bulkDelete(); break;
		case "freeze" : bulkUpdateStatus('Freeze'); break;
		default : alert("Please select a valid action."); break;
	}
}
</script>
 </div>
  </div>
  </div>
</div>

</div>