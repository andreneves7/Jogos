@extends('layouts.app')
@section('content')

<style>
body {
    height: 1000px;
    background-color: blue;
    /* For browsers that do not support gradients */
    background-image: radial-gradient(#5F9EA0, #00008B);
    /* Standard syntax (must be last) */
}

p {
    color: white;
}

h5 {
    color: white;
}

label {
    color: white;
}
</style>

<body>
    <form action="{{ route('perfil.update', ['perfil' => $user->id]) }}" method="POST">
        @csrf
        @method('PUT')

        @include('auth.editfor')

        <button class="btn btn-primary ">alterar</button>
    </form>
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
</body>
@endsection