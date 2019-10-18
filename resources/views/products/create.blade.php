@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header"> Create a new product </div>
    <div class="card-body">
      <form class="" action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="price">Price</label>
          <input type="number" name="price" class="form-control">
        </div>
        <div class="form-group">
          <label for="image">Image</label>
          <input type="file" name="image" class="form-control">
        </div>
        <div class="form-group">
          <label for="description">Description</label>
          <textarea name="description" rows="5" cols="10" class="form-control"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
@stop
