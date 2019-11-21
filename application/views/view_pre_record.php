<!DOCTYPE html>
<html lang="en">
  <head>
  <?php $this->load->view('includes/header'); ?>
    <div id="wrapper">
      <!-- Sidebar -->
      <?php $this->load->view('includes/sideBar'); ?>
      <div id="content-wrapper">
        <div class="container-fluid">
          <!-- Breadcrumbs-->
          <!-- <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol> -->
          <!-- Page Content -->
          <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Search prevous record</div>
         <div class="card-body">
          <label>Select any person</label>
          <div class="form-group">
              <div class="form-label-group">
                <?php echo form_open('Lunch_main_controller/fetch_pre_record'); ?>
                <select class="form-control" name="name">
                <option value="Select">Select...</option>
                 <?php foreach($users as $key){ 
                 ?>
                <option  value="<?=$key->member_id?>" <?php echo ($key->member_id == $this->input->post('name') ? 'selected' : ''); ?>  ><?=$key->Name?></option>
                <!-- <input type="hidden" name="currentid" value="<?=$key->member_id?>"> -->
                <?php } ?>
                </select><br>
                <button type="submit" class="btn btn-primary">View prevous records</button>
                <?= form_close() ?>
                </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
            <table style="width:100%" border="2">
                          <!-- <th>Name</th> -->
                          <th>Amount</th>
                          <th>Type</th>
                          <th>Balance</th>
                          <th>Date</th>
                           <?php  foreach($user as $key1 ) { 
                                     ?>
                                <tr>
                                    <!-- <td><?=$key1->Name?></td> -->
                                    <td><?=$key1->Amount?></td>
                                    <td><?=$key1->Type?></td>
                                    <td><?=$key1->Balance?></td>
                                    <td><?=$key1->Date?></td>
                              </tr>
                              <?php  } ?>
                        </table>
        </div>
      </div>
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
