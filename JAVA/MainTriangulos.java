import  java.util.Scanner;
public class MainTriangulos {
    public static void main(String[] args) {
    Scanner entrada = new Scanner (System.in);
    int contadorEquilatero = 0;
    int contadorIsosceles = 0;
    int contadorEscaleno = 0;
    int auxLado1;
    int auxLado2;
    int auxLado3;
    for (int i = 0; i < 10; i++) {
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese el lado 1 del trangulo " + (i+1) + ": ");
        auxLado1 = entrada.nextInt();
        System.out.println("Ingrese el lado 2 del trangulo " + (i+1) + ": ");
        auxLado2 = entrada.nextInt();
        System.out.println("Ingrese el lado 3 del trangulo " + (i+1) + ": ");
        auxLado3 = entrada.nextInt();
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println();
        Triangulos triangulo = new Triangulos(auxLado1, auxLado2, auxLado3);
        triangulo.determinarTipo();
        int auxTipo = triangulo.getTipo();
        switch (auxTipo) {
            case 1:
                contadorEquilatero = contadorEquilatero + 1;
                break;
            case 2:
                contadorIsosceles = contadorIsosceles + 1;
                break;
            case 3:
                contadorEscaleno = contadorEscaleno + 1;
                break;
        }
    }
    System.out.print("\033[H\033[2J");
    System.out.flush();
    System.out.println("Cantidad de triangulos equilateros: " + contadorEquilatero);
    System.out.println("Cantidad de triangulos isosceles: " + contadorIsosceles);
    System.out.println("Cantidad de triangulos escalenos: " + contadorEscaleno);
    }
}
