@extends("layouts.dashboard")
@section("title") Location @endsection
@section("content")
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Ads</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Ads</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <a class="btn btn-lg btn-success mb-3" data-toggle="modal" data-target="#location"><i class="fa fa-plus"></i> Add Location </a>
                    </div>
                </div>
                @include('dashboard.includes.alert.message')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="example" class="table table-striped table-bordered table-hover text-center" style="width:100%">
                                    <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>City</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($ads->count() > 0)
                                        @foreach($ads as $ad)
                                    <tr>
                                        <td class="align-middle">{{$ad->id}}</td>
                                        <td class="align-middle">{{$ad->city}}</td>
                                    </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

    <!-- Modal link -->
    <div class="modal fade" id="location" tabindex="-1" role="dialog" aria-labelledby="locationTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-center" id="locationTitle">Add Location</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.location.doCreate')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="account_id" class="col-sm-4 col-form-label">City</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control @error('city') is-invalid @enderror" id="city" placeholder="city" name="city">
                                @error('city')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary justify-content-start">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal link -->
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
            if({{$errors->has('city')}})
                $('#location').modal('show');
        } );
    </script>
@endsection
