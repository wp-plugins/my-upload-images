=== My upload images ===
Contributors: web.contempo.jp
Tags: media uploader, upload, image, custom field
Plugin URI: http://web.contempo.jp/weblog/tips/p617
Requires at least: 4.0
Tested up to: 4.1
Stable tag: 1.3.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create metabox with media uploader. It allows to upload and sort images in any post_type. 



== Description ==
This plugin create the metabox with the media uploader in any post types you want. In the metabox, You can drag images into any order you want. The IDs and the order of images will put on record in the customfield of your posts as array.
= Attension =
Available only for WordPress 4.0+. 



== Screenshots ==
1. Just upload and sort images.



== Installation ==
1. Copy the ‘my-upload-images’ folder into your plugins folder.
2. Activate the plugin via the ‘Plugins‘ admin page. The plugin requires the setup of selecting post_types which you want to add metabox.
3. The Image IDs are stored in [‘my_upload_images’] customfield. If you want to output the values of the custom field into your template file, write codes like below.

= Example code =
<code>
$my_upload_images = get_post_meta( $post-&gt;ID, 'my_upload_images', true );
if ( $my_upload_images ): foreach( $my_upload_images as $key =&gt; $img_id ):
  $thumb_src = wp_get_attachment_image_src ($img_id,'thumbnail');
  $full_src = wp_get_attachment_image_src ($img_id,'large');
  echo '&lt;a href="'.$full_src[0].'"&gt;&lt;img src="'.$thumb_src[0].'" width="'.$thumb_src[1].'" height="'.$thumb_src[2].'"/&gt;&lt;/a&gt;'."\n";
endforeach; endif; 
</code>

= Attention =
The custom field doesn’t have multiple values, it just has become an array in a single value. When you call them with ‘get_post_meta’ function, do not set the third parameter to ‘false’.



== Changelog ==
= 1.3 =
Jan 2015. First public version Release.
= 1.0 =
Apr 2014. Initial Release.



