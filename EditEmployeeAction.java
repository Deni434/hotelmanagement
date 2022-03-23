import java.io.IOException;
import java.sql.Connection;
import java.util.Scanner;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import JDBCDAO.ConnectionProvider;
import JDBCDAO.EmployeeDAO;
import JDBCDAO.EmployeeJDBC;
import entity.Employee;

public class EditEmployeeAction extends HttpServlet{
	
	
	@Override
	protected void service(HttpServletRequest request, HttpServletResponse response)
			        throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		HttpSession session = request.getSession();
		
		int selectedid = Integer.parseInt(request.getParameter("selectedid"));
		

		
		try {
			
			Connection con = ConnectionProvider.getConnection();
			
			  EmployeeDAO edao =  new EmployeeJDBC(con);
			  
			  Employee e1 = edao.geteditdata(selectedid);
			  
			  session.setAttribute("e1", e1);
			  
			  response.sendRedirect("./empupdate.jsp");
			
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
		}
		
	}

}
