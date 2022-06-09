@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="d-flex align-items-center">Savollar</span>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Savol</th>
                                <th>Ismi</th>
                                <th>Telefon raqami</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $item)
                            <tr>
                                <td>{{ $item->question}}</td>
                                <td>{{ $item->name_q }}</td>
                                <td>{{ $item->phone_number_q }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection