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
    <div class="row row-breadcrumb">
        <div class="container">
            <div class="col-xs-12 col-md-6">
                <h1><?php echo get_the_title() ?></h1>
            </div>
            <div class="col-xs-12 col-md-6 breadcrumb">
                <p>
                    <a href="<?php echo get_site_url() ?>">Accueil</a>
                    <span class="separator">/</span>
                    <span class="current-page"><?php echo get_the_title() ?></span>
                </p>
            </div>
        </div>
    </div>
    <div class="row row-content-page">
        <div class="container">
            <h3>Formulaire</h3>
            <form id="contact-page" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Sujet</label>
                    <select class="form-control">
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
                    <input type="text" class="form-control" id="address2" placeholder="Adresse" name="address">
                </div>
                <div class="form-group">
                    <label for="country">Pays</label>
                    <input type="text" class="form-control" id="country" placeholder="country" name="country">
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" class="form-control" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                    <input type="file" id="exampleInputFile">
                    <p class="help-block">Example block-level help text here.</p>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
