import java.io.IOException;
import java.sql.Connection;

import javax.servlet.RequestDispatcher;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;

import JDBCDAO.ConnectionProvider;
import JDBCDAO.EmployeeDAO;
import JDBCDAO.EmployeeJDBC;

public class CheckmailAction extends HttpServlet {
	
	/**
	 * 
	 */
	private static final long serialVersionUID = 1L;

	@Override
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		String name = request.getParameter("ename");
		
		try {
			Connection con = ConnectionProvider.getConnection();
			
			  EmployeeDAO edao =  new EmployeeJDBC(con);
			  
			  boolean checkmail = edao.checkmailexist(name);
			  
			    response.setContentType("text/html");
				response.setHeader("Cache-Control", "no-cache");
				response.getWriter().write(""+checkmail+""); 
			 
		} catch (Exception e1) {
			// TODO Auto-generated catch block
			e1.printStackTrace();
		}
		
	}

}
