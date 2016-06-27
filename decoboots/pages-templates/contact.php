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
            <div class="shodow-top"></div>
            <div class="col-xs-6 col-md-6">
                <h1><?php echo get_the_title() ?></h1>
            </div>
            <div class="col-xs-6 col-md-6 breadcrumb">
                <p>
                    <a href="<?php echo get_site_url() ?>">Accueil</a>
                    <span class="separator"> > </span>
                    <span class="current-page"><?php echo get_the_title() ?></span>
                </p>
            </div>
        </div>
    </div>
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
                        <label for="file">File input</label>
                        <input type="file" id="file">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
            <div class="col-xs-12 col-md-6 informations">
                <h3>Informations</h3>
                <div class="col-md-12">
                    <p><?php the_field('address', 'option'); ?> <?php the_field('address_2', 'option'); ?></p>
                    <p><?php the_field('postal_code', 'option'); ?> <?php the_field('city', 'option'); ?></p>
                    <p><?php the_field('country', 'option'); ?></p>
                    <p>Phone : <?php the_field('phone', 'option'); ?></p>
                    <p>Mail : <?php the_field('mail', 'option'); ?></p>
                </div>
            </div>
        </div>
    </div>
    <?php
endwhile; ?>
</main>
<?php get_footer(); ?>
