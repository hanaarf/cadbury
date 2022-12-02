@extends('layout.db')

@section('title','product biscuits')

@section('content')



<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Biscuits</h4>
      <p class="card-description">
        biscuits <code>.cadbury</code>
      </p><br>
      <button type="button" class="btn btn-warning btn-icon-text text-white btn-sm">
        <i class=" text-white"></i>                                                    
        <a class=" text-white" href="/dashboard/form-productbiscuits">+ add</a>
      </button><br><br>
      <div class="table-responsive">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#</th>
              <th>Id</th>
              <th>Img</th>
              <th>Name</th>
              <th>Price</th>
              <th>Stock</th>
              <th>Desc</th>
              <th>More</th>
              <th>action</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($datap as $item)
            <tr>
                <th scope="row">{{$loop-> iteration}}</th>
                <td>{{ $item->id }}</td> 
                <td><img src="../../imgcdbry/{{ $item->img }}" alt="image" width="50px"/></td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->stock }}</td>
                <td>{{ $item->desc }}</td>
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


{{-- <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Id</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100033.png' }}" alt="" > </td>
      <td>cadbury brunchbar chocochip</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100037.png' }}" alt="" > </td>
      <td>cadbury brunchbar reasin</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100035.png' }}" alt="" > </td>
      <td>cadbury bbrunchbar peanut</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100144.png' }}" alt="" > </td>
      <td>cadbury brunchbar protein</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100049.png' }}" alt="" > </td>
      <td>cadbury finger</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100039.png' }}" alt="" > </td>
      <td>cadbury brownie</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100031.png' }}" alt="" > </td>
      <td>cadbury freddo</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100047.png' }}" alt="" > </td>
      <td>mini finger</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100055.png' }}" alt="" > </td>
      <td>cadbury fabolous finger</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100521.png' }}" alt="" > </td>
      <td>cadbury nibbly finger</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100164.png' }}" alt="" > </td>
      <td>cadbury orangefinger</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>3547</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100053.png' }}" alt="" > </td>
      <td>cadbury whitefinger</td>
      <td> $2.00 </td>
      <td>25 </td>
    </tr>
  </tbody>
</table> --}}
  
@endsection