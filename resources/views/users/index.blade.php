@extends('layouts.lista')

@section('content')


    <div class="masthead">
2

        @if(session()->has('message'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gratulacje!</strong> {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif


        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj Użytkownika</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('users.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-floating">
                    <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    <label for="name">Imie</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="surname" type="text" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus/>
                    <label for="surname">Nazwisko</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus/>
                    <label for="email">E-mail</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="password" type="password" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus/>
                    <label for="password">Hasło</label>
                </div>
                <br />
                <button class="btn btn-primary btn-xl" type="submit">

                    {{ __('Dodaj Użytwkonika') }}

                </button>
            </form>
        </div>
    </div>


    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Użytkowników</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>





    <div class="container">
        <table class="table">
            <form class="form-inline">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">Wyszukiwanie</span>
                    </div>
                    <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="basic-addon1">
                </div>
            </form>
            <thead class="thead-dark">
            <tr>
                <th class="table-success" scope="col">#</th>
                <th class="table-success" scope="col">Email</th>
                <th class="table-success" scope="col">Imie</th>
                <th class="table-success" scope="col">Nazwisko</th>
                <th class="table-success" scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($users as $user)
                <tr>
                    <th class="bg-secondary text-white" cope="row">{{$user->id}}</th>
                    <td>{{$user->email}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->surname}}</td>
                    <td class="bg-secondary">

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('users.delete', ['id'=>$user->id]) }}" role="button" class="btn btn-danger">X</a>
                            <a href="{{ route('users.edit', ['id'=>$user->id]) }}" role="button" class="btn btn-info">Info</a>
                            <a href="{{ route('users.edit', ['id'=>$user->id]) }}" role="button" class="btn btn-success">Edit</a>
                        </div>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; PKP S.A 2021</small></div>
    </div>


@endsection
