<?php

namespace App\Actions\Setup;

use Dev\PHPActions\Action;
use App\Actions\Env\EnvSet;

class SetupSubmit extends Action
{
    public function handle()
    {
        $google_client_id = $this->getData('google_client_id');
        $google_client_credentials = $this->getData('google_client_credentials');

        if (empty($google_client_id)) {
            return false;
        }

        if (empty($google_client_credentials)) {
            return false;
        }

        file_put_contents(config('google.client_credentials'), $google_client_credentials);

        Action::build(EnvSet::class)->data([
            'key' => 'GOOGLE_CLIENT_ID',
            'value' => $google_client_id,
        ])->run();

        return true;
    }
}
