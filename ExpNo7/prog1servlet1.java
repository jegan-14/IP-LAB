/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import javax.servlet.ServletException;
import javax.servlet.annotation.WebServlet;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author 21cse111
 */
@WebServlet(urlPatterns = {"/servlet1"})
public class prog1servlet1 extends HttpServlet {

    /**
     * Processes requests for both HTTP <code>GET</code> and <code>POST</code>
     * methods.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out=response.getWriter();
        String s=request.getParameter("city");
        try{
            /* TODO output your page here. You may use following sample code. */
            
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet servlet1</title>");            
            out.println("</head>");
            out.println("<body><center><h1><u> WEATHER REPORT OF "+s.toUpperCase()+"</h1></u><br>");
            if(s.equalsIgnoreCase("madurai")){
                out.println("<h1>Temperature in celsius:28°C<br>Temperature in Fahrenheit:83°F<br>Precipitation: 1%<br>Humidity: 61%<br>Wind: 10 mph</h1>");
            }
            if(s.equalsIgnoreCase("chennai")){
                out.println("<h1>Temperature in celsius:29°C<br>Temperature in Fahrenheit:85°F<br>Precipitation: 0%<br>Humidity: 61%<br>Wind: 6 mph</h1>");
            }
            if(s.equalsIgnoreCase("coimbatore")){
                out.println("<h1>Temperature in celsius:26°C<br>Temperature in Fahrenheit:79°F<br>Precipitation: 0%<br>Humidity: 55%<br>Wind: 10 mph</h1>");
            }
            if(s.equalsIgnoreCase("trichy")){
                out.println("<h1>Temperature in celsius:28°C<br>Temperature in Fahrenheit:83°F<br>Precipitation: 0%<br>Humidity: 63%<br>Wind: 16 mph</h1>");
            }
            if(s.equalsIgnoreCase("sivaganga")){
                out.println("<h1>Temperature in celsius:29°C<br>Temperature in Fahrenheit:84°F<br>Precipitation: 1%<br>Humidity: 62%<br>Wind: 12 mph</h1>");
            }
            //out.println("<h1>Servlet servlet1 at " + s + "</h1>");
            out.println("</center></body>");
            out.println("</html>");
        }
        finally{
            out.println("");
        }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
