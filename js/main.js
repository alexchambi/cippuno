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


menucarousel = new Vue({
    el: '#menucarousel',
    data: {
        menus: [
            {nombre: 'Tramite', icon: 'fa fa-book', link: 'tramite.php'},
            {nombre: 'Colegiacion', icon: 'fa fa-graduation-cap', link: 'colegiatura.php'},
            {nombre: 'Institucionales', icon: 'fa fa-university', link: 'institucionales.php'},
            {nombre: 'Buscar Colegiado', icon: 'fa fa-search', link: 'https://cipvirtual.cip.org.pe/sicecolegiacionweb/externo/consultaCol/'} 
        ],
    }
});

mostrarTramite = new Vue({
    el:"#tramite",
    data:{
        mostrar:true,
    }
});

mostrarBusqueda = new Vue({
    el:"#busqueda",
    data:{
        mostrar:true
    }
});

click = new Vue({
    el: "#docs",
    data: {
        clickleyes: 1,
        clicksimbolos: 0,
        clickestatutos: 0,
        clickreglamentos: 0,
        clickcodigos: 0,
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
            {nombre: 'Edgar Holguin Holguín', regcip: '58478',img: 'img/incognito.png'},
            {nombre: 'Rubén G. Apaza Cruz', regcip: '79196',img: 'img/incognito.png'},
            {nombre: 'Daniel Coyla Sánchez', regcip: '74409',img: 'img/incognito.png'},
            {nombre: 'Antolín Apaza Quispe', regcip: '88125',img: 'img/incognito.png'},
            {nombre: 'Henry Pizarro Viveros', regcip: '93299',img: 'img/incognito.png'},
            {nombre: 'Marco A. Martínez Olazábal', regcip: '74717',img: 'img/incognito.png'},
            {nombre: 'Nicomedes Quispe Mozo', regcip: '81000',img: 'img/incognito.png'},
            {nombre: 'Eulogio Rosas Zanabria Huisal', regcip: '10523',img: 'img/incognito.png'},
            {nombre: 'María Rodriguez Melo', regcip: '27676',img: 'img/incognito.png'},
            {nombre: 'Odelon Quispe Mamani', regcip: '65106',img: 'img/incognito.png'},
            {nombre: 'Braulio G. Chura Vilcanqui', regcip: '78416',img: 'img/incognito.png'},
            {nombre: 'Vilma Sarmiento Mamani', regcip: '63450',img: 'img/incognito.png'},
            {nombre: 'John Enrique Capcha Arias', regcip: '75633',img: 'img/incognito.png'},
            {nombre: 'Roger Gomez Mamani', regcip: '92345',img: 'img/incognito.png'},
            {nombre: 'Angel Abrahan Franco Pineda', regcip: '79392',img: 'img/incognito.png'},
            {nombre: 'Juan Edgar Huanca Yujra', regcip: '61512',img: 'img/incognito.png'},
            {nombre: 'Elizabeth Gilt Condori', regcip: '94356',img: 'img/incognito.png'},
            {nombre: 'Raul Ponce Medina', regcip: '68702',img: 'img/incognito.png'},
            {nombre: 'Milder Zanabria Ortega', regcip: '85001',img: 'img/incognito.png'},
            {nombre: 'Reynaldo Condori Yucra', regcip: '85848',img: 'img/incognito.png'}
        ],
    }
});

decanospas = new Vue({
    el: '#decanospas',
    data: {
        decano: [
            {nombre: 'Juan Avila Peña', regcip: '1910',img: 'img/pastdecanos/juan-avila-peña.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Grimaldo Jurado Arce', regcip: '2072',img: 'img/pastdecanos/grimalo-jurado-arce.jpg', tipo: 'CIVIL'},
            {nombre: 'Luis Tarazona Espinoza', regcip: '2936',img: 'img/pastdecanos/luis-tarazona-espinoza.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Hugo Centurion Collao', regcip: '324',img: 'img/pastdecanos/hugo-centurion-collao.jpg', tipo: 'SANITARIO'},
            {nombre: 'Agustin Morales Espinoza', regcip: '5101',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Clovis Fernandez Saldaña', regcip: '1711',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Juan José Palomino Mora', regcip: '3754',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Mario Navarro Alfaro', regcip: '8926',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Edgar Rodriguez Pantigoso', regcip: '367',img: 'img/pastdecanos/edgar-rodrigez-pantigoso.jpg', tipo: 'CIVIL'},
            {nombre: 'Julio Lira Cano', regcip: '9557',img: 'img/incognito.png', tipo: '-'},
            {nombre: 'Alberto Barreda Cuentas', regcip: '1040',img: 'img/pastdecanos/alberto-barreda-cuentas.jpg', tipo: '-'},
            {nombre: 'Eleodoro Aquize Jaen', regcip: '1615',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Flavio R. Paca Pantigoso', regcip: '9976',img: 'img/pastdecanos/paca-pantigoso-flabio-romeo.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Oscar B. Chaquilla Garrido', regcip: '9568',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Roberto F. Zegarra Ponce', regcip: '16999',img: 'img/pastdecanos/zegarra-ponce-roberto.jpg', tipo: 'GEÓLOGO'},
            {nombre: 'Romilio J. Quintanilla Chacon', regcip: '17642',img: 'img/pastdecanos/Quintinilla-chacon,-romilio-J.jpg', tipo: 'INDUSTRIAL'},
            {nombre: 'Yony Ortiz Ortiz', regcip: '-',img: 'img/pastdecanos/yony-ortiz-ortiz.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Juan Luis M. Ortiz Valencia', regcip: '21203',img: 'img/pastdecanos/ortiz-valencia-juan--luis-M.jpg', tipo: 'AGRONOMO'},
            {nombre: 'Gino Nels Najar Vizcarra', regcip: '20240',img: 'img/pastdecanos/najar-vizarra-gino-nls.jpg', tipo: 'CIVIL'},
            {nombre: 'Guillermo Aquize Jaen', regcip: '6990',img: 'img/pastdecanos/aquiz-jaen-guillermo.jpg', tipo: 'CIVIL'},
            {nombre: 'Juan R. Ponce Medina', regcip: '17663',img: 'img/incognito.png', tipo: 'AGRONOMO'},
            {nombre: 'Gilmer M. Sardon Sanchez', regcip: '33474',img: 'img/incognito.png', tipo: 'CIVIL'},
            {nombre: 'Oscar V. Viamonte Calla', regcip: '32730',img: 'img/pastdecanos/viamonte-cala-oscar-vicente.jpg', tipo: 'CIVIL'},
            {nombre: 'Nicolas Luza Flores', regcip: '35871',img: 'img/incognito.png', tipo: 'CIVIL'},
            {nombre: 'Luis M. Terrazos Ungaro', regcip: '38229',img: 'img/incognito.png', tipo: 'MECÁNICO ELECTRICISTA'},
            {nombre: 'Jaime Puma Salazar', regcip: '62590',img: 'img/pastdecanos/puma-salazar-jaime.jpg', tipo: 'MECÁNICO ELECTRICISTAS, CIVIL'}
        ],
    }
});

consejo = new Vue({
    el: '#consejo',
    data: {
        consejo: [
            {nombre: 'Norman Jesús Beltran Castañón', regcip: '77541',img: 'img/incognito.png', tipo: 'DECANO'},
            {nombre: 'Javier Mamani Paredes', regcip: '69105',img: 'img/incognito.png', tipo: 'VICEDECANO'},
            {nombre: 'Victor Miguel Flores Ramos', regcip: '83826',img: 'img/incognito.png', tipo: 'SECRETARIO'},
            {nombre: 'Willy Huallpa Vega', regcip: '83826',img: 'img/incognito.png', tipo: 'PRO SECRETARIO'},
            {nombre: 'Edelfre Flores Velásquez', regcip: '62333',img: 'img/incognito.png', tipo: 'TESORERO'},
            {nombre: 'María del Pilar Blanco Espezúa', regcip: '49688',img: 'img/incognito.png', tipo: 'PRO TESORERO'}
        ],
    }
});

