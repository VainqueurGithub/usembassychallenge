@extends('Layout.base')
@section('content')

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">List of speces</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            
              <!-- /.card-header -->
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-sm-8"></div>
                  <div class="col-sm-4" style="text-align: right;"><a href="{{route('Ressencements.create')}}"><button class="btn btn-info"><i class="fas fa-plus">Add New Rcessements</i></button></a></div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Poisson</th>
                    <th>Agent</th>
                    <th>Campagne</th>
                    <th>Quantite</th>
                    <th>Date</th>
                    <th>Quota</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($Ressencements as $Ressencement)
                       <tr>
                        <td>{{$Ressencement->Poisson_id}}</td>
                        <td>{{$Ressencement->Agent_id}}</td>
                        <td>{{$Ressencement->Campagne_id}}</td>
                        <td>{{$Ressencement->Quantite}}</td>
                        <td>{{$Ressencement->Date_ressencement}}</td>
                        <td>{{$Ressencement->Quota}}</td>
                        <td></td>
                        <td></td>
                       </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@endsection