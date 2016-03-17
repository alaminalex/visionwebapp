<?php 
class eventclass_Display  extends eventsBase
{ 
	function eventclass_Display()
	{
	// fill list of events

		$this->events["BeforeProcessDashboard"]=true;


//	onscreen events

	}

//	handlers

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		

		
		
		
		
		
		
		
		
		
		
				// Dashboard page: Before process
function BeforeProcessDashboard(&$pageObject)
{

		//**********  Insert a record into another table  ************

$sql = "TRUNCATE designer_report";
CustomQuery($sql);

//update jobfile status to need upload
$sql_clean1 = "
UPDATE 
	jobfile
	LEFT JOIN job ON jobfile.job_id = job.job_id 
SET 
	jobfile.jobfile_status_id = 7 
WHERE 
	job.jobstatus_id = 9 
	AND jobfile.jobfile_status_id != 7
	AND jobfile.jobfile_status_id != 11
";
CustomQuery($sql_clean1);

//delete files with no job ID
$sql_clean2 = "
DELETE jobfile
FROM jobfile
LEFT JOIN job ON jobfile.job_id = job.job_id
WHERE job.job_id IS NULL
";
CustomQuery($sql_clean2);

//DELETED JOB NEED TO QC MISMATCH FIX
$sql_clean3 = "
UPDATE `jobfile` 
INNER JOIN job ON job.job_id = jobfile.job_id
AND `jobfile_status_id` = 14
AND job.jobstatus_id = 12
SET jobfile.jobfile_status_id = 7
";
CustomQuery($sql_clean3);

//DELETED JOB DOWNLAODED FILE MISMATCH FIX
$sql_clean4 = "
UPDATE `jobfile`
INNER JOIN job ON job.job_id = jobfile.job_id
AND job.jobstatus_id = 12
SET jobfile.jobfile_status_id = 7
";
CustomQuery($sql_clean4);

//**********  Insert a record into another table  ************

$sql_designer_report = "

INSERT INTO designer_report (
		report_id,
		work_date,
		designer_name,
		team_id,
		subdiv_id,
		user_group,
		pdf_name,
		estimated_time,
		designer_time,
		qc_time,
		efficiency,
		total_images_counted,
		work_type
)

SELECT
IFNULL((CONCAT(DATE((TIMESTAMPADD(MINUTE,165,`end2_date`))),'-',user.user_id,pdf.pdf_id,'1')),1) AS report_id,
SUBSTRING((TIMESTAMPADD(MINUTE,165,`end2_date`)), 1, 10) as start_date_only,
user.user_id as designer_name,
user.team,
user.subdiv_id,
user.group_id,
pdf.pdf_id as pdf_name,
IFNULL(SUM(TIME_TO_SEC(IF(jobfile.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))),0) as total_estimated_time,
IFNULL(SUM(TIME_TO_SEC(IF(jobfile.designer2_time<5,pdf.pdf_estimated_average,jobfile.designer2_time))), 0 ) as total_designer_time,
NULL as qc_time,
IFNULL((SUM(TIME_TO_SEC(IF(jobfile.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(jobfile.designer2_time<5,IF(jobfile.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),jobfile.designer2_time))), 0) as efficiency,
COUNT(*),
'1' as work_type

FROM jobfile
LEFT JOIN user ON user.user_id = jobfile.designer2_id
LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id
WHERE jobfile.designer2_id IS NOT NULL AND (TIMESTAMPADD(MINUTE,165,jobfile.`end2_date`)) > '0000-00-00 00:00:00' AND (jobfile.filename not like '%retouch%') AND TIME_TO_SEC(jobfile.designer2_time) > '1'
GROUP BY start_date_only,designer_name,pdf_name 
ORDER BY start_date_only, designer2_id
ON DUPLICATE KEY UPDATE `report_id`=`report_id`

";
CustomQuery($sql_designer_report);



//**********  Insert a record into another table  ************

$sql_qc_report = "

INSERT INTO designer_report (
		report_id,
		work_date,
		designer_name,
		team_id,
		subdiv_id,
		user_group,
		pdf_name,
		estimated_time,
		designer_time,
		qc_time,
		efficiency,
		total_images_counted,
		work_type
)

SELECT
IFNULL((CONCAT(DATE((TIMESTAMPADD(MINUTE,165,`qcend_date`))),'-',user.user_id,pdf.pdf_id,'2')),1) AS report_id,
SUBSTRING((TIMESTAMPADD(MINUTE,165,`qcend_date`)), 1, 10) as start_date_only,
user.user_id as designer_name,
user.team,
user.subdiv_id,
user.group_id,
pdf.pdf_id as pdf_name,
NULL as total_estimated_time,
NULL as total_designer_time,
IFNULL(SUM(TIME_TO_SEC(IF(qc_time<30,'00:02:00',qc_time))), 0 ) as qc_time,
IFNULL((SUM(TIME_TO_SEC('00:01:00')) * 100) / SUM(TIME_TO_SEC((IF(qc_time<30,'00:01:00',qc_time)))), 0) as efficiency,
COUNT(*),
'2' as work_type

FROM jobfile
LEFT JOIN user ON user.user_id = jobfile.qc_id
LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id
WHERE qc_id IS NOT NULL AND qc_time IS NOT NULL
GROUP BY start_date_only,designer_name,pdf_name 
ORDER BY start_date_only, qc_id

ON DUPLICATE KEY UPDATE report_id=report_id
";
CustomQuery($sql_qc_report);



//**********  Insert a record into another table  ************
//rejection_new
$sql_internal_rejection = "

INSERT INTO designer_report (
		report_id,
		work_date,
		designer_name,
		team_id,
		subdiv_id,
		user_group,
		pdf_name,
		estimated_time,
		designer_time,
		qc_time,
		efficiency,
		total_images_counted,
		work_type
)


SELECT
IFNULL((CONCAT(DATE((TIMESTAMPADD(MINUTE,165,`end2_date`))),'-',user.user_id,pdf.pdf_id,'3')),1) AS report_id,
SUBSTRING((TIMESTAMPADD(MINUTE,165,`end2_date`)), 1, 10) as start_date_only,
user.user_id as designer_name,
user.team,
user.subdiv_id,
user.group_id,
pdf.pdf_id as pdf_name,
IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))),0) as total_estimated_time,
IFNULL(SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<5,pdf.pdf_estimated_average,rejected_jobfile2.designer2_time))), 0 ) as total_designer_time,
NULL as qc_time,
IFNULL((SUM(TIME_TO_SEC(IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average))) * 100) / SUM(TIME_TO_SEC(IF(rejected_jobfile2.designer2_time<10,IF(rejected_jobfile2.jobfile_type=2,(pdf.pdf_estimated_average/3.5), pdf.pdf_estimated_average),rejected_jobfile2.designer2_time))), 0) as efficiency,
COUNT(*),
'3' as work_type

FROM rejected_jobfile2
LEFT JOIN user ON user.user_id = rejected_jobfile2.designer2_id
LEFT JOIN pdf ON pdf.pdf_id = rejected_jobfile2.project_id
WHERE rejected_jobfile2.designer2_id IS NOT NULL AND (TIMESTAMPADD(MINUTE,165,rejected_jobfile2.`end2_date`)) > '0000-00-00 00:00:00' AND (rejected_jobfile2.filename not like '%retouch%') AND TIME_TO_SEC(rejected_jobfile2.designer2_time) > '1'
GROUP BY start_date_only,designer_name,pdf_name 
ORDER BY start_date_only, designer2_id

ON DUPLICATE KEY UPDATE `report_id`=`report_id`
";
CustomQuery($sql_internal_rejection);
//Rejection_new//

//External_rejection_old
$sql_external_rejection = "

INSERT INTO designer_report (
		report_id,
		work_date,
		designer_name,
		team_id,
		subdiv_id,
		user_group,
		pdf_name,
		estimated_time,
		designer_time,
		qc_time,
		efficiency,
		total_images_counted,
		work_type
)

SELECT
IFNULL((CONCAT(DATE((TIMESTAMPADD(MINUTE,165,`qcend_date`))),'-',user.user_id,pdf.pdf_id,'2')),1) AS report_id,
SUBSTRING((TIMESTAMPADD(MINUTE,165,`qcend_date`)), 1, 10) as start_date_only,
user.user_id as designer_name,
user.team,
user.subdiv_id,
user.group_id,
pdf.pdf_id as pdf_name,
NULL as total_estimated_time,
NULL as total_designer_time,
IFNULL(SUM(TIME_TO_SEC(IF(qc_time<1,'00:02:00',qc_time))), 0 ) as qc_time,
IFNULL((SUM(TIME_TO_SEC('00:01:00')) * 100) / SUM(TIME_TO_SEC((IF(qc_time<30,'00:01:00',qc_time)))), 0) as efficiency,
COUNT(*),
'2' as work_type

FROM jobfile
LEFT JOIN user ON user.user_id = jobfile.qc_id
LEFT JOIN pdf ON pdf.pdf_id = jobfile.project_id
WHERE qc_id IS NOT NULL AND qc_time IS NOT NULL AND jobfile_status_id=11
GROUP BY start_date_only,designer_name,pdf_name 
ORDER BY start_date_only, qc_id

ON DUPLICATE KEY UPDATE `report_id`=`report_id`
";
CustomQuery($sql_external_rejection);
//Rejection_old//


//******** Correction ********//
/*
$sql_correction = "

INSERT INTO designer_report (
		report_id,
		work_date,
		designer_name,
		team_id,
		subdiv_id,
		user_group,
		pdf_name,
		estimated_time,
		designer_time,
		qc_time,
		efficiency,
		total_images_counted,
		work_type
)

SELECT
IFNULL((CONCAT(DATE((TIMESTAMPADD(MINUTE,165,`cr_end_date`))),'-',user.user_id,pdf.pdf_id,'2')),1) AS report_id,
SUBSTRING((TIMESTAMPADD(MINUTE,165,`cr_end_date`)), 1, 10) as start_date_only,
user.user_id as designer_name,
user.team,
user.subdiv_id,
user.group_id,
pdf.pdf_id as pdf_name,
IFNULL(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)),0) as total_estimated_time,
IFNULL(SUM(TIME_TO_SEC(IF(cr_designer_time<5,pdf.pdf_estimated_average,cr_designer_time))), 0 ) as total_designer_time,
NULL as qc_time,
IFNULL((SUM(TIME_TO_SEC(pdf.pdf_estimated_average)) * 100) / SUM(TIME_TO_SEC(IF(cr_designer_time<5,pdf.pdf_estimated_average,cr_designer_time))), 0) as efficiency,
COUNT(*),
'3' as work_type

FROM rejected_jobfile
LEFT JOIN user ON user.user_id = rejected_jobfile.cr_designer_id
LEFT JOIN pdf ON pdf.pdf_id = rejected_jobfile.pdf_id
WHERE cr_designer_id IS NOT NULL AND cr_designer_time IS NOT NULL
GROUP BY start_date_only,designer_name,pdf_name 
ORDER BY start_date_only, cr_designer_id

ON DUPLICATE KEY UPDATE report_id=report_id
";
CustomQuery($sql_correction);
*/
/*
$sql_correction = "

INSERT INTO designer_report (
		report_id,
		work_date,
		designer_name,
		team_id,
		subdiv_id,
		user_group,
		pdf_name,
		estimated_time,
		designer_time,
		qc_time,
		efficiency,
		total_images_counted,
		work_type
)

SELECT
IFNULL((CONCAT(DATE((TIMESTAMPADD(MINUTE,165,`cr_end_date`))),'-',user.user_id,pdf.pdf_id,'2')),1) AS report_id,
SUBSTRING((TIMESTAMPADD(MINUTE,165,`cr_end_date`)), 1, 10) as start_date_only,
user.user_id as designer_name,
user.team,
user.subdiv_id,
user.group_id,
pdf.pdf_id as pdf_name,
IFNULL(SUM(TIME_TO_SEC(pdf.pdf_estimated_average)),0) as total_estimated_time,
IFNULL(SUM(TIME_TO_SEC(IF(cr_designer_time<5,pdf.pdf_estimated_average,cr_designer_time))), 0 ) as total_designer_time,
IFNULL(SUM(TIME_TO_SEC(IF(cr_qc_time<5,'00:15:00',cr_qc_time))), 0 ) as qc_time,
IFNULL((SUM(TIME_TO_SEC(pdf.pdf_estimated_average)) * 100) / SUM(TIME_TO_SEC(IF(cr_designer_time<5,pdf.pdf_estimated_average,cr_designer_time))), 0) as efficiency,
COUNT(*),
'3' as work_type

FROM rejected_jobfile
LEFT JOIN user ON user.user_id = rejected_jobfile.cr_designer_id
LEFT JOIN pdf ON pdf.pdf_id = rejected_jobfile.pdf_id
WHERE cr_designer_id IS NOT NULL AND cr_designer_time IS NOT NULL
GROUP BY start_date_only,designer_name,pdf_name 
ORDER BY start_date_only, cr_designer_id

ON DUPLICATE KEY UPDATE report_id=report_id
";
CustomQuery($sql_correction);
*/

// Place event code here.
// Use 
;		
} // function BeforeProcessDashboard

		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
								
		
		
			
		
		
		
		
//	onscreen events

} 
?>
