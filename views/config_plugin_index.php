<?php
$sBaseDirName = dirname(__FILE__).ICWP_DS;
include_once( $sBaseDirName.'config_header.php' );
?>
		<?php if ( $icwp_fShowAds ) : ?>
			<div class="row" id="worpit_promo">
				<div class="span12">
					<?php echo getWidgetIframeHtml( 'dashboard-widget-worpit-wtb' ); ?>
				</div>
			</div><!-- / row -->

		<?php endif; ?>

		<div class="row">
			<div class="<?php echo $icwp_fShowAds? 'span9' : 'span12'; ?>">
				<form action="<?php echo $icwp_form_action; ?>" method="post" class="form-horizontal">
				<?php
					wp_nonce_field( $icwp_nonce_field );
					printAllPluginOptionsForm( $icwp_aAllOptions, $icwp_var_prefix, 1 );
				?>
					<div class="form-actions">
						<input type="hidden" name="<?php echo $icwp_var_prefix; ?>all_options_input" value="<?php echo $icwp_all_options_input; ?>" />
						<input type="hidden" name="<?php echo $icwp_var_prefix; ?>plugin_form_submit" value="Y" />
						<button type="submit" class="btn btn-primary" name="submit"><?php _calqio_e( 'Save All Settings' ); ?></button>
					</div>
				</form>
				
			</div><!-- / span9 -->
		
			<?php if ( $icwp_fShowAds ) : ?>
			<div class="span3" id="side_widgets">
		  		<?php echo getWidgetIframeHtml('side-widgets-wtb'); ?>
			</div>
			<?php endif; ?>
		</div><!-- / row -->

		<?php include_once( dirname(__FILE__).'/widgets/icwp_common_widgets.php' ); ?>

<?php include_once( $sBaseDirName.'config_footer.php' );