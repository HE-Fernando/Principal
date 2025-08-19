//Se cuenta con una matriz 6x7 vacia
//se lee desde el teclado la fecha del primer
//domingo del mes y el MES. Con estos datos
//realice un diagrama de flujo capaz de crear 
//un almanaque del mes ingresado.
import java.util.Scanner;
public class Arreglos2 {
    public static void main(String[] args) {
        Scanner entrada = new Scanner(System.in);
        int [][] matriz = new int[6][7];
        System.out.print("\033[H\033[2J");
        System.out.flush();
        System.out.println("Ingrese el año (4 digitos): ");
        int anio = entrada.nextInt();
        while (anio < 1000 || anio > 9999) {
            System.out.println("Año invalido, por favor ingrese un año de 4 digitos: ");
            anio = entrada.nextInt();
        }
        boolean esBisiesto;
        //CALCULO DE AÑO BISIESTO
        if ((anio % 4 == 0 && anio % 100 != 0) || (anio % 400 == 0)) {
            esBisiesto = true;
            System.out.println("Año bisiesto");
            System.out.println();
        } else {
            System.out.println("Año no bisiesto");
            System.out.println();
            esBisiesto = false;
        }
        System.out.println("Ingrese el primer domingo del mes (1-7): ");
        int primerDomingo = entrada.nextInt();
        while (primerDomingo > 7  || primerDomingo < 1) {
            System.out.println("Se debe ingresar el primer domingo del mes (1-7): ");
            primerDomingo = entrada.nextInt();
        }
        System.out.println("Ingrese el mes (1-12): ");
        int mes = entrada.nextInt();
        while (mes <=0 || mes > 12) {
            System.out.println("Mes invalido, por favor ingrese un mes entre 1 y 12: ");
            mes = entrada.nextInt();
        }
        System.out.print("\033[H\033[2J");
        System.out.flush();

        //MESES CON 31 DIAS
        if (mes == 1 || mes == 3 || mes == 5 || mes == 7
            || mes == 8 || mes == 10 || mes == 12) {
            int asignador = 1;
            //EN CASO DE QUE EL PRIMER DOMINGO SEA 1
            if (primerDomingo == 1) {
                for (int i = 0; i < 6; i++) {
                    for (int k = 0; k < 7; k++) {
                        if (asignador <= 31) {
                            matriz[i][k] = asignador;
                            asignador = asignador + 1;
                        } else {
                            matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                        }
                    }
                }
            }else {
                //EN CASO DE QUE EL PRIMER DOMINGO NO SEA 1
                asignador = primerDomingo;
                for (int i = 1; i < 6; i++) {
                    for (int k = 0; k < 7; k++) {
                        if (asignador <= 31) {
                            matriz[i][k] = asignador;
                            asignador = asignador + 1;
                        } else {
                            matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                        }
                        
                    }
                }
                asignador = primerDomingo;
                for (int k = 6; k >= 0; k--) {
                    if (asignador > 0) {
                        matriz[0][k] = asignador - 1;
                        asignador = asignador - 1;
                    } else {
                        matriz[0][k] = 0; // Rellenar con 0 si no hay más días
                    }
                }
            }
        } 
        //MESES CON 30 DIAS
        else if (mes == 4 || mes == 6 || mes == 9 || mes == 11) {
                    int asignador = 1;
            //EN CASO DE QUE EL PRIMER DOMINGO SEA 1
            if (primerDomingo == 1) {
                for (int i = 0; i < 6; i++) {
                    for (int k = 0; k < 7; k++) {
                        if (asignador <= 30) {
                            matriz[i][k] = asignador;
                            asignador = asignador + 1;
                        } else {
                            matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                        }
                    }
                }
            }else {
                //EN CASO DE QUE EL PRIMER DOMINGO NO SEA 1
                asignador = primerDomingo;
                for (int i = 1; i < 6; i++) {
                    for (int k = 0; k < 7; k++) {
                        if (asignador <= 30) {
                            matriz[i][k] = asignador;
                            asignador = asignador + 1;
                        } else {
                            matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                        }
                        
                    }
                }
                asignador = primerDomingo;
                for (int k = 6; k >= 0; k--) {
                    if (asignador > 0) {
                        matriz[0][k] = asignador - 1;
                        asignador = asignador - 1;
                    } else {
                        matriz[0][k] = 0; // Rellenar con 0 si no hay más días
                    }
                }
            }

        }
        //FEBRERO BISIESTO / NO BISIESTO
        else if (mes == 2) {
            //BISIESTO
            if (esBisiesto == true) {
                int asignador = 1;
                //EN CASO DE QUE EL PRIMER DOMINGO SEA 1
                if (primerDomingo == 1) {
                    for (int i = 0; i < 6; i++) {
                        for (int k = 0; k < 7; k++) {
                            if (asignador <= 29) {
                                matriz[i][k] = asignador;
                                asignador = asignador + 1;
                            } else {
                                matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                            }
                        }
                    }
                } else {
                    //EN CASO DE QUE EL PRIMER DOMINGO NO SEA 1
                    asignador = primerDomingo;
                    for (int i = 1; i < 6; i++) {
                        for (int k = 0; k < 7; k++) {
                            if (asignador <= 29) {
                                matriz[i][k] = asignador;
                                asignador = asignador + 1;
                            } else {
                                matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                            }
                        
                        }
                    }
                    asignador = primerDomingo;
                    for (int k = 6; k >= 0; k--) {
                        if (asignador > 0) {
                        matriz[0][k] = asignador - 1;
                        asignador = asignador - 1;
                    } else {
                        matriz[0][k] = 0; // Rellenar con 0 si no hay más días
                    }
                    }
                }
            } else { //NO BISIESTO
                int asignador = 1;
                //EN CASO DE QUE EL PRIMER DOMINGO SEA 1
                if (primerDomingo == 1) {
                    for (int i = 0; i < 6; i++) {
                        for (int k = 0; k < 7; k++) {
                            if (asignador <= 28) {
                                matriz[i][k] = asignador;
                                asignador = asignador + 1;
                            } else {
                                matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                            }
                        }
                    }
                } else {
                    //EN CASO DE QUE EL PRIMER DOMINGO NO SEA 1
                    asignador = primerDomingo;
                    for (int i = 1; i < 6; i++) {
                        for (int k = 0; k < 7; k++) {
                            if (asignador <= 28) {
                                matriz[i][k] = asignador;
                                asignador = asignador + 1;
                            } else {
                                matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                            }
                        
                        }
                    }
                    asignador = primerDomingo;
                    for (int k = 6; k >= 0; k--) {
                        if (asignador > 0) {
                        matriz[0][k] = asignador - 1;
                        asignador = asignador - 1;
                    } else {
                        matriz[0][k] = 0; // Rellenar con 0 si no hay más días
                    }
                    }
                }
            }
        } 
        //Imprimir la matriz
        System.out.print("\033[H\033[2J");
        System.out.flush();
        for (int i = 0; i < 6; i++) {
            for (int k = 0; k < 7; k++) {
                System.out.printf("%4d", matriz[i][k]);
            }
            System.out.println();
        }
    }
}

/* SIN TENER EN CUENTA SI ES BISIESTO O NO / SIN TENER EN CUENTA MESES DE 30 DIAS
        int asignador = 1;
        //EN CASO DE QUE EL PRIMER DOMINGO SEA 1
        if (primerDomingo == 1) {
            for (int i = 0; i < 6; i++) {
                for (int k = 0; k < 7; k++) {
                    if (asignador <= 31) {
                        matriz[i][k] = asignador;
                        asignador = asignador + 1;
                    } else {
                        matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                    }
                }
            }
        }else {
            //EN CASO DE QUE EL PRIMER DOMINGO NO SEA 1
            asignador = primerDomingo;
            for (int i = 1; i < 6; i++) {
                for (int k = 0; k < 7; k++) {
                    if (asignador <= 31) {
                        matriz[i][k] = asignador;
                        asignador = asignador + 1;
                    } else {
                        matriz[i][k] = 0; // Rellenar con 0 si no hay más días
                    }
                    
                }
            }
            asignador = primerDomingo;
            for (int k = 6; k >= 0; k--) {
                if (asignador > 0) {
                    matriz[0][k] = asignador - 1;
                    asignador = asignador - 1;
                } else {
                    matriz[0][k] = 0; // Rellenar con 0 si no hay más días
                }
            }
        }
        //Imprimir la matriz
            System.out.print("\033[H\033[2J");
            System.out.flush();
            for (int i = 0; i < 6; i++) {
                for (int k = 0; k < 7; k++) {
                    System.out.printf("%4d", matriz[i][k]);
                }
                System.out.println();
            }
        */
