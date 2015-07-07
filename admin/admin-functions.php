<?php

/*-----------------------------------------------------------------------------------*/
/* Add default options after activation */
/*-----------------------------------------------------------------------------------*/
//@since 2.0 Mod by denzel, replace the previous functions that does not work..
function propanel_default_settings_install(){

if(is_admin()):
 
	global $pagenow;
	
	// check if we are on theme activation page and activated is true.
	if(@$pagenow == 'themes.php' && @$_GET['activated'] == true):

	//if we are on theme activation page, do the following..
	
		$template = get_option('of_template');

			foreach($template as $t):
				@$option_name = $t['id'];
				@$default_value = $t['std'];
				$value_check = get_option("$option_name");
				if($value_check == ''){
				  update_option("$option_name","$default_value");
				}	
		
			endforeach;
	endif; //end if $pagenow
  
endif; //end if is_admin check

}
add_action('init','propanel_default_settings_install',90);



/*-----------------------------------------------------------------------------------*/
/* Admin Backend */
/*-----------------------------------------------------------------------------------*/
function propanel_siteoptions_admin_head() { ?>

<script type="text/javascript">
jQuery(function(){
var message = '<p><strong>Activation Successful!</strong> This theme\'s settings are located under <a href="<?php echo admin_url('admin.php?page=siteoptions'); ?>">Appearance > Site Options</a>.</p>';
jQuery('.themes-php #message2').html(message);
});
</script>
    
    
    <?php }

add_action('admin_head', 'propanel_siteoptions_admin_head');
?>