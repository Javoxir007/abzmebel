@if($message = Session::get('good'))
    <div class="all-modal-send" id="modal-send" style="display: block;">
        <div class="modal-send">
            <div class="container">
                <div class="main-modal-send">
                    <h2>{{ __('Your application has been sent') }}11111111!</h2>
                    <!-- <button id="close-send" onclick="return confirm('O`chirmoqchimisiz?')">Ok</button> -->
                    <a href="{{ route('test', app()->getLocale()) }}"><button id="close-send">Ok</button></a>
                </div>
            </div>
        </div>
    </div>
@endif