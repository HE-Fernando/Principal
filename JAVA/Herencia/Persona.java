public class Persona {
    private String nombre;
    private String apellido;
    private String dni;

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
    public void setDni(String dni) {
        this.dni = dni;
    }
    public String getDni() {
        return this.dni;
    }
    //GET / SET
    //CONSTRUCTOR
    public Persona (String nombre, String apellido, String dni) {
        this.nombre = nombre;
        this.apellido = apellido;
        this.dni = dni;
    }
    public Persona () {
        
    }
    //CONSTRUCTOR
    public String toString() {
        return "Nombre: " + this.nombre + "\nApellido: " + this.apellido + "\nDni: " + this.dni;
        
    }
}

