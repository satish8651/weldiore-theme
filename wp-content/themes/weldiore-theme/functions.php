<?php
/** Weldiore theme functions. */
if (!defined('ABSPATH')) exit;
function weldiore_setup(){
  load_theme_textdomain('weldiore', get_template_directory().'/languages');
  add_theme_support('title-tag'); add_theme_support('post-thumbnails'); add_theme_support('responsive-embeds');
  add_theme_support('html5', array('search-form','comment-form','comment-list','gallery','caption','style','script'));
  add_theme_support('custom-logo', array('height'=>90,'width'=>260,'flex-height'=>true,'flex-width'=>true));
  register_nav_menus(array('primary'=>__('Primary Menu','weldiore'),'footer'=>__('Footer Menu','weldiore')));
  add_image_size('weldiore-card', 720, 900, true); add_image_size('weldiore-hero', 1400, 1500, true);
}
add_action('after_setup_theme','weldiore_setup');
function weldiore_assets(){
  wp_enqueue_style('weldiore-style', get_stylesheet_uri(), array(), '1.0.0');
  wp_enqueue_script('weldiore-script', get_template_directory_uri().'/assets/js/theme.js', array(), '1.0.0', true);
  wp_localize_script('weldiore-script','weldioreData',array('ajaxUrl'=>admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts','weldiore_assets');
function weldiore_register_content(){
  register_post_type('weldiore_product',array('labels'=>array('name'=>'Products','singular_name'=>'Product','add_new_item'=>'Add New Product','edit_item'=>'Edit Product','all_items'=>'All Products'),'public'=>true,'has_archive'=>'products','rewrite'=>array('slug'=>'products','with_front'=>false),'menu_icon'=>'dashicons-products','supports'=>array('title','editor','excerpt','thumbnail','revisions'),'show_in_rest'=>true));
  register_taxonomy('weldiore_product_cat','weldiore_product',array('labels'=>array('name'=>'Product Categories','singular_name'=>'Product Category'),'hierarchical'=>true,'show_admin_column'=>true,'show_in_rest'=>true,'rewrite'=>array('slug'=>'product-category')));
  register_taxonomy('weldiore_material','weldiore_product',array('labels'=>array('name'=>'Materials','singular_name'=>'Material'),'hierarchical'=>false,'show_admin_column'=>true,'show_in_rest'=>true));
  register_post_type('weldiore_lead',array('labels'=>array('name'=>'Quote Enquiries','singular_name'=>'Quote Enquiry','edit_item'=>'View Enquiry','all_items'=>'Quote Enquiries'),'public'=>false,'show_ui'=>true,'show_in_menu'=>true,'menu_icon'=>'dashicons-email-alt','supports'=>array('title','editor'),'capability_type'=>'post','map_meta_cap'=>true));
}
add_action('init','weldiore_register_content');
function weldiore_activate(){weldiore_register_content();flush_rewrite_rules();}
register_activation_hook(__FILE__,'weldiore_activate');
function weldiore_deactivate(){flush_rewrite_rules();}
register_deactivation_hook(__FILE__,'weldiore_deactivate');
function weldiore_product_meta(){
  add_meta_box('weldiore_specs','Product Specifications','weldiore_specs_callback','weldiore_product','normal','default');
}
add_action('add_meta_boxes','weldiore_product_meta');
function weldiore_specs_callback($post){
  wp_nonce_field('weldiore_save_specs','weldiore_specs_nonce');
  $fields=array('material'=>'Material','dimensions'=>'Dimensions','colour'=>'Colour options','branding'=>'Branding options','moq'=>'Minimum order quantity','lead_time'=>'Indicative lead time');
  echo '<p>Only enter confirmed product information. Leave unknown fields blank.</p>';
  foreach($fields as $key=>$label){$value=get_post_meta($post->ID,'_weldiore_'.$key,true);echo '<p><label style="display:block;font-weight:600;margin-bottom:5px" for="weldiore_'.$key.'">'.esc_html($label).'</label><input style="width:100%" type="text" id="weldiore_'.$key.'" name="weldiore_specs['.esc_attr($key).']" value="'.esc_attr($value).'"></p>';}
}
function weldiore_save_specs($post_id){
 if(!isset($_POST['weldiore_specs_nonce'])||!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['weldiore_specs_nonce'])),'weldiore_save_specs'))return;
 if(defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE)return;if(!current_user_can('edit_post',$post_id))return;
 $allowed=array('material','dimensions','colour','branding','moq','lead_time');$data=isset($_POST['weldiore_specs'])?(array)wp_unslash($_POST['weldiore_specs']):array();
 foreach($allowed as $key){if(isset($data[$key]))update_post_meta($post_id,'_weldiore_'.$key,sanitize_text_field($data[$key]));else delete_post_meta($post_id,'_weldiore_'.$key);}
}
add_action('save_post_weldiore_product','weldiore_save_specs');
function weldiore_lead_status_meta(){add_meta_box('weldiore_lead_status','Enquiry Status','weldiore_lead_status_callback','weldiore_lead','side','high');}
add_action('add_meta_boxes','weldiore_lead_status_meta');
function weldiore_lead_status_callback($post){wp_nonce_field('weldiore_save_lead_status','weldiore_lead_status_nonce');$status=get_post_meta($post->ID,'_weldiore_status',true)?:'New';$statuses=array('New','Contacted','Qualified','Quotation Sent','Negotiation','Won','Lost');echo '<select name="weldiore_lead_status" style="width:100%">';foreach($statuses as $s)echo '<option '.selected($status,$s,false).' value="'.esc_attr($s).'">'.esc_html($s).'</option>';echo '</select>';}
function weldiore_save_lead_status($post_id){if(!isset($_POST['weldiore_lead_status_nonce'])||!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['weldiore_lead_status_nonce'])),'weldiore_save_lead_status'))return;if(defined('DOING_AUTOSAVE')&&DOING_AUTOSAVE)return;if(!current_user_can('edit_post',$post_id))return;if(isset($_POST['weldiore_lead_status']))update_post_meta($post_id,'_weldiore_status',sanitize_text_field(wp_unslash($_POST['weldiore_lead_status'])));}
add_action('save_post_weldiore_lead','weldiore_save_lead_status');
function weldiore_lead_columns($columns){return array('cb'=>$columns['cb'],'title'=>'Enquiry','weldiore_status'=>'Status','date'=>'Received');}
add_filter('manage_weldiore_lead_posts_columns','weldiore_lead_columns');
function weldiore_lead_column_content($column,$post_id){if($column==='weldiore_status')echo esc_html(get_post_meta($post_id,'_weldiore_status',true)?:'New');}
add_action('manage_weldiore_lead_posts_custom_column','weldiore_lead_column_content',10,2);
function weldiore_handle_quote(){
 if($_SERVER['REQUEST_METHOD']!=='POST'||!isset($_POST['weldiore_quote_submit']))return;
 if(!isset($_POST['weldiore_quote_nonce'])||!wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['weldiore_quote_nonce'])),'weldiore_quote')){wp_safe_redirect(add_query_arg('quote','error',wp_get_referer()?:home_url('/request-a-quote/')));exit;}
 if(!empty($_POST['website_url'])){wp_safe_redirect(add_query_arg('quote','sent',wp_get_referer()?:home_url('/request-a-quote/')));exit;}
 $name=sanitize_text_field(wp_unslash($_POST['full_name']??''));$company=sanitize_text_field(wp_unslash($_POST['company']??''));$email=sanitize_email(wp_unslash($_POST['email']??''));$phone=sanitize_text_field(wp_unslash($_POST['phone']??''));$category=sanitize_text_field(wp_unslash($_POST['product_category']??''));$quantity=sanitize_text_field(wp_unslash($_POST['quantity']??''));$requirement=sanitize_text_field(wp_unslash($_POST['requirement']??''));$deadline=sanitize_text_field(wp_unslash($_POST['deadline']??''));$product=absint($_POST['product_id']??0);$brief=sanitize_textarea_field(wp_unslash($_POST['brief']??''));
 if(!$name||!$company||!is_email($email)){wp_safe_redirect(add_query_arg('quote','invalid',wp_get_referer()?:home_url('/request-a-quote/')));exit;}
 $title=sprintf('%s — %s', $company, $name);$body="Name: $name\nCompany: $company\nEmail: $email\nPhone: $phone\nCategory: $category\nQuantity: $quantity\nRequirement: $requirement\nTarget delivery: $deadline\nProduct ID: $product\n\nProject brief:\n$brief";
 $lead_id=wp_insert_post(array('post_type'=>'weldiore_lead','post_status'=>'private','post_title'=>$title,'post_content'=>$body),true);
 if(is_wp_error($lead_id)){wp_safe_redirect(add_query_arg('quote','error',wp_get_referer()?:home_url('/request-a-quote/')));exit;}
 update_post_meta($lead_id,'_weldiore_status','New');update_post_meta($lead_id,'_weldiore_email',$email);update_post_meta($lead_id,'_weldiore_company',$company);
 $to=get_option('admin_email');$subject='New Weldiore B2B quote enquiry: '.$company;$headers=array('Reply-To: '.$name.' <'.$email.'>');wp_mail($to,$subject,$body,$headers);
 wp_safe_redirect(add_query_arg('quote','sent',wp_get_referer()?:home_url('/request-a-quote/')));exit;
}
add_action('template_redirect','weldiore_handle_quote');
function weldiore_quote_form($product_id=0){$status=sanitize_key($_GET['quote']??'');if($status==='sent')echo '<div class="notice" role="status">Thank you. Your enquiry has been received. Our team will review your requirements.</div>';elseif($status==='invalid')echo '<div class="notice error" role="alert">Please check your name, company and valid business email, then try again.</div>';elseif($status==='error')echo '<div class="notice error" role="alert">We could not submit your enquiry. Please try again or contact us directly.</div>';
 echo '<form class="form-card" method="post" action="'.esc_url(get_permalink()).'#quote-form" id="quote-form">';wp_nonce_field('weldiore_quote','weldiore_quote_nonce');echo '<input type="hidden" name="weldiore_quote_submit" value="1"><input type="hidden" name="product_id" value="'.absint($product_id).'">';
 echo '<div class="form-grid"><div class="field"><label for="full_name">Full name *</label><input id="full_name" name="full_name" required autocomplete="name"></div><div class="field"><label for="company">Company / brand *</label><input id="company" name="company" required autocomplete="organization"></div><div class="field"><label for="email">Business email *</label><input id="email" type="email" name="email" required autocomplete="email"></div><div class="field"><label for="phone">Phone / WhatsApp</label><input id="phone" name="phone" autocomplete="tel"></div><div class="field"><label for="product_category">Product category</label><select id="product_category" name="product_category"><option value="">Choose category</option><option>Handbags</option><option>Tote bags</option><option>Shoulder / crossbody bags</option><option>Clutches</option><option>Wallets / small leather goods</option><option>Custom design / other</option></select></div><div class="field"><label for="quantity">Estimated order quantity</label><select id="quantity" name="quantity"><option value="">Choose quantity</option><option>Under 100</option><option>100–499</option><option>500–999</option><option>1,000–4,999</option><option>5,000+</option><option>Not decided</option></select></div><div class="field full"><label for="requirement">Manufacturing requirement</label><select id="requirement" name="requirement"><option>Private label</option><option>OEM / reference design</option><option>Existing catalogue product</option><option>Custom development</option></select></div><div class="field"><label for="deadline">Target delivery (optional)</label><input id="deadline" name="deadline" placeholder="e.g. March 2027"></div><div class="field"><label for="website_url">Leave this field empty</label><input id="website_url" name="website_url" tabindex="-1" autocomplete="off" aria-hidden="true"></div><div class="field full"><label for="brief">Project brief</label><textarea id="brief" name="brief" placeholder="Materials, design references, branding, destination market or other requirements"></textarea></div><div class="field full"><button class="btn" type="submit">Send Enquiry <span aria-hidden="true">↗</span></button><p class="form-note">Your details will be used to respond to this manufacturing enquiry. See our privacy policy for more information.</p></div></div></form>';
}
function weldiore_get_image($post_id,$size='large',$fallback=''){if(has_post_thumbnail($post_id))return get_the_post_thumbnail_url($post_id,$size);return $fallback?:'https://images.unsplash.com/photo-1584917865442-de89df76afd3?auto=format&fit=crop&w=1000&q=85';}
function weldiore_excerpt($post_id,$words=18){$excerpt=get_the_excerpt($post_id);return wp_trim_words($excerpt?:wp_strip_all_tags(get_post_field('post_content',$post_id)),$words,'…');}
function weldiore_product_categories(){return get_terms(array('taxonomy'=>'weldiore_product_cat','hide_empty'=>false));}
function weldiore_seed_pages(){if(get_option('weldiore_seeded'))return;$pages=array('home'=>'Home','about-weldiore'=>'About Weldiore','custom-manufacturing'=>'Custom Manufacturing','manufacturing-quality'=>'Manufacturing & Quality','industries-served'=>'Industries Served','request-a-quote'=>'Request a Quote','contact'=>'Contact Us','insights'=>'Insights');foreach($pages as $slug=>$title){if(!get_page_by_path($slug)){wp_insert_post(array('post_type'=>'page','post_status'=>'publish','post_title'=>$title,'post_name'=>$slug,'post_content'=>''));}}update_option('weldiore_seeded',1);}
add_action('after_switch_theme','weldiore_seed_pages');

/** Import the full supplied product catalogue once per version; safe to run on theme activation or admin load. */
function weldiore_seed_catalogue(){
 if(get_option('weldiore_catalogue_version')==='2026-10-full-catalogue-v2') return;
 $data_file=get_template_directory().'/catalogue-products.json';
 if(!file_exists($data_file)) return;
 $items=json_decode(file_get_contents($data_file),true);
 if(!is_array($items)) return;
 // Remove only the initial sample entries shipped in the earlier Weldiore theme build.
 $legacy=array('LC7001','LC7002','LC7003','LC7004','LC7005','LC7006','LC7007','LC7008','LC7009','LC7010','LC7011','LC7012','ITEM-140-01','ITEM-140-02','ITEM-140-03','ITEM-140-04','ITEM-140-05');
 foreach($legacy as $legacy_code){$old=get_posts(array('post_type'=>'weldiore_product','post_status'=>'any','meta_key'=>'_weldiore_style_code','meta_value'=>$legacy_code,'numberposts'=>-1,'fields'=>'ids'));foreach($old as $old_id) wp_delete_post((int)$old_id,true);}
 foreach(array('Leather Laptop & Work Bags','Leather & Fashion Bags') as $cat){if(!term_exists($cat,'weldiore_product_cat')) wp_insert_term($cat,'weldiore_product_cat');}
 foreach($items as $item){
  $code=sanitize_text_field($item['code']??''); if(!$code) continue;
  $existing=get_posts(array('post_type'=>'weldiore_product','post_status'=>'any','meta_key'=>'_weldiore_style_code','meta_value'=>$code,'numberposts'=>1,'fields'=>'ids'));
  $post_data=array('post_type'=>'weldiore_product','post_status'=>'publish','post_title'=>sanitize_text_field($item['title']),'post_excerpt'=>sanitize_text_field($item['desc']),'post_content'=>wp_kses_post('<p>'.esc_html($item['desc']).'</p><h2>Bulk manufacturing enquiries</h2><p>Contact Weldiore to confirm model details, materials, dimensions, branding options, minimum order quantity, pricing and lead time.</p><h2>Request a quotation</h2><p>Share your required quantity, target delivery date and customization requirements to receive a project-specific quotation.</p>'));
  if($existing){$id=(int)$existing[0];$post_data['ID']=$id;wp_update_post($post_data);}else{$id=wp_insert_post($post_data);}
  if(is_wp_error($id)||!$id) continue;
  update_post_meta($id,'_weldiore_style_code',$code);
  update_post_meta($id,'_weldiore_material',sanitize_text_field($item['material']??''));
  if(!empty($item['moq'])) update_post_meta($id,'_weldiore_moq',sanitize_text_field($item['moq']));
  update_post_meta($id,'_weldiore_source_catalogue',sanitize_text_field($item['source']??''));
  update_post_meta($id,'_weldiore_source_page',absint($item['page']??0));
  $term=term_exists($item['category'],'weldiore_product_cat');
  if($term) wp_set_object_terms($id,array((int)(is_array($term)?$term['term_id']:$term)),'weldiore_product_cat');
  $path=get_template_directory().'/assets/images/'.basename($item['image']??'');
  if(file_exists($path)){
   $attached=get_posts(array('post_type'=>'attachment','post_status'=>'inherit','meta_key'=>'_weldiore_catalogue_image','meta_value'=>$code,'numberposts'=>1,'fields'=>'ids'));
   if($attached){$attachment=(int)$attached[0];}
   else {$filetype=wp_check_filetype(basename($path),null);$attachment=wp_insert_attachment(array('post_mime_type'=>$filetype['type'],'post_title'=>sanitize_text_field($item['title']),'post_status'=>'inherit'),$path,$id);if($attachment&&!is_wp_error($attachment)) update_post_meta($attachment,'_weldiore_catalogue_image',$code);}
   if($attachment&&!is_wp_error($attachment)){require_once ABSPATH.'wp-admin/includes/image.php';$metadata=wp_generate_attachment_metadata($attachment,$path);wp_update_attachment_metadata($attachment,$metadata);set_post_thumbnail($id,$attachment);}
  }
 }
 update_option('weldiore_catalogue_version','2026-10-full-catalogue-v2');
 update_option('weldiore_catalogue_seeded',1);
}
add_action('after_switch_theme','weldiore_seed_catalogue',20);
add_action('admin_init','weldiore_seed_catalogue',30);

