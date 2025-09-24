public class PasajeEjecutivo extends Pasaje{
    private Fecha fechaReserva;
    private int cantidadReservada;
    public PasajeEjecutivo(){

    }
    public PasajeEjecutivo(int numeroAsiento, Fecha fechacompra, String origen,
    String destino, double precio, Fecha fechaReserva, int cantidadReservada){
        super(numeroAsiento, fechacompra, origen, destino, precio);
        this.fechaReserva = fechaReserva;
        this.cantidadReservada = cantidadReservada; 
    }
    //GET SET
    public void setFechaReserva(Fecha fechaReserva){
        this.fechaReserva = fechaReserva;
    }
    public Fecha getFechaReserva(){
        return this.fechaReserva;
    }
    public void setCantidadReservada(int cantidadReservada){
       tihs.cantidadReservada = cantidadReservada;
    }
    public int getCantidadReservada(){
        return this.cantidadReservada;
    }
    //METODOS
    @Override
    public String toString(){
        return "PASAJE EJECUTIVO" + 
        "\n" + getOrigen() + "---------> " + getDestino() + 
        "\nFecha de compra: " + getFechaCompra() + 
        "\nNúmero de asiento: " + getNumeroAsiento() + 
        "\nFecha de reserva: " + getFechaReserva() +
        "\nCantidad reservada: " + getCantidadReservada() +
        "\nPrecio (unitario): " + getPrecio() +
        "\nTotal: " + (getCantidadReservada() * getPrecio()) +
        "\n-------------------------------------------------------------";
    }
}
