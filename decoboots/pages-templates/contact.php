<?php
/**
 * Template Name: contact
 *
 */

get_header();

?>

<?php while (have_posts()) :
    the_post();
    ?>
    <?php
    include(locate_template('content/content-breadcrumb.php'));
    ?>
    <div class="row row-content-page">
        <div class="container">
            <div class="col-xs-12 col-md-6">
                <form id="contact-page" method="post">
                    <div class="form-group">
                        <label for="subject">Sujet</label>
                        <select id="subject" name="subject" class="form-control">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="name">Nom</label>
                        <input type="text" class="form-control" id="name" placeholder="Nom" name="name">
                    </div>
                    <div class="form-group">
                        <label for="mail">Email</label>
                        <input type="text" class="form-control" id="mail" placeholder="Email" name="mail">
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Téléphone" name="phone">
                    </div>
                    <div class="form-group">
                        <label for="address">Adresse</label>
                        <input type="text" class="form-control" id="address" placeholder="Adresse" name="address">
                    </div>
                    <div class="form-group">
                        <label for="address2">Adresse 2</label>
                        <input type="text" class="form-control" id="address2" placeholder="Adresse" name="address2">
                    </div>
                    <div class="form-group">
                        <label for="country">Pays</label>
                        <input type="text" class="form-control" id="country" placeholder="country" name="country">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" name="message" class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
                <div class="result-form">
                    <p class="form-success">Message envoyé</p>
                    <p class="form-error">Erreur!</p>
                </div>
            </div>
            <?php
            get_template_part('content/content', 'informations');
            ?>
        </div>
    </div>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
