@extends('layouts.app')

@section('content')


<script src="{{ asset('js/pc.js') }}" defer></script>
<link href="{{ asset('css/pc.css') }}" rel="stylesheet">

<div class="title">Tic Tac Toe</div>
<div class="teste">
    <button class="but"></button>
    <button class="but"></button>
    <button class="but"></button>

    <button class="but"></button>
    <button class="but"></button>
    <button class="but"></button>

    <button class="but"></button>
    <button class="but"></button>
    <button class="but"></button>
    <button id="reset" class="but">Reset</button>
</div>
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <span class="copyright">Copyright &copy; Your Website 2019</span>
                <p></p>
                <span class="copyright">Joaquim Neves</span>
            </div>
            <div class="col-md-4">

            </div>
        </div>
    </div>
</footer>

@endsection