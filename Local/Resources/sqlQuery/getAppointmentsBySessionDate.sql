SELECT tbl_patients.patient_id, tbl_patients.first_name, tbl_patients.last_name, tbl_sessions.date,tbl_appointments.time FROM tbl_appointments 
LEFT JOIN tbl_patients ON tbl_appointments.patient_id = tbl_patients.patient_id
RIGHT JOIN tbl_sessions ON tbl_appointments.session_id = tbl_sessions.session_id
WHERE tbl_sessions.date = '2015-11-19';

