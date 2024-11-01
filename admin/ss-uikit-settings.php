<?php
if(isset($_POST['btn_setting'])){
	$uikit_main = isset($_POST['uikit_main']) ? 1 : 0;
	$uikit_javascript = isset($_POST['uikit_javascript']) ? 1 : 0;
	$jquery = isset($_POST['jquery']) ? 1 : 0;
	$uikit_addon_style = isset($_POST['uikit_addon_style']) ? 1 : 0;
	$navigations = isset($_POST['navigations']) ? 1 : 0;
	$Dotnav = isset($_POST['Dotnav']) ? 1 : 0;
	$Sildenav = isset($_POST['Sildenav']) ? 1 : 0;
	$COMMON = isset($_POST['COMMON']) ? 1 : 0;
	$Formadvanced = isset($_POST['Formadvanced']) ? 1 : 0;
	$Formfile = isset($_POST['Formfile']) ? 1 : 0;
	$Formselect = isset($_POST['Formselect']) ? 1 : 0;
	$Formpassword = isset($_POST['Formpassword']) ? 1 : 0;
	$Placeholder = isset($_POST['Placeholder']) ? 1 : 0;
	$JAVASCRIPT = isset($_POST['JAVASCRIPT']) ? 1 : 0;
	$Autocomplete = isset($_POST['Autocomplete']) ? 1 : 0;
	$Datepicker = isset($_POST['Datepicker']) ? 1 : 0;
	$HTMLeditor = isset($_POST['HTMLeditor']) ? 1 : 0;
	$Notify = isset($_POST['Notify']) ? 1 : 0;
	$Pagination = isset($_POST['Pagination']) ? 1 : 0;
	$Search = isset($_POST['Search']) ? 1 : 0;
	$Nestable = isset($_POST['Nestable']) ? 1 : 0;
	$Sortable = isset($_POST['Sortable']) ? 1 : 0;
	$Timepicker = isset($_POST['Timepicker']) ? 1 : 0;
	$Sticky = isset($_POST['Sticky']) ? 1 : 0;
	$Upload = isset($_POST['Upload']) ? 1 : 0;
	$debug = isset($_POST['debug']) ? 1 : 0;
	
	update_option('uikit_type', $_POST['uikit_type']);
	update_option('uikit_main', $uikit_main);
	update_option('uikit_javascript', $uikit_javascript);
	update_option('jquery', $jquery);
	update_option('uikit_addon_style', $uikit_addon_style);
	update_option('navigations', $navigations);
	update_option('Dotnav', $Dotnav);
	update_option('Sildenav', $Sildenav);
	update_option('COMMON', $COMMON);
	update_option('Formadvanced', $Formadvanced);
	update_option('Formfile', $Formfile);
	update_option('Formselect', $Formselect);
	update_option('Formpassword', $Formpassword);
	update_option('Placeholder', $Placeholder);
	update_option('JAVASCRIPT', $JAVASCRIPT);
	update_option('Autocomplete', $Autocomplete);
	update_option('Datepicker', $Datepicker);
	update_option('HTMLeditor', $HTMLeditor);
	update_option('Notify', $Notify);
	update_option('Pagination', $Pagination);
	update_option('Search', $Search);
	update_option('Nestable', $Nestable);
	update_option('Sortable', $Sortable);
	update_option('Sticky', $Sticky);
	update_option('Timepicker', $Timepicker);
	update_option('Upload', $Upload);
	update_option('debug', $debug);
	
	$_SERVER['success_msg'] = 'Record updated Successfully.';
	} ?>
<div class="wrap">
	<h2>SS UiKit Settings</h2>
	<hr />
	<p>Learn more about the UIKit framework <a href="http://getuikit.com/" target="_blank">here</a>.</p>
	<p>We love UIKit. This plugin was written by <a href="http://spotlightstudios.co.uk/" target="_blank">Spotlight Studios</a> to make implementing UIKit into websites easier. You can find out more about this plugin <a href="http://spotlightstudios.co.uk/" target="_blank">here</a>.</p>
	<br />
	<div class="content">
	<?php if(isset($_SESSION['success_msg'])){?>
	<div class="update-nag" style=" margin: 0px; padding: 0px 10px; border-left: 4px solid green; width: 98%; ">
		<h4><?php echo $_SESSION['success_msg']; unset($_SESSION['success_msg']); ?></h4>
	</div>
	<?php } ?>

	<?php $sel = 'selected=\"selected\" '; ?>
	<form name="import_frm" action="" method="post" enctype="multipart/form-data"> 
		<h2>Load UIKit</h2>
		<hr />
		<table width="30%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<input <?php if(get_option('uikit_main') == 1)echo ' checked '; ?> id="uikit_main" type="checkbox" value="<?php if(get_option('uikit_main') == 1)echo '1'; ?>" name="uikit_main"/><label for="uikit_main">Enable UiKit</label>
				</td>
				<td>
					<select name="uikit_type">
						<option <?php if(get_option('uikit_type') == 'Basic'){echo $sel;} ?> value="Basic">Basic</option>
						<option <?php if(get_option('uikit_type') == 'Almost-Flat'){echo $sel;} ?> value="Almost-Flat">Almost-Flat</option>
						<option <?php if(get_option('uikit_type') == 'Gradient'){echo $sel;} ?> value="Gradient">Gradient</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					<input <?php if(get_option('uikit_javascript') == 1)echo ' checked '; ?> id="uikit_javascript" type="checkbox" value="<?php if(get_option('uikit_javascript') == 1)echo '1'; ?>" name="uikit_javascript"/><label for="uikit_javascript">Enable Javascript</label>
				</td>
			</tr>
			<tr>
				<td>
					<input <?php if(get_option('uikit_addon_style') == 1)echo ' checked '; ?> id="uikit_addon_style" type="checkbox" value="<?php if(get_option('uikit_addon_style') == 1)echo '1'; ?>" name="uikit_addon_style"/><label for="uikit_addon_style">Enable Add-ons Style</label>
				</td>
			</tr>
		</table>
		<br />
		<h2>Load Jquery</h2>
		<hr />
		<table width="30%" border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<input <?php if(get_option('jquery') == 1)echo ' checked '; ?> id="jquery" type="checkbox" value="<?php if(get_option('jquery') == 1)echo '1'; ?>" name="jquery"/><label for="jquery">Enable JQuery</label>
				</td>
				<td>
					<select name="jquery_type">
						<option <?php if(get_option('jquery_type') == 'jq1'){echo $sel;} ?> value="jq1">jquery-1.11.1</option>
						<option <?php if(get_option('jquery_type') == 'jq2'){echo $sel;} ?> value="jq2">jquery-2.1.1</option>
					</select>
				</td>
			</tr>
		</table>
		<br />
		<h2>Load UIKit Add-ons</h2>
		<hr />
		<table class="navigation common_table" width="20%" border="0" cellpadding="0" cellspacing="0" style="float:left">
			<?php $nav_array = array('Dotnav', 'Sildenav', ); ?>   
			   <tr>
				 <td><input <?php if(get_option('navigations') == 1)echo ' checked '; ?> class="parent_navigation" id="navigations" type="checkbox" value="<?php if(get_option('navigations') == 1)echo '1'; ?>" name="navigations"/>
				   <strong><label for="navigations">NAVIGATIONS</label></strong></td>
			   </tr>
			<?php foreach($nav_array as $nav){?>
				<tr>
				 <td><input <?php if(get_option($nav) == 1)echo ' checked '; ?> class="child" id="<?php echo $nav; ?>" type="checkbox" value="<?php if(get_option($nav) == 1)echo '1'; ?>" name="<?php echo $nav; ?>"/>
				   <label for="<?php echo $nav; ?>"><?php echo $nav; ?></label></td>
			   </tr>
			<?php	 } ?>      
		</table>
		 
		<table class="common common_table" width="20%" border="0" cellpadding="0" cellspacing="0" style="float:left">
			<tr>
				<td><input <?php if(get_option('COMMON') == 1)echo ' checked '; ?> id="common" class="parent_common" type="checkbox" value="<?php if(get_option('COMMON') == 1)echo '1'; ?>" name="COMMON"/>
				<strong><label for="common">COMMON</label></strong></td>
			</tr>
			<?php $common_array = array('Form advanced', 'Form file', 'Form select', 'Form password', 'Pagination', 'Placeholder'); ?> 
			<?php foreach($common_array as $cmn){?>
			<tr>
				<td><input <?php if(get_option(str_replace(' ', '',$cmn)) == 1)echo ' checked '; ?>  class="child" id="<?php echo str_replace(' ', '',$cmn); ?>" type="checkbox" value="<?php if(get_option(str_replace(' ', '',$cmn)) == 1)echo '1'; ?>" name="<?php echo str_replace(' ', '',$cmn); ?>"/>
				<label for="<?php echo str_replace(' ', '',$cmn); ?>"><?php echo $cmn; ?></label></td>
			</tr>
			<?php	 } ?>  
		</table>
	 
		<table class="javascript common_table" width="20%" border="0" cellspacing="0" cellpadding="0" style="float:left">
			<tr>
				<td><input <?php if(get_option('JAVASCRIPT') == 1)echo ' checked '; ?> class="parent_javascript" id="javascript" type="checkbox" value="<?php if(get_option('JAVASCRIPT') == 1)echo '1'; ?>" name="JAVASCRIPT"/>
				<strong><strong><label for="javascript">JAVASCRIPT</label></strong></strong></td>
			</tr>
			<?php $js_array = array('Autocomplete', 'Datepicker', 'HTML editor', 'Notify', 'Search', 'Nestable', 'Sortable', 'Sticky', 'Timepicker', 'Upload'); ?> 
			<?php foreach($js_array as $js){?>
			<tr>
				<td><input <?php if(get_option(str_replace(' ', '',$js)) == 1)echo ' checked '; ?> class="child" id="<?php echo str_replace(' ', '',$js); ?>" type="checkbox" value="<?php if(get_option(str_replace(' ', '',$js)) == 1)echo '1'; ?>" name="<?php echo str_replace(' ', '',$js); ?>"/>
				<label for="<?php echo str_replace(' ', '',$js); ?>"><?php echo $js; ?></label></td>
			</tr>
			<?php	 } ?> 
		</table>
		<div style="clear:both"></div>
		<p><input type="submit" value="Save Setting" name="btn_setting" class="button button-primary button-large" /></p>
		<div style="clear:both"></div>
		<input <?php if(get_option('debug') == 1)echo ' checked '; ?> id="debug" type="checkbox" value="<?php if(get_option('debug') == 1)echo '1'; ?>" name="debug"/><label for="debug">Enable Debug Mode</label>
	</form>
</div>
<script>
	jQuery(function(){

		jQuery(".parent_navigation").bind('click', function(){  
			if(jQuery(this).is(":checked")) {  
				jQuery(".navigation input[type='checkbox'].child").attr ( "checked" , jQuery(this).attr("checked" ) );	  
			}else{ 	 
				jQuery(".navigation input[type='checkbox'].child").removeAttr("checked");		  
			}
			});

			jQuery(".parent_common").bind('click', function(){  
			if(jQuery(this).is(":checked")) {  
				jQuery(".common input[type='checkbox'].child").attr ( "checked" , jQuery(this).attr("checked" ) );	  
			}else{ 	 
				jQuery(".common input[type='checkbox'].child").removeAttr("checked");		  
			}
			});

			jQuery(".parent_javascript").bind('click', function(){  
			if(jQuery(this).is(":checked")) {  
				jQuery(".javascript .child").attr ( "checked" , jQuery(this).attr("checked" ) );	  
			}else{ 	 
				jQuery(".javascript .child").removeAttr("checked");		  
			}
		});
	});
</script>