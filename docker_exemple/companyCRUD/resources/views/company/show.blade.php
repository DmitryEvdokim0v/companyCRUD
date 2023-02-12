@extends('company.layout')
@section('content')
<div class="card w-75">
  <div class="card-header">Страница компании</div>
  <div class="card-body">
    <div class="card-body">
      <h5 class="card-title">Название : {{ $company[0]->name }}</h5>
      <p class="card-text">Адрес : {{ $company[0]->address }}</p>
      <p class="card-text">Номер телефона : {{ $company[0]->number }}</p>
      <p class="card-text">Количество товаров : {{ $company[0]->count_of_goods }}</p>
      <a href="{{ url('/goods/create?id='.$company[0]->id)}}" class="btn btn-primary">Добавить товар</a>
    </div>  
  </div>
</div>
<br/>
<div class="table-responsive">
  <table class="table">
      <thead class="table-dark">
          <tr>
              <th>№</th>
              <th>Название</th>
              <th>Цена</th>
              <th>Количество</th>
              <th>Действия</th>
          </tr>
      </thead>
      <tbody>
        {{-- {{$company['items']}} --}}
        @foreach($company['items'] as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->price }}</td>
                <td>{{ $item->count }}</td>
                <td>
                    {{-- <a href="{{ url('/goods/' . $item->id) }}" title="View goods"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Просмотр</button></a> --}}
                    <a href="{{ url('/goods/' . $item->id . '/edit?company_id='.$item->company_id) }}" title="Edit goods"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Изменить</button></a>
                    <form method="POST" action="{{ url('/goods' . '/' . $item->id.'?id='.$item->company_id) }}" accept-charset="UTF-8" style="display:inline">
                        {{ method_field('DELETE') }}
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-danger btn-sm" title="Delete goods" onclick="return confirm(&quot;Вы подтверждаете удаление?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach 
      </tbody>
  </table>
</div>
@endsection