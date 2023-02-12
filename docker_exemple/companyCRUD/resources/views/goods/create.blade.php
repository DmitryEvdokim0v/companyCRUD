@extends('goods.layout')
@section('content')
<div class="card">
  <div class="card-header">Страница создания нового товара</div>
  <div class="card-body">
      
      <form action="{{ url('goods') }}" method="post">
        {!! csrf_field() !!}
        <label>Название</label></br>
        <input type="text" name="name" id="name" class="form-control" required="required"></br>
        <label>Цена</label></br>
        <input type="text" name="price" id="price" class="form-control" required="required"></br>
        <label>Количество</label></br>
        <input type="text" name="count" id="count" class="form-control" required="required"></br>
        {{-- <label>Компания< /label></br> --}}
        <input type="hidden" name="company_id" id="company_id" class="form-control" required="required" readonly value="{{$id}}"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop