<?php namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Invoice;
use App\Api\Transformers\InvoiceTransformer;

class InvoiceController extends Controller
{
    /**
     * Eloquent model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function model()
    {
        return new Invoice;
    }

    /**
     * Transformer for the current model.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    protected function transformer()
    {
        return new InvoiceTransformer;
    }
}
