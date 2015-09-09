'use strict';

/* make external svg work in IE */
$(function(){
	if($.ieVer()<9)return;
	var $uses=$('use'),embeds={};

	$uses.each(function(i,o){
		var $o=$(o),url=$o.attr('xlink:href').split('#'),p=url[0];
		$o.attr('xlink:href','#'+url[1]);
		if(!embeds[p])embeds[p]=1,$.get(url[0],null,function(o){$('head').append(o)});
	});
});

/* array functions */
$(function(){

/*
6 Dungeon Rooms
5 Objective Rooms
7 Corridors
1 Steps
3 T-junctions
1 Comer
*/

var orm=['##obj 1','##obj 2','##obj 3','##obj 4','##obj 5'],
	rms=['dr 1','dr 2','dr 3','dr 4','dr 5','dr 6','cr 1','cr 2','cr 3','cr 4','cr 5','cr 6','cr 7','tj 1','tj 2','tj 3','steps','corner'];

function getRandomInt(min,max){return Math.floor(Math.random()*(max-min+1)+min)}
function clone(arr){return arr.slice(0)}
function shuffle(arr){var n=arr.length,j,q;for(var i=n-1;i>1;i--){j=getRandomInt(0,n);q=arr[j];arr[j]=arr[i];arr[i]=q}return arr}
function take(arr,num){return arr.splice(0,num)}
function pickOne(arr){return(arr[Math.floor(Math.random()*arr.length)])}

var tmp,tmp2,tmp3,objRm,max=10000,stats=[];


for(var i=0;i<max;i++){
	// shuffle the rooms and take 6
	tmp=clone(rms);
	shuffle(tmp);
	tmp2=take(tmp,6);
	// take random objective room, add to stack, shuffle again
	objRm=pickOne(orm);
	tmp2.push(objRm);
	shuffle(tmp2);
	// take 6 more rooms and add them to the list
	tmp3=take(tmp,6).concat(tmp2);
	var q=tmp3.indexOf(objRm);
	stats[q]=(stats[q]||0)+1;
}

/*
var q,x=[];
for(var i=0;i<max;i++){
	q=getRandomInt(1,5);
	stats[q]=(stats[q]||0)+1;
}

for(var q in stats){
	x[q]=Math.abs(stats[q]-(max/5))/max*100;
}
*/

console.dir( stats );

});
