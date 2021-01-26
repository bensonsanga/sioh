<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Salt_in_Our_hair
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <style>
         /*<![CDATA[*/:root{--container-max:100rem;--container-content:87.5rem;--max-content-width:46rem}*{-webkit-font-smoothing:antialiased}html{height:100%;overflow-x:hidden;background-color:#fff}body{display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column;min-height:100%}:root{overflow-y:scroll;-webkit-text-size-adjust:100%;text-size-adjust:100%;box-sizing:border-box;font:16px/1.85 Merriweather,Georgia,sans-serif;text-rendering:optimizeLegibility;color:#353535}*,::after,::before{box-sizing:inherit}*{font-size:inherit;line-height:inherit}::after,::before{text-decoration:inherit;vertical-align:inherit}*,::after,::before{border-style:solid;border-width:0}*{margin:0;padding:0}a{text-decoration:none;color:inherit}img,svg{vertical-align:middle}nav ol{list-style:none;margin-bottom:0;padding-left:0}img{height:auto;max-width:100%}h1,h2{font-family:headings,Arial;font-weight:700}h1,h2{color:#353535;line-height:1.3;margin-bottom:.5em;margin-top:1em}.page-cover__image{background:#F5F5F5}h1{font-size:2.2em}h2{font-size:1.75rem}p{margin:0 0 1em}.page-head{flex-shrink:0;padding:0 15px;position:relative}.page-head__container{left:0;right:0;margin:0 auto;position:absolute;top:0;width:calc(100% - 120px);z-index:100}.page-cover{height:100%;position:relative;z-index:0}.page-cover__container{position:relative}.page-cover:after{bottom:0;left:0;opacity:0;position:absolute;right:0}.page-cover__image{height:100%;position:absolute;width:100%}.page-cover__image-container{display:block;position:relative;height:100%;width:100%;overflow:hidden;}.page-cover__image-container img {height:105%;object-fit:cover;width:100%;min-width:100%;min-height:100%}.blog-content{word-break:break-word}.page-cover:after{background-color:rgba(0,0,0,.15);content:'';height:100%;z-index:2}.icon{display:inline-block;width:1em;height:1em;stroke-width:0;stroke:currentColor;fill:currentColor}.post-breadcrumbs{margin-bottom:15px;-webkit-box-ordinal-group:2;order:1}.post-breadcrumbs__list{-webkit-box-align:center;align-items:center;display:flex;flex-wrap:wrap}.post-breadcrumbs__item{font-family:headings,Arial;font-size:15px;letter-spacing:1.1px;line-height:1em;text-transform:uppercase}.post-breadcrumbs__item a{display:inline-block}.post-breadcrumbs__item span{line-height:1.3em}.post-breadcrumbs__separator{font-size:9px;margin:0 7px}.article-block{align-self:flex-start;border-radius:7px;display:flex;flex-wrap:wrap;height:315px;margin-bottom:14px;overflow:hidden;position:relative;width:100%;z-index:1}.page-cover__image--lowress {left:0;position: absolute;top: 0;z-index:1}.page-cover__image--highress{position:relative;opacity:0;transition: opacity .2s;z-index: 2}.page-cover__image--highress.image-loaded{opacity: 1}.article-block__content{margin-left:30px;max-width:500px;-webkit-box-ordinal-group:3;order:2;position:absolute;top:30px;width:auto;z-index:2}.sidebar-slowload .article-block{opacity:0;visibility:hidden}.article-block__content-link{display:block;text-decoration:none;width:90%}.article-block__image-container{display:block;height:inherit}.article-block__image{bottom:0;left:0;height:inherit;max-width:100%;-webkit-box-ordinal-group:2;order:1;position:relative;right:0;top:0;width:100%;z-index:1}.article-block__image:after{background:rgba(0,0,0,.1);content:'';position:absolute;height:100%;width:100%;top:0}.article-block__image img{max-width:none;-o-object-fit:cover;object-fit:cover;-o-object-position:center;object-position:center;min-width:100%}.article-block__image img,.article-block__image-link{display:block;height:inherit;width:100%}.article-block__title{line-height:1.85;font-size:1.1rem;letter-spacing:-.3px;margin:0 0 0 .4em}.article-block__title span{background:#fff;-webkit-box-shadow:.4em 0 0 #fff,-.4em 0 0 #fff;box-shadow:.4em 0 0 #fff,-.4em 0 0 #fff}.sidebar{margin-top:3rem;position:relative;grid-area:sidebar;-webkit-box-ordinal-group:4;order:3;width:100%}.sidebar-articles{position:relative;width:100%}.sidebar-articles__container{background-color:#f5f5f5;border-radius:15px;margin-bottom:35px;padding:20px}.sidebar-articles__title{margin-bottom:8px;overflow:hidden;text-align:center}.sidebar-articles__title h6{display:block;font-family:headings,Arial;font-size:14px;letter-spacing:1.1px;position:relative;text-transform:uppercase}.sidebar-articles--popular{display:none;margin-top:0}.sidebar-articles--related{display:none}.lazyload{opacity:0}.single .page-head .logo{background-color:#fff}.single .page-cover{height:64vh;left:-15px;position:relative;transform:scaleX(-1);width:calc(100% + 30px)}.single .page-cover__container{margin:0 auto}.single .page-cover__image{transform:scaleX(-1)}.page-content__container{margin: 0 auto;max-width:var(--container-content);}.page-nav{display:none;}.post-cover__content{flex-shrink:0;margin-top:20px;position:relative;width:100%;z-index:1}.logo{display:inline-block;height:28px;-webkit-mask:url(/build/images/saltinourhair-logo.png) no-repeat center/cover;mask:url(/build/images/saltinourhair-logo.png) no-repeat center/cover;width:142px;}.logo__container {-webkit-box-align: center;align-items:center;display:flex;height:60px;-webkit-box-pack:center;justify-content:center;}.post-cover__content-container{display:flex;-webkit-box-orient:vertical;-webkit-box-direction:normal;flex-direction:column}.post-cover__title{color:#353535;line-height:1.2em;-webkit-box-ordinal-group:3;order:2;letter-spacing:-.5px;max-width:100%;margin-top:0;margin-left:-2px}.post-cover__intro{font-style:italic;-webkit-box-ordinal-group:4;order:3}.blog-article{font-size:17px;grid-area:content;position:relative;width:100%}.blog-article p{color:#3a3a3a;-webkit-hyphens:auto;hyphens:auto}.blog-article p:empty{display:none;visibility:hidden}.post-breadcrumbs ol a{background-image:-webkit-gradient(linear,left top,left bottom,from(transparent),color-stop(0,#d8c4c3)),-webkit-gradient(linear,left top,left bottom,from(transparent),color-stop(0,#c0e2e2));background-image:linear-gradient(transparent calc(100% - .45em),#d8c4c3 0),linear-gradient(transparent calc(100% - .45em),#c0e2e2 0);background-repeat:no-repeat;background-size:0 100%,100% 100%}@media (min-width:768px){.logo{height:24px;width:119px}.post-breadcrumbs{margin-bottom:25px}.article-block__content{margin-left:20px;-webkit-box-ordinal-group:2;order:1;top:18px}.article-block__image{-webkit-box-ordinal-group:3;order:2}.sidebar-articles{width:340px}.post-cover__title{font-size:50px}}@media (min-width:980px){h1{font-size:3.4rem}h2{font-size:1.9em}.logo{height:21px;width:100px}.logo__container{display:none}.article-block__content{margin-left:30px;top:30px}.article-block__title{font-size:1.3rem}.single .page-cover{left:40%;margin-left:40px;height:100%;max-height:75vh;min-height:700px;position:absolute;top:0;transform:scaleX(1);width:calc((100vw - (40% + 40px + 15px)))}.single .page-cover__container{display:flex;max-width:var(--container-content);min-height:750px;margin-bottom:60px}.single .page-cover__image{transform:scaleX(1)}.post-cover__content{margin-top:100px;padding-top:60px;width:41%}.post-cover__title{font-size:55px}.post-cover__intro{font-size:19px;padding-right:40px}}@media (min-width:1024px){.blog-container{display:grid; grid-template-columns:0 minmax(0, 3rem) minmax(37.25rem,var(--max-content-width)) minmax(3rem, 49rem) 21.25rem minmax(0, 3rem) minmax(0, 1fr);grid-template-areas:". . content . sidebar . ."". . category category category . ."". . related related related . ."}}@media (min-width: 1156px){.blog-container{grid-template-columns: minmax(0, 6.25rem) minmax(0, 3rem) var(--max-content-width) minmax(3rem, 49rem) 21.25rem minmax(0, 3rem) minmax(15px, 1fr)}}.related-posts{grid-area:related;}.related-category{grid-area:category;}/*]]>*/
      </style>
      <style>
         /*<![CDATA[*/.home .page-cover{height:75vh;min-height:300px;max-height:1000px}.home .page-cover__image-container img{height:100%}.home .page-cover__container{margin:0 auto;max-width:2400px}.home .page-head{padding:0}.home .page-head__container{display:none}.home .logo.logo--large{height:37px;width:180px}.home .logo.logo--shadow{background: rgba(0,0,0,0.25);left: 50%;margin-left: 0.8%;margin-top: 0.5%;position: absolute;transform: translateY(-20px) translateX(-50%);z-index:-1}.home .page-content{display:grid;grid-template-columns:minmax(0,1fr) minmax(1px,68.75rem) minmax(0,1fr);margin:0;grid-template-areas:". weekly ." "destination destination destination" ". continents ." ". ad ." "shop shop shop" ". about ."}.home-cover__content{background:-webkit-gradient(linear,left bottom,left top,from(rgba(0,0,0,.25)),to(transparent));background:linear-gradient(0deg,rgba(0,0,0,.25),transparent);bottom:0;display:-webkit-box;display:flex;left:0;overflow:hidden;position:absolute;right:0;top:0}.home-cover__content-container{align-self:center;color:#fff;max-width:500px;margin:0 auto;padding-bottom:40px;position:relative;text-align:center;z-index:1}.home-cover__content-container .logo,.home-cover__content-container p{-webkit-transform:translateY(-20px);transform:translateY(-20px);opacity:0}.home-cover__content-shape{bottom:0;left:0;margin:0 auto;position:absolute;right:0;width:100%;z-index:0}.home-cover__indicator{bottom:0;left:0;padding-bottom:20%;position:absolute;right:0}.weekly-posts{grid-area:weekly;-webkit-box-pack:justify;justify-content:space-between;margin:20px 0}.weekly-posts__tip{-webkit-box-ordinal-group:3;order:2}.weekly-posts__tip .article-block{height:315px}.weekly-posts__tip .article-block__content{-webkit-box-align:center;align-items:center;bottom:100px;display:-webkit-box;display:flex}.weekly-posts__tip .article-block__image:after{background:rgba(0,0,0,.3)}.block-continents{grid-area:continents}.home-ad{grid-area:ad}.banner-shop{grid-area:shop}.about{grid-area:about}@media (min-width:375px){.home .logo.logo--large{height:47px;width:230px}}@media (min-width:768px){.weekly-posts{display:grid;grid-gap: 35px;grid-template-columns:minmax(auto,2fr) 1fr;margin: 35px 0}.home .logo.logo--large{height:71px;width:350px}.home-cover__content-container p{font-size:19px;max-width:100%}.home-cover__indicator{padding-bottom:13%}.weekly-posts__side{margin-top:-60px}.weekly-posts__tip{-webkit-box-ordinal-group:2;order:1}.weekly-posts__tip .article-block{height:250px}}@media (min-width:980px){.home-cover__content-container{padding-bottom:100px}}/*]]>*/
      </style>
      <link rel="preload" as="image" href="https://www.saltinourhair.com/build/images/home/saltinourhair-header-default.jpg" imagesrcset="/build/images/home/saltinourhair-header-small.jpg 768w, /build/images/home/saltinourhair-header-medium.jpg 1024w, /build/images/home/saltinourhair-header-large.jpg 1350w, /build/images/home/saltinourhair-header-xlarge.jpg 1800w">
      <link rel="preload" as="image" href="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/saltinourhair-header-micro.webp">
      <link rel="preload" href="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/main.css" as="style">
      <link rel="stylesheet" href="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/main.css" media="all" onload="this.media=&#39;all&#39;">
      <noscript>
         <link
            rel=stylesheet href="/build/styles/main.css?x55655&amp;cached=1601293186931">
      </noscript>
      <link rel="preload" as="font" href="https://www.saltinourhair.com/build/fonts/SaltHeading.woff2" type="font/woff2" crossorigin="anonymous">
      <link rel="preload" href="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/home.css" as="style">
      <link rel="stylesheet" href="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/home.css" media="all" onload="this.media=&#39;all&#39;">
      <noscript>
         <link
            rel=stylesheet href="/build/styles/home.css?x55655&amp;cached=1601293186931">
      </noscript>
      <link rel="alternate" hreflang="en" href="https://www.saltinourhair.com/">
      <title>Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips</title>
      <meta name="description" content="Award-winning travel website featuring Travel Guides &amp; Tips, Digital Nomad resources, and Sustainable Travel Tips by Nick &amp; Hannah.">
      <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
      <link rel="canonical" href="https://www.saltinourhair.com/">
      <meta property="og:locale" content="en_US">
      <meta property="og:type" content="website">
      <meta property="og:title" content="Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips">
      <meta property="og:description" content="Award-winning travel website featuring Travel Guides &amp; Tips, Digital Nomad resources, and Sustainable Travel Tips by Nick &amp; Hannah.">
      <meta property="og:url" content="https://www.saltinourhair.com/">
      <meta property="og:site_name" content="Salt in our Hair Travel Blog">
      <meta property="article:publisher" content="https://www.facebook.com/saltinourhair/">
      <meta property="article:modified_time" content="2021-01-03T08:02:18+00:00">
      <meta property="og:image" content="https://www.saltinourhair.com/wp-content/uploads/2019/07/share-image.jpg">
      <meta property="og:image:width" content="1200">
      <meta property="og:image:height" content="630">
      <script type="text/javascript" async="" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/analytics.js.download"></script><script defer="" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/gtm.js.download"></script><script type="application/ld+json" class="yoast-schema-graph">{"@context":"https://schema.org","@graph":[{"@type":"Organization","@id":"https://www.saltinourhair.com/#organization","name":"Salt in our Hair","url":"https://www.saltinourhair.com/","sameAs":["https://www.facebook.com/saltinourhair/","https://www.instagram.com/saltinourhair/","http://youtube.com/saltinourhairtravel/","https://pinterest.com/saltinourhair/","https://twitter.com/saltinourhair"],"logo":{"@type":"ImageObject","@id":"https://www.saltinourhair.com/#logo","inLanguage":"en-US","url":"https://www.saltinourhair.com/wp-content/uploads/2020/05/saltinourhair-travel-blog.jpg","width":2000,"height":1250,"caption":"Salt in our Hair"},"image":{"@id":"https://www.saltinourhair.com/#logo"}},{"@type":"WebSite","@id":"https://www.saltinourhair.com/#website","url":"https://www.saltinourhair.com/","name":"Salt in our Hair Travel Blog","description":"","publisher":{"@id":"https://www.saltinourhair.com/#organization"},"potentialAction":[{"@type":"SearchAction","target":"https://www.saltinourhair.com/?s={search_term_string}","query-input":"required name=search_term_string"}],"inLanguage":"en-US"},{"@type":"WebPage","@id":"https://www.saltinourhair.com/#webpage","url":"https://www.saltinourhair.com/","name":"Salt in our Hair &ndash; Travel Guides & Tips, Sustainable and Digital Nomad tips","isPartOf":{"@id":"https://www.saltinourhair.com/#website"},"about":{"@id":"https://www.saltinourhair.com/#organization"},"datePublished":"2016-05-05T06:47:06+00:00","dateModified":"2021-01-03T08:02:18+00:00","description":"Award-winning travel website featuring Travel Guides & Tips, Digital Nomad resources, and Sustainable Travel Tips by Nick & Hannah.","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https://www.saltinourhair.com/"]}]}]}</script> 
      <meta name="msvalidate.01" content="A6CA383094BCA8C48EF0BAEB544D249A">
      <meta name="google-site-verification" content="8s5UYogpQUljYtTKcyQG8aOACulV7-eRdnsSjyqob_8">
      <meta name="p:domain_verify" content="91f727d1ed41549cf01e5fa1ba3aa953">
      <meta name="yandex-verification" content="efc2599035ec9a7b">
      <link rel="dns-prefetch" href="https://s.w.org/">
      <link rel="https://api.w.org/" href="https://www.saltinourhair.com/wp-json/">
      <link rel="alternate" type="application/json" href="https://www.saltinourhair.com/wp-json/wp/v2/pages/138">
      <link rel="alternate" type="application/json+oembed" href="https://www.saltinourhair.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.saltinourhair.com%2F">
      <link rel="alternate" type="text/xml+oembed" href="https://www.saltinourhair.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fwww.saltinourhair.com%2F&amp;format=xml">
      <meta name="generator" content="WPML ver:4.4.8 stt:1;">
      <meta property="article:author" content="https://www.facebook.com/saltinourhair/">
      <meta name="verification" content="1eb1ebb3ed5ae958ef1ef1ac7c9bda4b">
      <meta name="ir-site-verification-token" value="376333458">
      <link rel="icon" type="image/png" href="https://www.saltinourhair.com/build/images/favicon-16x16.png" sizes="16x16">
      <link rel="icon" type="image/png" href="https://www.saltinourhair.com/build/images/favicon-32x32.png" sizes="32x32">
      <link rel="icon" type="image/png" href="https://www.saltinourhair.com/build/images/favicon-96x96.png" sizes="96x96">
      <script id="main-script" src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/main.min.js.download"></script><script src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/home.min.js.download" type="text/javascript" charset="utf-8"></script><script src="./Salt in our Hair – Travel Guides &amp; Tips, Sustainable and Digital Nomad tips_files/subscribe.min.js.download" type="text/javascript" charset="utf-8"></script>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body class="home page-template page-template-frontpage page-template-frontpage-php page page-id-138">
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="position: absolute; width: 0; height: 0; overflow: hidden; visibility:hidden; z-index:-1;" height="0" width="0">
         <defs>
            <svg viewBox="0 0 32 32" id="icon-arrow" xmlns="http://www.w3.org/2000/svg">
               <path d="M29 19.9L17.6 31.3c-.9.9-2.3.9-3.2 0L3 19.9c-.9-.9-.9-2.3 0-3.2s2.3-.9 3.2 0l7.5 7.5V2.3C13.7 1 14.7 0 16 0s2.3 1 2.3 2.3v21.9l7.5-7.5c.4-.4 1-.7 1.6-.7s1.2.2 1.6.7c.9.9.9 2.3 0 3.2z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-arrow-small" xmlns="http://www.w3.org/2000/svg">
               <path d="M24.5 18c1.1-1 1.2-2.8.2-3.9l-.1-.1-7.2-7.2-2.3-2.3L11.5.9C10.4-.2 8.7-.3 7.6.8s-1.2 2.8-.1 3.9l.1.1 11.1 11.1-5.4 5.4-2.3 2.3-3.6 3.6c-1.1 1.1-1.2 2.8-.1 3.9 1.1 1.1 2.8 1.2 3.9.1l.1-.1L24.5 18z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-burger" xmlns="http://www.w3.org/2000/svg">
               <path d="M6.4 11.1c1 0 1.6-.2 2.6-.8 1.4-.8 2.2-1.1 3.8-1.1 1.6 0 2.4.3 3.8 1.1 1 .6 1.6.8 2.6.8s1.6-.2 2.6-.8c1.4-.8 2.2-1.1 3.8-1.1 1.6 0 2.4.3 3.8 1.1 1.1.7 1.6.8 2.8.8v2c-1.6 0-2.4-.3-3.8-1.1-1.1-.7-1.6-.8-2.8-.8-1.2 0-1.7.2-2.8.8-1.3.8-2.1 1.1-3.4 1.1H19c-1.4 0-2.2-.4-3.4-1.1-1.1-.7-1.6-.8-2.8-.8-1.2 0-1.7.2-2.8.8-1.3.8-2.1 1.1-3.4 1.1h-.4c-1.4 0-2.2-.4-3.4-1.1-1.1-.7-1.6-.8-2.8-.8v-2c1.6 0 2.4.3 3.8 1.1 1 .6 1.5.8 2.6.8zm0 9.8c1 0 1.6-.2 2.6-.8 1.4-.8 2.2-1.1 3.8-1.1 1.6 0 2.4.3 3.8 1.1 1 .6 1.6.8 2.6.8s1.6-.2 2.6-.8c1.4-.8 2.2-1.1 3.8-1.1 1.6 0 2.4.3 3.8 1.1 1.1.7 1.6.8 2.8.8v2c-1.6 0-2.4-.3-3.8-1.1-1.1-.7-1.6-.8-2.8-.8-1.2 0-1.7.2-2.8.8-1.3.8-2.1 1.1-3.4 1.1H19c-1.4 0-2.2-.4-3.4-1.1-1.1-.7-1.6-.8-2.8-.8-1.2 0-1.7.2-2.8.8-1.3.8-2.1 1.1-3.4 1.1h-.4c-1.4 0-2.2-.4-3.4-1.1-1.1-.7-1.6-.8-2.8-.8v-2c1.6 0 2.4.3 3.8 1.1 1 .6 1.5.8 2.6.8z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-close" xmlns="http://www.w3.org/2000/svg">
               <path d="M31.8 3.5L19.9 15.4c-.3.3-.3.9 0 1.2l11.9 11.9c.3.3.3.9 0 1.2l-2.1 2.1c-.3.3-.9.3-1.2 0L16.6 19.9c-.3-.3-.9-.3-1.2 0L3.5 31.8c-.3.3-.9.3-1.2 0L.2 29.7c-.3-.3-.3-.9 0-1.2l11.9-11.9c.3-.3.3-.9 0-1.2L.2 3.5c-.3-.3-.3-.9 0-1.2L2.3.2c.3-.3.9-.3 1.2 0l11.9 11.9c.3.3.9.3 1.2 0L28.5.2c.3-.3.9-.3 1.2 0l2.1 2.1c.3.4.3.9 0 1.2z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-facebook" xmlns="http://www.w3.org/2000/svg">
               <path d="M29 0H3C1.35 0 0 1.35 0 3v26c0 1.65 1.35 3 3 3h13V18h-4v-4h4v-2c0-3.306 2.694-6 6-6h4v4h-4c-1.1 0-2 .9-2 2v2h6l-1 4h-5v14h9c1.65 0 3-1.35 3-3V3c0-1.65-1.35-3-3-3z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-instagram" xmlns="http://www.w3.org/2000/svg">
               <path d="M16 2.881c4.275 0 4.781.019 6.462.094 1.563.069 2.406.331 2.969.55a4.952 4.952 0 011.837 1.194 5.015 5.015 0 011.2 1.838c.219.563.481 1.412.55 2.969.075 1.688.094 2.194.094 6.463s-.019 4.781-.094 6.463c-.069 1.563-.331 2.406-.55 2.969a4.94 4.94 0 01-1.194 1.837 5.02 5.02 0 01-1.837 1.2c-.563.219-1.413.481-2.969.55-1.688.075-2.194.094-6.463.094s-4.781-.019-6.463-.094c-1.563-.069-2.406-.331-2.969-.55a4.952 4.952 0 01-1.838-1.194 5.02 5.02 0 01-1.2-1.837c-.219-.563-.481-1.413-.55-2.969-.075-1.688-.094-2.194-.094-6.463s.019-4.781.094-6.463c.069-1.563.331-2.406.55-2.969a4.964 4.964 0 011.194-1.838 5.015 5.015 0 011.838-1.2c.563-.219 1.412-.481 2.969-.55 1.681-.075 2.188-.094 6.463-.094zM16 0c-4.344 0-4.887.019-6.594.094-1.7.075-2.869.35-3.881.744-1.056.412-1.95.956-2.837 1.85a7.833 7.833 0 00-1.85 2.831C.444 6.538.169 7.7.094 9.4.019 11.113 0 11.656 0 16s.019 4.887.094 6.594c.075 1.7.35 2.869.744 3.881.413 1.056.956 1.95 1.85 2.837a7.82 7.82 0 002.831 1.844c1.019.394 2.181.669 3.881.744 1.706.075 2.25.094 6.594.094s4.888-.019 6.594-.094c1.7-.075 2.869-.35 3.881-.744 1.05-.406 1.944-.956 2.831-1.844s1.438-1.781 1.844-2.831c.394-1.019.669-2.181.744-3.881.075-1.706.094-2.25.094-6.594s-.019-4.887-.094-6.594c-.075-1.7-.35-2.869-.744-3.881a7.506 7.506 0 00-1.831-2.844A7.82 7.82 0 0026.482.843C25.463.449 24.301.174 22.601.099c-1.712-.081-2.256-.1-6.6-.1z"></path>
               <path d="M16 7.781c-4.537 0-8.219 3.681-8.219 8.219s3.681 8.219 8.219 8.219 8.219-3.681 8.219-8.219A8.221 8.221 0 0016 7.781zm0 13.55a5.331 5.331 0 110-10.663 5.331 5.331 0 010 10.663zM26.462 7.456a1.919 1.919 0 11-3.838 0 1.919 1.919 0 013.838 0z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-pinterest" xmlns="http://www.w3.org/2000/svg">
               <path d="M28.3 8.898c-.874-6.324-7.176-9.544-13.9-8.79C9.084.704 3.784 5.002 3.564 11.148c-.134 3.752.93 6.566 4.5 7.358 1.546-2.736-.498-3.334-.818-5.316C5.936 5.09 16.59-.442 22.17 5.218c3.864 3.92 1.318 15.972-4.906 14.718-5.962-1.196 2.92-10.79-1.838-12.672-3.868-1.532-5.922 4.68-4.088 7.768-1.076 5.31-3.392 10.31-2.454 16.968 3.04-2.208 4.066-6.43 4.906-10.836 1.528.93 2.346 1.892 4.294 2.042 7.184.558 11.202-7.172 10.216-14.308z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-play" xmlns="http://www.w3.org/2000/svg">
               <path d="M16 0C7.163 0 0 7.163 0 16s7.163 16 16 16 16-7.163 16-16S24.837 0 16 0zm0 29C8.82 29 3 23.18 3 16S8.82 3 16 3s13 5.82 13 13-5.82 13-13 13zM12 9l12 7-12 7z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-reply" xmlns="http://www.w3.org/2000/svg">
               <path d="M29.1 10H9.7l6.5-6.5c.8-.8.8-2 .1-2.8-.8-.8-2.1-.8-2.9 0l-10 10c-.8.8-.8 2 0 2.8l10 10c.8.8 2 .8 2.8.1.4-.4.6-.9.6-1.4 0-.5-.2-1-.6-1.4L9.7 14h15.4v16c0 1.1.9 2 2 2s2-.9 2-2V10z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-round-shape" xmlns="http://www.w3.org/2000/svg">
               <path d="M18.8.2C13.2-.6 6.8.7 3.3 5.1.9 8 .3 12 .1 15.7c-.2 3.9 0 8.1 2.4 11.2 2.5 3.4 6.7 4.9 10.9 5 5.4.1 5.3.6 9.3-.8 5-1.7 9.2-6.9 9.3-12.2.1-2.1-.1-6.6-.8-8.6 0 0-2.6-8.6-12.4-10.1z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-round-shape-inverted" xmlns="http://www.w3.org/2000/svg">
               <path d="M0 0v32h32V0H0zm30.5 18.5c-.1 4.9-4 9.7-8.5 11.3-3.7 1.3-3.6.9-8.5.8-3.8-.1-7.7-1.5-9.9-4.6-2.1-2.9-2.4-6.8-2.1-10.4.2-3.5.8-7.1 2.9-9.8C7.6 1.7 13.5.5 18.6 1.2c8.9 1.3 11.2 9.4 11.2 9.4.6 1.8.8 5.9.7 7.9z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-search" xmlns="http://www.w3.org/2000/svg">
               <path d="M31.5 29.3l-7.2-7.2c2.2-2.8 3.4-6.5 2.8-10.5C26.2 5.6 21.4.8 15.3.1 6.5-1-1 6.5.1 15.4c.8 6 5.6 10.9 11.5 11.8 4 .6 7.6-.6 10.5-2.8l7.2 7.2c.6.6 1.6.6 2.2 0 .7-.7.7-1.7 0-2.3zm-15.4-5.4c-7.7 1.7-14.4-5-12.6-12.6.9-3.9 3.9-6.9 7.8-7.8 7.7-1.7 14.4 5 12.6 12.6C23 20 20 23 16.1 23.9z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-whatsapp" xmlns="http://www.w3.org/2000/svg">
               <path d="M27.281 4.65C24.287 1.65 20.306 0 16.062 0 7.324 0 .212 7.112.212 15.856c0 2.794.731 5.525 2.119 7.925L.081 32l8.406-2.206a15.858 15.858 0 007.575 1.931h.006c8.738 0 15.856-7.113 15.856-15.856 0-4.238-1.65-8.219-4.644-11.219zm-11.212 24.4a13.17 13.17 0 01-6.713-1.837l-.481-.288-4.987 1.306 1.331-4.863-.313-.5a13.086 13.086 0 01-2.019-7.012c0-7.269 5.912-13.181 13.188-13.181 3.519 0 6.831 1.375 9.319 3.862a13.108 13.108 0 013.856 9.325c-.006 7.275-5.919 13.188-13.181 13.188zm7.225-9.875c-.394-.2-2.344-1.156-2.706-1.288s-.625-.2-.894.2c-.262.394-1.025 1.288-1.256 1.556-.231.262-.462.3-.856.1s-1.675-.619-3.188-1.969c-1.175-1.05-1.975-2.35-2.206-2.744s-.025-.613.175-.806c.181-.175.394-.463.594-.694s.262-.394.394-.662c.131-.262.069-.494-.031-.694s-.894-2.15-1.219-2.944c-.319-.775-.65-.669-.894-.681-.231-.012-.494-.012-.756-.012s-.694.1-1.056.494c-.363.394-1.387 1.356-1.387 3.306s1.419 3.831 1.619 4.1c.2.262 2.794 4.269 6.769 5.981.944.406 1.681.65 2.256.837.95.3 1.813.256 2.494.156.762-.113 2.344-.956 2.675-1.881s.331-1.719.231-1.881c-.094-.175-.356-.275-.756-.475z"></path>
            </svg>
            <svg viewBox="0 0 32 32" id="icon-youtube" xmlns="http://www.w3.org/2000/svg">
               <path d="M31.681 9.6s-.313-2.206-1.275-3.175C29.187 5.15 27.825 5.144 27.2 5.069c-4.475-.325-11.194-.325-11.194-.325h-.012s-6.719 0-11.194.325c-.625.075-1.987.081-3.206 1.356C.631 7.394.325 9.6.325 9.6s-.319 2.588-.319 5.181v2.425c0 2.587.319 5.181.319 5.181s.313 2.206 1.269 3.175c1.219 1.275 2.819 1.231 3.531 1.369 2.563.244 10.881.319 10.881.319s6.725-.012 11.2-.331c.625-.075 1.988-.081 3.206-1.356.962-.969 1.275-3.175 1.275-3.175s.319-2.587.319-5.181v-2.425c-.006-2.588-.325-5.181-.325-5.181zM12.694 20.15v-8.994l8.644 4.513-8.644 4.481z"></path>
            </svg>
         </defs>
      </svg>
<?php wp_body_open(); ?>

