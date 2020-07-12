
@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('administracijas.store') }}">
            @csrf

            <div class="form-group">
                <label for="ime">Administracija:</label>
                <input type="text" class="form-control" name="ime"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">
        @foreach($administracijas as $administracija)
{{$administracija->ime}}
<form action="{{ route('administracijas.destroy', $administracija->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>
@endforeach
</div>
@endsection
