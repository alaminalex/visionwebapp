
Runner.pages.PageSettings.addPageEvent("Urgent Jobs",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Action1_label92';if(!pageObj.buttonEventBefore['Action1_label92']){pageObj.buttonEventBefore['Action1_label92']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Action1_label92']){pageObj.buttonEventAfter['Action1_label92']=function(result,ctrl,pageObj,proxy,pageid,rowData){work_id=result.record["work_id"];job_id=result.record["job_id"];jobstatus_id=result.record["jobstatus_id"];my_server_share=result["my_server_share"];if(jobstatus_id==12)
{location.href="/"+my_server_share+"/download_job_list.php?work_id="+work_id+"&job_id="+job_id;}
else if(jobstatus_id==9)
location.href="/"+my_server_share+"/delete_job_list.php?work_id="+work_id+"&job_id="+job_id;else if(jobstatus_id==1)
location.href="/"+my_server_share+"/Pending_Jobs_list.php";else if(jobstatus_id!=0||jobstatus_id!=1||jobstatus_id!=9||jobstatus_id!=12)
{var a=document.createElement('a');a.href="/"+my_server_share+"/download_job_list.php?work_id="+work_id+"&job_id="+job_id;a.target='_blank';document.body.appendChild(a);a.click();location.href="/"+my_server_share+"/Pending_Jobs_list.php";}
else
{location.href="/"+my_server_share+"/download_job_list.php?work_id="+work_id+"&job_id="+job_id;}}}
$('a[id=Action1_label92]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Action1_label92"+"_"+Runner.genId();var button_Action1_label92=new Runner.form.Button({id:this.id,btnName:"Action1_label92"});button_Action1_label92.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("Urgent Jobs",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid){pageObj.buttonNames[pageObj.buttonNames.length]='Action2_label92';if(!pageObj.buttonEventBefore['Action2_label92']){pageObj.buttonEventBefore['Action2_label92']=function(params,ctrl,pageObj,proxy,pageid,rowData){params["txt"]="Hello";ctrl.setMessage("Sending request to server...");}}
if(!pageObj.buttonEventAfter['Action2_label92']){pageObj.buttonEventAfter['Action2_label92']=function(result,ctrl,pageObj,proxy,pageid,rowData){work_id=result.record["work_id"];job_id=result.record["job_id"];my_server_share=result["my_server_share"];location.href="/"+my_server_share+"/file_distribution_list.php?q=(jobfile_status_id~equals~3)(work_id~equals~"+work_id+")(job_id~equals~"+job_id+")";}}
$('a[id=Action2_label92]').each(function(){if($(this).closest('tr.gridRowAdd').length){return;}
this.id="Action2_label92"+"_"+Runner.genId();var button_Action2_label92=new Runner.form.Button({id:this.id,btnName:"Action2_label92"});button_Action2_label92.init({args:[pageObj,proxy,pageid]});});});Runner.pages.PageSettings.addPageEvent("Urgent Jobs",Runner.pages.constants.PAGE_EDIT,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlComplexity1=Runner.getControl(pageid,'complexity1');var ctrlComplexity2=Runner.getControl(pageid,'complexity2');var ctrlComplexity3=Runner.getControl(pageid,'complexity3');var ctrlComplexity4=Runner.getControl(pageid,'complexity4');var ctrlComplexity5=Runner.getControl(pageid,'complexity5');var ctrlCustomComplexity=Runner.getControl(pageid,'custom_complexity');var ctrlTotal=Runner.getControl(pageid,'total_images');var ctrlDelivery_date=Runner.getControl(pageid,'delivery_date');var ctrlDelivery_duration=Runner.getControl(pageid,'delivery_duration');var ctrlReviewer_id=Runner.getControl(pageid,'reviewer_id');var ctrlDelivery_date=Runner.getControl(pageid,'delivery_date');var ctrlAccepted_date=Runner.getControl(pageid,'accepted_date');ctrlReviewer_id.setDisabled();function func(){ctrlTotal.setValue(Number(ctrlComplexity1.getValue())
+Number(ctrlComplexity2.getValue())
+Number(ctrlComplexity3.getValue())
+Number(ctrlComplexity4.getValue())
+Number(ctrlComplexity5.getValue())
+Number(ctrlCustomComplexity.getValue()));};ctrlComplexity1.on('keyup',func);ctrlComplexity2.on('keyup',func);ctrlComplexity3.on('keyup',func);ctrlComplexity4.on('keyup',func);ctrlComplexity5.on('keyup',func);ctrlCustomComplexity.on('keyup',func);Date.prototype.addHours=function(h){this.setHours(this.getHours()+h);return this;}
function delivery_duration_add(){var newDate=new Date();var add_time=ctrlDelivery_duration.getValue()*60*60*1000;newDate.setMilliseconds(add_time);var dateString=newDate.getFullYear()+"-";dateString+=(('0'+(newDate.getMonth()+1)).slice(-2))+"-";dateString+=('0'+newDate.getDate()).slice(-2);dateString+=" "+('0'+newDate.getHours()).slice(-2)+":"+('0'+newDate.getMinutes()).slice(-2)+":"+('0'+newDate.getSeconds()).slice(-2);ctrlDelivery_date.setValue(dateString);};func();});Runner.pages.PageSettings.addPageEvent("Urgent Jobs",Runner.pages.constants.PAGE_ADD,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){var ctrlComplexity1=Runner.getControl(pageid,'complexity1');var ctrlComplexity2=Runner.getControl(pageid,'complexity2');var ctrlComplexity3=Runner.getControl(pageid,'complexity3');var ctrlComplexity4=Runner.getControl(pageid,'complexity4');var ctrlComplexity5=Runner.getControl(pageid,'complexity5');var ctrlCustomComplexity=Runner.getControl(pageid,'custom_complexity');var ctrlTotal=Runner.getControl(pageid,'total_images');var ctrlDelivery_date=Runner.getControl(pageid,'delivery_date');var ctrlDelivery_duration=Runner.getControl(pageid,'delivery_duration');var ctrlReviewer_id=Runner.getControl(pageid,'reviewer_id');var ctrlDelivery_date=Runner.getControl(pageid,'delivery_date');ctrlReviewer_id.setDisabled();ctrlDelivery_date.setDisabled();var ctrlWork_id=Runner.getControl(pageid,'work_id');var ctrlJob_id=Runner.getControl(pageid,'job_id');function func(){ctrlWork_id.setValue(ctrlJob_id.getValue());ctrlTotal.setValue(Number(ctrlComplexity1.getValue())
+Number(ctrlComplexity2.getValue())
+Number(ctrlComplexity3.getValue())
+Number(ctrlComplexity4.getValue())
+Number(ctrlComplexity5.getValue())
+Number(ctrlCustomComplexity.getValue()));};ctrlComplexity1.on('keyup',func);ctrlComplexity2.on('keyup',func);ctrlComplexity3.on('keyup',func);ctrlComplexity4.on('keyup',func);ctrlComplexity5.on('keyup',func);ctrlCustomComplexity.on('keyup',func);ctrlJob_id.on('keyup',func);Date.prototype.addHours=function(h){this.setHours(this.getHours()+h);return this;}
function delivery_duration_add(){var newDate=new Date();var add_time=ctrlDelivery_duration.getValue()*60*60*1000;newDate.setMilliseconds(add_time);var dateString=('0'+newDate.getDate()).slice(-2)+"-";dateString+=(('0'+(newDate.getMonth()+1)).slice(-2))+"-";dateString+=newDate.getFullYear();dateString+=" "+('0'+newDate.getHours()).slice(-2)+":"+('0'+newDate.getMinutes()).slice(-2)+":"+('0'+newDate.getSeconds()).slice(-2);ctrlDelivery_date.setValue(dateString);};func();ctrlDelivery_duration.on('change',delivery_duration_add);});Runner.pages.PageSettings.addPageEvent("Urgent Jobs",Runner.pages.constants.PAGE_LIST,"afterPageReady",function(pageObj,proxy,pageid,inlineRow,inlineObject){$(document).ready(function(){$("tr[id^=gridRow]").filter(':has(:checkbox:checked)').addClass('selected').end().click(function(event){if(event.target.type!=='checkbox'){$(':checkbox',this).trigger('click');}}).find(':checkbox').click(function(event){$(this).parents('tr:first').toggleClass('selected');});});$(":checkbox").change(function(){$(this).closest("tr").find("td").toggleClass("checkedHighlight",this.checked);});$("#chooseAll_1").change(function(){$('#chooseAll_1').closest("table").find("tr").find("td").toggleClass("checkedHighlight",this.checked);});});