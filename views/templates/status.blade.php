<div class = 'alert alert-success'>
   <p>Time check: {{\Carbon\Carbon::now()}}</p>
</div>

    @if(count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class = 'alert alert-danger'>
                {{$error}}
            </div>
        @endforeach
    @endif

    @if(session('success'))
        <div class = 'alert alert-success'>
            {{'success'}}
        </div>
    @endif
    
    @if(session('error'))
        <div class = 'alert alert-danger'>
            {{'success'}}
        </div>
    @endif