<?php
  header('Content-type: text/css');
?>

body.wp-admin div#wpwrap { background: <?php echo $this->get_wps_option('background'); ?>; }
ul#adminmenu a.wp-has-current-submenu:after, ul#adminmenu>li.current>a.current:after { border-right-color: <?php echo $this->get_wps_option('background'); ?>; }
/* Headings */
h1 { color: <?php echo $this->get_wps_option('h1_color'); ?>; }
h2 { color: <?php echo $this->get_wps_option('h2_color'); ?>; }
h3 { color: <?php echo $this->get_wps_option('h3_color'); ?>; }
h4 { color: <?php echo $this->get_wps_option('h4_color'); ?>; }
h5 { color: <?php echo $this->get_wps_option('h5_color'); ?>; }
/* Admin Bar */
#wpadminbar, #wpadminbar .menupop .ab-sub-wrapper { background: <?php echo $this->get_wps_option('admin_bar_color'); ?>;}
#wpadminbar a.ab-item, #wpadminbar>#wp-toolbar span.ab-label, #wpadminbar>#wp-toolbar span.noticon { color: <?php echo $this->get_wps_option('admin_bar_menu_color'); ?> }

#wpadminbar .ab-top-menu>li>.ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar .ab-top-menu>li:hover>.ab-item, #wpadminbar .ab-top-menu>li.hover>.ab-item, #wpadminbar .quicklinks .menupop ul li a:focus, #wpadminbar .quicklinks .menupop ul li a:focus strong, #wpadminbar .quicklinks .menupop ul li a:hover, #wpadminbar-nojs .ab-top-menu>li.menupop:hover>.ab-item, #wpadminbar .ab-top-menu>li.menupop.hover>.ab-item, #wpadminbar .quicklinks .menupop ul li a:hover strong, #wpadminbar .quicklinks .menupop.hover ul li a:focus, #wpadminbar .quicklinks .menupop.hover ul li a:hover, #wpadminbar li .ab-item:focus:before, #wpadminbar li a:focus .ab-icon:before, #wpadminbar li.hover .ab-icon:before, #wpadminbar li.hover .ab-item:before, #wpadminbar li:hover #adminbarsearch:before, #wpadminbar li:hover .ab-icon:before, #wpadminbar li:hover .ab-item:before, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:focus, #wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover, #wpadminbar li:hover .ab-item:after, #wpadminbar>#wp-toolbar a:focus span.ab-label, #wpadminbar>#wp-toolbar li.hover span.ab-label, #wpadminbar>#wp-toolbar li:hover span.ab-label { color: <?php echo $this->get_wps_option('admin_bar_menu_hover_color'); ?> }

.quicklinks li.wpshape_site_title { width: 230px !important; <?php if($this->get_wps_option('logo_top_margin') != 0) echo 'margin-top:-' . $this->get_wps_option('logo_top_margin') . 'px !important;'; if($this->get_wps_option('logo_bottom_margin') != 0) echo 'margin-top:' . $this->get_wps_option('logo_bottom_margin') . 'px !important;'; ?>}
.quicklinks li.wpshape_site_title a{ margin-left:20px !important; outline:none; border:none;
<?php 
$admin_logo_id = $this->get_wps_option('admin_logo');
$admin_logo_url = $this->get_wps_image_url($admin_logo_id);
if(!empty($admin_logo_url)){ ?>
background:url(<?php echo $admin_logo_url;  ?>) left 4px no-repeat !important; text-indent:-9999px !important; width: auto !important; 
<?php } ?>
 }
#wpadminbar .ab-top-menu>li>.ab-item:focus, #wpadminbar-nojs .ab-top-menu>li.menupop:hover>.ab-item, #wpadminbar.nojq .quicklinks .ab-top-menu>li>.ab-item:focus, #wpadminbar .ab-top-menu>li:hover>.ab-item, #wpadminbar .ab-top-menu>li.menupop.hover>.ab-item, #wpadminbar .ab-top-menu>li.hover>.ab-item { background: none }
/* Buttons */
.wp-core-ui .button,.wp-core-ui .button-secondary{color:<?php echo $this->get_wps_option('sec_button_text_color'); ?>;border-color:<?php echo $this->get_wps_option('sec_button_border_color'); ?>;background:<?php echo $this->get_wps_option('sec_button_color'); ?>;-webkit-box-shadow:inset 0 1px 0 <?php echo $this->get_wps_option('sec_button_shadow_color'); ?>,0 1px 0 rgba(0,0,0,.08);box-shadow:inset 0 1px 0 <?php echo $this->get_wps_option('sec_button_shadow_color'); ?>,0 1px 0 rgba(0,0,0,.08);}

.wp-core-ui .button-secondary:focus, .wp-core-ui .button-secondary:hover, .wp-core-ui .button.focus, .wp-core-ui .button.hover, .wp-core-ui .button:focus, .wp-core-ui .button:hover { border-color:<?php echo $this->get_wps_option('sec_button_hover_border_color'); ?>;background:<?php echo $this->get_wps_option('sec_button_hover_color'); ?>; }

.wp-core-ui .button-primary { background: <?php echo $this->get_wps_option('pry_button_color'); ?>; border-color:<?php echo $this->get_wps_option('pry_button_border_color'); ?>; color: <?php echo $this->get_wps_option('pry_button_text_color'); ?>; -webkit-box-shadow:inset 0 1px 0 rgba(235, 224, 224, 0.49),0 1px 0 rgba(0,0,0,.15); box-shadow: inset 0 1px 0 rgba(235, 224, 224, 0.49),0 1px 0 rgba(0,0,0,.15);}
.wp-core-ui .button-primary.focus, .wp-core-ui .button-primary.hover, .wp-core-ui .button-primary:focus, .wp-core-ui .button-primary:hover { background: <?php echo $this->get_wps_option('pry_button_hover_color'); ?>; border-color:<?php echo $this->get_wps_option('pry_button_hover_border_color'); ?>; color: <?php echo $this->get_wps_option('pry_button_text_color'); ?>; -webkit-box-shadow:inset 0 1px 0 <?php echo $this->get_wps_option('pry_button_shadow_color'); ?>,0 1px 0 rgba(0,0,0,.15); box-shadow: inset 0 1px 0 <?php echo $this->get_wps_option('pry_button_shadow_color'); ?>,0 1px 0 rgba(0,0,0,.15);}
/* Left Menu */
#adminmenuback, #adminmenuwrap, #adminmenu { background: <?php echo $this->get_wps_option('nav_wrap_color'); ?>;}
#adminmenu div.wp-menu-image:before, #adminmenu a, #adminmenu .wp-submenu a, #collapse-menu, #collapse-button div:after { color: <?php echo $this->get_wps_option('nav_text_color'); ?>; }
#adminmenu li:hover div.wp-menu-image:before { color: <?php echo $this->get_wps_option('menu_hover_text_color'); ?>; }
#adminmenu li.menu-top:hover, #adminmenu li.menu-top a:hover, #adminmenu li.opensub>a.menu-top, #adminmenu li>a.menu-top:focus { background: <?php echo $this->get_wps_option('hover_menu_color'); ?>; color: <?php echo $this->get_wps_option('menu_hover_text_color'); ?>; }

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu, #adminmenu li.current a.menu-top, .folded #adminmenu li.wp-has-current-submenu, .folded #adminmenu li.current.menu-top, #adminmenu .wp-menu-arrow, #adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head, #adminmenu .wp-menu-arrow div { background: <?php echo $this->get_wps_option('active_menu_color'); ?>; }

#adminmenu .wp-submenu li.current a:focus, #adminmenu .wp-submenu li.current a:hover, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu li.current a { color: <?php echo $this->get_wps_option('menu_hover_text_color'); ?>; }

#adminmenu .wp-has-current-submenu .wp-submenu, .no-js li.wp-has-current-submenu:hover .wp-submenu, #adminmenu a.wp-has-current-submenu:focus+.wp-submenu, #adminmenu .wp-has-current-submenu .wp-submenu.sub-open, #adminmenu .wp-has-current-submenu.opensub .wp-submenu, #adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu{ background: <?php echo $this->get_wps_option('sub_nav_wrap_color'); ?>; }
#adminmenu .wp-not-current-submenu .wp-submenu, .folded #adminmenu .wp-has-current-submenu .wp-submenu { width: 200px; }
#adminmenu li.wp-has-submenu.wp-not-current-submenu.opensub:hover:after { border-right-color:<?php echo $this->get_wps_option('sub_nav_wrap_color'); ?> }

#wpadminbar .quicklinks .menupop ul li a, #wpadminbar .quicklinks .menupop ul li a strong, #wpadminbar .quicklinks .menupop.hover ul li a, #wpadminbar.nojs .quicklinks .menupop:hover ul li a { color: <?php echo $this->get_wps_option('admin_bar_menu_color'); ?>; font-size:13px !important }

#adminmenu .wp-menu-image img { padding: 6px 0 0 }

/* Metabox handles */
.menu.ui-sortable .menu-item-handle, .meta-box-sortables.ui-sortable .hndle, .sortUls div.menu_handle { background: <?php echo $this->get_wps_option('metabox_h3_color'); ?>; border: 1px solid <?php echo $this->get_wps_option('metabox_h3_border_color'); ?>; color: <?php echo $this->get_wps_option('metabox_handle_color'); ?>; }
ol.sortUls a.plus:before, ol.sortUls a.minus:before { color: <?php echo $this->get_wps_option('metabox_handle_color'); ?>; }
.postbox .accordion-section-title:after, .handlediv, .item-edit, .sidebar-name-arrow, .widget-action, .sortUls a.admin_menu_edit { color:<?php echo $this->get_wps_option('metabox_text_color'); ?>}
.postbox .accordion-section-title:hover:after, .handlediv:hover, .item-edit:hover, .sidebar-name:hover .sidebar-name-arrow, .widget-action:hover, .sortUls a.admin_menu_edit:hover { color: <?php echo $this->get_wps_option('metabox_handle_hover_color'); ?> }

/* Option conditional logics */
tr.wpshapere_email_from_addr, tr.wpshapere_email_from_name {
<?php if($this->get_wps_option('email_settings') == 1)
	echo 'display: none';
?>
}
tr.wpshapere_privilege_users {
<?php if($this->get_wps_option('show_all_menu_to_admin') == 1)
	echo 'display: none';
?>
}

/* Menu Icons */
<?php
	$this->wpsiconStyles();
?>

<?php echo $this->get_wps_option('admin_page_custom_css'); ?>