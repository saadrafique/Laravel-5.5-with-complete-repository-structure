
Vue.component('task-list',{

	template : '<div><task v-for="t in tasks2" v-text="t.description"></task></div>',

	data(){
		return {
			tasks2:[
			{description:'wake up in morning', completed:true},
			{description:'teeth brush', completed:false},
			{description:'done breakfast', completed:false},
			{description:'take lunch for office', completed:true},
			{description:'took bath', completed:false},
			{description:'drive safely to office', completed:true},
			{description:'done my office work', completed:false},
			{description:'back to home', completed:true},

			
		]
		}
	}
});
Vue.component('task',{

	template : '<li><slot></slot></li>'
});


Vue.component('message',{
	data(){
		return{
			isVisisble : true
		}
	},
	props:['title','body'],
	template: '<article v-show="isVisisble" class="message"><div class="message-header">{{title}} <button type="button" @click="hideModal">x</button></div><div class="message-body">{{body}}</div></article>',
	methods:{
		hideModal(){
			this.isVisisble = false;
		}
	}
});

Vue.component('modal',{
	props:['body'],
	template:`<div class="modal is-active"><div class="modal-background"></div><div class="modal-content"><div class="box" >lorem ipsusm jkh  hjklh klj jkh lkhhjkh jk hlkjh lkhhjkh</div></div><button class="modal-close is-large" aria-label="close" @click="$emit('close')" ></button></div>`
});
var app = new Vue({
		
		el: '#main',
		data: {
		new_name:'',
		message:'hello',
		new_message:'',
		names:['saad','ali','asif','raza','adnan'],
		title:'title is here',
		changeColorText:'blue',
		btnText:'button to change the color',
		tasks:[
			{description:'wake up in morning', completed:true},
			{description:'teeth brush', completed:false},
			{description:'done breakfast', completed:false},
			{description:'take lunch for office', completed:true},
			{description:'took bath', completed:false},
			{description:'drive safely to office', completed:true},
			{description:'done my office work', completed:false},
			{description:'back to home', completed:true},
		],
		showModal:false 
		},

		methods: {
			addNewName() {
				this.names.push(this.new_name);
				this.new_name = '';
			},


			changeColor(){

				this.changeColorText = 'red';
			},

			changeTaskFunction(taskType){
				alert(taskType);
				this.tasks.filter(task => ! task.completed);
			}

		},

		computed: { 
			TasksHere(){

				return this.tasks.filter(task =>  task.completed);
					
			}
			
		},


	})