<?php

namespace Mbscholars\WhatsappDialog\Commands;

use Illuminate\Console\Command;

class WhatsappDialogCommand extends Command
{
    public $signature = 'laravel-whatsapp-with-360dialog';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
