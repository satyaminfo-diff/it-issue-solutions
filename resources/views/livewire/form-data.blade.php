<div>
    <div class="d-flex justify-content-center form_container">
        {!! Form::open(['route'=>'formLogin']) !!}
        <form>
            <div class="input-group mb-3">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                </div>
                {!! Form::text('userName','',[
                    'class'=>"form-control input_user",
                    'placeholder'=>'username'
                ]) !!}   
                
            </div>
            <span style="color:red">@error('userName'){{
                $message
            }}
                @enderror</span>
            <div class="input-group mb-2">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                </div>
                {!! Form::password('password',[
                    'class'=>"form-control input_pass",
                    'placeholder'=>'password'
                ]) !!}   
            </div>
            <span style="color:red">@error('password'){{
                $message
            }}
                @enderror</span>
                <div class="d-flex justify-content-center mt-3 login_container">
         <button type="submit" name="submit" class="btn login_btn">Login</button>
       </div>
        {!! Form::close() !!}
    </div>

</div>
