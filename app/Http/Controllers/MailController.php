<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller{
    public function send(){
        $objDemo = new \stdClass();
        $objDemo->sender = 'Aziza';
        $objDemo->receiver = 'Aziza';
        Mail::to("190103128@stu.sdu.edu.kz")->semd(new Demoemail($objDemo));
    }
}