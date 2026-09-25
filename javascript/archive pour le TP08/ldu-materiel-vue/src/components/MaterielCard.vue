<script setup>
import { emprunter, restituer } from '../services/materielService';

const props = defineProps({
  materiel: Object,
})
async function basculerEtat() {
    let materielMisAJour
    if (props.materiel.disponible) {
        materielMisAJour = await emprunter(props.materiel.id)
    } else {
        materielMisAJour = await restituer(props.materiel.id)
    }
    if (materielMisAJour){
        Object.assign(props.materiel, materielMisAJour)
    }
}
</script>

<template>
  <div class="max-w-sm rounded overflow-hidden shadow-lg p-4">
    <h1 class="font-bold text-xl mb-2">{{ materiel.designation }}</h1>
    <p class="text-gray-700 text-base mb-2">
      {{ materiel.categorie }}
    </p>

    <span
      class="inline-block rounded-full px-3 py-1 text-sm font-semibold"
      :class="materiel?.disponible ? 'bg-green-200 text-green-800' : 'bg-red-200 text-red-800'"
    >
      {{ materiel?.disponible ? 'Disponible' : 'Emprunté' }}
    </span>

    <button
      class="block mt-2 text-sm underline"
      @click="basculerEtat"
    >
      changer l'état
    </button>

  </div>
</template>