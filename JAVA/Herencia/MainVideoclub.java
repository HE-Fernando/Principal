import java.util.Scanner;
public class MainVideoclub {
    public static void main(String[] args) {
        System.out.print("\033[H\033[2J");
        Scanner entrada = new Scanner (System.in);
        Pelicula[] listadoPeliculas = new Pelicula[10];
        Videojuego[] listadoVideojuegos = new Videojuego[10];
        Cliente[] listaClientes = new Cliente[50];
        int contadorPeliculas = 0;
        int contadorVideojuegos = 0;
        boolean peliculaVacio = true;
        boolean videojuegoVacio = true;
        int nroCliente = 1;
        /*GUARDAR PELICULAS
        listadoPeliculas[indice] = objeto;
        listadoVideojuegos[indice] = objeto;
         */
        while (true) { 
            System.out.println("1._Lista de productos.");
            System.out.println("2._Añadir producto,");
            System.out.println("3._Lista clientes.");
            System.out.println("4._Añadir cliente.");
            System.out.println("5._Alquiler producto.");
            System.out.print("Opcion: ");
            int opcion = entrada.nextInt();
            switch (opcion) {
                case 1: {//LISTA DE PRODUCTOS
                    System.out.print("\033[H\033[2J");
                    if(peliculaVacio){
                        System.out.println("No existen peliculas registrados");
                        System.out.println("--------------------------------");
                    }else{
                        System.out.print("\033[H\033[2J");
                        System.out.println("Peliculas");
                        int contadorAuxiliar = 0;
                        while(listadoPeliculas[contadorAuxiliar] != null){
                            System.out.println(listadoPeliculas[contadorAuxiliar]);
                            listadoPeliculas[contadorAuxiliar].getInterpretes();
                            contadorAuxiliar++;
                            System.out.println("");
                        }
                    }
                    if(videojuegoVacio){
                        System.out.println("No existen videojuegos registrados");
                        System.out.println("--------------------------------");
                    }else{
                        System.out.println("");
                        System.out.println("Videojuegos");
                        int contadorAuxiliar = 0;
                        while(listadoVideojuegos[contadorAuxiliar] != null){
                            System.out.println(listadoVideojuegos[contadorAuxiliar]);
                            contadorAuxiliar++;
                            System.out.println("");
                        }
                    }

                }
                break;
                case 2:{//AÑADIR PRODUCTO
                    System.out.print("\033[H\033[2J");
                    System.out.println("Agregar producto");
                    System.out.println("1._Pelicula");
                    System.out.println("2._Videojuego");
                    int opcionProducto = entrada.nextInt();
                    while(opcionProducto != 1 && opcionProducto != 2){
                        System.out.print("\033[H\033[2J");
                        System.out.println("¡Opcion incorrecta!");
                        System.out.println("Agregar producto");
                        System.out.println("1._Pelicula");
                        System.out.println("2._Videojuego");
                        opcionProducto = entrada.nextInt();
                    }
                    if(opcionProducto == 1){
                        //AGREGAR PELICULA
                        System.out.print("\033[H\033[2J");
                        System.out.println("Añadiendo Pelicula");
                        String auxTitulo = entrada.nextLine();
                        System.out.print("Titulo: ");
                        auxTitulo = entrada.nextLine();
                        System.out.print("Tipo: Pelicula\n");
                        String auxTipo = "Pelicula";
                        System.out.print("Precio: ");
                        double auxPrecio = entrada.nextDouble();
                        System.out.print("Plazo Alquiler (dias): ");
                        int auxPlazo = entrada.nextInt();
                        System.out.print("Alquilado: ");
                        String auxAlquilado = entrada.nextLine();
                        auxAlquilado = entrada.nextLine();
                        System.out.print("Genero: ");
                        String auxGenero = entrada.nextLine();
                        System.out.print("Año: ");
                        int auxAño = entrada.nextInt();
                        System.out.print("Director: ");
                        String auxDirector = entrada.nextLine();
                        auxDirector = entrada.nextLine();
                        System.out.print("Cantidad de Interpretes: ");
                        int auxCantidadInterpretes = entrada.nextInt();
                        String[] interpretes = new String[auxCantidadInterpretes];
                        String buffer = entrada.nextLine(); 
                        for (int k = 0;k < auxCantidadInterpretes;k++){
                            
                            System.out.print("Interprete " + k + ":");
                            interpretes[k] = entrada.nextLine();
                            //interpretes[k] = entrada.nextLine();
                        }
                        Pelicula pelicula1 = new Pelicula(auxTitulo, auxTipo, auxPrecio, auxPlazo, auxAlquilado, auxGenero, auxAño, auxDirector, auxCantidadInterpretes, interpretes);
                        listadoPeliculas[contadorPeliculas] = pelicula1;
                        contadorPeliculas++;
                        peliculaVacio = false;
                        System.out.print("\033[H\033[2J");
                    }else if(opcionProducto == 2){
                        //AGREGAR VIDEOJUEGO
                        String auxTitulo = entrada.nextLine();
                        System.out.print("\033[H\033[2J");
                        System.out.print("Titulo: ");
                        auxTitulo = entrada.nextLine();
                        System.out.print("Tipo: Videojuego\n");
                        String auxTipo = "Videojuego";
                        System.out.print("Precio: ");
                        double auxPrecio = entrada.nextDouble();
                        System.out.print("Plazo Alquiler: ");
                        int auxPlazo = entrada.nextInt();
                        System.out.print("Alquilado: ");
                        String auxAlquilado = entrada.nextLine();
                        auxAlquilado = entrada.nextLine();
                        System.out.print("Genero: ");
                        String auxGenero = entrada.nextLine();
                        System.out.print("Plataforma: ");
                        String auxPlataforma = entrada.nextLine();
                        Videojuego videojuego1 = new Videojuego(auxTitulo, auxTipo, auxPrecio, auxPlazo, auxAlquilado, auxGenero, auxPlataforma);
                        listadoVideojuegos[contadorVideojuegos] = videojuego1;
                        contadorVideojuegos++;
                        videojuegoVacio = false;
                        System.out.print("\033[H\033[2J");
                    }
                }
                break; 
                case 3:{//LISTA DE CLIENTES
                    System.out.print("\033[H\033[2J");
                    if (listaClientes[0] == null){
                        System.out.println("No existen clientes registrados");
                        System.out.println("--------------------------------");
                    }else{
                        System.out.println("Lista de clientes");
                        for (int j = 0;j < 50;j++){
                            System.out.println("Cliente N°" + (j+1));
                            System.out.println(listaClientes[j]);
                            System.out.println("");
                        }
                    }
                } 
                break;
                case 4:{//AÑADIR CLIENTE
                    System.out.print("\033[H\033[2J");
                    //NOMBRE DIRECCION TELEFONO
                    System.out.print("Nombre: ");
                    String auxNombre = entrada.nextLine();
                    System.out.println("");
                    System.out.print("Dirección: ");
                    String auxDireccion = entrada.nextLine();
                    System.out.println("");
                    System.out.print("Teléfono: ");
                    String auxTelefono = entrada.nextLine();
                    Cliente cliente1 = new Cliente(nroCliente, auxNombre, auxDireccion, auxTelefono);
                    listaClientes[nroCliente - 1] = cliente1;
                    nroCliente++;
                }
                break; 
                case 5:{//ALQUILAR PRODUCTO
                    Pelicula auxiliarPelicula = new Pelicula();
                    Videojuego auxiliarVideojuego = new Videojuego();
                    Cliente auxiliarCliente = new Cliente();
                    System.out.print("\033[H\033[2J");
                    if (listaClientes[0] == null){
                        System.out.println("No existen clientes registrados");
                        System.out.println("Primeramente debe añadir un cliente.");
                    }else{
                        System.out.println("Lista de clientes");
                        for (int j = 0;j < 50;j++){
                            System.out.println("Cliente N°" + (j+1));
                            System.out.println(listaClientes[j]);
                            System.out.println("");
                        }
                        System.out.println("Numero de cliente seleccionado:");
                        int nroClienteSeleccionado = entrada.nextInt();
                        for (int k=0;k < 50;k++){
                            if(listaClientes[k].getNumeroCliente() == nroClienteSeleccionado){
                                auxiliarCliente = listaClientes[k]; //CLIENTE QUE ALQUILA
                            }else{
                                System.out.println("El cliente ingresado no se encuentra en la lista.");
                            }
                        }
                        System.out.print("\033[H\033[2J");
                        System.out.println("1._Pelicula");
                        System.out.println("2._Videojuego");
                        System.out.print("Opcion: ");
                        int auxiliarSeleccion = entrada.nextInt();
                        while(auxiliarSeleccion != 1 && auxiliarSeleccion != 2){
                            System.out.print("\033[H\033[2J");
                            System.out.println("Opcion incorrecta, reingrese");
                            System.out.println("1._Pelicula");
                            System.out.println("2._Videojuego");
                            System.out.print("Opcion: ");
                            auxiliarSeleccion = entrada.nextInt();
                        }
                        if(auxiliarSeleccion == 1){
                            //PELICULA
                            System.out.print("\033[H\033[2J");
                            if(peliculaVacio){
                                System.out.println("No existen peliculas registrados");
                                System.out.println("");
                            }else{
                                System.out.print("\033[H\033[2J");
                                System.out.println("Peliculas");
                                int contadorAuxiliar = 0;
                                while(listadoPeliculas[contadorAuxiliar] != null){
                                    System.out.println("Pelicula N°: " + contadorAuxiliar);
                                    System.out.println(listadoPeliculas[contadorAuxiliar]);
                                    listadoPeliculas[contadorAuxiliar].getInterpretes();
                                    contadorAuxiliar++;
                                }
                            }
                            System.out.print("Ingrese el numero de pelicula a alquilar: ");
                            int nroPeliculaAuxiliar = entrada.nextInt();
                            auxiliarPelicula = listadoPeliculas[nroPeliculaAuxiliar]; //PELICULA A ALQUILAR
                            System.out.println(auxiliarPelicula);
                            auxiliarPelicula.getInterpretes();
                        }else{
                            //VIDEOJUEGO
                            if(videojuegoVacio){
                                System.out.println("No existen videojuegos registrados");
                                System.out.println("");
                            }else{
                                System.out.println("");
                                System.out.println("Videojuegos");
                                int contadorAuxiliar = 0;
                                while(listadoVideojuegos[contadorAuxiliar] != null){
                                    System.out.println("Videojuego N°: " + contadorAuxiliar);
                                    System.out.println(listadoVideojuegos[contadorAuxiliar]);
                                    System.out.println("");
                                    contadorAuxiliar++;
                                }
                            }
                            System.out.println("Ingrese el numero de videojuego a alquilar: ");
                            int nroVideojuegoAuxiliar = entrada.nextInt();
                            auxiliarVideojuego = listadoVideojuegos[nroVideojuegoAuxiliar]; //VIDEOJUEGO A ALQUILAR
                            System.out.println(auxiliarVideojuego);
                        }
                        System.out.print("\033[H\033[2J");
                        System.out.println("Ingrese la fecha de alquilar");
                        System.out.print("Dia: ");
                        int diaAux = entrada.nextInt();
                        System.out.print("Mes: ");
                        int mesAux = entrada.nextInt();
                        System.out.print("Año: ");
                        int añoAux = entrada.nextInt();
                        Fecha fechaAlquiler = new Fecha(diaAux, mesAux, añoAux); //FECHA DE INICIO DE ALQUILER
                        System.out.print("\033[H\033[2J");
                        if(auxiliarSeleccion == 1){
                            System.out.println("Pelicula");
                            System.out.println(auxiliarPelicula);
                        }else{
                            System.out.println("Videojuego");
                            System.out.println(auxiliarVideojuego);
                        }
                        System.out.println("Ingrese la fecha de devolucion (Ingresar la fecha de devolucion segun el plazo de alquiler)");
                        System.out.print("Dia: ");
                        int diaAux2 = entrada.nextInt();
                        System.out.print("Mes: ");
                        int mesAux2 = entrada.nextInt();
                        System.out.print("Año: ");
                        int añoAux2 = entrada.nextInt();
                        Fecha fechaDevolucion = new Fecha(diaAux2, mesAux2, añoAux2); //FECHA DE DEVOLUCION
                        System.out.println("Registro creado con exito.");
                        if(auxiliarSeleccion == 1){
                            //PELICULA
                            RegistrosAlquiler registroPelicula1 = new RegistrosAlquiler(auxiliarCliente, auxiliarPelicula, fechaAlquiler, fechaDevolucion);
                            System.out.print("\033[H\033[2J");
                            System.out.println(registroPelicula1);
                        }else{
                            //VIDEOJUEGO
                            RegistrosAlquiler registroVideojuego1 = new RegistrosAlquiler(auxiliarCliente, auxiliarVideojuego, fechaAlquiler, fechaDevolucion);
                            System.out.print("\033[H\033[2J");
                            System.out.println(registroVideojuego1);
                        }
                    }
                }
                break;
                default:

                    break;
            }
        }
    }
}
