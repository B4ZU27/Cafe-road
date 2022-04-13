from django.db import models

# Create your models here.

class Integrantes(models.Model):
    nombre= models.CharField(max_length=30)
    codigo= models.CharField(max_length=15)
    carrera= models.CharField(max_length=6, verbose_name="Carrera(4 digitos)")

    def _str_(self):
        return self.nombre 
