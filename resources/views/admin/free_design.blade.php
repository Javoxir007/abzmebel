@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="d-flex align-items-center">Bepul dizayn</span>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Ismi</th>
                                <th>Telefon raqami</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone_number }}</td>
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