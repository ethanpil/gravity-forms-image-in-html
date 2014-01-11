=== Gravity Forms Image in HTML ===
Contributors: ethanpil
Tags: gravity, gravity forms, media, image, upload, insert image, uploader
Requires at least: 3.0
Tested up to: 3.8
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds a button to Gravity Forms form editor HTML input field to insert or upload an image via Wordpress media uploader.

== Description ==

> This plugin is an add-on for the [Gravity Forms Plugin](http://gravityforms.com "visit the Gravity Forms website").

Do you need to insert images into Gravity Forms HTML fields? Hate manually uploading and creating <img> tags? Me too! Thats why I created this simple plugin for Gravity Forms which adds a button to every HTML field in the Gravity Forms form editor. Click the button and insert or upload an image using the standard Wordpress media uploader.

Usage:
1. Add an HTML field to your form.
2. Click the new "Insert Image" button.
3. Upload a new image or select an existing image.
4. The <img> tag is inserted into the HTML field at the position of the cursor.

Important Notes:
I added an attribute to every <img> tag of:
    
	style="max-width:100%"
 
This prevents large images for breaking the forms. You can easily remove it from the insert, but it shouldn't break anything if you leave it.
 
Fork away: https://github.com/ethanpil/gravity-forms-image-in-html

This WordPress plugin is brought to you by [Los Angeles Web Design](https://www.angeleswebdesign.com "Los Angeles Web Design WordPress Experts")

Future Plans:
1. Add Support for Gravity Forms WYSIWYG - http://wordpress.org/plugins/gravity-forms-wysiwyg/

== Installation ==

Like every other Wordpress plugin! :)

1. Upload all the files from gravity-forms-image-in-html.zip into a folder within the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

     
== Screenshots ==

1. The HTML field with the new Insert Image button.

== Changelog ==

= 1.0 =

* Initial Release
