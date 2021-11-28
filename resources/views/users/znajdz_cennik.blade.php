@extends('home')

@section('content')


    <div class="masthead">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Lista Usług</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
    </div>

    <div class="container">
    <table class=" table">
        <thead class="thead-dark">
        <tr>
            <th class="table-success" scope="col">#</th>
            <th class="table-success" scope="col">Cena</th>
            <th class="table-success" scope="col">Usługa</th>
            <th class="table-success" scope="col">Akcje</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cenniks as $cennik)
            <tr>
                <th class="bg-light text-black" scope="row">{{$cennik->id}}</th>
                <td>{{$cennik->cena}}</td>
                <td>{{$cennik->usluga}}</td>
                <td class="bg-light">
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="" class="btn btn-success">DODAJ USŁUGĘ</a>
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
