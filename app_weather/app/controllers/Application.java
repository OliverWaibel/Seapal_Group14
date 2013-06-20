package controllers;

import models.WetterInfo;
import play.*;
import play.data.Form;
import play.db.ebean.Model;
import play.mvc.*;
import views.html.*;
import java.util.List;
import static play.libs.Json.toJson;


public class Application extends Controller {
  
    public static Result index() {
        return ok(index.render("Your new application ist ready."));
    }

    public static Result addWetterInfo() {
        WetterInfo info = Form.form(WetterInfo.class).bindFromRequest().get();
        info.save();
        return redirect(routes.Application.index());
    }

    public static Result getWetterInfo() {
        List<WetterInfo> infos = new Model.Finder(String.class, WetterInfo.class).all();
        return ok(toJson(infos));
    }
  
}