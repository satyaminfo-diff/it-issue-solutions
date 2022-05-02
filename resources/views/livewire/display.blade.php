<div>
    <br>
    <div class="row">
        <div class="col-md-9">
            <div class="input-group">
                    {!! Form::search('search','',[
                        'class'=>"form-control",
                        'placeholder'=>'Search Query']) 
                    !!}   
                <button type="button" class="btn btn-primary">
                <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </div>
    <br>
    <br>
    @foreach ($data as $item)
        
    
    <div class="row">        
        <div class="col-md-9">
            <div class="card">
                <div class="card-body">
                  
                   <div class="activity-img"><img src="{{url('storage/uploads/myLogo.jpg')}}" alt="hello"><span style="color:blue" class="font-weight-bold">{{collect($item->users)[0]->firstName}} {{collect($item->users)[0]->lastName}}</span></div>
                   <br>
                    <h4 class="card-title font-weight-bold">{{$item->questions}}</h4>
              
                  <p class="card-text">{{$item->description}}</p>
                 <hr>
                    
                  @foreach($item->answer as $val)
                
                    <p class="card-text font-weight-bold">{{$val->user[0]->firstName}}</p>
                    <p class="card-text">{{$val->answers}}</p>
                    @endforeach
                </div>
            </div>		
        </div>
    </div>
    @endforeach
</div>
