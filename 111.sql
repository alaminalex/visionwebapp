SELECT 
	jobfile.end2_date, 
	`user`.team, 
	jobfile.designer2_id, 
	jobfile.project_id, 
	COUNT(*) AS files, 
	pdf.pdf_estimated_average,
    SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time))) AS taken_time_total,
    SEC_TO_TIME(SUM(TIME_TO_SEC(jobfile.designer2_time)) + SUM(TIME_TO_SEC(jobfile.qc_time))) As with_qc_time
FROM 
	jobfile 
	LEFT OUTER JOIN `user` ON jobfile.designer2_id = `user`.user_id 
	LEFT OUTER JOIN pdf ON jobfile.project_id = pdf.pdf_id 
WHERE 
	jobfile.designer2_id IS NOT NULL 
	AND jobfile.end2_date > '0000-00-00 00:00:00' 
	AND (
		jobfile.filename not like '%retouch%' 
		AND (
			jobfile.filename not like '%detail_2%'
		)
	) 
	AND TIME_TO_SEC(jobfile.designer2_time) > '60' 
GROUP BY 
	MONTH(jobfile.end2_date), 
	`user`.team, 
	jobfile.designer2_id, 
	jobfile.project_id 
ORDER BY 
	jobfile.end2_date DESC, 
	`user`.team, 
	jobfile.designer2_id DESC