<!-- Config Model Field -->
<div class="form-group col-sm-6">
    {!! Form::label('config_model', 'Config Model:') !!}
    {!! Form::select('config_model', ['Pumps' => 'Pumps', 'Grades' => 'Grades', 'Fuel Cards' => 'Fuel Cards', 'Sales' => 'Sales'], null, ['class' => 'form-control custom-select']) !!}
</div>


<!-- Field Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('field_name', 'Field Name:') !!}
    {!! Form::text('field_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Field Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('field_type', 'Field Type:') !!}
    {!! Form::text('field_type', null, ['class' => 'form-control']) !!}
</div>

<!-- 'bootstrap / Toggle Switch Status Field' -->
<div class="form-group col-sm-6">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::hidden('status', 0) !!}
    {!! Form::checkbox('status', 1, null,  ['data-bootstrap-switch']) !!}
</div>
