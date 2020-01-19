@component('components.publicWrapper', ['page_title' => 'Welcome'])
    @slot('header')
        <div id="mapid" style="height: 600px"></div>

    @endslot

    <div class="row">
      <div class="col-md-7">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 300px">{{ __('Name') }}</th>
                    <th style="width: 10%">{{ __('Mining Companies') }}</th>
                    <th style="width: 15%"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($regions as $region)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('img/avatar.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                            {{ $region->name }}
                        </td>
                        <td>{{ $region->mining_companies_count }}</td>
                        <td>
                            <a href="{{ route('regions.show', $region) }}" type="button" class="btn btn-outline-primary btn-sm">
                                <i class="fas fa-eye"></i>
                            </a>
                            <button type="button" class="btn btn-outline-danger btn-sm">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
        </div>
      </div>

      <div class="col-md-5">
        <div class="card">
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th style="width: 5%">#</th>
                    <th style="width: 300px">{{ __('Name') }}</th>
                    <th style="width: 20%">{{ __('Region') }}</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($companies as $company)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <img src="{{ asset('img/avatar.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                            {{ $company->name }}</td>

                        <td>{{ $company->region->name }}</td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->

            <div class="card-footer clearfix">
                {{ $companies->links('partials._privatePagination') }}
            </div>
        </div>
      </div>
    </div>

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
