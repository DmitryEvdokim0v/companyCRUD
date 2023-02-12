@extends('goods.layout')
@section('content')
<div class="card">
  <div class="card-header">Страница изменения данных товара</div>
  <div class="card-body">
      
      <form action="{{ url('goods/' .$goods->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$goods->id}}" id="id" />
        <label>Название</label></br>
        <input type="text" name="name" id="name" value="{{$goods->name}}" class="form-control" required="required"></br>
        <label>Цена</label></br>
        <input type="text" name="price" id="price" value="{{$goods->price}}" class="form-control" required="required"></br>
        <label>Количество</label></br>
        <input type="text" name="count" id="count" value="{{$goods->count}}" class="form-control" required="required"></br>
        {{-- <label>Компания</label></br> --}}
        <input type="hidden" name="company_id" id="company_id" class="form-control" required="required" readonly value="{{$goods->company_id}}"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop