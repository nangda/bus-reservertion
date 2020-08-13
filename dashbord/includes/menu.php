<?php

  $result_menu=mysql_query("SELECT * FROM menu WHERE etat='1' ORDER BY rang ASC");
  $structure="";
  $i=0;
  $nb=mysql_num_rows($result_menu) OR die (mysql_error());
  $target="";
  $class="menu-actif";
  while($menu=mysql_fetch_array($result_menu)){
    if($menu["lien"]!="1"){
      if($menu["url"]=="" OR $menu["url"]=="#")$url="./produits/".valideChaine($menu["titre"])."/".$menu[0]."/";
      elseif($menu["url"]!="" and $menu["url"]!="#")$url=$menu["url"];
      $target="";
    }else{ 
      $url=addslashes ($menu["url"]);
      if($menu["fenetre"]=="1")$target="_blank";
      else $target="";
    }  
    $result_smenu=mysql_query("SELECT * FROM smenu WHERE idmenu='$menu[0]' AND etat='1' ORDER BY rang ASC");
    $nb_smenu=mysql_num_rows($result_smenu);
    if($nb_smenu>0){
      if(isset($_GET["categorie"]) AND $_GET["categorie"]==$menu[0]) $structure.="<li> <a  href=\"$url\" target=\"$target\" style=\"color: #127e03;\">".$menu["titre"]."</a>";
	  else $structure.="<li> <a  href=\"$url\" target=\"$target\">".$menu["titre"]."</a>";
      $structure.="<ul class=\"sous-menu\">";
      while($smenu=mysql_fetch_array($result_smenu)){
        if($smenu["page"]=="" OR $smenu["page"]=="#")$page="interne.php";
        else $page=$smenu["page"];

        if($smenu["lien"]!="1"){

          if(($smenu["url"]=="" OR $smenu["url"]=="#") AND  ($smenu["page"]=="" OR $smenu["page"]=="#"))$url="./produits/".valideChaine($menu["titre"])."/".valideChaine($smenu["titre"])."/".$smenu[0]."/";
          else $url="$page?page=".$smenu["url"]."&idmenu=$menu[0]&idsmenu=$smenu[0]";
          $target="";
        }else{
          $url=$smenu["url"];
          if($smenu["fenetre"]=="1")$target="_blank"; else $target="";
        }  
        $structure.="<li><a  href=\"".$url."\" target=\"$target\" >".$smenu["titre"]."</a></li>";


      }
      $structure.="</ul></li>";
  //$structure.="</li>";
    }else $structure.="<li><a href=\"$url\" target=\"$target\">". ($menu["titre"])."</a></li>";
    $i++;
  }
  /*}*/
  echo $structure;
  ?>