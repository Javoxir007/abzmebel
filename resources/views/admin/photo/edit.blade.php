@extends('layouts/app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <span class="d-flex align-items-center">Surat qo'shish</span>
                    <a href="{{ route('admin.photo.index') }}" class="btn btn-outline-success">Orqaga</a>
                </div>

                <div class="card-body">
                    <form class="row" action="{{ route('admin.photo.update', $item->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf @method('PATCH')
                        <div class="mb-3 col-3">
                            <label for="" class="form-label">Xozirgi rasmi</label>
                            <img src="{{ $item->image }}" class="form-control">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Rasm</label>
                            <input type="file" class="form-control" name="image" value="{{ $item->image }}">
                        </div>
                        <div class="mb-3 col-4">
                            <label for="" class="form-label">Kategoriya</label>
                            <select class="form-select" name="category_id">
                                <option value="{{ $item->category->id }}">{{ $item->category->name }}</option>
                                @foreach($category as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-success col-4 offset-8">Yaratish</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

