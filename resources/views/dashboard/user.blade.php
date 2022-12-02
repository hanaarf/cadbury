@extends('layout.db')

@section('content')

<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <p class="card-title mb-0">All Users</p><br>
      <div class="table-responsive">
        <table class="table table-striped table-borderless">
          <thead>
            <tr>
              <th>#</th>
              <th>Id</th>
              <th>Name</th>
              <th>Email</th>
              <th>Pw</th>
              <th>img</th>
              <th>role</th>
              <th>more</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($datapengguna as $item)
            <tr>
                <th scope="row">{{$loop-> iteration}}</th>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->pw }}</td>
                <td><img src="../../images/faces/{{ $item->img }}" alt="image" width="50px"/></td>
                <td>{{ $item->roles->name }}</td>
                <td><a href=""><div class="badge badge-success">detail</div></a></td>
                <td>
                  <a href=""><div class="badge badge-primary"> <i class="mdi mdi-border-color"></i></div></a>
                  <a href=""><div class="badge badge-danger"> <i class="mdi mdi-delete"></i></div></a>
                </td>
                {{-- <td>
                    @foreach ( $item->student  as $iyah)
                        - {{ $iyah->nama }} <br>
                    @endforeach
                </td> --}}
            </tr>
            @endforeach
        </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection