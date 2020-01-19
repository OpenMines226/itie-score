<template>
  <section class="row">
    <div class="col-md-6">
      <div class="card">
          <!-- /.card-header -->
          <div class="card-body p-0">
            <table class="table table-striped">
              <thead>
                <tr>
                <th style="width: 5%">#</th>
                <th style="width: 300px">Name</th>
                <th>Mining Companies</th>
                <th style="width: 10%"></th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(region, index) in regions" :key="region.id">
                    <td>{{ index++ }}</td>
                    <td>
                      <img src="{{ asset('img/avatar.jpg') }}" alt="Product 1" class="img-circle img-size-32 mr-2">
                      {{ region.name }}
                    </td>

                    <td>{{ region.name }}</td>
                    <td>
                        <button type="button" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-eye"></i>
                        </button>
                        <button type="button" class="btn btn-outline-danger btn-sm">
                            <i class="fas fa-trash"></i>
                        </button>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
      </div>
    </div>
  </section>
</template>

<script>
  export default {
    mounted() {
        console.log('Component mounted.')
    }
  }
</script>
