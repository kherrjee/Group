<div id="main-content"> <!-- Main Content Section with everything -->
	<div class="wrapper">
		<div class="row">
			<div class="col-lg-12">
				<section class="panel">
					<header class="panel-heading">
						<h4>OT Request</h4>
					</header>
					<table class="table table-striped table-advance table-hover">
						<thead>
							<tr>
								<th>Activity Name</th>
								<th>Activity Date</th>
								<th>Status</th>
								
								<th>Action</th>

								
								
							</tr>	
						</thead>
						<tbody>
						<tr>
							<?php 
								if(!empty($activity)){
								foreach($activity as $data){
									
							?>

							<td><?php echo $data['activity_name'] ?></td>
							<td><?php echo $data['activity_date'] ?></td>
							<td><?php echo $data['status'] ?></td>
							<td>
			                  		<button class="btn btn-success btn-xs " onclick="generate('<?php echo $data['id']?>');">
			                  			<i class="fa fa-sliders" aria-hidden=></i> Generate
			                  		</button>
								</td>
							</tr>
							<?php }} ?>
						</tbody>
					</table>
				</section>
			</div>
		</div>
	</div>
</div>