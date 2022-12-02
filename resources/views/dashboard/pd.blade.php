@extends('layout.db')

@section('title','product drink')

@section('content')



<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Drink</h4>
      <p class="card-description">
        Drink <code>.cadbury</code>
      </p><br>
      <button type="button" class="btn btn-warning btn-icon-text text-white btn-sm">
        <i class=" text-white"></i>                                                    
        <a class=" text-white" href="/dashboard/form-productdrink">+ add</a>
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
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/95986.png' }}" alt="" > </td>
      <td>Cadbury Hot Chocolate 30% Less Sugar</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/91023.png' }}" alt="" > </td>
      <td>Cadbury Choc'Shake</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80599.png' }}" alt="" > </td>
      <td> Cadbury Highlights Dark Chocolate</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80602.png' }}" alt="" > </td>
      <td> Cadbury
        Highlights Fudge
        </td>
        <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80603.png' }}" alt="" > </td>
      <td>cadbury Highlights Milk Chocolate</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80593.png' }}" alt="" > </td>
      <td>CadburyBournville Cocoa </td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85567.png' }}" alt="" > </td>
      <td>cadbury Hot Chocolate Instant</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80607.png' }}" alt="" > </td>
      <td>cadbury Wispa Drinking Chocolate</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80597.png' }}" alt="" > </td>
      <td>cadbury Freddo Drinking Chocolate</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>9873</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80596.png' }}" alt="" > </td>
      <td>cadbury Drinking Chocolate</td>
      <td> $5.00 </td>
      <td>40 </td>
    </tr>
  </tbody>
</table> --}}
@endsection