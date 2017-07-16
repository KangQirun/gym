document.write('<iframe id=CalFrame name=CalFrame frameborder=0 src=js/calendar.htm style=display:none;position:absolute;z-index:100></iframe>');
document.onclick=hideCalendar;

function showCalendar(sImg,bOpenBound,sFld1,sNextP,sNextD,sStartD,sEndD,sVD,sOE,sVDE,sOT,s3F,sFld2,sCallback,sNextVDE)
{
	//1.sImg日历弹出位置的控件的名称,
	//2.bOpenBound,
	//3.sFld1取得日期的控件名称,
	
	
	//4.sNextP选取日期后新日历弹出的位置的控件名称,可不输入,
	//5.sNextD选取日期后新日历弹出从中取值的控件名称,可不输入,
	
	//6.sStartD开始有效时间,
	//7.sEndD截至有效时间,
	
	//8.sVD周几有效,例如：'1,3,5',注意星期日应输入'0'
	//9.sOE,单双日有效,'0'表示双日,'1'表示单日
	//10.sVDE特殊日期,例如'2004-10-11,2004-11-20,',最后一定要输入','
	//11.sOT如果是直接在文本框中点击'text',
	//12.s3F下一个日历弹出并选择后点取日期后定位到新的控件
	
	//sFld2,弹出日历默认日期
	//sCallback
	
	// sNextVDE 下一次焦点的有效时间.
	
	var fld1,fld2;
	var cf=document.getElementById("CalFrame");
	var wcf=window.frames.CalFrame;
	var oImg=document.getElementById(sImg);
	if(!oImg){alert("控制对象不存在！");return;}
	if(!sFld1){alert("输入控件未指定！");return;}
	fld1=document.getElementById(sFld1);
	if(!fld1){alert("输入控件不存在！");return;}
	if(fld1.tagName!="INPUT"||fld1.type!="text"){alert("输入控件类型错误！");return;}
	if(sFld2)
	{
		fld2=document.getElementById(sFld2);
		if(!fld2){alert("参考控件不存在！");return;}
		if(fld2.tagName!="INPUT"||(fld2.type!="text"&&fld2.type!="hidden")){alert("参考控件类型错误！");return;}
	}
//	if(!wcf.bCalLoaded){alert("日历未成功装载！请刷新页面！");return;}
	wcf.n_position=sNextP;
	wcf.n_textdate=sNextD;
	wcf.startdate=sStartD;
	wcf.enddate=sEndD;
	wcf.vailidday=sVD;
	wcf.oddeven=sOE;
	wcf.vailiddate=sVDE;
	wcf.nextvailiddate = sNextVDE;
	wcf.objecttype=sOT;
	wcf.thirdfocus=s3F;
	if(cf.style.display=="block"){cf.style.display="none";return;}
	
	var eT=0,eL=0,p=oImg;
	var sT=document.body.scrollTop,sL=document.body.scrollLeft;
	var eH=oImg.height,eW=oImg.width;
	while(p&&p.tagName!="BODY"){eT+=p.offsetTop;eL+=p.offsetLeft;p=p.offsetParent;}
	if(sOT=="text")
	{
		cf.style.top=+(document.body.clientHeight-(eT-sT)-eH>=cf.height)?eT+eH+20:eT-cf.height;		
	}
	else
	{
		cf.style.top=(document.body.clientHeight-(eT-sT)-eH>=cf.height)?eT+eH:eT-cf.height;		
	}
	cf.style.left=(document.body.clientWidth-(eL-sL)>=cf.width)?eL:eL+eW-cf.width;
	cf.style.display="block";
	
	wcf.openbound=bOpenBound;
	wcf.fld1=fld1;
	wcf.fld2=fld2;
	wcf.callback=sCallback;
	wcf.initCalendar();
}
function hideCalendar()
{
	var cf=document.getElementById("CalFrame");
	cf.style.display="none";
}