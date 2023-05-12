<!-- Bootstrap js-->
<script src="<?php echo e(asset('assets/js/bootstrap/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/bootstrap-notify.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/notify/index.js')); ?>"></script>
<!-- feather icon js-->
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/icons/feather-icon/feather-icon.js')); ?>"></script>
<!-- scrollbar js-->
<script src="<?php echo e(asset('assets/js/scrollbar/simplebar.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/scrollbar/custom.js')); ?>"></script>
<!-- Sidebar jquery-->
<script src="<?php echo e(asset('assets/js/config.js')); ?>"></script>
<!-- Plugins JS start-->
<script src="<?php echo e(asset('assets/js/sidebar-menu.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>


<script async src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script async src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>



<?php echo $__env->yieldContent('script'); ?>

<?php if(Route::current()->getName() != 'popover'): ?>
	<script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
<?php endif; ?>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
<!-- <script src="<?php echo e(asset('assets/js/theme-customizer/customizer.js')); ?>"></script>  -->



<!-- include summernote css/js -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>

<!-- JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.13/js/bootstrap-multiselect.js"></script>
<script>
    // document.onreadystatechange = function() {
    //     if (document.readyState !== "complete") {
    //         // document.querySelector(
    //             // "body").style.visibility = "hidden";
    //         document.querySelector(
    //             "#basic-2").style.visibility = "hidden";
    //
    //         document.querySelector(
    //             "#loader").style.visibility = "visible";
    //     } else {
    //         document.querySelector(
    //             "#loader").style.display = "none";
    //         document.querySelector(
    //             "body").style.visibility = "visible";
    //         document.querySelector(
    //             "#basic-2").style.visibility = "visible";
    //
    //     }
    // };


    // $("").click(function(){
    //     $("#show_password").click(function(){
    //
    //     });
    // });



</script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote({
            placeholder: 'Hello Photon Play Systems',
            tabsize: 2,
            height: 500,
            callbacks: {
                onImageUpload: function(files) {
                    var formData = new FormData();
                    formData.append('photo', files[0]);
                    formData.append('_token', '<?php echo e(csrf_token()); ?>'); // Add CSRF token to the form data
                    $.ajax({
                        url: '<?php echo e(route('upload-photo-summernote')); ?>',
                        method: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        success: function(data) {
                            $('#summernote').summernote('insertImage', data.url);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.error(textStatus + ': ' + errorThrown);
                        }
                    });
                }
            }
        });

    });

</script>
<?php /**PATH C:\xampp\htdocs\photonplay\resources\views/layouts/script.blade.php ENDPATH**/ ?>