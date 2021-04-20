@extends('layouts.app')

@section('content')
    <div class="wrapper pizza-index">
      <h1>Pizza Orders</h1>            

      @foreach($pizzas as $pizza)
        <div class="pizza-item">
          <img src="/img/pizza.png" alt="">
          <a href="{{ route('pizza.show', $pizza->id) }}">{{ $pizza->name }}</a>
        </div>
      @endforeach

    </div>
@endsection