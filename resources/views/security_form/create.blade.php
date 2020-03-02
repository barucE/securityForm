@extends('layout', ['title' => 'Formulario de Incidencias'])

@section('content')
	<form action="/storeBreach" method="post">
		<div class="row">
            @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif
        </div>
        <div class="row">
            @if($errors->any())
            <div class="alert alert-danger">
                {!! implode('', $errors->all(':message</br>')) !!}
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-12 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Información personal </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group">
                                    <label> Nombre </label>
                                    <input type="text" name="name" placeholder="Nombre" class="form-control {{ $errors->has('name') ? 'is-invalid' : ''}}" value="{{ old('name')}}">
                                    {!! $errors->first('name', '<small class="text-danger">:message</small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group">
                                    <label> Apellidos </label>
                                    <input type="text" name="last_name" placeholder="Apellido" class="form-control {{ $errors->has('last_name') ? 'is-invalid' : ''}}" value="{{ old('last_name') }}">
                                    {!! $errors->first('last_name', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group">
                                    <label> Cargo </label>
                                    <input type="text" name="position" placeholder="Cargo" class="form-control {{ $errors->has('position') ? 'is-invalid' : ''}}" value="{{ old('position') }}">
                                    {!! $errors->first('position', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group">
                                    <label> E-mail </label>
                                    <input type="email" name="email" placeholder="E-mail" class="form-control {{ $errors->has('email') ? 'is-invalid' : ''}}" value="{{ old('email') }}">
                                    {!! $errors->first('email', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label> Teléfono </label>
                                    <input type="phone" name="phone" placeholder="Teléfono" class="form-control {{ $errors->has('phone') ? 'is-invalid' : ''}}" value="{{ old('phone') }}">
                                    {!! $errors->first('phone', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Información temporal de la brecha </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group">
                                    <label> Fecha detección de la brecha: </label>
                                    <input type="date" name="detection_breach_date" placeholder="Fecha de detección" class="form-control {{ $errors->has('detection_breach_date') ? 'is-invalid' : ''}}" value="{{ old('detection_breach_date') }}">
                                    {!! $errors->first('detection_breach_date', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="detection_breach_date_type1" value="exact" name="detection_breach_date_type">
                                  <label class="form-check-label" for="detection_breach_date_type1">Exacta</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="detection_breach_date_type2" value="estimated" name="detection_breach_date_type">
                                  <label class="form-check-label" for="detection_breach_date_type2">Estimada</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-group">
                                    <label> Fecha inicio de la brecha: </label>
                                    <input type="date" name="start_breach_date" placeholder="Fecha de inicio" class="form-control {{ $errors->has('start_breach_date') ? 'is-invalid' : ''}}" value="{{ old('start_breach_date') }}">
                                    {!! $errors->first('start_breach_date', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="start_breach_date_type1" value="exact" name="start_breach_date_type">
                                  <label class="form-check-label" for="start_breach_date_type1">Exacta</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="start_breach_date_type2" value="estimated" name="start_breach_date_type">
                                  <label class="form-check-label" for="start_breach_date_type2">Estimada</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="breach_is_resolved">¿Está resuelta la brecha?&nbsp;</label>
                                    <input class="form-check-input" type="checkbox" id="breach_is_resolved" value="1" name="breach_is_resolved">
                                </div>
                                <div class="form-group">
                                    <label> Fecha resolución de la brecha: </label>
                                    <input type="date" name="resolution_breach_date" placeholder="Fecha de resolución" class="form-control {{ $errors->has('resolution_breach_date') ? 'is-invalid' : ''}}" value="{{ old('resolution_breach_date') }}">
                                    {!! $errors->first('resolution_breach_date', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 m-auto">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="resolution_breach_date_type1" value="exact" name="resolution_breach_date_type">
                                  <label class="form-check-label" for="resolution_breach_date_type1">Exacta</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" id="resolution_breach_date_type2" value="estimated" name="resolution_breach_date_type">
                                  <label class="form-check-label" for="resolution_breach_date_type2">Estimada</label>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label> Medios de detección de la brecha: </label>
                                    <textarea name="detection_breach_description" placeholder="Medios de detección de la brecha" class="form-control {{ $errors->has('detection_breach_description') ? 'is-invalid' : ''}}" value="{{ old('detection_breach_description') }}" rows="3">{{ old('detection_breach_description') }}</textarea>
                                    {!! $errors->first('detection_breach_description', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Sobre la brecha </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="form-group">
                                    <label> Resumen del incidente: </label>
                                    <textarea name="breach_description" placeholder="Resumen del incidente" class="form-control {{ $errors->has('breach_description') ? 'is-invalid' : ''}}" value="{{ old('breach_description') }}" rows="3">{{ old('breach_description') }}</textarea>
                                    {!! $errors->first('breach_description', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <div class="form-group {{ $errors->has('breach_types') ? 'is-invalid' : ''}}">
                                            <label> Tipología: </label>
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Confidencialidad" id="breach_type1" name="breach_types[]">
                                          <label class="form-check-label" for="breach_type1">Confidencialidad (acceso no autorizado)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Integridad" id="breach_type2" name="breach_types[]">
                                          <label class="form-check-label" for="breach_type2">Integridad (modificación no autorizada)</label>
                                        </div>
                                        <div class="form-check">
                                          <input class="form-check-input" type="checkbox" value="Disponibilidad" id="breach_type3" name="breach_types[]">
                                          <label class="form-check-label" for="breach_type3">Disponibilidad (desaparición o pérdida)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group {{ $errors->has('breach_origins') ? 'is-invalid' : ''}}">
                                    <label> Medios por el que se materializo la brecha: </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos personales residuales en dispositivos obsoletos" id="breach_origin1" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin1">Datos personales residuales en dispositivos obsoletos</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Documentación perdida, robada o depositada en localización insegura" id="breach_origin2" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin2">Documentación perdida, robada o depositada en localización insegura</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Eliminación incorrecta de datos personales en formato papel" id="breach_origin3" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin3">Eliminación incorrecta de datos personales en formato papel</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Hacking" id="breach_origin4" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin4">Hacking</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Malware" id="breach_origin5" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin5">Malware</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Phishing" id="breach_origin6" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin6">Phishing</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Correo perdido o abierto" id="breach_origin7" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin7">Correo perdido o abierto</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Dispositivo perdido o robado" id="breach_origin8" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin8">Dispositivo perdido o robado</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Publicación no intencionada" id="breach_origin9" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin9">Publicación no intencionada</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos personales mostrados al individuo incorrecto" id="breach_origin10" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin10">Datos personales mostrados al individuo incorrecto</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos personales enviados por error" id="breach_origin11" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin11">Datos personales enviados por error</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Revelación verbal no autorizada de datos personales" id="breach_origin12" name="breach_origins[]">
                                  <label class="form-check-label" for="breach_origin12">Revelación verbal no autorizada de datos personales</label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mt-3">
                                <div class="form-group" {{ $errors->has('breach_measures') ? 'is-invalid' : ''}}>
                                    <label> Medidas preventivas aplicadas: </label>
                                    <textarea name="breach_measures" placeholder="Medidas preventivas aplicadas" class="form-control" value="{{ old('breach_measures') }}" rows="3">{{ old('breach_measures') }}</textarea>
                                    {!! $errors->first('breach_measures', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Datos afectados </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos básicos" id="breach_data1" name="breach_data[]">
                                  <label class="form-check-label" for="breach_data1">Datos básicos</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Credenciales de acceso o identificación" id="breach_data2" name="breach_data[]">
                                  <label class="form-check-label" for="breach_data2">Credenciales de acceso o identificación</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos de contacto" id="breach_data3" name="breach_data[]">
                                  <label class="form-check-label" for="breach_data3">Datos de contacto</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos económicos y financieros" id="breach_data4" name="breach_data[]">
                                  <label class="form-check-label" for="breach_data4">Datos económicos y financieros</label>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Datos de localización" id="breach_data5" name="breach_data[]">
                                  <label class="form-check-label" for="breach_data5">Datos de localización</label>
                                </div>
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="Sobre condenas e infracciones penales" id="breach_data6" name="breach_data[]">
                                  <label class="form-check-label" for="breach_data6">Sobre condenas e infracciones penales</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Sujetos afectados </h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="affected_subject1" value="Usuarios" name="affected_subjects[]">
                                  <label class="form-check-label" for="affected_subject1">Usuarios</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="affected_subject2" value="Clientes" name="affected_subjects[]">
                                  <label class="form-check-label" for="affected_subject2">Clientes</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="affected_subject3" value="Empleados" name="affected_subjects[]">
                                  <label class="form-check-label" for="affected_subject3">Empleados</label>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group" {{ $errors->has('affected_subjects_number') ? 'is-invalid' : ''}}>
                                    <label> Número aproximado de personas afectadas: </label>
                                    <input type="number" name="affected_subjects_number" placeholder="Número de afectados" class="form-control" value="{{ old('affected_subjects_number') }}">
                                    {!! $errors->first('affected_subjects_number', '<small class="text-danger">:message </small>') !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 m-auto shadow">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title text-info"> Posibles consecuencias </h5>
                    </div>
                    <div class="card-body">
                        <div class="row border-top border-primary">
                            <h6 class="col-12">Confidencialidad</h6>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact1" value="Divulgación a terceros / difusión a internet" name="impacts[]">
                                  <label class="form-check-label" for="impact1">Divulgación a terceros / difusión a internet</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact2" value="Los datos pueden ser explotados para otros fines" name="impacts[]">
                                  <label class="form-check-label" for="impact2">Los datos pueden ser explotados para otros fines</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact3" value="Enriquecimiento de otras bases de datos" name="impacts[]">
                                  <label class="form-check-label" for="impact3">Enriquecimiento de otras bases de datos</label>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-primary">
                            <h6 class="col-12">Integridad</h6>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact4" value="Datos han sido modificados aunque hayan quedado inservibles o irrecuperables" name="impacts[]">
                                  <label class="form-check-label" for="impact4">Datos han sido modificados aunque hayan quedado inservibles o irrecuperables</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact5" value="Datos han sido modificados y utilizados para otros fines" name="impacts[]">
                                  <label class="form-check-label" for="impact5">Datos han sido modificados y utilizados para otros fines</label>
                                </div>
                            </div>
                        </div>
                        <div class="row border-top border-primary">
                            <h6 class="col-12">Disponibilidad</h6>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact6" value="Imposibilidad de la prestación de un servicio a los interesados" name="impacts[]">
                                  <label class="form-check-label" for="impact6">Imposibilidad de la prestación de un servicio a los interesados</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="impact7" value="Deterioro de las condiciones de la prestación de un servicio a los interesados" name="impacts[]">
                                  <label class="form-check-label" for="impact7">Deterioro de las condiciones de la prestación de un servicio a los interesados</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-success" name="submit"> Enviar </button>
        </div>
        @csrf
	</form>
@endsection