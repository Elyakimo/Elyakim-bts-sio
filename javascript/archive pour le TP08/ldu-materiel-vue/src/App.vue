<script setup>
import { onMounted, ref, computed } from 'vue'
import MaterielCard from './components/MaterielCard.vue'
import { obtenirMateriels } from './services/materielService.js';

const materiels = ref([])
onMounted(async () => {
  materiels.value = await obtenirMateriels()
})
const maValeurCalculee = computed(() =>{
  return materiels.value.length
})
const materielDisponible = computed(() =>{
  return materiels.value.filter(m => m.disponible === true).length
})
const materielEmprunte = computed(() =>{
  return materiels.value.filter(m => m.disponible === false).length
})
const filtre = ref('tous')

const materielsFiltres = computed(() =>{
  if (filtre.value === 'tous'){
    return materiels.value
  } else if (filtre.value === 'disponible'){
    return materiels.value.filter(m => m.disponible === true)
  } else if (filtre.value === 'emprunte'){
    return materiels.value.filter(m => m.disponible === false)
  }}
)

</script>

<template>
  <h1>LDU MATERIEL</h1>
  <p>{{ maValeurCalculee }}</p>
  <p>{{ materielDisponible }}</p>
  <p>{{ materielEmprunte }}</p>

  <div class="grid gap-4">
    <MaterielCard
      v-for="materiel in materielsFiltres"
      :key="materiel.id"
      :materiel="materiel"
    />
    <button @click="filtre = 'tous'">Tous</button>
    <button @click="filtre = 'disponible'">Disponibles</button>
    <button @click="filtre = 'emprunte'">Empruntés</button>
  </div>
</template>
