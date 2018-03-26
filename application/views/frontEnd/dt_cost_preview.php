	<div id="masterContent" >
			<div class="container">
		
				<form method="POST" action="<?=base_url('dtc_shipper')?>" class="form-horizontal">
					<div class="row">
						<h1>Cost Info</h1>
						<div class="col-xs-12 col-md-6" style="padding: 10px 30px;">
							<h2>Product Dimension</h2>
									<div class="form-group">
										<label for="wt"><span class="glyphicon glyphicon-info-sign"></span> Weight(kg)</label>
										<input type="hidden" id="wt" name="weight" value="<?=$weight?>" />
										<p class="form-control"><?=$weight?></p>
									</div>
									<div class="form-group">
										<label for="l"><span class="glyphicon glyphicon-info-sign"></span> Length(cm)</label>
										<input type="hidden" id="l" name="length" value="<?=$length?>"/>
										<p class="form-control"><?=$length?></p>
									</div>
									<div class="form-group">
										<label for="w"><span class="glyphicon glyphicon-info-sign"></span> width(cm)</label>
										<input type="hidden" id="w" name="width" value="<?=$width?>"/>
										<p class="form-control"><?=$width?></p>
									</div>
									<div class="form-group">
										<label for="h"><span class="glyphicon glyphicon-info-sign"></span> height(cm)</label>
										<input type="hidden" id="h" name="height" value="<?=$height?>"/>
										<p class="form-control"><?=$height?></p>
									</div>
									<div class="form-group">
										<label for="vwt"><span class="glyphicon glyphicon-info-sign"></span> Volumetic Weight(kg)</label>
										<input type="hidden" id="vwt" name="v_weight" value="<?=$v_weight?>"/>
										<p class="form-control"><?=$v_weight?></p>
									</div>
						</div>
			
			
						<div class="col-xs-12 col-md-6" style="padding: 10px 30px;">
							<h2>Address</h2>
								<div class="form-group">
									<label for="frm"><span class="glyphicon glyphicon-info-sign"></span> From</label>
									<input type="hidden" class="form-control" id="frm" name="fromState" value="<?=$fromState?>"/>
									<p class="form-control"><?=$fromState?></p>
								</div>
								<div class="form-group">
									<label for="to"><span class="glyphicon glyphicon-info-sign"></span> To</label>
									<input type="hidden" id="to" name="toState" value="<?=$toState?>"/>
									<p class="form-control"><?=$toState?></p>
								</div>
							<h2>Cost</h2>
								<div class="form-group">
									<label for="cost"><span class="glyphicon glyphicon-info-sign"></span> Cost(RM)</label>
									<input type="hidden" class="form-control" id="cost" name="cost" value="123" />
									<p class="form-control">123</p>
								</div>
						</div>
					</div>
					<div class="row">
						<div class="form-group">
					<div class="col-md-6">
						<a type="button" class="form-control btn" href="javascript:history.go(-1)">Cancel</a>
					</div>
				
					<div class="col-md-6">
						<input type="submit" value="Continue >>" id="next" class="form-control btn btn-success"/>
					
					</div>
				</div>
				</div>
				</form>
       
		</div>
	</div>