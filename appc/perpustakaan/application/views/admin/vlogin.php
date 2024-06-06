<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Title -->
    <title>Halaman Login</title>

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/vendor/font-awesome/css/font-awesome.min.css">

    <!-- Neptune CSS -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>public/css/core.css">
</head>

<body class="img-cover" style="background-image: url(<?php echo base_url(); ?>public/img/photos-1/bg_login.png);">

    <div class="container-fluid">
        <div class="sign-form">
            <div class="row">
                <div class="col-md-4 offset-md-4 p-x-3">
                    <div class="box b-a-0">
                        <div class="p-a-2 text-xs-center">
                            <h5>Welcome</h5>
                        </div>
                        <form action="<?php echo base_url(); ?>clogin/auth" method="post" class="form-material m-b-1">
                            <div class="form-group">
                                <input type="text" class="form-control" id="exampleInputEmail" placeholder="Username" name="username">
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password" name="password">
                            </div>
                            <div class="p-x-2 form-group m-b-0">
                                <button type="submit" class="btn btn-purple btn-block text-uppercase">Sign in</button>
                            </div>
                        </form>
                        <div class="p-a-2 text-xs-center text-muted">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Vendor JS -->
    <script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/jquery/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/tether/js/tether.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>public/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>