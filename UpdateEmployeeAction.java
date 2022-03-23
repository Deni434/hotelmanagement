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
import entity.Employee;

public class UpdateEmployeeAction extends HttpServlet{

	@Override
	protected void service(HttpServletRequest request, HttpServletResponse response) throws ServletException, IOException {
		// TODO Auto-generated method stub
		
		
		
		int id = Integer.parseInt(request.getParameter("selectedid"));
		String name =  request.getParameter("ename");
		String salary =  request.getParameter("esalary");
		String departmentId = request.getParameter("edepartment");
		
		
		Employee e = new Employee();
		
		e.setEname(name);
		e.setEsalary(salary);
		e.setEdepartment(departmentId);;
		
		 try {
				Connection con = ConnectionProvider.getConnection();
				
				  EmployeeDAO edao =  new EmployeeJDBC(con);
				  
				  int result = edao.updatedata(e);
				  
				  RequestDispatcher rd = request.getRequestDispatcher("display");
				  rd.forward(request, response);
			} catch (Exception e1) {
				// TODO Auto-generated catch block
				e1.printStackTrace();
			}
		
		
	}
	
}
