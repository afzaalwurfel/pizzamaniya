<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('includes/header');?>

    <section>
     <?php $this->load->view('includes/sideBar'); ?>
         <?php $this->load->view('includes/Rightsidebar'); ?>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Listing of pages</h2>
            </div>
            <div class="row clearfix">
            </div>
            <div class="row clearfix">
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Pages</h2>
                        </div>
                            <div class="form-group">
                            <div class="form-label-group">
                        <div class="body table-responsive" style="width:100%">
                          <table class="table table-bordered">
                                <th>Page Title</th>
                                <th>Page Type</th>
                                <th>Page status</th>
                                <th>Page Description</th>
                                <th>Action</th>
                                <tbody>
                                    <?php foreach ($user as $key) {   ?>
                                    <tr>
                                        <td><?=$key->Title?></td>
                                        <td><?=$key->Type?></td>
                                        <td><?=$key->Status?></td>
                                        <td><?=$key->Description?></td>
                                        <td><a class="btn btn-primary" href="<?= base_url('HRT_web_controller/edit_page/').$key->page_id?>">Edit</a>
                                            <a type="submit" onclick="return myFunction()" class="btn btn-primary" href="<?= base_url('HRT_web_controller/delete_page/').$key->page_id?>">Delete</a>
                                            <a class="btn btn-primary" href="">view</a>
                                            </td>
                                    <?php } ?>
                                    </tr>
                                </tbody>
                            </table>
                           </div>
                          </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
        <script type="text/javascript">
                function myFunction() 
                {
                    var r = confirm("Are you sure you want to delete this page");
                    if (r == true)
                    return true;
                    else
                    return false;
                    }
        </script>
    </section>
   <?php $this->load->view('Includes/footer');?>
</body>

</html>
