jQuery(document).ready((function(a){var e=parseInt(pbd_alp.startPage)+1,o=parseInt(pbd_alp.maxPages),d=pbd_alp.nextLink;e<=o&&(a(".orgs").append('<div class="pbd-alp-placeholder-'+e+'"></div>').append('<div class="btn center-btn load-more"><a href="#">Load More Posts</a></div>'),a(".navigation").remove()),a(".load-more a").click((function(){return e<=o?(a(this).text("Loading posts..."),a(".pbd-alp-placeholder-"+e).load(d+" .orgs",(function(){e++,d=d.replace(/\/page\/[0-9]?/,"/page/"+e),a(".load-more").before('<div class="pbd-alp-placeholder-'+e+'"></div>'),e<=o?a(".load-more a").text("Load More Posts"):a(".load-more a").text("No more posts to load.")}))):a(".load-more a").append("."),!1}))}));