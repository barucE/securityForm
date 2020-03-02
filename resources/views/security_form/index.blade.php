@extends('layout', ['title' => 'Listado de Incidencias'])


@section('content')
<table class="table table-striped table-bordered mt-4">
	<thead>
		<th> ID</th>
		<th> Fecha de creación</th>
		<th> Nombre del creador</th>
	    <th> Tipo de brecha </th>
	    <th> Fecha de Detección </th>
	    <th> Fecha de Inicio </th>
	    <th> &nbsp; </th>
	</thead>

	<tbody>
	    @foreach($breaches as $breach)
	    <tr>
	    	<td> {{ $breach->id }} </td>
	    	<td> {{ $breach->created_at }} </td>
	        <td> {{ $breach->name . ' ' . $breach->last_name }} </td>
	        <td> {{ $breach->breach_types }} </td>
	        <td> {{ $breach->detection_breach_date }} </td>
	        <td> {{ $breach->start_breach_date }} </td>

	        <td> <button type="button" class="btn btn-info" data-id="{{ $breach->id }}">Ver detalles</button> </td>
	    </tr>
	    @endforeach
	</tbody>
</table>

<div class="modal" id="detailsModal" tabindex="-1" role="dialog" aria-labelledby="detailsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Detalles</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
<script>
	$(document).ready(function () {
	  $('.btn-info').on('click', function(){
	  	var id = $(this).attr('data-id');
	  	$.ajax({
		  method: "GET",
		  url: '/showId/'+ id,
		  success: function(response){
		  	$('#detailsModal .modal-title').text('Detalles ID ' + id);
		  	$('#detailsModal .modal-body').html(response.html);
	  		$('#detailsModal').modal();
		  }
		});
	  });
	});
</script>
@endsection