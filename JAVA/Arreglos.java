//1- Escriba un programa que permita cargar una matriz
//de 6x5 con valores positivos ingresados por el operador.
//Determine y muestre el mayor y el menor de cada columna.
//Tenga en cuenta que debe controlar que el 
//valor ingresado sea positivo, caso contrario volver
//que ingrese.
import java.util.Scanner;
public class Arreglos {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        int [][] matriz = new int[5][6];
        for (int i = 0; i < 5; i++) {
            for (int k = 0; k < 6; k++) {
                System.out.print("\033[H\033[2J");
                System.out.flush();
                System.out.println("Ingrese el valor de la posicion: " + "[" + i + "][" + k + "]: ");
                matriz[i][k] = entrada.nextInt();
                while (matriz[i][k] < 0) {
                    System.out.print("\033[H\033[2J");
                    System.out.flush();
                    System.out.println("El valor ingresado debe ser positivo, por favor reingrese: ");
                    matriz[i][k] = entrada.nextInt();
                }
            }
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Mostrando matriz: ");
        for (int i = 0; i < 5; i++) {
            for (int k = 0; k < 6; k++) {
                System.out.print(matriz[i][k] + " ");
            }
            System.out.println();
        }
        System.out.println();
        System.out.println("Mostrando mayor y menor de cada columna: ");
        System.out.println("=========================================");
        for (int i = 0;i < 6; i++) {
            int mayor = 0;
            int menor = 0;
            for (int k = 0; k < 5; k++) {
                if (menor == 0) {
                    menor = matriz[k][i];
                }
                if (matriz[k][i] > mayor) {
                    mayor = matriz[k][i];
                }else if (matriz[k][i] < menor) {
                    menor = matriz[k][i];
                }
            }
            System.out.println("El mayor de la columna " + (i) + " es: " + mayor);
            System.out.println("El menor de la columna " + (i) + " es: " + menor);
            System.out.println();
        }
    }
}
