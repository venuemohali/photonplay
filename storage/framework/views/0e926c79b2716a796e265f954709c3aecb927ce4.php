<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta name="author" content="_____Name_____">
    <link rel="icon" src="<?php echo e(asset('assets/logo/fav.png')); ?>" type="image/x-icon">
    <link rel="shortcut icon" src="<?php echo e(asset('assets/logo/fav.png')); ?>" type="image/x-icon">
    <title>
        <?php echo $__env->yieldContent('title'); ?>
    </title>
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets\css\custome.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets\css\easy-tax.css')); ?>">
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css"
        rel="stylesheet"
    />
    <style type="text/css">
        .bootstrap-tagsinput .tag {
            margin-right: 2px;
            color: white !important;
            background-color: #0d6efd;
            padding: 0.2rem;
        }
    </style>
    <?php echo $__env->make('layouts.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('style'); ?>

</head>

<body <?php if(Route::current()->getName() == 'index'): ?> onload="startTime()" <?php endif; ?>>

    <?php if(Route::current()->getName() == 'index'): ?>
        <div class="loader-wrapper">
            <div class="loader-index"><span></span></div>
            <svg>
                <defs></defs>
                <filter id="goo">
                    <fegaussianblur in="SourceGraphic" stddeviation="11" result="blur"></fegaussianblur>
                    <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo">
                    </fecolormatrix>
                </filter>
            </svg>
        </div>
    <?php endif; ?>
    <!-- tap on top starts-->
    <div class="tap-top"><i data-feather="chevrons-up"></i></div>
    <!-- tap on tap ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-wrapper" id="pageWrapper">
        <!-- Page Header Start-->
        <?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Page Header Ends  -->
        <!-- Page Body Start-->
        <div class="page-body-wrapper">
            <!-- Page Sidebar Start-->
            <?php echo $__env->make('layouts.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Page Sidebar Ends-->
            <div class="page-body">
                <div class="container-fluid">
                    <div class="page-title">
                        <div class="row">
                            <div class="col-6">
                                <?php echo $__env->yieldContent('breadcrumb-title'); ?>
                            </div>
                            <div class="col-6">
                                <ol class="breadcrumb d-none d-md-flex">
                                    <li class="breadcrumb-item"><a href="<?php echo e(url('/')); ?>"> <i
                                                data-feather="home"></i></a></li>
                                    <?php echo $__env->yieldContent('breadcrumb-items'); ?>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Container-fluid starts-->
                <div id="loader" class="centergifloader"></div>
                <?php echo $__env->yieldContent('content'); ?>
                <!-- Container-fluid Ends-->
                <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- footer start-->


        </div>
    </div>
    <!-- latest jquery-->
    <?php echo $__env->make('layouts.script', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!-- Plugin used-->




    <!-- Easy Tax Java Script -->
    <script src="<?php echo e(asset('assets/js/easy-tax.js')); ?>"></script>


    <?php if(session('status')): ?>

        <script>
            setTimeout(function() {
                notify.update('message',
                    '<i class="fa fa-bell-o"></i><strong>Message:</strong> <?php echo e(session('status')); ?>.');
            }, 500);
        </script>

    <?php endif; ?>

    <script type="text/javascript">
        // if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
        //     $(".according-menu.other").css("display", "none");
        //     $(".sidebar-submenu").css("display", "block");
        // }



        
        
        
        
        
        
        
        
        
        
        
        

        
        
        
        
        

        
        
        

        
        
        
        
        
        

        // let i=0;
        // var j=0;
        // //more options in specialization
        // function more_options(){
        //     i++;
        //     $('#dynamic_field').append('<div  id="row_'+i+'" class="row mb-3 form-group"> <div class="col-md-12">' +
        //         '<div class="row">'+
        //         '<div class="col-md-5">'+
        //         '<select id="row_id_'+i+'" name="row_'+i+'[]"  class="form-select form-select" aria-label=".form-select-sm">'+
        //     '<option selected disabled>--Option--</option>'+
        //     '<option>3 Days</option>'+
        //     '<option>5 Days</option>"'+
        //     '</select>'+
        //         '</div>'+
        //         '<div class="col-md-5">'+
        //     '<input type="text" class="form-control" placeholder="$">'+
        //     '</div>'+
        //     '<div class="col-md-2 p-1">'+
        //     '<a  onclick="more_options()" class="add btn btn-sm btn-dark">+ </a>'+
        //     '</div>'+
        //     '</div>'+
        //     '</div>' +
        //         '</div>');
        // }

        //more options in specialization
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    




    </script>



    <script type="text/javascript">
        if ($(".page-wrapper").hasClass("horizontal-wrapper")) {
            $(".according-menu.other").css("display", "none");
            $(".sidebar-submenu").css("display", "block");
        }


        let selectedUser=[]
        let loadedUser=[]
        function load_emails(search){
            $('#show_all_users').show();

            const apiUrl = '<?php echo e(route('admin.all_user_emails')); ?>';
            // Define the API endpoint URL
            let searchb=search!=undefined?search.value:'';
            // Make an AJAX request to fetch the items
            $.ajax({
                url: apiUrl+"?search="+searchb,
                dataType: 'json',
                success: function(items) {
                    // Populate the dropdown with the items
                    let itm=items.emails.filter((res)=>!selectedUser.includes(res.email));
                    loadedUser=[...items.emails]
                    commonArray(itm)
                },
                error: function() {
                    console.error('Failed to fetch emails from the API');

                }
            });
        }
        function remove_seleted_user(){
            $('#show_all_users').hide();
        }
        function deleteThis(email){
            const find=selectedUser.indexOf(email)
            selectedUser.splice(find,1)
            const id=`selected ${email}`
            document.getElementById(id).remove()
            commonArray(loadedUser)
        }
        function commonArray(arr){
            const $multiSelect = $('#selectusers_multi');
            $multiSelect.empty();
            if(![...arr].filter((res)=>!selectedUser.includes(res.email)).length){
                $multiSelect.append(`<option class="text-center" value="no_data">No Data Found</option>`);
            }else{
                [...arr].filter((res)=>!selectedUser.includes(res.email)).forEach(item => {
                    $multiSelect.append(`<option value="${item.email}">${item.email}</option>`);
                })
            }

        }

        function onSelectedKey(select){
            let val=select.value
            if(val ==="no_data") return
            selectedUser.push(val)
            commonArray(loadedUser)
            const addSelected=$('#selectedUserEmail')
            addSelected.append(`<div class="d-flex  m-2" id="selected ${val}">
<input class="border-0 bg-primary text-white w-auto" style="min-width: 100%;max-width: 100%" name="selected_email_receiver[]" value="${val}" readonly />
<span class="text-white bg-danger"  onclick="deleteThis('${val}')" role="button" ">X</span>
</div>`);

        }



    </script>


    <script>
        <?php if(session()->has('success')): ?>
        Toastify({
            text: '<?php echo e(session('success')); ?>',
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "green",
                color:"text",
            },
            onClick: function(){} // Callback after click
        }).showToast();
        <?php endif; ?>

        <?php if(session()->has('error')): ?>
        Toastify({
            text: '<?php echo e(session('error')); ?>',
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: "red",
                color:"text",
            },
            onClick: function(){} // Callback after click
        }).showToast();
        <?php endif; ?>

    </script>




</body>

</html>
<?php /**PATH C:\Users\The Miraj\Desktop\laravell(06-05-2023)\photonplay\resources\views/user-master.blade.php ENDPATH**/ ?>