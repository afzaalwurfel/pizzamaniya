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
          <?php echo form_open('Lunch_main_controller/roti_rate_update/'.$rates->id); ?>
          <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Roti Rates</div>
        <div class="card-body">
           <?php if ($this->session->flashdata('update')) {
                        ?>
          <div class="alert alert-success">
                         <p>
                           <?= $this->session->flashdata('update');?> 
                         </p>
                        </div>
                        
                   <?php }  ?><br>
          <label for="patiri_roti">Patiri roti Rs</label>
          <div class="form-group">
                <input type="text" name="patiri_roti" class="form-control" value="<?=$rates->patiri_roti ?>"  autofocus="autofocus">
            </div>
            <!-- <label for="khami_roti">khamiri roti Rs</label>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="khameri_roti" class="form-control" value="<?=$rates->khamiri_roti ?>"  >
              </div>
            </div> -->
            <div class="form-group">
              <div class="checkbox">
              </div>
            </div>
            <button class="btn btn-primary" type="submit">Update</button>&nbsp &nbsp &nbsp &nbsp
           <!--  <a class="btn btn-primary" href="<?= base_url('Lunch_main_controller/emplyees_view') ?>">Cancel</a> -->
            <!-- <div class="alert alert-danger">
            <?=  $this->session->flashdata('error'); ?>
            </div> -->
        </div>
        <?php if ($this->session->flashdata('value_error')) {
                        ?>
          <div class="alert alert-danger">
                         <p>
                           <?= $this->session->flashdata('value_error');?> 
                         </p>
                        </div>
                        
                   <?php }  ?>
        </div>
         </div>
        </div> 
        </div>
        <?= form_close()?>
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
    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('includes/footer'); ?>
  </body>
</html>
