@extends('layouts.admin')
@section('content')
 <div class="py-3">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">الاسم</th>
            <th scope="col">الوصف</th>
            <th scope="col">الأحداث</th>
          </tr>
        </thead>
        <tbody>
          @foreach ( $categories as $category)
          <tr>
            <td>{{ $category ->name }}</td>
            <td>{{ $category ->descrption }}</td>
            <td>
              <a href="{{url('admin/categories/delete', $category->id)}}" class="btn btn-dark ">حذف</a>
              <a href="{{url('admin/categories/edit', $category->id)}}" class="btn btn-warning">تعديل</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
 </div>
@endsection