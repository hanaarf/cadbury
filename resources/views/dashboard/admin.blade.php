@extends('layout.db')

@section('title','admin')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <p class="card-title">All Admin</p>
      <div class="row">
        <div class="col-12">
          <div class="table-responsive">
            <table id="example" class="display expandable-table" style="width:100%">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Pw</th>
                  <th>img</th>
                  <th>usn</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>7382</td>
                  <td>arif</td>
                  <td>arf@gmail.com</td>
                  <td>1234</td>
                  <td><img src="../../images/faces/face1.jpg" alt="image" width="50px"/></td>
                  <td>arf_</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>8372</td>
                  <td>aulia</td>
                  <td>aulia@gmail.com</td>
                  <td>1234</td>
                  <td> <img src="../../images/faces/face2.jpg" alt="image" width="50px"/></td>
                  <td> aulla_</td>
                </tr>
              </tbody>
          </table>
          </div>
        </div>
      </div>
      </div>
    </div>

    
  </div>
@endsection