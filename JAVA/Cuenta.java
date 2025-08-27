/*Crear una clase Persona, con nombre, apellido y teléfono.
Crear una clase Cuenta, con número Cuenta, saldo y propietario. El propietario es un objeto tipo Persona.
 Crear un constructor con parámetros y otro sin parámetros, métodos set y get.
 Controlar que el saldo de la cuenta no debe ser menor que 0 (esta función debe retornar un valor).
 Crear un método llamado transacción que ingrese como parámetros cantidad y tipo Transacción
(“retiro” o “deposito”). Si es un retiro, la cantidad se resta del saldo, y si es deposito la cantidad
se incrementa al saldo. El método transacción debe imprimir el tipo de transacción y el nuevo saldo. */
public class Cuenta {
    private int numeroCuenta;
    private double saldo;
    private Persona persona;
    //SET / GET
    public void setNumeroCuenta(int numeroCuenta) {
        this.numeroCuenta = numeroCuenta;
    }
    public int getNumeroCuenta() {
        return this.numeroCuenta;
    }
    public void setSaldo(double saldo) {
        this.saldo = saldo;
    }
    public double getSaldo() {
        return this.saldo;
    }
    public void setPersona(Persona persona) {
        this.persona = persona;
    }
    public Persona getPersona() {
        return this.persona;
    }
    //SET / GET
    //CONSTRUCTOR
    public Cuenta (int numeroCuenta, double saldo, Persona persona) {
        this.numeroCuenta = numeroCuenta;
        this.saldo = saldo;
        this.persona = persona;
    }
    public Cuenta () {
        this.numeroCuenta = 0;
        this.saldo = 0.0;
    }
    public void transaccion(int opcion, double monto) {
        if (opcion == 1) { //DEPOSITO
            System.out.print("\033[H\033[2J");
            System.out.flush();
            System.out.println("Saldo actual: " + this.saldo);
            this.saldo = this.saldo + monto;
            System.out.println("Nuevo saldo de la cuenta " + this.numeroCuenta + ": " + this.saldo);
            System.out.println("Tipo de operación ´DEPOSITO'");
        }else { //RETIRO
            System.out.print("\033[H\033[2J");
            System.out.flush();
            if (monto > this.saldo) {
                System.out.println("¡SALDO INSUFICIENTE!");
            } else {
                System.out.printf("Saldo actual: " + this.saldo);
                this.saldo = this.saldo - monto;
                System.out.println("Nuevo saldo de la cuenta " + this.numeroCuenta + ": " + this.saldo);
                System.out.println("Tipo de operación 'RETIRO'");
            }
        }
    }
    //CONSTRUCTOR
}
