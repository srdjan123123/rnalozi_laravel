@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('statuses.store') }}">
            @csrf

            <div class="form-group">
                <label for="status">Status:</label>
                <input type="text" class="form-control" name="status"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">
        @foreach($statuses as $status)
{{$status->status}}
<form action="{{ route('statuses.destroy', $status->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>
@endforeach
</div>
@endsection
