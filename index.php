<?php
ob_start();

require_once( 'models/Contact.php' );
$contact1 = new Contact( 1, 'Marco', 'Triglio', 'Bordeaux, FR', '06 42 42 42 42', 'Business', 'marco-triglio.jpg' );
$contact2 = new Contact( 1, 'Anna', 'Liu', 'Paris, FR', '06 23 23 22 22', 'Friends', 'anna-liu.jpg' );
$contact3 = new Contact( 1, 'Johnny', 'Stein', 'Paris, FR', '06 42 24 42 42', 'Business', 'johnny-stein.jpg' );
$contact4 = new Contact( 1, 'Sarah', 'Pacco', 'Toulouse, FR', '06 12 13 14 15', 'Family', 'sarah-pacco.jpg' );

require_once( 'models/ContactManager.php' );
$contactManager = new ContactManager;
$contactManager->addContact( $contact1 );
$contactManager->addContact( $contact2 );
$contactManager->addContact( $contact3 );
$contactManager->addContact( $contact4 );
?>

<section class="homepage">
    <div class="homepage__title">
        <h1>All My Contacts</h1>
        <a href="" class="add--project"><i class="fa-solid fa-plus"></i></a>
    </div>

    <div class="homepage__contact">
        <?php $contacts = $contactManager->getContacts(); ?>
        <?php if ( count( $contacts ) > 0 ) : ?>
            <?php foreach( $contacts as $contact ) : ?>
                <div class="contact__card <?= strtolower( $contact->getType() ) ?>">
                    <div class="contact__card__profile">
                        <div class="card__profile__img">
                            <img src="public/assets/images/contacts/<?= $contact->getPhoto() ?>" alt="Photo profile de contact <?= $contact->getName() ?>">
                        </div>
                        <div class="card__profile__title">
                            <h2><?= $contact->getName() ?></h2>
                            <p>
                                <i class="fa-solid fa-location-dot"></i>
                                <span><?= $contact->getLocation() ?></span>
                            </p>
                        </div>
                    </div>
                    <div class="contact__profile__infos">
                        <div class="profile__infos__phone">
                            <i class="fa-solid fa-phone"></i>
                            <span><?= $contact->getPhone() ?></span>
                        </div>
                        <div class="profile__infos__type">
                            <span><?= $contact->getType() ?></span>
                        </div>
                    </div>
                    <div class="contact__profile__actions">
                        <a href="" class="contact--edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="" class="contact--remove"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = 'Contact Manager App';
require_once( 'template.php' );
?>
