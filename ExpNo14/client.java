public class NewMain {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        // TODO code application logic here
        System.out.println(service("prem",4444));
    }

    private static boolean service(java.lang.String username, int password) {
        weservicespackage.Exp14_Service service = new weservicespackage.Exp14_Service();
        weservicespackage.Exp14 port = service.getExp14Port();
        return port.service(username, password);
    }
   
}