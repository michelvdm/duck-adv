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

/* heroquest map on canvas */
$(function(){
	var q=$('#hq-map');if(!q.length)return;

	var hTiles=29,vTiles=19,size=40;
	var ctx=q[0].getContext('2d');

	function drawLine(x,y,x2,y2){
		ctx.moveTo(x*size,y*size);
		ctx.lineTo(x2*size,y2*size);
	}

	// grid
	ctx.strokeStyle='#D8CAB6';
	ctx.lineWidth=1;
	ctx.beginPath();
	for(var i=1;i<vTiles;i++){
		ctx.moveTo(0,i*size);
		ctx.lineTo(hTiles*size,i*size);
	}
	for(var i=1;i<hTiles;i++){
		ctx.moveTo(i*size,0);
		ctx.lineTo(i*size,vTiles*size);
	}
	ctx.stroke();

	// rooms
	ctx.strokeStyle='#900';
	ctx.lineWidth=2;
	ctx.beginPath();

	drawLine(1,1,12,1);
	drawLine(1,4,9,4);
	drawLine(9,6,12,6);
	drawLine(1,9,9,9);
	drawLine(1,1,1,9);
	drawLine(5,1,5,9);
	drawLine(9,1,9,9);
	drawLine(12,1,12,6);

	drawLine(14,1,25,1);
	drawLine(17,5,25,5);
	drawLine(14,6,17,6);
	drawLine(17,9,25,9);
	drawLine(14,1,14,6);
	drawLine(17,1,17,9);
	drawLine(21,1,21,9);
	drawLine(25,1,25,9);

	drawLine(10,7,16,7);
	drawLine(10,12,16,12);
	drawLine(10,7,10,12);
	drawLine(16,7,16,12);

	drawLine(1,10,9,10);
	drawLine(5,13,12,13);
	drawLine(1,14,5,14);
	drawLine(1,18,12,18);
	drawLine(1,10,1,18);
	drawLine(5,10,5,18);
	drawLine(7,10,7,13);
	drawLine(9,10,9,18);
	drawLine(12,13,12,18);

	drawLine(17,10,25,10);
	drawLine(14,13,18,13);
	drawLine(18,14,25,14);
	drawLine(14,18,25,18);
	drawLine(14,13,14,18);
	drawLine(17,10,17,13);
	drawLine(18,13,18,18);
	drawLine(21,10,21,18);
	drawLine(25,10,25,18);

	ctx.stroke();
});