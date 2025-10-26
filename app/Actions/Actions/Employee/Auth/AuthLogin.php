<?php

namespace App\Actions\Employee\Auth;

use Dev\PHPActions\Action;
use App\Models\Article;
use App\Routing\Web;

class AuthLogin extends Action
{
    public function handle()
    {
        $customer_id = $this->getData('ei');

        if (empty($customer_id)) {
            return Web::redirect('web.home.show');
        }

        return [];
    }
}
