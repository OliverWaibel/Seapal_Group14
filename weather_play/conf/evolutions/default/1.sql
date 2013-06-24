# --- Created by Ebean DDL
# To stop Ebean DDL generation, remove this comment and start using Evolutions

# --- !Ups

create table wetter_info (
  id                        integer auto_increment not null,
  windstaerke               varchar(255),
  windrichtung              varchar(255),
  luftdruck                 varchar(255),
  wellenhoehe               varchar(255),
  wellenrichtung            varchar(255),
  temperatur                varchar(255),
  wolken                    varchar(255),
  regen                     varchar(255),
  datumuhrzeit              varchar(255),
  constraint pk_wetter_info primary key (id))
;




# --- !Downs

SET FOREIGN_KEY_CHECKS=0;

drop table wetter_info;

SET FOREIGN_KEY_CHECKS=1;

