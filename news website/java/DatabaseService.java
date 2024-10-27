import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import org.mindrot.jbcrypt.BCrypt;

public class DatabaseService {
    private static final String URL = "jdbc:mysql://localhost:3306/news_website";
    private static final String USERNAME = "root";
    private static final String PASSWORD = "";

    public static Connection connect() throws Exception {
        Class.forName("com.mysql.cj.jdbc.Driver");
        return DriverManager.getConnection(URL, USERNAME, PASSWORD);
    }

    public static boolean authenticateUser(String username, String password) throws Exception {
        String sql = "SELECT password FROM users WHERE username = ?";
        
        try (Connection conn = connect();
             PreparedStatement stmt = conn.prepareStatement(sql)) {
            
            stmt.setString(1, username);
            ResultSet rs = stmt.executeQuery();
            
            if (rs.next()) {
                String passwordHash = rs.getString("password");
                return BCrypt.checkpw(password, passwordHash);
            }
        } catch (Exception e) {
            System.err.println("Error authenticating user: " + e.getMessage());
            throw e;
        }
        return false;
    }
}
