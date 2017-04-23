<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      
    <title>Admin Ticketing Movie</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="<?php echo base_url();?>asset/assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="<?php echo base_url();?>asset/assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="<?php echo base_url();?>asset/assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><i class="fa fa-square-o "></i>&nbsp;NEWS</a>
                </div>
                <div class="navbar-collapse collapse">
                    <!--ul class="nav navbar-nav navbar-right">
                        <li><a href="#">See Website</a></li>
                        <li><a href="#">Open Ticket</a></li>
                        <li><a href="#">Report Bug</a></li>
                    </ul-->
                </div>

            </div>
        </div>
        <!-- /. NAV TOP  -->
       
                       <nav class="navbar-default navbar-side" role="navigation">
                            <div class="sidebar-collapse">
                                <ul class="nav" id="main-menu">
                                    <li class="text-center user-image-back">
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url(''); ?>"><i class="fa fa-desktop "></i>Admin</a>
                                        <a href="<?php echo base_url('home/add');?>"><i class="fa fa-edit "></i>Add a Movie</a>
                                    </li>
                                </ul>

                            </div>
						</nav> 
        
