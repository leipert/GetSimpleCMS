<?php
/**
 * Footer Admin Template
 *
 * @package GetSimple
 *
 * //ADDED by leipert:  Removed footer links and changed picture.
 */

?>
		<div id="footer">
      		<div class="footer-left" >
      		<?php
	  		include(GSADMININCPATH ."configuration.php");

      		if(!isAuthPage()){ ?>
	      		<p>
					<a href="http://cityfield.de/" target="_blank" >
						<img src="template/images/cityfield_logo.jpg" alt="Cityfield Content Management System" />
					</a><br>
					&copy; 2013-<?php echo date('Y'); ?> <a href="http://cityfield.de/" target="_blank" >Cityfield CMS</a>
					<?php echo '&ndash;'. i18n_r('VERSION') .' '. $site_version_no;  ?>
	      		</p> 
      		</div> <!-- end .footer-left -->
	      	<div class="clear"></div>
	      	<?php
		      		get_scripts_backend(TRUE);
		      		exec_action('footer'); 
	      		}
	      	?>

		</div><!-- end #footer -->
		<?php
		if(!isAuthPage()) {
			if (isDebug()){
				global $GS_debug;
				echo '<h2>'.i18n_r('DEBUG_CONSOLE').'</h2><div id="gsdebug">';
				echo '<pre>';
				foreach ($GS_debug as $log){
					print($log.'<br/>');
				}
				echo '</pre>';	
				echo '</div>';
			}
		}
		?>
	</div><!-- end .wrapper -->



</body>
</html>