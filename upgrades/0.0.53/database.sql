ALTER TABLE kronolith_shares CHANGE share_owner share_owner VARCHAR(255);
ALTER TABLE kronolith_shares_users CHANGE user_uid user_uid VARCHAR(255);
ALTER TABLE kronolith_shares_groups CHANGE group_uid group_uid VARCHAR(255);

ALTER TABLE mnemo_shares CHANGE share_owner share_owner VARCHAR(255);
ALTER TABLE mnemo_shares_users CHANGE user_uid user_uid VARCHAR(255);

ALTER TABLE turba_shares CHANGE share_owner share_owner VARCHAR(255);
ALTER TABLE turba_shares_users CHANGE user_uid user_uid VARCHAR(255);
ALTER TABLE turba_shares_groups CHANGE group_uid group_uid VARCHAR(255);
