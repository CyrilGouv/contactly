<?php
ob_start();

require_once( 'models/ContactManager.php' );
$contactManager = new ContactManager;
$contactManager->loadContacts();

?>

<section class="homepage">
    <div class="homepage__title">
        <h1>Erreur 404</h1>
    </div>

    <div class="homepage__contact">
        <?= $msg ?>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = '404 - Contact Manager App';
require_once( 'views/page.php' );
?>
