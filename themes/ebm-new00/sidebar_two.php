<?php if ( is_active_sidebar( 'sidebar-2' ) ) : ?>
	<div id="tertiary" class="widget-area" role="complementary">
		
		<!--
			<a href="/feed/">
				<aside id="submit-music">
					<h3>Never miss a review: Subscribe!</h3>
				</aside>
			</a>
		-->
		<!-- MAILCHIMP SIGNUP -->
		<!-- Begin MailChimp Signup Form -->
		<div id="mc_embed_signup">
		<form action="http://fairgrieveandhorner.us2.list-manage2.com/subscribe/post?u=1a730ad6957b6c1ecca3b4bd6&amp;id=c09d976dcc" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
			<h2>Never miss a review: Subscribe!</h2>
		<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
		<div class="mc-field-group">
			<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
		</label>
			<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="john@smith.com">
		</div>
		<div class="mc-field-group">
			<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
		</label>
			<input type="text" value="" name="FNAME" class="required" id="mce-FNAME" placeholder="John">
		</div>
			<div id="mce-responses" class="clear">
				<div class="response" id="mce-error-response" style="display:none"></div>
				<div class="response" id="mce-success-response" style="display:none"></div>
			</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
		</form>
		</div>
		<script type="text/javascript">
		var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
		try {
		    var jqueryLoaded=jQuery;
		    jqueryLoaded=true;
		} catch(err) {
		    var jqueryLoaded=false;
		}
		var head= document.getElementsByTagName('head')[0];
		if (!jqueryLoaded) {
		    var script = document.createElement('script');
		    script.type = 'text/javascript';
		    script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
		    head.appendChild(script);
		    if (script.readyState && script.onload!==null){
		        script.onreadystatechange= function () {
		              if (this.readyState == 'complete') mce_preload_check();
		        }    
		    }
		}
		var script = document.createElement('script');
		script.type = 'text/javascript';
		script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
		head.appendChild(script);
		var err_style = '';
		try{
		    err_style = mc_custom_error_style;
		} catch(e){
		    err_style = '#mc_embed_signup input.mce_inline_error{border-color:#6B0505;} #mc_embed_signup div.mce_inline_error{margin: 0 0 1em 0; padding: 5px 10px; background-color:#6B0505; font-weight: bold; z-index: 1; color:#fff;}';
		}
		var head= document.getElementsByTagName('head')[0];
		var style= document.createElement('style');
		style.type= 'text/css';
		if (style.styleSheet) {
		  style.styleSheet.cssText = err_style;
		} else {
		  style.appendChild(document.createTextNode(err_style));
		}
		head.appendChild(style);
		setTimeout('mce_preload_check();', 250);

		var mce_preload_checks = 0;
		function mce_preload_check(){
		    if (mce_preload_checks>40) return;
		    mce_preload_checks++;
		    try {
		        var jqueryLoaded=jQuery;
		    } catch(err) {
		        setTimeout('mce_preload_check();', 250);
		        return;
		    }
		    try {
		        var validatorLoaded=jQuery("#fake-form").validate({});
		    } catch(err) {
		        setTimeout('mce_preload_check();', 250);
		        return;
		    }
		    mce_init_form();
		}
		function mce_init_form(){
		    jQuery(document).ready( function($) {
		      var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
		      var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
		      $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
		      options = { url: 'http://fairgrieveandhorner.us2.list-manage.com/subscribe/post-json?u=1a730ad6957b6c1ecca3b4bd6&id=c09d976dcc&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
		                    beforeSubmit: function(){
		                        $('#mce_tmp_error_msg').remove();
		                        $('.datefield','#mc_embed_signup').each(
		                            function(){
		                                var txt = 'filled';
		                                var fields = new Array();
		                                var i = 0;
		                                $(':text', this).each(
		                                    function(){
		                                        fields[i] = this;
		                                        i++;
		                                    });
		                                $(':hidden', this).each(
		                                    function(){
		                                        var bday = false;
		                                        if (fields.length == 2){
		                                            bday = true;
		                                            fields[2] = {'value':1970};//trick birthdays into having years
		                                        }
		                                    	if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
		                                    		this.value = '';
											    } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
		                                    		this.value = '';
											    } else {
											        if (/\[day\]/.test(fields[0].name)){
		    	                                        this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;									        
											        } else {
		    	                                        this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
			                                        }
			                                    }
		                                    });
		                            });
		                        return mce_validator.form();
		                    }, 
		                    success: mce_success_cb
		                };
		      $('#mc-embedded-subscribe-form').ajaxForm(options);


		    });
		}
		function mce_success_cb(resp){
		    $('#mce-success-response').hide();
		    $('#mce-error-response').hide();
		    if (resp.result=="success"){
		        $('#mce-'+resp.result+'-response').show();
		        $('#mce-'+resp.result+'-response').html(resp.msg);
		        $('#mc-embedded-subscribe-form').each(function(){
		            this.reset();
		    	});
		    } else {
		        var index = -1;
		        var msg;
		        try {
		            var parts = resp.msg.split(' - ',2);
		            if (parts[1]==undefined){
		                msg = resp.msg;
		            } else {
		                i = parseInt(parts[0]);
		                if (i.toString() == parts[0]){
		                    index = parts[0];
		                    msg = parts[1];
		                } else {
		                    index = -1;
		                    msg = resp.msg;
		                }
		            }
		        } catch(e){
		            index = -1;
		            msg = resp.msg;
		        }
		        try{
		            if (index== -1){
		                $('#mce-'+resp.result+'-response').show();
		                $('#mce-'+resp.result+'-response').html(msg);            
		            } else {
		                err_id = 'mce_tmp_error_msg';
		                html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';

		                var input_id = '#mc_embed_signup';
		                var f = $(input_id);
		                if (ftypes[index]=='address'){
		                    input_id = '#mce-'+fnames[index]+'-addr1';
		                    f = $(input_id).parent().parent().get(0);
		                } else if (ftypes[index]=='date'){
		                    input_id = '#mce-'+fnames[index]+'-month';
		                    f = $(input_id).parent().parent().get(0);
		                } else {
		                    input_id = '#mce-'+fnames[index];
		                    f = $().parent(input_id).get(0);
		                }
		                if (f){
		                    $(f).append(html);
		                    $(input_id).focus();
		                } else {
		                    $('#mce-'+resp.result+'-response').show();
		                    $('#mce-'+resp.result+'-response').html(msg);
		                }
		            }
		        } catch(e){
		            $('#mce-'+resp.result+'-response').show();
		            $('#mce-'+resp.result+'-response').html(msg);
		        }
		    }
		}

		</script>
		<!--End mc_embed_signup-->

		
		
		<?php /*?><a href="https://twitter.com/eatenbymonsters" class="twitter-follow-button" data-show-count="true" data-lang="en">Follow @eatenbymonsters</a>
		<?php */?>
	    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		
		<?php if( is_home() /*|| is_page( array( 'about', 'contact', 'colophon' ) )*/ ) {?>
			<aside id="recent-articles">
				<h2>Popular Articles</h2>
				<div class="clearfix">
					<?php $the_query = new WP_Query( 'showposts=3&category_name=article' ); ?>
			    	<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
			         	<div class="mini-post clearfix">
			            	<a href="<?php the_permalink() ?>">
			               		<div class="mini-image">
			                  		<?php if ( has_post_thumbnail() ) {the_post_thumbnail('thumbnail');}?>
			               		</div>
			               		<div class="mini-excerpt">
			                  		<h3><?php the_title(); ?></h3>
			               		</div>
			            	</a>
			         	</div>
			      	<?php endwhile;?>
				</div>
			</aside>
		
		<?php } else {?>
			<aside id="recent-posts">
				<h2>Recent Reviews</h2>
				<div class="clearfix">
					<?php $the_query = new WP_Query( 'showposts=3&category_name=review' ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
					<div class="mini-post clearfix">
						<a href="<?php the_permalink() ?>">
							<div class="mini-image">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail('thumbnail');
								}?>
							</div>
							<div class="mini-excerpt">
								<h3><?php echo get_post_meta($post->ID, 'band-name', true);?></h3>
								<p><?php echo get_post_meta($post->ID, 'mini-description', true);?></p>
							</div>
						</a>
					</div>
					<?php endwhile;?>
				</div>
			</aside>
		<?php }?>
		
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
	</div><!-- #tertiary .widget-area -->
<?php endif; ?>