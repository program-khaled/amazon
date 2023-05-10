@extends('layouts.admin')
@section('content')
<div class="py-3">
  @if ($errors->any())
  <div class="alert alert-danger">
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  </div>
@endif
  <form action="{{ url('admin/products/store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">اسم المنتج</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
      </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">الكمية</label>
        <input type="number" class="form-control" id="quantity" name="quantity">
      </div>
    <div class="mb-3">
        <label for="price" class="form-label">سعر المنتج</label>
        <input type="number" class="form-control" id="price" name="price">
      </div>
    <div class="mb-3">
       <label for="descrption" class="form-label">وصف المنتج</label>
        <textarea class="form-control" id="descrption" name="descrption" rows="3"></textarea>
      </div>
      <div class="mb-3">
        <label for="category_id" class="form-label">اختر الصنف</label>
        <select class="form-control" name="category_id" id="category_id">
          <option value="#"></option>
          @foreach($categories as $category)
          <option value="{{ $category->id }}">{{ $category->name }}</option>
          @endforeach
        </select>
      </div>
      <div class="mp-3">
        <input type="submit" value="احفظ" class="btn btn-info">
      </div>
    </form>
</div>
@endsection
