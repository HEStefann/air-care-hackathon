@extends('layouts.guestUser')
@section('styles')
    <style>
        .leaflet-control-container {
            display: none !important;
        }

        .leaflet-interactive {
            stroke: none;
        }
    </style>
@endsection
@section('content')
    {{-- {{ dd($pollutionReports) }} --}}
    <div class="min-w-screen min-h-screen bg-[#525659]">
        <div class="fixed top-0 w-full z-10">
            <x-navbar :back="true" :logo="true" :notification="false" />
        </div>
        <div id="map" class="h-[100vh] w-full z-0 relative">
            <button id="getLocationButton" class="absolute top-[50px] right-[13px] z-[401]">
                <svg width="88" height="88" viewBox="0 0 88 88" fill="none" xmlns="http://www.w3.org/2000/svg"
                    class="w-[61.81px] h-[61.81px] relative" preserveAspectRatio="none">
                    <g clip-path="url(#clip0_1281_517)">
                        <path
                            d="M34.8925 57.7826C42.4617 65.7128 55.2861 66.0254 63.2303 58.4428C71.1606 50.8737 71.4597 38.0352 63.8772 30.0909C56.308 22.1607 43.483 21.8756 35.5527 29.4448C27.6084 37.0273 27.3234 49.8523 34.8925 57.7826ZM37.0865 43.1356L56.0134 35.3972C57.5228 34.8148 58.9174 36.2197 58.2385 37.6723L49.6124 56.2591C48.9182 57.78 46.9514 57.3774 46.9948 55.5119L47.1994 46.7335C47.2096 46.2946 46.9417 46.0139 46.4893 45.9896L37.7109 45.7851C35.8589 45.7557 35.5349 43.7582 37.0865 43.1356Z"
                            fill="#343A40"></path>
                    </g>
                    <defs>
                        <clipPath id="clip0_1281_517">
                            <rect width="61.8137" height="61.8137" fill="white"
                                transform="translate(44.71) rotate(46.3346)"></rect>
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </div>
        <div id="confirmation" style="display: none;"
            class="fixed bottom-0 flex flex-col items-center rounded-tl-[50px] rounded-tr-[50px] bg-[#343a40] w-full pb-[44px]">
            <svg class="pt-[5px]" xmlns="http://www.w3.org/2000/svg" width="230" height="33" viewBox="0 0 230 33"
                fill="none">
                <rect x="48" y="7" width="134" height="5" rx="2.5" fill="#D9D9D9" />
            </svg>
            <p class="text-lg font-semibold text-center text-white mt-[9px] mb-[43px]">
                Дали ова е точната локација каде сакате да пријавите загадување?
            </p>
            <div class="w-full ml-[29px] mb-[48px] flex gap-[25px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="31" height="43" viewBox="0 0 31 43" fill="none">
                    <g clip-path="url(#clip0_1281_1717)">
                        <path
                            d="M15.5 0C6.94148 0 0 7.01877 0 15.6761C0 29.1651 10.5591 39.3806 14.2492 42.5353C14.9714 43.1572 16.0321 43.1572 16.7542 42.5353C20.4409 39.3806 31 29.1651 31 15.6761C31 7.01877 24.062 0 15.5 0ZM15.5 25.7203C10.0132 25.7203 5.56632 21.224 5.56632 15.6761C5.56632 10.1281 10.0132 5.62829 15.5 5.62829C20.9868 5.62829 25.4371 10.1281 25.4371 15.6761C25.4371 21.224 20.9868 25.7203 15.5 25.7203Z"
                            fill="#79B937" />
                    </g>
                    <defs>
                        <clipPath id="clip0_1281_1717">
                            <rect width="31" height="43" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
                <p id="confirmationAddress" class="text-lg font-medium text-white">
                    Ул. Васил Ѓорѓов бр. 19
                    <br>
                    Капиштец, Скопје 1000
                </p>
            </div>
            <div class="flex gap-[21px]">
                <svg class="cursor-pointer" id="exitConfirmation" width="64" height="64" viewBox="0 0 64 64"
                    fill="none" xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" preserveAspectRatio="none">
                    <rect x="1" y="1" width="62" height="62" rx="14" stroke="white" stroke-width="2"></rect>
                    <path
                        d="M40.4713 39.7869C40.5523 39.8662 40.6167 39.9603 40.6605 40.0639C40.7044 40.1675 40.727 40.2785 40.727 40.3906C40.727 40.5028 40.7044 40.6138 40.6605 40.7174C40.6167 40.8209 40.5523 40.9151 40.4713 40.9943C40.3902 41.0736 40.2939 41.1365 40.188 41.1794C40.082 41.2223 39.9685 41.2444 39.8538 41.2444C39.7392 41.2444 39.6256 41.2223 39.5197 41.1794C39.4138 41.1365 39.3175 41.0736 39.2364 40.9943L31.9997 33.9174L24.763 40.9943C24.5993 41.1544 24.3772 41.2444 24.1456 41.2444C23.914 41.2444 23.692 41.1544 23.5282 40.9943C23.3645 40.8342 23.2725 40.6171 23.2725 40.3906C23.2725 40.1642 23.3645 39.947 23.5282 39.7869L30.766 32.7111L23.5282 25.6352C23.3645 25.4751 23.2725 25.2579 23.2725 25.0315C23.2725 24.8051 23.3645 24.5879 23.5282 24.4278C23.692 24.2677 23.914 24.1777 24.1456 24.1777C24.3772 24.1777 24.5993 24.2677 24.763 24.4278L31.9997 31.5047L39.2364 24.4278C39.4002 24.2677 39.6223 24.1777 39.8538 24.1777C40.0854 24.1777 40.3075 24.2677 40.4713 24.4278C40.635 24.5879 40.727 24.8051 40.727 25.0315C40.727 25.2579 40.635 25.4751 40.4713 25.6352L33.2335 32.7111L40.4713 39.7869Z"
                        fill="white"></path>
                </svg>
                <button id="confirmButton" data-lat="0" data-lng="0" type="button"
                    class="w-[313px] h-16 rounded-[15px] bg-[#79b937] text-xl font-semibold text-center text-white">
                    Потврди
                </button>
            </div>
        </div>
        <div id="footerPlus" class="fixed bottom-0 flex justify-center items-center w-full z-10">
            <x-footer :roundFooter='true' :noBack='true' />
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function updateConfirmationAddress(markerLatLng) {
            var apiUrl =
                `https://nominatim.openstreetmap.org/reverse?format=jsonv2&lat=${markerLatLng.lat}&lon=${markerLatLng.lng}`;
            // var apiUrl = `https://geocode.maps.co/reverse?lat=${markerLatLng.lat}&lon=${markerLatLng.lng}`;
            fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                    var street = data.address.road || '';
                    var number = data.address.house_number || '';
                    var locality = data.address.village || data.address.town || data.address.city || '';
                    var municipality = data.address.county || data.address.state_district || '';
                    var postalCode = data.address.postcode || '';

                    var address = `ул. ${street} бр. ${number}<br>${municipality}, ${locality} ${postalCode}`;
                    // var address = data.display_name;
                    document.getElementById('confirmationAddress').innerHTML = address;
                    // confirmButton set data-lat="${markerLatLng.lat}" data-lng="${markerLatLng.lng}"
                    document.getElementById('confirmButton').setAttribute('data-lat', markerLatLng.lat);
                    document.getElementById('confirmButton').setAttribute('data-lng', markerLatLng.lng);
                })
                .catch(error => {
                    console.error("Error fetching address:", error);
                });
        }

        navigator.geolocation.getCurrentPosition(function(position) {
            confirmation = document.getElementById('confirmation');
            footerPlus = document.getElementById('footerPlus');

            exitConfirmation = document.getElementById('exitConfirmation');
            var confirmationDisplayed = true;

            // Function to disable map interactions
            function disableMapInteractions() {
                map.dragging.disable();
                map.doubleClickZoom.disable();
                map.scrollWheelZoom.disable();
                map.touchZoom.disable();
                map.boxZoom.disable();
                marker.dragging.disable();
            }

            // Function to enable map interactions
            function enableMapInteractions() {
                map.dragging.enable();
                map.doubleClickZoom.enable();
                map.scrollWheelZoom.enable();
                map.touchZoom.enable();
                map.boxZoom.enable();
                marker.dragging.enable();
            }

            // Add a click event listener to the exitConfirmation element
            exitConfirmation.addEventListener('click', function() {
                confirmation.style.display = 'none';
                footerPlus.style.display = 'flex';
                confirmationDisplayed = false;
                enableMapInteractions();
            });
            footerPlus.addEventListener('click', function(e) {
                e.preventDefault();

                footerPlus.style.display = 'none';
                confirmation.style.display = 'flex';

                var markerLatLng = marker.getLatLng();

                updateConfirmationAddress(markerLatLng);
                confirmationDisplayed = true;
                disableMapInteractions();
            });

            var latitude = position.coords.latitude;
            var longitude = position.coords.longitude;

            var map = L.map('map').setView([latitude, longitude],
                15); // Set the map's view to the current coordinates with a higher zoom level

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);

            // Define a function to get the color based on pollution level
            function getColor(pollutionLevel) {
                switch (pollutionLevel) {
                    case 'low':
                        return '#EAD410';
                    case 'medium':
                        return '#DF7A03';
                    case 'high':
                        return '#D73019';
                    case 'very high':
                        return '#D73019';
                    case 'extreme':
                        return '#D73019';
                    default:
                        return '#D73019'; // Default color
                }
            }

            // Iterate through the pollutionReports array
            <?php foreach ($pollutionReports as $report): ?>
            var lat = <?php echo $report['lat']; ?>;
            var lng = <?php echo $report['lng']; ?>;
            var pollutionLevel = '<?php echo $report['pollutionLevel']; ?>';

            // Get the color based on the pollution level
            var iconColor = getColor(pollutionLevel);

            // Create a marker for each pollutionReport with a dynamic icon
            var customIcon = L.divIcon({
                className: 'custom-icon',
                html: '<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" preserveAspectRatio="none"><circle cx="28" cy="28" r="13" fill="' +
                    iconColor + '"></circle><circle cx="28" cy="28" r="28" fill="' + iconColor +
                    '" fill-opacity="0.22"></svg>'
            });

            var marker = L.marker([lat, lng], {
                icon: customIcon
            }).addTo(map);

            // You can add a popup to the marker with more information
            marker.bindPopup("Report: <?php echo $report['description']; ?>");
            <?php endforeach; ?>

            // Create a custom icon for your marker
            var customIcon = L.icon({
                iconUrl: '/images/Ping type1.svg', // Reference the icon using Laravel's public path
                iconSize: [40, 40], // Adjust the size to fit your SVG
                iconAnchor: [20, 40], // Adjust the anchor point if needed
            });

            // Add a marker to the map using the custom icon
            var marker = L.marker([latitude, longitude], {
                icon: customIcon,
                draggable: false
            }).addTo(map);
            footerPlus.click();
            disableMapInteractions();
            // Create a circle with a 200-meter radius around the marker
            var circle = L.circle([latitude, longitude], {
                color: '#5C8BB9',
                fillColor: '#5C8BB9',
                fillOpacity: 0.1, // 10% opacity
                radius: 200,
            }).addTo(map);

            // Add an event listener to the marker's drag event to check if it's within the circle
            marker.on('drag', function(e) {
                if (confirmationDisplayed) {
                    e.originalEvent.preventDefault();
                } else {
                    var markerLatLng = marker.getLatLng();
                    var circleLatLng = circle.getLatLng();

                    var distance = markerLatLng.distanceTo(circleLatLng);

                    if (distance > circle.getRadius()) {
                        // If the marker is outside the circle, move it back to the circle's edge
                        var newLatLng = markerLatLng;

                        newLatLng.lat = circleLatLng.lat + circle.getRadius() * (markerLatLng.lat -
                            circleLatLng
                            .lat) / distance;
                        newLatLng.lng = circleLatLng.lng + circle.getRadius() * (markerLatLng.lng -
                            circleLatLng
                            .lng) / distance;

                        marker.setLatLng(newLatLng);
                    }
                }
            });
            map.on('click', function(e) {
                if (confirmationDisplayed) {
                    e.originalEvent.preventDefault();
                } else {
                    var clickedPoint = e.latlng;
                    var circleLatLng = circle.getLatLng();
                    var distance = clickedPoint.distanceTo(circleLatLng);

                    // Check if the clicked point is within the circle's radius
                    if (distance <= circle.getRadius()) {
                        // Update the marker's position to the clicked point
                        marker.setLatLng(clickedPoint);
                    }
                }

            });
            marker.on('dragend', function(e) {
                var markerLatLng = marker.getLatLng();
            });
            document.getElementById('getLocationButton').addEventListener('click', function() {
                // Check if geolocation is available in the browser
                if ("geolocation" in navigator) {
                    navigator.geolocation.getCurrentPosition(function(position) {
                        var latitude = position.coords.latitude;
                        var longitude = position.coords.longitude;

                        // Update the marker's position with the current location
                        marker.setLatLng([latitude, longitude]);

                        // Update the map view to the current coordinates with a higher zoom level
                        map.setView([latitude, longitude], 15);
                    });
                } else {
                    alert("Geolocation is not available in your browser.");
                }
            });
        });
        document.getElementById('confirmButton').addEventListener('click', function() {
            var lat = document.getElementById('confirmButton').getAttribute('data-lat');
            var lng = document.getElementById('confirmButton').getAttribute('data-lng');
            window.location.href = `/reportForm?lat=${lat}&lng=${lng}`;
        });
    </script>
@endsection
