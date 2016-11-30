<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
$servername = "localhost";
$username = "stcadmin";
$password = "admin";
$dbname = "sport";

// Create connection
$db = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($db == false) {
    die();
	echo "Failed!";
} 
echo "Connected successfully";

$sql = "SELECT * FROM news";
$result = mysqli_query($db, $sql);

while ($row = mysqli_fetch_assoc($result))
{ echo $row['title'];
}
?>
<html>
<head>
	<meta charset="UTF-8">
	<title>St Thomas of Canterbury Sport</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.6";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
	<div class="background">
		<div class="page">
			<div class="header">
				<a href="index.html" id="logo"><img src="images/logo.png" alt="logo"></a>
				<ul>
					<li>
						<a href="news.html">News</a>
					</li>
					<li>
						<a href="team.html">Teams</a>
					</li>
					<li>
						<a href="schedule.html">Schedule</a>
					</li>
					<li>
						<a href="videos.html">Videos</a>
					</li>
					<li>
						<a href="about.html">About</a>
					</li>
				</ul>
			</div>
			<div class="body home">
				<div>
					<div class="featured">
						<div>
							<h2>We Are The <br> Champions!</h2>
							<p>
								This Web Site has been designed to help our School have more information about sport times, important notices and the ultimate highlights of our school sports teams.
							</p>
						</div>
					</div>
					<div>
						<div>
							<h3>Facebook</h3>
							<a class="fb-page" data-href="https://www.facebook.com/stcport/" data-tabs="timeline" data-width="700px" data-height="760px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/stcport/" class="fb-xfbml-parse-ignore">Thomas of Canterbury College Sport</blockquote></a>
						</div>
					</div>
				</div>
				<div class="sidebar">
					<div class="news">
						<span>Latest News</span>
						<ul>
							<li>
								<a href="news.html">1st XI Playing</a> <span>Posted on 23 June 2016</span>
							</li>
							<li>
								<a href="news.html">Tom Shepard Scores</a> <span>Posted on 18 June 2016</span>
							</li>
							<li>
								<a href="news.html">3rd XI lose</a> <span>Posted on 22 May 2016</span>
							</li>
							<li>
								<a href="news.html">2nd XI lose</a> <span>Posted on 16 May 2016</span>
							</li>
							<li>
								<a href="news.html">1st XV win</a> <span>Posted on 5 May 2016</span>
							</li>
							<li>
								<a href="news.html">Evans wins CoY</a> <span>Posted on 30 April 2016</span>
							</li>
							<li>
								<a href="news.html">Basketball Fundraiser</a> <span>Posted on 27 April 2016</span>
							</li>
						</ul>
						<a href="news.html">Read More</a>
					</div>
					<div class="section">
						<span>Games Schedule</span>
						<ul>
							<li>
								<a href="schedule.html">1st XI VS MDGR </a> <span>29 June 2016 @ 5.15PM</span>
							</li>
							<li>
								<a href="schedule.html">Grizzles VS ELLE</a> <span>29 June 2016 @ 3.15PM</span>
							</li>
							<li>
								<a href="schedule.html">Vipers VS KAIA Boys A</a> <span>29 June 2016 @ 3.15PM</span>
							</li>
							<li>
								<a href="schedule.html">Wolves VS CASH Rojos</a> <span>29 June 2016 @ 3.15PM</span>
							</li>
							<li>
								<a href="schedule.html">1st XV VS MBHS</a> <span>25 June 2016 @ 5PM</span>
							</li>
						</ul>
						<a href="schedule.html">View Schedule</a>
					</div>
					
				</div>
			</div>
			<div class="footer">
				<div>
					<ul>
						<li class="selected">
							<a href="index.html">Home</a>|
						</li>
						<li>
							<a href="news.html">News</a>|
						</li>
						<li>
							<a href="team.html">Team</a>|
						</li>
						<li>
							<a href="schedule.html">Schedule</a>|
						</li>
						<li>
							<a href="videos.html">Videos</a>|
						</li>
						<li>
							<a href="about.html">About</a>
						</li>
					</ul>
					<p>
						&#169; STC 2023. All Rights Reserved
					</p>
				</div>
				<div class="connect">
					<span>Follow Us</span> <a href="http://freewebsitetemplates.com/go/facebook/" id="fb">fb</a> <a href="http://freewebsitetemplates.com/go/twitter/" id="twitter">twitter</a> <a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus">google+</a> <a href="http://www.freewebsitetemplates.com/misc/contact" id="contact">contact</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>