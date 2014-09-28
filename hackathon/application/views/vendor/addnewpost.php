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
                    <h1 class="page-header">Add new post</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            
            <div class="row">
                <div class="col-lg-12">
                   <!-- middle content start -->
                   
                   <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="Enter text">
                   </div>
                   <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <input class="form-control" placeholder="Enter text">
                   </div>
                   <div class="form-group">
                                            <label>Text Input with Placeholder</label>
                                            <textarea class="form-control" placeholder="Enter text"></textarea>
                   </div>
                   
                   
                   
                   <!-- middle content end -->
                </div>
                <!-- /.col-lg-12 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    <?php include('footer.php'); ?>