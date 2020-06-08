@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Users</div>

                <div class="card-body">

                    @php $users = DB::table('users')->get(); @endphp

                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                    <th>Last Seen</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                <tr>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>
                                        @if(Cache::has('user-is-online-' . $user->id))
                                        <span class="text-success">Online</span>
                                        @else
                                        <span class="text-secondary">Offline</span>
                                        @endif
                                    </td>
                                    <td>{{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <button type="button" class="btn btn-primary" onclick="window.location=' {{'pc'}}'">
        {{ __('TicTacToe vs PC') }}
    </button>
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