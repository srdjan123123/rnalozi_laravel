@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('nalogs.store') }}">
            @csrf

{{--            <div class="form-group">
                <label for="nalog">Nalog:</label></br>
                Administracija:<input type="text" class="form-control" name="administracija"/></br>
                Kupac:<input type="text" class="form-control" name="kupac"/></br>
                Operater:<input type="text" class="form-control" name="operater"/></br>
                Status:<input type="text" class="form-control" name="status"/>
            </div> --}}




            <label for="administracija">Administracija:</label>
            <select  name="administracija">
              @foreach($administracijas as $administracija)
              <option value='{{$administracija->ime}}'>{{$administracija->ime}}</option>
              @endforeach
            </select>

            <label for="kupac">Kupac:</label>
            <select  name="kupac">
              @foreach($kupacs as $kupac)
              <option value='{{$kupac->kupac}}'>{{$kupac->kupac}}</option>
              @endforeach
            </select>

            <label for="operater">Operater:</label>
            <select  name="operater">
            @foreach($operaters as $operater)
              <option value='{{$operater->ime}}'>{{$operater->ime}}</option>
              @endforeach
            </select>


            <label for="status">Status:</label>
            <select  name="status">
              @foreach($statuses as $status)
              <option value='{{$status->status}}'>{{$status->status}}</option>
              @endforeach
            </select>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">
        @foreach($nalogs as $nalog)
          Admnistracija:{{$nalog->administracija}}</br>
          Kupac:{{$nalog->kupac}}</br>
          Operater:{{$nalog->operater}}</br>
          Status:{{$nalog->status}}
<form action="{{ route('nalogs.destroy', $nalog->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>
@endforeach
</div>
@endsection

{{--
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
 --}}
