@extends('template')

@section('content')
{!! Form::open(['action' => 'GroupController@store']) !!}
<div class="panel panel-primary">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-6">
                <h3 class="panel-title" style="margin-top: 5px;">Create Group</h3>
            </div>
            <div class="col-md-6">
                <div class="btn-toolbar pull-right" role="toolbar">
                    <a href="{{ action('GroupController@index') }}" class="btn btn-default btn-sm btn-quirk"><span class="glyphicon glyphicon-home"></span> Back to Index</a>
                </div>
            </div>            
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('','Select Leader') !!}
                    {!! Form::select('leader_id',[],null,['class'=>'form-control select','placeholder'=>'PLEASE SELECT'])!!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('','Select Group') !!}
                    {!! Form::select('group_id',[],null,['class'=>'form-control select','placeholder'=>'PLEASE SELECT'])!!}
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    {!! Form::label('','Shared Amount') !!}
                    {!! Form::text('group_id',null,['class'=>'form-control','readonly'])!!}
                </div>
            </div>
        </div>
        <hr>
        <p>SELECT MEMBERS</p>
        <hr>
        <div class="clearfix"></div>
        <div id="wrap">
            <div class="wrapp">
                <div class="col-md-4">
                    <div class="form-group">
                        {!! Form::select('member_id[]',[],null,['class'=>'form-control select','placeholder'=>'PLEASE SELECT'])!!}
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <button type="button" class="btn btn-primary btn-quirk" id="bot" style="margin-top:0px;"><i class="fa fa-plus" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <hr>
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
@section('js')
<script type="text/javascript">
    $(document).ready(function() {
        var x = 1;
        $('#bot').on('click',function(){
        x++;
        var data =  '<div class="clearfix"></div><div class="wrapp'+x+'" style="margin-top:20px;"><div class="clearfix"></div>';
            data += '<div class="col-md-4"><div class="form-group">';
            data += '{!! Form::select("member_id[]",[],null,["class"=>"form-control select","placeholder"=>"PLEASE SELECT"])!!}';
            data += '</div></div>';

            data += '<div class="col-md-1"><div class="form-group">';
            data += '<button type="button" class="btn btn-danger btn-quirk minus" ><i class="fa fa-minus" aria-hidden="true"></i></button>';
            data += '</div></div></div>';

            $('#wrap').append(data);
            $(".wrapp"+x+" .select").select2();

        });

        $('#wrap').on('click','.minus',function(){
            var $a = $(this).parent('div').parent('div').parent('div').attr('class');
            $('.'+$a).remove();
            var sum = 0;
            var num = [];
            $('.amount').each(function(){
                var total = $(this).val();
                num.push(total)
            });
            $.each(num,function(){
                sum += parseFloat(this);
            });

            $('#total').val(sum);
        });
    });
</script>
@endsection