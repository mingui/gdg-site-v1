 @if(Session::get('info') || Session::get('success') || Session::get('danger') || Session::get('warning'))     @if ($message = Session::get('info'))         <div class="alert alert-info">             {{ $message }} }}         </div>     @endif     @if ($message = Session::get('success'))         <div class="alert alert-success">             {{ $message }}         </div>     @endif     @if ($message = Session::get('danger'))         <div class="alert alert-danger">             {{ $message }} }}         </div>     @endif     @if ($message = Session::get('warning'))         <div class="alert alert-warning">             {{ $message }} }}         </div>     @endif@endif <div>     <div id="fb-root"></div>     <script async defer src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2&appId=1846400222253549&autoLogAppEvents=1"></script>     <div class="fb-share-button" data-href="{{ url('/') }}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a target="_blank" href="{{ url('/') }}" class="fb-xfbml-parse-ignore">Compartir</a></div> </div>@if ($errors->any())    @foreach ($errors->all() as $error)       <div class="alert alert-danger">           {{ $error }}       </div>    @endforeach@endif