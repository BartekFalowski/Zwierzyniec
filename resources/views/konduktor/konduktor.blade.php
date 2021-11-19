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



        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj Konduktora</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('konduktor.store')}}" method="POST">
                {{csrf_field()}}
                <div class="form-floating">
                    <input class="form-control" id="name" name="name" type="text" placeholder="Wpisz imie..." />
                    <label for="inputName">Imie</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="surname" name="surname" type="text" placeholder="Wpisz nazwisko..." />
                    <label for="inputName">Nazwisko</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="email" name="email" type="email" placeholder="Wpisz email..." />
                    <label for="inputEmail">E-mail</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="password" name="password" type="text" placeholder="Wpisz hasło..." />
                    <label for="inputName">Hasło</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="phone" name="phone" type="tel" placeholder="Wpisz numer telefonu..." />
                    <label for="inputPhone">Numer Telefonu</label>
                </div>


                <br />
                <button class="btn btn-primary btn-xl" type="submit">Dodaj Konduktora</button>
            </form>
        </div>
    </div>

<div class="container">
    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Konduktorów</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th class="table-success" scope="col">#</th>
            <th class="table-success" scope="col">Email</th>
            <th class="table-success" scope="col">Imie</th>
            <th class="table-success" scope="col">Nazwisko</th>
            <th class="table-success" scope="col">Telefon</th>
            <th class="table-success" scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>

        @foreach ($konduktors as $konduktor)
            <tr>
                <th class="bg-secondary text-white" scope="row">{{$konduktor->id}}</th>
                <td>{{$konduktor->email}}</td>
                <td>{{$konduktor->name}}</td>
                <td>{{$konduktor->surname}}</td>
                <td>{{$konduktor->phone}}</td>
                <td class="bg-secondary">

                    <div class="btn-group" role="group" aria-label="Basic example">
                        <a href="{{ route('konduktor.delete', ['id'=>$konduktor->id])}}" role="button" class="btn btn-danger">X</a>
                        <a href="{{ route('konduktor.edit', ['id'=>$konduktor->id]) }}" class="btn btn-success">Edit</a>
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

