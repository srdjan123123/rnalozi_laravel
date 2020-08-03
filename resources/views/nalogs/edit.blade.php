@extends('index')
@section('main')

<div class="pt-5">
  <form method="post" action="{{ route('nalogs.update',$nalog->id) }}">
     @method('PATCH')
            @csrf

{{--            <div class="form-group">
                <label for="nalog">Nalog:</label></br>
                Administracija:<input type="text" class="form-control" name="administracija"/></br>
                Kupac:<input type="text" class="form-control" name="kupac"/></br>
                Operater:<input type="text" class="form-control" name="operater"/></br>
                Status:<input type="text" class="form-control" name="status"/>
            </div> --}}

            <?php
            /*$nalozi = App\Status::find(4);
            echo $nalozi;*/
            //$nalozi = App\Status::find(4)->nalogs;
          //  var_dump($nalozi);

//dd($nalozi);
//var_dump($nalozi);
//dd($flight);
            ?>

<h1>sadasd</h1>
</br>

            <label for="administracija">Administracija:</label>
            <select  name="administracija">
              @foreach($administracijas as $administracija)
              <option value='{{$administracija->id}}'>{{$administracija->ime}}</option>
              @endforeach
            </select>

            <label for="kupac">Kupac:</label>
            <select  name="kupac">
              @foreach($kupacs as $kupac)
              <option value='{{$kupac->id}}'>{{$kupac->kupac}}</option>
              @endforeach
            </select>

            <label for="operater">Operater:</label>
            <select  name="operater">
            @foreach($operaters as $operater)
              <option value='{{$operater->id}}'>{{$operater->ime}}</option>
              @endforeach
            </select>


            <label for="status">Status:</label>
            <select  name="status">
              @foreach($statuses as $status)
              <option value='{{$status->id}}'>{{$status->status}}</option>
              @endforeach
            </select>

</br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        <div class="pt-5">



          Administracija:{{$administracija->find($nalog->administracija)->ime}}</br>
          Kupac:{{$kupac->find($nalog->kupac)->kupac}}</br>
          Operater:{{$operater->find($nalog->operater)->ime}}</br>
          Status:{{$status->find($nalog->status)->status}}
<form action="{{ route('nalogs.destroy', $nalog->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm" type="submit" >Delete</button>
                </form>
</br>

</div>
<h1>Pretraga</h1>


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
