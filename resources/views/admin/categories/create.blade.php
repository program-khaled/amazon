@extends('layouts.admin')
@section('content')
<div class="py-3">
  <form action="{{ url('admin/categories/store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">اسم</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="اسم المنتج">
      </div>
    <div class="mb-3">
       <label for="descrption" class="form-label">وصف</label>
        <textarea class="form-control" id="descrption" name="descrption" rows="3"></textarea>
      </div>
      <div class="mp-3">
        <input type="submit" value="احفظ" class="btn btn-info">
      </div>
    </form>
</div>
@endsection
