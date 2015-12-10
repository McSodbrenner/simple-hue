<!doctype html>
<html>
<head>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/css/materialize.min.css">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col s12">

			<ul class="collapsible" data-collapsible="accordion">
				<li>
					<div class="collapsible-header">
						Wohnzimmer
					</div>
					<div class="collapsible-body">
						<p>
							lfjdskfls<br />
							fjkldujfdlksö
						</p>
					</div>
				</li>
				<li>
					<div class="collapsible-header">
						<span style="display: block; width: 1.5rem; float: left; line-height: 3rem">
						<img src="images/wohnzimmer.png" alt="" class="circle responsive-img">
							</span>Wohnzimmer
					</div>
					<div class="collapsible-body">
						<p>
							lfjdskfls<br />
							fjkldujfdlksö
						</p>
					</div>
				</li>
			</ul>

			<div class="card">
				<div class="card-content">
					<span class="card-title">Card Title
						<div class="chip">
							Jane Doe
						</div>
					</span>
					<p>
						I am a very simple card. I am good at containing small bits of information.
						I am convenient because I require little markup to use effectively.
					</p>
				</div>
				<div class="card-action">
					<a href="#">This is a link</a>
					<a href="#">This is a link</a>
				</div>
			</div>

		</div>
	</div>
</div>

<script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/materialize/0.97.3/js/materialize.min.js"></script>
<script>
$(document).ready(function(){
	console.log($('.collapsible'));
	$('.collapsible').collapsible();
});
</script>




<script src="jshue.js"></script>
<script>
function Hue() {
	self.api = jsHue();

	self.connect = function(){
		self.api.discover(
			function(bridges) {
				if(bridges.length === 0) {
					console.log('No bridges found. :(');
				}
				else {
					bridges.forEach(function(b) {
						console.log('Bridge found at IP address %s.', b.internalipaddress);
					});
					self.bridge = api.bridge(b.internalipaddress);

					username = '1aede1670813c73e283e7a3d93c0db';
					self.user = self.bridge.user(username);
				}
			},
			function(error) {
				console.error(error.message);
			}
		);
	}

	var bridge = api.bridge('192.168.1.5');
}

var hue = new Hue();
var user = hue.getUser();
// ct 153 (6500K) to 500 (2000K)
// bri 1 to 254
user.setLightState(1, { on: true, transitiontime: 10, ct: 500, bri: 1 }, function(data) {});


// create user account (requires link button to be pressed)
//bridge.createUser('McSodbrenner', function(data) {
//	// extract bridge-generated username from returned data
//	console.log(data[0]);
//	var username = data[0].success.username;
//
//	console.log('New username:', username);
//
//});

// instantiate user object with username
//var username = '1aede1670813c73e283e7a3d93c0db';
//var user = bridge.user(username);
//console.log(user.getLights(function(lights){
//	console.log(lights);
//}));
//console.log(user);

</script>
</body>
</html>
