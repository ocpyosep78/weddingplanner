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
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Service Provider | Registration form</h3>
                    </div>
                    <div class="panel-body">
                        <form action="<?php echo $base_url ?>/vendor/login/new_reg" method="post" id="registration_form" role="form">
                            <fieldset>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="User Name" name="strUserName" id="strUserName" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="strPassword" type="password" value="">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Repeat Password" name="repeat_password" type="password">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email Address" name="strEmailAddress" type="text">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Contact No" name="strContact" type="text">
                                </div>
                                
                                <div class="form-group">
                                            
                                            <select class="form-control" name="intTypeID">
                                                <option value="">select vendor type</option>
                                                 <?php for($i=0;$i<count($data);$i++){
                                                ?>
                                                <option value="<?php echo $data[$i]['id']; ?>"><?php echo $data[$i]['strName']; ?></option>
                                                <?php
                                                } ?>
                                            </select>
                                </div>
                                <div class="form-group">
                                            
                                            <select class="form-control" name="strDestrict">
                                                <option value="">select service district</option>
                                                <option value="">Anuradhapura</option>
<option value="Badulla">Badulla</option>
<option value="Batticaloa">Batticaloa</option>
<option value="Colombo">Colombo</option>
<option value="Galle">Galle</option>
<option value="Gampaha">Gampaha</option>
<option value="Hambantota">Hambantota</option>
<option value="Jaffna">Jaffna</option>
<option value="Kalutara">Kalutara</option>
<option value="Kandy">Kandy</option>
<option value="Kegalle">Kegalle</option>
<option value="Kilinochchi">Kilinochchi</option>
<option value="Kurunegala">Kurunegala</option>
<option value="Mannar">Mannar</option>
<option value="Matale">Matale</option>
<option value="Matara">Matara</option>
<option value="Moneragala">Moneragala</option>
<option value="Mullaitivu">Mullaitivu</option>
<option value="Nuwara Eliya">Nuwara Eliya</option>
<option value="Polonnaruwa">Polonnaruwa</option>
<option value="Puttalam">Puttalam</option>
<option value="Ratnapura">Ratnapura</option>
<option value="Trincomalee">Trincomalee</option>
<option value="Vavuniya">Vavuniya</option>
                                            </select>
                                </div>
                                
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="About You..." name="strAboutMe" rows="4"></textarea>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <input type="submit" name="submit" class="btn btn-lg btn-outline btn-primary" value="Register">
                            </fieldset>
                        </form>
                        <a href="<?php echo $base_url ?>/vendor/login" >back to login page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </body>