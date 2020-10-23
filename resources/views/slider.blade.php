<div class="main-search-container centered" data-background-image="images/Campunite-Bild-Start-desktop.png">
	<div class="main-search-inner">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2>
					{{trans('front.slider_title')}}
						<!-- Typed words can be configured in script settings at the bottom of this HTML file -->
					</h2>
					<div class="main-search-input">
						<div class="main-search-input-item location">
							<div id="autocomplete-container">
								<input id="autocomplete-input" type="text" placeholder="{{trans('front.slider_location')}}">
							</div>
							<a href="#"><i class="fa fa-map-marker"></i></a>
						</div>

						<div class="main-search-input-item remove_border">
							<input type="text" id="date-picker" placeholder="Date" readonly="readonly">
						</div>

						<div class="main-search-input-item">
							<input type="text" id="date-picker2" placeholder="Date" readonly="readonly">
						</div>
						<button class="button" onclick="window.location.href='listings-half-screen-map-list.html'">{{trans('front.slider_search')}}</button>

					</div>
				</div>
			</div>

			<!-- Featured Categories - End -->

		</div>

	</div>
</div>