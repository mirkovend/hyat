@extends('template')

@section('content')
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                <h3 class="panel-title" style="margin-top: 5px;">Search Member</h3>
            </div>          
        </div>
    </div>
    <div class="panel-body">
    	{!! Form::open(['method'=>'POST','action'=>'PaymentController@search']) !!}
    	<div class="row">
    		<div class="col-md-4">
    			<div class="form-group">
    				{!! Form::select('member_id',[],null,['class'=>'form-control select','placeholder'=>'Search Member']) !!}
    			</div>
    		</div>
    		<div class="col-md-2">
    			<div class="form-group">
		            {!! Form::button('<i class="glyphicon glyphicon-search"></i> SEARCH', array('type' => 'submit', 'class' => 'btn btn-primary btn-quirk','style'=>'margin-top:0px;')) !!}
		        </div>
    		</div>
    	</div>
    	{!! Form::close() !!}
    </div>
</div>
@endsection