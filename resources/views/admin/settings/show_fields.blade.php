<!-- Id Field -->
<div class="col-sm-12">
    {!! Form::label('id', 'Id:') !!}
    <p>{{ $settings->id }}</p>
</div>

<!-- Config Model Field -->
<div class="col-sm-12">
    {!! Form::label('config_model', 'Config Model:') !!}
    <p>{{ $settings->config_model }}</p>
</div>

<!-- Field Name Field -->
<div class="col-sm-12">
    {!! Form::label('field_name', 'Field Name:') !!}
    <p>{{ $settings->field_name }}</p>
</div>

<!-- Field Type Field -->
<div class="col-sm-12">
    {!! Form::label('field_type', 'Field Type:') !!}
    <p>{{ $settings->field_type }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $settings->status }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $settings->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $settings->updated_at }}</p>
</div>

