package models;

import play.db.ebean.Model;

import javax.persistence.Entity;
import javax.persistence.Id;

@Entity
public class WetterInfo extends Model {

    @Id
    public int id;

    public String windstaerke;
    public String windrichtung;
    public String luftdruck;
    public String wellenhoehe;
    public String wellenrichtung;
    public String temperatur;
    public String wolken;
    public String regen;
    public String datumuhrzeit;
    
    public WetterInfo() {}
    
    public WetterInfo(int id) {
    	this.id = id;
    }
}