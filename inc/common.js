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
	ctx.lineWidth=3;
	ctx.beginPath();

	drawLine(1,1,11,1);
	drawLine(1,1,1,9);


	ctx.stroke();
});