/*Crear una clase Persona, con nombre, apellido y teléfono.
Crear una clase Cuenta, con número Cuenta, saldo y propietario. El propietario es un objeto tipo Persona.
 Crear un constructor con parámetros y otro sin parámetros, métodos set y get.
 Controlar que el saldo de la cuenta no debe ser menor que 0 (esta función debe retornar un valor).
 Crear un método llamado transacción que ingrese como parámetros cantidad y tipo Transacción
(“retiro” o “deposito”). Si es un retiro, la cantidad se resta del saldo, y si es deposito la cantidad
se incrementa al saldo. El método transacción debe imprimir el tipo de transacción y el nuevo saldo. */

import  java.util.Scanner;
public class MainCuentaPersona {
    public static void main(String[] args) {
        Scanner entrada = new Scanner (System.in);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Creando persona");
        System.out.printf("Nombre: ");
        String auxNombre = entrada.nextLine();
        System.out.printf("Apellido: ");
        String auxApellido = entrada.nextLine();
        System.out.printf("Telefono: ");
        String auxTelefono = entrada.nextLine();
        Persona persona1 = new Persona(auxNombre, auxApellido, auxTelefono);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("¡PERSONA CREADA!");
        System.out.println("");
        System.out.println("Creando cuenta");
        System.out.printf("Numero de cuenta: ");
        int auxNumeroCuenta = entrada.nextInt();
        while (auxNumeroCuenta <= 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Numero de cuenta incorrecto (debe ser mayor a 0).");
            System.out.printf("Numero de cuenta: ");
            auxNumeroCuenta = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.printf("Saldo: ");
        double auxSaldo = entrada.nextDouble();
        while (auxSaldo < 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Saldo incorrecto (debe ser mayor o igual a 0).");
            System.out.print("Saldo: ");
            auxSaldo = entrada.nextDouble();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Persona asignada: ");
        System.out.println(persona1);
        System.out.println("");
        Cuenta cuenta1 = new Cuenta(auxNumeroCuenta, auxSaldo, persona1);
        System.out.println();
        System.out.println("Transacción");
        System.out.println("1._ Deposito");
        System.out.println("2._ Retiro");
        System.out.printf("Opcion: ");
        int opcion = entrada.nextInt();
        while (opcion != 1 && opcion != 2) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Opcion incorrecta");
            System.out.println("1._ Deposito");
            System.out.println("2._ Retiro");
            System.out.printf("Opcion: ");
            opcion = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.printf("Monto: ");
        double monto = entrada.nextDouble();
        while (monto < 0) {
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Monto incorrecto (debe ser mayor a 0)");
            System.out.printf("Monto: ");
            monto = entrada.nextDouble();
        }
        cuenta1.transaccion(opcion, monto);
    }
}
