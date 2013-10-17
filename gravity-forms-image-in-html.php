<?php
/*
Plugin Name: Gravity Forms Image In HTML
Plugin URI: http://angeleswebdesign.com
Description: Adds a button to Gravity Forms form editor HTML input field to insert or upload an image via Wordpress media uploader.
Author: Ethan Piliavin
Version: 1.0
*/

// Thank you: 
// http://wpsmith.net/2011/plugins/how-to-create-a-custom-form-field-in-gravity-forms-with-a-terms-of-service-form-field-example/


add_action("gform_field_standard_settings", "giih_standard_settings", 10, 2);
function giih_standard_settings($position, $form_id)
{
    //create settings on position 225 (right after HTML content area)
    if($position == 225)
	{
        ?>	
        <li class="add_image_button field_setting">
			<input type="button" class="button upload_image_button" value="<?php _e("Insert Image", "giih'")?>" onclick="triggerMedia(jQuery(this).parent().siblings('.content_setting').find('textarea'));"/>
        </li>
        <?php
    }
}

// Add the Editor Form JS
add_action( "gform_editor_js", "giih_gform_editor_js" );
function giih_gform_editor_js(){

	wp_enqueue_media(); 
?>
<script type='text/javascript'>

	var file_frame;
	function triggerMedia(target) {
	
	//console.log(target);

		// If the media frame already exists, reopen it.
		if ( file_frame ) {
		  file_frame.open();
		  return;
		}

		// Create the media frame.
		file_frame = wp.media.frames.file_frame = wp.media({
		  title: jQuery( this ).data( 'uploader_title' ),
		  button: {
			text: jQuery( this ).data( 'uploader_button_text' ),
		  },
		  multiple: false  // Set to true to allow multiple files to be selected
		});
		
		// When an image is selected, run a callback.
		file_frame.on( 'select', function() {
		  // We set multiple to false so only get one image from the uploader
		  attachment = file_frame.state().get('selection').first().toJSON();

		  htmltag = '<img src="'+attachment.url+'" style="max-width:100%;" />'; 

		  InsertVariable( target.attr('id'), null, htmltag  );

		  // trigger the change event to fire any functions tied to this input's onchange
		  target.change();	
		});

		// Finally, open the modal
		file_frame.open();
	}

	jQuery(document).ready(function($) {

		//add the button 'setting' to html fields
		fieldSettings["html"] += ", .add_image_button"; 		
	});
 
</script>
<?php
}


?>
