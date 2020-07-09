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
				<a class="dcg-nav-item dcg-lingrad-hover-alt-dark" href="/dcgcss/forms">Forms</a>
			</nav>
			
			<div class="dcg-padding">
			<?php
			switch( $page ) {
				default:
				case "home":
					?>
						<div class="dcg-xxxlarge dcg-center dcg-padding-top-xlarge"><b>Welcome to DCG.CSS!</b></div>
						<div class="dcg-large dcg-center dcg-padding-bottom-xlarge">Your web project. Your way.</div>
						<div class="dcg-jumbo">&nbsp;</div>
						<div class="dcg-center dcg-padding dcg-padding-top-xlarge"><b>Get Started Fast!</b></div>
						<div class="dcg-center dcg-padding dcg-padding-top-xlarge dcg-padding-bottom-xlarge">Link to DCG.CSS like any other CSS file.</div>
<pre class="dcg-code w3-highlight">
&lt;link rel="stylesheet" type="text/css" href="https://www.davecomputergeek.scot/dcgcss/dcg.css"&gt;
</pre>
						<div class="dcg-center dcg-padding">For new projects by lazy developers like me, here is a full HTML example.</div>
<pre class="dcg-code w3-highlight">
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
					?>
					<div class="dcg-xxlarge dcg-padding-bottom dcg-bold">Typogaphy</div>
						<div class="dcg-bold dcg-large dcg-padding-bottom">Text Sizes</div>
						<div class="dcg-small">Small</div>
						<div class="dcg-normal">Normal</div>
						<div class="dcg-large">Large</div>
						<div class="dcg-xlarge">xLarge</div>
						<div class="dcg-xxlarge">xxLarge</div>
						<div class="dcg-xxxlarge">xxxLarge</div>
						<div class="dcg-jumbo">Jumbo</div>';
					<?php
					break;
				case "navigation":
					?>
					<div class="dcg-xxlarge"><b>Navigation</b></div>
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
</pre>
					<?php
					break;
				case "forms":
					?>
					<div class="dcg-xxlarge"><b>Forms</b></div>
					<div class="dcg-large dcg-padding-bottom"><b>Input Fields</b></div>
					<div class="dcg-padding-bottom">Define a form using the <b>dcg-form</b> class, and inside that make an input field with the <b>dcg-input</b> class.<br><br><b>Demonstration with Example Code</b></div>
					<form class="dcg-form">
						<input class="dcg-input dcg-lighter-light-grey">
					</form>
<pre class="dcg-code">
&lt;form class="dcg-form"&gt;
	&lt;input class="dcg-input"&gt;
&lt;/form&gt;
</pre>
					
					<div class="dcg-padding-top dcg-padding-bottom dcg-large">Styled Input Fields</div>
					<div class="dcg-padding-top dcg-padding-bottom"><b>Borders</b><br>The <b>dcg-input</b> class already applies the base of a border to the field, all it needs now is to know where to display it, what thickness, and what color.<br><br>Use any of the border color classes in combination with the border classes.<br><br><b>Demonstration of Deep Red Border with Example Code</b></div>
					<form class="dcg-form">
						<input class="dcg-input dcg-border-all dcg-border-deep-red dcg-text-deep-red">
					</form>
<pre class="dcg-code">
&lt;form class="dcg-form"&gt;
	&lt;input class="dcg-input dcg-border-all dcg-border-deep-red"&gt;
&lt;/form&gt;
</pre>
					
					<div class="dcg-padding-top dcg-padding-bottom">Borders do not need to be on all sides, you can specify just what sides you need. Let\'s apply a thick border to only the bottom to look like an underline.<br><br><b>Demonstration of Bottom Border with Example Code</b></div>
					<form class="dcg-form">
						<input class="dcg-input dcg-border-bottombar dcg-border-deep-red dcg-text-deep-red">
					</form>
<pre class="dcg-code">
&lt;form class="dcg-form"&gt;
	&lt;input class="dcg-input dcg-border-bottombar dcg-border-deep-red"&gt;
&lt;/form&gt;
</pre>

					<div class="dcg-margin-top-large dcg-padding-top dcg-padding-bottom"><b>Background and Foreground</b></div>
					<div class="dcg-padding-top dcg-padding-bottom">You can change the background or the foreground of a field using the color classes.<br><br><b>Demonstration of Dark Grey Background and Light Grey Foreground with Example Code</b></div>
					<form class="dcg-form">
						<input class="dcg-input dcg-dark-grey dcg-text-light-grey">
					</form>
<pre class="dcg-code">
&lt;form class="dcg-form"&gt;
	&lt;input class="dcg-input dcg-dark-grey dcg-text-light-grey"&gt;
&lt;/form&gt;
</pre>

					<div class="dcg-margin-top-large dcg-padding-top dcg-padding-bottom">
						<div class="dcg-large dcg-padding-bottom"><b>Labels</b></div>
						The <b>dcg-label</b> class can be used to make a label sit nicely above the input field. It can be colored to match the field.
						<br><br>
						<b>Demonstration of a Label with Example Code</b>
					</div>
					<form class="dcg-form">
						<label for="name" class="dcg-label dcg-text-deep-red">Name:</label>
						<input id="name" class="dcg-input dcg-border-all dcg-border-deep-red dcg-text-deep-red">
					</form>
<pre class="dcg-code">
&lt;form class="dcg-form"&gt;
	&lt;label for="name" class="dcg-label dcg-text-deep-red"&gt;Name:&lt;/label&gt;
	&lt;input id="name" class="dcg-input dcg-border-all dcg-border-deep-red dcg-text-deep-red"&gt;
&lt;/form&gt;
</pre>
					<?php
					break;
			}
			?>
			</div>
		</div>
		
		<script type="text/javascript" src="w3-syntax-highlighter.js"></script>
	</body>
</html>