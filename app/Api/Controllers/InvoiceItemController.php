<?php namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\InvoiceItem;
use App\Api\Transformers\InvoiceItemTransformer;

class InvoiceItemController extends Controller
{
    /**
     * Eloquent model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function model()
    {
        return new InvoiceItem;
    }

    /**
     * Transformer for the current model.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    protected function transformer()
    {
        return new InvoiceItemTransformer;
    }
}
