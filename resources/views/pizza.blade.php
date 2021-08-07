@extends('layouts.layout')

@section('content')

        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="content">


              <div class="title m-b-md">
                Pizza List
              </div>

              <p>{{ $name }}</p>
              
              <!-- @for($i = 0; $i < count($pizza); $i++)
                <p>{{ $pizza[$i]['type'] }}</p>
              @endfor -->

              @foreach($pizza as $pizza)
                <div>
                  {{ $pizza['type'] }} - {{ $pizza['base'] }} - {{ $pizza['price'] }}
                </div>
              @endforeach

            </div>
        </div>

@endsection
