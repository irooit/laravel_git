select * from
(select
t1.data as timeid,
t2.type as timeType, t2.weekday as weekday,t2.`start`,t2.end,
t3.reid,t3.userid as userid
from
ims_rooit_class_data as t1
LEFT JOIN
ims_rooit_class_timelist as t2
on t1.data = t2.timeid
LEFT JOIN
ims_rooit_class_records as t3
on t1.reid = t3.reid
WHERE
t1.type = 'timerange'
ORDER BY
timeType asc,
FIELD(t2.weekday,'Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday'),
t2.`start`) as t_res1
left join (

SELECT
	reid,
	SUBSTRING_INDEX( newdata, ',', 1 ) AS f1,
	SUBSTRING_INDEX(
		SUBSTRING_INDEX( newdata, ',', 2 ),
		',',- 1
	) AS f2,
	SUBSTRING_INDEX(
		SUBSTRING_INDEX( newdata, ',', 3 ),
		',',- 1
	) AS f3
FROM
	(
	SELECT
		formid,
		reid,
		GROUP_CONCAT( DATA ) AS newdata
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
	) AS t_join2

	) as t_res2
	on t_res1.reid = t_res2.reid
