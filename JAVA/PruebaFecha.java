import java.util.Scanner;

public class PruebaFecha {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese la fecha con el siguiente formato: ");
        System.out.printf("Dia: ");
        int auxDia = entrada.nextInt();
        while (auxDia > 31 || auxDia <= 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Error al ingresar el dia (1 - 31), reingrese:");
            System.out.println("");
            System.out.printf("Dia: ");
            auxDia = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese la fecha con el siguiente formato: ");
        System.out.println("Dia: " + auxDia);
        System.out.printf("Mes: ");
        int auxMes = entrada.nextInt();
        while (auxMes > 12 || auxMes <= 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Error al ingresar el mes (1 - 12), reingrese:");
            System.out.println("");
            System.out.printf("Mes: ");
            auxMes = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese la fecha con el siguiente formato: ");
        System.out.println("Dia: " + auxDia);
        System.out.println("Mes: " + auxMes);
        System.out.printf("Año: ");
        int auxAño = entrada.nextInt();
        while (auxAño > 5000 || auxAño < 1000) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Error al ingresar el año (1000 - 5000), reingrese:");
            System.out.println("");
            System.out.printf("Año: ");
            auxAño = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        Fecha fecha1 = new Fecha(auxDia, auxMes, auxAño);
        fecha1.mostrarFecha();
        System.out.println(fecha1);
    }
}
