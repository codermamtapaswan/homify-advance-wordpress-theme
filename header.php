<?php

/**
 * Header template file
 * 
 * @package Homify
 */

if (!defined('ABSPATH')) {
  exit; // Exit if accessed directly.
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>

  <style>
    @font-face {
      font-display: swap;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 400;
      src: url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/poppins/poppins-v20-latin-regular.woff2' ?>") format('woff2'),
        url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/poppins/poppins-v20-latin-regular.ttf' ?>") format('truetype');
    }

    @font-face {
      font-display: swap;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 500;
      src: url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/poppins/poppins-v20-latin-500.woff2' ?>") format('woff2'),
        url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/poppins/poppins-v20-latin-500.ttf' ?>") format('truetype');
    }

    @font-face {
      font-display: swap;
      font-family: 'Poppins';
      font-style: normal;
      font-weight: 600;
      src: url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/poppins/poppins-v20-latin-600.woff2' ?>") format('woff2'),
        url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/poppins/poppins-v20-latin-600.ttf' ?>") format('truetype');
    }

    @font-face {
      font-display: swap;
      font-family: 'EB Garamond';
      font-style: normal;
      font-weight: 700;
      src: url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/eb-garamond/eb-garamond-v27-latin-700.woff2' ?>") format('woff2'),
        url("<?php echo HOMIFY_DIR_URI . '/assets/fonts/eb-garamond/eb-garamond-v27-latin-700.ttf' ?>") format('truetype');
    }
  </style>
</head>

<body class="gd-home-page">

  <!-- Header  ================================= START -->
  <header>

    <div class="top-bar">
      <div class="container">
        <div class="flex-between top-gap">
          <a href="mailto:info@guideet.net">
            <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
              <rect width="22" height="22" rx="11" fill="#fff" />
              <path d="M10.642 12.77c-.902 0-1.805-.79-2.257-1.128C6.128 10.062 5.451 9.498 5 9.16v4.74c0 .622.505 1.128 1.128 1.128h9.028a1.13 1.13 0 0 0 1.129-1.129V9.16c-.452.34-1.129.903-3.386 2.483-.451.339-1.354 1.129-2.257 1.129M15.156 6H6.128C5.505 6 5 6.505 5 7.128v.565c.903.677.79.677 4.063 3.047.338.225 1.015.902 1.58.902.564 0 1.24-.677 1.58-.79 3.272-2.37 3.159-2.37 4.062-3.046v-.678c0-.623-.506-1.128-1.129-1.128" fill="#3D564A" />
            </svg>
          </a>

          <svg width="3" height="14" viewBox="0 0 3 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.137 13.484H.863V.87h1.274z" fill="#fff" fill-opacity=".5" />
          </svg>

          <ul class="menu">
            <li><a href="page.html">About</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>

        </div>

        <div class="flex-between top-gap">
          <span class="gd-timeline">
            <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
              <rect width="22" height="22" rx="11" fill="#fff" />
              <g clip-path="url(#a)">
                <path d="M6.625 6.625c0-.965.785-1.75 1.75-1.75h7.875c.965 0 1.75.785 1.75 1.75v8.75c0 .965-.785 1.75-1.75 1.75H6.188A2.187 2.187 0 0 1 4 14.938V7.5a.874.874 0 1 1 1.75 0v7.438a.439.439 0 0 0 .875 0zm1.75.656V9.47c0 .363.293.656.656.656h3.063a.655.655 0 0 0 .656-.656V7.28a.655.655 0 0 0-.656-.656H9.03a.655.655 0 0 0-.656.656m5.688-.218c0 .24.196.437.437.437h1.313c.24 0 .437-.197.437-.437a.44.44 0 0 0-.437-.438H14.5a.44.44 0 0 0-.437.438m0 2.625c0 .24.196.437.437.437h1.313c.24 0 .437-.197.437-.437a.44.44 0 0 0-.437-.438H14.5a.44.44 0 0 0-.437.438m-5.688 2.624a.44.44 0 0 0 .438.438h7c.24 0 .437-.197.437-.437a.44.44 0 0 0-.437-.438h-7a.44.44 0 0 0-.438.438m0 2.626c0 .24.197.437.438.437h7c.24 0 .437-.197.437-.437a.44.44 0 0 0-.437-.438h-7a.44.44 0 0 0-.438.438" fill="#3D564A" />
              </g>
              <defs>
                <clipPath id="a">
                  <path fill="#fff" d="M4 4h14v14H4z" />
                </clipPath>
              </defs>
            </svg>
            <a href="#">
              Sign up to our newsletter
            </a>
          </span>


          <svg width="3" height="14" viewBox="0 0 3 14" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M2.137 13.484H.863V.87h1.274z" fill="#fff" fill-opacity=".5" />
          </svg>

          <div class="gd-social-links">
            <ul>
              <li>
                <a href="#" aria-label="facebook">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 27 28">
                    <path d="m16.48 15.002.384-2.508h-2.406v-1.627c0-.686.336-1.355 1.414-1.355h1.094V7.377s-.993-.17-1.942-.17c-1.981 0-3.277 1.202-3.277 3.376v1.911H9.544v2.508h2.203v6.062h2.711v-6.062h2.022Z">
                    </path>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" aria-label="instagram">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 27 27">
                    <g clip-path="url(#clip0_1126_8312)">
                      <path d="M13.3748 10.0236C11.6536 10.0236 10.2652 11.412 10.2652 13.1332C10.2652 14.8545 11.6536 16.2429 13.3748 16.2429C15.0961 16.2429 16.4845 14.8545 16.4845 13.1332C16.4845 11.412 15.0961 10.0236 13.3748 10.0236ZM13.3748 15.1549C12.2625 15.1549 11.3531 14.2483 11.3531 13.1332C11.3531 12.0182 12.2598 11.1115 13.3748 11.1115C14.4899 11.1115 15.3965 12.0182 15.3965 13.1332C15.3965 14.2483 14.4872 15.1549 13.3748 15.1549ZM17.337 9.89637C17.337 10.2996 17.0123 10.6217 16.6117 10.6217C16.2085 10.6217 15.8864 10.2969 15.8864 9.89637C15.8864 9.49582 16.2112 9.17105 16.6117 9.17105C17.0123 9.17105 17.337 9.49582 17.337 9.89637ZM19.3966 10.6325C19.3506 9.66091 19.1287 8.80027 18.4169 8.09119C17.7078 7.38211 16.8472 7.16019 15.8756 7.11147C14.8742 7.05464 11.8728 7.05464 10.8714 7.11147C9.90251 7.15748 9.04187 7.37941 8.33009 8.08849C7.6183 8.79757 7.39908 9.65821 7.35037 10.6298C7.29353 11.6312 7.29353 14.6326 7.35037 15.634C7.39637 16.6056 7.6183 17.4662 8.33009 18.1753C9.04187 18.8844 9.89981 19.1063 10.8714 19.155C11.8728 19.2118 14.8742 19.2118 15.8756 19.155C16.8472 19.109 17.7078 18.8871 18.4169 18.1753C19.126 17.4662 19.3479 16.6056 19.3966 15.634C19.4534 14.6326 19.4534 11.6339 19.3966 10.6325ZM18.1029 16.7084C17.8918 17.2389 17.4832 17.6475 16.95 17.8613C16.1516 18.178 14.2571 18.1049 13.3748 18.1049C12.4925 18.1049 10.5954 18.1753 9.79967 17.8613C9.26921 17.6502 8.86054 17.2416 8.64674 16.7084C8.33009 15.91 8.40316 14.0155 8.40316 13.1332C8.40316 12.2509 8.33279 10.3538 8.64674 9.55807C8.85784 9.02761 9.2665 8.61894 9.79967 8.40514C10.5981 8.08849 12.4925 8.16156 13.3748 8.16156C14.2571 8.16156 16.1543 8.09119 16.95 8.40514C17.4805 8.61624 17.8891 9.02491 18.1029 9.55807C18.4196 10.3565 18.3465 12.2509 18.3465 13.1332C18.3465 14.0155 18.4196 15.9127 18.1029 16.7084Z">
                      </path>
                    </g>
                    <defs>
                      <clipPath id="clip0_1126_8312">
                        <rect width="27" height="27" fill="white"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" aria-label="twitter">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 27 27">
                    <g clip-path="url(#clip0_1142_8345)">
                      <path d="M17.0949 7.50488H19.0061L14.8318 12.2747L19.7424 18.7661H15.8984L12.8855 14.8301L9.44211 18.7661H7.52824L11.9921 13.6634L7.28461 7.50488H11.226L13.9466 11.1025L17.0949 7.50488ZM16.4235 17.6238H17.482L10.6494 8.5877H9.51249L16.4235 17.6238Z">
                      </path>
                    </g>
                    <defs>
                      <clipPath id="clip0_1142_8345">
                        <rect width="27" height="27" fill="white"></rect>
                      </clipPath>
                    </defs>
                  </svg>
                </a>
              </li>
              <li>
                <a href="#" aria-label="linkdin">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 27 28">
                    <path d="M10.256 19.332H7.743v-8.095h2.513v8.095Zm-1.258-9.199a1.468 1.468 0 0 1-1.03-2.499 1.456 1.456 0 0 1 2.486 1.03c0 .803-.652 1.47-1.456 1.47Zm10.666 9.2h-2.508v-3.941c0-.94-.019-2.144-1.307-2.144-1.307 0-1.507 1.02-1.507 2.076v4.008H11.83v-8.095h2.41v1.105h.036c.336-.636 1.155-1.308 2.378-1.308 2.544 0 3.012 1.676 3.012 3.852v4.446h-.003Z">
                    </path>
                  </svg>
                </a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="navigation">
      <div class="container">

        <div class="gd-menu-toggle-btn">
          <svg fill="#000" width="20" height="20" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM64 256c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H96c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z">
            </path>
          </svg>
        </div>

        <a href="index.html" class="gd-logo">
          <img src="assets/images/logo.svg" alt="Guideet logo" class="img-fluid">
        </a>

        <nav class="gd-menu">
          <ul>
            <li class="dropdown">
              <a href="#" class="active">Keyhole Gardening</a>

              <ul>
                <li>
                  <a href="#">Top 10</a>
                </li>
                <li class="dropdown">
                  <a href="single.html" class="active"> Submenu</a>
                  <ul>
                    <li>
                      <a href="#">Top 10</a>
                    </li>
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">PHP &amp; MySQL</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">HTML &amp; CSS</a>
                </li>
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">PHP &amp; MySQL</a>
                </li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#">kitchens</a>
              <ul>
                <li>
                  <a href="#">Top 10</a>
                </li>
                <li class="dropdown">
                  <a href="single.html" class="active"> Submenu</a>
                  <ul>
                    <li>
                      <a href="#">Top 10</a>
                    </li>
                    <li>
                      <a href="#">JavaScript</a>
                    </li>
                    <li>
                      <a href="#">PHP &amp; MySQL</a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">HTML &amp; CSS</a>
                </li>
                <li>
                  <a href="#">JavaScript</a>
                </li>
                <li>
                  <a href="#">PHP &amp; MySQL</a>
                </li>
              </ul>
            </li>
            <li><a href="#">Celebrity style</a></li>
            <li><a href="#">Gardens</a></li>

            <svg class="cancel-btn" fill="#000" xmlns="http://www.w3.org/2000/svg" height="20" width="20" viewBox="0 0 384 512">
              <path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z">
              </path>
            </svg>
          </ul>

        </nav>

        <form class="gd-menu-search-form" action="#" method="get">
          <input type="search" placeholder="What can we help you find today?" required="">
          <button type="submit" class="search-btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="17" viewBox="0 0 14 17">
              <path d="M13.8086 12.1039L11.0824 9.37799C10.9594 9.25496 10.7926 9.1866 10.6176 9.1866H10.1719C10.9266 8.22146 11.375 7.00752 11.375 5.68694C11.375 2.54545 8.8293 0 5.6875 0C2.5457 0 0 2.54545 0 5.68694C0 8.82843 2.5457 11.3739 5.6875 11.3739C7.0082 11.3739 8.22227 10.9255 9.1875 10.1709V10.6165C9.1875 10.7915 9.25586 10.9583 9.37891 11.0813L12.1051 13.8072C12.3621 14.0643 12.7777 14.0643 13.032 13.8072L13.8059 13.0335C14.0629 12.7765 14.0629 12.3609 13.8086 12.1039ZM5.6875 9.1866C3.7543 9.1866 2.1875 7.62269 2.1875 5.68694C2.1875 3.75393 3.75156 2.18729 5.6875 2.18729C7.6207 2.18729 9.1875 3.7512 9.1875 5.68694C9.1875 7.61996 7.62344 9.1866 5.6875 9.1866Z">
              </path>
            </svg>
          </button>
        </form>

        <div class="mob-search-btn">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <path d="M7.333 12.667A5.333 5.333 0 1 0 7.333 2a5.333 5.333 0 0 0 0 10.667ZM14 14l-2.9-2.9" stroke-width="2" stroke="#000" stroke-linecap="round" stroke-linejoin="round"></path>
          </svg>
        </div>

      </div>
    </div>

  </header> <!-- Header  ================================== END -->

  <!-- Main layout Sections ===================== START -->
  <main class="all-page">