@extends('template')

@section('content')
{!! Form::open(['action' => 'MemberController@store','novalidate' => 'novalidate','files' => 'true']) !!}
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                <h3 class="panel-title" style="margin-top: 5px;">Create Member</h3>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar pull-right" role="toolbar">
                    <a href="{{ action('MemberController@index') }}" class="btn btn-default btn-sm btn-quirk"><span class="glyphicon glyphicon-home"></span> Back to Index</a>
                </div>
            </div>            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('Upload Image') !!}
                    {!! Form::file('avatar',null) !!}
                </div>
            </div>
        </div>
        <div class="row spacing">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Last Name') !!}
                    {!! Form::text('last_name',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','First Name') !!}
                    {!! Form::text('first_name',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Middle Name') !!}
                    {!! Form::text('middle_name',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Ext') !!}
                    {!! Form::text('name_extension',null,['class'=>'form-control'])!!}
                </div>
            </div>
        </div>
        <div class="row spacing">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Gender') !!}
                    {!! Form::select('gender',['MALE'=>'MALE','FEMALE'=>'FEMALE'],null,['class'=>'form-control select','placeholder'=>'PLEASE SELECT'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Birthdate') !!}
                    {!! Form::text('birthdate',null,['class'=>'form-control dt'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Contact Number') !!}
                    {!! Form::text('contact_number',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Email Address') !!}
                    {!! Form::text('email',null,['class'=>'form-control'])!!}
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Bank Name') !!}
                    {!! Form::text('bank_name',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Account Number') !!}
                    {!! Form::text('account_number',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Western Union Account') !!}
                    {!! Form::text('wu_account',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Country') !!}
                    {!! Form::text('country',null,['class'=>'form-control'])!!}
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Beneficiary Name') !!}
                    {!! Form::text('b_name',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Contact Number') !!}
                    {!! Form::text('b_contact_number',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Bank Name') !!}
                    {!! Form::text('bank_name',null,['class'=>'form-control'])!!}
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    {!! Form::label('','Account Number') !!}
                    {!! Form::text('account_number',null,['class'=>'form-control'])!!}
                </div>
            </div>
        </div>
    </div>
</div>    
<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            {!! Form::button('<i class="glyphicon glyphicon-save"></i> SAVE ENTRY', array('type' => 'submit', 'class' => 'btn btn-primary btn-quirk')) !!}
        </div>
    </div>
</div>  
{!! Form::close() !!}
@endsection