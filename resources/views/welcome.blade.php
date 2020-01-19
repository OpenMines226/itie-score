@component('components.publicWrapper', ['page_title' => 'Welcome'])
    @slot('header')
        <div id="mapid" style="height: 600px"></div>
    @endslot

    @push('styles')
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
            integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
            crossorigin=""/>
    @endpush

    @push('scripts')
         <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js"
            integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
            crossorigin=""></script>

        <script>
          var planes = [
        		["7C6B07",12.3601599,-1.8990517],
        		["7C6B38",12.3672025,-1.662159],
        		["7C6CA1",12.3672025,-1.662159],
        		["7C6CA2",12.3601599,-1.8990517],
        		["C81D9D",12.3111921,-1.6140938],
        		["C82009",12.3051543,-1.4544488],
      		];
          var mymap = L.map('mapid').setView([12.3601599,-1.8990517], 9.25);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          		  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
          		}).addTo(mymap)

        	for (var i = 0; i < planes.length; i++) {
        			marker = new L.marker([planes[i][1],planes[i][2]])
        				.bindPopup(planes[i][0])
        				.addTo(mymap);
      		}
        </script>
    @endpush

@endcomponent
