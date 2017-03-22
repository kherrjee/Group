<!--main content start-->
<section id="main-content">
   <section class="wrapper site-min-height">
      <!-- page start-->
      <section class="panel">
         <div class="panel-body">
            <div class="row">
               <div class="col-lg-12">
                  <section class="panel dataTables_wrapper form-inline">
                     <header class="panel-heading">List Of Client</header>
                     <p class="message" style="background:#34A953;color:white;font-size:25px;font-family:times new romans;text-align:center"></p>
                     <div class="row">
                
                           <div id="editable-sample_length" class="dataTables_length">
                              <div class="select" style="float:left;margin-left:4%;">
                              <label>CLIENT:&nbsp;</label>
                             <select class="billClient">
                              <option>SELECT</option>
                                 <?php foreach ($fetchAll as $listC) { 
                                  if($listC['date_collected']!="0000-00-00"){?>
                                 <option><?php echo $listC['contact_name']; ?></option>
                                 <?php } } ?>
                             </select>
                             </div>
                             <div class="select" style="float:left;margin-left:4%;">
                             <label>PROJECT :&nbsp;</label>
                             <select class="quotationSel">
                              
                             </select>
                             </div>
                             <div class="select" style="float:left;margin-left:4%;">
                             <label>Date From:&nbsp;</label>
                             <select>
                                 <option></option>
                             </select>
                             </div>
                              <div class="select" style="float:left;margin-left:4%;">
                             <label>Date To:&nbsp;</label>
                             <select>
                                 <option></option>
                             </select>
                             </div>
                              <div class="select" style="float:left;margin-left:4%;">
                              <input type="button" value="submit"> 
                             </div>
                           </div>
                     
                     </div>
                     <div id="editable-sample_length" class="dataTables_length">
                              
                     </div>
                      <table class="table table-striped table-hover table-bordered" id="editable-sample">
                        <thead>
                           <tr>
                              <th><i class="fa fa-user"></i> Bill NO.</th>
                              <th><i class="fa fa-bullhorn"></i> Description</th>
                              <th><i class="fa fa-bullhorn"></i> Percentage </th>
                              <th><i class="fa fa-phone"></i> Date Collected</th>
                              <th><i class="fa fa-envelope"></i>Date Billed</th>
                              <th><i class="fa fa-cog"></i> qb_ref_no</th>
                              <th><i class="fa fa-cog"></i> downloads</th>
                           </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($fetchCollection as $listC) { if($listC['date_collected']!='0000-00-00'){
            
                            $file_names= explode(',',$listC['filename']);
                            // print_r($file_names);
                            for($i=0;$i< 3;$i++){
                              if(@$file_names[$i]){
                                $split[$i] = $file_names[$i];
                              }else{
                                $file_names[$i]="";
                                $split[$i] = "n/a";
                              }
                               
                            }
                          ?>

                           <tr>
                              <td><?php echo $listC['payment_terms_id']; ?></td>
                              <td><?php echo $listC['description']; ?></td>
                              <td><?php echo $listC['percentage']; ?></td>
                              <td><?php echo $listC['date_collected']; ?></td>
                              <td><?php echo $listC['date_billed']; ?></td>
                              <td><?php echo $listC['qb_ref_no']; ?></td>
                              <td>Invoice Copy:<a href ="<?php echo "uploads/".$listC['folder_name']."/".$file_names[0]?>"><?php echo $split[0]."..." ?></a><br>
                                  Check Copy:<a href ="<?php echo "uploads/".$listC['folder_name']."/".$file_names[1]?>"><?php echo $split[1]."..."?></a><br>
                                  Deposit Slip : <a href ="<?php echo "uploads/".$listC['folder_name']."/".$file_names[2]?>"><?php echo $split[2]."..." ?></a><br>
                              </td>
                             <!--  <td>
                                 <button class="btn btn-default btn-xs edit_bills" data_attr="<?php echo $this->encrypt->encode($listC['payment_terms_id']); ?>" data-toggle="modal" data-target="#edit_clients" title="edit"><i class="fa fa-pencil"></i></button>
                                 <button class="btn btn-danger btn-xs delete_client" mAtt="<?php echo $this->encrypt->encode($listC['payment_terms_id']); ?>" title="trash"><i class="fa fa-trash-o "></i></button>
                              </td> -->
                           </tr> 
                           <?php } } ?>
                        </tbody>
                     </table>
                  </section>
               </div>
            </div>
         </div>
      </section>
      <!-- page end-->
   </section>
</section>