<footer>
		<div class="footer_mainsec">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<div class="copyright_mainsec">
							<?php
							$whatsapp_link = get_option("whatsapp_link");
							$footer_copyright = get_option("footer_copyright");
							echo $footer_copyright; 
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<a href="<?php echo $whatsapp_link; ?>" class="whatsapp_btn_icon">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.png">
	</a>
	<?php wp_footer(); ?>
	<script type="text/javascript">
		var $ = jQuery;
		$(document).ready(function() {
			$('.select_account select').on('change', function(){
		    var v = $(this).val();
		    console.log(v, '=========')
		    if(v == 'Account Open') {
		      $('.aadhaar_card').show();
		      $('.pan_card').show();
		      $('.bank_account_statement').show();
		    }
		    else {
		      $('.aadhaar_card').hide();
		      $('.pan_card').hide();
		      $('.bank_account_statement').hide();
		    }
		  })
		}); 
	</script>
  </body>
</html>