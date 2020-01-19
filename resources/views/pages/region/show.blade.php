@component('components.publicWrapper', ['page_title' => 'Region', 'sub_page_title' => $region->name])
@slot('header')

@endslot

<div id="regionmap" style="height: 600px"></div>

<div class="card mt-4">
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 5%">#</th>
            <th style="width: 300px">{{ __('Name') }}</th>
            <th>{{ __('Description') }}</th>
            <th style="width: 150px">{{ __('IFU') }}</th>
            <th style="width: 10%">{{ __('Region') }}</th>
            <th style="width: 10%"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($region->mining_companies as $company)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('img/avatar.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                    {{ $company->name }}</td>
                <td>
                    {{ $company->decription }}
                </td>
                <td>{{ $company->ifu_number }}</td>
                <td>{{ $company->region->name }}</td>
                <td>

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
      var region = @json($region->toArray());

      var regionmap = L.map('regionmap').setView([region.long,region.lat], 7.25);
      L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors',
          }).addTo(regionmap)

          var marker = new L.marker([region.long,region.lat])
            .bindPopup("<b>"+region.name+"</b><br>This is the default description for a "+region.name+" region.")
            .addTo(regionmap);
    </script>

@endpush
@endcomponent
