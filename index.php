<?php $page = isset( $_GET['page'] ) ? $_GET['page'] : ""; ?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title>DCG.CSS</title>
		
		<link rel="stylesheet" type="text/css" href="dcg.css?version=<?php filemtime('dcg.css'); ?>">
	</head>
	
	<body class="dcg-sans-serif dcg-white dcg-margin-none">
		<div class="dcg-container">
			<nav class="dcg-nav dcg-nav-dark">
				<a class="dcg-nav-item dcg-lingrad-hover-alt-dark" href="/dcgcss"><b>DCG.CSS</b></a>
				<a class="dcg-nav-item dcg-lingrad-hover-alt-dark" href="/dcgcss/typography">Typography</a>
				<a class="dcg-nav-item dcg-lingrad-hover-alt-dark" href="/dcgcss/navigation">Navigation</a>
			</nav>
			
			<div class="dcg-padding">
			<?php
			switch( $page ) {
				default:
					?>
						<div class="dcg-xxxlarge dcg-center dcg-padding-top-xlarge"><b>Welcome to DCG.CSS!</b></div>
						<div class="dcg-large dcg-center dcg-padding-bottom-xlarge">Your web project. Your way.</div>
						<div class="dcg-jumbo">&nbsp;</div>
						<div class="dcg-center dcg-padding dcg-padding-top-xlarge"><b>Get Started Fast!</b></div>
						<div class="dcg-center dcg-padding dcg-padding-top-xlarge dcg-padding-bottom-xlarge">Link to DCG.CSS like any other CSS file.</div>
<pre class="dcg-code">
&lt;link rel="stylesheet" type="text/css" href="https://www.davecomputergeek.scot/dcgcss/dcg.css"&gt;
</pre>
						<div class="dcg-center dcg-padding">For new projects by lazy developers like me, here is a full HTML example.</div>
<pre class="dcg-code">
&lt;!DOCTYPE html&gt;
&lt;html lang="en"&gt;
	&lt;head&gt;
		&lt;meta charset="UTF-8"&gt;
		&lt;meta name="viewport" content="width=device-width, initial-scale=1"&gt;
		
		&lt;title&gt;Untitled Page&lt;/title&gt;
		
		&lt;link rel="stylesheet" type="text/css" href="https://www.davecomputergeek.scot/dcgcss/dcg.css"&gt;
	&lt;/head&gt;
	
	&lt;body&gt;
		
	&lt;/body&gt;
&lt;/html&gt;
</pre>
						
					<?php
					break;
				case "typography":
					echo '<div class="dcg-xxlarge dcg-padding-bottom dcg-bold">Typogaphy</div>
						<div class="dcg-bold dcg-large dcg-padding-bottom">Text Sizes</div>
						<div class="dcg-small">Small</div>
						<div class="dcg-normal">Normal</div>
						<div class="dcg-large">Large</div>
						<div class="dcg-xlarge">xLarge</div>
						<div class="dcg-xxlarge">xxLarge</div>
						<div class="dcg-xxxlarge">xxxLarge</div>
						<div class="dcg-jumbo">Jumbo</div>';
					break;
				case "navigation":
					echo '<div class="dcg-xxlarge"><b>Navigation</b></div>
					<div class="dcg-bold dcg-large dcg-padding-bottom"><b>Basic Navigation Bar</b></div>
					<div class="dcg-padding-bottom">The most basic navigation bar uses the <b>dcg-nav</b> and <b>dcg-nav-item</b> classes. This will create a horozontal list of links just like a bar across the page and by default will have a white background and black text. Here is a working example.</div>
					<nav class="dcg-nav dcg-border dcg-border-all dcg-border-light-grey">
						<a class="dcg-nav-item" href="#">Item 1</a>
						<a class="dcg-nav-item" href="#">Item 2</a>
						<a class="dcg-nav-item" href="#">Item 3</a>
					</nav>
<pre class="dcg-code">
&lt;nav class="dcg-nav"&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 1&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 2&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 3&lt;/a&gt;
&lt;/nav&gt;
</pre>
					<div class="dcg-padding-top dcg-padding-bottom">You can customize the colors using the <b>dcg-color</b> and <b>dcg-link-color</b> classes next to the <b>dcg-nav</b> class. Here is an example of a green navigation bar using <b>dcg-dark-green</b> class for the background and <b>dcg-link-light-green</b> class for the text.</div>

					<nav class="dcg-nav dcg-dark-green dcg-link-light-green">
						<a class="dcg-nav-item" href="#">Item 1</a>
						<a class="dcg-nav-item" href="#">Item 2</a>
						<a class="dcg-nav-item" href="#">Item 3</a>
					</nav>
<pre class="dcg-code">
&lt;nav class="dcg-nav dcg-dark-green dcg-link-light-green"&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 1&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 2&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 3&lt;/a&gt;
&lt;/nav&gt;
</pre>

					<div class="dcg-padding-top dcg-padding-bottom">Note that since this is a navigation bar with links that take the user to a different page, you would need to use the link color classes instead of the text color classes. For all the colors available, and the different types of classes you can use with them, see the dedicated page on colors.</div>
					
					<div class="dcg-padding-top dcg-large"><b>Themes</b></div>
					<div class="dcg-padding-top dcg-padding-bottom">Navigation Bar Themes are a quick way of getting a really nice looking piece of navigation for your project. Using just one class, you can set both the background and text colors, and as an added bonus, the bar will use a subtle gradient effect on the background. Take a look at these examples.</div>
					
					<div class="dcg-padding-bottom"><b>Dark Theme</b></div>
					<nav class="dcg-nav dcg-nav-dark">
						<a class="dcg-nav-item" href="#">Item 1</a>
						<a class="dcg-nav-item" href="#">Item 2</a>
						<a class="dcg-nav-item" href="#">Item 3</a>
					</nav>
					
<pre class="dcg-code">
&lt;nav class="dcg-nav dcg-nav-dark"&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 1&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 2&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 3&lt;/a&gt;
&lt;/nav&gt;
</pre>
					
					<div class="dcg-padding-top dcg-padding-bottom"><b>Light Theme</b></div>
					<nav class="dcg-nav dcg-nav-light">
						<a class="dcg-nav-item" href="#">Item 1</a>
						<a class="dcg-nav-item" href="#">Item 2</a>
						<a class="dcg-nav-item" href="#">Item 3</a>
					</nav>
					
<pre class="dcg-code">
&lt;nav class="dcg-nav dcg-nav-light"&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 1&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 2&lt;/a&gt;
	&lt;a class="dcg-nav-item" href="#"&gt;Item 3&lt;/a&gt;
&lt;/nav&gt;
</pre>';
					break;
			}
			?>
			</div>
		</div>
	</body>
</html>