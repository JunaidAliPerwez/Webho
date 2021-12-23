@extends('web.layouts.main') @section('content')


<section class="consultation_services_sec packages_consultation_services_sec veiw-dtl-sec-st">
	<div class="container">
		<div class="row">
			<div class="consultation_services_boxes">
				<div class="col-sm-4">
					<div class="price-bx price-bx-1">

                        @foreach($setPackage as $key => $value)

                            @if ($value->id == 52)

                                @include('web.packagesBox')

                            @endif

                        @endforeach


                                <div class="bnr-btn price-btn">

						</div>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="consultation_services_box_img view-dtl-txt">
						<h2>{{ $content_83->name }}</h2>
						<p><?= html_entity_decode($content_83->details) ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection @section('css')
<style type="text/css"></style>
@endsection @section('js') @endsection
