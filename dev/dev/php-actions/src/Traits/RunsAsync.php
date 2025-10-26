<?php

namespace Dev\PHPActions\Traits;

use Dev\PHPActions\Jobs\BaseAsyncAction;

/** Use the handleAsync() method to execute your task asynchronously */
trait RunsAsync
{
    /** If an empty value or a boolean false value is returned, the action is interrupted. */
    public function handle()
    {
        return true;
    }

    public function dispatchJob(array | null $data = [])
    {
        return BaseAsyncAction::dispatch([
            'class' => static::class,
            'data' => $data,
            'id' => $this->id,
            'options' => $this->_options
        ]);
    }
}
