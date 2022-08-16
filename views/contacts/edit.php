<?php
ob_start();
?>

<section class="add">
    <div class="add__title">
        <a href="<?= SITE_URL ?>" class="add--project"><i class="fa-solid fa-arrow-left-long"></i></a>
        <h1>Edit Contact</h1>
    </div>

    <form class="add__contact" method="POST" action="<?= SITE_URL ?>contact/edit-validation" enctype="multipart/form-data">
        <div class="form--grid">
            <div class="form--group">
                <label for="firstName">Firstname *</label>
                <input type="text" name="firstName" required value="<?= $contact->getFirstName() ?>">
            </div>
            <div class="form--group">
                <label for="lastName">Lastname *</label>
                <input type="text" name="lastName" required value="<?= $contact->getLastName() ?>">
            </div>
        </div>
        <div class="form--grid">
            <div class="form--group">
                <label for="location">Location *</label>
                <input type="text" name="location" required value="<?= $contact->getLocation() ?>">
            </div>
            <div class="form--group">
                <label for="phone">Phone *</label>
                <input type="text" name="phone" required value="<?= $contact->getPhone() ?>">
            </div>
        </div>
        <div class="form--grid">
            <div class="form--group">
                <label for="type">Type *</label>
                <?php $type = $contact->getType(); ?>
                <select name="type" required>
                    <option value="Business" <?php if ( $type === 'Business' ) { echo 'selected'; } ?>>Business</option>
                    <option value="Family" <?php if ( $type === 'Family' ) { echo 'selected'; } ?>>Family</option>
                    <option value="Friends" <?php if ( $type === 'Friends' ) { echo 'selected'; } ?>>Friends</option>
                </select>
            </div>
            <div class="form--group form__photo">
                <p>Current photo:</p>
                <img src="<?= SITE_URL ?>public/assets/images/contacts/<?= $contact->getPhoto() ?>" alt="Current avatar for <?= $contact->getName() ?>">
                <label for="photo">Change photo</label>
                <input type="file" name="photo">
            </div>
        </div>

        <input type="hidden" name="contactId" value="<?= $contact->getId() ?>">
        <input type="submit" class="btn" value="Add">
    </form>
</section>

<?php
$content = ob_get_clean();
$title = 'Contact Manager - Add New Contact';
require_once( 'views/page.php' );
?>
