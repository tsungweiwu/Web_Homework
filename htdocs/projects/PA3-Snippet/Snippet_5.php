<!DOCTYPE html>
<html>
	<head>
		<link href="img/Snippet.png" rel="icon">
		<title>PHP Snippet 5!</title>
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
		<h1>For and Foreach</h1>
		<p>
			<?php
				$yardlines = array("The 50... ", "the 40... ", "the 30... ", "the 20... ", "the 10... ");
				// Write your foreach loop below this line

				foreach ($yardlines as $yards)
				{
					echo $yards;
				}
				// Write your foreach loop above this line
				echo "Touchdown!";
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
							&lt;title&gt;PHP Snippet 5!&lt;/title&gt;
						&lt;/head&gt;
						&lt;body&gt;
							&lt;!--Write your PHP code below!--&gt;
							&lt;h1&gt;For and Foreach&lt;/h1&gt;
							&lt;p&gt;
								&lt;?php
									$yardlines = array("The 50... ", "the 40... ", "the 30... ", "the 20... ", "the 10... ");
									// Write your foreach loop below this line

									foreach ($yardlines as $yards)
									{
										echo $yards;
									}
									// Write your foreach loop above this line
									echo "Touchdown!";
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
