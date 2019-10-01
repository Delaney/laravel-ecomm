<!-- <script src="{{ asset('frontend/js/jquery-2.0.0.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/plugins/fancybox/fancybox.min.js') }}" type="text/javascript"></script>
<script src="{{ asset('frontend/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/js/script.js') }}" type="text/javascript"></script> -->

<script src="{{ asset('frontend/js/jquery-2.2.3.min.js') }}"></script>

<!--search jQuery-->
<script src="{{ asset('frontend/js/modernizr-2.6.2.min.js') }}"></script>
<script src="{{ asset('frontend/js/classie-search.js') }}"></script>
<script src="{{ asset('frontend/js/demo1-search.js') }}"></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src="{{ asset('frontend/js/minicart.js') }}"></script>
<script>
	googles.render({ 'action': '/checkout' });
	googles.cart.on('add', function(idx, product, isExisting) {
		console.log(product);
		
		let data = {
			'productId': product._data.id,
			'qty': 1,
			'price': product._data.amount,
			'_token': "{{ csrf_token() }}"
		};

		$.post('/product/add/cart', data, function(response, status, xhr){
		}).fail(function() {
			googles.cart.remove(idx);
		});
	});
	googles.cart.on('googles_checkout', function (evt) {
		var items, len, i;

		if (this.subtotal() > 0) {
			items = this.items();
			console.log(items);

			for (i = 0, len = items.length; i < len; i++) {}
		}
	});
</script>
<!-- //cart-js -->
<script>
	$(document).ready(function () {
		$(".button-log a").click(function () {
			$(".overlay-login").fadeToggle(200);
			$(this).toggleClass('btn-open').toggleClass('btn-close');
		});
	});
	$('.overlay-close1').on('click', function () {
		$(".overlay-login").fadeToggle(200);
		$(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
		open = false;
	});
</script>
<!-- carousel -->

<script src="{{ asset('frontend/js/owl.carousel.js') }}"></script>
<script>
	$(document).ready(function () {
		$('.owl-carousel').owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 2,
					nav: false
				},
				900: {
					items: 3,
					nav: false
				},
				1000: {
					items: 4,
					nav: true,
					loop: false,
					margin: 20
				}
			}
		})
	})
</script>

<!-- //end-smooth-scrolling -->


<!-- dropdown nav -->
<script>
	$(document).ready(function () {
		$(".dropdown").hover(
			function () {
				$('.dropdown-menu', this).stop(true, true).slideDown("fast");
				$(this).toggleClass('open');
			},
			function () {
				$('.dropdown-menu', this).stop(true, true).slideUp("fast");
				$(this).toggleClass('open');
			}
		);
	});
</script>
<!-- //dropdown nav -->
<script src="{{ asset('frontend/js/move-top.js') }}"></script>
<script src="{{ asset('frontend/js/easing.js') }}"></script>
<script>
	jQuery(document).ready(function(NGN) {
		$(".scroll").click(function(event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 900);
		});
	});
</script>
<script>
	$(document).ready(function() {
		/*
								var defaults = {
										containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
									};
								*/

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});
</script>
<!--// end-smoth-scrolling -->

<script src="{{ asset('frontend/js/bootstrap.js') }}"></script>
<!-- js file -->