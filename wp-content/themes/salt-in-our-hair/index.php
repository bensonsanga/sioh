<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Salt_in_Our_hair
 */

get_header();
?>

	<main id="primary" class="site-main">

	<header class="page-head">
         <div class="page-cover__container">
            <div class="page-cover">
               <div class="page-cover__image">
                  <picture class="page-cover__image-container">
                     <img src="https://newcastlebeach.org/images/nice-landscape-6.jpg" class="page-cover__image--lowress" alt="Home">
                     <img onload="this.classList.add(&#39;image-loaded&#39;)" class="page-cover__image--highress image-loaded" srcset="https://newcastlebeach.org/images/nice-landscape-6.jpg 768w, /build/images/home/saltinourhair-header-medium.jpg 1024w, /build/images/home/saltinourhair-header-large.jpg 1350w, /build/images/home/saltinourhair-header-xlarge.jpg 1800w, /build/images/home/saltinourhair-header-default.jpg" alt="Home" sizes="auto">
                  </picture>
               </div>
            </div>
            <div class="home-cover__content">
               <div class="home-cover__content-container">
                  <figure class="logo logo--large"></figure>
                  <figure class="logo logo--large logo--shadow"></figure>
                  <p><em>Award-winning travel website featuring Travel Guides &amp; Tips, Digital Nomad Lifestyle guides, and Sustainable Travel Tips.</em></p>
               </div>
               <div class="home-cover__indicator">
                  <svg class="icon icon-arrow">
                     <use xlink:href="#icon-arrow"></use>
                  </svg>
               </div>
               <svg width="100%" height="457" viewBox="0 0 3000 457" preserveAspectRatio="xMinYMax meet" class="home-cover__content-shape">
                  <path fill="#FFF" d="M0 382c167 108 388 86 571 7 132-57 250-163 394-164 124-2 239 76 363 70 155-8 276-144 428-170 218-38 430 156 646 107 110-24 195-107 293-160 92-50 201-75 305-72v457H0z"></path>
               </svg>
            </div>
         </div>
         <div class="page-head__container">
            <div class="logo__container">
               <a href="https://www.saltinourhair.com/" title="Salt in our Hair Travel Blog" class="logo"></a>
            </div>
         </div>
      </header>
      <main class="page-content" id="maincontent">
         <section class="weekly-posts">
            <article class="weekly-posts__travel">
               <a class="article-block weekly-posts__article-block" href="https://www.saltinourhair.com/portugal/porto-city-trip/" title="Top Things To Do in Porto, Portugal – A 2-Day City Trip">
                  <div class="article-block__content">
                     <div class="article-block__content-link">
                        <span class="salt-icon salt-icon--compass-white"></span>
                        <div class="weekly-posts__travel-subtitle">This week:</div>
                        <h2 class="article-block__title"><span>Porto</span></h2>
                     </div>
                  </div>
                  <div class="article-block__image">
                     <div class="article-block__image-link">
                        <picture class="article-block__image-container">
                           <img src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/porto-portugal-city-trip-guide-30x30.jpg" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/12/porto-portugal-city-trip-guide-600x600.jpg 600w, https://www.saltinourhair.com/wp-content/uploads/2020/12/porto-portugal-city-trip-guide-1080x1080.jpg 1080w" class="lazypreload lazyautosizes lazyloaded" alt="Porto" data-sizes="auto" sizes="710px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/12/porto-portugal-city-trip-guide-600x600.jpg 600w, https://www.saltinourhair.com/wp-content/uploads/2020/12/porto-portugal-city-trip-guide-1080x1080.jpg 1080w">
                        </picture>
                     </div>
                  </div>
               </a>
            </article>
            <div class="weekly-posts__side">
               <article class="weekly-posts__tip">
                  <a class="article-block weekly-posts__tip-block" href="https://www.saltinourhair.com/tips/travel-insurance/" title="Finding a Travel Insurance - Everything to Know (COVID-19 coverage)">
                     <div class="article-block__content">
                        <div class="article-block__content-link">
                           <h2 class="article-block__title">Complete guide:<br>
                              Travel Insurances that cover COVID-19
                           </h2>
                        </div>
                     </div>
                     <span class="salt-icon salt-icon--tip-white"></span>
                     <div class="article-block__image">
                        <div class="article-block__image-link">
                           <picture class="article-block__image-container">
                              <img src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/SA70650-30x27.jpg" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/07/SA70650-679x600.jpg 679w, https://www.saltinourhair.com/wp-content/uploads/2020/07/SA70650-917x810.jpg 917w" class="lazypreload lazyautosizes lazyloaded" alt="Complete guide:
                                 Travel Insurances that cover COVID-19
                                 " data-sizes="auto" sizes="355px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/07/SA70650-679x600.jpg 679w, https://www.saltinourhair.com/wp-content/uploads/2020/07/SA70650-917x810.jpg 917w">
                           </picture>
                        </div>
                     </div>
                  </a>
               </article>
               <div class="weekly-posts__links">
                  <ul>
                     <li>
                        <a href="https://www.saltinourhair.com/tips/reduce-plastic-travel/">13 Tips to reduce plastics easily</a>
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"></use>
                        </svg>
                     </li>
                     <li>
                        <a href="https://www.saltinourhair.com/tips/start-travel-blog/">How to start a travel blog</a>
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"></use>
                        </svg>
                     </li>
                     <li>
                        <a href="https://www.saltinourhair.com/presets/flow-collection/">Our Photography Presets </a>
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"></use>
                        </svg>
                     </li>
                  </ul>
               </div>
            </div>
         </section>
         <section class="monthly-destination">
            <a href="https://www.saltinourhair.com/poland/" title="See all articles about Poland">
               <div class="monthly-destination__container">
                  <span class="monthly-destination__subtitle">Discover</span>
                  <div class="monthly-destination__title" style="--title-length:6">Poland</div>
                  <p class="monthly-destination__excerpt">Vast landscapes with castles towering over picturesque cities where incredible food is the cultural roots.</p>
                  <div class="monthly-destination__btn-circle">
                     <svg class="icon icon-arrow">
                        <use xlink:href="#icon-arrow"></use>
                     </svg>
                     <svg class="icon icon-round-shape">
                        <use xlink:href="#icon-round-shape"></use>
                     </svg>
                  </div>
                  <div class="monthly-destination__cover">
                     <div class="monthly-destination__cover-image">
                        <picture class="monthly-destination__image">
                           <img data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/12/poland-travel-guides-saltinourhair-600x600.jpg 800w, https://www.saltinourhair.com/wp-content/uploads/2020/12/poland-travel-guides-saltinourhair-810x810.jpg 1280w, https://www.saltinourhair.com/wp-content/uploads/2020/12/poland-travel-guides-saltinourhair-1080x1080.jpg" class="lazyautosizes lazyloaded" alt="Poland" data-sizes="auto" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/poland-travel-guides-saltinourhair-30x30.jpg" sizes="748px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/12/poland-travel-guides-saltinourhair-600x600.jpg 800w, https://www.saltinourhair.com/wp-content/uploads/2020/12/poland-travel-guides-saltinourhair-810x810.jpg 1280w, https://www.saltinourhair.com/wp-content/uploads/2020/12/poland-travel-guides-saltinourhair-1080x1080.jpg">
                        </picture>
                     </div>
                  </div>
               </div>
            </a>
         </section>
         <section class="block-continents">
            <div class="block-continents__title">
               Explore by continent
            </div>
            <div class="scroller">
               <div class="scroller__btn scroller__btn--prev">
                  <button aria-label="Previous continent">
                     <span>
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"></use>
                        </svg>
                        <svg class="icon icon-arrow-small">
                           <use xlink:href="#icon-arrow-small"></use>
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="scroller__container">
                  <div class="scroller__inner">
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="https://www.saltinourhair.com/asia/" title="Asia Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Asia</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-433x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-779x1080.jpg" class="lazyautosizes lazyloaded" alt="Asia Travel Guides" data-sizes="auto" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/SA72098-2-22x30.jpg" sizes="315px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-433x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-779x1080.jpg">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="https://www.saltinourhair.com/europe/" title="Europe Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Europe</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img data-srcset="https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-800x588.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-1440x1058.jpg" class="lazyautosizes lazyloaded" alt="Europe Travel Guides" data-sizes="auto" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/italy-travel-itinerary-30x22.jpg" sizes="315px" srcset="https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-800x588.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-1440x1058.jpg">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="https://www.saltinourhair.com/south-america/" title="South America Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>South America</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-430x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-774x1080.jpg" class="lazyautosizes lazyloaded" alt="South America Travel Guides" data-sizes="auto" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/continent-southamerica-22x30.jpg" sizes="315px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-430x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-774x1080.jpg">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="https://www.saltinourhair.com/africa/" title="Africa Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Africa</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-464x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-835x1080.jpg" class="lazyautosizes lazyloaded" alt="Africa Travel Guides" data-sizes="auto" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/colorful-nubian-village-egypt-kids-23x30.jpg" sizes="315px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-464x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-835x1080.jpg">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="https://www.saltinourhair.com/middle-east/" title="Middle East Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Middle East</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-430x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-774x1080.jpg" class="lazyautosizes lazyloaded" alt="Middle East Travel Guides" data-sizes="auto" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/continent-middleeast-22x30.jpg" sizes="315px" srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-430x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-774x1080.jpg">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="scroller__btn scroller__btn--next">
                  <button aria-label="Next continent">
                     <span>
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"></use>
                        </svg>
                        <svg class="icon icon-arrow-small">
                           <use xlink:href="#icon-arrow-small"></use>
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="scroller__btn-background"></div>
            </div>
         </section>
         <section class="home-ad">
            <div class="content_hint"></div>
         </section>
         <a href="https://www.saltinourhair.com/presets/" class="banner-shop" title="Lightroom Presets" target="_blank">
            <div class="banner-shop__container">
               <div class="banner-shop__content">
                  <span class="banner-shop__title">
                  Edit photos like us!
                  </span>
                  <p>Bring color into your photography with our easy-to-use photos filters - add beautiful colors to your images!</p>
                  <div class="banner-shop__btn-circle">
                     <svg class="icon icon-arrow">
                        <use xlink:href="#icon-arrow"></use>
                     </svg>
                     <svg class="icon icon-round-shape">
                        <use xlink:href="#icon-round-shape"></use>
                     </svg>
                  </div>
               </div>
            </div>
            <picture class="banner-shop__image">
               <img src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/blank.webp" data-srcset="/build/images/home/preset-banner-s.jpg 820w, /build/images/home/preset-banner.jpg 1100w, /build/images/home/preset-banner-2.jpg" class="lazyautosizes lazyloaded" alt="Salt in our Hair Lightroom Presets" data-sizes="auto" sizes="1100px" srcset="/build/images/home/preset-banner-s.jpg 820w, /build/images/home/preset-banner.jpg 1100w, /build/images/home/preset-banner-2.jpg">
            </picture>
         </a>
         <section class="about">
            <div class="about-image">
               <img src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/blank.webp" data-srcset="/build/images/home/about-us.jpg 423w, /build/images/home/about-us-2.jpg 845w" class=" lazyloaded" width="423" height="427" alt="Hannah and Nick - Salt in our Hair" srcset="/build/images/home/about-us.jpg 423w, /build/images/home/about-us-2.jpg 845w">
            </div>
            <div class="about-content">
               <div class="about-content__title">
                  ABOUT
               </div>
               <div class="about-content__subtitle">
                  Hannah &amp; Nick
               </div>
               <p class="about-content__text">
                  Hi! We're Hannah &amp; Nick, two creatives that run a 'travel content creation' company named Salt in our Hair. We inspire people to travel via our travel guides, photography and videography.<br><a href="https://www.saltinourhair.com/about-us" target="_blank">More about us</a> / <a href="https://www.saltinourhair.com/work-with-us" target="_blank">Work with us</a>
               </p>
               <div class="socials">
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.instagram.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Instagram Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"></use>
                        </svg>
                        <svg class="icon icon-instagram">
                           <use xlink:href="#icon-instagram"></use>
                        </svg>
                     </a>
                  </div>
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.youtube.com/c/saltinourhairtravel?sub_confirmation=1" target="_blank" rel="noopener" aria-label="Youtube Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"></use>
                        </svg>
                        <svg class="icon icon-youtube">
                           <use xlink:href="#icon-youtube"></use>
                        </svg>
                     </a>
                  </div>
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.pinterest.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Pinterest Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"></use>
                        </svg>
                        <svg class="icon icon-pinterest">
                           <use xlink:href="#icon-pinterest"></use>
                        </svg>
                     </a>
                  </div>
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.facebook.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Facebook Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"></use>
                        </svg>
                        <svg class="icon icon-facebook">
                           <use xlink:href="#icon-facebook"></use>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </section>
      </main>
      <nav class="page-nav page-nav--small page-nav--sticked">
         <div class="page-nav__container">
            <ul class="page-nav__list page-nav__list--menu">
               <li class="page-nav__item page-nav__item--home visible-desktop">
                  <a class="page-nav__link" href="https://www.saltinourhair.com/" title="Salt in our Hair Travel Blog" aria-label="Salt in our Hair Travel Blog">
                     <figure class="logo"></figure>
                  </a>
               </li>
               <li class="page-nav__item visible-desktop">
                  <a class="page-nav__link page-nav__link--sub page-nav__link--destinations page-nav__link--has-submenu " href="https://www.saltinourhair.com/travel-blog/" title="Travel blogs">Destinations</a>
               </li>
               <li class="page-nav__item visible-mobile">
                  <a class="page-nav__link" href="https://www.saltinourhair.com/" title="Home">Home</a>
               </li>
               <li class="page-nav__item">
                  <a class="page-nav__link " href="https://www.saltinourhair.com/tips/" title="Tips">Tips<span class="visible-desktop">&nbsp;&amp; Tricks</span></a>
               </li>
               <li class="page-nav__item">
                  <a class="page-nav__link page-nav__link--has-submenu " href="https://www.saltinourhair.com/about-us/" title="About us">About us</a>
                  <div class="page-nav__item-subcontainer">
                     <ul class="page-nav__item-sublist">
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link " href="https://www.saltinourhair.com/about-us/" title="About Salt in our Hair">Our story</a>
                        </li>
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link " href="https://www.saltinourhair.com/work-with-us/" title="Work with Salt in our Hair">Work with us</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="page-nav__item page-nav__item--button">
                  <a class="page-nav__link page-nav__link--has-submenu " href="https://www.saltinourhair.com/shop/" title="Salt in our Hair Shop">Shop</a>
                  <div class="page-nav__item-subcontainer">
                     <ul class="page-nav__item-sublist">
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link " href="https://www.saltinourhair.com/presets/" title="Photo Presets">Presets</a>
                        </li>
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link " href="https://www.saltinourhair.com/ebooks/traveling-sri-lanka/" title="Travel Ebooks">Ebooks</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="page-nav__item visible-mobile">
                  <div class="socials">
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.instagram.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Instagram Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"></use>
                           </svg>
                           <svg class="icon icon-instagram">
                              <use xlink:href="#icon-instagram"></use>
                           </svg>
                        </a>
                     </div>
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.youtube.com/c/saltinourhairtravel?sub_confirmation=1" target="_blank" rel="noopener" aria-label="YouTube Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"></use>
                           </svg>
                           <svg class="icon icon-youtube">
                              <use xlink:href="#icon-youtube"></use>
                           </svg>
                        </a>
                     </div>
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.pinterest.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Pinterest Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"></use>
                           </svg>
                           <svg class="icon icon-pinterest">
                              <use xlink:href="#icon-pinterest"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </li>
            </ul>
            <ul class="page-nav__list page-nav__item--search">
               <li class="page-nav__item">
                  <form role="search" class="search-form" method="get" action="https://www.saltinourhair.com/">
                     <label for="search-input" class="search-form__label">
                     <input id="search-input" class="search-form__input" name="s" type="text" placeholder="Type to search …" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = &#39;&#39;" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = &#39;Type to search …&#39;">
                     <span class="search-form__background"></span>
                     </label>
                     <button type="submit" class="search-form__btn" title="Search Blogs">
                        <svg class="icon icon-search">
                           <use xlink:href="#icon-search"></use>
                        </svg>
                     </button>
                  </form>
               </li>
               <li class="page-nav__item visible-desktop">
                  <div class="socials">
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.instagram.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Instagram Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"></use>
                           </svg>
                           <svg class="icon icon-instagram">
                              <use xlink:href="#icon-instagram"></use>
                           </svg>
                        </a>
                     </div>
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.youtube.com/c/saltinourhairtravel?sub_confirmation=1" target="_blank" rel="noopener" aria-label="YouTube Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"></use>
                           </svg>
                           <svg class="icon icon-youtube">
                              <use xlink:href="#icon-youtube"></use>
                           </svg>
                        </a>
                     </div>
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.pinterest.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Pinterest Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"></use>
                           </svg>
                           <svg class="icon icon-pinterest">
                              <use xlink:href="#icon-pinterest"></use>
                           </svg>
                        </a>
                     </div>
                  </div>
               </li>
            </ul>
         </div>
         <div class="page-nav__subcontainer">
            <div class="page-nav__subcontainer-continent">
               <strong class="page-nav__sub-continent">
                  <a href="https://www.saltinourhair.com/asia/">
                     Asia
                     <svg class="icon">
                        <use xlink:href="#icon-arrow-small"></use>
                     </svg>
                  </a>
               </strong>
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/bali/" title="Bali">
                     Bali </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/cambodia/" title="Cambodia">
                     Cambodia </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/georgia/" title="Georgia">
                     Georgia </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/india/" title="India">
                     India </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/indonesia/" title="Indonesia">
                     Indonesia </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/laos/" title="Laos">
                     Laos </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/malaysia/" title="Malaysia">
                     Malaysia </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/maldives/" title="Maldives">
                     Maldives </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/myanmar/" title="Myanmar">
                     Myanmar </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link page-nav__sub-link--small" href="https://www.saltinourhair.com/philippines/" title="Philippines">
                     Philippines </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/singapore/" title="Singapore">
                     Singapore </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/sri-lanka/" title="Sri Lanka">
                     Sri Lanka </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/thailand/" title="Thailand">
                     Thailand </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/uzbekistan/" title="Uzbekistan">
                     Uzbekistan </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/vietnam/" title="Vietnam">
                     Vietnam </a>
                  </li>
               </ul>
            </div>
            <div class="page-nav__subcontainer-continent">
               <strong class="page-nav__sub-continent">
                  <a href="https://www.saltinourhair.com/africa/">
                     Africa
                     <svg class="icon">
                        <use xlink:href="#icon-arrow-small"></use>
                     </svg>
                  </a>
               </strong>
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/egypt/" title="Egypt">
                     Egypt </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/mauritius/" title="Mauritius">
                     Mauritius </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/morocco/" title="Morocco">
                     Morocco </a>
                  </li>
               </ul>
            </div>
            <div class="page-nav__subcontainer-continent">
               <strong class="page-nav__sub-continent">
                  <a href="https://www.saltinourhair.com/europe/">
                     Europe
                     <svg class="icon">
                        <use xlink:href="#icon-arrow-small"></use>
                     </svg>
                  </a>
               </strong>
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link page-nav__sub-link--small" href="https://www.saltinourhair.com/czech-republic/" title="Czech Republic">
                     Czech Republic </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/france/" title="France">
                     France </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/georgia/" title="Georgia">
                     Georgia </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/hungary/" title="Hungary">
                     Hungary </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/iceland/" title="Iceland">
                     Iceland </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/italy/" title="Italy">
                     Italy </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link page-nav__sub-link--small" href="https://www.saltinourhair.com/netherlands/" title="Netherlands">
                     Netherlands </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/poland/" title="Poland">
                     Poland </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/portugal/" title="Portugal">
                     Portugal </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/spain/" title="Spain">
                     Spain </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/turkey/" title="Turkey">
                     Turkey </a>
                  </li>
               </ul>
            </div>
            <div class="page-nav__subcontainer-continent">
               <strong class="page-nav__sub-continent">
                  <a href="https://www.saltinourhair.com/middle-east/">
                     Middle East
                     <svg class="icon">
                        <use xlink:href="#icon-arrow-small"></use>
                     </svg>
                  </a>
               </strong>
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/egypt/" title="Egypt">
                     Egypt </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/jordan/" title="Jordan">
                     Jordan </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/oman/" title="Oman">
                     Oman </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/turkey/" title="Turkey">
                     Turkey </a>
                  </li>
               </ul>
            </div>
            <div class="page-nav__subcontainer-continent">
               <strong class="page-nav__sub-continent">
                  <a href="https://www.saltinourhair.com/south-america/">
                     South America
                     <svg class="icon">
                        <use xlink:href="#icon-arrow-small"></use>
                     </svg>
                  </a>
               </strong>
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="https://www.saltinourhair.com/peru/" title="Peru">
                     Peru </a>
                  </li>
               </ul>
            </div>
            <a href="https://www.saltinourhair.com/travel-blog/" title="Discover all travel blogs" class="page-nav__subcontainer-button">
               All Travel Blogs
               <svg class="icon">
                  <use xlink:href="#icon-arrow-small"></use>
               </svg>
            </a>
            <span class="overflow-indicator">
               <svg class="icon icon-arrow-small">
                  <use xlink:href="#icon-arrow-small"></use>
               </svg>
               <svg class="icon icon-round-shape">
                  <use xlink:href="#icon-round-shape"></use>
               </svg>
            </span>
         </div>
         <button class="nav-burger" aria-label="Open mobile menu">
            <svg class="icon-round-shape" width="32" height="32">
               <use xlink:href="#icon-round-shape"></use>
            </svg>
            <span class="nav-burger__text">
               <svg class="icon-burger" width="32" height="32">
                  <use xlink:href="#icon-burger"></use>
               </svg>
            </span>
            <svg class="icon-close" width="32" height="32">
               <use xlink:href="#icon-close"></use>
            </svg>
         </button>
      </nav>

	</main><!-- #main -->

<?php
get_footer();
