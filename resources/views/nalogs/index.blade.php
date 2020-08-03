@extends('index')
@section('main')



<div class="pt-5">
  <form method="get" action="{{ route('nalogs.index') }}">
            @csrf
            <label for="administracija">Administracija:</label>
            <select  name="administracija">
            <option value=""></option>
              @foreach($administracijas as $administracija)
              <option value='{{$administracija->id}}'>{{$administracija->ime}}</option>
              @endforeach
            </select>

            <label for="kupac">Kupac:</label>
            <select  name="kupac">
              <option value=""></option>

              @foreach($kupacs as $kupac)
              <option value='{{$kupac->id}}'>{{$kupac->kupac}}</option>
              @endforeach
            </select>

            <label for="operater">Operater:</label>
            <select  name="operater">
              <option value=""></option>

            @foreach($operaters as $operater)
              <option value='{{$operater->id}}'>{{$operater->ime}}</option>
              @endforeach
            </select>


            <label for="status">Status:</label>
            <select  name="status">
              <option value=""></option>

              @foreach($statuses as $status)
              <option value='{{$status->id}}'>{{$status->status}}</option>
              @endforeach
            </select>

          </br>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          </div>
          <div class="pt-5">
            @foreach($flight as $flight2)
              id:{{$flight2->id}}
              admin:{{$flight2->administracija}}
              kupac:{{$flight2->kupac}}
              operater:{{$flight2->operater}}
              status:{{$flight2->status}}</br>

    

              @endforeach


<?php
//dd($flight);
 ?>
    @endsection
