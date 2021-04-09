@extends('base')

@section('title', 'Game')

@section('content')
<section class="main-section">
    <div class="container">
        <div class="game-body">
            <h1 id="game-title">Truth or Drink</h1>
            @include('components/warning', ['title' => 'Warning!', 'message' => 'This game is a personal project and a WIP.'])
            <div class="game-text">
                <h1 id="question">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Suscipit architecto dolore fugiat? Maxime dicta ipsa incidunt laudantium omnis saepe iusto atque! Placeat quos quibusdam voluptates animi eveniet consequuntur maxime impedit.</h1>
                <p id="remaining">x of x questions remaining</p>
            </div>

            <div class="game-button">
                <button id="nextbutton" class="app-button-inverted" >NEXT QUESTION</button>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
    var GameArray = @json($questions)
</script>
<script src="{{ mix('js/game.js') }}"></script>
@endsection