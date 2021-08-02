<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
  <div id="page" class="site">
    <div class="envx-navbar">
      <div class="container-fluid envx-navbar-container">
        <div class="envx-navbar-logo">
          <?php the_custom_logo(); ?>
        </div>
        <div class="envx-navbar-menu">
          <?php
            wp_nav_menu(
              array(
                'theme_location' => 'menu-1',
                'menu_id'        => 'primary-menu',
              )
            );
          ?>
        </div>
        <div class="envx-navbar-info">
          <div class="navbar-currency">
            <select name="" id="" class="currency-select">
              <option value="USD" class="currency-option">USD</option>
              <option value="PHP" class="currency-option">PHP</option>
            </select>
          </div>
          <div class="navbar-searchbar">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>

