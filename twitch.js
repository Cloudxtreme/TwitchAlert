function getStreams() {
	$.getJSON('https://api.twitch.tv/kraken/streams/followed', function(data) {
    console.log(data);
	document.write('streams');
});


}
window.onload = getStreams;



