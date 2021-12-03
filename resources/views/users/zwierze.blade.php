@extends('layouts.lista')

@section('content')


    <div class="masthead">


        @if(session()->has('message'))
            <div class="container">
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Gratulacje!</strong> {{session()->get('message')}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            </div>
        @endif


        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj Zwierze</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('zwierzes.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-floating">
                    <input class="form-control" id="name" type="text" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus/>
                    <label for="name">Imie Zwierzęcia</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="rasa" type="text" name="rasa" value="{{ old('rasa') }}" required autocomplete="rasa" autofocus/>
                    <label for="rasa">Rasa</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="plec" type="text" name="plec" value="{{ old('plec') }}" required autocomplete="plec" autofocus/>
                    <label for="plec">Plec</label>
                </div>

                <br />
                <button class="btn btn-primary btn-xl" type="submit">

                    {{ __('Dodaj Zwierzaka') }}

                </button>
            </form>
        </div>
    </div>


    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Twoich Zwierząt</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>





    <div class="container">
        <table class="table">

            <thead class="thead-dark">
            <tr>
                <th class="table-success" scope="col">#</th>
                <th class="table-success" scope="col">Imie  Zwierzecia</th>
                <th class="table-success" scope="col">Rasa</th>
                <th class="table-success" scope="col">Plec</th>
                <th class="table-success" scope="col">Akcje</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($zwierzes as $zwierze)
                <tr>
                    <th class="bg-secondary text-white" cope="row">{{$zwierze->id}}</th>
                    <td>{{$zwierze->name}}</td>
                    <td>{{$zwierze->rasa}}</td>
                    <td>{{$zwierze->plec}}</td>
                    <td class="bg-secondary">

                        <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ route('zwierzes.delete', ['id'=>$zwierze->id]) }}" role="button" class="btn btn-danger">X</a>
                            <a href="{{ route('zwierzes.edit', ['id'=>$zwierze->id]) }}" role="button" class="btn btn-info">Info</a>
                            <a href="{{ route('zwierzes.edit', ['id'=>$zwierze->id]) }}" role="button" class="btn btn-success">Edit</a>
                        </div>


                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="copyright py-4 text-center text-white">
        <div class="container"><small>Copyright &copy; Satino S.A 2021</small></div>
    </div>


@endsection
