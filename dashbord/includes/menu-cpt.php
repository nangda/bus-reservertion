<?php 
$current_page=basename($_SERVER['PHP_SELF']);

?>
			

			<div id="conteneur-menu-lateral">
				<ul id="menu-lateral">
					<li>
						<a href="accueil" <?php if($current_page=="dashbord.php"){?>class="active"<?php }?>>
							<span class="fa fa fa-home"></span>
							Accueil
						</a>
					</li>
					<?php if($droit_dacces["suivi_des_demandes"]=="1"){?>				
					<li>
						<a href="suivi-des-demandes/" <?php if($current_page=="souscription.php"){?>class="active"<?php }?>>
							<span class="fa fa fa-folder"></span>
							Suivi <br>des demandes
						</a>
					</li>
					<?php }?>	
					<li>
				        <a href="mon-compte/" <?php if($current_page=="compte.php"){?>class="active"<?php }?>>
					      <span class="fa fa fa-user "></span>Mon compte
					    </a>
					</li>
					<?php if($droit_dacces["donnee_de_base"]=="1"){?>
					<li>
						<a href="donnees-de-base/" <?php if($current_page=="contenu-base.php"){?>class="active"<?php }?>>
							<span class="fa fa fa-database"></span>
							Donn&eacute;es de base
						</a>
					</li>	
					<?php }?>	
					<?php if($droit_dacces["utilisateur"]=="1"){?>				
					<li><a href="utilisateurs/" <?php if($current_page=="utilisateur.php"){?>class="active"<?php }?>>
					      <span class="fa fa fa-users"></span>Utilisateurs
					    </a>
					</li>
					<?php }?>			
					<li><a href="guide/" target="new">
					      <span class="fa fa fa-question-circle"></span>Guide utilisateur
					    </a>
					</li>
				</ul>
			</div>