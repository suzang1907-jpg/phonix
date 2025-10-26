<?php

namespace App\Actions\Employee\Customer;

use App\Models\Customer;
use Dev\PHPActions\Action;
class CustomerList extends Action {
public function handle() {
$customers = Customer::with('articles')->get();

return [
'title' => 'Müşteriler',
'customers' => $customers];
}
}
