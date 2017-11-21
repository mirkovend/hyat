@extends('template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>DELA CRUZ, JUAN PABLO</h3>
        <p>Agdao, Davao City</p>
        <p>09121234567</p>
    </div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-6">
				<h3 class="panel-title" style="margin-top: 5px;">View Shares</h3>
			</div>
			<div class="col-md-6">
				<div class="clearfix">
					<a href="{{ action('PaymentController@index') }}" class="btn btn-default btn-sm btn-quirk pull-right"><span class="glyphicon glyphicon-home"></span> Back to Index</a>
				</div>
			</div>		
		</div>
	</div>
	<div class="panel-body">
        <table id="dataTable1" class="table table-bordered table-striped-col" style="text-transform: uppercase;">
        	<thead>
        		<tr>
        			<th class="text-center">Group</th>
                    <th class="text-center">Last Payment Date</th>
                    <th width="150"class="text-center">Amount</th>
        		</tr>
        	</thead>
            <tbody>
                <tr>
                    <td>Leading and Finance Group [200.00]</td>
                    <td>2017-11-25</td>
                    <td width="150">{!! Form::text('amount[]','0.00',['class'=>'form-control text-center']) !!}</td>
                </tr>
                <tr>
                    <td>Food and Groceries [300.00]</td>
                    <td>2017-10-25</td>
                    <td width="150">{!! Form::text('amount[]','0.00',['class'=>'form-control text-center']) !!}</td>
                </tr>
            </tbody>
        </table>
	</div>
</div>	
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::button('<i class="glyphicon glyphicon-save"></i> SAVE PAYMENT', array('type' => 'submit', 'class' => 'btn btn-primary btn-quirk')) !!}
        </div>
    </div>
</div>  
@endsection
