<div class="row border-bottom">
	<div class="col-4">
		<p class="font-weight-bold">Nombre: </p><p>{{ $securityForm->name . ' ' . $securityForm->last_name }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Puesto: </p><p>{{ $securityForm->position }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Email: </p><p>{{ $securityForm->email }}</p>
	</div>
</div>
<div class="row border-bottom">
	<div class="col-4">
		<p class="font-weight-bold">Teléfono: </p><p>{{ $securityForm->phone }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Fecha en que se detectó la brecha: </p><p>{{ $securityForm->detection_breach_date . '('. $securityForm->detection_breach_date_type . ')'}}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Fecha en que empezo la brecha: </p><p>{{ $securityForm->start_breach_date . '('. $securityForm->start_breach_date_type . ')'}}</p>
	</div>
</div>
<div class="row border-bottom">
	<div class="col-4">
		<p class="font-weight-bold">Medios de detección de la brecha: </p><p>{{ $securityForm->detection_breach_description }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Resumen del incidente: </p><p>{{ $securityForm->breach_description }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Tipología: </p><p>{{ $securityForm->breach_types }}</p>
	</div>
</div>
<div class="row border-bottom">
	<div class="col-4">
		<p class="font-weight-bold">Medios por el que se materializo la brecha: </p><p>{{ $securityForm->breach_origins }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Medidas preventivas aplicadas: </p><p>{{ $securityForm->breach_measures }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Datos afectados: </p><p>{{ $securityForm->breach_data }}</p>
	</div>
</div>
<div class="row border-bottom">
	<div class="col-4">
		<p class="font-weight-bold">Sujetos afectados: </p><p>{{ $securityForm->affected_subjects }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Número de personas afectadas: </p><p>{{ $securityForm->affected_subjects_number }}</p>
	</div>
	<div class="col-4">
		<p class="font-weight-bold">Posibles consecuencias: </p><p>{{ $securityForm->impacts }}</p>
	</div>
</div>
@if(isset($securityForm->breach_is_resolved) && $securityForm->breach_is_resolved == 1)
	<div class="row border-bottom">
		<div class="col-4">
			<p class="font-weight-bold">Fecha de resolución: </p><p>{{ $securityForm->resolution_breach_date }}</p>
		</div>
	</div>
@endif