<?php
require_once('private/signup.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-GB">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui">
	<title>The McMillan Theatre</title>
	<meta name="description" content="Opening in 2015, the McMillan Theatre is a state-of-the-art 350-seat Theatre and performing arts centre from Bridgwater College.">
	<?php require_once('private/analyticstracking.php'); ?>
	<style>
		<?php require_once('private/style.php'); ?>
	</style>
</head>
<body>
	<div class="hero hero-one">
		<svg class="svg-mcmillan-theatre-logo" xmlns="http://www.w3.org/2000/svg" width="251" viewBox="0 0 251 117"><path d="M0 69.732h4.8l5.415-28.464h.11l13.508 30.196 13.563-30.196h.112l5.415 28.464h4.8l-8.54-44.484-15.35 35.33L8.54 25.25M66.263 35.944c-1.942-1.387-4.348-2.173-6.707-2.173-6.382 0-11.61 4.996-11.61 11.47 0 6.57 4.996 11.47 11.564 11.47 2.59 0 4.764-.785 6.892-2.22v-4.948h-.093c-1.805 2.36-3.98 3.746-7.077 3.746-4.533 0-7.493-3.746-7.493-8.047 0-4.347 3.19-8.047 7.678-8.047 2.914 0 5.04 1.48 6.753 3.654h.093v-4.903zM68.407 69.732h4.8l5.414-28.464h.112L92.24 71.464l13.563-30.196h.112l5.414 28.464h4.8l-8.54-44.484-15.35 35.33-15.294-35.33M121.028 27.648h4.688v42.084h-4.688zM137.232 27.648h-4.688v42.084h16.3V65.38H137.23M157.57 27.648h-4.69v42.084h16.3V65.38h-11.61M197.783 53.435h-14.235l7.202-16.856 7.033 16.855zm1.84 4.354l4.968 11.943h5.19L190.86 25.64 171.436 69.73h5.136l5.08-11.944h17.972zM212.964 69.732h4.687V37.305l32.82 34.326V27.65h-4.687v32.597l-32.82-34.382M.59 16.463h83.902v2.375H.592zM167.4 16.463h83.07v2.375H167.4zM106.97 2.18h4.898V.106h-11.98V2.18h4.845V20.18h2.236M118.78 8.25V.106h-2.237v20.073h2.236v-9.85h10.276v9.85h2.234V.105h-2.234V8.25M137.14 20.178h10.41v-2.076h-8.173v-7.88h7.935V8.144h-7.935V2.18h8.174V.106h-10.41M11.147 80.064h7.712v-3.27H0v3.27h7.627v28.33h3.52M40.667 89.62V76.794h-3.52v31.6h3.52V92.887h16.176v15.506h3.52v-31.6h-3.52V89.62M81.838 108.394h16.387v-3.27H85.36V92.72h12.488v-3.268h-12.49v-9.388h12.867v-3.27H81.838M135.32 96.157h-10.69l5.407-12.657 5.282 12.657zm1.38 3.27l3.73 8.967h3.896L130.12 75.287l-14.584 33.107h3.855l3.814-8.968H136.7zM168.79 80.064h7.71v-3.27h-18.858v3.27h7.626v28.33h3.52M199.724 94.52h.88l9.555 13.873h4.316l-10.06-14.163c4.863-.42 7.922-3.858 7.922-8.717 0-7.125-5.574-8.718-11.567-8.718h-4.566v31.598h3.52V94.52zm0-14.456h1.047c4.235 0 8.048.503 8.048 5.7 0 4.903-4.023 5.656-8.004 5.656h-1.09V80.064zM234.5 108.394h16.385v-3.27H238.02V92.72h12.488v-3.268h-12.49v-9.388h12.867v-3.27H234.5M0 114.834h250.885v2.376H0z"/></svg>
		<div class="container">
			<p class="hero-one__about">A new state-of-the-art, multi-million pound, <span class="sc">350</span>-seat Theatre and performing arts centre from <a href="http://www.bridgwater.ac.uk/">Bridgwater&nbsp;College</a></p>
			<!-- <p class="hero-one__opening">Opening 2015</p> -->
			<!--<div class="event-promo">
				<img src="img/mary-berry.png">
				<h2>An Evening with Mary&nbsp;Berry</h2>
				<p>Join us at The McMillan Theatre for ‘An Evening with Mary Berry’, on Thursday 1 October. Tickets on sale 9am, Wednesday 26 August. <br><a href="#signup">Sign up now for updates!</a></p>
			</div>
			<div class="upcoming-events open-event">
				<h2><a href="http://www.bridgwater.ac.uk/event.php?id=431">Open Day at The McMillan Theatre</a></h2>
				<p>We are inviting the local community to attend a free <a href="http://www.bridgwater.ac.uk/event.php?id=431">Open Day on Saturday 31 October, 10am – 3pm</a>. Come along and have a look around the community’s newest venue, tour the multi-million pound complex and watch or get involved in interactive activities going on throughout the day.</p>
			</div>-->
			<div class="upcoming-events sunset-event">
				<h2><a href="https://www.ticketsource.co.uk/pinstripeproductions">Sunset Boulevard</a></h2>
				<p>From Tuesday 17 to Saturday 21 November Pinstripe Productions bring Sunset Boulevard to The McMillan Theatre. Featuring a talented hand-picked cast and stunning orchestration this show is set to captivate and enthral audiences from start to finish.<br> <a href="https://www.ticketsource.co.uk/pinstripeproductions">Book early to avoid disapointment.</a></p>
			</div>
			<div class="upcoming-events">
				<h2><a href="/swi/">Upcoming Events</a></h2>
				<p>We are currently developing a new website for The McMillan Theatre with all upcoming events and theatre information. Until then you can <a href="/swi/">view our current, upcoming events and book tickets</a> through our temporary booking site. <a href="/swi/info/">More info</a>.</p>
			</div>
		</div>
	</div>
	<div class="pictures">
		<a href="img/1.jpg"><img src="img/1.jpg" alt="Pre-build architectural rendering outside view one" width="850" height="auto"></a>
		<a href="img/2.jpg"><img src="img/2.jpg" alt="Pre-build architectural rendering outside view two" width="850" height="auto"></a>
		<a href="img/3.jpg"><img src="img/3.jpg" alt="Pre-build architectural rendering outside view three" width="850" height="auto"></a>
	</div>
	<div class="quote">
		<div class="container">
			<blockquote cite="http://www.bridgwater.ac.uk/news-article.php?id=1686">
				<p><span class="q">&ldquo;</span>Our students will receive training in facilities that are second to none. The McMillan Theatre will also host touring companies and professional groups or public shows, benefitting our whole community!</p>
				<cite>&mdash; <a href="http://www.bridgwater.ac.uk/news-article.php?id=1686" title="First spade in the ground heralds new Performing Arts Centre for Bridgwater">Mike Robbins, Bridgwater College Principal</a></cite>
			</blockquote>
		</div>
	</div>
	<div class="about">
		<div class="container">
			<p><span class="dc">T</span><span class="sc">he Theatre will have a 350-seat auditorium with retractable seating</span>, an orchestra pit, and first and second floor balconies. A beautiful, glazed main entrance and reception will welcome visitors and the dance studios will be open for public use. It will host professional and community performances as well as College productions, conferences and art exhibitions. <a href="https://www.flickr.com/photos/bridgwatercollege/sets/72157653596794628">View photos of the finished building taken in June</a> or <a href="/tour">explore the Theatre through our virtual tour</a>.</p>
		</div>
	</div>
	<div class="quote">
		<div class="container">
			<blockquote cite="http://www.bridgwater.ac.uk/news-article.php?id=1908">
				<p><span class="q">&ldquo;</span>The new Theatre is an exciting prospect for the whole community and we look forward to welcoming everyone to it over the coming months.</p>
				<cite>&mdash; <a href="http://www.bridgwater.ac.uk/news-article.php?id=1908" title="Performing Arts Centre ahead of schedule">Ben Houlihan, Section leader for Music &amp; Performing Arts</a></cite>
			</blockquote>
		</div>
	</div>
	<div class="pictures">
		<a href="img/4.jpg"><img src="img/4.jpg" alt="Pre-build architectural rendering inside view one" width="850" height="auto"></a>
		<a href="img/5.jpg"><img src="img/5.jpg" alt="Pre-build architectural rendering inside view two" width="850" height="auto"></a>
		<a href="img/6.jpg"><img src="img/6.jpg" alt="Pre-build architectural rendering inside view three" width="850" height="auto"></a>
	</div>
	<div class="hero hero-two">
		<div class="container">
			<p class="hero-two__about">For project updates and opening information sign-up below or follow us online!</p>
			<div class="hero-two__elsewhere">
				<a href="https://www.google.com/+mcmillantheatre/" title="The McMillan Theatre on Google">
					<svg class="svg-social-icon svg-google-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M12.632 14.516c-.13-.018-.465 0-1.003.053-.532.073-1.074.194-1.628.362-.132.048-.316.125-.552.224-.237.107-.478.264-.723.465-.236.21-.437.47-.6.778-.188.328-.28.72-.28 1.182 0 .904.407 1.648 1.223 2.234.775.586 1.836.887 3.182.904 1.208-.018 2.13-.285 2.766-.805.62-.51.93-1.168.93-1.97 0-.653-.212-1.222-.637-1.708-.447-.46-1.148-1.023-2.103-1.695-.163-.015-.354-.024-.575-.024zM12.804 3.52c-.403-.292-.868-.448-1.393-.464-.694.017-1.27.298-1.73.842-.39.57-.576 1.207-.56 1.912 0 .93.272 1.9.815 2.906.263.47.602.868 1.017 1.195.416.328.89.49 1.424.49.675-.024 1.236-.268 1.687-.73.217-.326.356-.66.42-1.004.035-.344.055-.633.055-.867 0-1.016-.26-2.04-.775-3.07-.243-.497-.563-.9-.96-1.21z"/><path d="M23.28.72C22.57-.002 21.6 0 21.6 0H2.396S1.445-.005.72.72C-.005 1.446 0 2.402 0 2.402v19.196s.005.96.72 1.683c.715.72 1.683.72 1.683.72H21.6s.953-.008 1.68-.72c.726-.713.72-1.68.72-1.68V2.4s-.01-.958-.72-1.68zm-7.776 2.85c.19.2.382.448.563.74.178.277.336.603.474.98.114.376.168.815.168 1.317-.014.92-.216 1.657-.605 2.21-.19.267-.395.513-.606.74-.236.225-.49.456-.756.69-.153.16-.294.34-.424.54-.152.21-.23.452-.23.728 0 .27.078.49.235.665.135.17.263.315.39.44l.87.714c.538.445 1.013.934 1.42 1.47.384.544.583 1.255.6 2.134 0 1.248-.548 2.354-1.646 3.314-1.138.994-2.778 1.51-4.922 1.545-1.795-.02-3.136-.402-4.02-1.154-.895-.7-1.34-1.54-1.34-2.518 0-.48.145-1.008.435-1.592.282-.584.792-1.1 1.532-1.54.83-.478 1.7-.794 2.614-.954.905-.134 1.657-.208 2.255-.224-.187-.246-.35-.506-.496-.783-.17-.27-.252-.593-.252-.972 0-.227.03-.417.096-.568l.157-.442c-.29.035-.566.05-.823.05-1.365-.016-2.405-.447-3.12-1.292-.75-.786-1.123-1.703-1.123-2.748 0-1.264.53-2.41 1.59-3.438.728-.603 1.485-.996 2.27-1.18.778-.16 1.506-.24 2.187-.24h5.126l-1.582.93H14.96c.162.1.342.245.546.438z"/></svg>
				</a>
				<a href="http://www.facebook.com/mcmillantheatre" title="The McMillan Theatre on Facebook">
					<svg class="svg-social-icon svg-facebook-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.28.72C22.57-.002 21.6 0 21.6 0H2.395S1.445-.005.72.72C-.005 1.446 0 2.402 0 2.402v19.195s.005.962.72 1.683c.715.72 1.683.72 1.683.72H12.82v-9.294H9.69v-3.622h3.13v-2.67c0-3.1 1.892-4.79 4.658-4.79 1.324 0 2.463.1 2.794.144v3.24h-1.918c-1.504 0-1.795.715-1.795 1.764v2.312h3.586l-.467 3.622h-3.12V24h5.04s.954-.008 1.68-.72.72-1.68.72-1.68V2.4s-.01-.958-.72-1.68z"/><path d="M23.28.72C22.57-.002 21.6 0 21.6 0H2.395S1.445-.005.72.72C-.005 1.446 0 2.402 0 2.402v19.195s.005.962.72 1.683c.715.72 1.683.72 1.683.72H12.82v-9.294H9.69v-3.622h3.13v-2.67c0-3.1 1.892-4.79 4.658-4.79 1.324 0 2.463.1 2.794.144v3.24h-1.918c-1.504 0-1.795.715-1.795 1.764v2.312h3.586l-.467 3.622h-3.12V24h5.04s.954-.008 1.68-.72.72-1.68.72-1.68V2.4s-.01-.958-.72-1.68z"/></svg>
				</a>
				<a href="http://twitter.com/mcmillantheatre" title="The McMillan Theatre on Twitter">
					<svg class="svg-social-icon svg-facebook-twitter" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.28.72C22.57-.002 21.6 0 21.6 0H2.396S1.445-.005.72.72C-.005 1.446 0 2.402 0 2.402v19.196s.005.96.72 1.683c.715.72 1.683.72 1.683.72H21.6s.953-.008 1.68-.72c.726-.713.72-1.68.72-1.68V2.4s-.01-.958-.72-1.68zm-4.27 7.806c.007.15.01.3.01.453 0 4.615-3.514 9.94-9.94 9.94-1.975 0-3.81-.58-5.357-1.57.274.032.55.048.833.048 1.638 0 3.144-.557 4.34-1.494-1.53-.03-2.82-1.04-3.264-2.426.213.04.432.062.657.062.318 0 .627-.043.92-.123-1.6-.322-2.803-1.733-2.803-3.427v-.043c.47.26 1.01.42 1.583.437-.938-.627-1.555-1.696-1.555-2.908 0-.64.173-1.24.473-1.756 1.724 2.113 4.298 3.505 7.203 3.65-.06-.256-.09-.522-.09-.796 0-1.93 1.566-3.495 3.496-3.495 1.004 0 1.912.424 2.55 1.103.797-.156 1.544-.447 2.22-.848-.26.816-.815 1.5-1.536 1.934.705-.086 1.38-.273 2.007-.55-.472.698-1.064 1.315-1.746 1.806z"/></svg>
				</a>
				<a href="http://www.bridgwater.ac.uk/mcmillantheatre" title="The McMillan Theatre">
					<svg class="svg-social-icon svg-facebook-bridgwater-college" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M5.832 15.602c0-.223-.22-.277-.408-.277h-.33v.575h.3c.204 0 .438-.048.438-.298zM7.998 15.33h-.304v1.418h.304c.376 0 .8-.152.8-.705 0-.588-.424-.713-.8-.713zM14.912 16.285h.638l-.316-.832M6.822 17.98c-.547 0-.875.43-.875.92s.328.92.875.92.873-.43.873-.92-.326-.92-.873-.92zM3.942 15.574c0-.184-.13-.256-.406-.256h-.292v.533h.324c.244.002.374-.1.374-.276z"/><path d="M23.28.72C22.57-.002 21.6 0 21.6 0H2.396S1.445-.005.72.72C-.005 1.446 0 2.402 0 2.402v19.196s.005.96.72 1.683c.715.72 1.683.72 1.683.72H21.6s.953-.008 1.68-.72c.726-.713.72-1.68.72-1.68V2.4s-.01-.958-.72-1.68zM9.524 3.984c2.166 0 4.205.24 5.743.677 1.583.45 2.456 1.067 2.456 1.735 0 .67-.873 1.286-2.457 1.737-1.022.29-2.264.495-3.615.6 1.353.104 2.594.307 3.615.597 1.584.45 2.455 1.065 2.455 1.733 0 .668-.872 1.286-2.456 1.737-1.54.44-3.58.682-5.744.682v-.162c2.56 0 4.643-1.012 4.643-2.253 0-1.242-2.082-2.253-4.64-2.253v-.162c2.558 0 4.64-1.01 4.64-2.253s-2.08-2.254-4.64-2.254v-.162zm6.523 11.352v-.318h1.62v.318h-.626v1.732h-.364v-1.732h-.63zm-8.094-8.26c1.523-.45 3.547-.698 5.697-.698v.162c-1.25 0-2.44.247-3.35.694-.88.433-1.385 1.015-1.385 1.597 0 1.243 2.083 2.253 4.643 2.253v.162c-2.153 0-4.16-.242-5.65-.68-1.525-.448-2.364-1.065-2.364-1.736 0-.673.855-1.296 2.41-1.755zm-1.01 7.942v2.05H6.58v-2.05h.364zm-4.064 0h.8c.31 0 .627.143.627.516 0 .23-.145.385-.355.45v.003c.257.037.442.21.442.484 0 .446-.388.6-.776.6h-.74v-2.052zm.97 4.998c-.633 0-1.107-.47-1.107-1.117s.475-1.118 1.108-1.118c.266 0 .55.1.737.336l-.19.142c-.084-.14-.32-.28-.547-.28-.546 0-.873.43-.873.92s.327.92.873.92c.223 0 .45-.073.61-.32l.177.128c-.14.218-.434.388-.786.388zM5.096 16.2v.868H4.73v-2.05h.712c.384 0 .755.153.755.587 0 .295-.183.488-.47.553l.548.91h-.44l-.475-.87h-.265zm1.727 3.816c-.635 0-1.11-.47-1.11-1.117s.476-1.118 1.11-1.118c.633 0 1.108.47 1.108 1.117s-.475 1.116-1.108 1.116zm1.234-2.948H7.33v-2.05h.726c.536 0 1.133.253 1.133 1.024-.002.718-.598 1.026-1.134 1.026zm2.326 2.895H9.175v-2.127h.215v1.928h.992v.2zm.93-3.004c-.204.1-.45.16-.772.16-.66 0-1.12-.444-1.12-1.083 0-.658.48-1.072 1.112-1.072.324 0 .613.104.777.258l-.252.273c-.104-.117-.304-.21-.524-.21-.432 0-.713.327-.713.75 0 .44.28.755.73.755.154 0 .29-.02.41-.07v-.52h-.433v-.304h.784v1.063zm1.532 3.003h-1.207v-2.127h.216v1.928h.99v.2zm.57-2.895l-.48-1.537h-.005l-.482 1.538h-.352l-.6-2.05h.4l.395 1.505h.008l.45-1.506h.378l.442 1.506h.006l.405-1.506h.387l-.6 2.05h-.352zm1.996 2.895h-1.355v-2.127h1.32v.197H14.27v.725h1.03v.197h-1.03v.81h1.14v.198zm.457-2.895l-.19-.47h-.89l-.185.47h-.407l.89-2.05h.316l.884 2.05h-.417zm2.625 2.733c-.237.142-.547.216-.805.216-.635 0-1.11-.47-1.11-1.117s.476-1.118 1.11-1.118c.336 0 .58.096.77.285l-.163.16c-.145-.152-.346-.248-.606-.248-.548 0-.875.43-.875.92s.327.92.875.92c.22 0 .43-.062.588-.15v-.714h-.507v-.197h.723v1.04zm.872-2.732h-1.41v-2.05h1.358v.317h-.992v.52h.94v.308h-.94v.58h1.044v.325zm1.862 2.895h-1.354v-2.127h1.318v.197h-1.103v.725h1.03v.197h-1.03v.81h1.14v.198zm-.408-2.895l-.475-.87h-.267v.87h-.365v-2.05h.714c.386 0 .756.153.756.587 0 .295-.183.488-.47.553l.547.91h-.44z"/><path d="M20.815 15.602c0-.223-.22-.277-.408-.277h-.33v.575h.298c.206 0 .44-.048.44-.298zM4.028 16.453c0-.213-.147-.29-.442-.29h-.342v.597h.327c.19 0 .458-.037.458-.307z"/></svg>
				</a>
				<a href="http://instagram.com/mcmillantheatre" title="The McMillan Theatre on Instagram">
					<svg class="svg-social-icon svg-facebook-instagram" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M23.28.72C22.57-.002 21.6 0 21.6 0H2.396S1.445-.005.72.72C-.005 1.446 0 2.402 0 2.402v19.196s.005.96.72 1.683c.715.72 1.683.72 1.683.72H21.6s.953-.008 1.68-.72c.726-.713.72-1.68.72-1.68V2.4s-.01-.958-.72-1.68zm-2.257 17.987c0 1.273-1.043 2.316-2.316 2.316H5.294c-1.274 0-2.317-1.043-2.317-2.316V5.292c0-1.273 1.043-2.316 2.317-2.316h13.413c1.273 0 2.316 1.042 2.316 2.316v13.415z"/><path d="M16.123 8.55h2.04c.446 0 .81-.364.81-.81V5.793c0-.447-.364-.812-.81-.812h-2.04c-.447 0-.812.365-.812.812V7.74c0 .446.366.81.813.81z"/><ellipse cx="12.018" cy="11.961" rx="3.625" ry="3.512"/><path d="M17.627 12.156c0 3.002-2.512 5.436-5.61 5.436-3.098 0-5.61-2.434-5.61-5.436 0-.538.083-1.057.232-1.55H4.98v7.624c0 .395.322.72.717.72h12.565c.395 0 .72-.325.72-.72v-7.623h-1.59c.15.493.232 1.01.232 1.55z"/></svg>
				</a>
			</div>
			<h2>Sign-up for updates</h2>
			<form class="frm" id="signup" method="post" action="https://system.spektrix.com/bridgwatercollege/website/secure/signup.aspx" role="form">
				<?php
					if (!empty($displayError)) {
						echo '<p class="frm__error">'.$displayError.'</p>';
					} elseif (!empty($displaySuccess)) {
						echo '<p class="frm__success">'.$displaySuccess.'</p>';
					}
				?>
				<input type="hidden" name="ReturnUrl" value="https://mcmillantheatre.com/?signup=true">
				<div class="frm__row">
					<label for="firstName" class="frm__lbl">First Name</label>
					<input type="text" name="firstName" id="firstName" class="frm__inpt" placeholder="" value="">
				</div>
				<div class="frm__row">
					<label for="lastName" class="frm__lbl">Last Name</label>
					<input type="text" name="lastName" id="lastName" class="frm__inpt" placeholder="" value="">
				</div>
				<div class="frm__row">
					<label for="email" class="frm__lbl">Email</label>
					<input type="email" name="email" id="email" class="frm__inpt" placeholder="" value="">
				</div>
				<button class="frm__btn" type="submit">Submit</button>
			</form>
			<div class="addr">
				<p>&copy;&nbsp;<?php echo date('Y'); ?> <a href="https://www.google.com/maps/place/The%2BMcMillan%2BTheatre/data%3D!4m2!3m1!1s0x487208996bb7977b:0xa2900183d5e8ece9?gl%3DGB%26hl%3Den_uk" title="View on Google Maps">The McMillan Theatre, Bath Road, Bridgwater, Somerset, TA6 4PZ</a>, 01278 556677</p>
			</div>
		</div>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<?php require_once('private/magnific.php') ?> 
	<script>
		$(document).ready(function() {
			$('.pictures').magnificPopup({
				delegate: 'a',
				type:'image',
				gallery:{
    				enabled:true
				},
				zoom: {
					enabled: true,
					duration: 100,
					opener: function(element) {
						return element.find('img');
					}
				}
			});

			function GetURLParameter(sParam) {
				var sPageURL = window.location.search.substring(1);
				var sURLVariables = sPageURL.split('&');
				for (var i = 0; i < sURLVariables.length; i++) {
					var sParameterName = sURLVariables[i].split('=');
					if (sParameterName[0] == sParam) {
						return sParameterName[1];
					}
				}
			}

			if (GetURLParameter('signup') == 'true') {
				window.location.hash = '#signup';
			}
		});
	</script>
</body>
</html>