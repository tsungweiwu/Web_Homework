<!DOCTYPE html>
<html>
	<head>
		<link href="img/Snippet.png" rel="icon">
		<title>PHP Snippet 3!</title>
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
		<h1>Switch Statements</h1>
		<p>
			<?php
				$i = 4;
					switch ($i){
						case 1:
						{
							echo "The number is 1";
							break;
						}
						case 2:
						{
							echo "The number is 2";
							break;
						}
						case 3:
						{
							echo "The number is 3";
							break;
						}
						case 4:
						{
							echo "The number is 4";
							break;
						}
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
							&lt;title&gt;PHP Snippet 3!&lt;/title&gt;
						&lt;/head&gt;
						&lt;body&gt;
							&lt;!--Write your PHP code below!--&gt;
							&lt;h1&gt;Switch Statements&lt;/h1&gt;
							&lt;p&gt;
								&lt;?php
									$i = 4;
										switch ($i){
											case 1:
											{
												echo "The number is 1";
												break;
											}
											case 2:
											{
												echo "The number is 2";
												break;
											}
											case 3:
											{
												echo "The number is 3";
												break;
											}
											case 4:
											{
												echo "The number is 4";
												break;
											}
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