@extends('template')

@section('content')
<div class="panel panel-primary">
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-6">
				<h3 class="panel-title" style="margin-top: 5px;">Members List</h3>
			</div>
			<div class="col-md-6">
				<div class="clearfix">
					<a href="{{ action('MemberController@create') }}" class="btn btn-default btn-sm btn-quirk pull-right"><span class="glyphicon glyphicon-plus"></span> Create Entry</a>
				</div>
			</div>		
		</div>
	</div>
	<div class="panel-body">
        <table id="dataTable1" class="table table-bordered table-striped-col" style="text-transform: uppercase;">
        	<thead>
        		<tr>
        			<th class="text-center">Member Name</th>
                    <th class="text-center">Address</th>
                    <th class="text-center">Contact Number</th>
        			<th width="80" class="text-center">Action</th>
        		</tr>
        	</thead>
              <tbody>
                    <tr>
                        <td>Dela Cruz, Juan Pablo</td>
                        <td>Agdao, Davao City</td>
                        <td>09121234567</td>
                        <td class="text-center" width="80" style="text-transform: uppercase;">
                            <div class="btn-group">
                                <button type="button" class="btn btn-sm btn-primary"><span class="glyphicon glyphicon-cog"></span></button>
                                <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Edit Profile</a></li>
                                    <li><a href="#groups" data-toggle="modal" class="viewpackage">My Groups</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
              </tbody>
        </table>
	</div>
</div>	
@endsection
