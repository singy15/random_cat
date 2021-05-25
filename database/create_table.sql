-- Project Name : random_cat
-- Date/Time    : 2021/05/25 11:55:56
-- Author       : kedama
-- RDBMS Type   : PostgreSQL
-- Application  : A5:SQL Mk-2

/*
  BackupToTempTable, RestoreFromTempTable疑似命令が付加されています。
  これにより、drop table, create table 後もデータが残ります。
  この機能は一時的に $$TableName のような一時テーブルを作成します。
*/

-- album_entry
--* BackupToTempTable
drop table if exists album_entry cascade;

--* RestoreFromTempTable
create table album_entry (
  album_entry_id INTEGER not null AUTOINCREMENT
  , album_id INTEGER not null
  , post_id INTEGER not null
  , constraint album_entry_PKC primary key (album_entry_id)
) ;

-- album
--* BackupToTempTable
drop table if exists album cascade;

--* RestoreFromTempTable
create table album (
  album_id INTEGER not null AUTOINCREMENT
  , user_id INTEGER not null
  , constraint album_PKC primary key (album_id)
) ;

-- like
--* BackupToTempTable
drop table if exists like cascade;

--* RestoreFromTempTable
create table like (
  like_id INTEGER not null AUTOINCREMENT
  , user_id INTEGER not null
  , post_id INTEGER not null
  , constraint like_PKC primary key (like_id)
) ;

-- user
--* BackupToTempTable
drop table if exists user cascade;

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
drop table if exists post cascade;

--* RestoreFromTempTable
create table post (
  post_id INTEGER not null AUTOINCREMENT
  , subject TEXT not null
  , comment TEXT default '' not null
  , pthoto_path TEXT not null
  , author INTEGER not null
  , user_id INTEGER not null AUTOINCREMENT
  , constraint post_PKC primary key (post_id)
) ;

comment on table album_entry is 'album_entry';
comment on column album_entry.album_entry_id is 'album_entry_id';
comment on column album_entry.album_id is 'album_id';
comment on column album_entry.post_id is 'post_id';

comment on table album is 'album';
comment on column album.album_id is 'album_id';
comment on column album.user_id is 'user_id';

comment on table like is 'like';
comment on column like.like_id is 'like_id';
comment on column like.user_id is 'user_id';
comment on column like.post_id is 'post_id';

comment on table user is 'user';
comment on column user.user_id is 'user_id';
comment on column user.login_id is 'login_id';
comment on column user.password is 'password';
comment on column user.email is 'email';

comment on table post is 'post';
comment on column post.post_id is 'post_id';
comment on column post.subject is 'subject';
comment on column post.comment is 'comment';
comment on column post.pthoto_path is 'pthoto_path';
comment on column post.author is 'author';
comment on column post.user_id is 'user_id';

