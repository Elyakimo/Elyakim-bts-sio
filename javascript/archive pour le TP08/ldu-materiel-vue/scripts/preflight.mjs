const url = 'http://localhost:8080/api/materiels'

try {
  const response = await fetch(url)
  if (!response.ok) throw new Error(`HTTP ${response.status}`)
  const data = await response.json()

  if (!Array.isArray(data)) {
    throw new Error("La réponse GET /api/materiels n'est pas un tableau JSON")
  }

  console.log(`OK — API joignable : ${data.length} matériel(s)`)
  console.log('OK — contrat GET /api/materiels valide')
} catch (error) {
  console.error('ECHEC PREFLIGHT :', error.message)
  console.error('Vérifiez que Spring Boot fonctionne sur http://localhost:8080')
  process.exit(1)
}
