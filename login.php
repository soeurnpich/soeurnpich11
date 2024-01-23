<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="images/icon/big logo.png" type="images/png">

    <!-- Title Page-->
    <title>Login</title>
    
    <?php
    include('link-rel.php');
    ?>

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/big logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input class="au-input au-input--full" type="text"  placeholder="Username" id="txtUsername">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Password" id="txtPwd">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Remember Me
                                    </label>
                                    <label>
                                        <a href="#">Forgotten Password?</a>
                                    </label>
                                </div> 
                                <button class="au-btn au-btn--block au-btn--blue m-b-20" type="button" onClick="login()">Login</button>
                              
                            </form>
                            <div class="register-link">
                                <p>
                                    Don't you have account?
                                    <a href="#">Sign Up Here</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <?php
    include('link-java.php');
    ?>

</body>
</html>
<!-- end document-->
<script type="text/javascript">
    function login(){
        var user = $('#txtUsername').val()
        var pwd = $('#txtPwd').val()
        if(user == ''){
            $('#txtUsername').focus() 
            exit()
        }else if(pwd == ''){
            $('#txtPwd').focus()
            exit()
        }
        $.post('checkLogin.php',{user:user,pwd:pwd},function(data){
            if(data == 'done'){
           window.open('index.php','_self')
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