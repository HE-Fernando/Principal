public class Pruebas {
    public static void main(String[] args) {
        Persona trabajadorPintura = new Persona("Fernando", "Hirt", "42002193");
        Persona clientePintura = new Persona("Esteban", "Ramirez", "14881818");
        Fecha fechaInicioPintura = new Fecha(16, 9, 2025);

        Persona trabajadorAlarma = new Persona("Joaquin", "Hirt", "12345678");
        Persona clienteAlarma = new Persona("Sara", "Ramirez", "87654321");
        Fecha fechaInicioAlarma = new Fecha(16, 9, 2025);

        ServicioPintura servicioPintura1 = new ServicioPintura(trabajadorPintura, fechaInicioPintura, clientePintura, 20, 5000);
        ServicioAlarma servicioAlarma1 = new ServicioAlarma(trabajadorAlarma, fechaInicioAlarma, clienteAlarma, 10);

        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.print(servicioPintura1);
        System.out.println("");
        System.out.println("");
        System.out.println("");
        System.out.print(servicioAlarma1);
    }
}
