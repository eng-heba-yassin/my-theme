<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title(); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header>
  <div class="header-top"></div>
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">local</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">feature</a>
              </li>
              <li class="nav-item">
                    <a class="nav-link" href="#">world/middle east</a>
             </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">business</a>
                </li>
            <li class="nav-item"></li>
                <a class="nav-link" href="#">science</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="#">culture</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">lifestyle</a>
          </li>
          <li class="nav-item"></li>
              <a class="nav-link" href="#">opinion</a>
            </li>
            <li class="nav-item"></li>
              <a class="nav-link" href="#">services</a>
            </li>
            <li class="nav-item"></li>
              <a class="nav-link" href="#">gallery</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
              <button class="search-btn" type="submit"><svg width="20" height="20" viewBox="0 0 20 20" aria-hidden="true" class="DocSearch-Search-Icon"><path d="M14.386 14.386l4.0877 4.0877-4.0877-4.0877c-2.9418 2.9419-7.7115 2.9419-10.6533 0-2.9419-2.9418-2.9419-7.7115 0-10.6533 2.9418-2.9419 7.7115-2.9419 10.6533 0 2.9419 2.9418 2.9419 7.7115 0 10.6533z" stroke="currentColor" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
            </form>
          
      </nav>
  </header>