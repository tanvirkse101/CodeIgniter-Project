//First attempt for time counter
$(document).ready(function () {
	var id = "<?php echo $this->session->userdata('id');?>";
	var pageurl = "<?php echo current_url();?>";
	var start = null;
	console.log(id);
	console.log(pageurl);
	$(window).on('load', function () {
		start = event.timeStamp;
		console.log(start);
	});

	$(window).on('unload', function () {
		var time = parseInt(event.timeStamp - start);
		console.log(time);
		$.ajax({
			type: "POST",
			url: "<?php echo base_url() . 'UserSession/set_active_time'?>",
			contentType: false,
			processData: false,
			data: {
				id: id,
				pageurl: pageurl,
				time: time,
			},
			success: function (data) {
				alert("I got a view");
				console.log(data);
			}
		});
	});
});

//Workinging time counter

var timer;
var timeStart;
var timeSpentOnSite = getTimeSpentOnSite();
var id = "<?php echo $this->session->userdata('id');?>";
var pageurl = "<?php echo current_url();?>";

function getTimeSpentOnSite() {
	timeSpentOnSite = parseInt(timeSpentOnSite);
	timeSpentOnSite = isNaN(timeSpentOnSite) ? 0 : timeSpentOnSite;
	return timeSpentOnSite;
}

function start_timer() {
	timerStart = Date.now();
	timer = setInterval(function () {
		timeSpentOnSite = getTimeSpentOnSite() + (Date.now() - timerStart);
		timerStart = parseInt(Date.now());
	}, 1000);
}

function set_active_time() {
	$.ajax({
		type: "POST",
		url: "<?php echo base_url('UserSession/set_active_time') ?>",
		dataType: "json",
		data: {
			id: id,
			pageurl: pageurl,
			timeSpentOnSite: timeSpentOnSite,
		},
		success: function (data) {
			alert("I got a view");
		}
	});
}














var timer;
var timerStart;
var timeSpentOnSite = getTimeSpentOnSite();

function getTimeSpentOnSite() {
	timeSpentOnSite = parseInt(localStorage.getItem('timeSpentOnSite'));
	timeSpentOnSite = isNaN(timeSpentOnSite) ? 0 : timeSpentOnSite;
	return timeSpentOnSite;
}

function startCounting() {
	timerStart = Date.now();
	timer = setInterval(function () {
		timeSpentOnSite = getTimeSpentOnSite() + (Date.now() - timerStart);
		localStorage.setItem('timeSpentOnSite', timeSpentOnSite);
		timerStart = parseInt(Date.now());
		// Convert to seconds
		console.log(parseInt(timeSpentOnSite / 1000));
	}, 1000);
}
startCounting();

/* ---------- Stop the timer when the window/tab is inactive ---------- */

var stopCountingWhenWindowIsInactive = true;

if (stopCountingWhenWindowIsInactive) {

	if (typeof document.hidden !== "undefined") {
		var hidden = "hidden",
			visibilityChange = "visibilitychange",
			visibilityState = "visibilityState";
	} else if (typeof document.msHidden !== "undefined") {
		var hidden = "msHidden",
			visibilityChange = "msvisibilitychange",
			visibilityState = "msVisibilityState";
	}
	var documentIsHidden = document[hidden];

	document.addEventListener(visibilityChange, function () {
		if (documentIsHidden != document[hidden]) {
			if (document[hidden]) {
				// Window is inactive
				clearInterval(timer);
			} else {
				// Window is active
				startCounting();
			}
			documentIsHidden = document[hidden];
		}
	});
}
