

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns:fb="http://ogp.me/ns/fb#">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />



<link href="css.css" rel="stylesheet" type="text/css" />

<link href="css2.css" rel="stylesheet" type="text/css" />



</head>



<body id="page">
<table width="570" align="center">
  <tr>
    <td align="center"><img src="http://bicec.com/cresco/images/logo.png" height="60"  /></td>
  </tr>
  <tr>
    <td><div class="" style="width: 570px; height: auto; background-color: #FFFFFF; padding: 10px 0px 0px 0px; margin-left: auto; margin-right: auto; margin-top: 0px; position: relative" >
      <div class="texte_gris16px" id="mouchar_particulier2" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif ;	color:#838383; margin:10px 0px;   border-top:1px solid #CCC; padding-top:5px; text-transform: uppercase" align="center">NOTIFICATION CLOTURE DE DOSSIER </div>
      <div align="left" id="div_affiche_erreur" style="width:490px"></div>
      <div align="left" class="div_formulaire" style="margin: 0px; background-color:#F6F7F9; padding:10px 5px">
        <table width="100%" border="0" align="center">
         <?php if($demandeur["etat"]!="valide"){?>
           <tr>
            <td height="28" colspan="3" align="center" valign="middle"  style="font-size:22px;	font-family: 'Open Sans', sans-serif;	color:red">Dossier rejet&eacute; - <strong>Cr&eacute;dit non accord&eacute;</strong></td>
          </tr>
          <?php }else{?>
          <tr>
            <td height="28" colspan="3" align="center" valign="middle"  style="font-size:22px;	font-family: 'Open Sans', sans-serif;	color:#50B432">Dossier valid&eacute; - <strong>Cr&eacute;dit accord&eacute;</strong></td>
          </tr>
          
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Montant accord&eacute; :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo number_format($demandeur["montant_accorde"], 0, ',', ' ') ?> Fcfa</strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Dur&eacute;e  :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["duree_accorde"] ?> mois</strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
          <?php }?>         
          <?php if($demandeur["commentaire_cloture"]!=""){?>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Note du gestionnaire :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["commentaire_cloture"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <?php }?>
          <tr>
             <td height="30" colspan="3" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><hr size="1" color="gray" /></td>
            </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Montant souhait&eacute; :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo number_format($demandeur["montant_souhaite"], 0, ',', ' ') ?> Fcfa</strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Dur&eacute;e souhait&eacute;e :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["duree_credit"] ?> mois</strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <?php if($demandeur["duree_credit"]=="11"){?>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Mois de diff&eacute;r&eacute; :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["mois_de_suspension"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <?php }?>
           <tr>
             <td height="30" colspan="3" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><hr size="1" color="gray" /></td>
            </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Agence :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $agence["titre"]; ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Num&eacute;ro de compte :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["numero_compte"] ?> &nbsp;&nbsp;<?php echo $demandeur["cle"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" colspan="3" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><hr size="1" color="gray" /></td>
            </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Nom &amp; pr&eacute;nom :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["nom"]." ".$demandeur["prenom"] ?>&nbsp;</strong></td>
             <td align="right" valign="middle"><span class="texte_rouge11px"></span></td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Date de naissance :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo madate2($demandeur["date_naissance"]) ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Lieu de naissance :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["lieu_naissance"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" colspan="3" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><hr size="1" color="gray"></td>
            </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Ville :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><strong><?php echo $ville["titre"] ?></strong></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Adresse/Quartier :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo ($demandeur["lieu_naissance"]) ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
            <td width="39%" height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">T&eacute;l&eacute;phone 1 :</td>
            <td width="58%" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["telephone"] ?>&nbsp;</strong></td>
            <td width="3%" align="right" valign="middle"><span class="texte_rouge11px"></span></td>
          </tr>
          <?php if($demandeur["telephone2"]!=""){?>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">T&eacute;l&eacute;phone 2 :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["telephone2"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <?php }?>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Email :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["email"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" colspan="3" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><hr size="1" color="gray" /></td>
            </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Statut Professionnel :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $statut_professionnel ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Employeur :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["employeur"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Date d'embauche :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo madate2($demandeur["date_embauche"]) ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase">Profession :</td>
             <td align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><strong><?php echo $demandeur["profession"] ?></strong></td>
             <td align="right" valign="middle">&nbsp;</td>
           </tr>
           <tr>
             <td height="30" colspan="3" align="left" valign="middle" style="font-size:16px;	font-family:Arial, Helvetica, sans-serif color:#000000; text-transform: uppercase"><span class="texte_gris12px" style="font-size:14px; font-family: 'Open Sans', sans-serif; color:#838383;">Dossier cl&ocirc;tur&eacute; par   <strong><?php echo $ladministrateur["nom"]." ".$ladministrateur["prenom"]?></strong></span></td>
            </tr>
          </table>
      </div>
      <div class="texte_gris_13px" id="mouchar_particulier3" style="width: 100%; margin-top: 0px; border-top: 1px solid #CCC; line-height: 40px; background-color: #F6F7F9;" align="center">
        <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td align="center" bgcolor="#E37B03" class="texte_gris14px" style="font-size:14px;	font-family: 'Open Sans', sans-serif;	color:WHITE;"><strong>BICEC CRESCO</strong></td>
          </tr>
        </table>
        <a href="#" class="texte_gris_11px petite_majuscule"></a></div>
    </div></td>
  </tr>
</table>
</body>

</html>

