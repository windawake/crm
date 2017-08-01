<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Models\DripEmailer;
use Illuminate\Console\Command;

class SendEmails extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';

    protected $drip;

    /**
     * Create a new command instance.
     * @param DripEmailer $drip
     *
     * @return void
     */
    public function __construct(DripEmailer $drip)
    {
        parent::__construct();
        $this->drip = $drip;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        //$this->drip->send(User::find($this->arguments('user')));
        $this->comment(PHP_EOL."well email".PHP_EOL);
    }
}
