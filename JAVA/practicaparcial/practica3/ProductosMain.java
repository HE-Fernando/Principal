public class ProductosMain {
    public static void main(String[] args) {
        System.out.print("\033[H\033[2J");
        //PRUEBA PRODUCTO (NO ESPECIFICA)
        Fecha envasado1 = new Fecha(23, 9, 2025);
        int lote1 = 01;
        Fecha caducidad1 = new Fecha(23, 10, 2025);
        Producto producto1 = new Producto(caducidad1, lote1, envasado1);
        System.out.println(producto1);
        System.out.println("");
        System.out.println("");
        //PRUEBA PRODUCTO FRESCO
        Fecha envasado2 = new Fecha(24, 9, 2025);
        int lote2 = 02;
        Fecha caducidad2 = new Fecha(24,10, 2025);
        String paisOrigen1 = "Argentina";
        ProductoFresco producto2 = new ProductoFresco(caducidad2, lote2, envasado2, paisOrigen1);
        System.out.println(producto2);
        System.out.println("");
        System.out.println("");
        //PRUEBA PRODUCTO REFRIGERADO
        Fecha envasado3 = new Fecha(25, 9, 2025);
        int lote3 = 03;
        Fecha caducidad3 = new Fecha(25, 10, 2025);
        String organismoSupervisor1 = "Supervisor 01";
        ProductoRefrigerado producto3 = new ProductoRefrigerado(caducidad3, lote3, envasado3, organismoSupervisor1);
        System.out.println(producto3);
        System.out.println("");
        System.out.println("");
        //PRUEBA PRODUCTO CONGELADO
        Fecha envasado4 = new Fecha(26, 9, 2025);
        int lote4 = 04;
        Fecha caducidad4 = new Fecha(26, 10, 2025);
        double temperaturaRecomendada = -18.5;
        ProductoCongelado producto4 = new ProductoCongelado(caducidad4, lote4, envasado4, temperaturaRecomendada);
        System.out.println(producto4);
    }
}
