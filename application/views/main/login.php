<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>TUTORIALS SITE</title>

  <link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/animate.min.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/owl.transitions.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/prettyPhoto.css" rel="stylesheet">
  <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">



  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets2/css/bootstrap.css">
    <style type="text/css">
      #footer{
        background-image: url(img/bg-grey.jpg);
        height: 100px;
      }
      #footercontent{
        background-color: skyblue;
        height: 80px;
      }
      #green{
        background-color: white;
        border-color: skyblue;
        border-bottom-width: 3px;
      }
      #ungu{
        border-width: 2px;
        border-color: orange;
        color: rgba(254,102,0,1);
        background-color: rgba(128,97,255,0.5);
        font-size: 12pt;
      }
      legend{
        color: purple;
        font-style: bold;
      }
      .panel{
        border-color: skyblue;
      }
      #Arial{
        font-family: Arial Black;
      }
      #home{
        background-image: none;
      }
    </style>
</head>
<body>

  <div class="row">
    <div class="container">
    <div class="col-md-12 col-sm-12 text-center">
      <br><br><br><br><br>
    </div>
    <div class="row">
    <div class="col-md-4">      
    </div>
      
    <div class="col-md-4">      
          <div class="panel panel-default">
              <div class="panel-heading text-center">LOGIN</div>
              <div class="panel-body">
              <?php echo validation_errors(); ?>
               <?php echo form_open_multipart('login/log_in'); ?>
                <label>Username</label>
                <input type="text" class="form-control" name="username" required="">
              <br>
                <label>Password</label>
                <input type="password" class="form-control" name="password" required="">
              <br>
                <button type="submit" name="submit" class="btn btn-primary">LOGIN</button>
                <a href="<?php echo base_url(); ?>index.php/signup">Sign Up</a>
                </form>
              </div>
            </div>  
    </div>

    <div class="col-md-4">      
    </div>
    </div>
    <div class="col-md-12 col-sm-12">
      <br><br>
    </div>
    </div>
  </div>

</body>
</html>