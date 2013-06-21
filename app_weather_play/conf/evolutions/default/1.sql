# --- Created by Ebean DDL
# To stop Ebean DDL generation, remove this comment and start using Evolutions

# --- !Ups

create table wetter_info (
  id                        varchar(255) not null,
  windstaerke               varchar(255),
  wdirection                varchar(255),
  luftdruck                 varchar(255),
  wellenhoehe               varchar(255),
  wavedirection             varchar(255),
  temperatur                varchar(255),
  wolken                    varchar(255),
  rain                      varchar(255),
  datetime                  varchar(255),
  constraint pk_wetter_info primary key (id))
;

create sequence wetter_info_seq;




# --- !Downs

SET REFERENTIAL_INTEGRITY FALSE;

drop table if exists wetter_info;

SET REFERENTIAL_INTEGRITY TRUE;

drop sequence if exists wetter_info_seq;

