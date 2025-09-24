public class ProductoCongelado extends Producto{
    private double temperaturaRecomendada;
    //CONSTRUCTORES
    public ProductoCongelado(){

    }
    public ProductoCongelado(Fecha fechaCaducidad, int numeroLote, Fecha fechaEnvasado, double temperaturaRecomendada){
        super(fechaCaducidad, numeroLote, fechaEnvasado);
        this.temperaturaRecomendada = temperaturaRecomendada;
    }
    //GET SET
    public void setTemperaturaRecomendada(double temperaturaRecomendada){
        this.temperaturaRecomendada = temperaturaRecomendada;
    }
    public double getTemperaturaRecomendada(){
        return this.temperaturaRecomendada;
    }
    //METODOS
    @Override
    public String toString(){
        return "-------------------------------------------" + 
        "\nPRODUCTO CONGELADO" +
        "\nNúmero de lote: " + getNumeroLote() +
        "\nFecha de Envasado: " + getFechaEnvasado() +
        "\nFecha de Caducidad: " + getFechaCaducidad() +
        "\nTemperatura de Congelación Recomendada: " + getTemperaturaRecomendada() +
        "\n-------------------------------------------";
    }
}
