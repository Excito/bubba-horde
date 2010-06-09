ALTER TABLE horde_signups DROP COLUMN signup_email;

ALTER TABLE mnemo_shares_groups CHANGE group_uid group_uid VARCHAR(255);
