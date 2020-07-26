@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('nalogs.store') }}">
            @csrf

            <div class="form-group">
                <label for="nalog">Nalog:</label></br>
                Administracija:<input type="text" class="form-control" name="administracija"/></br>
                Kupac:<input type="text" class="form-control" name="kupac"/></br>
                Operater:<input type="text" class="form-control" name="operater"/></br>
                Status:<input type="text" class="form-control" name="status"/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">
        @foreach($nalogs as $nalog)
          {{$nalog->administracija}}
          {{$nalog->kupac}}
          {{$nalog->operater}}
          {{$nalog->status}}
<form action="{{ route('nalogs.destroy', $nalog->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>
@endforeach
</div>

@foreach($administracijas as $administracija)
{{$administracija->ime}}
@endforeach
</br>
@foreach($kupacs as $kupac)
{{$kupac->kupac}}
@endforeach
</br>
@foreach($operaters as $operater)
{{$operater->ime}}
@endforeach
</br>
@foreach($statuses as $status)
{{$status->status}}
@endforeach
@endsection
