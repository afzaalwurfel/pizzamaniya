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
             <?php echo form_open_multipart('Lunch_main_controller/update_reco/'.$users->member_id); ?>
              
              <div class="col-md-12">
              <div class="form-label-group">
      <img height="100px" width="100px" src="<?= base_url('uploads/'.$users->Picture) ?>" alt="Error" style="width:auto;">
      </div><br>
            </div>
                <div class="col-md-6">
                    <input type="text" name="empName" class="form-control" value="<?php echo $users->Name ?>"   autofocus="autofocus">
                    <?php echo form_error('empName'); ?>
                    <label for="firstName">Employee name</label>
                </div><br>
                <div class="col-md-6">
                  <div class="form-label-group">
                     <input type="radio" name="gender" value="male" <?php echo ($users->Gender == 'Male' ? 'checked' : ''); ?> > Male<br>
                     <input type="radio" name="gender" value="female" <?php echo ($users->Gender == 'female' ? 'checked' : ''); ?>> Female<br> 
                    <!-- <?php echo form_error('fName'); ?> -->
                   <!--  <label for="lastName">Gender</label> -->
                  </div>
                </div>
              
            <input type="hidden" name="pre_picture" value="<?= $users->Picture ?>" >
            
            <!-- <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" name="designation" class="form-control" value="<?php echo $users->designation ?>" placeholder="Designation" >
                <small> <?php echo form_error('designation'); ?></small>
                <label for="Designation">Your Designation</label>
              </div>
            </div> -->
            <!-- <div class="col-md-6">
              <div class="form-label-group">
                <input type="file" name="userPicture" >
                <label for="Designation">picture</label>
              </div>
            </div> -->
            
            <div class="col-md-12">
              <div class="form-label-group">
            <button  type="submit">submit</button>
              </div>
            </div>
           <?= form_close() ?>
        </div>
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
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
