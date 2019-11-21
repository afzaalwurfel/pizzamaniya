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
          <!-- <ol class="breadcrumb=-0987654`=b">
            <li class="breadcrumb-item">
              <a href="index.html">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Blank Page</li>
          </ol> -->
          <!-- Page Content -->
           <?php echo form_open('Lunch_main_controller/add_balence'); ?>
          <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Transactions</div>
         <div class="card-body">
          <?php if($this->session->flashdata('value_error')){ ?>
           <div class="alert alert-danger">
           <?=  $this->session->flashdata('value_error'); ?>
           </div>
           <?php } ?>
           <label>Select an employee</label>
             <div class="form-group">
              <div class="form-label-group">
                <select class="form-control" name="name">
                <option value="Select">Select...</option>
                 <?php foreach($users as $key){ 
                 ?>
                <option  value="<?=$key->member_id?>"><?=$key->Name?></option>
                <!-- <input type="hidden" name="currentid" value="<?=$key->member_id?>"> -->
                <?php } ?>
                </select>
                </div>
            </div>
          <label for="amount_Rs">Amount Rs</label>
          <div class="form-group">
                <input type="text" name="amount_Rs" class="form-control" value=""  autofocus="autofocus">
            </div>
            <!-- <label for="khami_roti">khamiri roti Rs</label>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="khameri_roti" class="form-control" value="<?=$rates->khamiri_roti ?>"  >
              </div>
            </div> -->
            <div class="form-group">
                </div>
            <button class="btn btn-primary" type="submit">submit</button>
            <!-- <div class="alert alert-danger">
            <?=  $this->session->flashdata('error'); ?>
            </div> -->
             </div>
           </div>
          </div>
        </div> 
        </div>
        <?= form_close()?>
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
