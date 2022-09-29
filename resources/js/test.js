import axios from 'axios'
import './bootstrap.js'
console.log("started")

const button  = document.querySelector("#button")
button.addEventListener("click",function(){
	axios.post("/chat",{
		name:"lucas"
	}).then(function(){
		console.log("button is now clicked")
	});
})

window.Echo.channel('chat').listen('.lire',function(event){
	alert("listen")
	console.log(event)
	alert("yes")

})