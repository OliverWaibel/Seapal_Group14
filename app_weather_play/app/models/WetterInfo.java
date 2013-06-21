package models;

import play.db.ebean.Model;

import javax.persistence.Entity;
import javax.persistence.Id;

@Entity
public class WetterInfo extends Model {

    @Id
    public String id;

    public String windstaerke;
    public String wdirection;
    public String luftdruck;
    public String wellenhoehe;
    public String wavedirection;
    public String temperatur;
    public String wolken;
    public String rain;
    public String datetime;
}