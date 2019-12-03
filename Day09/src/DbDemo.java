import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Scanner;

public class DbDemo {
	public static void main(String[] args) throws SQLException{
		Connection con=null;
		
		PreparedStatement pstmt;
		
		ResultSet rs;
		
		try {
			Class.forName("com.mysql.jdbc.Driver");
			System.out.println("Driver Found");
			
			con=DriverManager.getConnection("jdbc:mysql://192.168.100.26:3306/group006",
					"group006","welcome");
			System.out.println("Connection Established");
			
			pstmt=con.prepareStatement("insert into employee values (?,?,?)");
			
			Scanner s=new Scanner(System.in);
			
			System.out.println("Enter Emp ID:");
			int Eid=s.nextInt();
			
			System.out.println("Enter Emp Name:");
			String  n=s.next();
			
			System.out.println("Enter Sal:");
			int sall=s.nextInt();
			
			pstmt.setInt(1, Eid);
			pstmt.setString(2, n);
			pstmt.setInt(3, sall);
			
			int status=pstmt.executeUpdate();
			
			if(status>0)
			{
				System.out.println("Succcesfully Inserted!!!");
			}
			else
			{
				System.out.println("Failed to insert");
			}
			
			rs=pstmt.executeQuery("select * from employee");
			while(rs.next())
			{
				System.out.println(rs.getInt(1)+" "+rs.getString(2)+""+rs.getInt(3));
			}
		
		}catch(Exception e) {
			System.out.println(e);
		}

		
		finally {
			con.close();
		}
		
		
	}

}
