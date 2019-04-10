<?php
/**
 * Created by PhpStorm.
 * User: stb26
 * Date: 07/04/2019
 * Time: 15:50
 */

/*                      'tableauBordAdmin'                 => ['controller' =>'PageAdmin',    'method' =>'accueilAdmin'],
                        'tableauCommentaireAdmin'          => ['controller' =>'PageAdmin',    'method' =>'adminValidationCommentaires'],
                        'tableauContenuAdmin'              => ['controller' =>'PageAdmin',    'method' =>'adminContenuChapitres']*/

class PageAdmin // sert à montrer la page d'admin
{

    public function accueilAdmin()
    {
        $managerAdminCommentaires = new adminCommentairesManager();
        //$idCommentaire = $_GET['idCommentaire'];
        $commentairesAdmin = $managerAdminCommentaires->getListeCommentaires();

        // var_dump($commentairesAdmin);

        $myView = new View('tableauBordAdmin');
        $myView->renderAdmin(array('commentairesAdmin' => $commentairesAdmin)); // c'est une variable qui appelle une autre variable
    }
    public function adminValidationCommentaires()
    {
        $managerAdminCommentaires = new adminCommentairesManager();
        //$idCommentaire = $_GET['idCommentaire'];
        $commentairesAdmin = $managerAdminCommentaires->getListeCommentaires();

       // var_dump($commentairesAdmin);

        $myView = new View('adminCommentaires');
        $myView->renderAdmin(array('commentairesAdmin' => $commentairesAdmin)); // c'est une variable qui appelle une autre variable
    }


}