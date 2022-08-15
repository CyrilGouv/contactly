<?php
ob_start();
?>

<section class="homepage">
    <div class="homepage__title">
        <h1>All My Contacts</h1>
        <a href="" class="add--project"><i class="fa-solid fa-plus"></i></a>
    </div>

    <div class="homepage__contact">
        <div class="contact__card">
            <div class="contact__card__profile">
                <div class="card__profile__img">
                    <img src="public/assets/images/contacts/marco-triglio.jpg" alt="Photo profile de contact">
                </div>
                <div class="card__profile__title">
                    <h2>Marco Triglio</h2>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Bordeaux, FR</span>
                    </p>
                </div>
            </div>
            <div class="contact__profile__infos">
                <div class="profile__infos__phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>06 42 42 42 42</span>
                </div>
                <div class="profile__infos__type">
                    <span>Business</span>
                </div>
            </div>
            <div class="contact__profile__actions">
                <a href="" class="contact--edit"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="contact--remove"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>

        <div class="contact__card">
            <div class="contact__card__profile">
                <div class="card__profile__img">
                    <img src="public/assets/images/contacts/marco-triglio.jpg" alt="Photo profile de contact">
                </div>
                <div class="card__profile__title">
                    <h2>Marco Triglio</h2>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Bordeaux, FR</span>
                    </p>
                </div>
            </div>
            <div class="contact__profile__infos">
                <div class="profile__infos__phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>06 42 42 42 42</span>
                </div>
                <div class="profile__infos__type">
                    <span>Business</span>
                </div>
            </div>
            <div class="contact__profile__actions">
                <a href="" class="contact--edit"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="contact--remove"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>

        <div class="contact__card">
            <div class="contact__card__profile">
                <div class="card__profile__img">
                    <img src="public/assets/images/contacts/marco-triglio.jpg" alt="Photo profile de contact">
                </div>
                <div class="card__profile__title">
                    <h2>Marco Triglio</h2>
                    <p>
                        <i class="fa-solid fa-location-dot"></i>
                        <span>Bordeaux, FR</span>
                    </p>
                </div>
            </div>
            <div class="contact__profile__infos">
                <div class="profile__infos__phone">
                    <i class="fa-solid fa-phone"></i>
                    <span>06 42 42 42 42</span>
                </div>
                <div class="profile__infos__type">
                    <span>Business</span>
                </div>
            </div>
            <div class="contact__profile__actions">
                <a href="" class="contact--edit"><i class="fa-solid fa-pen-to-square"></i></a>
                <a href="" class="contact--remove"><i class="fa-solid fa-trash"></i></a>
            </div>
        </div>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = 'Contact Manager App';
require_once( 'template.php' );
?>
