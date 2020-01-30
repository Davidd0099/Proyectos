Algoritmo numeros
	Definir i, n, a, x, s, r, m, d Como real
	Dimension i[10]
	
	s<-0
	r<-0
	m<-1
	d<-1
	Para n<-1 Hasta 10 Hacer
		Escribir "digite un numero: "
		Leer i[n]
		
		s<-s+i[n]
		r<-r-i[n]
		m<-m*i[n]
		d<-d/i[n]
		
	Fin Para
	Escribir "la suma de los 10 nuemros es ",s
	Escribir "La resta de los 10 numeros es ",r
	Escribir "la multiplicacion de los 10 numeros es ",m
	Escribir "La division de los 10 numeros es ",d
	
FinAlgoritmo
