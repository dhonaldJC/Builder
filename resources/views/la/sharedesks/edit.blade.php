@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/sharedesks') }}">ShareDesk</a> :
@endsection
@section("contentheader_description", $sharedesk->$view_col)
@section("section", "ShareDesks")
@section("section_url", url(config('laraadmin.adminRoute') . '/sharedesks'))
@section("sub_section", "Edit")

@section("htmlheader_title", "ShareDesks Edit : ".$sharedesk->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($sharedesk, ['route' => [config('laraadmin.adminRoute') . '.sharedesks.update', $sharedesk->id ], 'method'=>'PUT', 'id' => 'sharedesk-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'PackageName')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/sharedesks') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#sharedesk-edit-form").validate({
		
	});
});
</script>
@endpush
