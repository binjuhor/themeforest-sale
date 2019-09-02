@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Author</th>
                        <th scope="col">Monthy</th>
                        <th scope="col">Total Sale</th>
                        <th scope="col">Sale</th>
                        <th scope="col">Money ($) </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($sales as $index => $sale )
                        <tr>
                            <th scope="row">{{$index+1}}</th>
                            <td>{{$sale->author}}</td>
                            <td>{{$sale->name}}</td>
                            <td>{{$sale->sale}}</td>
                            @if(0 === $index)
                                <td> {{$sale->sale}} </td>
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

                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
