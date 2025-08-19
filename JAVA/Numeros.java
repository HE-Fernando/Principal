import java.util.Scanner;
public class Numeros {
    public static void main(String[] args) {
    Scanner entrada = new Scanner(System.in);
    int cantidadNumeros;
    System.out.print("\033[H\033[2J");
    System.out.flush();
    System.out.println("Ingrese la cantidad de numeros que desea ingresar: ");
    cantidadNumeros = entrada.nextInt();
    int[] numeros = new int[cantidadNumeros];
    for (int i = 0; i < cantidadNumeros; i++) {
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese el numero " + (i + 1) + ": ");
        numeros[i] = entrada.nextInt();
    }
    System.out.print("\033[H\033[2J");
    System.out.flush();
    boolean ascendente = true;
    boolean descendente = true;
    for (int i = 0; i < cantidadNumeros - 1; i++) {
        if (numeros[i] < numeros[i + 1]) {
            descendente = false;
        } else if (numeros[i] > numeros[i + 1]) {
            ascendente = false;
        }
    }
    if (ascendente == true) {
        System.out.println("La serie de numeros se encuentra ordenada de manera ascendente.");
    }else if (descendente == true) {
        System.out.println("La serie de numeros se encuentra ordenada de manera descendente.");
    }else {
        System.out.println("La serie de numeros se encuentra desordenada.");
    }
}
}


//3._ Escriba un programa que permita ingresar una serie de números e indique si dicha serie
//se encuentra ordenada forma ascendente o descendente, o si se encuentra desordenada.