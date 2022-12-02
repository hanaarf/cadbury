@extends('layout.db')

@section('title','product block')

@section('content')

{{-- <h3>Blocks</h3><br>
<div class="row">
  <div class="col-lg-12 grid-margin">
    <div class="card">
      <div class="card-body">
        <div class="row icons-list">
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>1</p>
             <img src="{{ 'https://images.sweetauthoring.com/product/58716.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>2</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/85636.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>3</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/57818.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>4</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/100491.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>5</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/89565.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>6</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/100743.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>7</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/100747.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>8</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/91616.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>9</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/57820.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>10</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/61673.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>11</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/57824.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>12</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/85634.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>13</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/94454.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>14</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/85636.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>15</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/62655.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>16</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/58007.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>17</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/57826.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>18</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/85638.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>19</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/62655.png' }}" alt="" width="210px">
          </div>
          <div class="col-sm-6 col-md-4 col-lg-3">
            <p>20</p>
            <img src="{{ 'https://images.sweetauthoring.com/product/100807.png' }}" alt="" width="210px">
          </div>
         
        
        </div>
      </div>
    </div>
  </div>
</div> --}}

<div class="col-lg-13 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">cadbury block</h4>
      <p class="card-description">
        block <code>.chocolate</code>
      </p><br>
      <button type="button" class="btn btn-warning btn-icon-text text-white btn-sm">
        <i class=" text-white"></i>                                                    
        <a class=" text-white" href="/dashboard/form-productblock">+ add</a>
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
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/58716.png' }}" alt="" > </td>
      <td>cadbury dairlymilk medley</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85636.png' }}" alt="" > </td>
      <td>cadbury choped</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/57818.png' }}" alt="" > </td>
      <td>cadbury doope</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">4</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100491.png' }}" alt="" > </td>
      <td>cadbury caramilk</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/89565.png' }}" alt="" > </td>
      <td>cadbury darkmilk</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">6</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100743.png' }}" alt="" > </td>
      <td>cadbury white</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">7</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100747.png' }}" alt="" > </td>
      <td>cadbury whiteoreo</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">8</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/91616.png' }}" alt="" > </td>
      <td>cadbury less sugar</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">9</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/57820.png' }}" alt="" > </td>
      <td>cadbury big taste oreo</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">10</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/61673.png' }}" alt="" > </td>
      <td>cadbury big taste peanut</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">11</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/57824.png' }}" alt="" > </td>
      <td>cadbury choc vlavour</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">12</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85634.png' }}" alt="" > </td>
      <td>cadbury dairlymilk</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">13</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/94454.png' }}" alt="" > </td>
      <td>cadbury chocolate</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">14</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85636.png' }}" alt="" > </td>
      <td>cadbury timeout</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">15</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/62655.png' }}" alt="" > </td>
      <td>cadbury crunchie</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">16</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/58007.png' }}" alt="" > </td>
      <td>cadbury oreo</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">17</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/57826.png' }}" alt="" > </td>
      <td>cadbury marvelious</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">18</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/85638.png' }}" alt="" > </td>
      <td>cadbury fruit&nuts</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">19</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/62655.png' }}" alt="" > </td>
      <td>cadbury crunchie</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
    <tr>
      <th scope="row">20</th>
      <td>2718</td>
      <td> <img src="{{ 'https://images.sweetauthoring.com/product/100807.png' }}" alt="" > </td>
      <td>cadbury bournvile</td>
      <td> $8.00 </td>
      <td>10 </td>
    </tr>
  </tbody>
</table> --}}

@endsection