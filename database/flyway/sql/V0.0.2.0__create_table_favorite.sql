-- favorite
--* BackupToTempTable
drop table if exists favorite;

--* RestoreFromTempTable
create table favorite (
  favorite_id INTEGER not null AUTOINCREMENT
  , user_id INTEGER not null
  , post_id INTEGER not null
  , constraint favorite_PKC primary key (favorite_id)
) ;

