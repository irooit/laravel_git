SELECT
  formid,
	reid,
	DATA,
	GROUP_CONCAT( DATA, '|' ) AS newdata
FROM
	(
SELECT
	t_data.reid AS reid,
	t_data.`data`,
	t_data.type,
	t_field.title AS title,
	t_field.formid AS formid
FROM
	ims_rooit_class_data AS t_data
	LEFT JOIN ims_rooit_class_fields AS t_field ON t_data.fieldid = t_field.fieldid
WHERE
	t_field.type != 'timerange'
	) AS t_join
GROUP BY
	reid
