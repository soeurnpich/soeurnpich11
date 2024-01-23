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
    <?php
    require('menu.php');
     require('class.php');
     $object = new myclass;
    ?>
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
                                        <li class="list-inline-item">អ្នកចម្រៀង</li>
                                    </ul>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    
                    <div class="row mt-2">
                        <div class="col-lg-3 col-md-3 col-3">
                            <input class="form-control"  type="text" placeholder="បទចម្រៀង..." id="txtSong">
                        </div>
                        <div class="col-lg-3 col-md-3 col-3">
                        <select id="selectSinger" class="form-control">
                            <?php
                            $query = $object->display("tblsinger");
                            while($row = mysqli_fetch_assoc($query)){
                                $singer = $row['singer'];
                            
                            ?>
                            <option value="<?php echo $singer;?>">
                            <?php echo $singer;?>
                            </option>
                            <?php
                            }
                            ?>
                           </select>
                        </div>
                        <div class="col-lg-3 col-md-3 col-3">
                        <select id="selectRhythm" class="form-control">
                            <?php
                            $query = $object->display("tblrhythm");
                            while($row = mysqli_fetch_assoc($query)){
                                $rhythm = $row['rhythm'];
                            
                            ?>
                            <option value="<?php echo $rhythm;?>">
                            <?php echo $rhythm;?>
                            </option>
                            <?php
                            }
                            ?>
                           </select>
                        </div>
                        <div class="col-lg-2 col-md-2 col-2">
                            <input type="text" id="txtCode" class="form-control" placeholder="Code" onKeyUp="onlyNumber(this)" maxlength="6">
                        </div>
                    <div class="col-lg-1 col-md-1 col-1">
                        <button class="btn btn-light" type="button">
                            <i class="fas fa-plus-square" onClick="addSong()"></i>
                        </button>
                       </div>
                     </div>
                </div>   
        </div>

        <!-- table start -->
        <section class="p-t-20">
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
							<button type="button" class="btn btn-primary" onClick="updateSinger()">Update</button>
						</div>
					</div>
				</div>
			</div>
			<!-- end modal small -->
    

<script type="text/javascript">
    $(document).ready(function(){
        $('#selectSinger').editableSelect({
            effects: 'slide'
        })
        $('#selectRhythm').editableSelect({
            effects: 'slide'
        })
    })
    function onlyNumber(input){
        var regen = /[^0-9]/gi;
        input.value = input.value.replace(regen,"");
    }
    function addSong(){
        var title = $('#txtSong').val()
        var singer = $('#selectSinger').val()
        var rhythm = $('#selectRhythm').val()
        var code = $('#txtCode').val()
        if(title ==''){
            $('#txtSong').focus() 
            exit()
        }else if(singer ==''){
            $('#selectSinger').focus() 
            exit()
        }else if(rhythm ==''){
            $('#selectRhythm').focus() 
            exit()
        }else if(code ==''){
            $('#txtCode').focus() 
            exit()
        }
        $.post('addSong.php',{title:title,singer:singer,rhythm:rhythm,code:code},function(data){
            if(data =='done'){
                $('#txtSong').val('')
                $('#selectSinger').val('')
                $('#selectRhythm').val('')
                $('#txtCode').val('')
                Swal.fire({
            icon: "success",
            title: "ជោគជ័យ",
            text: "អ្នកបានលុបបទចម្រៀងរួចរាល់",
            footer: '<a href="#">Why do I have this issue?</a>'
             });
            }else{
                $('#txtaddSong').select()
                Swal.fire({
            icon: "error",
            title: "មិនជោគជ័យ",
            text: "អ្នកបានបទចម្រៀងរួចរាល់",
            footer: '<a href="#">Why do I have this issue?</a>'
             })
            }
        })
    }

</script>