<template>
	<div>
		<h4>Your shopping cart contains:
			<span>{{ cart.length }} Products</span>
		</h4>
		<table class="timetable_sub">
			<thead>
				<tr>
					<th>SL No.</th>
					<th>Quantity</th>
					<th>Product Name</th>

					<th>Price</th>
					<th>Remove</th>
				</tr>
			</thead>
			<tbody>
				<tr class="rem1" v-for="(item, index) in cart" :key="item.id" :data-row="item.id">
					<td class="invert">{{ index+1 }}</td>
					<td class="invert">
						<div class="quantity">
							<div class="quantity-select">
								<div class="entry value-minus" @click="decrement(item.id)">&nbsp;</div>
								<div class="entry value">
									<span>{{ item.quantity }}</span>
								</div>
								<div class="entry value-plus active" @click="increment(item.id)">&nbsp;</div>
							</div>
						</div>
					</td>
					<td class="invert">{{ item.name }}</td>

					<td class="invert">{{ symbol }}{{ item.price }}</td>
					<td class="invert">
						<div class="rem" @click="remove(item.id)">
							<div class="close1"> </div>
						</div>

					</td>
				</tr>
			</tbody>
		</table>
		<br><br>
		<h3>Total: {{ symbol }}{{ total }}</h3>
	</div>
	
</template>

<script>
	export default {
		name: "checkout-cart",
		data() {
			return {
				cart: [],
				total: 0,
				symbol: "",
				sn: 0
			}
		},
		computed: {
		},
		created: function() {
			this.loadCart();
		},
		methods: {
			loadCart() {
				let _this = this;
				axios.get('/cart/items').then (function(response){
					// console.log(response.data);
					var result = Object.values(response.data.cart);
					console.log(result);
					// _this.cart = response.data.cart;
					_this.cart = result;
					_this.total = response.data.total;
					_this.symbol = response.data.symbol;
				}).catch(function (error) {
					console.log(error);
				});
			},

			increment(id) {
				let _this = this;
				let index = _this.cart.findIndex(obj => obj.id === id);
				let product = _this.cart[index];
				product.quantity++;

				let data = {
					"cmd": "_cart",
					"add": "1",
					"googles_item": product.name,
					"amount": product.price,
					"id": product.id,
					"slug": product.slug,
					"currency_code": _this.symbol,
				}
				googles.cart.add(data);
				_this.total += product.price;
			},

			decrement(id) {
				let _this = this;
				let index = _this.cart.findIndex(obj => obj.id === id);
				let product = _this.cart[index];
				product.quantity--;

				let items = googles.cart.items();
				let idx = items.findIndex(obj => obj._data.id === id);
				let item = googles.cart.items(idx);

				item.set('quantity', product.quantity);
				_this.total -= product.price;
			},

			remove(id) {
				let _this = this;
				let index = _this.cart.findIndex(obj => obj.id === id);
				let amount = _this.cart[index].price * _this.cart[index].quantity;
				console.log(amount);
				_this.cart.splice(index, 1);
				$(`[data-row="${id}"]`).remove();
				_this.total -= amount;

				let items = googles.cart.items();
				let idx = items.findIndex(obj => obj._data.id === id);
				googles.cart.remove(idx);				
			}
		}
	}
</script>