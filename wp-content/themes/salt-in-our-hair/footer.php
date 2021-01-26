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
	<footer class="page-foot">
         <svg width="100%" height="134" class="page-foot__background page-foot__background--desktop">
            <defs>
               <pattern id="footer" x="750px" y="0" width="1501" height="134" patternUnits="userSpaceOnUse" viewBox="0 0 3002 268">
                  <path d="M3001,115.5c-0.2,0-0.3,0.1-0.5,0.1c-63.1,17.3-124.8,40.8-187,61.5c-529,171-1031,45-1139,18l-430-106 c-90-22-180-45-271-60C653.8-26.3,308.7,3.5,3,112.7l-2,0.7l-1,0.4V268h1v0.1h2l2997.5-0.1h0.5h1V115.2L3001,115.5z"></path>
               </pattern>
               <rect id="rect" x="-50%" y="0" width="100%" height="100%" fill="url(#footer)"></rect>
            </defs>
            <use class="page-foot__background--desktop" xlink:href="#rect" x="50%" y="0"></use>
         </svg>
         <svg width="100%" height="134" viewBox="0 0 3002 268" preserveAspectRatio="xMinYMax meet" class="page-foot__background page-foot__background--mobile">
            <path d="M3001,115.5c-0.2,0-0.3,0.1-0.5,0.1c-63.1,17.3-124.8,40.8-187,61.5c-529,171-1031,45-1139,18l-430-106 c-90-22-180-45-271-60C653.8-26.3,308.7,3.5,3,112.7l-2,0.7l-1,0.4V268h1v0.1h2l2997.5-0.1h0.5h1V115.2L3001,115.5z"></path>
         </svg>
         <div class="page-foot__container">
            <div class="newsletter">
               <h4 class="newsletter__title">The Travel <span>Letter</span></h4>
               <p class="newsletter__text">Get inspired! Receive travel discounts, tips and behind the scenes stories.</p>
               <form action="https://www.saltinourhair.com/wp-admin/admin-ajax.php" method="post" class="newsletter__form" id="subcribe-newsletter">
                  <label class="newsletter__input" for="newsletter-email">
                  <input id="newsletter-email" type="email" name="email" value="" placeholder="Your email address" required="" onfocus="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = &#39;&#39;" onblur="if (!window.__cfRLUnblockHandlers) return false; this.placeholder = &#39;Your email address&#39;">
                  <input type="hidden" name="action" value="mailchimpsubscribe">
                  </label>
                  <button class="btn newsletter__submit">
                  <span class="btn__text">Subscribe</span>
                  </button>
               </form>
            </div>
            <div class="foot-instagram">
               <a class="foot-instagram__image salt-bubble-mask" href="https://www.instagram.com/saltinourhair/" target="_blank" rel="noopener">
                  <img src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/hannah-nick-saltinourhair-blog.jpg" data-src="/build/images/hannah-nick-saltinourhair-blog.jpg" class=" lazyloaded" width="400" height="405" alt="Hannah and Nick - Salt in our Hair">
                  <div class="foot-instagram__content">
                     <svg class="icon icon-instagram">
                        <use xlink:href="#icon-instagram"></use>
                     </svg>
                     <p>
                        Follow our travels daily on Instagram together with 250K others. 
                        <svg class="icon icon-arrow">
                           <use xlink:href="#icon-arrow"></use>
                        </svg>
                     </p>
                  </div>
               </a>
            </div>
            <nav class="sitemap" aria-label="Sitemap">
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="https://www.saltinourhair.com/travel-blog/" title="Travel Blogs">Travel Blogs</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/bali/bali-route-guide/" title="Bali Travel Guide">Bali Travel Guide</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/sri-lanka/sri-lanka-route-guide/" title="Sri Lanka Travel Guide">Sri Lanka Travel Guide</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/peru/peru-travel-guide/" title="Peru Travel Guide">Peru Travel Guide</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="https://www.saltinourhair.com/tips/" title="Tips &amp; Tricks">Tips &amp; Tricks</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/tips/start-travel-blog/" title="Start a Travel Blog">Start a Travel Blog</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/tips/reduce-plastic-travel/" title="Reduce travel plastic">Reduce travel plastic</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/tips/camera-travel-photography/" title="Our Photography Gear">Our Photography Gear</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="https://www.saltinourhair.com/about-us/" title="About us">About us</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/about-us/" title="Our story">Our story</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/work-with-us/" title="Work with us">Work with us</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item">
                     <a class="sitemap__list-title" href="https://www.saltinourhair.com/#" title="Shop">Shop</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/presets/" title="Lightroom Presets">Lightroom Presets</a>
                  </li>
                  <li class="sitemap__list-item">
                     <a href="https://www.saltinourhair.com/ebooks/" title="Ebooks">Ebooks</a>
                  </li>
               </ul>
               <ul class="sitemap__list">
                  <li class="sitemap__list-item"><span class="sitemap__list-title">Contact</span></li>
                  <li class="sitemap__list-item">
                     <a href="mailto:ask@saltinourhair.com" target="_blank" title="Email us">ask@saltinourhair.com</a>
                  </li>
                  <li class="sitemap__list-item">
                     <div class="socials socials--foot">
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
                  </li>
               </ul>
            </nav>
            <div class="foot-logo">
               <a class="foot-logo__link" href="https://www.saltinourhair.com/" title="Salt in our Hair Travel Blog" aria-label="Salt in our Hair Travel Blog">
                  <figure class="foot-logo__image"></figure>
               </a>
            </div>
         </div>
         <div class="copyright">
            <div class="copyright__text">
               © <a href="https://www.saltinourhair.com/" title="Salt in our Hair Travel Blog">Salt in our Hair</a> - <a href="https://www.saltinourhair.com/tips/start-travel-blog/" target="_blank">Website designed and built with ♥ by us</a> - <a href="https://www.saltinourhair.com/privacy-policy/" target="_blank" title="Privacy">Privacy</a>
               <span id="mv_privacy_settings">- <a href="javascript:window.__cmp(&#39;showConsentTool&#39;)">Update Privacy Settings</a></span> - Exclusive Member of Mediavine Travel
            </div>
         </div>
      </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
