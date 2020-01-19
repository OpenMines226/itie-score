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
          var planes = @json($regions->toArray());

          var mymap = L.map('mapid').setView([12.3601599,-1.8990517], 7.25);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
          		  attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
          		}).addTo(mymap)

        	for (var i = 0; i < planes.length; i++) {
        			marker = new L.marker([planes[i].long,planes[i].lat])
        				.bindPopup("<b>"+planes[i].name+"</b><br>This is the default description for a "+planes[i].name+" region.")
        				.addTo(mymap);
      		}
        </script>

    @endpush

@endcomponent
