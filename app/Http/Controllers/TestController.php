<?php
namespace App\Http\Controllers;

use App\Events\Event;
use App\Events\SomeEvent;
use App\Jobs\SendReminderEmail;
use App\Models\User;
use Gate;
use Carbon;
use Datatables;
use App\Models\Task;
use App\Http\Requests;
use App\Mail\OrderShipped;
use App\Models\Integration;
use Illuminate\Http\Request;
use App\Http\Requests\Task\StoreTaskRequest;
use App\Repositories\Task\TaskRepositoryContract;
use App\Repositories\User\UserRepositoryContract;
use App\Repositories\Client\ClientRepositoryContract;
use App\Repositories\Setting\SettingRepositoryContract;
use App\Repositories\Invoice\InvoiceRepositoryContract;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{

    protected $request;
    protected $tasks;
    protected $clients;
    protected $settings;
    protected $users;
    protected $invoices;


    public function email(){
        //$Parsedown = new \Parsedown();
        //return $Parsedown->text('Hello _Parsedown_!');
        $mailable = new OrderShipped();
        $res = Mail::to('619146134@qq.com')->send($mailable);
        dd($res);

        //return view('emails/interview');

//        $client = new \GuzzleHttp\Client();
//        $res = $client->request('GET','http://crm.app/test');
//        echo $res->getStatusCode();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $env = config('app.env');
        dd($env);
        return view('test/index');
    }

    public function collect()
    {
        $users = User::where('id','>',1)->get();

        dd($users->sum->id);
    }

    public function queue()
    {
        $job = (new SendReminderEmail())->delay(10);
        $res = $this->dispatch($job);
        dd($res);
    }


    public function show($id)
    {
        return 'show';
    }
}
