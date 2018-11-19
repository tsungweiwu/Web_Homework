<!DOCTYPE html>
<html>
	<head>
		<link href="img/Snippet.png" rel="icon">
		<title>PHP Snippet 4!</title>
	</head>

	<style>
		img{
			margin-right: auto;
			margin-left: auto;
			display: block;
			width:45%;
		}
		
	</style>

	<body>
		<!--Write your PHP code below!-->
		<img src="img/php-applications.jpg">
		<h1>Arrays</h1>
		<p>
			<?php
				$languages = array("HTML/CSS", "JavaScript", "PHP", "Python", "Ruby");
				// Write the code to remove Python here!

				unset($languages[3]);
				// Write your code above this line. Don't
				// worry about the code below just yet; we're
				// using it to print the new array out for you!

				foreach($languages as $lang)
				{
					print "<p>$lang</p>";
				}
			?>
		</p>


		<table style="width:100%" border="1">
			<tr>
				<td>
					<pre>
					&lt;!DOCTYPE html&gt;
					&lt;html&gt;
						&lt;head&gt;
							&lt;link type='text/css' rel='stylesheet' href='style.css'/&gt;
							&lt;title&gt;PHP Snippet 4!&lt;/title&gt;
						&lt;/head&gt;
						&lt;body&gt;
							&lt;!--Write your PHP code below!--&gt;
							&lt;h1&gt;Arrays&lt;/h1&gt;
							&lt;p&gt;
								&lt;?php
									$languages = array("HTML/CSS", "JavaScript", "PHP", "Python", "Ruby");
									// Write the code to remove Python here!

									unset($languages[3]);
									// Write your code above this line. Don't
									// worry about the code below just yet; we're
									// using it to print the new array out for you!

									foreach($languages as $lang)
									{
										print "&lt;p&gt;$lang&lt;/p&gt;";
									}
								?&gt;
							&lt;/p&gt;
						&lt;/body&gt;
					&lt;/html&gt;
					</pre>
				</td>
			</tr>
		</table>			

	</body>
</html>

