<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPHtmlParser\Dom;
use App\Http\Resources\SaleResource;
use App\Repositories\Eloquent\EloquentSalesRepositoryRepository as SaleRepository;

class SaleController extends Controller
{
    private $sales;

    public function __construct(SaleRepository $sale)
    {
        $this->sales = $sale;
    }

    public function index(Request $request)
    {
        $dom = new Dom;
        $dom->loadFromUrl("https://themeforest.net/user/{$request->id}");
        $textSale = $dom->find('.user-info-header__stats-content strong', 0);
        $salesThisMonth = str_replace(',', '', trim($textSale->text));

        $this->sales->updateOrCreate([
            'author' => $request->id,
            'name' => 'T' . date('m/Y'),
            'sale' => "{$salesThisMonth}",
        ]);
        echo $salesThisMonth;
    }

    public function show(Request $request)
    {
        $sales = $this
            ->sales
            ->findWhere('author', $request->author ? $request->author : 'beautheme')
            ->sortBy('created_at');

        $sales = SaleResource::collection($sales);
        return view('sales.index', ['sales' => $sales]);
    }

    public function saleTeam(Request $request)
    {
        $sales = $this
            ->sales
            ->findWhere('author', $request->author ? $request->author : 'beautheme')
            ->sortBy('created_at');

        return response()->json([
            'sales' => SaleResource::collection($sales)
        ]);
    }
}
