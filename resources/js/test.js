import './bootstrap.js'
console.log("started")

Echo.channel('status').listen('my-event',(e)=>{
	console.log(e)
	alert("yes")
})