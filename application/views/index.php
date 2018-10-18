<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('includes/header'); ?>
  <section>
      <?php $this->load->view('includes/sideBar'); ?>
        <?php $this->load->view('includes/Rightsidebar'); ?>
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>
            <div class="row clearfix">
            </div>
            <div class="row clearfix">
                <!-- Browser Usage -->
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h2>BROWSER USAGE</h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                                <table class="table table-bordered"  >

                                    <tr>
                                    <th>Name</th>
                                    <th>Gender</th>
                                    <th>Wallet</th>
                                    </tr>
                                    <?php  foreach($users as $key ) {
                                    ?>              
                                    <tbody>
                                    <tr>
                                    <td><?=$key->Name?></td>
                                    <td><?=$key->Gender?></td>
                                    <?php 
                                    $var = $key->Wallet;
                                    ?>
                                    <td style="color: <?php echo ($var < 0 ? '#FF0000' : ''); ?>" ><?=$key->Wallet?></td>
                                    </tr>
                                    <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                        <div class="body">
                            <div id="donut_chart" class="dashboard-donut-chart"></div>
                        </div>
                    </div>
                </div>
                <!-- #END# Browser Usage -->
            </div>
        </div>
    </section>
<?php $this->load->view('includes/footer'); ?>
</body>

</html>
