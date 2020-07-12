
@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('kupacs.store') }}">
            @csrf

            <div class="form-group">
                <label for="kupac">Kupac:</label>
                <input type="text" class="form-control" name="kupac"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">
        @foreach($kupacs as $kupac)
{{$kupac->kupac}}
<form action="{{ route('kupacs.destroy', $kupac->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>
@endforeach
</div>
@endsection
