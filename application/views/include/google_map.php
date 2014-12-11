<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"> 
		<meta charset="UTF-8"> 

		<script type="text/javascript" src = "https://maps.googleapis.com/maps/api/js?sensor=false&language=kr"></script>  <!-- kr로 하면 한국어 -->
		<script type="text/javascript"> 
			var map; 
			function initialize() { 
					var myOptions = { 
					zoom: 15, // 지도 확대 레벨
					center: new google.maps.LatLng(37.505657, 127.025797),  // 좌표값
					mapTypeId: google.maps.MapTypeId.ROADMAP 
					}; 
					map = new google.maps.Map(document.getElementById('map_canvas'), 
					myOptions); 
					var marker = new google.maps.Marker({ 
					map: map, 
					position: map.getCenter() 
				}); 
				var infowindow = new google.maps.InfoWindow(); 
				infowindow.setContent('odalzza.blog.me'); // 마커
				google.maps.event.addListener(marker, 'click', function() { 
					infowindow.open(map, marker); 
				}); 
			}
			google.maps.event.addDomListener(window, 'load', initialize); 
		</script> 
	</head> 
	<body> 
		<div id="map_canvas"> </div> 
	</body>
</html>