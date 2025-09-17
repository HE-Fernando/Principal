public class Multimedia {
    private String titulo;
    private String tipo;
    private double precio;
    private int plazoAlquiler;
    private String alquilado;
    private String genero;

    public Multimedia(){

    }
    public Multimedia(String titulo, String tipo, double precio,
    int plazoAlquiler, String alquilado, String genero){
        this.titulo = titulo;
        this.tipo = tipo;
        this.precio = precio;
        this.plazoAlquiler = plazoAlquiler;
        this.alquilado = alquilado;
        this.genero = genero;
    }
    public void setTitulo(String titulo){
        this.titulo = titulo;
    }
    public String getTitulo(){
        return this.titulo;
    }
    public void setTipo(String tipo){
        this.tipo = tipo;
    }
    public String getTipo(){
        return this.tipo;
    }
    public void setPrecio(double precio){
        this.precio = precio;
    }
    public double getPrecio(){
        return this.precio;
    }
    public void setPlazoAlquiler(int plazoAlquiler){
        this.plazoAlquiler = plazoAlquiler;
    }
    public int getPlazoAlquiler(){
        return this.plazoAlquiler;
    }
    public void setAlquilado(String alquilado){
        this.alquilado = alquilado;
    }
    public String getAlquilado(){
        return this.alquilado;
    }
    public void setGenero(String genero){
        this.genero = genero;
    }
    public String getGenero(){
        return this.genero;
    }
    public String toString(){
        return "Titulo: " + this.titulo + "\nTipo: " + this.tipo + "\nPrecio: " + this.precio + "\nPlazo de Alquiler: "
        + this.plazoAlquiler + "\nAlquilado: " + this.alquilado + "\nGenero: " + this.genero;
    }

}
