<!DOCTYPE html>
<?php
	include('session.php');
	
	$nama=$user_check;
?>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title>Beranda</title>
		<meta name="generator" content="Bootply" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="css/styles.css" rel="stylesheet">
	</head>
	<body>
<!-- header -->
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Dashboard</a>
        </div>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" role="button" data-toggle="dropdown" href="#"><i class="glyphicon glyphicon-user"></i> <?php echo $nama ?> <span class="caret"></span></a>
                    <ul id="g-account-menu" class="dropdown-menu" role="menu">
                        <li><a href="#">My Profile</a></li>
                    </ul>
                </li>
                <li><a href="logout.php"><i class="glyphicon glyphicon-lock"></i> Logout</a></li>
            </ul>
        </div>
    </div>
    <!-- /container -->
</div>
<!-- /Header -->

<!-- Main -->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3">
            <!-- Left column -->
            <div class="profile-photo">.</div>

            <hr>

            <ul class="nav nav-stacked">
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#userMenu">Materi Pembelajaran <i class="glyphicon glyphicon-chevron-down"></i></a>
                    <ul class="nav nav-stacked collapse in" id="userMenu">
                        <li class="active"> <a href="#"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                    </ul>
                </li>
                <li class="nav-header"> <a href="#" data-toggle="collapse" data-target="#menu2">Tugas <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu2">
                        <li><a href="#">Information &amp; Stats</a></li>

                    </ul>
                </li>
                <li class="nav-header"><a href="#" data-toggle="collapse" data-target="#menu3">Nilai <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu3">
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> Facebook</a></li>
                    </ul>
                </li>
				<li class="nav-header"><a href="#" data-toggle="collapse" data-target="#menu4">Grup Saya <i class="glyphicon glyphicon-chevron-right"></i></a>
                    <ul class="nav nav-stacked collapse" id="menu4">
					<?php
						$sql=mysql_query("select grup.nama_grup from grup, keanggotaan_grup where grup.id_grup=keanggotaan_grup.id_grup and 
						keanggotaan_grup.id_user='$nama' LIMIT 3");
						
						while($isi=mysql_fetch_array($sql)){
						$namagrup=$isi['nama_grup'];
					?>
                        <li><a href=""><i class="glyphicon glyphicon-circle"></i> <?php echo $namagrup; ?></a></li>
					<?php
						}
					?>
						<li><a href=""><i class="glyphicon glyphicon-circle"></i> Lihat semua grup..</a></li>
						<?php
							$sql=mysql_query("select user_level from user where id_user='$nama'");
							$isi=mysql_fetch_array($sql);
							if($isi['user_level']==2){
						?>
								<li><a href=""><i class="glyphicon glyphicon-plus"></i> Tambah Grup</a></li>
						<?php
							}
						?>
                    </ul>
                </li>
            </ul>

        </div>
        <!-- /col-3 -->
        <div class="col-sm-9">

            <!-- column 2 -->
            
            <div class="row">
                <!-- center left-->
                <div class="col-md-9" style="border-left-style:solid;">

                    <div class="btn-group btn-group-justified">
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-plus"></i>
                            <br> Service
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cloud"></i>
                            <br> Cloud
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-cog"></i>
                            <br> Tools
                        </a>
                        <a href="#" class="btn btn-primary col-sm-3">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            <br> Help
                        </a>
                    </div>

                    <hr>

                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>Reports</h4></div>
                        <div class="panel-body">

                            <small>Success</small>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100" style="width: 72%">
                                    <span class="sr-only">72% Complete</span>
                                </div>
                            </div>
                            <small>Info</small>
                            <div class="progress">
                                <div class="progress-bar progress-bar-info progress-bar-striped active" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                    <span class="sr-only">20% Complete</span>
                                </div>
                            </div>
                            <small>Warning</small>
                            <div class="progress">
                                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                    <span class="sr-only">60% Complete (warning)</span>
                                </div>
                            </div>
                            <small>Danger</small>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete</span>
                                </div>
                            </div>
                        </div>
                        <!--/panel-body-->
                    </div>
                    <!--/panel-->

                    <hr>

                    <!--tabs-->
                    <div class="panel">
                        <ul class="nav nav-tabs" id="myTab">
                            <li class="active"><a href="#profile" data-toggle="tab">Profile</a></li>
                            <li><a href="#messages" data-toggle="tab">Messages</a></li>
                            <li><a href="#settings" data-toggle="tab">Settings</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active well" id="profile">
                                <h4><i class="glyphicon glyphicon-user"></i></h4> Lorem profile dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                <p>Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis dolor, in sagittis nisi.</p>
                            </div>
                            <div class="tab-pane well" id="messages">
                                <h4><i class="glyphicon glyphicon-comment"></i></h4> Message ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                <p>Quisque mauris augu.</p>
                            </div>
                            <div class="tab-pane well" id="settings">
                                <h4><i class="glyphicon glyphicon-cog"></i></h4> Lorem settings dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate.
                                <p>Quisque mauris augue, molestie.</p>
                            </div>
                        </div>

                    </div>
                    <!--/tabs-->

                    <hr>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4>New Requests</h4></div>
                        <div class="panel-body">
                            <div class="list-group">
                                <a href="#" class="list-group-item active">Hosting virtual mailbox serv..</a>
                                <a href="#" class="list-group-item">Dedicated server doesn't..</a>
                                <a href="#" class="list-group-item">RHEL 6 install on new..</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/col-->
                <div class="col-md-3">
                    
                </div>
                <!--/col-span-6-->

            </div>
            
        <!--/col-span-9-->
    </div>
</div>

<div class="modal" id="addWidgetModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Add Widget</h4>
            </div>
            <div class="modal-body">
                <p>Add a widget stuff here..</p>
            </div>
            <div class="modal-footer">
                <a href="#" data-dismiss="modal" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dalog -->
</div>
<!-- /.modal -->
	<!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/scripts.js"></script>
	</body>
</html>