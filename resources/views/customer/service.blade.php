@extends('customer.layouts.app')

@section('content')

<!-- Datatables -->
            <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Service</h6>
                </div>

                            <div class="table-responsive p-3">
                  <table class="table align-items-center table-flush" id="dataTable">
                    <thead class="thead-light">
                      <tr>
                        <th>Name</th>
                        <th>office</th>
                        <th>Status</th>
                   
                      </tr>
                    </thead>
                   
                    <tbody>
                    @foreach($services as $service)
                      <tr>
                        <td>{{$service->name}}</td>
                        <td>{{$service->office_id}}</td>
                        <td>{{$service->status}}</td>
                      

                      </tr>
                      @endforeach
  
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
@endsection
