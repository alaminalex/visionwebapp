
Runner.pages.PageSettings.addPageEvent("Files Done (by PDF)",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Back4';if(!pageObj.buttonEventBefore['Back4']){pageObj.buttonEventBefore['Back4']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['Back4']){pageObj.buttonEventAfter['Back4']=function(result,ctrl,pageObj,proxy,pageid,rowData){location.href=document.referrer;}}
$('a[id=Back4]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Back4"+"_"+Runner.genId();var button_Back4=new Runner.form.Button({id:this.id,btnName:"Back4"});button_Back4.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("Files Done (by PDF)",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){$(document).ready(function(){$("tr[id^=gridRow]").filter(':has(:checkbox:checked)').addClass('selected').end().click(function(event){if(event.target.type!=='checkbox'){$(':checkbox',this).trigger('click');}}).find(':checkbox').click(function(event){$(this).parents('tr:first').toggleClass('selected');});});$(":checkbox").change(function(){$(this).closest("tr").find("td").toggleClass("checkedHighlight",this.checked);});$("#chooseAll_1").change(function(){$('#chooseAll_1').closest("table").find("tr").find("td").toggleClass("checkedHighlight",this.checked);});});