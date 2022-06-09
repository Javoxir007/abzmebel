@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Surat qo'shish</span>
                    <a href="{{ route('admin.photo.create') }}" class="btn btn-outline-success">Yangisini qo'shish</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Kategoriya nomi</th>
                                <th width="5%">Rasm</th>
                                <th colspan="2">Harakat</th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach($images as $item)
                            <tr>
                                <td>{{ $item->category->name }}</td>
                                <td>
                                    <img src="{{ $item->image }}" style="width: 100%;">
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('admin.photo.edit', $item->id) }}" class="btn btn-primary">O`zgartirish</a>
                                </td>
                                <td class="text-center"> 
                                    <form action="{{ route('admin.photo.destroy', $item->id) }}" method="POST">
                                    @csrf @method('DELETE')
                                        <button class="btn btn-danger" onclick="return confirm('Aniq o`chirmoqchimisiz?')">O`chirish</button>
                                    </form>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>

                    {{ $images->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection