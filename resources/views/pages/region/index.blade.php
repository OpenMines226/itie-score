@component('components.privateWrapper', ['page_title' => 'Regions', 'sub_page_title' => 'All regions'])
<div class="card">
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 5%">#</th>
            <th style="width: 300px">{{ __('Name') }}</th>
            <th>{{ __('Longitude') }}</th>
            <th>{{ __('Latitude') }}</th>
            <th style="width: 10%">{{ __('Created') }}</th>
            <th style="width: 10%"></th>
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
                <td>{{ $region->long }}</td>
                <td>{{ $region->lat }}</td>
                <td>{{ $region->created_at->diffForHumans() }}</td>
                <td>
                    <button type="button" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-eye"></i>
                    </button>
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
    <div class="card-footer clearfix">
        {{ $regions->links('partials._privatePagination') }}
    </div>
</div>
@endcomponent
