<?php
ob_start();
?>

<section class="homepage">
    <div class="homepage__title">
        <h1>All My Contacts</h1>
        <a href="<?= SITE_URL ?>contact/add" class="add--project"><i class="fa-solid fa-plus"></i></a>
    </div>

    <div class="homepage__contact">
        <?php if ( count( $contacts ) > 0 ) : ?>
            <?php foreach( $contacts as $contact ) : ?>
                <div id="contact-<?= $contact->getId() ?>" class="contact__card <?= strtolower( $contact->getType() ) ?>">
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
                        <a href="<?= SITE_URL ?>contact/edit/<?= $contact->getId() ?>" class="contact--edit"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="<?= SITE_URL ?>contact/remove/<?= $contact->getId() ?>" class="contact--remove"><i class="fa-solid fa-trash"></i></a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = 'Contact Manager App';
require_once( 'views/page.php' );
?>
