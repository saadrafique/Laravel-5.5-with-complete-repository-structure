Vue.component('cupon',{
	template:`
		
		<input placeholder="enter you cupon code here" @blur="onCuponApplied" >

	`,

	methods: {

		onCuponApplied() {

			this.$emit('applied');
		}
	}
});

var app = new Vue({
		
		el: '#component_communication',
		data:{
			test_vue:"test successful here"
				
		},

		methods: {

			onCuponApplied() {

				alert('it was applied');
			}
		}
	});