from django.contrib import admin

from gestionEquipo.models import Integrantes
# Register your models here.

class IntegrantesAdmin(admin.ModelAdmin):
    list_display=("nombre","codigo","carrera")
    search_fields=("nombre","codigo","carrera")
admin.site.register(Integrantes,IntegrantesAdmin)