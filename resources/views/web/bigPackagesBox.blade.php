<div class="combo-hd-txt">
    <h2 class="title cn clr_wht">{{ $value->name }}</h2>
</div>

<div class="cmb-price-div">

    <?= $value->discount_price == 0 ? '' : '<strike>$'. $value->price .'</strike>' ?>

    <h2>$<?= $value->discount_price == 0 ? $value->price : $value->discount_price ?></h2>

</div>

<div class="cmb-list">

    @if($value->details != '')

    <?= html_entity_decode(str_replace('<ul', '<ul class="price-list"', $value->details)) ?>

@endif

</div>

