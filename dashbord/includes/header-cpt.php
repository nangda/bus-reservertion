<?php 
 $droit_dacces=getDroitAccesAdministrateur($ladministrateur[0]);
 $niveau_dacces=$droit_dacces["niveau_dacces"];
 $circonscription=$droit_dacces["circonscription"];
 $profil=$ladministrateur["fonction"];
 $lastvisit=GetLastVisit($ladministrateur[0], 'Admin');
?>
<script>

	$( "select" ).addClass( "search-select" );

</script>

		<script src="js/select-search.js"></script>

<div id="loader" style="display:none">

		<div id="div_preloader" style="text-align: center">

			<img src="images/preloader.gif">

		</div>

	</div>

	<div id="loader2" style="display:none">

		<div id="div_preloader" style="text-align: center">

			<img src="images/preloader.gif">

		</div>

	</div>


	<div id="loader3" style="display:none">

		<div id="div_preloader" style="text-align: center">

			<img src="images/preloader.gif">

		</div>

	</div>





<div id="wrap-nav-super-header">

				<div id="nav-super-header">

					<div class="elt-left-nav-sup-header">

						<div class="logo"><img src="../images/logo-blanc.png" alt="">

						</div>

<!--
						<div class="check-toggle-menu-left"><i data-feather="toggle-right"></i>

						</div>

						<div class="check-toggle-menu-left"><i data-feather="search"></i>

						</div>
-->

					</div>

					<ul class="elt-right-nav-sup-header">



						<li class="user-profile header-notification">

							<?php if($ladministrateur["photo"]!=''){ ?><img src="img_membres/<?php echo $ladministrateur["photo"]?>" class="img-radius" alt="User-Profile-Image"><?php }else{ ?>

							<img src="images/avatar-4.png" class="img-radius" alt="User-Profile-Image">

							<?php }?>

							<span><?php echo $ladministrateur["nom"]?> <?php echo $ladministrateur["prenom"]?></span>

							<i class="fa fa-angle-down"></i>

							<ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">

								<li>

									<a href="./mon-compte/">

                                        <i data-feather="user"></i> Mon compte

                                    </a>

								</li>

								<li>

									<a href="javascript:Notification_fermeture_session('<?php echo base64_encode("traitement_ajax/main.php?traitement=fermer-session")?>', '<?php echo $_SESSION["token"]?>')">

                                        <i data-feather="log-out"></i> D&eacute;connexion

                                    </a>

								</li>

							</ul>

						</li>

					</ul>

				</div>

			</div>