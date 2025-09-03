public class MainHerencia {
    public static void main(String[] args) {
        Libro libro1 = new Libro("El Alquimista", "1988", 25500, 300, "Planeta");
        Disco disco1 = new Disco("Cantante", "2025", 25999, "300", 5);
        libro1.mostrarDatos();
        disco1.mostrarDatos();
    }
}
