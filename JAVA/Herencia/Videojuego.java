public class Videojuego extends Multimedia{
    private String plataforma;

    public Videojuego(){

    }
    public Videojuego(String titulo, String tipo, double precio,
    int plazoAlquiler, String alquilado, String genero, String plataforma){
        super(titulo, tipo, precio, plazoAlquiler, alquilado, genero);
        this.plataforma = plataforma;
    }
    public void setPataforma(String plataforma){
        this.plataforma = plataforma;
    }
    public String getPlataforma(){
        return this.plataforma;
    }
    @Override
    public String toString(){
        return "Titulo: " + getTitulo() + "\nTipo: " + getTipo() + "\nPrecio: " + getPrecio() + "\nPlazo de Alquiler: "
        + getPlazoAlquiler() + "\nAlquilado: " + getAlquilado() + "\nGenero: " + getGenero() + "\nPlataforma: " + this.plataforma;
    }
}
