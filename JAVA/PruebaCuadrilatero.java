//PruebaCuadrilatero.java
import java.util.Scanner;

public class PruebaCuadrilatero {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese el lado A: ");
        double ladoA = entrada.nextDouble();
        while (ladoA <= 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Ingrese un valor positivo para el lado A: ");
            ladoA = entrada.nextDouble();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese el lado B: ");
        double ladoB = entrada.nextDouble();
        while (ladoB <= 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Ingrese un valor positivo para el lado B: ");
            ladoB = entrada.nextDouble();
        }

    	Cuadrilatero cuadrilatero1 = new Cuadrilatero(ladoA, ladoB);
        //AREA
        System.out.print("\033[H\033[2J");
        System.out.flush();
    	if (ladoA == ladoB) {
            System.out.println("El area del cuadrado es: " + cuadrilatero1.calcularArea());
        }else {
            System.out.println("El area del rectángulo es: " + cuadrilatero1.calcularArea());
        }
        //PERIMETRO
        if (ladoA == ladoB) {
            System.out.println("El perimetro del cuadrado es: " + cuadrilatero1.calcularPerimetro());
        }else {
            System.out.println("El perimetro del rectángulo es: " + cuadrilatero1.calcularPerimetro());
        }
    }
}