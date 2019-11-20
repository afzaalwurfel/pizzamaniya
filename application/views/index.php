<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('includes/header'); ?>
  <section>
      <?php $this->load->view('includes/sideBar'); ?>
        <?php $this->load->view('includes/Rightsidebar'); ?>
    </section>
    <section class="content">
        <?= form_open('HRT_web_controller/insertNewPage');?>
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
            </div>
            <div class="row clearfix">
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <h2>Create New page</h2>
                        </div>
                        <div class="body">
                                <label>Page Title</label>
                                <input type="text" name="page_title"  value="" class="form-control" autofocus="autofocus"><br>
                                <label >Page Type</label>
                                <input type="text" name="page_Type"   class="form-control" autofocus="autofocus"><br>
                                <label >Page status</label><br>
                                <input type="text" name="page_status"  value="Active" class="form-control"><br>
                                <label >Page Description</label>
                            <?php echo $this->ckeditor->editor("textarea_name","Page Description write here");  ?> <br>
                            <button class="btn btn-primary form-control" type="submit">submit</button>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
                                    <select class="form-control" name="name">
                                    <option value="">Select...</option>
                                    <option  value="active">active</option>
                                    </select>
        <?= form_close();?>
    </section>
<?php $this->load->view('includes/footer'); ?>
</body>

</html>
