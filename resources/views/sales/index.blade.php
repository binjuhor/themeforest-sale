@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Month</th>
                        <th scope="col">Total</th>
                        <th scope="col">Sales</th>
                        <th scope="col">Money</th>
                        <th scope="col" class="d-none d-sm-block">Updated</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i=0;?>
                    @foreach($sales as $sale )
                        <tr>
                            <th scope="row">{{$i+1}}</th>
                            <td>{{$sale->name}}</td>
                            <td>{{number_format($sale->sale)}}</td>
                            <td>{{number_format($sale->calcSale()) }}</td>
                            <td> $ {{$sale->saleToMoney($sale->calcSale())}} </td>
                            <td class="d-none d-sm-block">{{$sale->updated_at->format('H:s d/m/Y') }}</td>
                        </tr>
                        <?php $i++;?>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
