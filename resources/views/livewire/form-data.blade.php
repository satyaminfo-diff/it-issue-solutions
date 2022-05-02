
<div>
    <div class="d-flex justify-content-center form_container">
        {!! Form::open() !!}
        
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                {!! Form::text('userName','',['class'=>"form-control input_user",'placeholder'=>'username',"wire:model"=>"email"]) !!}   
                
            </div>
            <span style="color:red"> @error('userName'){{ $message }} @enderror </span>
                @if($otp_status) {{-- when status is one it will display otp textbox --}}
                    <div class="input-group mb-2">
                        <div class="input-group-append">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        
                        {!! Form::text('OTP',null,['class'=>"form-control input_pass",'placeholder'=>'OTP','wire:model'=>'otp']) !!}   
                @endif
            </div>
            <span style="color:red">@error('otp'){{
                $message
            }}
                @enderror</span>
                <div class="d-flex justify-content-center mt-3 login_container">
                    <button type="button" name="submit" wire:click="{{$otp_status?'checkOtp':'sentMail'}}()" class="btn login_btn">{{$otp_status?'Check':'Sent'}} OTP</button>
                </div>
        {!! Form::close() !!}
    </div>

</div>
