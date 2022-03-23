

import java.io.IOException;
import java.sql.Connection;
import java.util.ArrayList;

import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import javax.servlet.http.HttpSession;

import JDBCDAO.ConnectionProvider;
import JDBCDAO.EmployeeDAO;
import JDBCDAO.EmployeeJDBC;
import entity.Employee;

public class DisplayEmployeeAction extends HttpServlet {
	
	@Override
	protected void service(HttpServletRequest request,
			               HttpServletResponse response)
			               throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		HttpSession session = request.getSession();
		
		
		response.sendRedirect("./empdisplay.jsp");
		
		try {
			
			Connection con = ConnectionProvider.getConnection();
			
			  EmployeeDAO edao =  new EmployeeJDBC(con);
			  
			  ArrayList<Employee> elist = edao.getemployeelist();
			  
			   session.setAttribute("elist", elist);
			
		} catch (Exception e) {
			// TODO: handle exception
			e.printStackTrace();
		}

	}

}

