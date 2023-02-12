@extends('company.layout')
@section('content')
<div class="card">
  <div class="card-header">Страница изменения данных компании</div>
  <div class="card-body">
      
      <form action="{{ url('company/' .$company->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$company->id}}" id="id" />
        <label>Название</label></br>
        <input type="text" name="name" id="name" value="{{$company->name}}" class="form-control" required="required"></br>
        <label>Адрес</label></br>
        <input type="text" name="address" id="address" value="{{$company->address}}" class="form-control" required="required"></br>
        <label>Номер телефона</label></br>
        <input type="text" name="number" id="number" value="{{$company->number}}" class="form-control" required="required"></br>
        <input type="submit" value="Сохранить" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop