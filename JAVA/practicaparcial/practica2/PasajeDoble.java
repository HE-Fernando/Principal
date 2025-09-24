public class PasajeDoble extends Pasaje{
    private Fecha fechaIda;
    private Fecha fechaVuelta;
    public PasajeDoble(){

    }
    public PasajeDoble(int numeroAsiento, Fecha fechaCompra, String origen,
    String destino, double precio, Fecha fechaIda, Fecha fechaVuelta){
        super(numeroAsiento, fechaCompra, origen, destino, precio);
        this.fechaIda = fechaIda;
        this.fechaVuelta = fechaVuelta;
    }
    //GET SET
    public void setFechaIda(Fecha fechaIda){
        this.fechaIda = fechaIda;
    }
    public Fecha getFechaIda(){
        return this.fechaIda;
    }
    public void setFechaVuelta(Fecha fechaVuelta){
        this.fechaVuelta = fechaVuelta;
    }
    public Fecha getFechaVuelta(){
        return this.fechaVuelta;
    }
    //METODOS
    @Override
    public String toString(){
        return "PASAJE DOBLE" + 
        "\n" + getOrigen() + "---------> " + getDestino() + 
        "\nFecha de compra: " + getFechaCompra() + 
        "\nNúmero de asiento: " + getNumeroAsiento() + 
        "\nFecha de ida: " + getFechaIda() +
        "\nFecha de vuelta: " + getFechaVuelta() +
        "\nPrecio (unitario): " + getPrecio() +
        "\nTotal: " + getPrecio() +
        "\n-------------------------------------------------------------";

    }
}
