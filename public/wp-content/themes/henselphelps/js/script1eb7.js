jQuery(document).ready(function() {
	
//javasctipt 
//load more click function: improved to prevent double click and fire funciton only after content has been loaded (good for slow internet connection)
jQuery('.load_more:not(.loading)').on('click',function(e){
	e.preventDefault();
	var $load_more_btn = jQuery(this);
	var post_type = 'post'; // this is optional and can be set from anywhere, stored in mockup etc...
	var offset = jQuery('#posts_list .grid-item').length;
	var nonce = $load_more_btn.attr('data-nonce');
	jQuery.ajax({
		        	type : "post",
		        	context: this,
		         	dataType : "json",
		         	url : headJS.ajaxurl,
					data : {action: "load_more", offset:offset, nonce:nonce, post_type:post_type, posts_per_page:headJS.posts_per_page},
		         	beforeSend: function(data) {
						// here u can do some loading animation...
						$load_more_btn.addClass('loading').html('Loading...');// good for styling and also to prevent ajax calls before content is loaded by adding loading class
		         	},
		         	success: function(response) {
						if (response['have_posts'] == 1){//if have posts:
							$load_more_btn.removeClass('loading').html('Load More');
							var $newElems = jQuery(response['html'].replace(/(\r\n|\n|\r)/gm, ''));// here removing extra breaklines and spaces
							
							//Adition for isotope
							var $container = jQuery('.grid').isotope();
							$container.append($newElems).isotope( 'appended', $newElems );
							
							//jQuery('#posts_list').append($newElems);
						} else {
							//end of posts (no posts found)
							$load_more_btn.removeClass('loading').addClass('end_of_posts').html('<span>End of posts</span>'); // change buttom styles if no more posts
						}
		         	}
		      	});
});

});