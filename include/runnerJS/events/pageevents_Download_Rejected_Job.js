
Runner.pages.PageSettings.addPageEvent("Download Rejected Job",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button12';if(!pageObj.buttonEventBefore['New_Button12']){pageObj.buttonEventBefore['New_Button12']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['New_Button12']){pageObj.buttonEventAfter['New_Button12']=function(result,ctrl,pageObj,proxy,pageid,rowData){var close_confirm=confirm("Are you Sure to CLOSE the DOWNLOAD PAGE? \nWARNING! All Pending Download Request will be lost!");if(close_confirm==true){window.close();}}}
$('a[id=New_Button12]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="New_Button12"+"_"+Runner.genId();var button_New_Button12=new Runner.form.Button({id:this.id,btnName:"New_Button12"});button_New_Button12.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("Download Rejected Job",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='New_Button111';if(!pageObj.buttonEventBefore['New_Button111']){pageObj.buttonEventBefore['New_Button111']=function(params,ctrl,pageObj,proxy,pageid,rowData){}}
if(!pageObj.buttonEventAfter['New_Button111']){pageObj.buttonEventAfter['New_Button111']=function(result,ctrl,pageObj,proxy,pageid,rowData){var close_confirm=confirm("Are you Sure to CLOSE the DOWNLOAD PAGE? \nWARNING! All Pending Download Request will be lost!");if(close_confirm==true){window.close();}}}
$('a[id=New_Button111]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="New_Button111"+"_"+Runner.genId();var button_New_Button111=new Runner.form.Button({id:this.id,btnName:"New_Button111"});button_New_Button111.init({args:[pageObj,proxy,pageid]});});});