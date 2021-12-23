@if($value->img != '')
    <img src="{{asset("") . $value->img }}" />
@else
    <img src="{{asset('web/images/price-icon-1.png')}}" />
@endif

<h3>{{ $value->name }}</h3>

<div class="price-amount">

    <?= $value->discount_price == 0 ? '' : '<strike>$'. $value->price .'</strike>' ?>

    <h2>$<?= $value->discount_price == 0 ? $value->price : $value->discount_price ?></h2>

</div>

@if($value->details != '')

    <?= html_entity_decode(str_replace('<ul', '<ul class="price-list"', $value->details)) ?>

@endif

