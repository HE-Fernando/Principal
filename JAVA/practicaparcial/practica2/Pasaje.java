public class Pasaje{
    private int numeroAsiento;
    private Fecha fechaCompra;
    private String origen;
    private String destino;
    private double precio;
    //CONSTRUCTORES
    public Pasaje(){

    }
    public Pasaje(int numeroAsiento, Fecha fechaCompra, String origen, String destino,
    double precio){
        this.numeroAsiento = numeroAsiento;
        this.fechaCompra = fechaCompra;
        this.origen = origen;
        this.destino = destino;
        this.precio = precio;
    }
    //GET SET
    public void setNumeroAsiento(int numeroAsiento){
        this.numeroAsiento = numeroAsiento;
    }
    public int getNumeroAsiento(){
        return this.numeroAsiento;
    }
    public void setFechaCompra(Fecha fechaCompra){
        this.fechaCompra = fechaCompra;
    }
    public Fecha getFechaCompra(){
        return this.fechaCompra;
    }
    public void setOrigen(String origen){
        this.origen = origen;
    }
    public String getOrigen(){
        return this.origen;
    }
    public void setDestino(String destino){
        this.destino = destino;
    }
    public String getDestino(){
        return this.destino;
    }
    public void setPrecio(double precio){
        this.precio = precio;
    }
    public double getPrecio(){
        return this.precio;
    }
    //METODOS
    public String toString(){
        return "Datos";
    }
}