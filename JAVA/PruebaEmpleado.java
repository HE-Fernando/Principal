/*Escriba una aplicación de prueba llamada PruebaEmpleado, que demuestre las capacidades de cada Empleado.
Cree dos objetos Empleado y muestre el salario anual de cada objeto.
Después, proporcione a cada Empleado un aumento del 10% y muestre el salario anual de cada Empleado otra vez.
*/
import java.util.Scanner;
public class PruebaEmpleado {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        /* MENU DIFERENCIADOR DE CONSTRUCTORES
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Creación de empleado");
        System.out.println("Inicializar vacio: 1");
        System.out.println("Inicializar con datos: 2");
        int opcion = entrada.nextInt();
        switch (opcion) {
            case 1: {
                Empleado empleado1 = new Empleado();
                System.out.print("\033[H\033[2J");
                System.out.flush();
                System.out.println("Empleado creado con exito.");
                break;
            }
            case 2: {
                System.out.print("\033[H\033[2J");
                System.out.flush();
                System.out.println("Ingrese los datos del empleado:");
                System.out.printf("Nombre: ");
                String nombre = entrada.nextLine();
                System.out.printf("Apellido: ");
                String apellido = entrada.nextLine();
                System.out.printf("Salario Mensual: ");
                double salarioMensual = entrada.nextDouble();
                Empleado empleado2 = new Empleado(nombre, apellido, salarioMensual);
                System.out.print("\033[H\033[2J");
                System.out.flush();
                System.out.println("Empleado creado con exito.");
                break;
            }
        } */
        System.out.print("\033[H\033[2J");
        System.out.flush();
        //EMPLEADO 1
        System.out.println("Ingrese los datos del empleado 1:");
        System.out.printf("Nombre: ");
        String nombre1 = entrada.nextLine();
        System.out.printf("Apellido: ");
        String apellido1 = entrada.nextLine();
        System.out.printf("Salario Mensual: ");
        double salarioMensual1 = entrada.nextDouble();
        Empleado empleado1 = new Empleado(nombre1, apellido1, salarioMensual1);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Empleado 1 creado! ");
        System.out.println("");
        entrada.nextLine(); // Consumir el salto de línea pendiente
        System.out.println("Ingrese los datos del empleado 2:");
        System.out.printf("Nombre: ");
        String nombre2 = entrada.nextLine();
        System.out.printf("Apellido: ");
        String apellido2 = entrada.nextLine();
        System.out.printf("Salario Mensual: ");
        double salarioMensual2 = entrada.nextDouble();
        Empleado empleado2 = new Empleado(nombre2, apellido2, salarioMensual2);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Empleado 2 creado! ");
        System.out.println("Salario anual empleado 1 (" + empleado1.getNombre() + "): " + (empleado1.getSalarioMensual() * 12));
        System.out.println("Salario anual empleado 2: (" + empleado2.getNombre() + "): " + (empleado2.getSalarioMensual() * 12));
        System.out.println("");
        System.out.println("Aplicando aumento del 10% al salario de ambos empleados...");
        empleado1.setSalarioMensual(empleado1.getSalarioMensual() * 1.10);
        empleado2.setSalarioMensual(empleado2.getSalarioMensual() * 1.10);
        System.out.println("Salario anual (con aumento del 10%) empleado 1 (" + empleado1.getNombre() + "): " + (empleado1.getSalarioMensual() * 12));
        System.out.println("Salario anual (con aumento del 10%) empleado 2: (" + empleado2.getNombre() + "): " + (empleado2.getSalarioMensual() * 12));

        
    }
}
