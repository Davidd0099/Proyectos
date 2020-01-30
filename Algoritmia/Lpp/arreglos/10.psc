Algoritmo numero
	definir a, i, x, n Como Entero
	Dimension i[5]
	Dimension a[5]
	Dimension x[5]
	Para n<-1 Hasta 5 Hacer
		Escribir "digite un numero: "
		leer i[n]
	fin para	
	
	Para n<-1 Hasta 5 Hacer
		Escribir "digite un numero: "
		Leer a[n]
	fin para	
	
	Para n<-1 Hasta 5 Hacer
		x[n]<-i[n]+a[n]
		Escribir i[n],"+",a[n],"=",x[n]
	fin para
FinAlgoritmo
