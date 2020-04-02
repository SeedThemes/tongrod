<?php
function cptui_register_my_cpts() {

	/**
	 * Post Type: หน่วยงาน.
	 */

	$labels = [
		"name" => __( "หน่วยงาน", "tongrod" ),
		"singular_name" => __( "หน่วยงาน", "tongrod" ),
		"menu_name" => __( "หน่วยงาน", "tongrod" ),
		"all_items" => __( "รายชื่อหน่วยงาน", "tongrod" ),
		"add_new" => __( "เพิ่ม", "tongrod" ),
		"add_new_item" => __( "เพิ่มหน่วยงาน", "tongrod" ),
		"edit_item" => __( "แก้ไขหน่วยงาน", "tongrod" ),
		"new_item" => __( "เพิ่มหน่วยงาน", "tongrod" ),
		"view_item" => __( "ดูหน่วยงาน", "tongrod" ),
		"view_items" => __( "ดูหน่วยงาน", "tongrod" ),
		"search_items" => __( "ค้นหาหน่วยงาน", "tongrod" ),
		"not_found" => __( "ไม่พบหน่วยงาน", "tongrod" ),
		"not_found_in_trash" => __( "ไม่พบหน่วยงานในถังขยะ", "tongrod" ),
		"parent" => __( "หน่วยงานหลัก:", "tongrod" ),
		"featured_image" => __( "ภาพหน่วยงาน", "tongrod" ),
		"set_featured_image" => __( "ตั้งเป็นภาพหลักหน่วยงาน", "tongrod" ),
		"remove_featured_image" => __( "ลบภาพหน่วยงาน", "tongrod" ),
		"use_featured_image" => __( "ตั้งเป็นภาพหลักหน่วยงาน", "tongrod" ),
		"archives" => __( "รวมหน่วยงาน", "tongrod" ),
		"insert_into_item" => __( "เพิ่มไปที่หน่วยงาน", "tongrod" ),
		"uploaded_to_this_item" => __( "อัปโหลดไปที่หน่วยงาน", "tongrod" ),
		"filter_items_list" => __( "กรองหน่วยงาน", "tongrod" ),
		"items_list_navigation" => __( "นำทางไปที่รายชื่อหน่วยงาน", "tongrod" ),
		"items_list" => __( "รายชื่อหน่วยงาน", "tongrod" ),
		"attributes" => __( "คุณสมบัติหน่วยงาน", "tongrod" ),
		"name_admin_bar" => __( "หน่วยงาน", "tongrod" ),
		"item_published" => __( "เผยแพร่ข้อมูลหน่วยงานแล้ว", "tongrod" ),
		"item_published_privately" => __( "เผยแพร่ข้อมูลหน่วยงานแบบส่วนตัวแล้ว", "tongrod" ),
		"item_reverted_to_draft" => __( "ปรับหน่วยงานเป็นแบบร่าง", "tongrod" ),
		"item_scheduled" => __( "ตั้งเวลาเผยแพร่หน่วยงานแล้ว", "tongrod" ),
		"item_updated" => __( "อัปเดตหน่วยงานแล้ว", "tongrod" ),
		"parent_item_colon" => __( "หน่วยงานหลัก:", "tongrod" ),
	];

	$args = [
		"label" => __( "หน่วยงาน", "tongrod" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "unit", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-building",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "unit", $args );

	/**
	 * Post Type: ความต้องการ.
	 */

	$labels = [
		"name" => __( "ความต้องการ", "tongrod" ),
		"singular_name" => __( "ความต้องการ", "tongrod" ),
		"menu_name" => __( "ความต้องการ", "tongrod" ),
		"all_items" => __( "ความต้องการทั้งหมด", "tongrod" ),
		"add_new" => __( "เพิ่ม", "tongrod" ),
		"add_new_item" => __( "เพิ่มความต้องการ", "tongrod" ),
		"edit_item" => __( "Edit ความต้องการ", "tongrod" ),
		"new_item" => __( "New ความต้องการ", "tongrod" ),
		"view_item" => __( "View ความต้องการ", "tongrod" ),
		"view_items" => __( "View ความต้องการ", "tongrod" ),
		"search_items" => __( "Search ความต้องการ", "tongrod" ),
		"not_found" => __( "No ความต้องการ found", "tongrod" ),
		"not_found_in_trash" => __( "No ความต้องการ found in trash", "tongrod" ),
		"parent" => __( "Parent ความต้องการ:", "tongrod" ),
		"featured_image" => __( "Featured image for this ความต้องการ", "tongrod" ),
		"set_featured_image" => __( "Set featured image for this ความต้องการ", "tongrod" ),
		"remove_featured_image" => __( "Remove featured image for this ความต้องการ", "tongrod" ),
		"use_featured_image" => __( "Use as featured image for this ความต้องการ", "tongrod" ),
		"archives" => __( "ความต้องการ archives", "tongrod" ),
		"insert_into_item" => __( "Insert into ความต้องการ", "tongrod" ),
		"uploaded_to_this_item" => __( "Upload to this ความต้องการ", "tongrod" ),
		"filter_items_list" => __( "Filter ความต้องการ list", "tongrod" ),
		"items_list_navigation" => __( "ความต้องการ list navigation", "tongrod" ),
		"items_list" => __( "ความต้องการ list", "tongrod" ),
		"attributes" => __( "ความต้องการ attributes", "tongrod" ),
		"name_admin_bar" => __( "ความต้องการ", "tongrod" ),
		"item_published" => __( "ความต้องการ published", "tongrod" ),
		"item_published_privately" => __( "ความต้องการ published privately.", "tongrod" ),
		"item_reverted_to_draft" => __( "ความต้องการ reverted to draft.", "tongrod" ),
		"item_scheduled" => __( "ความต้องการ scheduled", "tongrod" ),
		"item_updated" => __( "ความต้องการ updated.", "tongrod" ),
		"parent_item_colon" => __( "Parent ความต้องการ:", "tongrod" ),
	];

	$args = [
		"label" => __( "ความต้องการ", "tongrod" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "need", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "need", $args );

	/**
	 * Post Type: ความช่วยเหลือ.
	 */

	$labels = [
		"name" => __( "ความช่วยเหลือ", "tongrod" ),
		"singular_name" => __( "ความช่วยเหลือ", "tongrod" ),
		"menu_name" => __( "ความช่วยเหลือ", "tongrod" ),
		"all_items" => __( "รายการความช่วยเหลือ", "tongrod" ),
		"add_new" => __( "เพิ่ม", "tongrod" ),
		"add_new_item" => __( "เพิ่มความช่วยเหลือ", "tongrod" ),
		"edit_item" => __( "แก้ไขความช่วยเหลือ", "tongrod" ),
		"new_item" => __( "ความช่วยเหลือใหม่", "tongrod" ),
		"view_item" => __( "ดูความช่วยเหลือ", "tongrod" ),
		"view_items" => __( "ดูความช่วยเหลือ", "tongrod" ),
		"search_items" => __( "ค้นหาความช่วยเหลือ", "tongrod" ),
		"not_found" => __( "ไม่พบความช่วยเหลือ", "tongrod" ),
		"not_found_in_trash" => __( "ไม่พบความช่วยเหลือในถังขยะ", "tongrod" ),
		"parent" => __( "ความช่วยเหลือหลัก:", "tongrod" ),
		"featured_image" => __( "Featured image for this ความช่วยเหลือ", "tongrod" ),
		"set_featured_image" => __( "Set featured image for this ความช่วยเหลือ", "tongrod" ),
		"remove_featured_image" => __( "Remove featured image for this ความช่วยเหลือ", "tongrod" ),
		"use_featured_image" => __( "Use as featured image for this ความช่วยเหลือ", "tongrod" ),
		"archives" => __( "ความช่วยเหลือ archives", "tongrod" ),
		"insert_into_item" => __( "Insert into ความช่วยเหลือ", "tongrod" ),
		"uploaded_to_this_item" => __( "Upload to this ความช่วยเหลือ", "tongrod" ),
		"filter_items_list" => __( "Filter ความช่วยเหลือ list", "tongrod" ),
		"items_list_navigation" => __( "ความช่วยเหลือ list navigation", "tongrod" ),
		"items_list" => __( "ความช่วยเหลือ list", "tongrod" ),
		"attributes" => __( "ความช่วยเหลือ attributes", "tongrod" ),
		"name_admin_bar" => __( "ความช่วยเหลือ", "tongrod" ),
		"item_published" => __( "ความช่วยเหลือ published", "tongrod" ),
		"item_published_privately" => __( "ความช่วยเหลือ published privately.", "tongrod" ),
		"item_reverted_to_draft" => __( "ความช่วยเหลือ reverted to draft.", "tongrod" ),
		"item_scheduled" => __( "ความช่วยเหลือ scheduled", "tongrod" ),
		"item_updated" => __( "ความช่วยเหลือ updated.", "tongrod" ),
		"parent_item_colon" => __( "ความช่วยเหลือหลัก:", "tongrod" ),
	];

	$args = [
		"label" => __( "ความช่วยเหลือ", "tongrod" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "support", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-sos",
		"supports" => [ "title", "editor", "thumbnail", "revisions" ],
	];

	register_post_type( "support", $args );

	/**
	 * Post Type: รายรับรายจ่าย.
	 */

	$labels = [
		"name" => __( "รายรับรายจ่าย", "tongrod" ),
		"singular_name" => __( "รายรับรายจ่าย", "tongrod" ),
		"menu_name" => __( "รายรับรายจ่าย", "tongrod" ),
		"all_items" => __( "รายรับรายจ่ายทั้งหมด", "tongrod" ),
	];

	$args = [
		"label" => __( "รายรับรายจ่าย", "tongrod" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "transaction", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-media-spreadsheet",
		"supports" => [ "title", "editor", "thumbnail" ],
	];

	register_post_type( "transaction", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );