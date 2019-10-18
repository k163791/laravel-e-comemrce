@extends('layouts.app')

@section('content')
  <div class="card">
    <div class="card-header">
      Products
    </div>
    <div class="card-body">
      <table class="table table-hover">
        <thead>
          <th>Name</th>
          <th>Price</th>
          <th>Edit</th>
          <th>Delete</th>
        </thead>
        <tbody>
          @if($products->count() > 0)
            @foreach($products as $product)
              <tr>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td> <a href="{{ route('product.edit', ['id' => $product->id]) }}" class="btn btn-xs btn-info">
                  Edit
                </a> </td>
                <td> <a href="{{ route('product.delete', ['id' => $product->id]) }}" class="btn btn-xs btn-danger">
                  Delete
                </a> </td>
              </tr>
            @endforeach
          @else
            <tr>
              <th colspan="5" class="text-center">No Products</th>
            </tr>
          @endif
        </tbody>
      </table>
    </div>
  </div>
@stop
