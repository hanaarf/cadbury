@extends('layout.db')

@section('title','form')

@section('content')

<div class="col-md-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title"> Add Product</h4>
      <p class="card-description">
        bag & boxes <code>.cadbury</code>
      </p><br>
      <form class="forms-sample">
        <div class="form-group row">
          <label for="exampleInputEmail2" class="col-sm-3 col-form-label">img</label>
          <div class="col-sm-9">
            <div class="btn-group">
              <button type="button" class="btn btn-primary">Select</button>
              <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuSplitButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="sr-only">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuSplitButton1">
                <a class="dropdown-item" href="#">img1</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">img2</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">img3</a>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputMobile" class="col-sm-3 col-form-label">name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="exampleInputMobile" placeholder="name">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputPassword2" class="col-sm-3 col-form-label">price</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="exampleInputPassword2" placeholder="price">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label">stock</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="exampleInputConfirmPassword2" placeholder="text">
          </div>
        </div>
        <div class="form-group row">
          <label for="exampleInputUsername2" class="col-sm-3 col-form-label">desc</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" id="exampleInputUsername2" placeholder="text">
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
  
@endsection