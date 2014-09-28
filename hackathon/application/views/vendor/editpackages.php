<?php include('header.php'); ?>
<script type="text/javascript" src="<?= $site_url; ?>resources/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript">
tinymce.init({
    selector: "textarea",
    plugins: [
        "advlist autolink lists link image charmap print preview anchor",
        "searchreplace visualblocks code fullscreen",
        "insertdatetime media table contextmenu paste moxiemanager"
    ]
});
//toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent "
</script>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit package</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   <!-- middle content start -->
                   <form action="<?php echo $base_url ?>/vendor/packagecontroller/save" method="post" role="form" enctype="multipart/form-data" >
                       <?php if(isset($data[0]['id'])){ echo '<input type="hidden" name="id" value="'.$data[0]['id'].'">'; } ?>
                       <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label>Package Name</label>
                                <input type="text" class="form-control" name="strName" value="<?php if(isset($data[0]['strName'])){ echo $data[0]['strName']; } ?>">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="4" name="strDescription"><?php if(isset($data[0]['strDescription'])){ echo $data[0]['strDescription']; } ?></textarea>
                            </div>
                           <div class="form-group">
                               <label>Price</label>
                                <input type="text" class="form-control" name="dPrice" value="<?php if(isset($data[0]['dPrice'])){ echo $data[0]['dPrice']; } ?>">
                           </div>
                           <div class="form-group">
                               <label>Maximum guests</label>
                                <input type="text" class="form-control" name="intMaxGuests" value="<?php if(isset($data[0]['intMaxGuests'])){ echo $data[0]['intMaxGuests']; } ?>">
                           </div>
                           <div class="form-group">
                               <label>Image 1</label>
                                <input type="file" class="form-control" name="image1">
                                <?php if(isset($data[0]['image1']) && $data[0]['image1'] != ''){ ?>
                                <img src="<?= $site_url; ?>resources/images/user_uploads/<?php echo $data[0]['image1'] ?>" width="120" height="100">
                                <?php } ?>
                           </div>
                           <div class="form-group">
                               <label>Image 2</label>
                                <input type="file" class="form-control" name="image2">
                                <?php if(isset($data[0]['image2']) && $data[0]['image2'] != ''){ ?>
                                <img src="<?= $site_url; ?>resources/images/user_uploads/<?php echo $data[0]['image2'] ?>" width="120" height="100">
                                <?php } ?>
                           </div>
                           <div class="form-group">
                               <label>Image 3</label>
                                <input type="file" class="form-control" name="image3">
                                <?php if(isset($data[0]['image3']) && $data[0]['image3'] != ''){ ?>
                                <img src="<?= $site_url; ?>resources/images/user_uploads/<?php echo $data[0]['image3'] ?>" width="120" height="100">
                                <?php } ?>
                           </div>
                           <div class="form-group">
                               <label>Image 4</label>
                                <input type="file" class="form-control" name="image4">
                                <?php if(isset($data[0]['image4']) && $data[0]['image4'] != ''){ ?>
                                <img src="<?= $site_url; ?>resources/images/user_uploads/<?php echo $data[0]['image4'] ?>" width="120" height="100">
                                <?php } ?>
                           </div>
                           <div class="form-group">
                               <button type="submit" class="btn btn-outline btn-primary">Submit</button>
                           </div>
                       </div>
                       
                   </form>
                   
                   <!-- middle content end -->
                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <?php include('footer.php'); ?>