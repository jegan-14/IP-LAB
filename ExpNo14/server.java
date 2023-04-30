package weServicesPackage;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javax.jws.WebService;
import javax.jws.WebMethod;
import javax.jws.WebParam;

/**
 *
 * @author Administrator
 */
@WebService(serviceName = "exp14")
public class exp14 {

    @WebMethod(operationName = "service")
    public boolean service(@WebParam(name = "username") String user,@WebParam(name="password") int pw) {
        boolean res=false;
        try{
            Connection c=DriverManager.getConnection("jdbc:derby://localhost:1527/users");
            Statement st=c.createStatement();
            ResultSet rs=st.executeQuery("SELECT * FROM USER111");
        while(rs.next()){
            if(rs.getString(1).equalsIgnoreCase(user) && rs.getInt(2)==pw){
                res= true;
                break;
            }
            else{
                res=false;
            }
}
        }
        catch(Exception e){
        }
        return res;
    }
}
