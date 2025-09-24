public class ProductoFresco extends Producto{
    private String paisOrigen;
    //CONSTRUCTOR
    public ProductoFresco(){

    }
    public ProductoFresco(Fecha fechaCaducidad, int numeroLote, Fecha fechaEnvasado, String paisOrigen){
        super(fechaCaducidad, numeroLote, fechaEnvasado);
        this.paisOrigen = paisOrigen;
    }
    //GET SET
    public void setPaisOrigen(String paisOrigen){
        this.paisOrigen = paisOrigen;
    }
    public String getPaisOrigen(){
        return this.paisOrigen;
    }
    //METODOS
    @Override
    public String toString(){
        return "-------------------------------------------" + 
        "\nPRODUCTO FRESCO" +
        "\nNúmero de lote: " + getNumeroLote() +
        "\nFecha de Envasado: " + getFechaEnvasado() +
        "\nFecha de Caducidad: " + getFechaCaducidad() +
        "\nPaís de Origen: " + getPaisOrigen() +
        "\n-------------------------------------------";
    }
}
