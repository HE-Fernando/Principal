/*Crear una clase Persona, con nombre, apellido y teléfono.
Crear una clase Cuenta, con número Cuenta, saldo y propietario. El propietario es un objeto tipo Persona.
 Crear un constructor con parámetros y otro sin parámetros, métodos set y get.
 Controlar que el saldo de la cuenta no debe ser menor que 0 (esta función debe retornar un valor).
 Crear un método llamado transacción que ingrese como parámetros cantidad y tipo Transacción
(“retiro” o “deposito”). Si es un retiro, la cantidad se resta del saldo, y si es deposito la cantidad
se incrementa al saldo. El método transacción debe imprimir el tipo de transacción y el nuevo saldo. */

public class Persona {
    private String nombre;
    private String apellido;
    private String telefono;

    //GET / SET
    public void setNombre(String nombre) {
    this.nombre = nombre;
    }
    public String getNombre() {
        return this.nombre;
    }
    public void setApellido(String apellido) {
        this.apellido = apellido;
    }
    public String getApellido() {
        return this.apellido;
    }
    public void setTelefono(String telefono) {
        this.telefono = telefono;
    }
    public String getTelefono() {
        return this.telefono;
    }
    //GET / SET
    //CONSTRUCTOR
    public Persona (String nombre, String apellido, String telefono) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.telefono = telefono;
    }
    public Persona () {
        this.nombre = "";
        this.apellido = "";
        this.telefono = "";
    }
    //CONSTRUCTOR
    public String toString() {
        return "Nombre: " + this.nombre + "\nApellido: " + this.apellido + "\nTelefono: " + this.telefono;
        
    }
}

