=== My upload images ===
Contributors: Mizuho Ogino
Tags: media uploader, upload, image, custom field, cms
Plugin URI: http://web.contempo.jp/weblog/tips/p617
Requires at least: 4.0
Tested up to: 4.2.2
Stable tag: 1.3.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Create metabox with media uploader. It allows to upload and sort images in any post_type. 



== Description ==
This plugin create the metabox with the media uploader into any post types. In the metabox, You can drag images into any order you like. The IDs and the order of images will put on record in the customfield of your posts as array. 
= Attention =
Available only for WordPress 4.0+. 


== Screenshots ==
1. Select post types you’d like to display metabox.
2. Just upload and sort images.



== Installation ==
1. Copy the ‘my-upload-images’ folder into your plugins folder.
2. Activate the plugin via the ‘Plugins‘ admin page. The plugin requires the setup of selecting post_types which you want to add metabox.

= Example code =
The image IDs are stored in [‘my_upload_images’] custom field. When to output the IDs into your template file, write codes like below.

<code>
$my_upload_images = get_post_meta( $post-&gt;ID, 'my_upload_images', true );
if ( $my_upload_images ): foreach( $my_upload_images as $key =&gt; $img_id ):
  $thumb_src = wp_get_attachment_image_src ($img_id,'thumbnail');
  $full_src = wp_get_attachment_image_src ($img_id,'large');
  if ( !$img_title = get_the_title($img_id) ) $img_title = get_the_title( $post-&gt;ID );
  echo '&lt;a href="'.$full_src[0].'" title="'.esc_attr( $img_title ).'"&gt;&lt;img src="'.$thumb_src[0].'" width="'.$thumb_src[1].'" height="'.$thumb_src[2].'"/&gt;&lt;/a&gt;'."\n";
endforeach; endif;
</code>

= Attention =
The custom field doesn’t have multiple values, it just has become an array in a single value. When you call them with ‘get_post_meta’ function, do not set the third parameter to ‘false’.



== Changelog ==
= 1.3.3 =
07.June.2015. Add selector of position of metabax

= 1.3.2 =
10.May.2015. Auto generate post thumbnail by plugin

= 1.3.1 =
15.Jan.2015. Fixed Javascript

= 1.3 =
10.Jan.2015. First public version Release

= 1.0 =
Apr.2014. Initial Release



