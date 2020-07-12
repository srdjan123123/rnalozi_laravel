
@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('operaters.store') }}">
            @csrf

            <div class="form-group">
                <label for="ime">Operater:</label>
                <input type="text" class="form-control" name="ime"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">
        @foreach($operaters as $operater)
{{$operater->ime}}
<form action="{{ route('operaters.destroy', $operater->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>
@endforeach
</div>
@endsection
