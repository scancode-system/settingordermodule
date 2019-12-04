
{{ Form::model($event_setting->configurable, ['route' => ['settingorder.update', $event_setting->configurable], 'method' => 'put']) }}
<div class="form-group">
	{{ Form::label('order_start', 'Número inicial dos pedidos') }}
	{{ Form::number('order_start', null, ['class' => 'form-control']) }}
</div>
{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
{{ Form::close() }}