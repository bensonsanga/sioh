<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link bensonad
 * 
 *
 * @package bensonad
 */

get_header();
?>
      <header class="page-head">
         <div class="page-cover__container">
            <div class="page-cover">
               <div class="page-cover__image">
                  <picture class="page-cover__image-container">
                     <img src="<?php bloginfo('template_directory');?>/build/images/home/saltinourhair-header-micro_x67420.jpg" class="page-cover__image--lowress" alt="Home">
                     <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bc9c9a5e2a5d4707b12e18b9-|49"></script><img onload="this.classList.add('image-loaded')" class="page-cover__image--highress" srcset="<?php bloginfo('template_directory');?>/build/images/home/saltinourhair-header-small.jpg 768w, <?php bloginfo('template_directory');?>/build/images/home/saltinourhair-header-medium.jpg 1024w, <?php bloginfo('template_directory');?>/build/images/home/saltinourhair-header-large.jpg 1350w, <?php bloginfo('template_directory');?>/build/images/home/saltinourhair-header-xlarge.jpg 1800w, <?php bloginfo('template_directory');?>/build/images/home/saltinourhair-header-default.jpg" alt="Home" sizes="auto">
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
                     <use xlink:href="#icon-arrow"/>
                  </svg>
               </div>
               <svg width="100%" height="457" viewBox="0 0 3000 457" preserveAspectRatio="xMinYMax meet" class="home-cover__content-shape">
                  <path fill="#FFF" d="M0 382c167 108 388 86 571 7 132-57 250-163 394-164 124-2 239 76 363 70 155-8 276-144 428-170 218-38 430 156 646 107 110-24 195-107 293-160 92-50 201-75 305-72v457H0z"/>
               </svg>
            </div>
         </div>
         <div class="page-head__container">
            <div class="logo__container">
               <a href title="Salt in our Hair Travel Blog" class="logo"></a>
            </div>
         </div>
      </header>
      <main class="page-content" id="maincontent">
         <section class="weekly-posts">
            <article class="weekly-posts__travel">
               <a class="article-block weekly-posts__article-block" href="tips/travel-from-home/" title="Travel From Home: 14 Ways to Satisfy Your Travel Cravings">
                  <div class="article-block__content">
                     <div class="article-block__content-link">
                        <span class="salt-icon salt-icon--compass-white"></span>
                        <div class="weekly-posts__travel-subtitle">This week:</div>
                        <h2 class="article-block__title"><span>14 Ways to Travel from Home</span></h2>
                     </div>
                  </div>
                  <div class="article-block__image">
                     <div class="article-block__image-link">
                        <picture class="article-block__image-container">
                           <img src="wp-content/uploads/2021/01/travel-from-home-tips-30x30_x67420.jpg" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2021/01/travel-from-home-tips-600x600.jpg 600w, https://www.saltinourhair.com/wp-content/uploads/2021/01/travel-from-home-tips-1080x1080.jpg 1080w" class="lazypreload" alt="14 Ways to Travel from Home" data-sizes="auto">
                        </picture>
                     </div>
                  </div>
               </a>
            </article>
            <div class="weekly-posts__side">
               <article class="weekly-posts__tip">
                  <a class="article-block weekly-posts__tip-block" href="tips/travel-insurance/" title="Best Travel Insurances in 2021 (COVID-19 coverage)">
                     <div class="article-block__content">
                        <div class="article-block__content-link">
                           <h2 class="article-block__title">Best Travel Insurances<br>
                              that cover COVID-19
                           </h2>
                        </div>
                     </div>
                     <span class="salt-icon salt-icon--tip-white"></span>
                     <div class="article-block__image">
                        <div class="article-block__image-link">
                           <picture class="article-block__image-container">
                              <img src="<?php bloginfo('template_directory');?>/wp-content/uploads/2020/07/SA70650-30x27_x67420.jpg" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/07/SA70650-679x600.jpg 679w, https://www.saltinourhair.com/wp-content/uploads/2020/07/SA70650-917x810.jpg 917w" class="lazypreload" alt="Best Travel Insurances
                                 that cover COVID-19
                                 " data-sizes="auto">
                           </picture>
                        </div>
                     </div>
                  </a>
               </article>
               <div class="weekly-posts__links">
                  <ul>
                     <li>
                        <a href="tips/reduce-plastic-travel/">13 Tips to reduce plastics easily</a>
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"/>
                        </svg>
                     </li>
                     <li>
                        <a href="tips/start-travel-blog/">How to start a travel blog</a>
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"/>
                        </svg>
                     </li>
                     <li>
                        <a href="presets/flow-collection/">Our Photography Presets </a>
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"/>
                        </svg>
                     </li>
                  </ul>
               </div>
            </div>
         </section>
         <section class="monthly-destination">
            <a href="sri-lanka/" title="See all articles about Sri Lanka">
               <div class="monthly-destination__container">
                  <span class="monthly-destination__subtitle">Discover</span>
                  <div class="monthly-destination__title" style="--title-length:9">Sri Lanka</div>
                  <p class="monthly-destination__excerpt">Lush tea plantations & waterfalls, tropical beaches, jaw-dropping wildlife, historical monuments & temples.</p>
                  <div class="monthly-destination__btn-circle">
                     <svg class="icon icon-arrow">
                        <use xlink:href="#icon-arrow"/>
                     </svg>
                     <svg class="icon icon-round-shape">
                        <use xlink:href="#icon-round-shape"/>
                     </svg>
                  </div>
                  <div class="monthly-destination__cover">
                     <div class="monthly-destination__cover-image">
                        <picture class="monthly-destination__image">
                           <img tempsrc="https://www.saltinourhair.com/wp-content/uploads/2020/05/saltinourhair-sri-lanka-30x30.jpg?x67420" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/saltinourhair-sri-lanka-600x600.jpg 800w, https://www.saltinourhair.com/wp-content/uploads/2020/05/saltinourhair-sri-lanka-810x810.jpg 1280w, https://www.saltinourhair.com/wp-content/uploads/2020/05/saltinourhair-sri-lanka-1080x1080.jpg" class="lazyload" alt="Sri Lanka" data-sizes="auto">
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
                           <use xlink:href="#icon-round-shape"/>
                        </svg>
                        <svg class="icon icon-arrow-small">
                           <use xlink:href="#icon-arrow-small"/>
                        </svg>
                     </span>
                  </button>
               </div>
               <div class="scroller__container">
                  <div class="scroller__inner">
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="asia/" title="Asia Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Asia</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img tempsrc="https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-22x30.jpg?x67420" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-433x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/SA72098-2-779x1080.jpg" class="lazyload" alt="Asia Travel Guides" data-sizes="auto">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="europe/" title="Europe Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Europe</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img tempsrc="https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-30x22.jpg?x67420" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-800x588.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2019/06/italy-travel-itinerary-1440x1058.jpg" class="lazyload" alt="Europe Travel Guides" data-sizes="auto">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="south-america/" title="South America Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>South America</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img tempsrc="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-22x30.jpg?x67420" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-430x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-southamerica-774x1080.jpg" class="lazyload" alt="South America Travel Guides" data-sizes="auto">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="africa/" title="Africa Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Africa</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img tempsrc="https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-23x30.jpg?x67420" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-464x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/colorful-nubian-village-egypt-kids-835x1080.jpg" class="lazyload" alt="Africa Travel Guides" data-sizes="auto">
                                 </picture>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="scroller__item">
                        <a class="article-block block-continents__item" href="middle-east/" title="Middle East Travel Guides">
                           <div class="article-block__content">
                              <div class="article-block__content-link">
                                 <h2 class="article-block__title"><span>Middle East</span></h2>
                              </div>
                           </div>
                           <div class="article-block__image">
                              <div class="article-block__image-link">
                                 <picture class="article-block__image-container">
                                    <img tempsrc="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-22x30.jpg?x67420" data-srcset="https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-430x600.jpg 736w, https://www.saltinourhair.com/wp-content/uploads/2020/05/continent-middleeast-774x1080.jpg" class="lazyload" alt="Middle East Travel Guides" data-sizes="auto">
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
                           <use xlink:href="#icon-round-shape"/>
                        </svg>
                        <svg class="icon icon-arrow-small">
                           <use xlink:href="#icon-arrow-small"/>
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
         <a href="presets/" class="banner-shop" title="Lightroom Presets" target="_blank">
            <div class="banner-shop__container">
               <div class="banner-shop__content">
                  <span class="banner-shop__title">
                  Edit photos like us!
                  </span>
                  <p>Bring color into your photography with our easy-to-use photos filters - add beautiful colors to your images!</p>
                  <div class="banner-shop__btn-circle">
                     <svg class="icon icon-arrow">
                        <use xlink:href="#icon-arrow"/>
                     </svg>
                     <svg class="icon icon-round-shape">
                        <use xlink:href="#icon-round-shape"/>
                     </svg>
                  </div>
               </div>
            </div>
            <picture class="banner-shop__image">
               <img src="<?php bloginfo('template_directory');?>/build/images/blank_x67420.png" data-srcset="<?php bloginfo('template_directory');?>/build/images/home/preset-banner-s.jpg 820w, <?php bloginfo('template_directory');?>/build/images/home/preset-banner.jpg 1100w, <?php bloginfo('template_directory');?>/build/images/home/preset-banner-2.jpg" class="lazyload" alt="Salt in our Hair Lightroom Presets" data-sizes="auto">
            </picture>
         </a>
         <section class="about">
            <div class="about-image">
               <img src="<?php bloginfo('template_directory');?>/build/images/blank_x67420.png" data-srcset="<?php bloginfo('template_directory');?>/build/images/home/about-us.jpg 423w, <?php bloginfo('template_directory');?>/build/images/home/about-us-2.jpg 845w" class="lazyload" width="423" height="427" alt="Hannah and Nick - Salt in our Hair">
            </div>
            <div class="about-content">
               <div class="about-content__title">
                  ABOUT
               </div>
               <div class="about-content__subtitle">
                  Hannah &amp; Nick
               </div>
               <p class="about-content__text">
                  Hi! We're Hannah &amp; Nick, two creatives that run a 'travel content creation' company named Salt in our Hair. We inspire people to travel via our travel guides, photography and videography.<br><a href="about-us/" target="_blank">More about us</a> / <a href="work-with-us/" target="_blank">Work with us</a>
               </p>
               <div class="socials">
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.instagram.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Instagram Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"/>
                        </svg>
                        <svg class="icon icon-instagram">
                           <use xlink:href="#icon-instagram"/>
                        </svg>
                     </a>
                  </div>
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.youtube.com/c/saltinourhairtravel?sub_confirmation=1" target="_blank" rel="noopener" aria-label="Youtube Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"/>
                        </svg>
                        <svg class="icon icon-youtube">
                           <use xlink:href="#icon-youtube"/>
                        </svg>
                     </a>
                  </div>
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.pinterest.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Pinterest Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"/>
                        </svg>
                        <svg class="icon icon-pinterest">
                           <use xlink:href="#icon-pinterest"/>
                        </svg>
                     </a>
                  </div>
                  <div class="socials__item">
                     <a class="socials__link" href="https://www.facebook.com/saltinourhair/" target="_blank" rel="noopener" aria-label="Facebook Salt in our Hair">
                        <svg class="icon icon-round-shape">
                           <use xlink:href="#icon-round-shape"/>
                        </svg>
                        <svg class="icon icon-facebook">
                           <use xlink:href="#icon-facebook"/>
                        </svg>
                     </a>
                  </div>
               </div>
            </div>
         </section>
      </main>
<?php
get_sidebar();
get_footer();