<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view('includes/header'); ?>
    <div id="wrapper">
      <!-- Sidebar -->
      <?php $this->load->view('includes/sideBar'); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Page Content -->
          <div class="alert alert-success">
          <label>All transections Table</label>
        </div>
          <div class="form-group">
              <div class="form-label-group">
                <div class="table-responsive">
                <table class="table table-bordered" width="100%" border="2">
                          <th>Name</th>
                          <th>Amount</th>
                          <th>Type</th>
                          <th>Balance</th>
                          <th>Date</th>
                          <tbody>
                           <?php  foreach($user as $key1 ) { 
                                     ?>
                                <tr>
                                    <td><?=$key1->Name?></td>
                                    <td><?=$key1->Amount?></td>
                                    <td><?=$key1->Type?></td>
                                    <td><?=$key1->Balance?></td>
                                    <td><?=$key1->Date?></td>
                              </tr>
                              <?php  } ?>
                              </tbody>
                        </table>
                        <?php  echo $this->pagination->create_links();   ?> 
        </div></div>
      </div>
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('includes/footer'); ?>
  </body>
</html>
