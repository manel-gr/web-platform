<?php
/* Le contrôleur reçoit les actions de l’Company, lit ou met
à jour les données à travers le modèle, puis appelle la vue
adéquate. */

$controller = "company";
// chargement du modèle
require_once ("{$ROOT}{$DS}model{$DS}ModelCompany.php"); 

if(isset($_REQUEST['action']))	
/* recupère l'action passée dans l'URL*/
	$action = $_REQUEST['action'];
/* NB: On a ajouté un comportement par défaut avec action=readAll.*/
	else $action="readAll";
    require_once ("{$ROOT}{$DS}model{$DS}ModelCandidat.php");	
	
switch ($action) {
    case "readAll":
        $pagetitle = "Liste des companies";
        $view = "readAll";
       	$tab_u = ModelCompany::getAll();//appel au modèle pour gerer la BD
        require ("{$ROOT}{$DS}view{$DS}view.php");//"redirige" vers la vue
        break;

	case "read":	
		if(isset($_REQUEST['id'])){
			$id = $_REQUEST['id'];
			$u = ModelCompany::select($id);
				if($u!=null){
					$pagetitle = "Details du company";
					$view = "read";
					require ("{$ROOT}{$DS}view{$DS}view.php");
				}
			}	
		break;


       /* case "delete":
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $del = ModelCompany::select($id);
                if($del!=null){
                $del->delete($id);
                /*redirection vers le contrôleur et l’action par défaut
                header('Location: index.php?controller=company&action=readAll&delete_msg=you have deleted this data');
                }
            }
            break;*/
            case "delete":
                if(isset($_REQUEST['id'])){
                    $id = $_REQUEST['id'];
                    $del = ModelCompany::select($id);
                    if($del != null){
                        // Affichage de la boîte de dialogue de confirmation en JavaScript
                        echo "<script>
                                var confirmDelete = confirm('Are you sure you want to delete this company?');
                                if(confirmDelete){
                                    window.location.href = 'index.php?controller=company&action=deleteConfirmed&id=$id';
                                } else {
                                    // Redirection vers la page de lecture de toutes les entreprises si l'utilisateur annule la suppression
                                    window.location.href = 'index.php?controller=company&action=readAll';
                                }
                            </script>";
                    }
                }
                break;
            
            case "deleteConfirmed":
                // Suppression de l'entreprise une fois que la suppression est confirmée
                if(isset($_REQUEST['id'])){
                    $id = $_REQUEST['id'];
                    $del = ModelCompany::select($id);
                    if($del != null){
                        $del->delete($id);
                        // Redirection vers la page de lecture de toutes les entreprises avec un message de confirmation
                        header('Location: index.php?controller=company&action=readAll&delete_msg=You have deleted this company');
                    }
                }
                break;
            
        
        case "create":
            $pagetitle = "Enregistrer ue company";
            $view = "create";
            require ("{$ROOT}{$DS}view{$DS}view.php");
            break;
            case "created":
                if (isset($_REQUEST['id']) && isset($_REQUEST['n']) && isset($_REQUEST['email']) 
                    && isset($_REQUEST['password']) && isset($_REQUEST['num']) && isset($_REQUEST['autre_num'])
                    && isset($_REQUEST['industry']) && isset($_REQUEST['location']) 
                    && isset($_REQUEST['country']) && isset($_REQUEST['ID_user'])) {

                $id = $_REQUEST["id"];
                $n = $_REQUEST["n"];
                $email = $_REQUEST["email"];
                $password = $_REQUEST["password"]; // Action du formulaire de la création
                    
                $num = $_REQUEST["num"];
                $autre_num = $_REQUEST["autre_num"];
                $industry = $_REQUEST["industry"]; 
                $location = $_REQUEST["location"];
                $country = $_REQUEST["country"];
                $ID_user = $_REQUEST["ID_user"];


                //il faut vérifier que l'Company n'existe pas dans la bdd 
                $recherche = ModelCompany::select($id);
                if($recherche==null){ //Si l'Company n'existe pas donc on l'ajoute
                                        //il faut créer une object ModelCompany pour accéder à insert car elle n'est pas static
                    $u = new ModelCompany($id, $n,$email,$password,$num,$autre_num,$industry,$location,$country,$ID_user);	
                    $tab = array(
                    "id" => $id,
                    "name" => $n,
                    "email" => $email,
                    "password" => $password,
                    "num" => $num,
                    "autre_num" => $autre_num,
                    "industry" => $industry,
                    "location" => $location,
                    "country" => $country,
                    "ID_user" => $ID_user);				
                    $u->insert($tab);
                    $pagetitle = "company Enregistré";
                    $view = "created";
                    require ("{$ROOT}{$DS}view{$DS}view.php");
                }	
            }
            break;
        
        case "update":
            if(isset($_REQUEST['id'])){
                $id = $_REQUEST['id'];
                $up = ModelCompany::select($id);
                //il faut vérifier que l'Company existe dans la bdd 
                if($up!=null){
                    $pagetitle = "Modifier company";
                    $view = "update";
                    require ("{$ROOT}{$DS}view{$DS}view.php");			
                }
                
            }
            break;






            case "updated": // Action du formulaire de modification
                if(isset($_REQUEST['id']) && isset($_REQUEST['n']) && isset($_REQUEST['email']) ){
                    $oldid = $_REQUEST['id'];
                    $tab = array(
                        "id" => $_REQUEST["id"],
                        "name" => $_REQUEST["n"],
                        "email" => $_REQUEST['email']
                       
                       

                        );
                    $o = ModelCompany::select($oldid);
                    //il faut vérifier que l'candidaModelCompany existe dans la bdd 
                    if($o!=null){
                        $u = ModelCompany::update($tab, $oldid);		
                        $pagetitle = "companyModel company modifié";
                        $view = "updated";
                        require ("{$ROOT}{$DS}view{$DS}view.php");
                    }
                }	
                break;
                
            
        }
        ?>