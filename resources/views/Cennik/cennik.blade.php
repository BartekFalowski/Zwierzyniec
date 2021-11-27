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


        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Dodaj Usługi</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>


    <div class="row justify-content-center">
        <div class="col-lg-8 col-xl-7">
            <form action="{{route('cennik.store')}}" method="POST">

                {{csrf_field()}}
                <div class="form-floating">
                    <input class="form-control" id="cena" name="cena" type="text" placeholder="Cena" />
                    <label for="cena">Cena</label>
                </div>
                <div class="form-floating">
                    <input class="form-control" id="usluga" name="usluga" type="text" placeholder="Usługa" />
                    <label for="usluga">Usługa</label>
                </div>
                <br />
                <button class="btn btn-primary btn-xl" type="submit">Dodaj Usługę</button>
            </form>
        </div>
    </div>


    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Cennik</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>

    <div class="container">
    <table class=" table">
        <form class="form-inline">
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>
        <thead class="thead-dark">
        <tr>
            <th class="table-success" scope="col">#</th>
            <th class="table-success" scope="col">Cena</th>
            <th class="table-success" scope="col">Usługa</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cenniks as $cennik)
            <tr>
                <th class="bg-secondary text-white" scope="row">{{$cennik->id}}</th>
                <td>{{$cennik->cena}}</td>
                <td>{{$cennik->usluga}}</td>
                <td class="bg-secondary">
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{route('cennik.delete', ['id'=>$cennik->id]) }}" role="button" class="btn btn-danger">X</a>
                    <a href="{{ route('cennik.edit', ['id'=>$cennik->id]) }}" class="btn btn-success">Edytuj</a>
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