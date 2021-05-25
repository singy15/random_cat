
-- album_entry
--* BackupToTempTable
drop table if exists album_entry ;

--* RestoreFromTempTable
create table album_entry (
  album_entry_id INTEGER not null AUTOINCREMENT
  , album_id INTEGER not null
  , post_id INTEGER not null
  , constraint album_entry_PKC primary key (album_entry_id)
) ;

-- album
--* BackupToTempTable
drop table if exists album ;

--* RestoreFromTempTable
create table album (
  album_id INTEGER not null AUTOINCREMENT
  , user_id INTEGER not null
  , constraint album_PKC primary key (album_id)
) ;

-- like
--* BackupToTempTable
drop table if exists like ;

--* RestoreFromTempTable
create table like (
  like_id INTEGER not null AUTOINCREMENT
  , user_id INTEGER not null
  , post_id INTEGER not null
  , constraint like_PKC primary key (like_id)
) ;

-- user
--* BackupToTempTable
drop table if exists user ;

--* RestoreFromTempTable
create table user (
  user_id INTEGER not null AUTOINCREMENT
  , login_id TEXT not null
  , password TEXT not null
  , email TEXT default '' not null
  , constraint user_PKC primary key (user_id)
) ;

-- post
--* BackupToTempTable
drop table if exists post ;

--* RestoreFromTempTable
create table post (
  post_id INTEGER not null AUTOINCREMENT
  , subject TEXT not null
  , description TEXT default '' not null
  , photo_path TEXT not null
  , author INTEGER not null
  , user_id INTEGER not null AUTOINCREMENT
  , constraint post_PKC primary key (post_id)
) ;

