/**
 * Just a collection to keep all information and settings in one place to configure
 * all JavaScript sensitive processes, like the WebSocket server and so on
 */

// Settings for WebSocket server
var host = '192.168.178.59';
var port = 9999;
var delay = 10000; // refresh rate in ms

var name = jsVars.username;

// Publish / Subscribe
// Adding all events to the user who created it to get status updates
var subEventsArray = [];

var allSubs = jsVars.subscriptions;

for (var sub in allSubs)
	subEventsArray.push(allSubs[sub].event);

// Other stuff
includeSocketIO(); // load socket.io.js from websocket server

/************************************************************************************/

function includeSocketIO() {
	var head= document.getElementsByTagName('head')[0];
	var script= document.createElement('script');
	script.type= 'text/javascript';
	script.src= 'http://'+host+':'+port+'/socket.io/socket.io.js';
	head.appendChild(script);
}

// short version to make an app notification
function notification(text, type) {
	noty({text: text, type: type});
}