<!--- map preview --->
<div class="acf-preview" @if(!empty($nomt)) data-acf-nomt @endif>
	<div class="acf-preview__meta">
		<div class="acf-preview__heading">
			<div class="acf-preview__title">Mapa</div>
			<span class="acf-preview__slug">acf/map</span>
		</div>
		@include('partials.block-preview-settings')
	</div>
	<div class="acf-preview__content"><p>Blok wyświetla osadzoną mapę na podstawie wklejonego kodu.</p></div>
</div>
