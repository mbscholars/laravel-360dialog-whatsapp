<?php

namespace Mbscholars\WhatsappDialog\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mbscholars\WhatsappDialog\WhatsappDialog
 */
class WhatsappDialog extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Mbscholars\WhatsappDialog\WhatsappDialog::class;
    }
}
