@component('components.privateWrapper', ['page_title' => 'Dashboard'])
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
@endcomponent
