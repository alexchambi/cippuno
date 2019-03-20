menutop = new Vue({
    el: '#menutop',
    data: {
        menus: [
            {nombre: 'Home', link: 'index.html'},
            {nombre: 'Contacto', link: 'contacto.html'},
            {nombre: 'Mapa del Sitio', link: 'mapa.html'}
        ],
        redes: [
            {nombre: 'Facebook', icon: 'fa fa-facebook', link: 'facebook.html'},
            {nombre: 'Twitter', icon: 'fa fa-twitter', link: 'contacto.html'},
            {nombre: 'Youtube', icon: 'fa fa-youtube', link: 'mapa.html'}
        ]
    }
});

menuprincipal = new Vue({
    el: '#menuprincipal',
    data: {
        logoimagen: 'img/logoindie.png',
        menus:[
            {nombre: 'Inicio', link: 'index.html'}
        ],
        capitulos1: [
            {nombre: 'Agrícolas', link: 'index.html'},
            {nombre: 'Agroindustriales', link: 'contacto.html'},
            {nombre: 'Agronomos y Zootecnistas', link: 'mapa.html'},
            {nombre: 'Civiles', link: 'mapa.html'},
            {nombre: 'De Minas', link: 'mapa.html'},
            {nombre: 'De Sistemas', link: 'mapa.html'},
            {nombre: 'Economistas', link: 'mapa.html'},
            {nombre: 'Electricistas', link: 'mapa.html'},
        ],
        capitulos2: [
            {nombre: 'Electronicos', link: 'mapa.html'},
            {nombre: 'Estadisticos', link: 'mapa.html'},
            {nombre: 'Geólogos', link: 'mapa.html'},
            {nombre: 'Mecánicos y Electricistas', link: 'mapa.html'},
            {nombre: 'Metalurgistas', link: 'mapa.html'},
            {nombre: 'Pesqueros', link: 'mapa.html'},
            {nombre: 'Químicos', link: 'mapa.html'},
            {nombre: 'Topografos y Agrimensura', link: 'mapa.html'}
        ],
        representantes:[
            {nombre: 'Consejo Departamental', link: 'index.html'},
            {nombre: 'Asamblea Departamental', link: 'contacto.html'},
            {nombre: 'Decanos Pasados', link: 'mapa.html'}
        ],
        tramites:[
            {nombre: 'Certificado de Habilidad', link: 'index.html'},
            {nombre: 'Cambio de Sede', link: 'contacto.html'},
            {nombre: 'Duplicado de Carnet', link: 'mapa.html'},
            {nombre: 'Recarnetización', link: 'mapa.html'},
            {nombre: 'Pago de Aportaciones', link: 'mapa.html'} 
        ],
        somos:[
            {nombre: 'Mision y Vision', link: 'index.html'},
            {nombre: 'Reseña Historica', link: 'contacto.html'},
            {nombre: 'Horario de Atencion', link: 'mapa.html'}
        ]
    }
});

menucarousel = new Vue({
    el: '#menucarousel',
    data: {
        menus: [
            {nombre: 'Colegiacion', icon: 'fa fa-graduation-cap', link: 'colegiatura.php'},
            {nombre: 'Buscar Colegiado', icon: 'fa fa-search', link: 'buscarcolegiado.php'},
            {nombre: 'Tramite', icon: 'fa fa-book', link: 'tramite.php'},
            {nombre: 'Institucionales', icon: 'fa fa-university', link: 'institucionales.php'}
        ],
    }
});

mostrarTramite = new Vue({
    el:"#tramite",
    data:{
        mostrar:true
    }
});

mostrarBusqueda = new Vue({
    el:"#busqueda",
    data:{
        mostrar:true
    }
});
var abrir = new Vue({
    el: '#app',
    data: {
        capitulos:[
            {nombre:'Ingeniería Agrícola',numero:1, imagen:'img/logos/agricolas.png'},
            {nombre:'Ingeniería Agroindustrial',numero:2, imagen:'img/logos/agroindustriales.png'},
            {nombre:'Ingeniería Agronómica y Zooctecnia',numero:3, imagen:'img/logos/agronomos.png'},
            {nombre:'Ingeniería Civil',numero:4, imagen:'img/logos/civiles.png'},
            {nombre:'Ingeniería De Minas',numero:5, imagen:'img/logos/minas.png'},
            {nombre:'Ingeniería De Sistemas',numero:6, imagen:'img/logos/sistemas.png'},
            {nombre:'Ingeniería Económica',numero:7, imagen:'img/logos/economistas.png'},
            {nombre:'Ingeniería Eléctrica',numero:8, imagen:'img/logos/electricistas.png'},
            {nombre:'Ingeniería Electrónica',numero:9, imagen:'img/logos/electronicos.png'},
            {nombre:'Ingeniería Estadística',numero:10, imagen:'img/logos/estadisticos.png'},
            {nombre:'Ingeniería Geológica',numero:11, imagen:'img/logos/geologos.png'},
            {nombre:'Ingeniería Mecánica Eléctrica',numero:12, imagen:'img/logos/mecanicos.png'},
            {nombre:'Ingeniería Metalúrgica',numero:13, imagen:'img/logos/metalurgistas.png'},
            {nombre:'Ingeniería Pesquera',numero:14, imagen:'img/logos/pesqueros.png'},
            {nombre:'Ingeniería Química',numero:15, imagen:'img/logos/quimicos.png'},
            {nombre:'Ingeniería Topográfica y Agrimensura',numero:16, imagen:'img/logos/topografos.png'},
        ],
        dato: 0,
        activarcapitulos: 1 
    },
});

asambleistas = new Vue({
    el: '#asambleistas',
    data: {
        asambleista: [
            {nombre: 'Edgar Holguin Holguín', regcip: '58478'},
            {nombre: 'Rubén G. Apaza Cruz', regcip: '79196'},
            {nombre: 'Daniel Coyla Sánchez', regcip: '74409'},
            {nombre: 'Antolín Apaza Quispe', regcip: '88125'},
            {nombre: 'Henry Pizarro Viveros', regcip: '93299'},
            {nombre: 'Marco A. Martínez Olazábal', regcip: '74717'},
            {nombre: 'Nicomedes Quispe Mozo', regcip: '81000'},
            {nombre: 'Eulogio Rosas Zanabria Huisal', regcip: '10523'},
            {nombre: 'María Rodriguez Melo', regcip: '27676'},
            {nombre: 'Odelon Quispe Mamani', regcip: '65106'},
            {nombre: 'Braulio G. Chura Vilcanqui', regcip: '78416'},
            {nombre: 'Vilma Sarmiento Mamani', regcip: '63450'},
            {nombre: 'John Enrique Capcha Arias', regcip: '75633'},
            {nombre: 'Roger Gomez Mamani', regcip: '92345'},
            {nombre: 'Angel Abrahan Franco Pineda', regcip: '79392'},
            {nombre: 'Juan Edgar Huanca Yujra', regcip: '61512'},
            {nombre: 'Elizabeth Gilt Condori', regcip: '94356'},
            {nombre: 'Raul Ponce Medina', regcip: '68702'},
            {nombre: 'Milder Zanabria Ortega', regcip: '85001'},
            {nombre: 'Reynaldo Condori Yucra', regcip: '85848'}
        ],
    }
});

decanospas = new Vue({
    el: '#decanospas',
    data: {
        decano: [
            {nombre: 'Juan Avila Peña', regcip: '1910',img: 'img/pastdecanos/juan-avila-peña.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Grimaldo Jurado Arce', regcip: '2072',img: 'img/pastdecanos/grimalo-jurado-arce.jpg', tipo: 'CIVIL'},
            {nombre: 'Luis Tarazona Espinoza', regcip: '2936',img: 'img/pastdecanos/alberto-barreda-cuentas.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Hugo Centurion Collao', regcip: '324',img: 'img/pastdecanos/alberto-barreda-cuentas.jpg', tipo: 'SANITARIO'},
            {nombre: 'Agustin Morales Espinoza', regcip: '5101',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Clovis Fernandez Saldaña', regcip: '1711',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Juan José Palomino Mora', regcip: '3754',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Mario Navarro Alfaro', regcip: '8926',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Edgar Rodriguez Pantigoso', regcip: '367',img: '', tipo: 'CIVIL'},
            {nombre: 'Julio Lira Cano', regcip: '9557',img: '', tipo: '-'},
            {nombre: 'Alberto Barreda Cuentas', regcip: '1040',img: 'img/pastdecanos/alberto-barreda-cuentas.jpg', tipo: '-'},
            {nombre: 'Eleodoro Aquize Jaen', regcip: '1615',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Flavio R. Paca Pantigoso', regcip: '9976',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Oscar B. Chaquilla Garrido', regcip: '9568',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Roberto F. Zegarra Ponce', regcip: '16999',img: '', tipo: 'GEÓLOGO'},
            {nombre: 'Romilio J. Quintanilla Chacon', regcip: '17642',img: '', tipo: 'INDUSTRIAL'},
            {nombre: 'Yony Ortiz Ortiz', regcip: '-',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Juan Luis M. Ortiz Valencia', regcip: '21203',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Gino Nels Najar Vizcarra', regcip: '20240',img: '', tipo: 'CIVIL'},
            {nombre: 'Guillermo Aquize Jaen', regcip: '6990',img: '', tipo: 'CIVIL'},
            {nombre: 'Juan R. Ponce Medina', regcip: '17663',img: '', tipo: 'AGRONOMO'},
            {nombre: 'Gilmer M. Sardon Sanchez', regcip: '33474',img: '', tipo: 'CIVIL'},
            {nombre: 'Oscar V. Viamonte Calla', regcip: '32730',img: '', tipo: 'CIVIL'},
            {nombre: 'Nicolas Luza Flores', regcip: '35871',img: '', tipo: 'CIVIL'},
            {nombre: 'Luis M. Terrazos Ungaro', regcip: '38229',img: '', tipo: 'MECÁNICO ELECTRICISTA'},
            {nombre: 'Jaime Puma Salazar', regcip: '62590',img: '', tipo: 'MECÁNICO ELECTRICISTAS, CIVIL'}
        ],
    }
});

