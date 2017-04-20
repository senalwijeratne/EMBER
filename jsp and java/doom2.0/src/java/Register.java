/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

import java.io.IOException;
import java.io.PrintWriter;
import java.security.InvalidKeyException;
import java.security.NoSuchAlgorithmException;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javax.crypto.BadPaddingException;
import javax.crypto.IllegalBlockSizeException;
import javax.crypto.NoSuchPaddingException;
import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

/**
 *
 * @author ASUS
 */
public class Register extends HttpServlet {

   protected void doPost(HttpServletRequest request,
			HttpServletResponse response) throws ServletException, IOException {

      String firstName = request.getParameter("firstName");
      String middleName = request.getParameter("middleName");
      String lastName = request.getParameter("lastName");
      String initials = request.getParameter("initials");
      String addressLine1 = request.getParameter("addressLine1");
      String addressLine2 = request.getParameter("addressLine2");
      String addressLine3 = request.getParameter("addressLine3");
      String dateOfBirth = request.getParameter("dateOfBirth");
      String email = request.getParameter("email");
      String mobileNo = request.getParameter("mobileNo");
      String homeNo = request.getParameter("homeNo");
      String passportID = request.getParameter("passportID");
      String NIC = request.getParameter("NIC");
      String password = request.getParameter("password");
          
           encryption enc = new encryption();
       try {
           String eccPassword = enc.encrypting(password);
           String Salt = enc.Salt();
             
           String hashAndSalt = eccPassword+Salt;
           dbConnect conn = new dbConnect();
               PreparedStatement insertPass = conn.prepareStatement("INSERT INTO user(firstName,middleName,initials,lastName,addressLine1"
                       + ",addressLine2,addressLine3,dateOfBirth,email,mobileNo,homeNo,passportID,NIC,salt,hashAndSalt) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
               insertPass.setString(1,firstName); 
               insertPass.setString(2,middleName); 
               insertPass.setString(3,initials); 
               insertPass.setString(4,lastName); 
               insertPass.setString(5,addressLine1); 
               insertPass.setString(6,addressLine2); 
               insertPass.setString(7,addressLine3); 
               insertPass.setString(8,dateOfBirth); 
               insertPass.setString(9,email); 
               insertPass.setString(10,mobileNo); 
               insertPass.setString(11,homeNo);
               insertPass.setString(12,passportID); 
               insertPass.setString(13,NIC);
               insertPass.setString(14,Salt); 
               insertPass.setString(15,hashAndSalt);
               
               
               insertPass.executeUpdate();
           
           
           
           
       } 
       
       
       
       
       catch (NoSuchAlgorithmException ex) {
           Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
       } catch (NoSuchPaddingException ex) {
           Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
       } catch (InvalidKeyException ex) {
           Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
       } catch (IllegalBlockSizeException ex) {
           Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
       } catch (BadPaddingException ex) {
           Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
       } catch (SQLException ex) {
           Logger.getLogger(Register.class.getName()).log(Level.SEVERE, null, ex);
       }
               
     
           
           
           
           
           
   }      
  
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        try (PrintWriter out = response.getWriter()) {
            /* TODO output your page here. You may use following sample code. */
            out.println("<!DOCTYPE html>");
            out.println("<html>");
            out.println("<head>");
            out.println("<title>Servlet loginCheck</title>");            
            out.println("</head>");
            out.println("<body>");
            out.println("<h1>Servlet loginCheck at " + request.getContextPath() + "</h1>");
            out.println("</body>");
            out.println("</html>");
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
       /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    
}
