<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ark Technologies</title>
		<link rel="icon" type="image/x-icon" href="img/fav-icon.png">
		<?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
  <?php  wp_body_open(); ?>
	<header>
		<?php
		$header_logo = get_option("header_logo");
		$phone_number = get_option("phone_number");
		$whatsapp_link = get_option("whatsapp_link");
		?>
		<!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
  {
  "symbols": [
    {
      "proName": "FOREXCOM:SPXUSD",
      "title": "S&P 500"
    },
    {
      "proName": "FOREXCOM:NSXUSD",
      "title": "US 100"
    },
    {
      "proName": "FX_IDC:EURUSD",
      "title": "EUR to USD"
    },
    {
      "proName": "BITSTAMP:BTCUSD",
      "title": "Bitcoin"
    },
    {
      "proName": "BITSTAMP:ETHUSD",
      "title": "Ethereum"
    }
  ],
  "showSymbolLogo": true,
  "colorTheme": "light",
  "isTransparent": false,
  "displayMode": "adaptive",
  "locale": "in"
}
  </script>
</div>
<!-- TradingView Widget END -->
		<div class="header_mainsec">
			<div class="container">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="<?php echo site_url();?>">
						<img src="<?php echo $header_logo; ?>" />
					</a>
					
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
						//  wp_nav_menu( array(
						// 	'theme_location' => 'header_menu',
						// 	'menu_class' => 'navbar-nav',
						// 	'container_class' => 'collapse navbar-collapse',
						// 	'container_id' => 'navbarSupportedContent',
						// 	)
						// ); 
					?>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav">
							<li class="nav-item active">
								<a class="nav-link" href="#">About Us</a>
							</li>
							
							<li class="nav-item">
								<a class="nav-link" href="#">Contact Us</a>
							</li>
						</ul>
						
						<div class="contact_infosec">
							<!-- <a href="tel:<?php echo $phone_number; ?>"><?php echo $phone_number; ?></a> -->
							<a href="<?php echo $whatsapp_link; ?>">
								<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/whatsapp.png">
							</a>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>