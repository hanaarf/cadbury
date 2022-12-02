@extends('layout.db')

@section('title','product bags&boxes')

@section('content')



<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Bag & Boxes</h4>
      <p class="card-description">
        bag & boxes <code>.cadbury</code>
      </p><br>
      <button type="button" class="btn btn-warning btn-icon-text text-white btn-sm">
        <i class=" text-white"></i>                                                    
        <a class=" text-white" href="/dashboard/form-productbag">+ add</a>
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
      <th scope="col">id</th>
      <th scope="col">Photo</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Stok</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85560.png' }}" alt="" > </td>
      <td> bitsa wispa</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85556.png' }}" alt="" > </td>
      <td>boots bites</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85564.png' }}" alt="" > </td>
      <td>curlywurly</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85565.png' }}" alt="" > </td>
      <td>crunchie rock</td>
      <td> $12.00 </td>
      <td>20 </td>

    </tr>
    <tr>
      <th scope="row">5</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85552.png' }}" alt="" > </td>
      <td>dickly deker</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/58018.png' }}" alt="" > </td>
      <td>velvet</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85561.png' }}" alt="" > </td>
      <td>fudge brownies</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/57865.png' }}" alt="" > </td>
      <td>eclairs</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80793.png' }}" alt="" > </td>
      <td>picnic bites</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85557.png' }}" alt="" > </td>
      <td>twirl bites</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/57853.png' }}" alt="" > </td>
      <td>white button</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80795.png' }}" alt="" > </td>
      <td>cadbury caramel</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/80785.png' }}" alt="" > </td>
      <td>cadbury fredofaces</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85553.png' }}" alt="" > </td>
      <td>cadbury buttons</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85547.png' }}" alt="" > </td>
      <td>cadbury giantbuttons</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>1256</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85549.png' }}" alt="" > </td>
      <td>cadbury mixedbuttons</td>
      <td> $12.00 </td>
      <td>20 </td>
    </tr>
  </tbody>
</table> --}}
  
@endsection