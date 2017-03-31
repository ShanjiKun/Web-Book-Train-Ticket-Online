var stations;
var stationsVK = {};

//Create stations associate key via value
for(key in stations){
	stationsVK[stations[key].toLowerCase()] = key;
}

//Setup station dropdown
setStationDropdownContent('');
function setStationDropdownContent(conditionString){
	
	var stationDropdownContent = '';
	for(key in stations){
		var cleanStation = cleanUpSpecialChars(stations[key].toLowerCase());
		var cleanConditionString = cleanUpSpecialChars(conditionString.toLowerCase())
		var isAdd = cleanStation.includes(cleanConditionString);
		if(isAdd){
			stationDropdownContent += "<li><a id='"+key+"' onClick='onStationPick(this)'>"+stations[key]+"</a></li>";
		}
    }
    $('#station-dropdown-content').html(stationDropdownContent);
}
function cleanUpSpecialChars(str)
{
    str = str.replace(/[aáàãảạăắằẵẳặâấầẫẩậ]/g,"a");
    str = str.replace(/[èéẽẻẹêếểễểệ]/g,"e");
    str = str.replace(/[đ]/g,"d");
    str = str.replace(/[ôốồỗổơớờỡởợóòõỏọ]/g,"o");
    str = str.replace(/[uúùũủụưứừữửự]/g,"u");
    //.... all the rest
    return str.replace(/[^a-z0-9]/gi,''); // final clean up
}

//Document ready
$(document).ready(function(){
	
});

//Post data to server
$('#search-btn').click(function(){

	var stationLeave = $('#station-leave').val();
	var stationArrive = $('#station-arrive').val();
	var indexOfRound = $('input[name=isRoundTrip]:checked').val();
	var dateLeave = $('#date-leave').val();
	var timeLeave = $('#time-leave').val();
	var dateRound = $('#date-round').val();
	var timeRound = $('#time-round').val();

	if(!validateInput(stationLeave, stationArrive, indexOfRound, dateLeave, timeLeave, dateRound, timeRound)) return;

	$.post("search-trip",{
		stationLeave: getStationID(stationLeave),
		stationArrive: getStationID(stationArrive),
		indexOfRound: indexOfRound,
		dateLeave: dateLeave,
		dateRound: dateRound,
		timeLeave: timeLeave,
		timeRound: timeRound
	},function(data, status){
		if(status == 'success'){
			alert('Response: ' + data);

			//Parse data
			//Trips were sorted ASC by Date Leave
			//{ "code":"0", "message":"success", "data":{"leave":[{'trip_id':1}, {'trip_id':2}], "arrive":[{'trip_id':1}, {'trip_id':2}]}}
			var response = JSON.parse(data);
			if(response['code'] != '0'){
				alert(response['message']);
				return;
			}
			//{"leave":[{'trip_id':1}, {'trip_id':2}], "arrive":[{'trip_id':1}, {'trip_id':2}]}
			var trips = response['data'];

			//Get trips leave
			var tripsLeave = trips['leave'];
			if(tripsLeave[0]){
    			//[{'trip_id':1}, {'trip_id':2}]
    			sessionStorage.tripsLeave = JSON.stringify(tripsLeave);

    			//Get trips round
    			if(indexOfRound == 2){
    				var tripsArrive = trips['arrive'];
	    			if(tripsArrive[0]){
	    				//[{'trip_id':1}, {'trip_id':2}]
	    				sessionStorage.tripsArrive = JSON.stringify(tripsArrive);
	    			}
    			}
    			//Save trips information
    			// {"stationLeave":"SG",
	    		// 	"stationArrive":"DN",
	    		// 	"indexOfRound":1,
	    		// 	"dateLeave":"2017-03-22",
	    		// 	"dateRound":"2017-03-25",
	    		// 	"timeLeave":"00:00",
	    		// 	"timeRound":"00:00"
	    		// }
    			var tripInformation = {"stationLeave": stationLeave,
    									"stationArrive": stationArrive,
    									"indexOfRound": indexOfRound,
    									"dateLeave": dateLeave,
    									"dateRound": dateRound,
    									"timeLeave": timeLeave,
    									"timeRound": timeRound
    									};
    			sessionStorage.tripInformation = JSON.stringify(tripInformation);
    			//Redirect to search
    			window.location.href = "/Web-Book-Train-Ticket-Online/search";
			}else{
				alert('Không tìm thấy tàu');
			}
		}else{
			alert('Error: '+status);
		}
	});	    
});
function validateInput(stationLeave, stationArrive, indexOfRound, dateLeave, timeLeave, dateRound, timeRound){

	if (stationLeave == '') {
		alert('Vui lòng nhập ga đi');
		return false;
	}
	if (stationArrive == '') {
		alert('Vui lòng nhập ga đến');
		return false;
	}
	if (!getStationID(stationLeave)) {
		alert('Ga đi không tồn tại');
		return false;
	}
	if (!getStationID(stationArrive)) {
		alert('Ga đến không tồn tại');
		return false;
	}
	if(getStationID(stationLeave) == getStationID(stationArrive)){
		alert('Ga đi ga đến phải khác nhau');
		return false;
	}
	if (dateLeave == '') {
		alert('Vui lòng nhập ngày đi');
		return false;
	}
	if (timeLeave == '') {
		alert('Vui lòng nhập giờ đi');
		return false;
	}
	if (!validateDate(dateLeave)) {
		alert('Ngày đi không hợp lệ');
		return false;
	}
	if (!validateDate(dateLeave+' '+timeLeave)) {
		alert('Giờ đi không hợp lệ');
		return false;
	}
	if(indexOfRound == 2){
		if (dateRound == '') {
    		alert('Vui lòng nhập ngày về');
    		return false;
    	}
    	if (timeRound == '') {
    		alert('Vui lòng nhập giờ về');
    		return false;
    	}
    	if (!validateDate(dateRound)) {
    		alert('Ngày về không hợp lệ');
    		return false;
    	}
    	if (!validateDate(dateRound+' '+timeRound)) {
    		alert('Giờ về không hợp lệ');
    		return false;
    	}
	}
	
	return true;
}
function getStationID(stationName){
	return stationsVK[stationName.toLowerCase()];
}
function validateDate(stringDate){
	//string Date must format yyyy-m-d
	var date = new Date(stringDate);
	if(date.valueOf()){
		return true;
	}else{
		return false;
	}
}
//Hanlde pick round trip
$('input[name=isRoundTrip]').change(function(){
	if(this.value=='1'){
		disableDateTimeRoundPicker();
	}
	if(this.value=='2'){
		enableDateTimeRoundPicker();
	}
});

function enableDateTimeRoundPicker(){
	$('#date-round').css('background-color', 'white').css('pointer-events', 'all');
	$('#btn-date-round').css('background-color', 'white').css('pointer-events', 'all');
	$('#time-round').css('background-color', 'white').css('pointer-events', 'all');
}

function disableDateTimeRoundPicker(){
	$('#date-round').css('background-color', '#eee').css('pointer-events', 'none');
	$('#btn-date-round').css('background-color', '#eee').css('pointer-events', 'none');
	$('#time-round').css('background-color', '#eee').css('pointer-events', 'none');
}

//Handle station dropdown
var currentTypeStation; //leave, arrive or ''
$('.station-dropdown').keyup(function(){
	var x = $(this).offset().left;
  	var y = $(this).offset().top + $(this).outerHeight();
	$('#station-dropdown-content')
	.css('left', x)
	.css('top', y)
	.css('display', 'block');
	currentTypeStation = $(this).attr('id');

	//Filter station_name
	setStationDropdownContent($(this).val());
});

$(document).click(function(){
	$('#station-dropdown-content').css('display', 'none');
});

// $('.station-pick').click(function(){
// 	alert(currentTypeStation);
// 	$('#'+currentTypeStation).val($(this).html());
// });
function onStationPick(e){
	$('#'+currentTypeStation).val($(e).html());
}

//Add datepicker
$('#date-leave').datepicker({
    'format': 'yyyy-m-d',
    'autoclose': true,
    // 'startDate' : new Date()
});

$('#date-round').datepicker({
    'format': 'yyyy-m-d',
    'autoclose': true,
    'startDate' : new Date()
});

$('#btn-date-leave').datepicker({
	'format': 'yyyy-m-d',
    'autoclose': true
}).on("changeDate", function(e){
	// var dateDMY = e.date.getDate() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getFullYear();
	var dateYMD = e.date.getFullYear() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getDate();
	$('#date-leave').val(dateYMD);
});

$('#btn-date-round').datepicker({
	'format': 'yyyy-m-d',
    'autoclose': true
}).on("changeDate", function(e){
	var dateYMD = e.date.getFullYear() + '-' + (e.date.getMonth() + 1) + '-' +  e.date.getDate();
	$('#date-round').val(dateYMD);
});

//Add time picker
$('#time-leave').timepicker({
	'step': 30,
	 'timeFormat': 'H:i'
});

$('#time-round').timepicker({
	'step': 30,
	 'timeFormat': 'H:i'
});