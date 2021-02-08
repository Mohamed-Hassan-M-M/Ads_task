@extends("layouts.dashboard")
@section("title") Ads @endsection
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
                        <a class="btn btn-lg btn-success mb-3" href="{{route("admin.advertisement.create")}}"><i class="fa fa-plus"></i> Add Advertisement </a>
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
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
                                        <th>City</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if($ads->count() > 0)
                                        @foreach($ads as $ad)
                                    <tr>
                                        <td class="align-middle">{{$ad->title}}</td>
                                        <td class="align-middle">{{$ad->description}}</td>
                                        <td class="align-middle"><img src="{{$ad->image}}" class="rounded mx-auto d-block" style="width: 70px;height: 70px;"></td>
                                        <td class="align-middle">{{$ad->location->city}}</td>
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
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $("#example").DataTable();
        } );
    </script>
@endsection
