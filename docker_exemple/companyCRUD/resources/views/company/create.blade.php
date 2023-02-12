@extends('company.layout')
@section('content')
<div class="card">
  <div class="card-header">Страница создания новой компании</div>
  <div class="card-body">
      
      <form action="{{ url('company') }}" method="post">
        @csrf
        {{-- {!! csrf_field() !!} --}}
        <label>Название</label></br>
        <input type="text" name="name" id="name" class="form-control" required="required"></br>
        <label>Адрес</label></br>
        <input type="text" name="address" id="address" class="form-control" required="required"></br>
        <label>Номер телефона</label></br>
        <input type="text" name="number" id="number" class="form-control" required="required"></br>
        {{-- <label>Количество товаров</label></br>
        < type="text" name="count_of_goods" id="mobile" class="form-control" value="0"></br> --}}
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop