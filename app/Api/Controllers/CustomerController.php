<?php namespace App\Api\Controllers;

use App\Api\Controllers\Controller;
use App\Customer;
use App\Api\Transformers\CustomerTransformer;

class CustomerController extends Controller
{
    /**
     * Eloquent model.
     *
     * @return \Illuminate\Database\Eloquent\Model
     */
    protected function model()
    {
        return new Customer;
    }

    /**
     * Transformer for the current model.
     *
     * @return \League\Fractal\TransformerAbstract
     */
    protected function transformer()
    {
        return new CustomerTransformer;
    }
}
