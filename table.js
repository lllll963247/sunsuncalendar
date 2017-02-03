// JavaScript Document
"use strict";
var td=new Date();
var yearo=td.getFullYear();
var montho=td.getMonth()+1;
var year ,month ;
window.onload = calendar(yearo, montho);


//****************************************Ajax**********************************
function showname(yr,mth,i){
var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {	
    if (this.readyState === 4 && this.status === 200) {
		document.getElementById("d"+i).innerHTML =this.responseText;
    }
};
xmlhttp.open("GET", "123.php?year="+yr+"&month="+mth+"&day="+i, true);
xmlhttp.send();
}
//********************************Calendar*********************************
function calendar(yr, mth)
{
	
var s='<table>';
s+='<tr>';
	s+='<th class="cursor" onclick="drawCal(-1)">&lang;</th>';
	s+='<th colspan="5">'+yr+'年'+mth+'月</th>';
	s+='<th class="cursor" onclick="drawCal(1)">&rang;</th></tr>';
s+='<tr><td colspan="7" id="choose" class="choose"><a name="1">1<a name="2">2<a name="3">3<a name="4">4<a name="5">5<a name="6">6<a name="7">7<a name="8">8<a name="9">9<a name="10">10<a name="11">11<a name="12">12</td></tr>';
s+='<tr>';
	
		
	s+='<td class="week">一<td class="week">二<td class="week">三<td class="week">四<td class="week">五<td class="week">六<td class="week">日';
var today=new Date( td.getFullYear(), td.getMonth(), td.getDate());
var dt=new Date(yr, mth-1, 1);
var wd=dt.getDay(); //week day
var i;
s+='<tr>';
if(wd == 0){
	s+='<td><td><td><td><td><td>';
}
else{
for( ; wd > 1 ; wd--){s+='<td></td>'};}
for(i=1;i<100;i++){
	dt=new Date(yr,mth-1,i);
	if(dt.toString() === today.toString())
	{
		s+='<td class="days today" >'+i+'<br><div id="d'+i+'"></div></td>';
		showname(yr,mth,i);
	}
	else{
		s+='<td class="days" >'+i+'<br><div id="d'+i+'"></div></td>';
		showname(yr,mth,i);
	}
	//set the end of month
	var aa = new Date(yr,mth-1,i+1);
	if( aa.getMonth() != mth-1 ){ break;}
	//sunday + <tr>
	wd=dt.getDay();
	if(wd == 0)	{s+='<tr>';}	
}
	//the end block
	for( ; wd < 6; wd++) { s+='<td>'};
	s+='</table>';
	document.getElementById('calendar').innerHTML=s;
	//tag today month 
	var w=document.getElementsByTagName('a');
	for(var t=0;t<w.length;t++)
		{
			if(mth == w[t].attributes[0].value)
				{
					w[t].setAttribute('style','color: #f00');
				}
		}	
	year = yr;
	month = mth;
	monthcho();
	
}
//*****************************calendar*********************************

function monthcho(){
	var x = document.querySelectorAll('td a');
	for(var i=0;i<x.length;i++){		
		x[i].onclick = monthtarget;
	}
}
function monthtarget(event){
	var y=event.target.name;
	y=Number(y);
	calendar(year,y);
}
function drawCal(inc)
{
  month+=inc;
  if(month<1)
  {
    month=12;
    year--;
  }
  else if(month>12)
  {
 	month=1;
	year++;
  }
  calendar(year, month);
}