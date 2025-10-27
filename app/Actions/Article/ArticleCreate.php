<?php

namespace App\Actions\Article;

use Dev\PHPActions\Action;
use App\Models\Customer;

class ArticleCreate extends Action
{
    public function handle()
    {
        $customer_id = $this->getData('customer_id');

        $customer = null;


        if (! empty($customer_id)) {
            $customer = Customer::where('id', $customer_id)->first();
        }

        return [
            'customer' => $customer,
            'title' => 'İlan / Oluştur'
        ];
    }
}
