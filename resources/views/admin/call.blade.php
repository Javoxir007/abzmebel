@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <span class="d-flex align-items-center">Ustani chaqiring</span>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Manzil</th>
                                <th>Vaqt</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($data as $item)
                            <tr>
                                <td>{{ $item->address}}</td>
                                <td>{{ $item->time }}</td>
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