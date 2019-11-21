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
              <div class="card-body">
              <div class="col-md-6">
                <?php echo date("l jS \of F Y"); ?>
                <table class="table table-bordered">
                    <tr>
                      <th>Name</th>
                      <th>Wallet</th>
                    </tr>
         <?php  foreach($users as $key ) {
           ?>              
                  <tbody>
                    <tr>
                      <td><?=$key->Name?></td>
                      <?php 
                 $var = $key->Wallet;
                          ?>
                      <td style="color: <?php echo ($var < 0 ? '#FF0000' : 'Green'); ?>" ><b><?=$key->Wallet?></b></td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
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
