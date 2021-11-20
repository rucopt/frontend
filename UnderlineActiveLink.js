/* Changes the style of links to the current page when pure css doesnt work*/
		jQuery("a").each(function(){
			if(jQuery(this).attr("href") == window.location.href) {
				jQuery(jQuery(this)).css("text-decoration","underline");
			}
		});
