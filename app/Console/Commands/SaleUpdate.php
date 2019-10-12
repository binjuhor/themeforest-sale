<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use PHPHtmlParser\Dom;
use App\Repositories\Eloquent\EloquentSalesRepositoryRepository as SaleRepository;

class SaleUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sale:update {tfuser}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Update sale for a user on themeforest';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    protected $sales;

    public function __construct(SaleRepository $sale)
    {
        parent::__construct();
        $this->sales = $sale;
    }

    /**
     * @throws \PHPHtmlParser\Exceptions\ChildNotFoundException
     * @throws \PHPHtmlParser\Exceptions\CircularException
     * @throws \PHPHtmlParser\Exceptions\CurlException
     * @throws \PHPHtmlParser\Exceptions\NotLoadedException
     * @throws \PHPHtmlParser\Exceptions\StrictException
     */
    public function handle()
    {
        return $this->saleUpdate();
    }

    /**
     * @throws \PHPHtmlParser\Exceptions\ChildNotFoundException
     * @throws \PHPHtmlParser\Exceptions\CircularException
     * @throws \PHPHtmlParser\Exceptions\CurlException
     * @throws \PHPHtmlParser\Exceptions\NotLoadedException
     * @throws \PHPHtmlParser\Exceptions\StrictException
     */
    public function saleUpdate()
    {
        $themeuser = $this->argument('tfuser');
        $dom = new Dom;
        $dom->loadFromUrl("https://themeforest.net/user/{$themeuser}");
        $textSale = $dom->find('.user-info-header__stats-content strong', 0);
        $salesThisMonth = str_replace(',', '', trim($textSale->text));

        $this->sales->updateOrCreate([
            'author' => $themeuser,
            'name' => 'T' . date('m/Y'),
            'sale' => "{$salesThisMonth}",
        ]);
    }
}
