<?php
session_start();
require_once( 'utils/constants.php' );
require_once( 'controllers/ContactController.php' );
$contactController = new ContactController();

try {
    if ( empty( $_GET['page'] ) ) {
        $contactController->displayContacts();
    } else {
    
        $url = explode( '/', filter_var($_GET['page']), FILTER_SANITIZE_URL );
    
        switch( $url[0] ) {
            case 'accueil' :
                $contactController->displayContacts();
                break;

            case 'contact' :
                if ( $url[1] === 'add' ) {
                    $contactController->addNewContact();
                    break;
                } else if ( $url[1] === 'add-validation' ) {
                    $contactController->addValidation();
                    break;
                } else if ( $url[1] === 'edit' ) {
                    echo 'edit';
                    break;
                } else if ( $url[1] === 'remove' ) {
                    echo 'remove';
                    break;
                } else {
                    throw new Exception("La page n'existe pas");
                }
    
            default :
                throw new Exception("La page n'existe pas");
                break;
                
        }
    } 
} catch ( Exception $e ) {
    $msg = $e->getMessage();
    require( 'views/404.php' );
}