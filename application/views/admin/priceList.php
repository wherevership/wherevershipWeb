<script>
	$('#costing').collapse();
	$("ul[data-target='#costing']").children().children().eq(1).removeClass('fa-plus').addClass('fa-minus');
	$("#international_cost").addClass('active selected');

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
	<div class="row"> 
		<a class="btn btn-default" href="<?=base_url('admin/international_cost')?>" style="float: left;"><</a>
		<h2 class="dashboard-title"><?=!empty($title)?$title:'Error'?>
    
		</h2>
  
   
		</div>

	<div class="clearfix"> 
		
  
		<div class="container-fluid">
  <!-- Nav tabs --> 
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a class="document" href="#document" role="tab" data-toggle="tab"><strong>DOCUMENT</strong></a></li>
    
				<li role="presentation" class=""><a class="non-document" href="#nondocuemnt" role="tab" data-toggle="tab"><strong>NON-DOCUMENT</strong></a></li>
    
	
			</ul>
		</div>
		
		<div class="tab-content">
			<div role="tabpanel" class="tab-pane active clearfix" style="z-index:999999;padding:0px"  id="document">
				<div class="container-fluid" style="padding-top: 15px; padding-bottom: 15px;">
					<div class="well col-xs-12 col-sm-12" onkeypress="return checkEnter(event)">
    <div class="hidden-xs">
      <div class="col-xs-3 padding-left-off">
        <select class="form-control" id="category" name="category" onchange="changeCategory()">    
			<option value='1' >Max Weight</option>
			<option value='2' >Min Weight</option>
			
        </select>
      </div>
      <div id="searchfield" class="input-group col-xs-9" >
		<div class="has-feedback">
        	<input class="form-control" type="text" name="search"/>
			<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
		</div>

        <span class="input-group-btn">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
      
    </div>
    <div class="visible-xs">
      <select class="form-control col-xs-12" id="category" name="category" onchange="changeCategory()">
		<option value='1' >First Name</option>
			<option value='1' >Max Weight</option>
			<option value='2' >Min Weight</option>
      </select>
      <div class="input-group col-xs-12">
        <input class="form-control" type="text" name="search2" placeholder="Order No"/>
        <span class="input-group-btn ">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
    </div>
  </div>
					<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
						<select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 150px;">
							<option value='-1' selected>Bluk Action</option>
							<option value='update'>Update</option>
						</select>
						<button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
					</div>

					<div class="pull-right hidden-xs">
						<ul class="pagination">
    
						</ul>
					</div>


					<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
						<select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
							<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
						</select>
					</div>
					<table id="myTable" class="table table-striped" width="100%">
						<thead>
							<tr>
								<th width="5%" class="hidden-xs"><input type='checkbox' name='checkAllOrderOrder' id='checkAllOrder' onclick="checkAllOrderBox()"></th>
								<th class="hidden-xs" width="20%">Max Weight</th>
								<th class="hidden-xs" width="20%">Min Weight</th>
								<th class="hidden-xs" width="20%">Type</th>
								<th class="hidden-xs" width="20%">price</th>
      
								<th class="visible-xs" width="67%">Admin Summary</th>
								<th width="15%"></th>
							</tr>
						</thead>
						<tbody id="table1">
							<?php 
  
								if (!empty($documentPriceList)) {
									foreach ($documentPriceList as $v) {
							?>
							<tr>
								<form method="POST" action="<?=base_url('internatinal/internatinal_price_update/'.$zone.'/'.$v['id'])?>">
									<td width="5%" class="hidden-xs"><input type='checkbox'></td>
									<td class="hidden-xs" width="20%"><?=$v['max_weight']?></td>
									<td class="hidden-xs" width="20%"><?=$v['min_weight']?></td>
									<td class="hidden-xs" width="20%"><?=$v['type']?></td>
									<td class="hidden-xs" width="20%">
										<input type="text" name="<?='price'.$v['id']?>" id="<?='price'.$v['id']?>" class="form-control" value="<?=$v['price']?>" />
				
			
									</td>
									<td width="15%">
										<input type="submit" value="update" id="update" class="form-control btn btn-success"/>
				
			
									</td>
								</form>
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
						<option value='update'>Update</option>
		
					</select>
					<button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
				</div>
				<div class="form-inline visible-xs pull-right"> Listing :
					<select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
						<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
					</select>
				</div>

				<div class="dashboard-pagination">
					<ul class="pagination">
    
					</ul>
				</div>

				<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
					<select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
						<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
					</select>
				</div>
		
		
			</div>
		</div>
		<div role="tabpanel" class="tab-pane clearfix" style="z-index:999999;padding:0px"  id="nondocuemnt">
				<div class="container-fluid" style="padding-top: 15px; padding-bottom: 15px;">
					<div class="well col-xs-12 col-sm-12" onkeypress="return checkEnter(event)">
						<div class="hidden-xs">
      <div class="col-xs-3 padding-left-off">
        <select class="form-control" id="category" name="category" onchange="changeCategory()">    
			<option value='1' >Max Weight</option>
			<option value='2' >Min Weight</option>
			
        </select>
      </div>
      <div id="searchfield" class="input-group col-xs-9" >
		<div class="has-feedback">
        	<input class="form-control" type="text" name="search"/>
			<span class="epi-info-circled form-control-feedback hide"  aria-hidden="true"></span>
		</div>

        <span class="input-group-btn">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
      
    </div>
    <div class="visible-xs">
      <select class="form-control col-xs-12" id="category" name="category" onchange="changeCategory()">
		<option value='1' >First Name</option>
			<option value='1' >Max Weight</option>
			<option value='2' >Min Weight</option>
      </select>
      <div class="input-group col-xs-12">
        <input class="form-control" type="text" name="search2" placeholder="Order No"/>
        <span class="input-group-btn ">
        <button class="btn btn-primary" type="button" onclick="orderlist.search()">Search</button>
        </span> </div>
    </div>
  </div>
					<div class="form-inline pull-left hidden-xs" style="margin: 20px 0px;">
						<select class="form-control dashboard-bulk-action" id="bulkAction" name="bulkAction" style="width: 150px;">
							<option value='-1' selected>Bluk Action</option>
							<option value='update'>Update</option>
						</select>
						<button onclick='performBulkAction(bulkAction.value)' class="btn btn-default">Apply</button>
					</div>

					<div class="pull-right hidden-xs">
						<ul class="pagination">
    
						</ul>
					</div>


					<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
						<select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
							<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
						</select>
					</div>
					<table id="myTable" class="table table-striped" width="100%">
						<thead>
							<tr>
								<th width="5%" class="hidden-xs"><input type='checkbox' name='checkAllOrderOrder' id='checkAllOrder' onclick="checkAllOrderBox()"></th>
								<th class="hidden-xs" width="20%">Max Weight</th>
								<th class="hidden-xs" width="20%">Min Weight</th>
								<th class="hidden-xs" width="20%">Type</th>
								<th class="hidden-xs" width="20%">price</th>
      
								<th class="visible-xs" width="67%">Admin Summary</th>
								<th width="15%"></th>
							</tr>
						</thead>
						<tbody id="table1">
							<?php 
  
								if (!empty($nonDocumentPriceList)) {
									foreach ($nonDocumentPriceList as $v) {
							?>
							<tr>
								<form method="POST" action="<?=base_url('internatinal/internatinal_price_update/'.$zone.'/'.$v['id'])?>">
									<td width="5%" class="hidden-xs"><input type='checkbox'></td>
									<td class="hidden-xs" width="20%"><?=$v['max_weight']?></td>
									<td class="hidden-xs" width="20%"><?=$v['min_weight']?></td>
									<td class="hidden-xs" width="20%"><?=$v['type']?></td>
									<td class="hidden-xs" width="20%">
										<input type="text" name="<?='price'.$v['id']?>" id="<?='price'.$v['id']?>" class="form-control" value="<?=$v['price']?>" />
				
			
									</td>
									<td width="15%">
										<input type="submit" value="update" id="update" class="form-control btn btn-success"/>
				
			
									</td>
								</form>
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
						<option value='update'>Update</option>
		
					</select>
					<button onclick='performBulkAction(bulkAction2.value)' class="btn btn-default">Apply</button>
				</div>
				<div class="form-inline visible-xs pull-right"> Listing :
					<select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
						<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
					</select>
				</div>

				<div class="dashboard-pagination">
					<ul class="pagination">
    
					</ul>
				</div>

				<div class="form-inline pull-right hidden-xs" style="margin: 20px 20px;"> Listing Per Page :
					<select class="form-control" id="resultLimit" name="resultLimit" onchange="orderlist.resultLimit(this.value)">
						<option value='10' Selected>10</option><option value='50' >50</option><option value='100' >100</option><option value='150' >150</option>
					</select>
				</div>
		
		
			</div>
		</div>
</div>
	</div>
	</div>
</div>
</div>