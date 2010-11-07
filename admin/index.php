<?php
/**
 * Login
 *
 * Allows access to the GetSimple control panel
 *
 * @package GetSimple
 * @subpackage Login
 */

// Setup inclusions
$load['login'] = true;
$load['plugin'] = true;

// Include common.php
include('inc/common.php');
?> 

<?php get_template('header', cl($SITENAME).' &raquo; '.i18n_r('LOGIN')); ?>

<h1><a href="<?php echo $SITEURL; ?>" target="_blank" ><?php echo cl($SITENAME); ?></a> <span>&raquo;</span> <?php i18n('LOGIN'); ?></h1>
</div>
</div>
<div class="wrapper">
	
<?php if($MSG) { ?><div class="error"><?php echo $MSG; ?></div><?php } ?>

	<div class="bodycontent">
	
	<div id="maincontent">
		<div class="main" >
	<h3><?php i18n('CONTROL_PANEL'); ?></h3>
	<?php exec_action('index-login'); ?>
	<form class="login" action="<?php echo $cookie_login; ?>" method="post">
		<p><b><?php i18n('USERNAME'); ?>:</b><br /><input type="text" class="text" id="userid" name="userid" /></p>
		<p><b><?php i18n('PASSWORD'); ?>:</b><br /><input type="password" class="text" id="pwd" name="pwd" /></p>
		<p><input type="submit" name="submitted" class="submit" value="<?php i18n('LOGIN'); ?>" /></p>
	</form>
	<p><a href="resetpassword.php"><?php i18n('FORGOT_PWD'); ?></a></p>

		</div>
	</div>
	
		<div id="sidebar" >
		<div class="section">
			<h3><?php i18n('LOGIN_REQUIREMENT'); ?></h3>
			<p>&bull;&nbsp; <?php i18n('WARN_JS_COOKIES'); ?></p>
			<?php exec_action('login-reqs'); ?>
		</div>
		</div>	
	
	<div class="clear"></div>
	</div>
<?php get_template('footer'); ?>