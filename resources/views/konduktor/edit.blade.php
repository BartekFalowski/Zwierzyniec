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

        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Edytuj Konduktora <u>{{$konduktor->email}}</u></h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('konduktor.update', ['id' => $konduktor->id] )}}" method="POST">
                {{csrf_field()}}
                @method('PUT')
                <div class="form-floating">
                    <input value="{{$konduktor->name}}" class="form-control" id="name" name="name" type="text" placeholder="Wpisz imie..." />
                    <label for="inputName">Imie</label>
                </div>
                <div class="form-floating">
                    <input value="{{$konduktor->surname}}" class="form-control" id="surname" name="surname" type="text" placeholder="Wpisz nazwisko..." />
                    <label for="inputName">Nazwisko</label>
                </div>
                <div class="form-floating">
                    <input value="{{$konduktor->email}}" class="form-control" id="email" name="email" type="email" placeholder="Wpisz email..." />
                    <label for="inputEmail">E-mail</label>
                </div>
                <div class="form-floating">
                    <input value="{{$konduktor->phone}}" class="form-control" id="phone" name="phone" type="tel" placeholder="Wpisz numer telefonu..." />
                    <label for="inputPhone">Numer Telefonu</label>
                </div>


                <br />
                <button class="btn btn-primary btn-xl" type="submit">Zapisz Konduktora</button>
            </form>
        </div>
    </div>


@endsection

