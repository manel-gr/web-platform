<?php
/* Le contrôleur reçoit les actions de l’candidat, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "candidat";
// chargement du modèle
 require_once ("{$ROOT}{$DS}model{$DS}ModelCandidat.php"); 

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des candidats";
        $view = "readAll";
       	$tab_u = ModelCandidat::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelCandidat::select($id);
				if($u!=null){
					$pagetitle = "Details de l'candidat";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;


        case "delete":
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $del = ModelCandidat::select($id);
                if($del != null){
                    // Affichage de la boîte de dialogue de confirmation en JavaScript
                    echo "<script>
                            var confirmDelete = confirm('Are you sure you want to delete this candidate?');
                            if(confirmDelete){
                                window.location.href = 'index.php?controller=candidat&action=deleteConfirmed&id=$id';
                            } else {
                                // Redirection vers la page de lecture de tous les candidats si l'utilisateur annule la suppression
                                window.location.href = 'index.php?controller=candidat&action=readAll&cancel_msg=Deletion canceled';
                            }
                        </script>";
                }
            }
            break;
        
        case "deleteConfirmed":
            // Suppression du candidat une fois que la suppression est confirmée
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $del = ModelCandidat::select($id);
                if($del != null){
                    $del->delete($id);
                    // Redirection vers la page de lecture de tous les candidats avec un message de confirmation
                    header('Location: index.php?controller=candidat&action=readAll&delete_msg=You have deleted this candidate');
                }
            }
            break;
        
        case "create":
            $pagetitle = "Enregistrer un candidat";
            $view = "create";
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
            
        case "created": // Action du formulaire de la création
            if(isset($_REQUEST['id']) && isset($_REQUEST['n']) && isset($_REQUEST['p']) && isset($_REQUEST['email'])
            && isset($_REQUEST['password']) && isset($_REQUEST['num']) && isset($_REQUEST['date_de_naissance'])
         && isset($_REQUEST['location_candidat']) && isset($_REQUEST['ID_user'])) {
                $id = $_REQUEST["id"];
                $n = $_REQUEST["n"];
                $p = $_REQUEST["p"];
                $email = $_REQUEST["email"];
                $password = $_REQUEST["password"];
                $num = $_REQUEST["num"];
                $date_de_naissance = $_REQUEST["date_de_naissance"];
                $location_candidat = $_REQUEST["location_candidat"];
                $ID_user = $_REQUEST["ID_user"];


                //il faut vérifier que l'candidat n'existe pas dans la bdd 
                $recherche = ModelCandidat::select($id);
                if($recherche==null){ //Si l'candidat n'existe pas donc on l'ajoute
                                        //il faut créer une object Modelcandidat pour accéder à insert car elle n'est pas static
                    $u = new ModelCandidat($id, $n, $p,$email,$password,$num,$date_de_naissance,$location_candidat,$ID_user);	
                    $tab = array(
                    "id" => $id,
                    "name" => $n,
                    "family_name" => $p,
                    "email" => $email,
                    "password" => $password,
                    "num" => $num,
                    "date_de_naissance" => $date_de_naissance,
                    "location_candidat" => $location_candidat,
                    "ID_user" => $ID_user);				
                    $u->insert($tab);
                    $pagetitle = "candidat Enregistré";
                    $view = "created";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }	
            }
            break;
        
        case "update":
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $up = ModelCandidat::select($id);
                //il faut vérifier que l'candidat existe dans la bdd 
                if($up!=null){
                    $pagetitle = "Modifier l'candidat";
                    $view = "update";
                    require ("{$ROOT}{$DS}view{$DS}view.php");			
                }
                
            }
            break;






            case "updated": // Action du formulaire de modification
                if(isset($_REQUEST['id']) && isset($_REQUEST['n']) && isset($_REQUEST['p']) ){
                    $oldid = $_REQUEST['id'];
                    $tab = array(
                        "id" => $_REQUEST["id"],
                        "name" => $_REQUEST["n"],
                        "family_name" => $_REQUEST["p"],
                       

                        );
                    $o = ModelCandidat::select($oldid);
                    //il faut vérifier que l'candidaModelCandidat existe dans la bdd 
                    if($o!=null){
                        $u = ModelCandidat::update($tab, $oldid);		
                        $pagetitle = "candidaModelCandidat modifié";
                        $view = "updated";
                        require ("{$ROOT}{$DS}view{$DS}view.php");
                    }
                }	
                break;
                
            
        }
        ?>
        