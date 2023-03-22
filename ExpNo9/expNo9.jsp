

<%@page import="java.sql.*"%>
<%@page import="java.sql.DriverManager"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Employee</title>
    </head>
    <body>
        <%  Connection c;
        Statement st;
        ResultSet rs;
        int count=0;
        double average=0;
        int max=0;
        %>
        <%
             c=DriverManager.getConnection("jdbc:derby://localhost:1527/semester");
             
             st=c.createStatement();
             rs=st.executeQuery("SELECT COUNT(employee_id) FROM employees");
            if(rs.next()){
                count=rs.getInt(1);
            }
            rs=st.executeQuery("SELECT AVG(salary) FROM employees");
            if(rs.next()){
                average=rs.getDouble(1);
            }
            rs=st.executeQuery("SELECT MAX(salary) FROM employees");
            if(rs.next()){
                max=rs.getInt(1);
            }
            %>
            <table border="2px"><tr><th>Total no.of employees</th><th>Average salary</th><th>Highest salary</th></tr>
                <tr><td><%= count%></td><td><%=average%></td><td><%= max%></td></tr></table>
        </body>
</html>
