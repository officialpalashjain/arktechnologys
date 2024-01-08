<?php 
/* Template Name: Home Template */ 
get_header();
?>
	<div class="banner_mainsec" style="background-image:url(<?php echo get_field( 'section_one_bg_image' ); ?>);">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="contnt_sec">
						<h1><?php echo get_field( 'section_one_heading' ); ?></h1>
						<p><?php echo get_field( 'section_one_content' ); ?></p>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="video_box">
						<video controls autoplay>
							<source src="<?php echo get_field( 'video_url' ); ?>" type="video/mp4">
						</video>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="about_section" class="about_mainsec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="contnt_sec">
						<h1><?php echo get_field( 'section_two_heading' ); ?></h1>
						<p><?php echo get_field( 'section_two_content' ); ?></p>
					</div>
				</div>
				
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="qr_code_img">
						<img src="<?php echo get_field( 'section_two_image' ); ?>" alt="<?php echo get_image_alt_by_url(get_field( 'section_two_image' )); ?>"/>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="download_mainsec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="title_sec">
						<h2>Download</h2>
					</div>
					
					<div class="download_btnsec">
						<?php
						$android_app = get_option("android_app");
						$iphone_app = get_option("iphone_app");
						?>
						<a target="_blank" href="<?php echo str_replace("\\", '', $android_app); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/google-playstore.png" /></a>
						<a target="_blank" href="<?php echo str_replace("\\", '', $iphone_app); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/apple-appstore.png" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="client_demo_mainsec">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
					<div class="title_sec">
						<h2>Client Demo Details</h2>
					</div>
					
					<div class="contnt_sec">
						<p><strong>USERNAME-</strong> demo300</p>
						<p><strong>PASSWORD-</strong> 123123</p>
						<p><strong>Server-</strong> Real Desks</p>
					</div>
					
					<div class="btn_mainsec">
						<a target="_blank" class="btn_style" href="https://itz.arktechltd.com:250/">Client PC</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="contact_section" class="contact_form_mainsec">
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="contact_infosec">
						<div class="contact_infobox">
							<h2>Contact</h2>
							<?php
							$contact_Person = get_option("contact_Person");
						    $ac_no = get_option("ac_no");
						    $IFSC_code = get_option("IFSC_code");
						    $bank_name = get_option("bank_name");
						    $phone_pay = get_option("phone_pay");
						    $payment_mode_and_terms = get_option("payment_mode_and_terms");
						    ?>
							<p><strong>Contact Person:</strong> <?php echo $contact_Person; ?></p>
							<p><strong>A/C No.:</strong> <?php echo $ac_no; ?></p>
							<p><strong>IFSC Code:</strong> <?php echo $IFSC_code; ?></p>
							<p><strong>Bank Name:</strong> <?php echo $bank_name; ?></p>
							<p><strong>Phone Pay:</strong>  <?php echo $phone_pay; ?></p>
							<p><strong>Payment Mode and Terms:</strong> <?php echo $payment_mode_and_terms; ?>.</p>
						</div>
						
						<div class="bottom_txt">
							<p>Kindly save these details for future 🔮 trasactions</p>
							<p>✨📈ARK TRADERS📈✨</p>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
					<div class="form_mainsec">
						<?php 
						$contactform = get_field( 'contact_form' );
						echo do_shortcode($contactform); 
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php 
get_footer();
?>