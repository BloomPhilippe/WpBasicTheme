<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage DecobootsTheme
 * @since Decoboots Theme 1.0.0
 */
?>

<?php wp_footer(); ?>
<div class="row row-newsletter">
  <div class="container">
    <div class="col-lg-4 col-md-4 col-sm-6 box-menu">
      <h3>Menu</h3>
      <?php
      echo get_menu('main-menu', 'list');
      ?>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 box-menu">
      <h3>Coordonnées</h3>
      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
      </p>
      <p>
        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
      </p>

    </div>
    <div class="col-lg-4 col-md-4 col-sm-6 box-menu">
      <h3>Newsletter</h3>
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>
  </div>
</div>
<footer>
  <div class="container">
    <p>&copy; 2016 Company, Inc.</p>
  </div>
</footer>
</body>
</html>
