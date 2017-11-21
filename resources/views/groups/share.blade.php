@extends('template')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h3>DELA CRUZ, JUAN PABLO</h3>
        <p>Leading and Finance Group</p>
        <p>Leader</p>
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
					<a href="{{ action('GroupController@index') }}" class="btn btn-default btn-sm btn-quirk pull-right"><span class="glyphicon glyphicon-home"></span> Back to Index</a>
				</div>
			</div>		
		</div>
	</div>
	<div class="panel-body">
        <table id="dataTable1" class="table table-bordered table-striped-col" style="text-transform: uppercase;">
        	<thead>
        		<tr>
        			<th class="text-center">Date</th>
                    <th class="text-center">Share Amount</th>
        			<th width="80" class="text-center">Action</th>
        		</tr>
        	</thead>
            <tbody>
                <tr>
                    <td>2017-11-25</td>
                    <td>200.00</td>
                    <td class="text-center" width="80" style="text-transform: uppercase;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Edit Entry</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2017-10-25</td>
                    <td>200.00</td>
                    <td class="text-center" width="80" style="text-transform: uppercase;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Edit Entry</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>2017-09-25</td>
                    <td>200.00</td>
                    <td class="text-center" width="80" style="text-transform: uppercase;">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
                            <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Edit Entry</a></li>
                            </ul>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
	</div>
</div>	
@endsection
