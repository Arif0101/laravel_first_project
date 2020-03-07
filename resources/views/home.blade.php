@extends('layout')

@section('content')
  @include('navbar');  
  <article>
    <h1>Dhaka (Home)</h1>
    
    <p>Dhaka is the capital city of Bangladesh. It is the most populous city in the  world, with a metropolitan area of over 13 million inhabitants.</p>
    <p>Standing on the River Thames, London has been a major settlement for two millennia, its history going back to its founding by the Romans, who named it Londinium.</p>
  </article>

    <h2>Form Validation</h2>
    <form action="{{url('/form')}}" method = "POST">
        @csrf
        <input type = "text" name = "name" placeholder = "Name">
        <input type = "text" name = "email" placeholder= "E-mail">
        <button type ="text">Submit</button>
  
    </form>


  @endsection