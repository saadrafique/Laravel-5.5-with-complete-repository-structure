<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.1/css/bulma.css">
	<style type="text/css">
	.blue{
		color: blue;
	}

	.red{
		color: red;
	}
	</style>
</head>
<body>

<div id="main" class="container" >
	
	<input type="text" v-model="message" >
	this message is @{{message}}

	<input type="text" v-model="new_message">
	this new message is @{{new_message}}

	<br>
	<li v-for="name in names" v-text="name"></li>

	<input type="text" v-model="new_name" >
	<button  @click="addNewName">add new name</button>

	<p :class="changeColorText" >change my color</p>
	<button :title="btnText" @click="changeColor" >click to change color</button>


	<ul>
		<li v-for="task in tasks" v-text="task.description"></li>
	</ul>

<!-- <button @click="changeTaskFunction('all')">Click For all tasks</button>
	<button @click="changeTaskFunction('complete')">Click For completed tasks</button>
	<button @click="changeTaskFunction('incomplete')">Click For Incompleted tasks</button> -->
<task>hello<task>

task list here :
<task-list></task-list>


<article class="message">
  <div class="message-header">
    <p>Hello World</p>
    <button class="delete" aria-label="delete"></button>
  </div>
  <div class="message-body">
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Pellentesque risus mi</strong>, tempus quis placerat ut, porta nec nulla. Vestibulum rhoncus ac ex sit amet fringilla. Nullam gravida purus diam, et dictum <a>felis venenatis</a> efficitur. Aenean ac <em>eleifend lacus</em>, in mollis lectus. Donec sodales, arcu et sollicitudin porttitor, tortor urna tempor ligula, id porttitor mi magna a neque. Donec dui urna, vehicula et sem eget, facilisis sodales sem.
  </div>
</article>


<message title="hello guys" body="here is the message body"></message>



<modal v-if="showModal" @close="showModal= false"></modal>
<button @click="showModal=true">Show Modal</button>
</div>




<script type="text/javascript" src="https://unpkg.com/vue@2.5.17/dist/vue.js" ></script>
<script type="text/javascript" src="js/main.js" ></script>


</body>
</html>