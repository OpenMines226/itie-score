@component('components.privateWrapper', ['page_title' => 'Users', 'sub_page_title' => 'All users'])
<div class="card">
    <!-- /.card-header -->
    <div class="card-body p-0">
      <table class="table table-striped">
        <thead>
          <tr>
            <th style="width: 10px">#</th>
            <th style="width: 300px">{{ __('Name') }}</th>
            <th>{{ __('Email') }}</th>
            <th style="width: 150px">{{ __('Joined') }}</th>
            <th style="width: 120px"></th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('img/avatar.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                    {{ $user->name }}</td>
                <td>
                    {{ $user->email }}
                </td>
                <td>{{ $user->created_at->diffForHumans() }}</td>
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
        {{ $users->links('partials._privatePagination') }}
    </div>
</div>
@endcomponent