<?php namespace App\Api\Transformers;

use App\Customer;
use League\Fractal\TransformerAbstract;

class CustomerTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array.
     *
     * @param $item
     *
     * @return array
     */
    public function transform(Customer $item)
    {
        return $item->toArray();
    }
}
