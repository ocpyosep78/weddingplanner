<?php include('header.php'); ?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">View current packages</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">
                
                <div class="col-lg-12">
                    <a href="<?php echo $base_url ?>/vendor/packagecontroller/add_new"><button style="margin-bottom:10px;" type="button" class="btn btn-primary btn-lg">Add New</button></a>
                   <!-- middle content start -->
                   <div class="panel panel-default">
                        <div class="panel-heading">
                            package summary
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Topic</th>
                                            <th>Description</th>
                                            <th>Price</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php for($i=0;$i<count($data);$i++){
                                    ?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $data[$i]['strName']; ?></td>
                                            <td><?php echo substr($data[$i]['strDescription'],0,40); ?></td>
                                            <td><?php echo $data[$i]['dPrice']; ?></td>
                                            <td class="center"><a href="<?php echo $base_url ?>/vendor/packagecontroller/edit/<?php echo $data[$i]['id']; ?>">edit<a/></td>
                                            <td class="center"><a href="<?php echo $base_url ?>/vendor/packagecontroller/delete/<?php echo $data[$i]['id']; ?>">detele<a/></td>
                                        </tr>
                                    
                                    <?php
                                    } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                
                   
                   <!-- middle content end -->
                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <?php include('footer.php'); ?>