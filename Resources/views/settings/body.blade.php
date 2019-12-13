@if($event_setting->alert)
<div class="alert alert-info alert-dismissible fade show" role="alert">
	 O número inicial do pedido será a sequência do número de novos pedidos. Caso possui uma integração com o sistema da Scancode, aconselhamos a iniciar com o último número do pedido do seu seu ERP + 100.
	{{ Form::open(['route' => ['portal.event_settings.update', $event_setting], 'method' => 'put']) }}
	{{ Form::button('<span aria-hidden="true">&times;</span>', ['type' => 'submit', 'class' => 'close']) }}
	{{ Form::close() }}
</div>
@endif

{{ Form::model($event_setting->configurable, ['route' => ['settingorder.update', $event_setting->configurable], 'method' => 'put']) }}
<div class="form-group">
	{{ Form::label('order_start', 'Número inicial dos pedidos') }}
	{{ Form::number('order_start', null, ['class' => 'form-control']) }}
</div>
{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
{{ Form::close() }}