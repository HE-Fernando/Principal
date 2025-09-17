import java.time.LocalDate;
import java.time.Period;
import java.util.Scanner;
public class MainEmpleados {
    public static void main(String[] args) {
        Scanner entrada = new Scanner (System.in);
        System.out.print("\033[H\033[2J");
        System.out.print("Nombre: ");
        String nombre = entrada.nextLine();
        System.out.print("Apellido: ");
        String apellido = entrada.nextLine();
        System.out.print("DNI: ");
        String dni = entrada.nextLine();
        System.out.print("Valor de Jornada: ");
        double valorJornada = entrada.nextDouble();
        System.out.println("Fecha de Ingreso: ");
        System.out.print("Dia: ");
        int auxDia = entrada.nextInt();
        System.out.print("Mes: ");
        int auxMes = entrada.nextInt();
        System.out.print("Año: ");
        int auxAño = entrada.nextInt();
        System.out.print("Cantidad de Jornadas: ");
        int cantidadJornada = entrada.nextInt();
        Fecha fecha1 = new Fecha(auxDia, auxMes, auxAño); //utilizo la clase Fecha de ejercicios anteriores
        //GUARDO LA FECHA DE INGRESO CON LA LIBRERIA LOCALDATE (para facilitar el calculo de antiguedad)
        LocalDate fechaIngreso = LocalDate.of(fecha1.getAño(), fecha1.getMes(), fecha1.getDia());
        //GUARDO LA FECHA DE HOY 
        LocalDate hoy = LocalDate.now();
        //CALCULO LA ANTIGUEDAD
        Period antiguedad = Period.between(fechaIngreso, hoy);
        //PRUEBA JORNALERO
        Persona jornalero1 = new Jornalero(nombre, apellido, dni, valorJornada, fecha1, cantidadJornada,
        antiguedad.getDays(), antiguedad.getMonths(), antiguedad.getYears());
        System.out.println(jornalero1);

        //PRUEBA EMPLEADO POR HORA
        System.out.println("");
        System.out.println("");
        System.out.print("Valor por Hora: ");
        double valorHora = entrada.nextDouble();
        System.out.print("Horas Trabajadas: ");
        double horas = entrada.nextDouble();
        Persona empleado1 = new EmpleadoHora(nombre, apellido, dni, valorHora, horas, fecha1, antiguedad.getDays(),
        antiguedad.getMonths(), antiguedad.getYears());
        System.out.println(empleado1);
    }
}
