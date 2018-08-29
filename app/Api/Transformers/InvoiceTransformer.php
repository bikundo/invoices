<?php namespace App\Api\Transformers;

use App\Invoice;
use League\Fractal\TransformerAbstract;

class InvoiceTransformer extends TransformerAbstract
{
    /**
     * Turn this item object into a generic array.
     *
     * @param $item
     * @return array
     */
    public function transform(Invoice $item)
    {
        return $item->toArray();
    }
}
