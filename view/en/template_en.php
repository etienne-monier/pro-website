<!DOCTYPE html>
<html lang="en" xmlns:og="http://ogp.me/ns#"> <!-- xmlns to enable open graph -->

<head>
	
	<!-- Select UTF8 -->
	<meta charset="utf-8">

	<!-- Responsive website -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!-- Disable IE compatibility mode --
		>
	<meta http-equiv="x-ua-compatible" content="ie=edge">


	<!-- Information -->	
	<title><?= $title ?></title>
	<meta name="author" content="<?= $author ?>" />
	<meta name="description" content="<?= $description ?>" />
	<meta name="keywords" content="<?= $keywords ?>"" >

	<!-- Canonical url -->
	<link rel="canonical" href="<?= $url ?>" />
	

	
	
	

	<!-- Mobile service -->
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?= $author ?>">
	<meta name="apple-mobile-web-app-status-bar-style" content="black">
	<meta name="application-name" content="<?= $title ?>">
	<meta name="msapplication-config" content="public/ieconfig.xml">


	<meta name="theme-color" content="#4fb1ba">
	<meta name="generator" content="Hydejack v7.5.1">
	<link type="application/atom+xml" rel="alternate" href="http://localhost:4000/feed.xml" title="<?= $author ?>" />
	<link rel="alternate" href="http://localhost:4000/" hreflang="en">
	<link rel="shortcut icon" href="<?= $site_icon ?>">
	<link rel="apple-touch-icon" href="<?= $lab_logo ?>">

	<link rel="manifest" href="assets/manifest.json">


	<link rel="dns-prefetch" href="https://fonts.googleapis.com">
	<link rel="dns-prefetch" href="https://fonts.gstatic.com">

	<link id="_katexJS"  rel="dns-prefetch" href="public/bower_components/katex/dist/katex.min.js">
	<link id="_katexCSS" rel="dns-prefetch" href="public/bower_components/katex/dist/katex.min.css">

	<script>
	  function stdOnEnd(n,e){n.onload=function(){this.onerror=this.onload=null,e(null,n)},n.onerror=function(){this.onerror=this.onload=null,e(new Error("Failed to load "+this.src),n)}}function ieOnEnd(n,e){n.onreadystatechange=function(){"complete"!=this.readyState&&"loaded"!=this.readyState||(this.onreadystatechange=null,e(null,n))}}window.setRelStylesheet=function(n){function e(){this.rel="stylesheet"}var o=document.getElementById(n);o.addEventListener?o.addEventListener("load",e,!1):o.onload=e},window._loaded=!1,window.loadJSDeferred=function(n,e){function o(){window._loaded=!0;var o=document.createElement("script");o.src=n,e&&(("onload"in o?stdOnEnd:ieOnEnd)(o,e),o.onload||stdOnEnd(o,e));var t=document.scripts[0];t.parentNode.insertBefore(o,t)}window._loaded?o():window.addEventListener?window.addEventListener("load",o,!1):window.onload=o};
	!function(a){"use strict";var b=function(b,c,d){function e(a){return h.body?a():void setTimeout(function(){e(a)})}function f(){i.addEventListener&&i.removeEventListener("load",f),i.media=d||"all"}var g,h=a.document,i=h.createElement("link");if(c)g=c;else{var j=(h.body||h.getElementsByTagName("head")[0]).childNodes;g=j[j.length-1]}var k=h.styleSheets;i.rel="stylesheet",i.href=b,i.media="only x",e(function(){g.parentNode.insertBefore(i,c?g:g.nextSibling)});var l=function(a){for(var b=i.href,c=k.length;c--;)if(k[c].href===b)return a();setTimeout(function(){l(a)})};return i.addEventListener&&i.addEventListener("load",f),i.onloadcssdefined=l,l(f),i};"undefined"!=typeof exports?exports.loadCSS=b:a.loadCSS=b}("undefined"!=typeof global?global:this);
	!function(a){if(a.loadCSS){var b=loadCSS.relpreload={};if(b.support=function(){try{return a.document.createElement("link").relList.supports("preload")}catch(b){return!1}},b.poly=function(){for(var b=a.document.getElementsByTagName("link"),c=0;c<b.length;c++){var d=b[c];"preload"===d.rel&&"style"===d.getAttribute("as")&&(a.loadCSS(d.href,d,d.getAttribute("media")),d.rel=null)}},!b.support()){b.poly();var c=a.setInterval(b.poly,300);a.addEventListener&&a.addEventListener("load",function(){b.poly(),a.clearInterval(c)}),a.attachEvent&&a.attachEvent("onload",function(){a.clearInterval(c)})}}}(this);

	  window._noPushState = false;
	  window._noDrawer = false;
	</script>

	<!--[if gt IE 8]><!---->


	<script>
	  WebFontConfig = {
	    
	    google: {
	      families: ['Roboto+Slab:700','Noto+Sans:400,400i,700,700i']
	    },
	    

	    custom: {
	      families: ['icomoon'],
	      urls: ['public/icomoon/style.css']
	    }
	  };
	  (function(d) {
	    var wf = d.createElement('script'), s = d.scripts[0];
	    wf.src = "public/bower_components/webfontloader/webfontloader.js";
	    s.parentNode.insertBefore(wf, s);
	  }(document));
	</script>
	<!--<![endif]-->


	<!-- If javascripts disabled -->
	<noscript>
	  
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:700%7CNoto+Sans:400,400i,700,700i">
	    <style>
	      html { font-family: Noto Sans, Helvetica, Arial, sans-serif }
	      h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6, .heading { font-family: Roboto Slab, Helvetica, Arial, sans-serif }
	    </style>
	  
		<link rel="stylesheet" href="public/icomoon/style.css">
	</noscript>

	<!--[if gt IE 8]><!---->





	  <link rel="stylesheet" href="public/css/hydejack-7.5.1.css">



	<style id="_pageStyle">

	.content a:not(.btn){color:#4fb1ba;border-color:rgba(79,177,186,0.2)}.content a:not(.btn):hover{border-color:#4fb1ba}:focus{outline-color:#4fb1ba}.btn-primary{color:#fff;background-color:#4fb1ba;border-color:#4fb1ba}.btn-primary:focus,.btn-primary.focus{box-shadow:0 0 0 3px rgba(79,177,186,0.5)}.btn-primary:hover,.btn-primary.hover{color:#fff;background-color:#409ba3;border-color:#409ba3}.btn-primary:disabled,.btn-primary.disabled{color:#fff;background-color:#4fb1ba;border-color:#4fb1ba}.btn-primary:active,.btn-primary.active{color:#fff;background-color:#409ba3;border-color:#409ba3}::selection{color:#fff;background:#4fb1ba}::-moz-selection{color:#fff;background:#4fb1ba}

	</style>

	<!--<![endif]-->




	<!-- Bootstrap core CSS -->
	<!-- <link href="public/css/bootstrap.min.css" rel="stylesheet"> -->
	<!-- Font Awesome -->
	<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="public/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.rawgit.com/jpswalsh/academicons/master/css/academicons.min.css">
	<!--  <link rel="stylesheet" href="public/academicons/css/academicons.min.css"> -->


	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="public/js/bootstrap.min.js"></script>
	  



	<!-- Search Engine Optimization -->

	<!-- Open Graph Protocol -->
	<meta property="og:title" content="<?= $title ?>" />
	<meta properiété="og:type" contenu="website" />
	<meta property="og:description" content="<?= $description ?>" />
	<meta property="og:locale" content="en" />
	<meta property="og:url" content="<?= $url ?>" />
	<meta property="og:site_name" content="<?= $author ?>" />
	



	<!-- Strucured data -->
	<script type="application/ld+json">
	{
		"name":"<?= $author ?>",
		"description":"<?= $description ?>",
		"author":{
			"@type":"Person",
			"name":"<?= $author ?>"
		},
		"@type":"WebSite",
		"url":"<?= $url ?>",
		"publisher":{
			"@type":"Organization",
			"logo":{
				"@type":"ImageObject",
				"url":"<?php echo $url . "/" . $site_icon ?>"
			},
			"name":"<?= $author ?>"
		},
		"image":null,
		"headline":"Welcome",
		"dateModified":null,
		"datePublished":null,
		"sameAs":null,
		"mainEntityOfPage":null,
		"@context":"http://schema.org"
	}
	</script>


</head>


<body>
  	<div class="navbar fixed-top">
  		<div class="content">
    		<div class="nav-btn-bar">
      			<span class="sr-only">Jump to:</span>
      			<a id="_menu" class="nav-btn no-hover" href="#_navigation">
        			<span class="sr-only">Navigation</span>
        			<span class="icon-menu"></span>
      			</a>
    		</div>
  		</div>
	</div>


	<hy-push-state>
  	<main
    id="_main"
    class="content fade-in layout-about"
    role="main"
    data-color="#4fb1ba"
    data-theme-color=""
    data-image="<?= $sidebar_bg ?>"
    data-overlay   
  	>
    
		<article class="page" role="article">
			<?= $content ?>
		</article>

    


		<!-- Footer -->
		<footer role="contentinfo">
			<hr/>
  
			<p><small class="copyright">© 2017. All rights reserved.</small></p>
  
  
			<p><small>Powered by a customized version of <a class="external" href="https://qwtel.com/hydejack/">Hydejack</a> v<span id="_version">7.5.1</span></small></p>
			<hr class="sr-only"/>
		</footer>


	</main>





<hy-drawer>
	<header id="_sidebar" class="sidebar" role="banner">
    	<div class="sidebar-bg sidebar-overlay" style='background-color:#4fb1ba;background-image:url("<?= $sidebar_bg ?>")'>	</div>
    	<div class="sidebar-sticky">
      		<div class="sidebar-about">
        		<h2 class="h1"><a href="index.php"><?= $author ?></a></h2>
        		<p class="">
            		<?= $description ?>
          		</p>
      		</div>


				<!-- Navigation section -->
				<nav class="sidebar-nav heading" role="navigation">
					<span class="sr-only">Navigation:</span>
					<ul>
				  		<li>
				    		<a id="aboutme" href="index.php" class="sidebar-nav-item active">About me</a>
				  		</li>
				  		<li>
				    		<a id="publications" href="index.php?page=publications" class="sidebar-nav-item active">Publications & Talks</a>
				  		</li>
				  		<li>
				    		<a id="research" href="index.php?page=research" class="sidebar-nav-item active">Research activities</a>
				  		</li>
				  		<li>
				    		<a id="teaching" href="index.php?page=teaching" class="sidebar-nav-item active">Teaching</a>
				  		</li>
				  		<li>
				    		<a id="CV" href="index.php?page=curriculum" class="sidebar-nav-item active">CV</a>
				  		</li>
				  		<li>
				    		<a id="findme" href="index.php?page=findme" class="sidebar-nav-item active">Find me</a>
				  		</li>
					</ul>

				</nav>

      

				<!-- Social section -->
				<div class="sidebar-social">
				    <span class="sr-only">Social:</span>
					<ul>
						<?php
							DislaySocial($social_array)
						?>
					</ul>
				</div>




			</div>
		</header>
	</hy-drawer>
</hy-push-state>
  

<!--[if gt IE 9]><!---->
<script>loadJSDeferred('public/js/hydejack-7.5.1.js');</script>
<!--<![endif]-->




<hr class="sr-only"/>
<h2 class="sr-only">Templates (for web app):</h2>

<template id="_animation-template">
  <div class="animation-main fixed-top">
    <div class="content">
      <div class="page"></div>
    </div>
  </div>
</template>

<template id="_loading-template">
  <div class="loading">
    <span class="sr-only">Loading…</span>
    <span class="icon-cog"></span>
  </div>
</template>

<template id="_error-template">
  <div class="page">
    <h1 class="page-title">Error</h1>
    
    
    <p class="lead">
      Sorry, an error occurred while loading <a class="this-link" href=""></a>.

    </p>
  </div>
</template>

<template id="_back-template">
  <a id="_back" class="back nav-btn no-hover">
    <span class="sr-only">Back</span>
    <span class="icon-arrow-left2"></span>
  </a>
</template>

<template id="_permalink-template">
  <a href="#" class="permalink">
    <span class="sr-only">Permalink</span>
    <span class="icon-link"></span>
  </a>
</template>


</body>
</html>
