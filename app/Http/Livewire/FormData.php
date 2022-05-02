<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Mail\SendMail;
use Livewire\Component;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FormData extends Component
{
    public $otp_status=0,$email,$otp,$errorStatus=["type"=>"","message"=>""],$sessioninfo;
   
    public function render()
    {
        return view('livewire.form-data');
    
    }
    public function sentMail(){    
      
        $userinfo=User::where('email',$this->email)->count();//get the record from table and count no of records 
                                                            //if 0 it will go else part
        if($userinfo)//checks user existed
        {
            $this->otp_status=1;
            $otp_rand=rand(999,99999);//generate otp
            $data = [//this $data is useful for show the info in mailtrap when otp send 
                'title' => '#it Issue Solutions',
                'body' => 'This is for testing email using smtp',
                'otp' => $otp_rand
            ];

            Mail::to($this->email)->send(new SendMail($data));// when input come the mail send that email
            $this->emit('notify',["type"=>"success","message"=>"Successfully sent the otp to your provided email :) Yup!"]);
            //notify is for successful msg using emit
           
           Session::put('Username',$this->email);
           $this->sessioninfo=Session::get('Username');
            $data=user::where('email',$this->email)->update(['password'=>$otp_rand]);
           

        }
        else
        {
            $this->emit('notify',["type"=>"error","message"=>"Not valid email!"]);
            //notify is for error msg using emit   
        }
       
    }
    
    public function checkOtp(){
        $user=User::where('email',$this->email)->where('password',$this->otp)->count();
        if($user){
            $this->emit('notify',["type"=>"success","message"=>"Successfully sent the otp to your provided email :) Yup!"]);
            return redirect()->to('welcome');
        }
        else
        {
            $this->emit('notify',["type"=>"error","message"=>"Not valid email!"]);
        }
       
    }

}
