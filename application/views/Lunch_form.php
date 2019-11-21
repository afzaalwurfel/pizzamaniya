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
        <div class="card-header">Lunch form</div>
        <div class="card-body">
          <?php echo form_open('Lunch_main_controller/Lunch_form_manipulation'); ?>
           <lebel>Enter todays total cost</lebel><br>
           <?php if($this->session->flashdata('value_error')||$this->session->flashdata('error_message')){ ?>
           <div class="alert alert-danger">
            <?= $this->session->flashdata('error_message');?>
           <?=  $this->session->flashdata('value_error'); ?>
           </div>
           <?php } ?>
          <div class="form-group">
                <input type="text" name="Total_bill" class="form-control" value=""  autofocus="autofocus">
            </div>
              
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                        <div >
                        <table style="width:100%" border="2">
                          <th>Names</th>
                          <th>who took lunch</th>
                          <th>Who brought curry</th>
                           <?php  foreach($users as $key ) { 
                                     ?>
                                <tr>
                                  <td><?=$key->Name?></td>
                                  <td>
                                <input type="checkbox"  name="check_list[]" value="<?=$key->member_id?>" /></td>
                                <td><input type="checkbox" name="check_list2[]" value="<?=$key->member_id?>"></td>
                              </tr>
                              <?php  }  ?>
                        </table><br>
                        </div>                       
                    </div>
                     <!-- <div >
                       <small>Select person's who do lunch</small>
                        <ul>
                           <?php  foreach($users as $key ) {  
                                     ?>
                                <li id="unique">
                                <input type="checkbox" name="check_list2[]" id="check_list2" value="<?=$key->member_id?>" /><?=$key->Name?></li>                                
                              <?php  } ?>
                        </ul>
                        </div> <br>    -->  
            <button class="btn btn-primary btn-block" type="submit">submit</button>
          <div class="text-center">
            <span class="d-block small mt-3">Enter today's dues</span>
          </div>  
        </div>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <?= form_close() ?>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('includes/footer'); ?>
  </body>
</html>
