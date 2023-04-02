<%@taglib uri="http://java.sun.com/jsp/jstl/core" prefix="c" %>
<%@page import="exp10.student"%>
<%@page import="java.util.*"%>
<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>ExpNo10</title>
       
    </head>
    <body>
        <%
            student st=new student("chris",91,"chrisjordan69@gmail.com");
            student st1=new student("atman",77,"atmanstr@gmail.com");
            student st2=new student("harbajan",69,"harbajanthiruvalluvar@gmail.com");
            student st3=new student("ash",99,"raviash99@gmail.com");
            student st4=new student("gautam",97,"gautigg@gmail.com");
            ArrayList<student> obj=new ArrayList<student>();
            obj.add(st);
            obj.add(st1);
            obj.add(st2);
            obj.add(st3);
            obj.add(st4);
            student.sort(obj);
pageContext.setAttribute("obj", obj);
        %>
        <table border="2px"><tr><th>Name</th><th>Mail</th><th>Mark</th></tr>
        <c:forEach items="${pageScope.obj}" var="i">
           
                <tr> <td>${i.getName()}</td>
                    <td>${i.getMail()}</td>
                    <td>${i.getMark()}</td>
                </tr>
        </c:forEach>  
        </table>
       </table>
    </body>
</html>