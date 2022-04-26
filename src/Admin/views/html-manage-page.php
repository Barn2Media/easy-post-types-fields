<?php
/**
 * The HTML markup of the Manage page
 *
 * @param Post_Type_List_Table $post_type_list_table The list table instance (a subclass of WP_List_Table)
 * @param Barn2\EPT_Lib\Plugin\Plugin $plugin The main instance of the plugin
 * @param string $new_link The link to add a new post type
 */
namespace Barn2\Plugin\Easy_Post_Types_Fields\Admin;

defined( 'ABSPATH' ) || exit;

?>

<div class="barn2-plugins-settings">
	<div class="wrap">

		<?php
		require 'html-manage-page-header.php';
		require 'html-manage-page-breadcrumb.php';
		require "html-manage-page-$content.php";
		?>

	</div>
</div>

<?php
