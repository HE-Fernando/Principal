public class PasajeComun extends Pasaje{
    private int cantidadComprada;
    public PasajeComun(){

    }
    public PasajeComun(int numeroAsiento, Fecha fechaCompra, String origen,
    String destino, double precio, int cantidadComprada){
        super(numeroAsiento, fechaCompra, origen, destino, precio);
        this.cantidadComprada = cantidadComprada;
    }
    //GET SETs
    public void setCantidadComprada(int cantidadComprada){
        this.cantidadComprada = cantidadComprada;
    }
    public int getCantidadComprada(){
        return this.cantidadComprada;
    }
    //METODOS
    @Override
    public String toString(){
        return "PASAJE COMÚN" +
        "\n" + getOrigen() + "---------> " + getDestino() + 
        "\nFecha de compra: " + getFechaCompra() + 
        "\nNúmero de asiento: " + getNumeroAsiento() + 
        "\nCantidad de boletos comprados: " + getCantidadComprada() +
        "\nPrecio (unitario): " + getPrecio() +
        "\nTotal: " + (getCantidadComprada() * getPrecio()) + 
        "\n-------------------------------------------------------------";
    }
}
