public class Cliente{
    private int numeroCliente;
    private String nombre;
    private String direccion;
    private String telefono;

    //GET / SET
    public void setNumeroCliente(int numeroCliente){
        this.numeroCliente = numeroCliente;
    }
    public int getNumeroCliente(){
        return this.numeroCliente;
    }
    public void setNombre(String nombre) {
    this.nombre = nombre;
    }
    public String getNombre() {
        return this.nombre;
    }
    public void setDireccion(String direccion) {
        this.direccion = direccion;
    }
    public String getDireccion(){
        return this.direccion;
    }
    public void setTelefono(String telefono){
        this.telefono = telefono;
    }
    public String getTelefono(){
        return this.telefono;
    }
    //GET / SET
    //CONSTRUCTOR
    public Cliente(){

    }
    public Cliente(int numeroCliente, String nombre, String direccion, String telefono){
        this.numeroCliente = numeroCliente;
        this.nombre = nombre;
        this.direccion = direccion;
        this.telefono = telefono;
    }
    //CONSTRUCTOR
    public String toString() {
        return "Numero de cliente: " + this.numeroCliente + "\nNombre: " + this.nombre + "\nDireccion: " + this.direccion +
        "\nTelefono: " + this.telefono;
    }
}

