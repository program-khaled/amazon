@extends('layouts.admin')
@section('content')
 <div class="py-3">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">اسم المنتج</th>
            <th scope="col">السعر</th>
            <th scope="col">الكمية</th>
            <th scope="col">الصنف</th>
            <th scope="col">الأحداث</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $products as $product)
          <tr>
            <td>{{ $product ->name }}</td>
            <td>{{ $product ->price }}</td>
            <td>{{ $product ->quantity }}</td>
            <td>{{ $categories {$product->category_id-1}->name}}</td>
            <td>
                <a href="{{url('admin/products/delete', $product->id)}}" class="btn btn-dark ">حذف</a>
                <a href="{{url('admin/products/edit', $product->id)}}" class="btn btn-warning">تعديل</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
 </div>
@endsection