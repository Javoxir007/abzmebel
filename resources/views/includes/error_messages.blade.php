@if($errors = \Illuminate\Support\Facades\Session::get('errors'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
            @foreach($errors->messages() as $error)
                @foreach($error as $message)
                <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <strong class="d-flex align-items-center">{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endforeach
            @endforeach
            </div>
        </div>
    </div>        
@endif

@if($message = Session::get('msg'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="alert alert-danger alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <strong class="d-flex align-items-center">{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div> 
@endif

@if($message = Session::get('success'))
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 mt-3">
                <div class="alert alert-success alert-dismissible fade show d-flex justify-content-between" role="alert">
                    <strong class="d-flex align-items-center">{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        </div>
    </div> 
@endif

