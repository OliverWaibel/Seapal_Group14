package models;

import java.sql.*;
import java.util.*;
import javax.sql.DataSource;
import play.db.*;

import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.Writer;

public class WetterInfos {
	public ArrayList<WetterInfo> info_list;
	
	private Connection con = null;
	private DataSource ds = null;
	private Boolean loaded = false;
	
	public WetterInfos() {
		info_list = new ArrayList<WetterInfo>();
	}
	
	public boolean add(WetterInfo wi) {
		return info_list.add(wi);
	}
	
	public ArrayList<WetterInfo> getList() {
		return info_list;
	}
	
	public void addAt(int i, WetterInfo wi) {
		info_list.add(i, wi);
	}
	
	public boolean delete(WetterInfo wi) {
		return info_list.remove(wi);
	}
	
	public int getSize() {
		return info_list.size();
	}
	
	public int getIndex(WetterInfo wi) {
		for (int i = 0; i < getSize(); i++) {
			if (get(i).id == wi.id) {
				return i;
			}
		}
		return -1;
	}
	
	public WetterInfo get(int i) {
		return info_list.get(i);
	}
	
	public WetterInfo gethighestID() {
		int ID = -1;
		int idx = -1;
		for (int i = 0; i < getSize(); i++) {
			if (get(i).id > ID) {
				ID = get(i).id;
				idx = i;
			}
		}
		return get(idx);
	}
	
	private void openDB() {
		ds = DB.getDataSource();
		con = DB.getConnection();
	}
	
	private void closeDB() {
		if (con != null) {
            try {
                con.close();
            } catch (Exception e) {
            }
        }
	}
	
	public boolean isConnected() {
        try {
            Statement st = con.createStatement();
        	ResultSet rs = st.executeQuery("SELECT 1;");
            if (rs == null) {
                return false;
            }
            if (rs.next()) {
                return true;
            }
            return false;
        } catch (Exception e) {
            return false;
        }
    }
	
	private void deleteAll() {
		info_list.clear();
	}
	
	public boolean loadDB() throws SQLException {
		deleteAll();
		openDB();
		if (isConnected()) {
			// Connected to DB
			Statement stmt = con.createStatement();
			String sql = "SELECT * FROM wetter_info";
			ResultSet rs = stmt.executeQuery(sql);
			while(rs.next()) {
				WetterInfo wi = new WetterInfo(rs.getInt("id"));
				add(wi);
				wi.windstaerke = rs.getString("windstaerke");
				wi.windrichtung = rs.getString("windrichtung");
				wi.luftdruck = rs.getString("luftdruck");
				wi.wellenhoehe = rs.getString("wellenhoehe");
				wi.wellenrichtung = rs.getString("wellenrichtung");
				wi.temperatur = rs.getString("temperatur");
				wi.wolken = rs.getString("wolken");
				wi.regen = rs.getString("regen");
				wi.datumuhrzeit = rs.getString("datumuhrzeit");
			}
		}
		closeDB();
		loaded = true;

		return true;
	}
	
	public Boolean deleteFromDB(WetterInfo wi) throws SQLException {
		openDB();
		Statement stmt = con.createStatement();
		String sql = "DELETE FROM wetter_info"
					 + " WHERE datumuhrzeit = " + wi.datumuhrzeit;
		int rs = stmt.executeUpdate(sql);
		delete(wi);
		closeDB();
		return true;
	}
	
	public WetterInfo addWetterInfo(Map<String, String[]> m) throws SQLException {
		openDB();
		Statement stmt = con.createStatement();
		String sql = "SELECT id FROM wetter_info WHERE datumuhrzeit = " + m.get("datumuhrzeit")[0];
		ResultSet rs = stmt.executeQuery(sql);
		rs.last();
		if (rs.getRow() != 0) {
			sql = "UPDATE wetter_info"
				 + " SET "
				 + "windstaerke = \"" + m.get("windstaerke")[0] + "\""
				 + ", windrichtung = \"" + m.get("windrichtung")[0] + "\""
				 + ", luftdruck = \"" + m.get("luftdruck")[0] + "\""
				 + ", wellenhoehe = \"" + m.get("wellenhoehe")[0] + "\""
				 + ", wellenrichtung =\" " + m.get("wellenrichtung")[0] + "\""
				 + ", temperatur = \"" + m.get("temperatur")[0] + "\""
				 + ", wolken = \"" + m.get("wolken")[0] + "\""
				 + ", regen = \"" + m.get("regen")[0] + "\""
				 + " WHERE datumuhrzeit = " + m.get("datumuhrzeit")[0];
		} else {
			sql = "INSERT INTO wetter_info (windstaerke, windrichtung, luftdruck, wellenhoehe, " +
					"wellenrichtung, temperatur, wolken, regen, datumuhrzeit) VALUES (\""
				 + m.get("windstaerke")[0] + "\",\""
				 + m.get("windrichtung")[0] + "\",\""
				 + m.get("luftdruck")[0] + "\",\""
				 + m.get("wellenhoehe")[0] + "\",\""
				 + m.get("wellenrichtung")[0] + "\",\""
				 + m.get("temperatur")[0] + "\",\""
				 + m.get("wolken")[0] + "\",\""
				 + m.get("regen")[0] + "\",\""
				 + m.get("datumuhrzeit")[0] + "\")";
		}
		
		int rows = stmt.executeUpdate(sql);
		closeDB();
		
		loadDB();
		return gethighestID();
	}
}