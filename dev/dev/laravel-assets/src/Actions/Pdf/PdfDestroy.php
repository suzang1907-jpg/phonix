<?php

namespace Dev\LaravelAssets\Actions\Pdf;

use Dev\LaravelAssets\Models\Pdf;
use Dev\PHPActions\Action;

/**
 * @data string $id
 */
class PdfDestroy extends Action
{
    protected $secure = [
        'id',
    ];

    public function handle()
    {
        $id = $this->getData('id');

        if (empty($id)) {
            return;
        }

        $pdf = Pdf::where('id', $id)->first();

        if (empty($pdf)) {
            return;
        }

        $pdf->delete();
    }
}
