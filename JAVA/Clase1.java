import  java.util.Scanner;

public class Clase1 {
    private String nombreDelCurso;
    private String nombreDelProfesor;

    public Clase1(String nombre, String profesor){
        this.nombreDelCurso = nombre;
        this.nombreDelProfesor = profesor;
    }
    public void setNombreDelCurso(String nombre) {
        nombreDelCurso = nombre;
    }
      public void setNombreProfesor (String profesor) {
        this.nombreDelProfesor = profesor;
    }
    public String getNombreDelCurso() {
        return nombreDelCurso;
    }
    public String getNombreProfesor() {
        return nombreDelProfesor;
    }
    public void mostrarMensaje() {
        System.out.println("Bienvenido al libro de calificaciones para %s " + getNombreDelCurso());
        System.out.println("Este curso es dictado por: " + getNombreProfesor());
    }
    Scanner entrada = new Scanner (System.in);
    public void mostrarPromedio() {
        int contador = 0;
        int sumador = 0;
        int aux;
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Curso: " + getNombreDelCurso());
        System.out.println("Profesor: " + getNombreProfesor() + "\n\n");
        System.out.println("¿Desea ingresar nota?");
        System.out.println("1: Si     |     0:No");
        int auxMenu = entrada.nextInt();
        while (auxMenu == 1) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Curso: " + getNombreDelCurso());
            System.out.println("Profesor: " + getNombreProfesor() + "\n\n");
            System.out.println("Ingrese la nota numero " + (contador + 1));
            aux = entrada.nextInt();
            while (aux < 0 || aux >10) {
                System.out.print("\033[H\033[2J");
                System.out.flush();
                System.out.println("¡El valor ingresado es incorrecto!");
                System.out.println("Por favor reingrese la nota: ");
                aux = entrada.nextInt();
            }
            sumador = sumador + aux;
            System.out.print("\033[H\033[2J");
            System.out.flush();
            contador = contador + 1;
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Nota cargada correctamente.");
            System.out.println("Curso: " + getNombreDelCurso());
            System.out.println("Profesor: " + getNombreProfesor() + "\n\n");
            System.out.println("¿Desea ingresar nota?");
            System.out.println("1: Si     |     0:No");
            auxMenu = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();        
        if (contador == 0) {
            System.out.println("Curso: " + getNombreDelCurso());
            System.out.println("Profesor: " + getNombreProfesor() + "\n\n");
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("No se ingresaron notas.");
        }else {
            System.out.println("Curso: " + getNombreDelCurso());
            System.out.println("Profesor: " + getNombreProfesor() + "\n\n");
            System.out.print("\033[H\033[2J");
            System.out.flush();
            float promedioFinal = sumador / contador;
            System.out.println("El promedio es de: " + promedioFinal);
        }
    }
}

