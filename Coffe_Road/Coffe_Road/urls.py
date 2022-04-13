"""Coffe_Road URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/3.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path
from Coffe_Road.vistas import getfecha, saludo, despedida, getfecha, Calculo_edad, busqueda_Integrante,buscar

urlpatterns = [
    path('admin/', admin.site.urls),
    path('saludo/', saludo),
    path('bai/', despedida),
    path('fecha/', getfecha),
    path('Edad/<int:agno>', Calculo_edad),
    path('busqueda_integrantes/', busqueda_Integrante),
    path('buscar/', buscar),
    

]
