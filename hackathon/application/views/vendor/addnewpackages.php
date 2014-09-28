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
                    <h1 class="page-header">Add new package</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   <!-- middle content start -->
                   <form action="<?php echo $base_url ?>/vendor/packagecontroller/save" method="post" role="form" enctype="multipart/form-data" >
                       
                       <div class="col-md-6 col-md-offset-3">
                            <div class="form-group">
                                <label>Package Name</label>
                                <input type="text" class="form-control" name="strName">
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" rows="4" name="strDescription"></textarea>
                            </div>
                           <div class="form-group">
                               <label>Price</label>
                                <input type="text" class="form-control" name="dPrice">
                           </div>
                           <div class="form-group">
                               <label>Maximum guests</label>
                                <input type="text" class="form-control" name="intMaxGuests">
                           </div>
                           <div class="form-group">
                               <label>Image 1</label>
                                <input type="file" class="form-control" name="image1">
                           </div>
                           <div class="form-group">
                               <label>Image 2</label>
                                <input type="file" class="form-control" name="image2">
                           </div>
                           <div class="form-group">
                               <label>Image 3</label>
                                <input type="file" class="form-control" name="image3">
                           </div>
                           <div class="form-group">
                               <label>Image 4</label>
                                <input type="file" class="form-control" name="image4">
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