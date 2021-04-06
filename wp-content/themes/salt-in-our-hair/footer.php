<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Salt_in_Our_hair
 */

?>
      <nav class="page-nav">
         <div class="page-nav__container">
            <ul class="page-nav__list page-nav__list--menu">
               <li class="page-nav__item page-nav__item--home visible-desktop">
                  <a class="page-nav__link" href title="Salt in our Hair Travel Blog" aria-label="Salt in our Hair Travel Blog">
                     <figure class="logo"></figure>
                  </a>
               </li>
               <li class="page-nav__item visible-mobile">
                  <a class="page-nav__link" href title="Home">Home</a>
               </li>
               <li class="page-nav__item visible-desktop">
                  <a class="page-nav__link page-nav__link--sub page-nav__link--destinations page-nav__link--has-submenu" href="<?php echo get_category_link( 8 ); ?>" title="Travel blogs">Professional life</a>
               </li>
               <li class="page-nav__item visible-desktop">
                  <a class="page-nav__link page-nav__link--sub page-nav__link--tips page-nav__link--has-submenu" href="<?php echo get_category_link( 8 ); ?>" title="Tips">Personal life</a>
               </li>
               <li class="page-nav__item">
                  <a class="page-nav__link page-nav__link--has-submenu" href="about/" title="About us">About us</a>
                  <div class="page-nav__item-subcontainer">
                     <ul class="page-nav__item-sublist">
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link" href="about/" title="About Salt in our Hair">Our story</a>
                        </li>
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link" href="about/" title="Work with Salt in our Hair">Work with us</a>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="page-nav__item page-nav__item--button">
                  <a class="page-nav__link page-nav__link--has-submenu" href="presets/" title="Salt in our Hair Shop">Download</a>
                  <div class="page-nav__item-subcontainer">
                     <ul class="page-nav__item-sublist">
                        
                        <li class="page-nav__item page-nav__item-subitem">
                           <a class="page-nav__link" href="ebooks/traveling-sri-lanka/" title="Travel Ebooks">Ebooks</a>
                        </li>
                     </ul>
                  </div>
               </li>
            </ul>
            <ul class="page-nav__list page-nav__item--search">
               <li class="page-nav__item visible-desktop">
                  <form role="search" class="search-form" method="get" action="https://www.saltinourhair.com">
                     <label for="search-input" class="search-form__label">
                   <input id="search-input" class="search-form__input" name="s" type="text" placeholder="Search articles &hellip;" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Search articles &hellip;'" data-cf-modified-bc9c9a5e2a5d4707b12e18b9->
                     <span class="search-form__background"></span>
                     </label>
                     <button type="submit" class="search-form__btn" title="Search Blogs">
                        <svg class="icon icon-search">
                           <use xlink:href="#icon-search"/>
                        </svg>
                     </button>
                  </form>
               </li>
               <li class="page-nav__item visible-mobile">
                  <a class="page-nav__link search-form-mobile__btn page-nav__link--has-submenu" title="Search Blogs">
                     <svg class="icon icon-search">
                        <use xlink:href="#icon-search"/>
                     </svg>
                  </a>
                  <div class="page-nav__item-subcontainer">
                     <ul class="page-nav__item-sublist">
                        <li class="page-nav__item page-nav__item-subitem">
                           <form role="search" class="search-form" method="get" action="https://www.saltinourhair.com">
                              <label for="search-input" class="search-form__label">
                              <input id="search-input" class="search-form__input" name="s" type="text" placeholder="Type here to search for articles &hellip;" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Type here to search for articles &hellip;'" data-cf-modified-bc9c9a5e2a5d4707b12e18b9->
                              <span class="search-form__background"></span>
                              </label>
                              <button type="submit" class="search-form__btn" title="Search Blogs">
                                 <svg class="icon icon-search">
                                    <use xlink:href="#icon-search"/>
                                 </svg>
                              </button>
                           </form>
                        </li>
                     </ul>
                  </div>
               </li>
               <li class="page-nav__item visible-desktop">
                  <div class="socials">
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.instagram.com/bethsblog/" target="_blank" rel="noopener" aria-label="Instagram Salt in our Hair">
                           <svg class="icon icon-round-shape">
                              <use xlink:href="#icon-round-shape"/>
                           </svg>
                           <svg class="icon icon-instagram">
                              <use xlink:href="#icon-instagram"/>
                           </svg>
                        </a>
                     </div>
                     <div class="socials__item">
                        <a class="socials__link" href="https://www.youtube.com/c/saltinourhairtravel?sub_confirmation=1" target="_blank" rel="noopener" aria-label="YouTube Salt in our Hair">
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
                  </div>
               </li>
            </ul>
            <ul class="page-nav__list page-nav__list--maintopic visible-mobile">
               <li class="page-nav__item">
                  <a class="page-nav__link page-nav__link--sub page-nav__link--destinations page-nav__link--has-submenu page-nav__item--topic topic-active" href="travel-blog/" title="Travel blogs">Destinations</a>
               </li>
               <li class="page-nav__item">
                  <a class="page-nav__link page-nav__link--sub page-nav__link--tips page-nav__link--has-submenu page-nav__item--topic" href="tips/" title="Tips">Tips &amp; How to's</a>
               </li>
            </ul>
         </div>
         <div class="page-nav__subcontainer page-nav__subcontainer--destinations">
            <div class="page-nav__subcontainer-continent">
              
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="<?php echo get_category_link( 4 ); ?>" title="Bali">
                     Budgeting </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="<?php echo get_category_link( 5 ); ?>" title="Cambodia">
                     Accounting  </a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link " href="<?php echo get_category_link( 6 ); ?>" title="Georgia">
                     Business processes </a>
                  </li>
               </ul>
            </div>
            <a href="travel-blog/" title="Discover all travel blogs" class="page-nav__subcontainer-button">
               All Categories
               <svg class="icon">
                  <use xlink:href="#icon-arrow-small"/>
               </svg>
            </a>
            <span class="overflow-indicator">
               <svg class="icon icon-arrow-small">
                  <use xlink:href="#icon-arrow-small"/>
               </svg>
               <svg class="icon icon-round-shape">
                  <use xlink:href="#icon-round-shape"/>
               </svg>
            </span>
         </div>
         <div class="page-nav__subcontainer page-nav__subcontainer--tips">
            <div class="page-nav__subcontainer-tiplist">
               
               <ul class="page-nav__sublist">
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link" href="<?php echo get_category_link( 7 ); ?>" title="Travel Tips">Hope</a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link" href="<?php echo get_category_link( 8 ); ?>" title="Digital Nomad">Faith</a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link" href="<?php echo get_category_link( 9 ); ?>" title="Social Media">Spirituality</a>
                  </li>
                  <li class="page-nav__subitem">
                     <a class="page-nav__sub-link" href="<?php echo get_category_link( 10 ); ?>" title="Sustainability">Religion</a>
                  </li>
               </ul>
            </div>
            
            <a href="<?php echo get_category_link( 8 ); ?>" title="Discover all tips" class="page-nav__subcontainer-button">
               All Categories
               <svg class="icon">
                  <use xlink:href="#icon-arrow-small"/>
               </svg>
            </a>
         </div>
         <button class="nav-burger" aria-label="Open mobile menu">
            <svg class="icon-round-shape" width="32" height="32">
               <use xlink:href="#icon-round-shape"/>
            </svg>
            <span class="nav-burger__text">
               <svg class="icon-burger" width="32" height="32">
                  <use xlink:href="#icon-burger"/>
               </svg>
            </span>
            <svg class="icon-close" width="32" height="32">
               <use xlink:href="#icon-close"/>
            </svg>
         </button>
      </nav>
      <footer class="page-foot">
         <svg width="100%" height="134" class="page-foot__background page-foot__background--desktop">
            <defs>
               <pattern id="footer" x="750px" y="0" width="1501" height="134" patternUnits="userSpaceOnUse" viewBox="0 0 3002 268">
                  <path d="M3001,115.5c-0.2,0-0.3,0.1-0.5,0.1c-63.1,17.3-124.8,40.8-187,61.5c-529,171-1031,45-1139,18l-430-106 c-90-22-180-45-271-60C653.8-26.3,308.7,3.5,3,112.7l-2,0.7l-1,0.4V268h1v0.1h2l2997.5-0.1h0.5h1V115.2L3001,115.5z"/>
               </pattern>
               <rect id="rect" x="-50%" y="0" width="100%" height="100%" fill="url(#footer)"/>
            </defs>
            <use class="page-foot__background--desktop" xlink:href="#rect" x="50%" y="0"/>
         </svg>
         <svg width="100%" height="134" viewBox="0 0 3002 268" preserveAspectRatio="xMinYMax meet" class="page-foot__background page-foot__background--mobile">
            <path d="M3001,115.5c-0.2,0-0.3,0.1-0.5,0.1c-63.1,17.3-124.8,40.8-187,61.5c-529,171-1031,45-1139,18l-430-106 c-90-22-180-45-271-60C653.8-26.3,308.7,3.5,3,112.7l-2,0.7l-1,0.4V268h1v0.1h2l2997.5-0.1h0.5h1V115.2L3001,115.5z"/>
         </svg>
         <div class="page-foot__container">
            <div class="newsletter">
               <h4 class="newsletter__title">Beth's blog <span>Letter</span></h4>
               <p class="newsletter__text"></p>
               <form action="https://www.saltinourhair.com/wp-admin/admin-ajax.php" method="post" class="newsletter__form" id="subcribe-newsletter">
                  <label class="newsletter__input" for="newsletter-email">
                  <input id="newsletter-email" type="email" name="email" value placeholder="Your email address" required onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = ''" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = 'Your email address'" data-cf-modified-bc9c9a5e2a5d4707b12e18b9->
                  <input type="hidden" name="action" value="mailchimpsubscribe">
                  </label>
                  <button class="btn newsletter__submit">
                  <span class="btn__text">Subscribe</span>
                  </button>
               </form>
            </div>
            <div class="foot-instagram">
               <a class="foot-instagram__image salt-bubble-mask" href="https://www.instagram.com/bethsblog/" target="_blank" rel="noopener">
                  <img src="<?php bloginfo('template_directory');?>/build/images/blank_x67420.png" data-src="<?php bloginfo('template_directory');?>/build/images/hannah-nick-saltinourhair-blog.jpg?x67420" class="lazyload" width="400" height="405" alt="Hannah and Nick - Salt in our Hair">
                  <div class="foot-instagram__content">
                     <svg class="icon icon-instagram">
                        <!-- <use xlink:href="#icon-instagram"/> -->
                     </svg>
                     <p>
                        Follow our travels daily on Instagram together with 250K others. 
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"/>
                        </svg>
                     </p>
                  </div>
               </a>
            </div>
            <nav class="sitemap" aria-label="Sitemap">
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="<?php echo get_category_link( 8 ); ?>" title="Travel Blogs">Professional development</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 12 ); ?>" title="Bali Travel Guide">Finance</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 4 ); ?>" title="Sri Lanka Travel Guide">Budgeting</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 5 ); ?>" title="Peru Travel Guide">Accounting</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 6 ); ?>" title="Peru Travel Guide">Business processes</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="tips/" title="Tips & Tricks">Personal development</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 7 ); ?>" title="Start a Travel Blog">Hope</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 8 ); ?>" title="Reduce travel plastic">Faith</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 9 ); ?>" title="Our Photography Gear">Spirituality</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="<?php echo get_category_link( 10 ); ?>" title="Peru Travel Guide">Religion</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="about/" title="About us">About us</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="about/" title="Our story">Our story</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="about/" title="Work with us">Work with us</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="#" title="Shop">Download</a>
                  </li>
                  
                  <li class="sitemap__list-item">
                     <a href="ebooks/traveling-sri-lanka/" title="Ebooks">Ebooks</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item"><span class="sitemap__list-title">Contact</span></li>
                  <li class="sitemap__list-item">
                     <a href="mailto:ask@bethblog.com" target="_blank" title="Email us">ask@bethsblog.com</a>
                  </li>
                  <li class="sitemap__list-item">
                     <div class="socials socials--foot">
                        <div class="socials__item">
                           <a class="socials__link" href="https://www.instagram.com/bethsblog/" target="_blank" rel="noopener" aria-label="Instagram Salt in our Hair">
                              <svg class="icon icon-round-shape">
                                 <use xlink:href="#icon-round-shape"/>
                              </svg>
                              <svg class="icon icon-instagram">
                                 <use xlink:href="#icon-instagram"/>
                              </svg>
                           </a>
                        </div>
                        <div class="socials__item">
                           <a class="socials__link" href="https://www.youtube.com/c/bethsblog?sub_confirmation=1" target="_blank" rel="noopener" aria-label="Youtube Salt in our Hair">
                              <svg class="icon icon-round-shape">
                                 <use xlink:href="#icon-round-shape"/>
                              </svg>
                              <svg class="icon icon-youtube">
                                 <use xlink:href="#icon-youtube"/>
                              </svg>
                           </a>
                        </div>
                        <div class="socials__item">
                           <a class="socials__link" href="https://www.pinterest.com/bethsblog/" target="_blank" rel="noopener" aria-label="Pinterest Salt in our Hair">
                              <svg class="icon icon-round-shape">
                                 <use xlink:href="#icon-round-shape"/>
                              </svg>
                              <svg class="icon icon-pinterest">
                                 <use xlink:href="#icon-pinterest"/>
                              </svg>
                           </a>
                        </div>
                        <div class="socials__item">
                           <a class="socials__link" href="https://www.facebook.com/bethsblog/" target="_blank" rel="noopener" aria-label="Facebook Salt in our Hair">
                              <svg class="icon icon-round-shape">
                                 <use xlink:href="#icon-round-shape"/>
                              </svg>
                              <svg class="icon icon-facebook">
                                 <use xlink:href="#icon-facebook"/>
                              </svg>
                           </a>
                        </div>
                     </div>
                  </li>
               </ul>
            </nav>
            <div class="foot-logo">
               <a class="foot-logo__link" href title="Salt in our Hair Travel Blog" aria-label="Salt in our Hair Travel Blog">
                  <figure class="foot-logo__image"></figure>
               </a>
            </div>
         </div>
         <div class="copyright">
            <div class="copyright__text">
               &copy; <a href title="Salt in our Hair Travel Blog">Beth's Blog</a> - <a href="www.gilox.co/" target="_blank">Website built by Gilox.co</a> - <a href="privacy-policy/" target="_blank" title="Privacy">Privacy</a>
               <span id="mv_privacy_settings">- <a href="javascript:window.__cmp(&#x27;showConsentTool&#x27;)">Update Privacy Settings</a></span>
            </div>
         </div>
      </footer>
      <script async="async" src="<?php bloginfo('template_directory');?>/build/scripts/critical.min_x67420%26cached%3D1612369678155.js" data-cache="1612369678155" type="bc9c9a5e2a5d4707b12e18b9-text/javascript"></script> <script type="bc9c9a5e2a5d4707b12e18b9-text/javascript">(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
         new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
         j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.defer=true;j.src=
         'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
         })(window,document,'script','dataLayer','GTM-MCSNBR');
      </script> <script src="https://ajax.cloudflare.com/cdn-cgi/scripts/7089c43e/cloudflare-static/rocket-loader.min.js" data-cf-settings="bc9c9a5e2a5d4707b12e18b9-|49" defer></script>

<?php wp_footer(); ?>

</body>
</html>
