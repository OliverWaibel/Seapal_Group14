package controllers;

import java.sql.SQLException;
import java.util.Map;

import models.WetterInfo;
import models.WetterInfos;
import play.*;
import play.data.Form;
import play.db.ebean.Model;
import play.mvc.*;
import views.html.*;
import java.util.List;
import play.libs.Json;


public class Application extends Controller {
	
	private static WetterInfos infos = new WetterInfos();
  
	public static Result index() {
        return ok();
    }
	
	public static Result wetterInfo() {
		try {
			infos.loadDB();
		} catch (SQLException e) {
			e.printStackTrace();
		}
		return ok(index.render(infos));
	}

    public static Result addWetterInfo() {
    	Map<String, String[]> parameters = request().body().asFormUrlEncoded();
		WetterInfo wi;
		try {
			wi = infos.addWetterInfo(parameters);
		} catch (SQLException e) {
			e.printStackTrace();
			return ok(e.toString());
		}
		return ok("Ein Eintrag hinzugefügt/geupdatet");
	}

    public static Result getWetterInfo() {
    	Map<String, String[]> queryParameters = request().queryString();
		String s = queryParameters.get("id")[0];
		int idx = Integer.parseInt(s);
		WetterInfo wi = infos.get(idx);
		return ok(Json.toJson(wi));
    }
    
    public static Result deleteWetterInfo() {
		Map<String, String[]> parameters =  request().queryString();
		String s = parameters.get("id")[0];
		int idx = Integer.parseInt(s);
		WetterInfo wi = infos.get(idx);
		try {
			infos.deleteFromDB(wi);
		} catch (SQLException e) {
			e.printStackTrace();
			return ok(e.toString());
		}
		return ok(s);
	}
  
}