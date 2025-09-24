import java.util.Scanner;
public class PasajesMain {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        System.out.print("\033[H\033[2J");
        System.out.flush();
        //PRUEBA PASAJE COMUN
        int numeroAsientoComun = 15;
        Fecha fechaCompraComun = new Fecha(18, 9, 2025);
        String origenComun = "Puerto Rico";
        String destinoComun = "Posadas";
        double precioComun = 9999.99;
        System.out.print("Ingrese la cantidad de Pasaje Comun a comprar: ");
        int cantidadCompradaComun = entrada.nextInt();
        while(cantidadCompradaComun > 4 || cantidadCompradaComun < 1){
            System.out.println("La cantidad ingresada es incorrecta, (1 - 4)");
            System.out.print("Ingrese la cantidad de Pasaje Comun a comprar: ");
            cantidadCompradaComun = entrada.nextInt();
        }
        PasajeComun pasajeComun1 = new PasajeComun(numeroAsientoComun, fechaCompraComun, origenComun, destinoComun, precioComun, cantidadCompradaComun);
        System.out.println(pasajeComun1);

        //PRUEBA PASAJE EJECUTIVO
        int numeroAsientoEjecutivo = 13;
        Fecha fechaCompraEjecutivo = new Fecha(18, 9, 2025);
        String origenEjecutivo = "Posadas";
        String destinoEjecutivo = "Puerto Rico";
        double precioEjecutivo = 19999.99;
        Fecha fechaReservaEjecutivo = new Fecha(23, 9, 2025);
        System.out.print("Ingrese la cantidad de Pasaje Ejecutivo a reservar: ");
        int cantidadCompradaEjecutivo = entrada.nextInt();
        while(cantidadCompradaEjecutivo > 5 || cantidadCompradaEjecutivo < 1){
            System.out.println("La cantidad ingresada es incorrecta, (1 - 5)");
            System.out.print("Ingrese la cantidad de Pasaje Ejecutivo a reservar: ");
            cantidadCompradaEjecutivo = entrada.nextInt();
        }
        PasajeEjecutivo pasajeEjecutivo1 = new PasajeEjecutivo(numeroAsientoEjecutivo, fechaCompraEjecutivo, origenEjecutivo,
        destinoEjecutivo, precioEjecutivo, fechaReservaEjecutivo, cantidadCompradaEjecutivo);
        System.out.println(pasajeEjecutivo1);

        //PRUEBA PASAJE DOBLE
        int numeroAsientoDoble = 25;
        Fecha fechaCompraDoble = new Fecha(18, 9, 2025);
        String origenDoble = "Santa Ana";
        String destinoDoble = "Puerto Rico";
        double precioDoble = 15000;
        Fecha fechaIdaDoble = new Fecha(23, 9, 2025);
        Fecha fechaVueltaDoble = new Fecha(25, 9, 2025);
        PasajeDoble pasajeDoble1 = new PasajeDoble(numeroAsientoDoble, fechaCompraDoble, origenDoble, destinoDoble, precioDoble, fechaIdaDoble, fechaVueltaDoble);
        System.out.println(pasajeDoble1);
    }
}
