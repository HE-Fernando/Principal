/*Referencia (Titulo, tipo(película/videojuego), precio alquiler, plazo alquiler (días),
alquilado (si/no), Género (acción, fantástica, drama, aventuras, infantil), año, director, interpretes.*/
public class Pelicula extends Multimedia {
    private int año;
    private String director;
    private int cantidadInterpretes;
    private String[] interpretes;
    
    public Pelicula(){

    }
    public Pelicula(String titulo, String tipo, double precio,
    int plazoAlquiler, String alquilado, String genero, int año,
    String director,int cantidadInterpretes, String interpretes[]){
        super(titulo, tipo, precio, plazoAlquiler, alquilado, genero);
        this.año = año;
        this.director = director;
        this.cantidadInterpretes = cantidadInterpretes;
        this.interpretes = new String[cantidadInterpretes];
        this.interpretes = interpretes;
    }
    public void setAño(int año){
        this.año = año;
    }
    public int getAño(){
        return this.año;
    }
    public void setDirector(String director){
        this.director = director;
    }
    public String getDirector(){
        return this.director;
    }
    public void setCantidadInterpretes(int cantidadInterpretes){
        this.cantidadInterpretes = cantidadInterpretes;
    }
    public int getCantidadInterpretes(){
        return this.cantidadInterpretes;
    }
    public void setInterpretes(String interpretes[]){
        this.interpretes = interpretes;
    }
    public void getInterpretes(){
        for (int i = 0; i < this.cantidadInterpretes; i++) {
            System.out.println(this.interpretes[i]);           
        }
    }
    @Override
    public String toString(){
        return "Titulo: " + getTitulo() + "\nTipo: " + getTipo() + "\nPrecio: " + getPrecio() + "\nPlazo de Alquiler: "
        + getPlazoAlquiler() + "\nAlquilado: " + getAlquilado() + "\nGenero: " + getGenero() + "\nAño: " + 
        this.año + "\nDirector: " + this.director + "\nInterpretes:\n";
    }
}
