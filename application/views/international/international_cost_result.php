<div id="masterContent" >
	<div class="container space">
		<div class="raw">
		<table class="table table-striped">
			<tbody>
				<tr>
					<td>From</td>
					<td><?=$from?></td>
				</tr>
				<tr>
					<td>To</td>
					<td><?=$to?></td>
				</tr>
				<tr>
					<td>Weight</td>
					<td><?=$weight?></td>
				</tr>
				<tr>
					<td>Height</td>
					<td><?=$height?></td>
				</tr>
				<tr>
					<td>Width</td>
					<td><?=$width?></td>
				</tr>
				<tr>
					<td>Length</td>
					<td><?=$length?></td>
				</tr>
				<tr>
					<td>Cost</td>
					<td>RM <?=$cost?></td>
				</tr>
			</tbody>
		</table>
	</div>
	<form method="POST" action="<?=base_url('int_shipper')?>">
	<div class="container">
		<div class="container-fluid">
			<button type="submit" class="btn btn-success">Process</button>
		</div>
	</div>
	</form>
	</div>
</div>



