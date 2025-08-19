public class MainEmpleados {
    public static void main(String[] args) {
    System.out.print("\033[H\033[2J");
    System.out.flush();
    Empleados empleado1 = new Empleados("Fernando", "Hirt",
     25, "42002193", "Central", 0.99, true);
    
    System.out.print("\033[H\033[2J");
    System.out.flush();
    empleado1.mostrarDatosEmpleado();
    }
}