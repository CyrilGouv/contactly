<?php
ob_start();
?>

<section class="add">
    <div class="add__title">
        <a href="<?= SITE_URL ?>" class="add--project"><i class="fa-solid fa-arrow-left-long"></i></a>
        <h1>Add New Contact</h1>
    </div>

    <form class="add__contact" method="POST" action="<?= SITE_URL ?>contact/add-validation" enctype="multipart/form-data">
        <div class="form--grid">
            <div class="form--group">
                <label for="firstName">Firstname *</label>
                <input type="text" name="firstName" required>
            </div>
            <div class="form--group">
                <label for="lastName">Lastname *</label>
                <input type="text" name="lastName" required>
            </div>
        </div>
        <div class="form--grid">
            <div class="form--group">
                <label for="location">Location *</label>
                <input type="text" name="location" required>
            </div>
            <div class="form--group">
                <label for="phone">Phone *</label>
                <input type="text" name="phone" required>
            </div>
        </div>
        <div class="form--grid">
            <div class="form--group">
                <label for="type">Type *</label>
                <select name="type" required>
                    <option value="Business">Business</option>
                    <option value="Family">Family</option>
                    <option value="Friends">Friends</option>
                </select>
            </div>
            <div class="form--group" required>
                <label for="photo">Photo *</label>
                <input type="file" name="photo">
            </div>
        </div>

        <input type="submit" class="btn" value="Add">
    </form>
</section>

<?php
$content = ob_get_clean();
$title = 'Contact Manager - Add New Contact';
require_once( 'views/page.php' );
?>
