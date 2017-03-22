<!--main content start-->
<section id="main-content">
  <section class="wrapper">
      <div class="rotate state-overview">
      		<div class="col-lg-3 col-sm-6">
      			<section class="panel">
      				<div class="symbol terques">
      					<i class="fa fa-user"></i>
      				</div>
              <div class="value">
                <span style="font-size:36px;">495</span>
                <p>New Users</p>
              </div>
      			</section>
      		</div>
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol red">
                <i class="fa fa-tags"></i>
              </div>
              <div class="value">
                <span style="font-size:36px;">974</span>
                <p>Sales</p>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol yellow">
                <i class="fa fa-shopping-cart"></i>
              </div>
              <div class="value">
                <span style="font-size:36px;">328</span>
                <p>New Order</p>
              </div>
            </section>
          </div>
          <div class="col-lg-3 col-sm-6">
            <section class="panel">
              <div class="symbol blue">
                <i class="fa fa-bar-chart-o"></i>
              </div>
              <div class="value">
                <span style="font-size:36px;">10328</span>
                <p>New Profit</p>
              </div>
            </section>
          </div>
      </div>
      <!-- user info -->
      <div class="row">
        <div class="col-lg-8">
          <section class="panel">
            <div class="panel-body">
             <?php foreach ($pointOwner as $own) {
                # code...
               ?>
              <a href="#" class="task-thumb">
               <img style ="width: 90px;height: 88px;" src="<?php echo "uploads/".$own['folder'].'/'.$own['profilePath']?>">
              </a>
             
              <div class="task-thumb-details">
                <a href="#"><?php echo $own['first_name']." ".$own['last_name']." - ".$own['points']."pts"?></a>
                <p><?php echo $own['email']?></p>
              </div>
            </div>
            
            <table class="table table-hover personal-task">
              <tbody>
              <?php foreach ($item as $item) {if($own['points']>= $item['points']){
               
              ?>
                <tr>
                  <td><img style ="width: 50px;height: 50px;" src="<?php echo "uploads/".$item['folder'].'/'.$item['path']?>"></td>
                  <td><?php echo $item['item']?></td>
                  <td><?php echo $item['points']?></td>
                  <td><input type="button" value="Claim" class="btn btn-success" onclick="claimPrice(<?php echo $item['id']?>);"> </td>
                </tr>
               <?php } } ?>
               <?php } ?>
              </tbody>
            </table>
          </section>
        </div>

        <div class="col-lg-4">
          <section class="panel">
            <div class="panel-body progress-panel">
              <div class="task-progress">
                <a href="#">Top 10 points Leader</a>
                <p>Angelina Jolie</p>
              </div>
            </div>
            <table class="table table-hover personal-task">
              <tbody>
              <?php foreach ($point as $pts) {if($pts['isAdmin'] <= '0' ){
                # code...
               ?>
                <tr>
                  <td>1</td>
                  <td><img style ="width: 50px;height: 50px;" src="<?php echo "uploads/".$pts['folder'].'/'.$pts['profilePath']?>"><?php echo $pts['first_name']." ".$pts['last_name']?></td>
                  <td><span class="badge bg-success"><?php echo $pts['points']." pts"?></span></td>
                  <td>
                    <span>Done</span>
                  </td>
                </tr>
               <?php } } ?>
              </tbody>
            </table>
          </section>
        </div>

      </div>
  </section>
</section>
<script type="text/javascript">
  
  function claimPrice($id){
    // $('.claimPrice').val($id);
     toastr.info('Claim Price??<br/><br/><form class="claimPrice1"><input type="hidden"  name="claimPrice" class="claimPrice" ><button type="button" class="btn btn-success approved" onclick="claimNow('+$id+')">Yes</button></form>', '');

      
  }
  function claimNow(id){
        $.ajax({
            type: 'GET',
            url: 'UserDashboard/claimPrice',
            data: {
                id: id
            },
            success: function(success) {
            
                if (success === '1') {
                    toastr.success('Successfully Updated!', '');
                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                } else {
                    alert('hi');
                }
            }
        });
  }
</script>