from django.http import HttpResponse
import datetime
from django.template import Template,Context, loader
from django.shortcuts import render
from gestionEquipo.models import Integrantes
class Persona(object):
    def __init__(self,nombre):
        self.nombre = nombre
        #self.apellido =apellido

def saludo(request): #primera vista
    p1=Persona("Ulises")
    #nombre = "juan"
    temas1=["plantillas", "Modelos", "Formularios"]
    #doc_externo=open("C:/Users/ulise/OneDrive/Documentos/Proyecto SMM3/Coffe road/Coffe_Road/Coffe_Road/Plantillas/plantilla_ejemplo.html")
    #plt=Template(doc_externo.read())
    #doc_externo.close()
    doc_externo=loader.get_template('plantilla_ejemplo.html')
    
    #ctx=Context({"nombre":p1.nombre,"temas":temas1})

    documento=doc_externo.render({"nombre":p1.nombre,"temas":temas1})
    return HttpResponse(documento)

def despedida(request): #segunda vista

    return HttpResponse("Gubai vatos")

def getfecha(request): #tercera vista

    fecha_actual=datetime.datetime.now()
    documento1="""<html>
    <body>
    <h1>
    Fecha y hora actuales %s
    </h1>
    </body>
    </html>""" %fecha_actual

    return HttpResponse(documento1)

def Calculo_edad(request,agno):

    edad=18
    periodo= agno-2019
    edadfutura=edad+periodo
    documento="""<html>
    <body>
    <h1>
    En el año %s tendras %s años
    </h1>
    </body>
    </html>""" %(agno,edadfutura)

    return HttpResponse(documento)

def busqueda_Integrante(request):

    return render(request, "Busqueda_integrantes.html")

def buscar(request):

    if request.GET["Codigo"]:
        #mensaje="Carrera buscada: %r" %request.GET["Codigo"]
        codigob = request.GET["id"]
        integrante = Integrantes.objects.filter(codigo_icontains=codigob)
        return render(request,"resultados_busqueda.html",{"Integrante":integrante, "query":codigob})


    else:
        mensaje= "No se ha introducido nada"

    return HttpResponse(mensaje)