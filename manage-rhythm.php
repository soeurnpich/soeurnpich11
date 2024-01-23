<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/icon/Newlogo.png" type="images/png">
    <!-- Title Page-->
    <title>manage rhythm</title>
    <!-- link css-->
    <?php
    include('link-rel.php');
    ?>
    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
</head>
<body class="animsition">
    <!-- HEADER DESKTOP START-->
    <?php
    require('menu.php');
    ?>
    <!-- HEADER DESKTOP END-->
    

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <section class="au-breadcrumb2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="au-breadcrumb-content">
                                <div class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">ការគ្រប់គ្រង</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">ចង្វាក់</li>
                                    </ul>
                                </div>
                                <div class="au-form-icon--sm">
                                    <input class="au-input--w300 au-input--style2" type="text" placeholder="បញ្ចូលចង្វាក់..." id="txtrhythm">
                                    <button class="au-btn--submit2" type="button">
                                        <i class="zmdi zmdi-plus-square" onClick="addRhythm()"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>   
        </div>
        <!-- table start -->
        <section class="p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12" id="display"></div>
                </div>
            </div>

        </section>
        <!-- table end -->

    <!-- footer --> 
        <?php
        include('footer.php');
         ?>

    </div>
    <!--link javascript-->
    <?php
    include('link-java.php');
    ?>

</body>

</html>
			<!-- modal small -->
			<div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="smallmodalLabel" aria-hidden="true">
				<div class="modal-dialog modal-sm" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="smallmodalLabel">Update</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							<input type="text" id="txtUpdate" class="form-control">
                            <input type="hidden" id="hide_id">
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
							<button type="button" class="btn btn-primary" onClick="updateRhythm()">Update</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal small -->
    

    <script type="text/javascript">
    $(document).ready(function(){
        display()
    })
    //function display
    
    function display(){
        $('#display').load('rhythmDisplay.php')
    }

    //function addRhythm
    function addRhythm(){
        var rhythm = $('#txtrhythm').val()
        if(rhythm == ''){
            $('#txtrhythm').focus()
            exit;
        }
        $.post('addRhythm.php',{rhythm:rhythm},function(data){
            if(data == 'done'){
                $('#txtrhythm').val('')
                Swal.fire({
            icon: "success",
            title: "ជោគជ័យ",
            text: "អ្នកបានបញ្ជូលបទចម្រៀងរួចរាល់",
            footer: '<a href="#">Why do I have this issue?</a>'
             });
            }else{
            Swal.fire({
            icon: "error",
            title: "មិនជោគជ័យ",
            text: "អ្នកមិនអាចបញ្ជូលបទចម្រៀងប្រភេទដូចគ្នាបានទេ",
            footer: '<a href="#">Why do I have this issue?</a>'
             });
            }

        })
    }
    function showModal(rhythm, id){
        $('#updateModal').modal('show')
        $('#txtUpdate').val(rhythm)
        $('#hide_id').val(id)
    }
    function updateRhythm(){
        var rhythm = $('#txtUpdate').val();
        var id = $('#hide_id').val();
        if(rhythm ==''){
            $('#txtUpdate').focus('') 
            exit();
        }
        $.post('updateRhythm.php',{rhythm:rhythm,id:id},function(data){
            if(data == 'done'){
                $('#txtUpdate').val('')
            Swal.fire({
            icon: "success",
            title: "ជោគជ័យ",
            text: "អ្នកបានលុបបទចម្រៀងរួចរាល់",
            footer: '<a href="#">Why do I have this issue?</a>'
             });
            display()
            $('#updateModal').modal('hide')
            }else{
                $('#txtUpdate').select()
                Swal.fire({
            icon: "error",
            title: "មិនជោគជ័យ",
            text: "អ្នកបានបទចម្រៀងរួចរាល់",
            footer: '<a href="#">Why do I have this issue?</a>'
             })
            }

        })
    }

    function  deleteRhythm(id) {
    Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!"
    }).then((result) => {
    if (result.isConfirmed) {
        $.post('deleteRhythm.php',{id:id},function(data){
            if(data == 'done'){
            Swal.fire({
            icon: "success",
            title: "ជោគជ័យ",
            text: "អ្នកបានលុបបទចម្រៀងរួចរាល់",
            footer: '<a href="#">Why do I have this issue?</a>'
             });
            display()
            $('#updateModal').modal('hide')
            }else{
                Swal.fire({
                position: "top-end",
                icon: "success",
                title: "You can't delete this data",
                showConfirmButton: false,
                timer: 1500
            });
            }
        })
    }
    });  
    }
    

</script>
<!-- end document-->