<?php
/**
 * Theme index file.
 *
 * @package iwpdev/bulk-qr-theme
 */

get_header();
?>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-lg-9">
					<form class="bulk-form">
						<h2>Bulk QR Code Generator</h2>
						<p>Generate multiple QR codes at once by uploading a file with your data.</p>
						<div class="input-wrap">
							<div class="input">
								<label for="email">Email Address </label>
								<input id="email" type="email">
							</div>
							<p>Enter your email where the archive will be sent after generation is complete</p>
						</div>
						<div class="wrap">
							<div class="select">
								<p>Select Format</p>
								<select>
									<option value="png">PNG</option>
									<option value="svg">SVG</option>
									<option value="eps">EPS</option>
									<option value="pdf">PDF</option>
									<option value="jpeg">JPEG</option>
								</select>
							</div>
							<div class="input-wrap">
								<p>Size QR Code</p>
								<div class="input">
									<label>500</label>
									<input type="text">
								</div>
							</div>
							<div class="color-wrap">
								<p>Background Color</p>
								<div class="color">
									<input class="bg-svg" type="color" value="#2375E5">
								</div>
							</div>
							<div class="color-wrap">
								<p>Qr Color</p>
								<div class="color">
									<input class="color-svg" type="color" value="#ffffff">
								</div>
							</div>
							<div class="type-wrap">
								<p>QR Code Type</p>
								<div class="type-radio">
									<input id="rectangle" type="radio" name="type" checked>
									<label for="rectangle"></label>
								</div>
								<div class="type-radio">
									<input id="circle" type="radio" name="type">
									<label for="circle"></label>
								</div>
								<div class="type-radio">
									<input id="square" type="radio" name="type">
									<label for="square"></label>
								</div>
							</div>
						</div>
						<div class="wrap">
							<div class="file-wrap">
								<p>Add .CSV, EXEL, JSON file</p>
								<div class="file">
									<input id="file" type="file" accept=".csv, .exel, .json">
									<label class="bi bi-file-earmark-arrow-down" for="file">Add File</label>
								</div>
							</div>
							<button class="btn bi bi-qr-code" type="submit">Generate QR Codes</button>
						</div>
					</form>
				</div>
				<div class="col-lg-3">
					<div class="qr">
						<h2>Appearance <br>of the QR code</h2>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="steps">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h2>Create QR Code in 3 Steps</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4"><img src="images/step-1.png" alt="">
					<h4>Choose the type</h4>
				</div>
				<div class="col-lg-4"><img src="images/step-2.png" alt="">
					<h4>Generate QR code</h4>
				</div>
				<div class="col-lg-4"><img src="images/step-3.png" alt="">
					<h4>Customize & download</h4>
				</div>
			</div>
		</div>
	</section>
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col">
					<h1>Create & Customize <br>Your Dynamic QR code</h1>
					<div class="grid-create">
						<div class="grid-item"><i class="bi bi-link-45deg"></i>
							<p>URL / Link</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-card-list"></i>
							<p>List of Links</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-at"></i>
							<p>Email</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-images"></i>
							<p>Image</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><img src="images/image.png" alt=""><a
									class="link"
									href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-person-vcard"></i>
							<p>V-Card</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"> </i><a class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-filetype-pdf"></i>
							<p>PDF</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"> </i><a class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-geo-alt"></i>
							<p>Map</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><img src="images/image-map.png" alt=""><a
									class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-music-note-beamed"></i>
							<p>Audio</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-youtube"></i>
							<p>Youtube</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned. </p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"></a>
						</div>
						<div class="grid-item"><i class="bi bi-file-text"></i>
							<p>Text</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><img src="images/image-text.png" alt=""><a
									class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-facebook"></i>
							<p>FaceBook</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-film"></i>
							<p>Video</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><img src="images/image-video.png" alt=""><a
									class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-instagram"></i>
							<p>Instagram</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"> </i><a class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-telegram"></i>
							<p>Telegram</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"> </i><a class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-telephone"></i>
							<p>Phone</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"></i><a class="link" href="#"> </a>
						</div>
						<div class="grid-item"><i class="bi bi-whatsapp"></i>
							<p>WhatsApp</p><i class="bi bi-info-circle">
								<div class="info">
									<p>Create a QR code that directs users to a specific URL or link when scanned.</p>
								</div>
							</i><i class="bi bi-arrow-right-circle"> </i><a class="link" href="#"> </a>
						</div>
					</div>
					<a class="btn" href="#">View More </a>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="advantages">
						<h2>Our Advantages</h2>
						<div class="advantages-items">
							<div class="advantages-item">
								<h3>For a single request,<br>generate up to 5,000 <br>QR codes.</h3>
							</div>
							<div class="advantages-item">
								<h3>Affordable <br>subscription cost</h3>
							</div>
							<div class="advantages-item">
								<h3>User-friendly API</h3>
							</div>
							<div class="advantages-item">
								<h3>Sending an archive with<br>QR codes to the <br>client via email.</h3>
							</div>
							<div class="advantages-item">
								<h3>Personal account<br>with a user-friendly <br>interface</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="plans">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Choose the Ideal Plan for Your Needs</h2>
					<p>Each plan includes unlimited free updates and premium support.</p>
					<div class="filer-plans">
						<div class="plans-radio">
							<div class="radio">
								<input id="yearly" type="radio" name="plans" checked>
								<label for="yearly">Yearly</label>
							</div>
							<div class="radio">
								<input id="monthly" type="radio" name="plans">
								<label for="monthly">Monthly</label>
							</div>
						</div>
						<div class="select">
							<select>
								<option>USD</option>
								<option>UAH</option>
								<option>PLN</option>
								<option>EUR</option>
							</select>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="plans-items">
						<div class="plans-item">
							<h4>Plans Benefits </h4>
							<p><i class="bi bi-tag-fill"></i>You save <strong>up to 45%</strong>on<strong>Yearly
									Plan</strong></p>
							<ul class="plans-description">
								<li>Created QR Codes</li>
								<li>Scanning QR codes</li>
								<li>Life time of QR Codes</li>
								<li>Trackable QR Codes</li>
								<li>Multi-User Access</li>
								<li>Folders</li>
								<li>QR Codes Samples</li>
								<li>Email After Each Scan</li>
								<li>Analytics</li>
								<li>Analytics History (in years)</li>
								<li>API Integration</li>
								<li>File Storage</li>
								<li>Advertising</li>
							</ul>
						</div>
						<div class="plans-item">
							<h4>The first</h4>
							<h4 class="price"><span>$0 &nbsp  </span>/ Month</h4>
							<ul class="plans-description">
								<li>10 000</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Yes</li>
								<li>Yes</li>
								<li>Yes</li>
								<li>3</li>
								<li>Yes</li>
								<li>500 MB</li>
								<li><strong>All QR Codes </strong>Ads-free</li>
							</ul>
							<a class="btn" href="#">Get Free </a>
						</div>
						<div class="plans-item">
							<h4>Free</h4>
							<h4 class="price"><span>$0 &nbsp  </span>/ Month</h4>
							<p>Forever Free</p>
							<ul class="plans-description">
								<li>10 000</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Yes</li>
								<li>No</li>
								<li>Yes</li>
								<li>1</li>
								<li>No</li>
								<li>100 MB</li>
								<li><strong>All QR Codes </strong>with Ads</li>
							</ul>
							<a class="btn" href="#">Get Free </a>
						</div>
						<div class="plans-item">
							<h4>Lite</h4>
							<h4 class="price"><span>$5.75 &nbsp   </span>/ Month</h4>
							<p><i class="bi bi-tag-fill"></i>You save <strong> <span>$39 </span>/ year</strong></p>
							<ul class="plans-description">
								<li>10 000</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Yes</li>
								<li>No</li>
								<li>Yes</li>
								<li>3</li>
								<li>No</li>
								<li>100 MB</li>
								<li><strong>1 QR Codes </strong>Ads-free</li>
							</ul>
							<a class="btn" href="#">Upgrade</a>
						</div>
						<div class="plans-item">
							<h4>Premium</h4>
							<h4 class="price"><span>$8.25 &nbsp </span>/ Month</h4>
							<p><i class="bi bi-tag-fill"></i>You save <strong> <span>$81</span>/ year</strong></p>
							<ul class="plans-description">
								<li>10 000</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Unlimited</li>
								<li>Yes</li>
								<li>Yes</li>
								<li>Yes</li>
								<li>3</li>
								<li>Yes</li>
								<li>500 MB</li>
								<li><strong>All QR Codes </strong>Ads-free</li>
							</ul>
							<a class="btn" href="#">Upgrade</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="maps-section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Millions Worldwide Rely on Our QR Code Technology</h2>
					<p>Our QR Code solution is powering millions of QR Code Scans around the globe</p>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="count-items">
						<div class="count-item"><i class="bi bi-qr-code"></i>
							<h3 data-count="109648">0</h3>
							<h5>QR Codes</h5>
						</div>
						<div class="count-item"><i class="bi bi-qr-code-scan"></i>
							<h3 data-count="3113055">0</h3>
							<h5>Scans</h5>
						</div>
						<div class="count-item"><i class="bi bi-people"></i>
							<h3 data-count="4527">0</h3>
							<h5>Users</h5>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div id="map"></div>
				</div>
			</div>
		</div>
	</section>
	<!--include includes/news.pug-->
	<section class="reviews-section">
		<div class="container">
			<div class="row">
				<div class="col">
					<h2>Reviews</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="reviews-items">
						<div class="reviews-item"><img class="reviews-image" src="/images/reviews1.png" alt="Review 1">
							<h3>Alex Carter</h3>
							<div class="reviews-description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown
									printer took a galley of type and scrambled it to make a type specimen book. It has
									survived not only five centuries, but also the leap</p><a class="link" href="#"></a>
							</div>
						</div>
						<div class="reviews-item"><img class="reviews-image" src="/images/reviews2.png" alt="Review 2">
							<h3>Maya Thompson</h3>
							<div class="reviews-description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown
									printer took a galley of type and scrambled it to make a type specimen book. It has
									survived not only five centuries, but also the leap</p><a class="link" href="#"></a>
							</div>
						</div>
						<div class="reviews-item"><img class="reviews-image" src="/images/reviews3.png" alt="Review 3">
							<h3>Liam Mitchell</h3>
							<div class="reviews-description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown
									printer took a galley of type and scrambled it to make a type specimen book. It has
									survived not only five centuries, but also the leap</p><a class="link" href="#"></a>
							</div>
						</div>
						<div class="reviews-item"><img class="reviews-image" src="/images/reviews1.png" alt="Review 1">
							<h3>Alex Carter</h3>
							<div class="reviews-description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown
									printer took a galley of type and scrambled it to make a type specimen book. It has
									survived not only five centuries, but also the leap</p><a class="link" href="#"></a>
							</div>
						</div>
						<div class="reviews-item"><img class="reviews-image" src="/images/reviews2.png" alt="Review 2">
							<h3>Maya Thompson</h3>
							<div class="reviews-description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown
									printer took a galley of type and scrambled it to make a type specimen book. It has
									survived not only five centuries, but also the leap</p><a class="link" href="#"></a>
							</div>
						</div>
						<div class="reviews-item"><img class="reviews-image" src="/images/reviews3.png" alt="Review 3">
							<h3>Liam Mitchell</h3>
							<div class="reviews-description">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
									Ipsum
									has been the industry's standard dummy text ever since the 1500s, when an unknown
									printer took a galley of type and scrambled it to make a type specimen book. It has
									survived not only five centuries, but also the leap</p><a class="link" href="#"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="faq-section">
		<div class="container">
			<div class="row">
				<div class="col-auto">
					<h2>FAQ</h2>
				</div>
				<div class="col">
					<div class="faq-items">
						<div class="faq-item">
							<h3>What is a QR code?<i class="icon-plus"> </i></h3>
							<div class="faq-description">
								<p>A QR code (Quick Response code) is a type of matrix barcode (or two-dimensional
									barcode)
									that can be scanned using a smartphone or QR code reader to quickly access
									information,
									such as a website URL, contact details, or other data.</p>
							</div>
						</div>
						<div class="faq-item">
							<h3>How do I create a QR code?<i class="icon-plus"></i></h3>
							<div class="faq-description">
								<p>You can create a QR code using various online QR code generators. Simply enter the
									information you want to encode (like a URL or text), customize the design if
									desired,
									and generate the QR code. You can then download and use it as needed.</p>
							</div>
						</div>
						<div class="faq-item">
							<h3>Are QR codes secure?<i class="icon-plus"></i></h3>
							<div class="faq-description">
								<p>QR codes themselves are not inherently secure. They can be used to direct users to
									malicious websites or download harmful content. Always ensure you trust the source
									of
									the QR code before scanning it, and consider using security software on your
									device.</p>
							</div>
						</div>
						<div class="faq-item">
							<h3>Can I track scans of my QR code?<i class="icon-plus"> </i></h3>
							<div class="faq-description">
								<p>Yes, many QR code generators offer tracking features that allow you to monitor how
									many
									times your QR code has been scanned, when it was scanned, and sometimes even the
									location of the scans. This can be useful for marketing and analytics purposes.</p>
							</div>
						</div>
						<div class="faq-item">
							<h3>What types of information can be stored in a QR code?<i class="icon-plus"></i></h3>
							<div class="faq-description">
								<p>QR codes can store various types of information, including URLs, plain text, contact
									information (vCard), email addresses, phone numbers, SMS messages, Wi-Fi network
									credentials, and more. The amount of data that can be stored depends on the type and
									version of the QR code.</p>
							</div>
						</div>
						<div class="faq-item">
							<h3>How do I scan a QR code?<i class="icon-plus"></i></h3>
							<div class="faq-description">
								<p>To scan a QR code, you can use your smartphone's camera app (many modern smartphones
									have
									built-in QR code scanning capabilities) or download a dedicated QR code scanner app
									from
									your device's app store. Simply open the app, point your camera at the QR code, and
									follow the prompts to access the encoded information.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section>
		<div class="container">
			<div class="row">
				<div class="col"></div>
			</div>
		</div>
	</section>
<?php
get_footer();
