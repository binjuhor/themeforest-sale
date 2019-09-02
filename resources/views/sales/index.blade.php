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
                    @foreach($sales as $index => $sale )
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$sale->name}}</td>
                            <td>{{number_format($sale->sale)}}</td>
                            @if(0 === $index)
                                <td> {{number_format($sale->sale)}} </td>
                            @endif
                            @if($index > 0)
                                <td>{{$sale->calcSale( $sales[$index-1] ) }}</td>
                            @endif
                            @if(0 === $index)
                                <td> $ {{$sale->saleToMoney($sale->sale)}} </td>
                            @endif
                            @if($index > 0)
                                <td>$ {{$sale->saleToMoney($sale->calcSale( $sales[$index-1] ))}}</td>
                            @endif
                            <td class="d-none d-sm-block">{{$sale->updated_at->format('H:s d/m/Y') }}</td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
