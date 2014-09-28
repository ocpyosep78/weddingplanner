<!DOCTYPE html>
<html lang="en">
<?php 
$site_url = '/hackathon/';
$base_url = '/hackathon/index.php';
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>WSO2 Hackathon | Booleans</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?= $site_url; ?>resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?= $site_url; ?>resources/css/plugins/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?= $site_url; ?>resources/css/plugins/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?= $site_url; ?>resources/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?= $site_url; ?>resources/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?= $site_url; ?>resources/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
 
<div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <?php   
                    if(isset($this->session->userdata['error'])){
                        $var = $this->session->userdata['error']; 
                        if($var){
                            echo '<div class="alert alert-danger">'.$var.'</div>';
                            $this->session->unset_userdata('error');
                        }
                    }
                    if(isset($this->session->userdata['success'])){
                        $var1 = $this->session->userdata['success']; 
                        if($var1){
                            echo '<div class="alert alert-success">'.$var1.'</div>';
                            $this->session->unset_userdata('success');
                        }
                    }
                    
                    ?>
                    
                    <div class="panel-heading">
                        <h3 class="panel-title">Service Provider | Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $base_url ?>/vendor/login/signin" method="post" id="registration_form" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="User Name" name="username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-success btn-block" value="Login">
                            </fieldset>
                        </form>
                                                <a href="<?php echo $base_url ?>/vendor/login/register" >don't you have an account. please sign up here</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </body>