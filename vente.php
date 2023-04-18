<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
	<!-- nalika Icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/nalika-icon.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
           
			<div class="nalika-profile">
				
			
			</div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
            
                           
                        </li>
                        <li class="active">
                       <a href="<?=base_url('/dashbord')?>"><i class="fe fe-home"></i> 
                      <span>TABLEAU DE BORD</span></a>
                      </li>
                       
              
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-bar-chart icon-wrap"></i> <span class="mini-click-non">Client</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_client')?>"> Nouveau Client</a></li>
                            <li><a href="<?=base_url('/liste_client')?>"> Liste Client </a></li>
                
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-table icon-wrap"></i> <span class="mini-click-non">Agence</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_agence')?>"> Nouveau Agence</a></li>
                            <li><a href="<?=base_url('/liste_agence')?>"> Liste Agence </a></li>
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-forms icon-wrap"></i> <span class="mini-click-non">Logement</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_appartement')?>"> Nouveau Appartement</a></li>
                            <li><a href="<?=base_url('/liste_appartement')?>"> Liste Appartement </a></li>
                              
                            </ul>
                        </li>
                        <li>
                            <a class="has-arrow" href="mailbox.html" aria-expanded="false"><i class="icon nalika-smartphone-call icon-wrap"></i> <span class="mini-click-non">Vente</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/ajouter_vente')?>"> Nouveau Vente</a></li>
                            <li><a href="<?=base_url('/liste_vente')?>"> Liste Vente </a></li>
                                
                            </ul>
                        </li>
                        <li id="removable">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Utilisateur</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                            <li><a href="<?=base_url('/profil')?>">Profil</a></li>
                            <li><a href="<?=base_url('/parametre')?>"> Paramètre </a></li>
                            <li><a href="<?=base_url('/')?>"> Deconnecter </a></li>
                               
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="icon nalika-menu-task"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n hd-search-rp">
                                            <div class="breadcome-heading">
												<form role="search" class="">
													<input type="text" placeholder="Search..." class="form-control">
													<a href=""><i class="fa fa-search"></i></a>
												</form>
											</div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="hpanel email-compose mg-b-15">
                            <div class="panel-heading hbuilt">
                                <div align='center' class="p-xs h4">
                                   AJOUTER UN NOUVEAU VENTE
                                </div>
                            </div>
                            <?php if (isset($vente)) : ?>
            <div class="alert alert-danger">
                <?= $message ?>
            </div>
        <?php endif ?>

        <form method="POST" action="<?= site_url('/ajou') ?>">
        <fieldset>
            
        <?=csrf_field(); ?>

<?php if(!empty(session()->getFlashdata('fail'))) : ?>
 <div class="alert alert-danger"><?= session()->getFlashdata('fail');?>
 </div>
 <?php endif ?>


 <?php if(!empty(session()->getFlashdata('success'))) : ?>
 <div class="alert alert-success"><?= session()->getFlashdata('success');?>
 </div>
 <?php endif ?>
           
                            <div class="panel-heading hbuilt">
                                <div class="p-xs">
                                    <form method="get" class="form-horizontal">

                <div class="mb-3">
                <label class="form-label">Nom Client</label>
                      <select class="form-control" class="select2 form-select shadow-none select2-hidden-accessible" name='nomcli'  style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                   <?php foreach ($ClientInfo as $val) : ?>
                     <option value="<?=$val['nomcli']?>" data-select2-id="0"> <?=$val['nomcli']; ?></option>
             <?php endforeach ?>
              <span class="text-danger"><?= isset($validation) ? display_error($validation,'nomcli') : '' ?></span>   
                         </select>      
            </div>

                 <div class="mb-3">
                <label class="form-label">Nom Agence</label>
                      <select class="form-control" class="select2 form-select shadow-none select2-hidden-accessible" name='nomag'  style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                   <?php foreach ($AgenceInfo as $val) : ?>
                     <option value="<?=$val['nomag']?>" data-select2-id="0"> <?=$val['nomag']; ?></option>
             <?php endforeach ?>
              <span class="text-danger"><?= isset($validation) ? display_error($validation,'nomag') : '' ?></span>   
                         </select>      
            </div>

            <div class="mb-3">
                <label class="form-label">Nom Appartement</label>
                      <select class="form-control" class="select2 form-select shadow-none select2-hidden-accessible" name='nomapp'  style="width: 100%; height: 36px" data-select2-id="1" tabindex="-1" aria-hidden="true">
                   <?php foreach ($AppartementInfo as $val) : ?>
                     <option value="<?=$val['nomapp']?>" data-select2-id="0"> <?=$val['nomapp']; ?></option>
             <?php endforeach ?>
              <span class="text-danger"><?= isset($validation) ? display_error($validation,'nomapp') : '' ?></span>   
                         </select>      
            </div>

                <div class="mb-3">
                    <label class="form-label">Date</label>
                    <input name="date" type="date" class="form-control"   value="<?= isset($vente) ? $vente["date"] : ""; ?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation,'date') : '' ?></span>
                </div>

                <div class="mb-3">
                    <label class="form-label">Prix</label>
                    <input name="prix" type="text" class="form-control"   value="<?= isset($vente) ? $vente["prix"] : ""; ?>">
                <span class="text-danger"><?= isset($validation) ? display_error($validation,'prix') : '' ?></span>
                </div>
            
                <br>
                
               <div align='center'>
                <button type="submit" class="btn btn-primary">Enrgistrer</button>
                <a href="<?=base_url('/ajouter_vente')?>" class="btn btn-primary"> Actualiser </a>
                <a href="<?=base_url('/liste_vente')?>" class="btn btn-primary"> Liste Vente </a>
               </div>
            </fieldset>
        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       

    <!-- jquery
		============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
		============================================ -->
    <script src="js/sparkline/jquery.sparkline.min.js"></script>
    <script src="js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
		============================================ -->
    <script src="js/calendar/moment.min.js"></script>
    <script src="js/calendar/fullcalendar.min.js"></script>
    <script src="js/calendar/fullcalendar-active.js"></script>
	<!-- float JS
		============================================ -->
    <script src="js/flot/jquery.flot.js"></script>
    <script src="js/flot/jquery.flot.resize.js"></script>
    <script src="js/flot/curvedLines.js"></script>
    <script src="js/flot/flot-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="js/main.js"></script>
</body>

</html>