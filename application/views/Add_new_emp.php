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
        <div class="card-header">Register an Employee</div>
        <div class="card-body">
           <?php echo form_open_multipart('Lunch_main_controller/insert_emp');    ?> 
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                    <input type="text" name="empName" class="form-control" placeholder="Please enter your name"  autofocus="autofocus">
                    <label for="firstName">First name</label>
                </div>
              </div>
             </div>
              <input type="radio" name="Gender"  placeholder="Male" value="Male">Male<br>
              <input type="radio" name="Gender"  placeholder="Female" value="Female">Female<br> 
              <label for="firstName">upload your profile picture</label><br>
                <input type="file" name="userPicture" class="" accept="image/*" ><br><br>
               <input type="submit" class="btn btn-primary" name="submit"><br>
              <?php if($this->session->flashdata('error'))
            { ?>
              <div class="alert alert-danger" >
                         <p> 
                             <?= $this->session->flashdata('error');?>
                         </p>
                     </div> 
          <?php  } ?>
           <!--  <a class="btn btn-primary btn-block submit" href="#">Register</a> -->
          
            <?= form_close() ?>
        </div>
      </div>
    </div>
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
