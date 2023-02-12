@extends('company.layout')
@section('content')
    <div class="container" >
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Список компаний</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/company/create') }}" class="btn btn-success btn-sm" title="Add New Company">
                            <i class="fa fa-plus" aria-hidden="true"></i> Добавить новую компанию
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="table-dark">
                                    <tr>
                                        <th>№</th>
                                        <th>Название</th>
                                        <th>Адрес</th>
                                        <th>Контактный телефон</th>
                                        <th>Количество товаров</th>
                                        <th>Действия</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($company as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->address }}</td>
                                        <td>{{ $item->number }}</td>
                                        <td>{{ $item->count_of_goods }}</td>
                                        <td>
                                            <a href="{{ url('/company/' . $item->id) }}" title="View company"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Просмотр</button></a>
                                            <a href="{{ url('/company/' . $item->id . '/edit') }}" title="Edit company"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Изменить</button></a>
                                            <form method="POST" action="{{ url('/company' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete company" onclick="return confirm(&quot;Вы подтверждаете удаление?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Удалить</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection