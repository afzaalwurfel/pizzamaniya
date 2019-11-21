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
        <!-- </div> -->
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bill sheet</div><br>
              <div class="col-md-2">
              <a class="btn btn-success" href="<?= base_url('Lunch_main_controller/Add_new_emp') ?>">Add new employee</a></div>
               <?php if ($this->session->flashdata('insert')||$this->session->flashdata('update')) {
                        ?>
                        <div class="alert alert-success">
                         <p><?= $this->session->flashdata('insert');?>
                           <?= $this->session->flashdata('update');?> 
                         </p>
                        </div>
                        
                   <?php }  ?>
                     <?php if ($this->session->flashdata('Delete')) {?>
                       <div class="alert alert-danger" >
                         <p> 
                             <?= $this->session->flashdata('Delete');?>
                         </p>
                     </div> 
                    <?php } ?>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered"  width="100%" >
                  
                    <tr>
                      <th>Name</th>
                      <th>Gender</th>
                      <th>Wallet</th>
                      <th>Picture</th>
                      <th>Action</th>
                    </tr>
                  
                  <!-- <tfoot>
                    <tr>
                      <th>Name</th>
                      <th>Position</th>
                      <th>Office</th>
                      <th>Age</th>
                      <th>Start date</th>
                      <th>Salary</th>
                    </tr>
                  </tfoot> -->
         <?php  foreach($users as $key ) {
           ?>              
                  <tbody>
                    <tr>
                      <td><?=$key->Name?></td>
                      <td><?=$key->Gender?></td>
                      <td><?=$key->Wallet?></td>
                      <td><img height="50px" width="50px" src="<?= base_url('uploads/' .$key->Picture) ?>" /></td>
                      <td><a style="background-color: red" class="btn btn-success"  onclick="return deleteRecord();" href="<?= base_url('Lunch_main_controller/Delete_emp/'.$key->member_id) ?>">Delete</a>&nbsp<a class="btn btn-success" href="<?= base_url('Lunch_main_controller/Edit_emp/'.$key->member_id) ?>">Edit</a></td>
                      <!-- <td>2011/04/25</td> -->
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        </div>
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <?php $this->load->view('includes/footer'); ?>
    <script>
    function deleteRecord(){
        var r = confirm("Do you want to delete this?")
        if (r == true)
            return true;
        else
            return false;
    }
    </script>
  </body>
</html>
