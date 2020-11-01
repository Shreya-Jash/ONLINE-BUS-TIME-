<script>
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  var session=" AM";
  var h1=today.getHours();
  if(h>=12)
  {
  	 session=" PM";
	}
	if(h==0)
	{
		h=12;
		}
  m = checkTime(m);
  s = checkTime(s);
  h=checkTime1(h);
  
 
  document.getElementById('txt').innerHTML =
  h + ":" + m + ":" + s+session;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
  return i;
}
function checkTime1(i) {
  if (i >12) {i = i-12 };  // add zero in front of numbers < 10
  return i;
}
</script>





