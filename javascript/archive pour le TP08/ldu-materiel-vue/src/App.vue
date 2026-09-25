<script setup>
import { onMounted, ref, computed } from 'vue'
import MaterielCard from './components/MaterielCard.vue'
import { obtenirMateriels } from './services/materielService.js';

const afficherFormulaire = ref(false)
const nouvelleDesignation = ref('')
const nouvelleCategorie = ref('')

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
const recherche = ref('')

const materielsFiltres = computed(() =>{
  let resultat

  if (filtre.value === 'tous'){
    resultat = materiels.value
  } else if (filtre.value === 'disponible'){
    resultat = materiels.value.filter(m => m.disponible === true)
  } else if (filtre.value === 'emprunte'){
    resultat = materiels.value.filter(m => m.disponible === false)
  }

  return resultat.filter(m => m.designation.toLowerCase().includes(recherche.value.toLowerCase()))
}
)

</script>

<template>
  <h1>LDU MATERIEL</h1>
  <p>{{ maValeurCalculee }}</p>
  <p>{{ materielDisponible }}</p>
  <p>{{ materielEmprunte }}</p>
  <button @click="filtre = 'tous'">Tous</button>
  <button @click="filtre = 'disponible'">Disponibles</button>
  <button @click="filtre = 'emprunte'">Empruntés</button>
  <input v-model="recherche" placeholder="Rechercher un matériel"/>
  <div v-if="afficherFormulaire">
    <input v-model="nouvelleDesignation" placeholder="Désignation"/>
    <input v-model="nouvelleCategorie" placeholder="Catégorie"/>
    <button @click="afficherFormulaire = !afficherFormulaire">Ajouter un matériel</button>
  </div>
  <div class="grid gap-4">
    <MaterielCard
      v-for="materiel in materielsFiltres"
      :key="materiel.id"
      :materiel="materiel"
    />

  </div>
</template>
